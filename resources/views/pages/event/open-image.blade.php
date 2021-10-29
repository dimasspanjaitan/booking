@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush
@section('content')
    {{-- <input type="hidden" value="{{ $booking->code }}"> --}}
    <div class="mainheading" style="text-align: center">
        <h2 class="sitetitle">KODE BOOKING</h2>
        <p class="lead" style="color: #339900">Download KODE BOOKING sebagai bukti pemesanan bangku saat masuk ke gereja.</p>
    </div>
    <div class="card-download">
        <img class="img img-fluid code" src="{{config('app.asset_url').$booking->code}}" alt="">
    </div>
    <div class="mainheading" style="text-align: center">
        <a href="{{ route('event.detail.download', $booking->id) }}" class="seat seat1"><strong>DOWNLOAD</strong></a>
    </div>
@endsection