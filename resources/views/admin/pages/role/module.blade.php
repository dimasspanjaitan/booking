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
				<span class="mainDescription">FORM MODULE</span>
			</div>
		</div>
	</section>
    <!-- end: TITLE -->
    <div class="panel">
        <form action="{{ route('admin.role.module.save') }}" method="POST">
            @csrf
            <div class="container" style="padding-top:50px;">
                <div class="row">
                    <input type="hidden" name="id" value="{{ $role->id }}">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="name" id="name" value="{{ $role->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="is_admin" name="is_admin" {{ $role->is_admin?'checked':'' }} value="1">
                            <label for="checkbox2">
                                Is Admin
                            </label>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered table-hover" id="role_table" data-orders="desc">
                        <thead>
                            <th width="10px">No.</th>
                            <th>Nama Modul</th>
                            <th class="text-center" width="10">View
                                <p><input type="checkbox" id="view_all"></p>
                            </th>
                            <th class="text-center" width="10">Delete
                                <p><input type="checkbox" id="delete_all"></p>
                            </th>
                            <th class="text-center" width="10">Update
                                <p><input type="checkbox" id="update_all"></p>
                            </th>
                            <th class="text-center" width="10">Insert
                                <p><input type="checkbox" id="insert_all"></p>
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($role_modules as $key => $item)
                                <tr bgcolor="">
                                    <td>{{$key+1}}</td>
                                    <td>{{ $item->module->name }}</td>
                                    <td align="center">
                                        <input type="checkbox" name="v_ck_{{$item->id}}" class="view" {{  $item->view?'checked':''  }} value="1">
                                    </td>
                                    <td align="center">
                                        <input type="checkbox" name="d_ck_{{$item->id}}" class="delete" {{ $item->delete?'checked':''  }} value="1">
                                    </td>
                                    <td align="center">
                                        <input type="checkbox" name="u_ck_{{$item->id}}" class="update" {{  $item->update?'checked':''  }} value="1">
                                    </td>
                                    <td align="center">
                                        <input type="checkbox" name="i_ck_{{$item->id}}" class="insert" {{ $item->insert?'checked':''  }} value="1">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <button class="btn btn-primary pull-right" type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="{{ asset('admin-assets/js/dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin-assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/DataTables/jquery.dataTables.min.js') }}"></script>
    <script>
        // $(document).ready(function() { $('#role_table').DataTable(); } );
        $('#view_all').change(function (e) {
            if ($(this).prop('checked')) {
                $('.view').prop('checked', true);
            } else {
                $('.view').prop('checked', false);
            }
        });
        $('#delete_all').change(function (e) {
            if ($(this).prop('checked')) {
                $('.delete').prop('checked', true);
            } else {
                $('.delete').prop('checked', false);
            }
        });
        $('#update_all').change(function (e) {
            if ($(this).prop('checked')) {
                $('.update').prop('checked', true);
            } else {
                $('.update').prop('checked', false);
            }
        });
        $('#insert_all').change(function (e) {
            if ($(this).prop('checked')) {
                $('.insert').prop('checked', true);
            } else {
                $('.insert').prop('checked', false);
            }
        });
    </script>
@endpush