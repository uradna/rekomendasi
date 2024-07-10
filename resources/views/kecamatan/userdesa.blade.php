<x-kecamatan-layout>
    <x-slot name="title">
        Manajemen User Desa
    </x-slot>

    <x-slot name="header">
        Daftar User Desa
    </x-slot>

    <x-slot name="topscript">
        <link rel="stylesheet" href="{{ asset('assets/select2/css/select2.css') }}" />
        <link href="{{ asset('assets/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/datatables/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/datatables/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css">
        <style>
            .dataTables_info {
                font-weight: 500 !important;
            }

            .table>tbody>tr>td {
                padding-top: 0.8rem;
                padding-bottom: 0.8rem;
                vertical-align: middle;
            }

            #datatable-buttons_wrapper tr {
                background: #FFFFFF;
            }

            .table-responsive {
                overflow-x: hidden !important;
            }
        </style>
    </x-slot>

    <x-slot name="map">
        {{-- <li class="breadcrumb-item"><a href="javascript: void(0);" class="link-light">Hyper</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);" class="link-light">Dashboard</a></li>
        <li class="breadcrumb-item active">Dashboard</li> --}}
    </x-slot>

    {{-- MAINSTART --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="page-aside-left p-0">
                        <div class="d-grid rounded px-1">
                            <h6 class="text-uppercase mt-0">Petunjuk</h6>
                            <ul class="font-13 ps-2">
                                <li class="mb-2">
                                    Klik tombol <b>Edit</b> untuk mengedit <b>judul</b> dan <b>materi pemeriksaan</b>.
                                </li>
                                <li class="mb-2">
                                    Klik tombol <b>Tambah lampiran</b> di bawah <b>File lampiran</b> untuk menambah <b>file lampiran</b>.
                                </li>
                                <li class="mb-2">
                                    Klik tombol <b>Tambah dokumen laporan</b> di bawah <b>File laporan</b> untuk menambah <b>dokumen laporan</b>.
                                </li>
                                <li class="mb-2">
                                    <b>Objek pemeriksaan</b> dapat ditambahkan sewaktu-waktu melalui tombol <b>Tambah objek pemeriksaan</b>.
                                </li>
                                <li class="mb-2">
                                    Klik tombol <b>x</b> pada <b>daftar objek pemeriksaan</b> untuk menghapus pengguna dari objek pemeriksaan.
                                </li>
                                <li class="mb-2">
                                    Klik pada <b>nama pengguna</b> pada daftar <b>objek pemeriksaan</b> untuk melihat respon / laporan dari objek pemeriksaan.
                                </li>
                                <li class="">
                                    Pengumpulan laporan pemeriksaan dapat ditutup dengan mengubah status pada tombol <b>status</b>.
                                </li>
                            </ul>
                            <hr>
                        </div>
                    </div>
                    <!-- End Left sidebar -->

                    <div class="page-aside-right">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-hover dt-responsive nowrap w-100">
                                <thead class="table-light ">
                                    <tr>
                                        <th data-priority="0">Id</th>
                                        <th data-priority="3">Desa</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>No. HP</th>
                                        <th>Email</th>
                                        <th data-priority="1">Role</th>
                                    </tr>
                                </thead>
                                <tbody id="main"> </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            {{-- MAINEND --}}
            {{-- @notmobile()
            dom: '<"container-fluid"<"row"<"col ps-0"B><"col pe-0"f>>>rtip',
            @elsenotmobile()
            dom: 'Bfrtip',
            @endnotmobile() --}}

            <x-slot name="bottomscript">
                <script src="{{ asset('assets/datatables/jquery.dataTables.min.js') }}"></script>
                <script src="{{ asset('assets/datatables/dataTables.bootstrap5.min.js') }}"></script>
                <script src="{{ asset('assets/datatables/dataTables.responsive.min.js') }}"></script>
                <script src="{{ asset('assets/datatables/responsive.bootstrap5.min.js') }}"></script>
                <script src="{{ asset('assets/datatables/dataTables.buttons.min.js') }}"></script>
                <script src="{{ asset('assets/datatables/buttons.bootstrap5.min.js') }}"></script>
                <script src="{{ asset('assets/datatables/buttons.html5.min.js') }}"></script>
                <script src="{{ asset('assets/datatables/button.jszip.min.js') }}"></script>
                <script src="{{ asset('assets/datatables/buttons.colVis.min.js') }}"></script>
                <script src="{{ asset('assets/datatables/buttons.print.min.js') }}"></script>

                <script>
                    $(document).ready(function() {
                        "use strict";
                        var a = $("#datatable-buttons").DataTable({
                            @notmobile()
                            dom: '<"container-fluid"<"row"<"col ps-0"B><"col pe-0"f>>>rtip',
                            @elsenotmobile()
                            dom: 'Bfrtip',
                            @endnotmobile()
                            ajax: "{{ route('kecamatan.user.desa.json') }}",
                            dataSrc: 'data',
                            columnDefs: [{
                                    data: 'id',
                                    targets: 0,
                                },
                                {
                                    data: 'desa',
                                    targets: 1,
                                },
                                {
                                    data: 'nama',
                                    targets: 2
                                },
                                {
                                    data: 'jabatan',
                                    targets: 3
                                },
                                {
                                    data: 'hp',
                                    targets: 4
                                },
                                {
                                    data: 'email',
                                    targets: 5,
                                },
                                {
                                    data: 'role',
                                    targets: 6,
                                }
                            ],
                            order: [
                                [0, 'desc']
                            ],
                            lengthChange: !1,
                            filter: !1,
                            searching: 1,
                            pageLength: 20,
                            info: !0,
                            buttons: [{
                                @notmobile()
                                text: '<i class="uil-arrow-left"></i>Kembali',
                                @elsenotmobile()
                                text: '<i class="uil-arrow-left"></i>',
                                className: 'mb-1',
                                @endmobile()
                                action: function(e, dt, node, config) {
                                    window.open("#",
                                        "_self");
                                }
                            }, {
                                extend: 'colvis',
                                @notmobile()
                                text: 'Kolom',
                                @elsenotmobile()
                                text: '<i class="mdi mdi-table-eye"></i>',
                                className: 'mb-1',
                                @endmobile()
                            }],
                            language: {
                                @desktop()
                                search: "Pencarian",
                                @enddesktop()
                                @mobile()
                                search: "",
                                searchPlaceholder: "Pencarian",
                                @endmobile()
                                info: "Menampilkan data ke _START_ sampai _END_ dari _TOTAL_ total data",
                                paginate: {
                                    previous: "<i class='mdi mdi-chevron-left'>",
                                    next: "<i class='mdi mdi-chevron-right'>"
                                }
                            },
                            drawCallback: function() {
                                $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                                $(".dataTables_paginate > .pagination > .active > .page-link ").addClass(
                                    "bg-secondary");
                            }
                        });
                        a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"), $(
                            "#alternative-page-datatable").DataTable({
                            pagingType: "full_numbers",
                            drawCallback: function() {
                                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                            }
                        });
                        $('.button-toggle-menu').click(function() {
                            // alert();
                            // $("#table").fadeOut(30);
                            setTimeout(function() {
                                a.columns.adjust().draw();
                            }, 500);
                            // setTimeout(function() {
                            //     $("#table").fadeIn(300);
                            // }, 400);
                            // a.columns.adjust().draw();
                        });
                    });
                </script>
            </x-slot>

</x-kecamatan-layout>
