<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="50 Years Celebration Of FPI">
    <meta name="author" content="50 Years Celebration Of FPI">
    <meta name="keywords" content="50 Years Celebration Of FPI">

    <!-- Title Page-->
    <title>FPIAA</title>

    <!-- Icons font CSS-->

    <link href="{{asset('Front_End/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('Front_End/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('public/Front_End/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('Front_End/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('public/Front_End/css1/main.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/Front_End/css/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('public/Admin_Panel/css/toastr.css') }}" rel="stylesheet">
</head>

<body>
<div class="page-wrapper p-t-100 p-b-100 font-robo" style="background: #DBDEEF">
    <div class="wrapper wrapper--w680" style="max-width: 807px; background-image: url('{{asset('public/Front_End/images/50y.jpeg')}}');">
        
        <div class="card card-1 te" id="main_content" style="height: 2243px;">
            <div class="card-heading" style="padding: 25px 0px;">
                <div class="row">
                   <div class="col-md-3" id="logo" style="text-align: right;margin-left: 0px;width:32%"><img id="logo_img" style="width: 240px; margin-top: 6%;" src="{{ asset('public/Front_End/images/50y.jpeg') }}"></div>
                    <div class="col-md-8" id="heading_div" style="margin-top: 33px;width: 63.666667%"><h5 id="heading" style="margin-bottom: 2%;margin-left: 50px; font-weight:bold;color: blue;font-size: 25px;text-align: center;">50 Years Celebration Of Faridpur Polytechnic Institute</h5>
                        <p style="color:red; text-align: center;font-size: 20px;">Date: 14 October, 2022</p>
                            
                    </div>
                    
                </div>
            </div>

            <hr>
            <!-- <div class="footer" style="text-align: center">
                <img style="width: 80%;" src="{{ asset('public/Front_End/images/bg-head-04.jpg') }}">
            </div> -->

            <div class="row">
                <div class="card-body" style="padding-top: 10px;padding-bottom: 10px;">
                    <ul class="list-group">
  <li class="list-group-item" style="border: none;font-weight: bold;">Registration fee:</li>
  <li class="list-group-item" style="border: none;font-weight: bold;">1020/- (Batch 1966-2007 Up to passed out alumni)</li>
  <li class="list-group-item" style="border: none;font-weight: bold;">815/- (Batch 2008-2015 Up to passed out alumni)</li>
  <li class="list-group-item" style="border: none;font-weight: bold;">510/- (Batch 2016-2022 Up to passed out alumni)</li>
   <!--<li class="list-group-item" style="border: none;font-weight: bold;">1000/- (For Guest)</li>-->
   <li class="list-group-item" style="border: none;font-weight: bold;">510/- (For Driver)</li>
   <li class="list-group-item" style="font-weight: bold;color:red;font-size: 17px;">Helpline: <br/>
        
        <a href="tel:01713613444" style="color:red;"> 01713613444</a>, 
        <a href="tel:01711572724" style="color:red;"> 01711572724</a> <br/>
    <a href="tel:01712681551" style="color:red;">01712681551</a>, 
        <a href="tel:01711197912" style="color:red;">01711197912</a>   
   </li>
   <br/>
   <li class="list-group-item" style="font-weight: bold;color:red;font-size: 17px;">Registration Deadline: <br/>
        
        <a href="tel:01713613444" style="color:red;"> 30 September,2022</a>
        
   </li>
   
    <br/>
    
     <li class="list-group-item" style="font-weight: bold;color:red;font-size: 17px;">রেজিস্ট্রেশনের  নিয়মাবলী: <br/>  <br/>
        
        <p>রেজিস্ট্রেশন ফরম পূরন করার পূর্বে নিচে উল্লেখিত ৩টি নাম্বারের মধ্যে থেকে যেকোন একটি  নাম্বারে সেন্ড মানি বাধ্যতামূলক । তারপর ফর্ম পূরন করুন । ফর্মে উল্লিখিত payment type option এ আপনি যে নাম্বারে সেন্ড মানি সম্পন্ন করেছেন উক্ত নাম্বারটি সিলেক্ট করুন ।</p>
        
   </li>
    
 
