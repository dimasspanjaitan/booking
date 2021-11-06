@extends('layouts.app')

@section('content')
    <div class="mainheading">
        <h1 class="sitetitle">GBI Pelita Medan</h1>
        <p class="lead">Bertumbuh dalam Pemuridan</p>
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