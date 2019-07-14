@extends('templates.default')
@section('content')
		<div class="container-fluid">
			<div class="page-title-box">
				<div class="row align-items-center">
					<div class="col-sm-6">
						<h4 class="page-title">Dashboard</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item active">UKM RANA 9 Poltek Tegal</li>
						</ol>
					</div>
					<div class="col-sm-6">
						<div class="float-right d-none d-md-block">
						</div>
					</div>
				</div>
			</div>
			<!-- end row -->
			<div class="row">
            <div class="col-xl-3 col-md-6">
					<div class="card mini-stat bg-primary text-white">
						<div class="card-body">
							<div class="mb-4">
								<div class="float-left mini-stat-img mr-4">
									<img src="public/assets/images/services-icon/anggota.png" alt="">
								</div>
								<h5 class="font-16 text-uppercase mt-0 text-white-50">Total Anggota</h5>
								<h4 class="font-500"><i class=""></i>{{count(App\Anggota::all())}}</h4>
							</div>
							<div class="pt-5">
								<div class="float-right">
									<a href="#" class="text-white-50"><i class=""></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card mini-stat bg-primary text-white">
						<div class="card-body">
							<div class="mb-4">
								<div class="float-left mini-stat-img mr-4">
									<img src="public/assets/images/services-icon/galeri.jpg" alt="">
								</div>
								<h5 class="font-16 text-uppercase mt-0 text-white-50">Total Galeri</h5>
								<h4 class="font-500"><i class=""></i>{{count(App\Galeri::all())}}</h4>
							</div>
							<div class="pt-5">
								<div class="float-right">
									<a href="#" class="text-white-50"><i class=""></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6">
					<div class="card mini-stat bg-primary text-white">
						<div class="card-body">
							<div class="mb-4">
								<div class="float-left mini-stat-img mr-4">
									<img src="public/assets/images/services-icon/events.png" alt="">
								</div>
								<h5 class="font-16 text-uppercase mt-0 text-white-50">Total Eventi</h5>
								<h4 class="font-500"><i class=""></i>{{count(App\Event::all())}}</h4>
							</div>
							<div class="pt-5">
								<div class="float-right">
									<a href="#" class="text-white-50"><i class=""></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- end row -->
           


@endsection