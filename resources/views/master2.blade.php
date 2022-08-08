<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>FPIAA</title>

    <!-- Icons font CSS-->

    <link href="{{asset('public/Front_End/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/Front_End/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('public/Front_End/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/Front_End/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('public/Front_End/css1/main.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/Front_End/css/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('public/Admin_Panel/css/toastr.css') }}" rel="stylesheet">
</head>

<body>
<div class="page-wrapper p-t-100 p-b-100 font-robo" style="background: #DBDEEF">
    <div class="wrapper wrapper--w680" style="max-width: 807px;">
        <div class="card card-1">
            <div class="card-heading">
                <div class="Top" style="padding: 20px 90px;border-bottom: 2px solid #cbcbcb;" >
                <div class="row row-space">
                    <div class="col-1">

                            <img style="width: 100px; margin-top: 6%;" src="{{ asset('public/Front_End/images/logo.png') }}">

                    </div>
                    <div class="col-2" style="width: 67%;margin-top: 4%;">
<h5 style="margin-bottom: 2%; font-weight:bold;">FARIDPUR POLYTECHNIC INSTITUTE ALUMNI ASSOCIATION</h5>
                            <p>Contact: 01673576409, 01711572724, 01713613444, E-mail: fpiaabd@gmail.com</p>

                    </div>
                </div>
                </div>

{{--                <img style="width: 100%;" src="{{ asset('public/Front_End/images/bg-head-02.jpg') }}">--}}
            </div>

            <!-- <div class="footer" style="text-align: center">
                <img style="width: 80%;" src="{{ asset('public/Front_End/images/bg-head-04.jpg') }}">
            </div> -->

            <div class="card-body">
                <!-- <h2 class="title" style="text-align: center">Membership Application Form</h2> -->
                <form action="{{ route('store.member') }}" method="POST" id="main" enctype="multipart/form-data">
                    @csrf
                   
                        
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name <span style="color: red;">*</span></label>
                        <input type="text" name="full_name" class="form-control" value="{{ old('full_name') }}" id="exampleInputEmail1" placeholder="Full Name">
                        <span style="color: red;" class="text-danger">{{ $errors->first('full_name')  }}</span>
                      </div>
                      <div class="form-group">
                       <label for="exampleInputEmail1">Mobile Number <span style="color: red;">*</span></label>
                        <input type="text" name="mobile_number" class="form-control" value="{{ old('mobile_number') }}" id="exampleInputPassword1" placeholder="Mobile Number">
                        <span style="color: red;" class="text-danger">{{ $errors->first('mobile_number')  }}</span>
                      </div>
                       <div class="form-group">
                       <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="exampleInputPassword1" placeholder="Email">
                        <span style="color: red;" class="text-danger">{{ $errors->first('email')  }}</span>
                      </div>
                      
                       <div class="form-group">
                       <label for="exampleInputEmail1">Department <span style="color: red;">*</span></label>
                        <input type="text" name="department" class="form-control" value="{{ old('department') }}" id="exampleInputPassword1" placeholder="Department">
                        <span style="color: red;" class="text-danger">{{ $errors->first('department')  }}</span>
                      </div>
                       <div class="form-group">
                       <label for="exampleInputEmail1">Passing Year <span style="color: red;">*</span></label>
                        <input type="text" name="passing_year" class="form-control" value="{{ old('passing_year') }}" id="exampleInputPassword1" placeholder="Passing Year">
                        <span style="color: red;" class="text-danger">{{ $errors->first('passing_year')  }}</span>
                      </div>
                       <div class="form-group">
                       <label for="exampleInputEmail1">Your T-Shirt Size <span style="color: red;">*</span></label>
                        <input type="text" name="tshirt_size" class="form-control" value="{{ old('tshirt_size') }}" id="exampleInputPassword1" placeholder="Your T-Shirt Size">
                        <span style="color: red;" class="text-danger">{{ $errors->first('tshirt_size')  }}</span>
                      </div>
                       <div class="form-group">
                       <label for="exampleInputEmail1">Payment Transaction Id <span style="color: red;">*</span></label>
                        <input type="text" name="paytransaction_id" class="form-control" value="{{ old('paytransaction_id') }}" id="exampleInputPassword1" placeholder="Payment Transaction Id">
                        <span style="color: red;" class="text-danger">{{ $errors->first('paytransaction_id')  }}</span>
                      </div>                      
                      <button type="submit" class="btn btn-primary">Submit</button>                                        
                   
                </form>
            </div>

            <div class="footer" style="text-align: center; padding: 30px; font-weight: bold;">
                <p>Office: Faridpur Polytechnic Institute Campus, Baitulaman, Faridpur.</p>
                <p>Dhaka Office (Temp.): Kha-199/3 & 4, Venus Complex, Lebel-9, Middle Badda, Dhaka.</p>
            </div>


        </div>
    </div>
</div>


<!-- Jquery JS-->
<script src="{{asset('public/Front_End/vendor/jquery/jquery.min.js')}}"></script>
<!-- Vendor JS-->
<script src="{{asset('public/Front_End/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('public/Front_End/vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('public/Front_End/vendor/datepicker/daterangepicker.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('public/Front_End/js/global.js')}}"></script>
<script src="{{asset('public/Admin_Panel/js/toastr.js')}}"></script>

<script type="text/javascript">
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif

</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
