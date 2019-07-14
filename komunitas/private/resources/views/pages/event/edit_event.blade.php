@extends('templates.default')

@section('content')
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<h4 class="mt-0 header-title">Edit Event</h4>
								<form class="" action="{{ route('event.edit', $event) }}" method="post" enctype="multipart/form-data">
									@csrf
                                    @method('PATCH')
									<div class="form-group">
										<label>Nama Event</label><input name="nama_event" type="text" class="form-control" required placeholder="nama event" value="{{$event->nama_event}}">
                                        </div>
                                        <div class="form-group">
										<label>Gambar Sebelumnya</label>
										<div>
											<img src="{{asset('public/images/'.$event->upload)}}" width="50%" height="50%" alt="">
                                            </div>
									</div>
                                        <div class="form-group">
										<label>Gambar</label>
										<div>
											<input type="file" name="upload" class="form-control" value="{{$event->upload}}"> 
                                            </div>
									</div>
                                    <div class="form-group">
										<label>Tanggal</label><input name="tanggal" type="date" class="form-control" required placeholder="tanggal" value="{{$event->tanggal}}">
                                        </div>
                                    <div class="form-group">
										<label>Waktu</label><input name="waktu" type="time" class="form-control" required placeholder="waktu" value="{{$event->waktu}}">
                                        </div>
                                    <div class="form-group">
										<label>Tempat</label><input name="tempat" type="text" class="form-control" required placeholder="tempat" value="{{$event->tempat}}">
                                        </div>        
									<div class="form-group">
										<label>Deskripsi</label>
										<textarea name="deskripsi" class="form-control" id="" cols="80" rows="10" placeholder="Masukan Deskripsi"  >{{$event->deskripsi}}</textarea>
									</div>
									<div class="form-group">
										<div >
											<button style="margin-right : 15px;" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
											<button type="button" onclick="window.location='{{route("event")}}'" class="btn btn-secondary waves-effect m-l-5">Kembali</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				<!-- end row --></div>
			<!-- container-fluid --></div>
			@endsection