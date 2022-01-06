@extends('layouts.app')

@push('css')
	<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="mainheading">
        <h1 class="sitetitle">GBI Pelita Medan</h1>
        <p class="lead">Bertumbuh dalam Pemuridan</p>
    </div>
	<div class="box-slide">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img class="d-block w-100" src="{{ asset('assets/img/slide/1.jpg') }}" alt="First slide">
			  </div>
			  <div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('assets/img/slide/2.jpg') }}" alt="Second slide">
			  </div>
			  <div class="carousel-item">
				<img class="d-block w-100" src="{{ asset('assets/img/slide/3.jpg') }}" alt="Third slide">
			  </div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
	</div>
    <div class="container">
        <div class="section-title">
            <h2><span>Event Terbaru</span></h2>
        </div>
		<div class="row">
			@foreach ($events as $item)
				<div class="card mr-3" style="width: 18rem;">
					<img class="card-img-top" alt="100%x180" style="height: 180px; width: 100%; display: block;" src="{{ $item->image }}" data-holder-rendered="true">
					<div class="card-body p-3">
						<h5 class="card-title" style="">{{ $item->name }}</h5>
						<p class="card-text">{{ substr($item->description, 0, 130) }}</p>
						<a href="{{ route('event.detail', $item->slug) }}" class="btn btn-primary">Lihat Detail</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection