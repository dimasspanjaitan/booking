@extends ('admin.layouts.main')

@section('content')
    <!-- start: TITLE -->
	<section id="page-title" class="padding-top-5 padding-bottom-5">
		<div class="row" style="padding-left:0px;">
			<div class="col-sm-7">
				<span class="mainDescription">LIST EVENT</span>
			</div>
		</div>
	</section>
    <!-- end: TITLE -->
    <div class="container-fluid">
        <div class="table-responsive padding-top-10">
            <form action="{{ route('admin.event.list') }}" method="GET">       
                <table id="table" width="100%" class="table table-hover display nowrap table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Nama</th>
                            <th>Tanggal Event</th>
                            <th>Status</th>
                            <th width="20px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><a href="{{ route('admin.event.edit', $item->id) }}">{{ $item->name }}</a></td>
                                <td>{{ $item->event_date }}</td>
                                <td>{{ $item->status?'Dibuka':'Ditutup' }}</td>
                                <td class="center">
                                    <button type="submit" class="btn btn-transparent btn-sm btn_delete" data-id="{{$item->id}}">
										<i class="fa fa-trash"></i>
									</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(function() {
            $('#table').DataTable({
                dom: 'B<"toolbar">frtip',
                // buttons: [
                //     'excel', 'pdf', 'print'
                // ]
            });
        })
    </script>
@endpush
