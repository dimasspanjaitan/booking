@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush

@section('content')
<!-- Begin Description Icare
    ================================================== -->
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-md-offset-2">
            <div class="mainheading">
                <div class="row post-top-meta authorpage">
                    <div class="col-md-8 col-xs-12">
                        <h1>I Care</h1>
                        <span class="author-description">Komunitas kecil sebagai sebuah keluarga Rohani, dimana kita bisa saling memperhatikan, saling mendukung, saling mendoakan dan tempat kita tumbuh bersama dalam Tuhan</span>
                        <span>Untuk info lebih lanjut tentang I Care, bisa hubungi Koordinator I Care via Whatsapp.</span>
                    </div>
                    <div class="col-md-4 col-xs-12" align="center">
                        <img class="author-icare"
                            src="{{ asset('assets/img/icare/jayanta-bangun.jpeg') }}"
                            alt="Gembala"><br>
                            <span class="post-name"><strong>Koordinator I Care</strong></span><br>
                            <span class="post-date">Jayanta Bangun</span><br>
                            <span class="post-date">
                                <a href="https://api.whatsapp.com/send?phone=6281375722746"
                                    target="_blank">0813-7572-2746</a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Description Icare
    ================================================== -->

<!-- Begin Grup Icare
    ================================================== -->
<div class="graybg authorpage">
    <div class="container">
        <div class="listrecent listrelated">

            <!-- begin icare -->
            @foreach ($icares as $item)
            <div class="authorpostbox">
                <div class="card">
                    <img class="img-fluid img-thumb" src="{{ $item->image }}" alt="">
                    <div class="card-icare">
                        <h2 class="card-title">{{ $item->name }}</h2>
                        <h4 class="card-text">{{ $item->description }}</h4>
                        <div class="metafooter">
                            <div class="wrapfooter">
                                <span class="meta-footer-thumb">
                                    <img class="author-thumb" src="{{ $item->pp_mentor }}" alt="Gembala Icare">
                                </span>
                                <span class="author-meta">
                                    <span class="post-name"><strong>Gembala I Care</strong></span><br />
                                    <span class="post-date">{{ $item->mentor }}</span><br>
                                    <span class="post-date">
                                        <a href="https://api.whatsapp.com/send?phone=62<?php echo substr($item->phone, 1) ?>"
                                            target="_blank">{{ $item->phone }}</a>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- end icare -->
        </div>
    </div>
</div>
<!-- End Grup Icare
    ================================================== -->
@endsection
