@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush
@section('content')
    {{-- <input type="hidden" value="{{ $booking->code }}"> --}}
    <div class="text-center">
        <div class="mainheading">
            <h2 class="sitetitle">KODE BOOKING</h2>
            <p>Anda memesan kursi No. {{ substr($booking->seat->code, 1) }}</p>
            <p class="lead" style="color: #339900">Download KODE BOOKING sebagai bukti pemesanan bangku saat masuk ke gereja.</p>
        </div>
        <div class="card-download">
            <img class="img img-fluid code" src="{{config('app.asset_url').$booking->code}}" alt="">
        </div>
        <div class="mainheading">
            <a href="{{ route('event.detail.download', $booking->id) }}" class="seat seat1"><strong>DOWNLOAD</strong></a>
        </div>
        <div class="mainheading">
            <a href="{{ route('event.detail', $booking->event->slug) }}">Kembali ke halaman BOOKING</a>
        </div>
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading">INFO</h4>
            <p>Jika kode booking tidak tersedia, mohon hubungi PIC Booking untuk info lebih lanjut.</p>
            <hr>
            <div>
                <p class="mb-0"><strong>PIC Booking</strong><br>Dimas<br>081381174410</p>
            </div>
        </div>
    </div>
@endsection