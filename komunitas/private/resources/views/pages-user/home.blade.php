@extends('dashboard.default')
@section('content')


<!-- Gallery Section -->
<div id="galeri">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Gallery</h2>
      <hr>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="portfolio-item">
      @foreach($galeris as $galeri)
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{asset('public/images/'.$galeri->upload)}}" title="{{$galeri->judul}}" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>{{$galeri->judul}}</h4>
              </div>
              <img src="{{asset('public/images/'.$galeri->upload)}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<br><br>
<!-- Event Section -->
<div id="event" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="section-title text-center center">
        <h2>Event</h2>
        <hr>
      </div>
      @foreach($events as $event)
      <div id="row">
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="{{asset('public/images/'.$event->upload)}}" alt="..." width="300" height="320"></div>
            <div class="caption">
              <h3>{{$event->nama_event}}</h3>
              <p>Tanggal : {{$event->tanggal}}</p>
              <p>Waktu : {{$event->waktu}}</p>
              <p>Tempat : {{$event->tempat}}</p>
              <p>{{$event->deskripsi}}</p>
              <p><a class="btn btn-primary" href="{{asset('public/images/'.$event->formulir)}}" download>Download Formulir</a></p>
              <p>Formulir bisa di kirimkan langsung ke Kampus Poltek Tegal Maupun Dikirim Email UKM Rana 9 (rana9phb@gmail.com)</p>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</div>
@endsection