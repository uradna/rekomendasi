<x-kecamatan-layout>
    <x-slot name="title">
        Dashboard - Daftar Template
    </x-slot>

    <x-slot name="header">
        Daftar Templete Pengajuan
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


            /* tbody, td, tfoot, th, thead, tr {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  
} */
            /*
            table.dataTable.display tbody tr.odd>.sorting_1 {
                background-color: white;
            }

            table.dataTable.display tbody tr.odd {
                background-color: white;
            }

            table.dataTable.display tbody tr.even>.sorting_1 {
                background-color: white;
            }

            table.dataTable.display tbody tr.even {
                background-color: white;
            } */
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
                                        <th> Nama </th>
                                        <th data-priority="0">Asal/Perangkat Daerah </th>
                                        <th data-priority="1"> HP </th>
                                        <th data-priority="2" class="text-center">Laporan</th>
                                        <th class="text-center">Validasi</th>
                                        <th class="text-center">Validasi</th>
                                        <th class="text-center">Validasi</th>
                                        <th data-priority="3" class="text-center">Button</th>

                                    </tr>
                                </thead>
                                <tbody id="table">
                                    <tr>
                                        <td class="font-med">Broto</td>
                                        <td class="font-med">Broto, Kec. Slahung</td>
                                        <td class="font-med">
                                            <a href="https://wa.me/6281225181060?text=Bpk/Ibu Broto"
                                                target="_blank" class="text-secondary">
                                                <i class="uil-whatsapp text-success"></i> 081225181060
                                            </a>
                                        </td>

                                        <td class="font-med text-center">1 / 4</td>

                                        <td class="font-med text-center">1 / 4</td>
                                        <td class="font-med text-center">1 / 4</td>
                                        <td class="font-med text-center">1 / 4</td>
                                        <td class="font-med text-center">1 / 4</td>




                                    </tr>
                                    <tr>
                                        <td class="font-med">Caluk</td>
                                        <td class="font-med">Caluk, Kec. Slahung</td>
                                        <td class="font-med">
                                            -
                                        </td>

                                        <td class="font-med text-center">0 / 4</td>

                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>




                                    </tr>
                                    <tr>
                                        <td class="font-med">Crabak</td>
                                        <td class="font-med">Crabak, Kec. Slahung</td>
                                        <td class="font-med">
                                            -
                                        </td>

                                        <td class="font-med text-center">0 / 4</td>

                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>




                                    </tr>
                                    <tr>
                                        <td class="font-med">Duri</td>
                                        <td class="font-med">Duri, Kec. Slahung</td>
                                        <td class="font-med">
                                            -
                                        </td>

                                        <td class="font-med text-center">0 / 4</td>

                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>




                                    </tr>
                                    <tr>
                                        <td class="font-med">Galak</td>
                                        <td class="font-med">Galak, Kec. Slahung</td>
                                        <td class="font-med">
                                            -
                                        </td>

                                        <td class="font-med text-center">0 / 4</td>

                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>




                                    </tr>
                                    <tr>
                                        <td class="font-med">Gombang</td>
                                        <td class="font-med">Gombang, Kec. Slahung</td>
                                        <td class="font-med">
                                            -
                                        </td>

                                        <td class="font-med text-center">0 / 4</td>

                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>




                                    </tr>
                                    <tr>
                                        <td class="font-med">Gundik</td>
                                        <td class="font-med">Gundik, Kec. Slahung</td>
                                        <td class="font-med">
                                            -
                                        </td>

                                        <td class="font-med text-center">0 / 4</td>

                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>




                                    </tr>
                                    <tr>
                                        <td class="font-med">Janti</td>
                                        <td class="font-med">Janti, Kec. Slahung</td>
                                        <td class="font-med">
                                            -
                                        </td>

                                        <td class="font-med text-center">0 / 4</td>

                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>




                                    </tr>
                                    <tr>
                                        <td class="font-med">Jebeng</td>
                                        <td class="font-med">Jebeng, Kec. Slahung</td>
                                        <td class="font-med">
                                            -
                                        </td>

                                        <td class="font-med text-center">0 / 4</td>

                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>




                                    </tr>
                                    <tr>
                                        <td class="font-med">Kambeng</td>
                                        <td class="font-med">Kambeng, Kec. Slahung</td>
                                        <td class="font-med">
                                            -
                                        </td>

                                        <td class="font-med text-center">0 / 4</td>

                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>
                                        <td class="font-med text-center">0 / 4</td>




                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            {{-- MAINEND --}}

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
                            columnDefs: [{
                                orderable: false,
                                targets: [7]
                            }],
                            order: [
                                [0, "desc"]
                            ],
                            lengthChange: !1,
                            filter: 1,
                            pageLength: 10,
                            info: 1,
                            buttons: [{
                                    text: 'Create User',
                                    className: 'addbtn btn-rounded-e btn-sm',
                                }

                            ],
                            language: {
                                search: "",
                                searchPlaceholder: "Pencarian",
                                info: "Data _START_ s/d _END_ dari _TOTAL_ total data",
                                infoFiltered: "",
                                zeroRecords: "Data tidak ditemukan",
                                emptyTable: "Tidak ada data",
                                paginate: {
                                    previous: "<i class='mdi mdi-chevron-left'>",
                                    next: "<i class='mdi mdi-chevron-right'>"
                                }
                            },
                            drawCallback: function() {
                                $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                                $(".dataTables_paginate > .pagination > .active > .page-link ").addClass(
                                    "bg-info");
                                $("#datatable-buttons_info").addClass("text-muted");
                            }
                        });
                        a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"), $(
                            "#alternative-page-datatable").DataTable({
                            pagingType: "full_numbers",
                            drawCallback: function() {
                                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                            }
                        });
                        a.buttons('.addbtn')
                            .nodes()
                            .attr('data-bs-toggle', 'modal');
                        a.buttons('.addbtn')
                            .nodes()
                            .attr('data-bs-target', '#new');
                        a.on('click', '.edit', function(e) {
                            e.preventDefault();
                            $('#edit #editName').val($(this).data('name'));
                            $('#edit #editId').val($(this).data('id'));
                            $('#edit #editAsal').val($(this).data('asal'));
                            $('#edit #editEmail').val($(this).data('email'));
                        });
                        a.on('click', '.pass', function(e) {
                            e.preventDefault();
                            $('#pass #passId').val($(this).data('id'));
                            $('#pass #passName').val($(this).data('name'));
                        });

                        $('.button-toggle-menu').click(function() {
                            // alert();
                            // $("#table").fadeOut(30);
                            setTimeout(function() {
                                a.columns.adjust().draw();
                            }, 400);
                            // setTimeout(function() {
                            //     $("#table").fadeIn(300);
                            // }, 400);
                            // a.columns.adjust().draw();
                        });

                    });

                    // var table = new DataTable('#datatable-buttons');



                    // 
                </script>
            </x-slot>

</x-kecamatan-layout>
