@extends('templates.default')

@section('content')
<div class="container-fluid">
	<div class="page-title-box">
		<div class="row align-items-center">
			<div class="col-sm-6">
				<h4 class="page-title">Event Photography</h4>
			</div>
			<div class="col-sm-6">
				<div class="float-right d-none d-md-block">
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->
	<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<h4 class="mt-0 header-title">Tambah Event</h4>
								<form class="" action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
									{{ csrf_field() }}
									<div class="form-group">
										<label>Nama Event</label><input name="nama" type="text" class="form-control" required placeholder="Nama Event"></div>
									<form>
									<div class="form-group">
										<label for="exampleFormControlFile1">Gambar</label>
										<input type="file" class="form-control-file" name="upload">
									</div>
									<div class="form-group">
										<label>Tanggal</label><input name="tanggal" type="date" class="form-control"></div>
										<div class="form-group">
										<label>Waktu</label><input name="waktu" type="time" class="form-control" id="example-time-input"></div>
										<div class="form-group">
											<label>Tempat</label>
											<input name="tempat" type="text" class="form-control" required placeholder="Tempat">
										</div>
										<div class="form-group">
										<label>Deskripsi</label>
										<textarea name="deskripsi" class="form-control" id="" cols="80" rows="10" placeholder="Masukan Deskripsi"></textarea>
										</div>
										<div class="form-group">
										<label for="exampleFormControlFile1">Formulir</label>
										<input type="file" class="form-control-file" name="formulir">
									</div>
											
											<button style="margin-right : 15px;" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
											<button type="reset" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
		<!-- end col --></div>
	<!-- end row --></div>
    @endsection