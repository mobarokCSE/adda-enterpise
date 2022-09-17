<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('layouts.style')
</head>

<body>
    <!-- preloader start here -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- preloader ending here -->

	<!-- scrollToTop start here -->
	<a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
	<!-- scrollToTop ending here -->


    @include('layouts.header')
    <main id="main">
        @yield('content')
    </main><!-- End #main -->

    @include('layouts.footer')

    @include('layouts.script')
</body>

</html>
