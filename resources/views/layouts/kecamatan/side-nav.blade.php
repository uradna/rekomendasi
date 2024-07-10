<div class="leftside-menu menuitem-active">

    <!-- Brand Logo Light -->
    <a href="{{ route('home') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('images/logo.png') }}" alt="logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{ route('home') }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('images/logo-dark.png') }}" alt="dark logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <!-- <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right"
        aria-label="Show Full Sidebar" data-bs-original-title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div> -->

    <!-- Full Sidebar Menu Close Button -->
    <!-- <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div> -->

    <!-- Sidebar -left -->
    <div class="h-100 show" id="leftside-menu-container" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                        aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content mt-1" style="padding: 0px;">
                            <!--- Sidemenu -->
                            <ul class="side-nav">

                                <li class="side-nav-title">Menu Operator</li>

                                <li class="side-nav-item">
                                    <a href="{{ route('kecamatan.dashboard') }}" class="side-nav-link">
                                        {{-- <i class="uil-home-alt"></i> --}}
                                        {{-- <i class="ri-home-line"></i> --}}
                                        <i class="ri-dashboard-line"></i>
                                        <span> Dashboards </span>
                                    </a>
                                </li>

                                {{-- <li class="side-nav-item">
                                    <a href="{{ route('kecamatan.template.new') }}" class="side-nav-link">
                                        <i class="uil-books"></i>
                                        <span> Pengajuan Rekom </span>
                                    </a>
                                </li> --}}

                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#rekom1" aria-expanded="false" aria-controls="rekom1"
                                        class="side-nav-link">
                                        {{-- <i class="uil-books"></i> --}}
                                        {{-- <i class="ri-file-copy-2-line"></i> --}}
                                        <i class="ri-file-upload-line"></i>
                                        <span> Pengajuan Rekom </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="rekom1">
                                        <ul class="side-nav-second-level">
                                            <li>
                                                <a href="javascript: void(0);">Semua</a>
                                            </li>
                                            <li class="side-nav-item">
                                                <a data-bs-toggle="collapse" href="#rekom2" aria-expanded="false" aria-controls="rekom2">
                                                    <span> Per-Desa </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="rekom2">
                                                    <ul class="side-nav-third-level">

                                                        @foreach (allDesa() as $d)
                                                            <li>
                                                                <a href="#{{ $d->id }}">{{ $d->nama }}
                                                                    @if ($d->id < '5')
                                                                        <span class="badge rounded-pill bg-warning font-10" style="right:-10%;">
                                                                            1
                                                                        </span>
                                                                    @endif

                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>



                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#rekom3" aria-expanded="false" aria-controls="rekom3"
                                        class="side-nav-link">
                                        {{-- <i class="uil-parcel"></i> --}}
                                        <i class="ri-file-2-line"></i>
                                        <span> Template Pengajuan </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="rekom3">
                                        <ul class="side-nav-second-level">
                                            <li>
                                                <a href="{{ route('kecamatan.template') }}">Daftar Template</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Buat Template Baru</a>
                                            </li>

                                            {{-- <li class="side-nav-item">
                                                <a data-bs-toggle="collapse" href="#rekom4" aria-expanded="false" aria-controls="rekom4">
                                                    <span> Per-Desa </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="rekom4">
                                                    <ul class="side-nav-third-level">


                                                        <li>
                                                            <a href="#semua">{{ $d->nama }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </li>
                                {{-- <li class="side-nav-item">
                                    <a href="{{ route('kecamatan.template.new') }}" class="side-nav-link">
                                        <i class="uil-parcel"></i>
                                        <span> Template Surat </span>
                                    </a>
                                </li> --}}


                                @if (Auth::user()->role == 'admin-kecamatan')
                                    <li class="side-nav-title mt-1">Menu Admin</li>

                                    <li class="side-nav-item">
                                        <a href="javascript: void(0);" class="side-nav-link">
                                            {{-- <i class="uil-database"></i> --}}
                                            <i class="ri-government-line"></i>
                                            <span> Profil Kecamatan </span>
                                        </a>
                                    </li>


                                    <li class="side-nav-item">
                                        <a href="javascript: void(0);" class="side-nav-link">
                                            {{-- <i class="uil-database"></i> --}}
                                            <i class="ri-database-2-line"></i>
                                            <span> Daftar Desa </span>
                                        </a>
                                    </li>

                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#user1" aria-expanded="false"
                                            aria-controls="user1" class="side-nav-link">
                                            <i class="ri-database-2-line"></i>
                                            <span> User Kecamatan </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="user1">
                                            <ul class="side-nav-second-level">
                                                <li>
                                                    <a
                                                        href="https://coderthemes.com/hyper/saas/apps-ecommerce-products.html">Daftar User</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://coderthemes.com/hyper/saas/apps-ecommerce-products-details.html">Buat user baru</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>

                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#user2" aria-expanded="false"
                                            aria-controls="user2" class="side-nav-link">
                                            <i class="ri-database-2-line"></i>
                                            <span> User Desa </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="user2">
                                            <ul class="side-nav-second-level">
                                                <li>
                                                    <a
                                                        href="{{ route('kecamatan.user.desa') }}">Semua</a>
                                                </li>
                                                <li class="side-nav-item">
                                                    <a data-bs-toggle="collapse" href="#user3" aria-expanded="false" aria-controls="user3">
                                                        <span> Per-Desa </span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="user3">
                                                        <ul class="side-nav-third-level">

                                                            @foreach (allDesa() as $d)
                                                                <li>
                                                                    {{-- <span class="badge bg-success float-end small">5</span> --}}

                                                                    <a href="#{{ $d->id }}">{{ $d->nama }}</a>

                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                                {{-- <li>
                                                    <a
                                                        href="javascript: void(0);">Buat User Baru</a>
                                                </li> --}}
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#user4" aria-expanded="false"
                                            aria-controls="user4" class="side-nav-link">
                                            <i class="ri-settings-4-line"></i>
                                            <span> Setting Pengajuan </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="user4">
                                            <ul class="side-nav-second-level">
                                                <li>
                                                    <a
                                                        href="https://coderthemes.com/hyper/saas/apps-ecommerce-products.html">Daftar User</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://coderthemes.com/hyper/saas/apps-ecommerce-products-details.html">Buat user baru</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>


                                    {{-- <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false"
                                            aria-controls="sidebarCrm" class="side-nav-link">
                                            <i class="uil uil-tachometer-fast"></i>
                                            <span class="badge bg-danger text-white float-end">New</span>
                                            <span> CRM </span>
                                        </a>
                                        <div class="collapse" id="sidebarCrm">
                                            <ul class="side-nav-second-level">
                                                <li>
                                                    <a
                                                        href="https://coderthemes.com/hyper/saas/crm-projects.html">Projects</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://coderthemes.com/hyper/saas/crm-orders-list.html">Orders
                                                        List</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://coderthemes.com/hyper/saas/crm-clients.html">Clients</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://coderthemes.com/hyper/saas/crm-management.html">Management</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}



                                    {{-- <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel"
                                            class="side-nav-link">
                                            <i class="uil-folder-plus"></i>
                                            <span> Multi Level </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarMultiLevel">
                                            <ul class="side-nav-second-level">
                                                <li>
                                                    <a href="javascript: void(0);">Item 1</a>
                                                </li>
                                                <li class="side-nav-item">
                                                    <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                                        <span> Third Level </span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <div class="collapse" id="sidebarThirdLevel">
                                                        <ul class="side-nav-third-level">
                                                            <li>
                                                                <a href="javascript: void(0);">Item 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript: void(0);">Item 2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                @endif


                                <!-- Help Box -->
                                {{-- <div class="help-box text-white text-center">
                                    <a href="javascript: void(0);" class="float-end close-btn text-white">
                                        <i class="mdi mdi-close"></i>
                                    </a>
                                    <img src="images/help-icon.svg" height="90" alt="Helper Icon Image">
                                    <h5 class="mt-3">Unlimited Access</h5>
                                    <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                                    <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
                                </div> --}}
                                <!-- end Help Box -->


                            </ul>
                            <!--- End Sidemenu -->

                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1951px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 213px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
    </div>
</div>
