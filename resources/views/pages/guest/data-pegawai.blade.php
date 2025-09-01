@extends('layouts.app')
@section('content')
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Pegawai</h4>
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
                        <a href="#">Data Pegawai</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-12 mb--2">
                    <div class="card">
                        <div class="card-header py-2">
                            <div class="d-flex align-items-center">
                                <h4 class="card-title">Data Pegawai</h4>
                                {{-- <a href="{{ route('data-pegawai.export-excel') }}"
                                    class="btn btn-sm btn-secondary ml-auto py-1">
                                    <i class="fas fa-file-excel"></i>
                                    Export Excel
                                </a>
                                <a href="{{ route('data-pegawai.create') }}" class="btn btn-sm btn-success ml-2 py-1">
                                    <i class="fa fa-plus"></i>
                                    Tambah
                                </a> --}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-data-pegawai" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            {{-- <th class="text-center">Aksi</th> --}}
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Jenis Kelamin</th>
                                            {{-- <th class="text-center">Aksi</th> --}}
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
            $('#table-data-pegawai').DataTable({
                processing: true,
                serverside: true,
                ajax: {
                    url: "{{ route('guest-data-pegawai.index') }}",
                    type: 'GET'
                },
                responsive: true,
                columns: [{
                        data: 'DT_RowIndex',
                    },
                    {
                        data: 'nip',
                    },
                    {
                        data: 'nama',
                    },
                    {
                        data: 'email',
                    },
                    {
                        data: 'jenis_kelamin',
                    },
                    // {
                    //     data: 'action',
                    //     className: 'text-center',
                    // },
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
                            url: "guest-data-pegawai/" + id,
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
                                        var oTable = $('#table-data-pegawai')
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
