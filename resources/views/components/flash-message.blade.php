@if ($message = Session::get('success'))
<div class="col-lg-6 col-md-12 m-auto">
    <div class="alert fade alert-success alert-block notif">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif

@if ($message = Session::get('islogin'))
<div class="col-lg-6 col-md-12 m-auto">
    <div class="alert fade alert-success alert-block notif">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif

@if ($message = Session::get('error'))
<div class="col-lg-6 col-md-12 m-auto">
    <div class="alert fade alert-danger alert-block notif">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="col-lg-6 col-md-12 m-auto">
    <div class="alert fade alert-warning alert-block notif">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif

@if ($message = Session::get('info'))
<div class="col-lg-6 col-md-12 m-auto">
    <div class="alert fade alert-info alert-block notif">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>
</div>
@endif

@if ($errors->any())
<div class="col-lg-6 col-md-12 m-auto">
    <div class="alert fade alert-danger notif">
        <button type="button" class="close" data-dismiss="alert">x</button>
        @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    </div>
</div>
@endif

@push('css')
    <style>
        .notif {
            z-index: -1;
            opacity:0;
            position: fixed;
            border-radius: 0px;
        }
    </style>
@endpush

@push('script')
    <script>
        $(".notif").fadeTo(5000, 500).slideUp(500, function(){
            $(".notif").slideUp(500);
        });
    </script>
@endpush
