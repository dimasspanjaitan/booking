
@extends('layouts.app')

@section('content')
<!-- Begin Article
================================================== -->
<div class="container">
    <div class="row">
        @if(empty($renungan_latest))
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="mainheading">
                    <h1 class="posttitle">Tidak ada Renungan untuk Hari ini</h1>
                </div>
            </div>
        @else

            @include('components.sidebar')

            <!-- Begin Post -->
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="mainheading">

                    <!-- Begin Top Meta -->
                    <div class="row post-top-meta">
                        <div class="col-md-2">
                            <a href="#"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Dennis"></a>
                        </div>
                        <div class="col-md-10">
                            <a class="link-dark" href="author.html"></a>
                            <div>
                                <span class="author-description"></span>
                                <span class="dot"></span>
                                <span class="post-date"></span>
                            </div>  
                        </div>
                    </div>
                    <!-- End Top Menta -->

                    <h1 class="posttitle">{{ $renungan_latest->thema }}</h1>

                    <div class="fb-like" data-href="#" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>

                </div>

                <!-- Begin Post Content -->
                <div class="article-post">
                    <h3 class="posttitle">{{ $renungan_latest->verse }}</h3>
                    <blockquote>
                        {{ $renungan_latest->cotent }}
                    </blockquote>
                    <p>
                        {{-- <a href="{{ $renungan_latest->link }}">{{ $renungan_latest->link }}</a> --}}
                    </p>
                    <p>
                        {!! $renungan_latest->exp !!}
                    </p>
                </div>
                <!-- End Post Content -->

                <!-- Begin Tags -->
                <div class="after-post-tags">
                    {{-- <ul class="tags">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Growth Mindset</a></li>
                        <li><a href="#">Productivity</a></li>
                        <li><a href="#">Personal Growth</a></li>
                    </ul> --}}
                </div>
                <!-- End Tags -->
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#{{$renungan_latest->slug}}" data-width="" data-numposts="5"></div>

            </div>
            <!-- End Post -->
        @endif
    </div>  
</div>
<!-- End Article
================================================== -->
@endsection

