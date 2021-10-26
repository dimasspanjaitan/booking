@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@endpush
@section('content')
    <div class="mainheading">
        <h1 class="sitetitle">{{ $event->name }}</h1>
        <p class="lead">{{ $event->description }}</p>
    </div>
    @foreach ($seat_grouped as $key => $sg)
        <div class="main-hall">
            <div class="section-title">
                <h2><span>{{ $key }}</span></h2>
            </div>

            <div class="card">
                <div class="card-block">
                    @foreach ($sg as $item)
                        <div class="seat">
                            <button class="btn-seat-modal {{$item->has_booking ? 'btn btn-danger': 'btn btn-success'}}" {{$item->has_booking ? 'disabled': ''}} style="cursor: pointer" data-toggle="modal" data-seat="{{$item}}" data-target="#seatModal">{{ $item->code }}</button>
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
                        <div class="">
                            <img class="img img-fluid" id="modal-image" src="" alt="" >
                        </div>
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
                            <input type="number" class="form-control" minlength="10" maxlength="13" name="phone" id="phone" placeholder="08XXXXXXXXXX">
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
    <script>
        $('.btn-seat-modal').click(function(){
            const data = $(this).data('seat');
            const img_url =  '{{config('app.asset_url')}}' + data.image

            $('#modal-image').attr('src', img_url );
            $('#seat_id').val(data.id);
        })
    </script>
@endpush