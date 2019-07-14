<!DOCTYPE html>
<html lang="en">
@include('templates.partials._head')
<body>
<!-- Begin page -->
<div id="wrapper">
	<!-- Top Bar Start -->
	@include('templates.partials._navbar')
	<!-- Top Bar End -->
	<!-- ========== Left Sidebar Start ========== -->
	@include('templates.partials._sidebar')
	<!-- Left Sidebar End -->
	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="content-page">
		<div class="content">
		<!-- Start content -->
		@yield('content')
		<!-- content -->
		<footer class="footer">© 2019 Veltrix <span class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.</footer>
	</div>
	</div>
	<!-- ============================================================== -->
	<!-- End Right content here -->
	<!-- ============================================================== --></div>
<!-- END wrapper -->
<!-- jQuery  -->
@include('templates.partials._script')
</body>
</html>