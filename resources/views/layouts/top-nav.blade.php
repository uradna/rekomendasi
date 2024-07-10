<div class="navbar-custom">
    <div class="topbar container-fluid">
        <div class="d-flex align-items-center gap-lg-2 gap-1">
            <!-- Sidebar Menu Toggle Button -->

            <!-- Topbar Brand Logo -->
            <div class="logo-topbar">
                <!-- Logo light -->
                <a href="/" class="logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo.png') }}" alt="logo">
                    </span>
                </a>
            </div>

            <button class="button-toggle-menu" id="togmenu">
                <i class="mdi mdi-menu-open" id="flipmenu"></i>
            </button>



            <!-- Topbar Search Form -->
            <!-- <div class="app-search dropdown d-none d-lg-block">
            </div> -->
        </div>

        <ul class="topbar-menu d-flex align-items-center gap-3">
            {{-- <li>
                <div class="d-none d-sm-inline-block">
                    <i class="ri-moon-line font-22"></i>
                </div>
            </li> --}}

            {{-- <li>
                <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="bottom"
                    aria-label="Theme Mode" data-bs-original-title="Theme Mode">
                    <i class="ri-moon-line font-22"></i>
                </div>
            </li> --}}


            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="ri-notification-3-line font-22"></i>
                    <span class="position-absolute translate-middle badge rounded-pill bg-warning font-10"
                        style="top: 23px;left:24px;">2</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0"
                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(0px, 72px, 0px);"
                    data-popper-placement="bottom-end">
                    {{-- <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border"> --}}
                    <div class="p-2 border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                            </div>
                            {{-- <div class="col-auto">
                                <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                    <small>Clear All</small>
                                </a>
                            </div> --}}
                        </div>
                    </div>

                    <div class="px-2" style="max-height: 300px;" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px -12px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content"
                                        style="height: auto; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px 12px;">

                                            {{-- <h5 class="text-muted font-13 fw-normal mt-2">Today</h5> --}}
                                            <!-- item-->

                                            <a href="javascript:void(0);"
                                                class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="notify-icon bg-danger">
                                                                <i class="mdi mdi-file-remove"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 text-truncate ms-2">
                                                            <h5 class="noti-item-title fw-semibold font-14">
                                                                Ditolak
                                                                <small
                                                                    class="fw-normal text-muted ms-1">1 min
                                                                    ago</small>
                                                            </h5>
                                                            <small class="noti-item-subtitle text-muted">Persetujuan Pencairan Honor Staf Kantor Desa</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);"
                                                class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="notify-icon bg-warning">
                                                                <i class="mdi mdi-file-refresh"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 text-truncate ms-2">
                                                            <h5 class="noti-item-title fw-semibold font-14">
                                                                Diproses <small class="fw-normal text-muted ms-1">1
                                                                    hours ago</small></h5>
                                                            <small class="noti-item-subtitle text-muted">
                                                                Persetujuan Pencairan Dana Pembangunan
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);"
                                                class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="notify-icon bg-success">
                                                                <i class="mdi mdi-file-check"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 text-truncate ms-2">
                                                            <h5 class="noti-item-title fw-semibold font-14">
                                                                Disetujui <small class="fw-normal text-muted ms-1">1
                                                                    hours ago</small></h5>
                                                            <small class="noti-item-subtitle text-muted">
                                                                Pencairan Biaya Konsumsi Kegiatan 17 Agustus
                                                            </small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="javascript:void(0);"
                                                class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <div class="notify-icon bg-danger">
                                                                <i class="mdi mdi-file-remove"></i>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1 text-truncate ms-2">
                                                            <h5 class="noti-item-title fw-semibold font-14">
                                                                Ditolak
                                                                <small
                                                                    class="fw-normal text-muted ms-1">1 min
                                                                    ago</small>
                                                            </h5>
                                                            <small class="noti-item-subtitle text-muted">Persetujuan Pencairan Honor Staf Kantor Desa</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>


                                            {{-- 
                                            <div class="text-center">
                                                <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 524px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                style="height: 171px; display: block; transform: translate3d(0px, 0px, 0px);">
                            </div>
                        </div>
                    </div>

                    <!-- All-->
                    {{-- <a href="javascript:void(0);"
                        class="dropdown-item text-center text-primary notify-item border-top py-2">
                        View All
                    </a> --}}

                </div>
            </li>





            <li class="dropdown">
                <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#"
                    role="button" aria-haspopup="false" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="{{ asset('images/avatar-1.png') }}" alt="user-image" width="32" class="rounded-circle">
                    </span>
                    <span class="d-lg-flex flex-column gap-1 d-none">
                        <h5 class="my-0">{{ Auth::user()->name }}</h5>
                        <h6 class="my-0 fw-normal">{{ Auth::user()->email }}</h6>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                    <!-- item-->
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Selamat datang !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="mdi mdi-account-circle me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="mdi mdi-account-edit me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();" class="dropdown-item">
                            <i class="mdi mdi-logout me-1"></i>
                            <span>Logout</span>
                        </a>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</div>
