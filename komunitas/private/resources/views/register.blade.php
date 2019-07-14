@include('templates.partials._head')
<div class="content">
<body>
<div class="home-btn d-none d-sm-block">
	<a href="index.html" class="text-dark"><i class="fas fa-home h2"></i></a>
</div>
<div class="wrapper-page">
	<div class="card overflow-hidden account-card mx-3">
		<div class="bg-primary p-4 text-white text-center position-relative">
			<h4 class="font-20 m-b-5">Welcome !</h4>
			<p class="text-white-70 mb-4">Register UKM RANA 9 POLTEK TEGAL</p>
			<a href="index.html" class="center"><img src="public/assets/images/rana9.png" height="50" alt="logo"></a>
		</div>
		<div class="account-card-content">
			<form class="form-horizontal m-t-30" method="POST" action="{{ route('register')  }}">
            {{ csrf_field() }}
				<div class="form-group">
					<label for="nama">Nama</label><input type="text" class="form-control" id="nama" placeholder="Tambahkan Nama Anda"></div>
					<div class="form-group">
					<label for="email">Email</label><input type="email" class="form-control" id="email" placeholder="Masukkan Email Anda"></div>	
				<div class="form-group">
					<label for="userpassword">Password</label><input type="password" class="form-control" id="userpassword" placeholder="Masukkan Password"></div>
                    <div class="form-group">
					<label for="userpassword">Ulangi Password</label><input type="password" class="form-control" id="userpassword" placeholder="Masukkan Kembali Password"></div>    
				<div class="form-group row m-t-20">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6 text-right">
						<button class="btn btn-primary w-md waves-effect waves-light" type="submit">SIMPAN</button>
					</div>
					<div class="form-group m-t-10 mb-0 row">
				</div>
				</div>
			</form>
		</div>
	</div>
</div>
@include('templates.partials._script')
