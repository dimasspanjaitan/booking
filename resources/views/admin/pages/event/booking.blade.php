@extends ('admin.layouts.main')

@section('content')
    <!-- start: TITLE -->
	<section id="page-title" class="padding-top-5 padding-bottom-5">
		<div class="row" style="padding-left:0px;">
			<div class="col-sm-7">
				<span class="mainDescription">LIST BOOKING</span>
			</div>
		</div>
	</section>
    <!-- end: TITLE -->
    <div class="container-fluid">
        <div class="table-responsive padding-top-10">
            <table id="table" width="100%" class="table table-hover display nowrap table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Bangku</th>
                        <th>Nama Event</th>
                        <th>Nama</th>
                        <th>No WA</th>
                        <th>Tanggal</th>
                        <th width="10px">Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('admin-assets/css/datatables.button.min.css') }}">
@endpush

@push('script')
    <script src="{{asset('admin-assets/js/datatables.min.js')}}"></script>
    <script src="{{ asset('admin-assets/js/datatables.button.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/datatables.html5.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/datatables.jszip.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/datatables.pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/datatables.vfs.min.js') }}"></script>
    <script src="{{ asset('admin-assets/js/datatables.print.min.js') }}"></script>

    <script>
        $(function() {
            const url = '{{ route('admin.event.booking.feed') }}';

            $('#table').DataTable({
                "bSort": true,
                 "bProcessing": true,
                "bServerSide": true,
                "ajax": {
                    "url": url,
                    "type": "get",
                },
                dom: 'Bfrt',
                buttons: [
                    'excel', 'pdf', 'print'
                ],
                columns: [
                    {data: 'no', searchable: false },
                    { data: 'code', name: 'code', searchable: true },
                    { data: 'event_name', name: 'event_name', searchable: true },
                    { data: 'name', name: 'name', searchable: true },
                    { data: 'phone', name: 'phone', searchable: true },
                    { data: 'created_at', name: 'created_at', searchable: true },
                    { data: 'action', name: 'action' }
                ],
                "columnDefs": [
                    {targets: 0, searchable:false, render: function(data,type,row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }}
                ]

            });
        });
    </script>
@endpush