</ul>
                </div>

</div>
<hr>

            <div class="row">
            	<div class="col-md-10" id="registration_form" style="margin-left: 75px;">
                <h3 class="text-center" style="margin-bottom: 35px;">Registration form</h3>
                <form action="{{ route('store.member') }}" method="POST" id="main" enctype="multipart/form-data">
                    @csrf
                   

  <div class="form-row">
    <div class="form-group col-md-6">
     <label for="exampleInputEmail1">Full Name <span style="color: red;">*</span></label>
                        <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}" id="exampleInputEmail1" placeholder="Full Name">
                        <span style="color: red;" class="text-danger">{{ $errors->first('full_name')  }}</span>
    </div>
    <div class="form-group col-md-6">
     <label for="exampleInputEmail1">Mobile Number <span style="color: red;">*</span></label>
                        <input type="text" name="mobile_number" class="form-control" value="{{ old('mobile_number') }}" id="exampleInputPassword1" placeholder="Mobile Number">
                        <span style="color: red;" class="text-danger">{{ $errors->first('mobile_number')  }}</span>
    </div>
  </div>


   <div class="form-row">
    <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="exampleInputPassword1" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
     <label for="exampleInputEmail1">Department <span style="color: red;">*</span></label>
                        <input type="text" name="department" class="form-control" value="{{ old('department') }}" id="exampleInputPassword1" placeholder="Department">
                        <span style="color: red;" class="text-danger">{{ $errors->first('department')  }}</span>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Passing Year <span style="color: red;">*</span></label>
                        <input type="text" id="fname" name="passing_year" class="form-control" value="{{ old('passing_year') }}" onkeyup="myFunction2()" placeholder="Passing Year">

         



                        <span style="color: red;" class="text-danger">{{ $errors->first('passing_year')  }}</span>
    </div>
    <div class="form-group col-md-6">
     <label for="exampleInputEmail1">Your T-Shirt Size <span style="color: red;">*</span></label>
     
     <select class="form-control" name="tshirt_size">
  <option>Select Size</option>
  <option value="SM" {{ old('tshirt_size') == 'SM' ? 'selected' : '' }} >SM</option>
  <option value="M" {{ old('tshirt_size') == 'M' ? 'selected' : '' }} >M</option>
  <option value="L" {{ old('tshirt_size') == 'L' ? 'selected' : '' }} >L</option>
  <option value="XL" {{ old('tshirt_size') == 'XL' ? 'selected' : '' }} >XL</option>
  <option value="XXL" {{ old('tshirt_size') == 'XXL' ? 'selected' : '' }} >XXL</option> 
    </select>
     
     <span style="color: red;" class="text-danger">{{ $errors->first('tshirt_size')  }}</span>
    </div>
  </div>

