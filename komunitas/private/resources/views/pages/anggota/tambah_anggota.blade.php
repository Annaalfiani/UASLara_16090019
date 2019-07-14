@extends('templates.default')

@section('content')
<div class="container-fluid">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-sm-6">
							<h4 class="page-title">Form Anggota</h4>
						</div>
					</div>
				</div>
				<!-- end row -->
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<h4 class="mt-0 header-title">Tambah Anggota</h4>
								<form class="" action="{{ route('anggota.store') }}" method="post">
									@csrf
									<div class="form-group">
										<label>Nama</label><input name="nama" type="text" class="form-control" required placeholder="Nama"></div>
									<div class="form-group">
										<label>Jurusan</label>
										<div>
										<select name="jurusan" class="form-control" id="exampleFormControlSelect1">
											<option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
											<option value="D3 Kebidanan">D3 Kebidanan</option>
											<option value="D3 Akutansi">D3 Akutansi</option>
											<option value="D3 Farmasi">D3 Farmasi</option>
											<option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
											</select>
									</div>
									<div class="form-group">
										<label>Semester</label>
										<div>
											<input type="number" min="1" max="8" name="semester" class="form-control" required placeholder="Semester"></div>
									</div>
									<div class="form-group">
										<label>Status</label>
										<div>
										<select name="status" class="form-control" id="exampleFormControlSelect1">
											<option value="Ketua">Ketua</option>
											<option value="Wakil">Wakil</option>
											<option value="Bendahara">Bendahara</option>
											<option value="Sekretaris">Sekretararis</option>
											<option value="Humas">Humas</option>
											<option value="Anggota">Anggota</option>


											</select>
											</div>
									</div>
									<div class="form-group">
										<label>Nomor</label>
										<div>
											<input data-parsley-type="number" max="12" name="nomer" type="text" class="form-control" required placeholder="Enter only numbers"></div>
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