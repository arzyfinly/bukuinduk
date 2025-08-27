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
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter"
                                    class="btn btn-sm btn-secondary ml-auto py-1">
                                    <i class="fas fa-file-excel"></i>
                                    Import Excel
                                </a>
                                <a href="{{ route('data-induk.create') }}" class="btn btn-sm btn-success ml-2 py-1">
                                    <i class="fa fa-plus"></i>
                                    Tambah
                                </a>
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
                                            <th>Nilai</th>
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
                                            <th>Nilai</th>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Export Excel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('data-induk.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="agama">File Excel</label>
                            <input type="file" class="form-control" id="file" name="file"
                                value="{{ old('file') }}" placeholder="File Excel">
                            @error('file')
                                <small class="text-danger" role="alert">
                                    {{ $message }}
                                </small>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ route('data-induk.download') }}" class="btn btn-success">Download Template</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table-data-induk tfoot th').each(function() {
                var title = $(this).text();
                if (title == 'Aksi' || title == '#' || title == 'Nilai') {
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
                    url: "{{ route('data-induk.index') }}",
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
                        data: 'nilai',
                        className: 'text-center',
                    },
                    {
                        data: 'action',
                        className: 'text-center',
                    },
                ]
            })
        });

        function deleteItem(e) {
            let id = e.getAttribute('data-id');
            let name = e.getAttribute('data-name');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true
            });
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            swalWithBootstrapButtons.fire({
                title: 'Yakin menghapus ' + name + '?',
                text: "Data akan di hapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Tidak, Batal!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: "data-induk/" + id,
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "_method": 'DELETE',
                            },
                            success: function(data) {
                                if (data.success == true) {
                                    Toast.fire({
                                        icon: 'success',
                                        title: data.message
                                    }).then((result) => {
                                        var oTable = $('#table-data-induk')
                                            .DataTable(); //inialisasi datatable
                                        oTable.ajax.reload();
                                    })
                                } else {
                                    swalWithBootstrapButtons.fire(
                                        data.message,
                                        "warning"
                                    )
                                }
                            }
                        });
                    }
                } else if (
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swal.fire(
                        'Batal',
                        'Data ' + name + ' tidak dihapus',
                        'error'
                    )
                }
            });
        }
    </script>
@endsection