<div class="form-row">
    <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Home District <span style="color: red;">*</span></label>
                        <input type="text" name="home_district" class="form-control" value="{{ old('home_district') }}" id="exampleInputPassword1" placeholder="Home District">
                        <span style="color: red;" class="text-danger">{{ $errors->first('home_district')  }}</span>
    </div>
    <div class="form-group col-md-6">
     <label for="exampleInputEmail1">আপনি যে স্থান থেকে বাসে উঠতে চান <span style="color: red;">*</span></label>
                        <input type="text" name="dropping_point" class="form-control" value="{{ old('dropping_point') }}" id="exampleInputPassword1" placeholder="Bus Dropping Point/Own Car">
                        <span style="color: red;" class="text-danger">{{ $errors->first('dropping_point')  }}</span>
    </div>
  </div>

  <div class="form-row">
      <div class="form-group col-md-6">
         আপনার মোবাইল থেকে যে নাম্বারে টাকা পাঠাবেন সে    নাম্বারটি সিলেক্ট করুন ।
     <label for="exampleInputEmail1">Payment Type (Send Money)<span style="color: red;">*</span></label>
                        <select class="form-control" name="payment_type" id="payment_type">
  <option> নাম্বারটি সিলেক্ট করুন</option>
  <option value="Cash">Cash</option>
  <option value="BKash" {{ old('payment_type') == 'BKash' ? 'selected' : '' }} >BKash - 01915605971</option>
  <option value="Nagad" {{ old('payment_type') == 'Nagad' ? 'selected' : '' }} >Nagad - 01915605971</option>
  <option value="Rocket" {{ old('payment_type') == 'Rocket' ? 'selected' : '' }} >Rocket - 019156059716</option>
    </select>
                        <span style="color: red;" class="text-danger">{{ $errors->first('payment_type')  }}</span>
    </div>
    
    <div class="form-group col-md-6" id="acount_transaction">
    <label for="exampleInputEmail1">Account Transaction Number <span style="color: red;">*</span></label>
                        <input type="text" name="account_transaction_number" class="form-control" value="{{ old('account_transaction_number') }}" id="exampleInputPassword1" placeholder="Write Your Bikash/Nogod/Rocket No">
                        <span style="color: red;" class="text-danger">{{ $errors->first('account_transaction_number')  }}</span>
    </div>
    
    <!--<div class="form-group col-md-6" id="money_recite" style="display: none;">-->
    <!--<label for="exampleInputEmail1">Money Receipt<span style="color: red;">*</span></label>-->
    <!--                    <input type="text" name="account_transaction_number" class="form-control" value="{{ old('account_transaction_number') }}" id="exampleInputPassword1" placeholder="Write Your Money Receipt">-->
    <!--                    <span style="color: red;" class="text-danger">{{ $errors->first('account_transaction_number')  }}</span>-->
    <!--</div>-->
    
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="exampleInputEmail1"></label>

<!--<select class="form-control" name="guest_money" id="mySelect" onchange="myFunction()">-->
<!--  <option value="0">Select Guest</option>-->
<!--      <option value="1000" {{ old('guest_money') == '1000' ? 'selected' : '' }} >Geust One</option>-->
<!--  <option value="2000" {{ old('guest_money') == '2000' ? 'selected' : '' }} >Guest Two</option>-->
<!--  <option value="3000" {{ old('guest_money') == '3000' ? 'selected' : '' }} >Guest Three</option>-->
<!--    </select>-->




  <span style="color: red;" class="text-danger">{{ $errors->first('guest_money')  }}</span>
    </div>
   
    <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Driver</label>
                        <input type="checkbox" name="driver" value="on" id="myCheck" onclick="myFunction3()" @if(old('driver') == 'on') checked="checked" @endif/>
                        <span style="color: red;" class="text-danger">{{ $errors->first('paytransaction_id')  }}</span>
    </div>
  </div>
<div class="form-row">
    

 <div class="form-group col-md-12">
    <label for="exampleInputEmail1">Payable Amount </label>
            <input type="text" name="payable_amount" class="form-control" value="{{ old('payable_amount') }}" id="count" placeholder="Payable Amount" readonly="">

        <span style="color: red;" class="text-danger">{{ $errors->first('payable_amount')  }}</span>
</div>

</div>
<div class="form-row">
  <div class="form-group col-md-6">
   <button type="submit" class="btn btn-primary">Submit</button>
 </div>
 <div class="form-group col-md-6">
   <!-- Button trigger modal -->

 </div>
</div>
    </form>
</div>
                
            </div>

            <hr>

            <div class="row">
                <div class="card-body" style="padding-top: 10px;padding-bottom: 10px;">
                    <ul class="list-group">

<h4 style="margin-bottom: 10px;margin-left: 14px;">Payment Method (Personal)</h4>
  <li class="list-group-item" style="border: none;font-weight: bold;">BKash <img style="width: 20px;" src="{{ asset('public/Front_End/images/bikash.png') }}"> : 01915605971 </li>
 
  <li class="list-group-item" style="border: none;font-weight: bold;">Nagad <img style="width: 20px;" src="{{ asset('public/Front_End/images/nagad2.png') }}"> : 01915605971 </li>

  <li class="list-group-item" style="border: none;font-weight: bold;">Rocket <img style="width: 20px;" src="{{ asset('public/Front_End/images/rocket.png') }}"> : 019156059716 </li>
  
  <hr/>
  
  <li class="list-group-item" style="border: none;font-weight: bold;">Authorized Person For Payment Issue</li>
  <li class="list-group-item" style="border: none;font-weight: bold;">Md: Kamrul Hasan</li>
  <li class="list-group-item" style="border: none;font-weight: bold;">Contact: 01915605971</li>
  

