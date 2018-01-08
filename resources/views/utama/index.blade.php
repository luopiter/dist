@extends('layouts.homebasic')

@section('title','HOME')
@section('content')
<div class="wrapper">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkQnSEfAZfZniRrPJr5fKfP-mVNWSeRQihSBHQEMqOwhNrP2xB" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://karyaprimas.co.id/wp-content/uploads/jual-spare-part-genset-kubota-pt-karya-prima-sukses-2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLI0ctVgjXL0OGzb4X39wSQr1WgToHdw4a6132HMdiJOeT6Po4" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
@endsection
