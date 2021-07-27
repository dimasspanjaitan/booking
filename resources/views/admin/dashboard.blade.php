@extends ('admin.layouts.main')

@push('css')
	<link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('vendor/DataTables/css/DT_bootstrap.css') }}" rel="stylesheet" media="screen">
@endpush

@section('content')
<!-- start: DASHBOARD TITLE -->
	<section id="page-title" class="padding-top-5 padding-bottom-5">
		<div class="row">
			<div class="col-sm-7">
				<span class="mainDescription">DASHBOARD</span>
			</div>
		</div>
	</section>
<!-- end: DASHBOARD TITLE -->

@endsection