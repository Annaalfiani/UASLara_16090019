@extends('templates.default')

@section('content')
<div class="content">
			<div class="container-fluid">
				<div class="page-title-box">
					<div class="row align-items-center">
						<div class="col-sm-6">
							<h4 class="page-title">Data Anggota</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="javascript:void(0);"></a>
						</div>
						<div class="col-sm-6">
							<div class="float-right d-none d-md-block">
							<a href="{{ route('anggota.tambah')}}" class="btn btn-primary">Tambah</a>
							</div>
						</div>
					</div>
				</div>
				<!-- end row -->
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
								<h4 class="mt-0 header-title">UKM Rana 9</h4>
								<p class="text-muted m-b-30">
									UKM Rana 9 Politeknik Tegal
								</p>
								<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
								<thead>
								<tr>
									<th>Nama</th>
									<th>Jurusan</th>
									<th>Semester</th>
									<th>Status</th>
									<th>Nomer</th>
									<th width="8%">Aksi</th>
								</tr>
								</thead>
								<tbody>
								@foreach ($anggotas as $anggota)
								<tr>
									<td>{{$anggota->nama}}</td>
									<td>{{$anggota->jurusan}}</td>
									<td>{{$anggota->semester}}</td>
									<td>{{$anggota->status}}</td>
									<th>{{$anggota->nomer}}</th>
									<th>
									<a class="mr-3" href="{{route('anggota.edit', $anggota)}}"> <i class="fas fa-pencil-alt fa-lg"></i> </a>
									<a href="#" data-toggle="modal" data-target="#hapus{{$anggota->id}}">
									 <i class="fas fa-trash-alt fa-lg"></i> </a>
									</th>
								</tr>
								<div class="modal fade" id="hapus{{$anggota->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<form action="{{route('anggota.delete', $anggota)}}" method="post">
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
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
										<button type="submit" class="btn btn-danger">Hapus</button>
									</div>
									</form>
									</div>
								</div>
								</div>
								@endforeach
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- end col --></div>
				<!-- end row --></div>
			<!-- container-fluid --></div>
	

@endsection