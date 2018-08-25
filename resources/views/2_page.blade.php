@extends('welcome')
@section('style')

@endsection
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
            <div class="col green">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p> Your home</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p> Materials</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p> Extras</p>
                    </div>
                </div>
            </div>  <!-- end header -->
             <div class="w-100"></div> 
            <div class="col-3 p"></div>
            <div class="col-9 p">
                <h2>Let start with some basic infotmation</h2> <br>
                <h3>At the end of a quote you will get a price for cleaning</h3>
            </div>
<!-- Cleaning frequency -->
            <div class="col-3 p">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                            <p>Cleaning frequency</p>
                    </div>
                </div>
            </div>
            <div class="col-9 p">
<!-- form start            	 -->
            <form action="" method="post" enctype="multipart/form-data" id="upload_form">                    {{ csrf_field() }}
                <h4>How would you luke us to come?</h4>
                <p>You can always change frequencies, reschedule, ar save cleaning for later!  </p>
                <div class="row justify-content-around " id='frequency_div'>
                    <input id="id1" type="radio" name="frequency" value="once"/>
                    <label class="radio" for="id1">Once</label>
                    <input id="id2" type="radio" name="frequency" value="weekly"/>
                    <label class="radio" for="id2">Weekly</label>
                    <input id="id3" type="radio" name="frequency" value="biweekly"/>
                    <label class="radio" for="id3">Biweekly</label>
                    <input id="id4" type="radio" name="frequency" value="monthly"/>
                    <label class="radio" for="id4">Monthly</label>
                </div>
            </div>
<!-- Cleaning date -->
            <div class="col-3 p">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p>Cleaning date</p>
                    </div>
                </div>
            </div>
            <div class="col-9 p">
                <h2>When will you need us?</h2>
                <div class="row justify-content-around" id="date_div" style="margin-bottom: 20px">
                    <input id="id5" type="radio" name="date" value="next_available"/>
                    <label class="radio" for="id5">Next available</label>
                    <input id="id6" type="radio" name="date" value="this_week"/>
                    <label class="radio" for="id6">This week</label>
                    <input id="id7" type="radio" name="date" value="next_week"/>
                    <label class="radio" for="id7">Next week</label>
                    <input id="id8" type="radio" name="date" value="this_month"/>
                    <label class="radio" for="id8">This month</label>
                    <input id="id9" type="radio" name="date" value="i_am_flexible"/>
                    <label class="radio" for="id9" style="">I am flexible</label>

                </div>
                <input id="id10" type="radio" name="date" value="just_need_a_quote"/>
                <label class="radio" for="id10">Just need a quote</label>
            </div>
<!-- Personal Info -->
            <div class="col-3 p">
                       <p>Personal Info</p> 
            </div>
            <div class="col-9 p">
               

                    <div class="form-row">
                        <div class=" col-6">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName">
                        </div>
                        <div class="col-6">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-8">
                            <label for="streetAddress">Street address</label>
                            <input type="text" class="form-control" id="streetAddress" name="streetAddress">
                        </div>
                        <div class="col">
                            <label for="apt">Apt #(optional)</label>
                            <input type="text" class="form-control" id="apt" name="apt">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-8">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                        <div class="col">
                            <label for="homeSquare">Home Square Gootage</label>
                            <input type="text" class="form-control" id="homeSquare" name="homeSquare" placeholder="e.g. 1800">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-8">
                            <label for="mobPhon">Mobile phone</label>
                            <input type="text" class="form-control" id="mobPhon" name="mobPhon">
                        </div>
                        <div class="col">
                            <label for="dropDown">How did you hear about us? (Optional)</label>
                            <div class="dropdown">
                                <button id="dropDown" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select a referal
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <input id="adv1" type="radio" name="advertis" value="promotion"/>
		                            <label class="radio" for="adv1">Promotion</label>
		                            <br>
		                            <input id="adv2" type="radio" name="advertis" value="telegram"/>
		                            <label class="radio" for="adv2">Telegram</label>
		                            <br>
		                            <input id="adv3" type="radio" name="advertis" value="face Book"/>
		                            <label class="radio" for="adv3">Face Book</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="dropDown_hidden" name="dropDown_hidden" value="none">
                    
            </div>
			<div class="w-100"></div>
