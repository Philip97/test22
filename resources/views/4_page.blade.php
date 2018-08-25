@extends('welcome')

@section('content')

<div class="container">
    <div class="my_header row justify-content-center top-web">
        <div class="col was">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <p><a href="/">Personal info</a></p>
                </div>
            </div>
        </div>
        <div class="col was">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <p> <a href="/your-home">Your home</a></p>
                </div>
            </div>
        </div>
        <div class="col was">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <p> <a href="/materials">Materials</a></p>
                </div>
            </div>
        </div>
        <div class="col green">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <p> Extras</p>
                </div>
            </div>
        </div>  <!-- end header -->
    </div>
</div>
<div class="container">
    <div class="row justify-content-between">
        <div class="col-7">
            <div class="col-12">
                <form action="" method="post">
                {{ csrf_field() }}
                <h3 style="margin: 45px 0 15px ">Extras</h3>
                <p>You can choose any of these items to be cleaned every 8 weeks</p>
                <div class="row justify-content-around">
                    <span class='extras_span'>
                        <input type="checkbox" id="extras1" name="extras[]" value="inside_fridge"
                        @if($extras['inside_fridge'] ?? false)
                            checked="checked"
                        @endif
                        >
                        <label for="extras1"> </label>
                        Inside Fridge
                    </span>
                    <span class='extras_span'>
                        <input type="checkbox" id="extras2" name="extras[]" value="inside_oven"
                        @if($extras['inside_oven'] ?? false)
                            checked="checked"
                        @endif
                        >
                        <label for="extras2"></label>
                         Inside oven
                    </span>
                    <span class='extras_span'>
                        <input type="checkbox" id="extras3" name="extras[]" value="garage_swept"
                        @if($extras['garage_swept'] ?? false)
                            checked="checked"
                        @endif
                        >
                        <label for="extras3"></label>
                        Garage Swept
                    </span>
                    <span class='extras_span'>
                        <input type="checkbox" id="extras4" name="extras[]" value="inside_cabinets"
                        @if($extras['inside_cabinets'] ?? false)
                            checked="checked"
                        @endif
                        >
                        <label for="extras4"></label>
                        Inside Cabinets
                    </span>
                </div>
            </div>
            <hr>
            <div class="col-9">
               
                <div class="row justify-content-around">
                    <span class='extras_span' style="width: 83px;">
                        <input type="checkbox" id="extras5" name="extras[]" value="laundry_wash_s_dry"
                        @if($extras['laundry_wash_s_dry'] ?? false)
                            checked="checked"
                        @endif
                        >
                        <label for="extras5"></label>
                        Laundry Wash & Dry
                    </span>
                    <span class='extras_span' style="width: 75px;">
                        <input type="checkbox" id="extras6" name="extras[]" value="bed_sheet_change"
                        @if($extras['bed_sheet_change'] ?? false)
                            checked="checked"
                        @endif
                        >
                        <label for="extras6"></label>
                        Bed sheet Change
                    </span>
                    <span class='extras_span'>
                        <input type="checkbox" id="extras7" name="extras[]" value="blinds_cleaning"
                        @if($extras['blinds_cleaning'] ?? false)
                            checked="checked"
                        @endif
                        >
                        <label for="extras7"></label>
                        Blinds Cleaning
                    </span>
                </div>
            </div><hr>
            
        </div>
        <div class="col-3" id='my_side_bar'>
            <p class="price_top">Clining price</p>
            <div class="col-12" style="text-align: center;">
                <p>Weekly Cleaning Plan
                    <br>
                     This week
                </p>
                <p class="price_middl">
                   {{ ($order->bedrooms) }} - bed,
                   {{ ($order->bathrooms) }} - bath - 
                   {{ ($order->homeSquare) }} sq. ft.
                 
                </p>
            </div>
            <div class="col-12" style="text-align: center;">
                <div class="col-12">
                    <p>Per cleaning ${{$total[0]}}</p>
                </div>
                 <div class="col-12">
                    <p>Initial cleaning ${{$total[0]}}</p></p>
                </div>
                 <div class="col-12">
                    <p class="price_bottom">Coupon $0.00</p>
                </div>
            <div class="col-12">
                <p style="display: inline-block;">TODAY'S TOTAL &nbsp</p>
                <p class="blu_col" style="display: inline-block;">${{$total[0]}}</p>
            </div>
            </div>
        </div>
        <div class="col-12">
                <p style="margin: 0px">Confirm your cleaning frequency</p>
                <div class="inl_block
                @if($order->frequency == 'weekly')
                    blu_col
                @endif
                ">
                    <input type="submit" name="frequency" value="weekly" class="last_btn
                    @if($order->frequency == 'weekly')
                        blu_col2
                    @endif
                     ">
                    <p class="inl_block">${{($total[1])}} per cleanig</p>
                </div>
                <div class="inl_block
                @if($order->frequency == 'biweekly')
                    blu_col
                @endif
                ">
                    <input type="submit" name="frequency" value="biweekly" class="last_btn
                    @if($order->frequency == 'biweekly')
                        blu_col2
                    @endif
                ">
                    <p class="inl_block">${{($total[2])}} per cleanig</p>
                </div>
                <div class="inl_block 
                @if ($order->frequency == 'monthly')
                        blu_col
                    @endif
                ">
                    <input type="submit" name="frequency" value="monthly" class="last_btn
                    @if ($order->frequency == 'monthly')
                        blu_col2
                    @endif
                    ">
                    <p class="inl_block">${{($total[3])}} per cleanig</p>
                </div>
                </form>
            </div>
    </div>
</div>
@endsection
