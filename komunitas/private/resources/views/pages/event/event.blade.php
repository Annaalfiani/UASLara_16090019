@extends('templates.default')

@section('content')
<div class="content">
<div class="container-fluid">
	<div class="page-title-box">
		<div class="row align-items-center">
			<div class="col-sm-6">
				<h4 class="page-title">Event Photography</h4>
			</div>
			<div class="col-sm-6">
							<div class="float-right d-none d-md-block">
							<a href="{{ route('event.tambah') }}" class="btn btn-primary">Tambah</a>
							</div>
						</div>
					</div>
	<!-- end row -->
	<div class="row">
	@foreach($event as $event)
		<div class="col-xl-3 col-md-6">
			<div class="card-deck-wrapper">
				<div class="card-deck">
					<div class="card">
						<img class="" src="{{asset('public/images/'.$event->upload)}}" width="275dp" height="200dp">
						<div class="card-body">
							<h4 class="card-title font-24 mt-0">{{$event->nama_event}}</h4>
							<p class="card-text">Tanggal : {{$event->tanggal}}</p>
							<p class="card-text">Waktu : {{$event->waktu}}</p>
							<p class="card-text">Tempat : {{$event->tempat}}</p>
							<p class="card-text">{{$event->deskripsi}}</p>
							<p class="card-text">
								<small class="text-muted">{{$event->created_at->diffForHumans()}}</small>
							</p>
							<a class="btn btn-outline-primary" style="margin-right:16px" href="{{route('event.edit', $event) }}">Edit</a>
							<a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#hapus{{$event->id}}">Hapus </a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="hapus{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<form action="{{route('event.delete', $event)}}" method="post">
									@csrf
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<p>Apakah kamu yakin akan menghapus data ini ?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary"  data-dismiss="modal">Keluar</button>
										<button type="submit" class="btn btn-danger">Hapus</button>
									</div>
									</form>
									</div>
								</div>
								</div>
	@endforeach
	<!-- end row --></div>
</div>
</div>
@endsection