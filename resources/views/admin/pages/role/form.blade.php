@extends ('admin.layouts.main')

@push('css')
	<link href="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') }}" rel="stylesheet" media="screen">
@endpush

@push('script')
    <script src="{{ asset('vendor/selectFx/selectFx.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
@endpush

@section('content')
<!-- start: TITLE -->
	<section id="page-title" class="padding-top-5 padding-bottom-5">
		<div class="row">
			<div class="col-sm-7">
				<span class="mainDescription">FORM ROLE</span>
			</div>
		</div>
	</section>
    <!-- end: TITLE -->
    <div class="panel">
        <form action="{{ route('admin.role.save') }}" method="POST">
            @csrf
            <div class="container-fluid container-fullw bg-white">
                <div class="row">
                    <input type="hidden" name="id" value="">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="">
                                <div class="">
                                    <input type="checkbox" id="is_admin" name="is_admin"  value="1">
                                    <label for="checkbox2">
                                        Is Admin
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary pull-right" type="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

