@extends('layouts.master')

@section('title', 'GMDVS - Master PIC')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/Datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet"  type="text/css" href="{{asset('vendor/datetimepicker/css/bootstrap-datetimepicker.css')}}"/>
<script src="{{asset('vendor/datetimepicker/js/jquery.min.js')}}"></script>
<script src="{{asset('vendor/datetimepicker/js/moment.min.js')}}"></script>
<script src="{{asset('vendor/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

<style>
    .btn-primary {
        background-color: #008B8B;
    }

</style>
@endsection

@section('content')

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="#">
                <button type="button" class="btn btn-outline-success" id="addModalPic">
                    <i class="fa fa-plus"></i>&nbsp;Tambah Data
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h4 class="card-header-title">Data PIC</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mt-3">
                        <div class="col">
                            <div class="datatable datatable-primary">
                                <div class="table-responsive">
                                    <table id="master-pic-datatables" class="table table-striped table-hover" style="width:100%">
                                        <thead class="text-center" style="text-transform: uppercase; font-size: 13px;" >
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Grup</th>
                                                <th>Role</th>
                                                <th>Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="{{ asset('vendor/Datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/Datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        //get data from datatables
        var table = $('#master-pic-datatables').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('master.pic.datatables') }}",
            },
            "columnDefs": [
                {
                "targets": 0,
                "className": "text-center",
                },
                {
                "targets": 1,
                "className": "text-center",
                },
                {
                "targets": 2,
                "className": "text-center",
                },
                {
                "targets": 3,
                "className": "text-center",
                },
                {
                "targets": 4,
                "className": "text-center",
                },
                {
                "targets": 5,
                "className": "text-center",
                },
                {
                "targets": 6,
                "className": "text-center",
                }
            ],
            order: [[ 1, 'desc']],
            responsive: true,
            columns: [
            {data: 'no',
                name: 'id',
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { data: 'username', name: 'username' },
            { data: 'name', name: 'name' },
            { data: 'group', name: 'group' },
            { data: 'role', name: 'role' },
            { data: 'handphone', name: 'handphone' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    </script>


{{-- @endpush --}}

@endsection
