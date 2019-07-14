@extends('templates.default')

@section('content')
<div class="container-fluid">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-sm-6">
							<h4 class="page-title">Form Galeri</h4>
						</div>
					</div>
				</div>
				<!-- end row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<h4 class="mt-0 header-title">Tambah Galeri</h4>
								<form class="" action="{{ route('galeri.store') }}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<label>Judul</label><input name="judul" type="text" class="form-control" required placeholder="judul"></div>
									<div class="form-group">
										<label>Gambar</label>
										<div>
											<input type="file" name="upload" class="form-control" required placeholder="upload"></div>
									</div>
									
									<div class="form-group">
										<label>Deskripsi</label>
										<textarea name="deskripsi" class="form-control" id="" cols="80" rows="10" placeholder="Masukan Deskripsi"></textarea>
									</div>
									<div class="form-group">
										<div >
											<button style="margin-right : 15px;" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!-- end row --></div>
			<!-- container-fluid --></div>
			@endsection