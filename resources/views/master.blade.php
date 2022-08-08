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
    <link href="{{asset('public/Front_End/css/main.css')}}" rel="stylesheet" media="all">
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

            <div class="footer" style="text-align: center">
                <img style="width: 80%;" src="{{ asset('public/Front_End/images/bg-head-04.jpg') }}">
            </div>

            <div class="card-body">
                <h2 class="title" style="text-align: center">Membership Application Form</h2>
                <form action="{{ route('store.data') }}" method="POST" id="main" enctype="multipart/form-data">
                    @csrf
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Name In English (Block Letter)" name="NameInEnglish" value="{{ old('NameInEnglish') }}">
                                <span style="color: red;" class="text-danger">{{ $errors->first('NameInEnglish')  }}</span>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Name In Bangla" name="NameInBangla" value="{{ old('NameInBangla') }}">

                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Father's Name" name="FathersName" value="{{ old('FathersName') }}">
                                <span style="color: red;" class="text-danger">{{ $errors->first('FathersName')  }}</span>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Mother's Name" name="MothersName" value="{{ old('MothersName') }}">

                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="Spouse Name (Optional)" name="SpouseName" value="{{ old('SpouseName') }}">
                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                               Date Of Birth: <input class="input--style-1" type="text" placeholder="dd/mm/year" name="DOB" value="{{ old('DOB') }}">
                                <span style="color: red;" class="text-danger">{{ $errors->first('DOB')  }}</span>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Home District" name="HomeDistrict" value="{{ old('HomeDistrict') }}">
                                <span style="color: red;" class="text-danger">{{ $errors->first('HomeDistrict')  }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group" style="border-bottom: 0px;">
                                <textarea style="border: 2px solid #cbcbcb;" class="input--style-1" name="PermanentAddress" rows="3" cols="36" placeholder="Permanent Address">{{ old('PermanentAddress') }}</textarea>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group" style="border-bottom: 0px;">
                                <textarea style="border: 2px solid #cbcbcb;" class="input--style-1" name="PresentAddress" rows="3" cols="36" placeholder="Present Address">{{ old('PresentAddress') }}</textarea>
                                <span style="color: red;" class="text-danger">{{ $errors->first('PresentAddress')  }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group">
                        <input class="input--style-1" type="text" placeholder="NID (Optional)" name="NID" value="{{ old('NID') }}">
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Phone Number (Optional)" name="PhoneNumber" value="{{ old('PhoneNumber') }}">
                               
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Cell Number" name="CellNumber" value="{{ old('CellNumber') }}">
                                 <span style="color: red;" class="text-danger">{{ $errors->first('CellNumber')  }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Email (Optional)" name="Email" value="{{ old('Email') }}">
{{--                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>--}}
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search"> 
{{--                                    <select name="BloodGroup" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">--}}
{{--                                        <option disabled="disabled" selected="selected">Blood Group</option>--}}
{{--                                        <option value="A+">A+</option>--}}
{{--                                        <option value="A-">A-</option>--}}
{{--                                        <option value="B+">B+</option>--}}
{{--                                        <option value="B-">B-</option>--}}
{{--                                        <option value="O+">O+</option>--}}
{{--                                        <option value="O-">O-</option>--}}
{{--                                        <option value="AB+">AB+</option>--}}
{{--                                        <option value="AB-">AB-</option>--}}
{{--                                    </select>--}}
                                    
                                    <select name="BloodGroup" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                        <option disabled="disabled" selected="selected">Blood Group</option>
                                        <option value="A+"  {{ old('BloodGroup') == 'A+' ? 'selected' : '' }}>
                                            A+
                                        </option>
                                        <option value="A-"  {{ old('BloodGroup') == 'A-' ? 'selected' : '' }}>
                                            A-
                                        </option>
                                        <option value="B+"  {{ old('BloodGroup') == 'B+' ? 'selected' : '' }}>
                                            B+
                                        </option>
                                        <option value="B-"  {{ old('BloodGroup') == 'B-' ? 'selected' : '' }}>
                                            B-
                                        </option>
                                        <option value="O+"  {{ old('BloodGroup') == 'O+' ? 'selected' : '' }}>
                                            O+
                                        </option>
                                        <option value="O-"  {{ old('BloodGroup') == 'O-' ? 'selected' : '' }}>
                                            O-
                                        </option>
                                        <option value="AB+"  {{ old('BloodGroup') == 'AB+' ? 'selected' : '' }}>
                                            AB+
                                        </option>
                                        <option value="AB-"  {{ old('BloodGroup') == 'AB-' ? 'selected' : '' }}>
                                            AB-
                                        </option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="Religion" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                        <option disabled="disabled" selected="selected">Religion</option>
{{--                                        <option value="Islam">Islam</option>--}}
{{--                                        <option value="Hinduism">Hinduism</option>--}}
{{--                                        <option value="Christianity">Christianity</option>--}}
{{--                                        <option value="Buddhism">Buddhism</option>--}}

                                        <option value="Islam"  {{ old('Religion') == 'Islam' ? 'selected' : '' }}>
                                            Islam
                                        </option>
                                        <option value="Hinduism"  {{ old('Religion') == 'Hinduism' ? 'selected' : '' }}>
                                            Hinduism
                                        </option>
                                        <option value="Christianity"  {{ old('Religion') == 'Christianity' ? 'selected' : '' }}>
                                            Christianity
                                        </option>
                                        <option value="Buddhism"  {{ old('Religion') == 'Buddhism' ? 'selected' : '' }}>
                                            Buddhism
                                        </option>


                                    </select>
                                    <div class="select-dropdown"></div>
                                    <span style="color: red;" class="text-danger">{{ $errors->first('Religion')  }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="Gender" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                        <option disabled="disabled" selected="selected">Gender</option>
{{--                                        <option value="Male">Male</option>--}}
{{--                                        <option value="Female">Female</option>--}}

                                        <option value="Male"  {{ old('Gender') == 'Male' ? 'selected' : '' }}>
                                            Male
                                        </option>
                                        <option value="Female"  {{ old('Gender') == 'Female' ? 'selected' : '' }}>
                                            Female
                                        </option>

                                    </select>
                                    <div class="select-dropdown"></div>
                                    <span style="color: red;" class="text-danger">{{ $errors->first('Gender')  }}</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="IEB/IDEB Membership No (If Any)" name="IEB" value="{{ old('IEB') }}">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                Upload Your  (Optional): <input class="input--style-1" type="file" name="Image" alt="filesss">
                            </div>
                        </div>
                    </div>



                    <h4 style="margin-bottom: 10px;">Diploma Qualification</h4>
{{--                    <button class="btn btn--green" style="margin-bottom: 5px;border-radius: 5px;" onclick="add_more_field()" type="button">Add More +</button>--}}
                    <div id="edu_qul" class="educational_qualification">
                       <div id="edqua" class="edqua" style="border: 2px solid #c9c8c8;padding: 4px;margin-bottom: 15px;">
                                <div class="row row-space">


                                            <div class="col-2">
                                                <div class="input-group">
                                                    <input class="input--style-1" type="text" placeholder="Institution" name="Institution" value="Faridpur Polytechnic Institute">
                                                    <span style="color: red;" class="text-danger">{{ $errors->first('Institution')  }}</span>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="input-group" style="margin-bottom: 10px;">
                                                    <input class="input--style-1" type="text" placeholder="Department" name="Department" value="{{ old('Department') }}">
                                                    <span style="color: red;" class="text-danger">{{ $errors->first('Department')  }}</span>

                                                </div>
                                            </div>




                                </div>


                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="rs-select2 js-select-simple select--no-search"> (Optional)
                                                <select name="Shift" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                    <option disabled="disabled" selected="selected">Shift</option>

                                                    <option value="First-Shift"  {{ old('Shift') == 'First-Shift' ? 'selected' : '' }}>
                                                        First-Shift
                                                    </option>
                                                    <option value="Second-Shift"  {{ old('Shift') == 'Second-Shift' ? 'selected' : '' }}>
                                                        Second-Shift
                                                    </option>

                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>

                                    </div>
                                        <div class="col-2">
                                            <div class="input-group" style="margin-bottom: 10px;">
                                                <input class="input--style-1" type="text" placeholder="Batch/Passing Year" name="BatchOrPassingYear" value="{{ old('BatchOrPassingYear') }}">
                                                <span style="color: red;" class="text-danger">{{ $errors->first('BatchOrPassingYear')  }}</span>

                                            </div>
{{--                                            <div class="input-group">--}}
{{--                                                <div class="rs-select2 js-select-simple select--no-search">--}}
{{--                                                    <select name="Session" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">--}}
{{--                                                        <option disabled="disabled" selected="selected">Batch/Passing Year</option>--}}
{{--                                                        <option value="1980-81">1980-81</option>--}}
{{--                                                        <option value="981-82">1981-82</option>--}}
{{--                                                        <option value="1982-83">1982-83</option>--}}
{{--                                                        <option value="1983-84">1983-84</option>--}}
{{--                                                        <option value="1984-85">1984-85</option>--}}
{{--                                                        <option value="1985-86">1985-86</option>--}}
{{--                                                        <option value="1986-87">1986-87</option>--}}
{{--                                                        <option value="1987-88">1987-88</option>--}}
{{--                                                        <option value="1988-89">1988-89</option>--}}
{{--                                                        <option value="1989-90">1989-90</option>--}}
{{--                                                        <option value="1990-91">1990-91</option>--}}
{{--                                                        <option value="1991-92">1991-92</option>--}}
{{--                                                        <option value="1992-93">1992-93</option>--}}
{{--                                                        <option value="1993-94">1993-94</option>--}}
{{--                                                        <option value="1994-95">1994-95</option>--}}
{{--                                                        <option value="1995-96">1995-96</option>--}}
{{--                                                        <option value="1996-97">1996-97</option>--}}
{{--                                                        <option value="1997-98">1997-98</option>--}}
{{--                                                        <option value="1998-99">1998-99</option>--}}
{{--                                                        <option value="1999-2000">1999-2000</option>--}}
{{--                                                        <option value="2000-2001">2000-2001</option>--}}
{{--                                                        <option value="2001-2002">2001-2002</option>--}}
{{--                                                        <option value="2001-2002">2001-2002</option>--}}
{{--                                                        <option value="2002-2003">2002-2003</option>--}}
{{--                                                        <option value="2003-2004">2003-2004</option>--}}
{{--                                                        <option value="2004-2005">2004-2005</option>--}}
{{--                                                        <option value="2005-2006">2005-2006</option>--}}
{{--                                                        <option value="2006-2007">2006-2007</option>--}}
{{--                                                        <option value="2007-2008">2007-2008</option>--}}
{{--                                                        <option value="2008-2009">2008-2009</option>--}}
{{--                                                        <option value="2004-2005">2004-2005</option>--}}
{{--                                                        <option value="2005-2006">2005-2006</option>--}}
{{--                                                        <option value="2006-2007">2006-2007</option>--}}
{{--                                                        <option value="2007-2008">2007-2008</option>--}}
{{--                                                        <option value="2008-2009">2008-2009</option>--}}
{{--                                                        <option value="2009-2010">2009-2010</option>--}}
{{--                                                        <option value="2010-2011">2010-2011</option>--}}
{{--                                                        <option value="2011-2012">2011-2012</option>--}}
{{--                                                        <option value="2012-2013">2012-2013</option>--}}
{{--                                                        <option value="2013-2014">2013-2014</option>--}}
{{--                                                        <option value="2014-2015">2014-2015</option>--}}
{{--                                                        <option value="2015-2016">2015-2016</option>--}}
{{--                                                        <option value="2016-2017">2016-2017</option>--}}
{{--                                                        <option value="2017-2018">2017-2018</option>--}}
{{--                                                        <option value="2018-2019">2018-2019</option>--}}
{{--                                                        <option value="2019-2020">2019-2020</option>--}}
{{--                                                        <option value="2020-2021">2020-2021</option>--}}
{{--                                                        <option value="2021-2022">2021-2022</option>--}}
{{--                                                    </select>--}}
{{--                                                    <div class="select-dropdown"></div>--}}
{{--                                                    <span style="color: red;" class="text-danger">{{ $errors->first('Session')  }}</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                </div>

                        </div>

                        <div id="edqua" class="edqua">

                            <div class="row row-space">
                                <div class="col-2">


                                    <div class="input-group" style="border-bottom: 0px;">
                                        <textarea class="input--style-1" name="PersonalDetails" rows="3" cols="36" placeholder="Personal Details" value="{{ old('PersonalDetails') }}">{{ old('PersonalDetails') }}</textarea>
                                        <span style="color: red;" class="text-danger">{{ $errors->first('PersonalDetails')  }}</span>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="input-group">
                                        Upload Your CV (Optional): <input class="input--style-1" type="file" name="CV" alt="filesss">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <h4 style="margin: 10px 0px;">Profession Status</h4>
                    <div class="professional_qualification" style="border: 2px solid #c9c8c8;padding: 4px;">
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Name Of Organization (Optional)" name="NameOfOrg" value="{{ old('NameOfOrg') }}">

                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Position (Optional)" name="Position" value="{{ old('Position') }}">
                            </div>
                        </div>
                    </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search"> (Optional)
                                <select name="JobType">
                                    <option disabled="disabled" selected="selected">Job Type</option>
{{--                                    <option value="Government">Government</option>--}}
{{--                                    <option value="Private">Private</option>--}}

                                    <option value="Government"  {{ old('JobType') == 'Government' ? 'selected' : '' }}>
                                        Government
                                    </option>
                                    <option value="Private"  {{ old('JobType') == 'Private' ? 'selected' : '' }}>
                                        Private
                                    </option>


                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="Working Place (Optional)" name="WorkingPlace" value="{{ old('WorkingPlace') }}">

                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                              Upload Your Visiting Card (Optional): <input class="input--style-1" type="file" placeholder="Visiting Card" name="VisitingCard">
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="p-t-20">

                        <button class="btn btn--radius btn--green" type="submit">Submit</button>
                    </div>
                </form>
            </div>

            <div class="footer" style="text-align: center; padding: 30px; font-weight: bold;">
                <p>Office: Faridpur Polytechnic Institute Campus, Baitulaman, Faridpur.</p>
                <p>Dhaka Office (Temp.): Kha-199/3 & 4, Venus Complex, Lebel-9, Middle Badda, Dhaka.</p>
            </div>


        </div>
    </div>
</div>

<script>
   var counter = 1;
   function add_more_field(){
       counter += 1;
       html = '<div id="edqua'+counter+'" class="edqua" style="border: 2px solid #c9c8c8;padding: 4px;margin-bottom: 7px;"> \
           <div class="row row-space"> \
           <div id="xmName" class="col-2"> \
           <div class="input-group" style="margin-bottom: 10px;"> \
           <input class="input--style-1" type="text" placeholder="Name Of Examination" name="NameOfExam[]"> \
           </div> \
         </div> \
       <div class="col-2"> \
           <div class="input-group"> \
               <input class="input--style-1" type="text" placeholder="Institution" name="Institution[]"> \
           </div> \
       </div> \
   </div> \
       <div class="row row-space"> \
           <div class="col-2"> \
               <div class="input-group" style="margin-bottom: 10px;"> \
                   <input class="input--style-1" type="text" placeholder="Board Or University" name="BoardOrUniversity[]"> \
                     </div> \
           </div> \
           <div class="col-2"> \
               <div class="input-group"> \
                   <input class="input--style-1" type="text" placeholder="Year Of Passing" name="PassingYear[]"> \
               </div> \
           </div>\
       </div> \
       <div class="row row-space"> \
           <div class="col-2"> \
               <div class="input-group" style="margin-bottom: 10px;"> \
                   <input class="input--style-1" type="text" placeholder="Department" name="Department[]"> \
                   </div> \
           </div> \
           <div class="col-2"> \
               <div class="input-group"> \
                   <input class="input--style-1" type="text" placeholder="Division Or CGPA" name="DivisionOrCGPA[]"> \
               </div> \
           </div> \
          <button id="'+counter+'" class="btn btn--green" style="margin-bottom: 5px;background: red;border-radius: 5px;" onclick="remove(this)" type="button">Remove -</button> \
       </div> \
        </div>';
       var data = document.getElementById("edu_qul");
       data.innerHTML += html;
   }

   function remove(button){
       let number = button.id;
       let row = document.getElementById('edqua'+number);
       row.remove();
   }







</script>


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
