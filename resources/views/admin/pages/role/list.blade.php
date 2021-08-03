@extends ('admin.layouts.main')

@push('css')
	<link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="screen">
	<link href="{{ asset('vendor/DataTables/css/DT_bootstrap.css') }}" rel="stylesheet" media="screen">
@endpush

@section('content')
<!-- start: TITLE -->
	<section id="page-title" class="padding-top-5 padding-bottom-5">
		<div class="row">
			<div class="col-sm-7">
				<span class="mainDescription">LIST ROLE</span>
			</div>
		</div>
	</section>
<!-- end: TITLE -->
<div class="panel">
	<div class="container-fluid container-fullw bg-white">
		<div class="row">
			<div class="col-md-12 space20">
				<a href="#">
					<button class="btn btn-green add-row">
						Add New <i class="fa fa-plus"></i>
					</button>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered table-hover table-full-width" id="role_table">
					<thead>
						<th>No.</th>
						<th>Nama</th>
						<th>Is Admin</th>
						<th>Action</th>
					</thead>
					<tbody>
						@foreach($roles as $key => $role)
							<tr>
								<td>{{ $key+1 }}</td>
								<td><a href="#">{{ $role->name }}</a></td>
								<td>{{ $role->is_admin?'Admin':'Bukan Admin' }}</td>
								<td class="center">
									<button type="submit" class="btn btn-transparent btn-xs btn_delete" data-id="{{$role->id}}">
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
		    $(document).ready(function() { $('#role_table').DataTable(); } );
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
				  dangerMode: true,
				})
				.then((willDelete) => {
				  if (willDelete) {
		             $.ajax({
		                type: 'POST',
		                url: '{{route('api.admin.role.delete')}}',
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