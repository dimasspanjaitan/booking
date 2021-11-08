@extends ('admin.layouts.main')

@push('css')
    <link href="{{ asset('admin-assets/css/bootstrap4-toggle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('vendor/DataTables/css/DT_bootstrap.css') }}" rel="stylesheet" media="screen">
@endpush

@push('script')
    <script src="{{ asset('admin-assets/js/bootstrap4-toggle.min.js') }}"></script>
@endpush

@section('content')
    <!-- start: TITLE -->
	<section id="page-title" class="padding-top-5 padding-bottom-5">
		<div class="row" style="padding-left:0px;">
			<div class="col-sm-7">
				<span class="mainDescription">FORM EVENT</span>
			</div>
		</div>
	</section>
    <!-- end: TITLE -->
    <div class="container-fluid">
        <div class="row">
            <label class="container-fluid" style="color: red"> * wajib diisi </label>
            <form action="{{ route('admin.event.save') }}" method="post">
            @csrf
                <div class="panel">
                    <div class="col-md-12">
                        <div class="row">
                            <input type="hidden" name="id" value="{{ $event->id }}">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="name"> <strong>Nama Event</strong> <label style="color: red"> * </label></label>
                                    <input name="name" type="text" class="form-control underline" id="name" placeholder="isi nama event" autocomplete="off">
                                    @error('name')
                                        <div class="form-group has-warning">
                                            {{ $errors->first('name') }} <label class="symbol required"></label>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="event_date"> <strong>Tanggal Event</strong> <label style="color: red"> * </label></label>
                                    <input name="event_date" type="text" class="form-control underline" id="event_date" placeholder="isi tanggal event" autocomplete="off">
                                    @error('event_date')
                                        <div class="form-group has-warning">
                                            {{ $errors->first('event_date') }} <label class="symbol required"></label>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <label for="status"> <strong>Status</strong></label>
                                    <div>
                                        <input name="status" type="checkbox" checked data-toggle="toggle" data-on="Open" data-off="Close" data-onstyle="success" data-offstyle="danger">
                                    </div>
                                    @error('status')
                                        <div class="form-group has-warning">
                                            {{ $errors->first('status') }} <label class="symbol required"></label>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="slug"> <strong>Slug</strong> <label style="color: red"> * </label></label>
                                    <input name="slug" id="slug" type="text" class="form-control underline" placeholder="slug sesuai nama event, contoh : event-gereja-gbi" autocomplete="off">
                                    @error('slug')
                                        <div class="form-group has-warning">
                                            {{ $errors->first('slug') }} <label class="symbol required"></label>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <!-- start: TEXT EDITOR -->
                                <div class="form-group">
                                    <label for="description"> <strong>Deskrisi Event</strong> <label style="color: red"> * </label></label>
                                    <textarea name="description" id="description" class="ckeditor form-control" cols="10" rows="10" placeholder="isi deskripsi tentang event"></textarea>
                                    @error('description')
                                        <div class="form-group has-warning">
                                            {{ $errors->first('description') }} <label class="symbol required"></label>
                                        </div>
                                    @enderror
                                </div>
                                <!-- end: TEXT EDITOR -->
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <button type="submit" class="btn btn-o btn-lg btn-primary pull-right"> Simpan </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
@endsection
