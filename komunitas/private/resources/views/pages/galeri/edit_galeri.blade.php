@extends('templates.default')

@section('content')
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<h4 class="mt-0 header-title">Edit Galeri</h4>
								<form class="" action="{{ route('galeri.edit', $galeri) }}" method="post" enctype="multipart/form-data">
									@csrf
                                    @method('PATCH')
									<div class="form-group">
										<label>Judul</label><input name="judul" type="text" class="form-control" required placeholder="Judul" value="{{$galeri->judul}}">
                                        </div>
                                        <div class="form-group">
										<label>Gambar Sebelumnya</label>
										<div>
											<img src="{{asset('public/images/'.$galeri->upload)}}" width="50%" height="50%" alt="">
                                            </div>
									</div>
                                        <div class="form-group">
										<label>Gambar</label>
										<div>
											<input type="file" name="upload" class="form-control" value="{{$galeri->upload}}"> 
                                            </div>
									</div>
									<div class="form-group">
										<label>Deskripsi</label>
										<textarea name="deskripsi" class="form-control" id="" cols="80" rows="10" placeholder="Masukan Deskripsi"  >{{$galeri->deskripsi}}</textarea>
									</div>
									<div class="form-group">
										<div >
											<button style="margin-right : 15px;" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
											<button type="button" onclick="window.location='{{route("galeri")}}'" class="btn btn-secondary waves-effect m-l-5">Kembali</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!-- end row --></div>
			<!-- container-fluid --></div>
			@endsection