<!-- Living creatures -->
            <div class="col-3 p">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p>Living creatures</p>
                    </div>
                </div>
            </div>
            <div class="col-9 p">
                <div class="col-12 p-4">
                <h4>Have any dogs or cats?</h4>
                    <div class="row justify-content-around" id='pet_div'>
                            <input id="pet1" type="radio" name="pet" value="none"/>
                            <label class="radio" for="pet1">None</label>
                            <input id="pet2" type="radio" name="pet" value="dog"/>
                            <label class="radio" for="pet2">Dog</label>
                            <input id="pet3" type="radio" name="pet" value="cat"/>
                            <label class="radio" for="pet3">Cat</label>
                            <input id="pet4" type="radio" name="pet" value="both"/>
                            <label class="radio" for="pet4">Both</label>
                        </div>
                </div>
                <div class="w-100 clearfix" ></div>
                <div class="col-12 p-4">
                    <h4>How many adults are reside at your location</h4>
                    <div class="row justify-content-around" id='adult_div'>
                        <input id="adult1" type="radio" name="adult" value="none"/>
                        <label class="radio" for="adult1">None</label>
                        <input id="adult2" type="radio" name="adult" value="1-2"/>
                        <label class="radio" for="adult2">1-2</label>
                        <input id="adult3" type="radio" name="adult" value="3-4"/>
                        <label class="radio" for="adult3">3-4</label>
                        <input id="adult4" type="radio" name="adult" value="5_and_more"/>
                        <label class="radio" for="adult4">5 and more</label>
                    </div>

                </div>
                <div class="w-100 clearfix " ></div>
                <div class="col-12 p-4">
                    <h4>How many children</h4>
                    <div class="row justify-content-around" id='children_div'>
                   		<input id="children1" type="radio" name="children" value="none"/>
                        <label class="radio" for="children1">None</label>
                        <input id="children2" type="radio" name="children" value="1"/>
                        <label class="radio" for="children2">1</label>
                        <input id="children3" type="radio" name="children" value="2"/>
                        <label class="radio" for="children3">2</label>
                        <input id="children4" type="radio" name="children" value="3"/>
                        <label class="radio" for="children4">3</label>
                    </div>
                </div>
            </div>
<!-- Home cleanliness -->
            <div class="col-3 p">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p>Home cleanliness</p>
                    </div>
                </div>
            </div>
            <div class="col-9 p">
                <h2>How wood you rate your current home cleanliness </h2>
                    <div class="col">
                        <div class="lef">Very dirty</div>
                        <div class="rig">Sparkling clean</div>
                    </div>
               <div class="progress_bar">
                   <div class="btn-group mr-2" role="group" aria-label="First group" id='dirty_div'>
                        <input id="idirty1" type="radio" name="dirty" value="1"/>
                        <label class="radio progress_label_first " for="idirty1">1</label>
                        <input id="idirty2" type="radio" name="dirty" value="2"/>
                        <label class="radio" for="idirty2">2</label>
                        <input id="idirty3" type="radio" name="dirty" value="3"/>
                        <label class="radio" for="idirty3">3</label>
                        <input id="idirty4" type="radio" name="dirty" value="4"/>
                        <label class="radio" for="idirty4">4</label>
                        <input id="idirty5" type="radio" name="dirty" value="5"/>
                        <label class="radio" for="idirty5">5</label>
                        <input id="idirty6" type="radio" name="dirty" value="6"/>
                        <label class="radio" for="idirty6">6</label>
                        <input id="idirty7" type="radio" name="dirty" value="7"/>
                        <label class="radio" for="idirty7">7</label>
                        <input id="idirty8" type="radio" name="dirty" value="8"/>
                        <label class="radio" for="idirty8">8</label>
                        <input id="idirty9" type="radio" name="dirty" value="9"/>
                        <label class="radio" for="idirty9">9</label>
                        <input id="idirty10" type="radio" name="dirty" value="10"/>
                        <label class="radio progress_label_last" for="idirty10">10</label>
                    </div>
                </div>
            </div>
<!-- Cleaning before -->
			<div class="col-3 p">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        <p>Cleaning before</p>
                    </div>
                </div>
            </div>
            <div class="col-9 p">
                <h2>Did you had a professional cleaning in past 2 month</h2>
                <div class="row justify-content-around" id='chek_div'>
                    <div>
                        <input id="chek1" type="radio" name="chek" value="1"/>
                        <label class="radio" for="chek1" >Yes</label>
                    </div>
                    <div>
	 					<input id="chek2" type="radio" name="chek" value="0"/>
	                    <label class="radio" for="chek2" >No</label>
                    </div>
                </div>
            </div>
<!-- Select a file             -->
 			<div class="col-3 p">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        
                    </div>
                </div>
            </div>
			<div class="col-9 p">
                <h2>Do you have any photos of your home? (optional)</h2>
                <p>You can upload more then one photo at a time. Up to 8 photos in total</p>
                <div class="col">
                    <div>
                        <input type="file" name="logo" class="form-control" id="catagry_logo">
                        <label for="catagry_logo">Select a file</label>
                        <p style="display: inline-block; padding-left: 10px;">jpg, png only, maximum file size -5 MB</p>
                    </div>
                    <div class="row justify-content-center " >
                        <button type="submit" class="btn btn-success " id="page2second">3 Steps Left</button>
                    </div>
                    <div class="for_img" id="for_img">

                </div>
        </form>
    </div> <!-- // end aling -->
</div>  <!-- //end container -->
@endsection
@section('script')
<<!-- script>
    jQuery(document).ready(function(){
        jQuery('#btn33').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                }
            });
            jQuery.ajax({
                url: "{{ url('/getAjax') }}",
                data:new FormData($("#upload_form")[0]),
                dataType:'json',
                type:'post',
                processData: false,
                contentType: false,
                success: function(result){
                    var img = document.createElement('img');
                    img.setAttribute('src' , result.success);
                    img.classList.add("my_img");
                    var for_img = document.getElementById('for_img');
                    for_img.appendChild(img);
                    console.log(result);
                }});
        });
    });
</script> -->
@endsection