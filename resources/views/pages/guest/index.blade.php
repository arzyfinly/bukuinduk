@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Induk</h4>
                <ul class="breadcrumbs ml-2">
                    <li class="nav-home">
                        <a href="{{ route('home') }}">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Data Induk</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-12 mb--2">
                    <div class="card">
                        <div class="card-header py-2">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Data Induk</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-data-induk" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NISN</th>
                                            <th>NIK</th>
                                            <th style="width: 7%">Kelas</th>
                                            <th style="width: 5%">Gender</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>NISN</th>
                                            <th>NIK</th>
                                            <th>Kelas</th>
                                            <th>Gender</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table-data-induk tfoot th').each(function() {
                var title = $(this).text();
                if (title == 'Aksi' || title == '#') {
                    return null;
                } else {
                    $(this).html('<input type="text" class="form-control" placeholder="Cari ' + title +
                        '" />');
                }
            });

            $('#table-data-induk').DataTable({
                initComplete: function() {
                    this.api()
                        .columns()
                        .every(function() {
                            var that = this;

                            $('input', this.footer()).on('keyup change clear', function() {
                                if (that.search() !== this.value) {
                                    that.search(this.value).draw();
                                }
                            });
                        });
                },
                processing: true,
                serverside: true,
                ajax: {
                    url: "{{ route('guest-data-induk.index') }}",
                    type: 'GET'
                },
                responsive: true,
                columns: [{
                        data: 'DT_RowIndex',
                    },
                    {
                        data: 'nama',
                    },
                    {
                        data: 'nisn',
                    },
                    {
                        data: 'nik',
                    },
                    {
                        data: 'kelas',
                    },
                    {
                        data: 'jenis_kelamin',
                    },
                    {
                        data: 'action',
                        className: 'text-center',
                    },
                ]
            })
        });
    </script>
@endsection
