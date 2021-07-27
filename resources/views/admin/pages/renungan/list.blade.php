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
<div class="panel" style="margin-top:15px">
	<!-- start: DYNAMIC TABLE -->
	<div class="container-fluid container-fullw bg-white">
		<div class="row">
			<div class="col-md-12">
				<h5 class="over-title margin-bottom-15"><span class="text-bold">List Renungan </span>yang telah di-Upload</h5>
				<table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">
					<thead>
						<th>Tema</th>
						<th>Ayat Alkitab</th>
						<th>Isi Ayat Alkitab</th>
						<th>Konten Renungan</th>
						<th>Link</th>
						<th>View</th>
						<th>Upload By</th>
						<th>Tanggal Upload</th>
						<th>Hapus</th>
					</thead>
					<tbody>
						@foreach($renungans as $key => $renungan)
							<tr>
								<td>{{ $renungan->thema }}</td>
								<td>{{ $renungan->nats }}</td>
								<td>{!! substr($renungan->nats_content, 0, 50) !!}</td>
								<td>{!! substr($renungan->content, 0, 50) !!}</td>
								<td>{{ $renungan->link }}</td>
								<td>{{ $renungan->view }}</td>
								<td>{{ $renungan->admin->name }}</td>
								<td>{{ $renungan->created_at->format('d M Y - H:i:s') }}</td>
								<td class="center">
									<button type="submit" class="btn btn-transparent btn-xs btn_delete" data-id="{{$renungan->id}}">
										<i class="fa fa-trash fa-2x"></i>
									</button>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- end: DYNAMIC TABLE -->
</div>
@endsection

@push('script')
  	<script type="text/javascript" src="{{ asset('admin-assets/js/dataTables.min.js') }}"></script>
  	<script type="text/javascript" src="{{ asset('admin-assets/js/dataTables.bootstrap4.min.js') }}"></script>
  	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset('vendor/DataTables/jquery.dataTables.min.js') }}"></script>

	<script type="text/javascript">

		$(function () {
		    $(document).ready(function() { $('#sample_1').DataTable(); } );

		    $('.btn_delete').click(function(){
		    	var id = $(this).data('id');
		    	var data = {
	                "id": id,
	                '_token': '{{ csrf_token() }}'
	            };
		    	swal({
				  title: "Anda yakin menghapus?.",
				  text: "Aksi tidak dapat di batalkan.",
				  icon: "warning",
				  buttons: true,
				  dangerMode: true
				})
				.then((willDelete) => {
				  if (willDelete) {
		             $.ajax({
		                type: 'POST',
		                url: '{{ route('api.admin.dashboard.delete') }}',
		                data: data,
		                dataType: 'JSON',
		                success: function(response) {
		                	console.log(response);
		                    if(response.status == 'success'){
		                   		swal("Data Berhasil Dihapus ", {
							      icon: "success",
							    });

							    location.reload();
		                    }
		                },
		                error: function (jqXHR, status) {
		                    
		                }
		            });


				   
				  }
				});
		    });
		 });
	</script>
@endpush