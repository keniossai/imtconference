<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from w3crm.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 21:14:05 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>@yield('title', config('app.name'))</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">

	<link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
	<link href="{{ asset('vendor/swiper/css/swiper-bundle.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	<link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{ asset('vendor/jvmap/jquery-jvectormap.css')}}" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
	<link href="{{ asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">

	<!-- tagify-css -->
	<link href="{{ asset('vendor/tagify/dist/tagify.css')}}" rel="stylesheet">

	<!-- Style css -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black" data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/" class="brand-logo">
				<img  src="{{ asset('assets/images/logo/IMT 2.0-02.png') }}" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


		<!--**********************************
            Header start
        ***********************************-->
		<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area">
								<span class="input-group-text"><a href="javascript:void(0)">
									<svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="8.78605" cy="8.78605" r="8.23951" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M14.5168 14.9447L17.7471 18.1667" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
									</svg>

								</a></span>
							</div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item ps-3">
								<div class="dropdown header-profile2">
									<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="header-info2 d-flex align-items-center">
											<div class="header-media">
												<img src="{{ user('photo') }}" alt="">
											</div>
											<div class="header-info">
												<h6>{{ user('name') }}</h6>
												<p>{{ user('email') }}</p>
											</div>
										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end" style="">
										<div class="card border-0 mb-0">
											<div class="card-footer px-0 py-2">
												<a href="{{ route('logout') }}" class="dropdown-item ai-icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
													<span class="ms-2">Logout </span>
												</a>
											</div>
										</div>

									</div>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li class="menu-title">ADMIN</li>
					<li><a href="{{ route('dashboard') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.986 14.0673C7.4407 14.0673 4.41309 14.6034 4.41309 16.7501C4.41309 18.8969 7.4215 19.4521 10.986 19.4521C14.5313 19.4521 17.5581 18.9152 17.5581 16.7693C17.5581 14.6234 14.5505 14.0673 10.986 14.0673Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.986 11.0054C13.3126 11.0054 15.1983 9.11881 15.1983 6.79223C15.1983 4.46564 13.3126 2.57993 10.986 2.57993C8.65944 2.57993 6.77285 4.46564 6.77285 6.79223C6.76499 9.11096 8.63849 10.9975 10.9563 11.0054H10.986Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
					<li><a href="{{ route('posts.index') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15.8381 12.7317C16.4566 12.7317 16.9757 13.2422 16.8811 13.853C16.3263 17.4463 13.2502 20.1143 9.54009 20.1143C5.43536 20.1143 2.10834 16.7873 2.10834 12.6835C2.10834 9.30245 4.67693 6.15297 7.56878 5.44087C8.19018 5.28745 8.82702 5.72455 8.82702 6.36429C8.82702 10.6987 8.97272 11.8199 9.79579 12.4297C10.6189 13.0396 11.5867 12.7317 15.8381 12.7317Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M19.8848 9.1223C19.934 6.33756 16.5134 1.84879 12.345 1.92599C12.0208 1.93178 11.7612 2.20195 11.7468 2.5252C11.6416 4.81493 11.7834 7.78204 11.8626 9.12713C11.8867 9.5459 12.2157 9.87493 12.6335 9.89906C14.0162 9.97818 17.0914 10.0862 19.3483 9.74467C19.6552 9.69835 19.88 9.43204 19.8848 9.1223Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<span class="nav-text">Media</span>
						</a>
					</li>
					<li><a href="{{ route('dashboard.speakers') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.64111 13.5497L9.38482 9.9837L12.5145 12.4421L15.1995 8.97684" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<ellipse cx="18.3291" cy="3.85021" rx="1.76201" ry="1.76201" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M13.6808 2.86012H7.01867C4.25818 2.86012 2.54651 4.81512 2.54651 7.57561V14.9845C2.54651 17.7449 4.22462 19.6915 7.01867 19.6915H14.9058C17.6663 19.6915 19.3779 17.7449 19.3779 14.9845V8.53213" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<span class="nav-text">Speakers</span>
						</a>
					</li>
					{{-- <li><a href="performance.html" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M14.9732 2.52102H7.0266C4.25735 2.52102 2.52118 4.48177 2.52118 7.25651V14.7438C2.52118 17.5186 4.2491 19.4793 7.0266 19.4793H14.9723C17.7507 19.4793 19.4795 17.5186 19.4795 14.7438V7.25651C19.4795 4.48177 17.7507 2.52102 14.9732 2.52102Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M7.73657 11.0002L9.91274 13.1754L14.2632 8.82493" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Attendance</span>
						</a>
					</li> --}}
					<li><a href="{{ route('logout') }}" class="" aria-expanded="false">
						<div class="menu-icon">
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M6.75713 9.35157V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M11.0349 6.34253V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M15.2428 12.6746V15.64" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M15.2952 1.83333H6.70474C3.7103 1.83333 1.83331 3.95274 1.83331 6.95306V15.0469C1.83331 18.0473 3.70157 20.1667 6.70474 20.1667H15.2952C18.2984 20.1667 20.1666 18.0473 20.1666 15.0469V6.95306C20.1666 3.95274 18.2984 1.83333 15.2952 1.83333Z" stroke="#888888" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
							<span class="nav-text">Logout</span>
						</a>
					</li>
				</ul>
				<div class="help-desk">
					<a href="/" class="btn btn-primary">Go to site</a>
				</div>
			</div>
        </div>

        <div class="content-body">
            @yield('content')
        </div>

        {{-- Add Speaker form in here --}}
        <x-add-speaker />

		{{-- Add post form here --}}


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
               <p>Copyright © IMT 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('vendor/global/global.min.js')}}"></script>
	<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

	<!-- Dashboard 1 -->
	<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
	<script src="{{ asset('vendor/draggable/draggable.js')}}"></script>


	<!-- tagify -->
	<script src="{{ asset('vendor/tagify/dist/tagify.js')}}"></script>

	<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{ asset('vendor/datatables/js/buttons.html5.min.js')}}"></script>
	<script src="{{ asset('vendor/datatables/js/jszip.min.js')}}"></script>
	<script src="{{ asset('js/plugins-init/datatables.init.js')}}')}}"></script>

	<!-- Apex Chart -->

	<script src="{{ asset('vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
	<script src="{{ asset('vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>


	<!-- Vectormap -->
    <script src="{{ asset('vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="vendor/jqvmap/js/jquery.vmap.world.js')}}"></script>
    <script src="{{ asset('vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
	<script src="{{ asset('js/deznav-init.js')}}"></script>
	<script src="{{ asset('js/demo.js')}}"></script>
    <script src="{{ asset('js/styleSwitcher.js')}}"></script>
    {{-- <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/js/request.js') }}"></script> --}}



</body>

<!-- Mirrored from w3crm.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jul 2023 21:21:21 GMT -->
</html>