</ul>
                </div>

            </div>

            <hr>
<p style="text-align: center;color:blue;font-weight:bold">An Initiative Of Faridpur Polytechnic Institute Alumni Association (FPIAA)</p>
           <div class="row">
               
               <div class="col-md-3" id="footer_top" style="text-align: right;">
                   
                   <img id="footer_logo" style="width: 100px; margin-top: 17%;" src="{{ asset('public/Front_End/images/logo.png') }}">
               </div>
               <div class="col-md-8" id="footer_bottom" style="text-align: left; padding: 24px; font-weight: bold;">
                   <p>Office: Faridpur Polytechnic Institute Campus, Baitulaman, Faridpur.</p>
                <p>Dhaka Office (Temp.): Kha-199/3 & 4, Venus Complex, Lebel-9, Middle Badda, Dhaka.</p>
                <p>Contact: 01673576409, 01711572724, 01713613444 <br/> E-mail: fpiaabd@gmail.com</p>
                <p>Website: <a href="https://fpiaabd.org">https://fpiaabd.org</a></p>
               </div>
           </div>


        </div>
    </div>
</div>


<!-- Jquery JS-->
<script src="{{asset('public/Front_End/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/Front_End/js/bootstrap.min.js')}}"></script>
<!-- Vendor JS-->
<script src="{{asset('public/Front_End/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('public/Front_End/vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('public/Front_End/vendor/datepicker/daterangepicker.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('public/Front_End/js/global.js')}}"></script>
<script src="{{asset('public/Admin_Panel/js/toastr.js')}}"></script>

<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true,
    "timeOut": "80000",
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>

<script type="text/javascript">

let counts;
counts = document.getElementById("count");

function myFunction() {
  counts.value = 0;


  var x = document.getElementById("fname");
  var fir = Number(x.value);

  if (fir >= 1966 && fir <= 2007) {
    c =   Number(counts.value)
    c += 1000
    counts.value = c
  } else if (fir >= 2008 && fir <= 2015){
    c =   Number(counts.value)
    c += 800
    counts.value = c
  } else if(fir >= 2016 && fir <= 2022){
    c =   Number(counts.value)
    c += 500
    counts.value = c
  } else {

  }


  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    c =   Number(counts.value)
    c += 500
    counts.value = c
  } 


  var x = document.getElementById("mySelect").value;
  x = Number(x);
  var ct = Number(counts.value);
  var result = x + ct;
  counts.value = result
}


function myFunction2() {


  counts.value = 0;

//   var x = document.getElementById("mySelect").value;
//   x = Number(x);
//   var ct = Number(counts.value);
//   var result = x + ct;
//   counts.value = result

  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    c =   Number(counts.value)
    c += 510
    counts.value = c
  } 

  var x = document.getElementById("fname");
  var fir = Number(x.value);

  if (fir >= 1966 && fir <= 2007) {
    c =   Number(counts.value)
    c += 1020
    counts.value = c
  } else if (fir >= 2008 && fir <= 2015){
    c =   Number(counts.value)
    c += 815
    counts.value = c
  } else if(fir >= 2016 && fir <= 2022){
    c =   Number(counts.value)
    c += 510
    counts.value = c
  } else {

  }
  
}


function myFunction3() {
	
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    c =   Number(counts.value)
    c += 510
    counts.value = c
  } else {
    c =   Number(counts.value)
    c -= 510
    counts.value = c
  }
}

</script>


// <script type="text/javascript">
// // Paid Status

// 	$(document).on('change','#payment_type', function(){
// 		var type_id = $(this).val();
// 		if (type_id == 'Cash') {
// 			$('#money_recite').show();
// 			$('#acount_transaction').hide();
// 		} else {
// 			$('#money_recite').hide();
// 			$('#acount_transaction').show();
// 		}
// 	});
// </script>



</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
