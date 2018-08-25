<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User, Order, Calculate, Extra};

class Main extends Controller
{
    private $user;

    private $order;

    public function p1PersonalInfo()
    {
        return view('1_page');
    }

    public function get1PersonalInfo(Request $request)
    {
        $validatedData = $request->validate([
            'inp_email' => 'required|email',
            'bedrooms' => 'required|numeric',
            'bathrooms' => 'required|numeric',
            'zip' => 'required|min:4|numeric'
        ]);
        $users = new User;
        $user = $users->check($request['inp_email']);
        $this->user = $user;
        $order = new Order();
        $order->fill(
            $request->all()
        );
        $user->orders()->save($order);
        session(['order_id' => $order->id]);
        return redirect('/your-home');
    }

    public function p2YourHome()
    {
        return view('2_page');
    }

    public function get2YourHome(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'streetAddress' => 'required|min:4|string',
            'apt' => 'nullable|numeric',
            'city' => 'required|string',
            'homeSquare' => 'required|numeric',
            'mobPhon' => 'required|string|max:15',
            'frequency' => 'required|string',
            'date' => 'required|string',
            'advertis' => 'required|string',
            'pet' => 'required|string',
            'adult' => 'required|string',
            'children' => 'required|string',
            'dirty' => 'required|numeric',
            'chek' => 'required|numeric',
            'file' => 'mimes:jpeg,png|max:5170',
        ]);
        $order = Order::getFromSession();
        $order->updateHome($request, $order);
        return redirect('/materials');
    }

     public function p3Materials()
    {
        return view('3_page');
    }

    public function get3Materials(Request $request)
    {
          $validatedData = $request->validate([
            'flooring' => 'required|array',
            'countertop' => 'required|array',
            'steel' => 'required|numeric',
            'stove' => 'nullable|numeric',
            'door' => 'required|numeric',
            'mildew' => 'required|numeric',
            'attention' => 'nullable|string|max:900',
            'more' => 'nullable|string|max:900'
        ]);
        $order = Order::getFromSession();
        $order->updateMaterials($request, $order);
        return redirect('/extras');
    }

     public function p4Extras()
    {
        $order = Order::getFromSession();
        $total = Calculate::init($order)->getTotalPtice();
        return view('4_page', compact('total', 'order'));
    }

    public function get4Extras(Request $request)
    {
        // dd($request->all());

        $order = Order::getFromSession();
        if ($request['frequency']) {
            $order->updateFrequency($request['frequency'], $order);
        }
        $extras = $order->saveExtras($request['extras'] ?? 'no_data', $order);
        $order = Order::getFromSession();
        $total = Calculate::init($order)->getTotalPtice($extras ?? null);
        // dd($extras);
        return view('4_page', compact('total', 'order', 'extras'));
    }
}
