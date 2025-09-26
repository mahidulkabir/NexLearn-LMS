
<!doctype html>
<html lang="en">

<head>
	@include('backend.section.links')
	<title>NexLearn :: Admin Dashboard </title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
        {{-- sidebar include  --}}
		@include('backend.section.sidebar')
		<!--start header -->
		@include('backend.section.header')
	
		<!--start page wrapper -->
		<div class="page-wrapper">
			@yield('content')
		</div>



		
	</div>
	<!--end wrapper-->


@include('backend.section.footer')
	<!--end switcher-->
	@include('backend.section.scripts')
	
</body>

</html>