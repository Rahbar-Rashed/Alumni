<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
{{--            <div class="sidebar-brand-icon rotate-n-15">--}}
{{--                <i class="fas fa-laugh-wink"></i>--}}
{{--            </div>--}}
            <div class="sidebar-brand-text mx-3">
                <img style="width: 50px; border-radius: 50%;" src="{{ asset('public/Front_End/images/logo.png') }}">

            </div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider my-0">

                @if(Auth::user()->role == 1)
                    <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <hr class="sidebar-divider">


        <div class="sidebar-heading">
            Click Books
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsestory"
               aria-expanded="true" aria-controls="collapsebooks">
                <i class="fas fa-fw fa-cog"></i>
                <span>গল্প</span>
            </a>
            <div id="collapsestory" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    {{--                    <a class="collapse-item" href="buttons.html">Buttons</a>--}}
                    {{-- <a class="collapse-item" href="{{ route('books.index') }}">School Books </a> --}}
                    <a class="collapse-item" href="{{ URL::to('/shortStory') }}">ছোট গল্প
                </a>
                    <a class="collapse-item" href="{{ URL::to('/longStory') }}">বড় গল্প
                    </a>
                    <a class="collapse-item" href="{{ URL::to('/loveStory') }}">রোমান্সধর্মী গল্প
                    </a>
                </div>
            </div>
        </li>
        <div class="sidebar-heading">
            Click Books
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsenovel"
               aria-expanded="true" aria-controls="collapsebooks">
                <i class="fas fa-fw fa-cog"></i>
                <span>উপন্যাস</span>
            </a>
            <div id="collapsenovel" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    {{--                    <a class="collapse-item" href="buttons.html">Buttons</a>--}}
                    {{-- <a class="collapse-item" href="{{ route('books.index') }}">School Books </a> --}}
                    <a class="collapse-item" href="{{ URL::to('/historicalNovel') }}">ঐতিহাসিক উপন্যাস
                </a>
                <a class="collapse-item" href="{{ URL::to('/thrillerNovel') }}">গোয়েন্দা উপন্যাস
                </a>
                <a class="collapse-item" href="{{ URL::to('/lovestoryNovel') }}">রোমান্সধর্মী উপন্যাস
                </a>
                <a class="collapse-item" href="{{ URL::to('/poeticNovel') }}">কাব্যধর্মী উপন্যাস
                </a>
                    <a class="collapse-item" href="{{ URL::to('/mysteriousNovel') }}">রহস্য উপন্যাস
                    </a>
                </div>
            </div>
        </li>

        <div class="sidebar-heading">
            Click Books
        </div>







                @else
                     <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Click Admin
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Members</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="{{ route('all.members') }}">All Members</a>
                    </div>
                </div>
            </li>

 <!-- Divider -->
         <hr class="sidebar-divider">

         <!-- Heading -->

         <!-- Divider -->

         <div class="sidebar-heading">
             Click Books
         </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseunverified"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Unverified Members</span>
                </a>
                <div id="collapseunverified" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="{{ route('all.unvermembers') }}">UnVerified Members</a>

                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseverified"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Verified Members</span>
                </a>
                <div id="collapseverified" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="{{ route('all.vermembers') }}">Verified Members</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsegensec"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>General Secretary Central Ex: Comm:</span>
                </a>
                <div id="collapsegensec" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="{{ route('all.genseccenexcompendingmembers') }}">Pending Members</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseprescen"
                   aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pres: Central Ex: Comm:</span>
                </a>
                <div id="collapseprescen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="{{ route('all.prescenpendingmembers') }}">Pending Members</a>
                    </div>
                </div>
            </li>
         @endif

  <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="">


        </div>

    </ul>
