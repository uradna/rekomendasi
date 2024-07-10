<div class="leftside-menu menuitem-active">

    <!-- Brand Logo Light -->
    <a href="https://coderthemes.com/hyper/saas/index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="images/logo.png" alt="logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="https://coderthemes.com/hyper/saas/index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="images/logo-dark.png" alt="dark logo">
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
                        <div class="simplebar-content" style="padding: 0px;">
                            <!--- Sidemenu -->
                            <ul class="side-nav">

                                <li class="side-nav-title">Menu Operator</li>

                                <li class="side-nav-item">
                                    <a href="{{ route('kecamatan.dashboard') }}" class="side-nav-link">
                                        <i class="uil-home-alt"></i>
                                        <span> Dashboards </span>
                                    </a>
                                </li>
                                @if (Auth::user()->role == 'admin-desa')
                                    <li class="side-nav-title">Menu Admin</li>

                                    <li class="side-nav-item">
                                        <a href="javascript:void(0);" class="side-nav-link">
                                            <i class="uil-calender"></i>
                                            <span> Calendar </span>
                                        </a>
                                    </li>

                                    <li class="side-nav-item">
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
                                    </li>

                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                                            aria-controls="sidebarEcommerce" class="side-nav-link">
                                            <i class="uil-store"></i>
                                            <span> Ecommerce </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarEcommerce">
                                            <ul class="side-nav-second-level">
                                                <li>
                                                    <a
                                                        href="https://coderthemes.com/hyper/saas/apps-ecommerce-products.html">Products</a>
                                                </li>
                                                <li>
                                                    <a
                                                        href="https://coderthemes.com/hyper/saas/apps-ecommerce-products-details.html">Products
                                                        Details</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                @endif










                                <!-- Help Box -->
                                <div class="help-box text-white text-center">
                                    <a href="javascript: void(0);" class="float-end close-btn text-white">
                                        <i class="mdi mdi-close"></i>
                                    </a>
                                    <img src="images/help-icon.svg" height="90" alt="Helper Icon Image">
                                    <h5 class="mt-3">Unlimited Access</h5>
                                    <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                                    <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
                                </div>
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
