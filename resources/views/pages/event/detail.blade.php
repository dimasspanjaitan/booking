@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush
@section('content')
    <div class="mainheading">
        <h1 class="sitetitle">{{ $event->name }}</h1>
        <p class="lead">{{ $event->description }}</p>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">PERINGATAN!</h4>
            <p>Proses BOOKING akan <strong>ditutup</strong> pada hari Kamis, <strong>9 Desember 2021</strong> pukul <strong>18.00 WIB</strong>.</p>
            <p>Booking akan di <strong>CANCEL</strong> jika anda tidak tiba di gereja <strong>5 menit</strong> sebelum ibadah. </p>
            <hr>
            <p class="mb-0">Ibadah akan <strong>dilaksanakan</strong> pada Hari JUMAT, <strong>10 Desember 2021</strong> pukul <strong>19.00 WIB</strong>.</p>
        </div>
    </div>
    @foreach ($seat_grouped as $key => $sg)
        <div class="main-hall">
            <div class="section-title">
                <h2><span>{{ $key }}</span></h2>
            </div>

            <div class="card">
                <div class="card-block">
                    @foreach ($sg as $item)
                        <div class="card-seat">
                            <button class="btn-seat-modal {{$item->has_booking ? 'seat seat2': 'seat seat1'}}" {{$item->has_booking ? 'disabled': ''}} 
                                style="cursor: pointer;" 
                                data-toggle="modal" 
                                data-seat="{{$item}}" 
                                data-content='<img class="img img-fluid" src="{{config('app.asset_url').$item->image}}">'
                                data-target="#seatModal">
                                    <strong>{{ $item->code }}</strong> 
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal -->
    <div class="modal fade" id="seatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{ route('event.detail.save') }}" method="POST">
                    @csrf
                    <input type="hidden" name="seat_id" id="seat_id">
                    <input type="hidden" name="slug" value="{{request('slug')}}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>             
                    <div class="modal-body">
                        <div class="img-modal">
                            <img class="img img-fluid" id="modal-image" src="" alt="" >
                        </div>
                        <p style="color: #cc3300">Masukkan data diri anda, untuk kepentingan INFORMASI lebih lanjut.</p>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan Nama Anda">
                            @if ($errors->has('name'))
                                <div class="form-group text-warning">
                                    {{ $errors->first('name') }} <label class="symbol required"></label>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-form-label">Nomor Whatsapp</label>
                            <input type="number" class="form-control" minlength="10" maxlength="13" name="phone" id="phone" placeholder="Minimal 10 angka, format : 08XXXXXXXXXX">
                            @if ($errors->has('phone'))
                                <div class="form-group text-warning">
                                    {{ $errors->first('phone') }} <label class="symbol required"></label>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
       $('[data-toggle="modal"]').popover({
            html: true,
            // animated: 'fade',
            trigger : 'hover',
            placement: 'top'
        })
        $('.btn-seat-modal').click(function(){
            const data = $(this).data('seat');
            const img_url =  '{{config('app.asset_url')}}' + data.image

            $('#modal-image').attr('src', img_url );
            $('#seat_id').val(data.id);
        })
    </script>
@endpush