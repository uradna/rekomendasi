<x-kecamatan-layout>
    <x-slot name="title">
        Dashboard Kecamatan
    </x-slot>

    <x-slot name="header">
        Dashboard Kecamatan
    </x-slot>

    <x-slot name="topscript">

    </x-slot>

    <x-slot name="map">
        {{-- <li class="breadcrumb-item"><a href="javascript: void(0);" class="link-light">Hyper</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);" class="link-light">Dashboard</a></li>
        <li class="breadcrumb-item active">Dashboard</li> --}}
    </x-slot>

    {{-- MAINSTART --}}
    <div class="row">
        <div class="col-12">
            <div class="card widget-inline">
                <div class="card-body p-0">
                    <div class="row g-0">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card rounded-0 shadow-none m-0">
                                <div class="card-body text-center">
                                    <i class="ri-briefcase-line text-muted font-24"></i>
                                    <h3><span>29</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Projects</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                <div class="card-body text-center">
                                    <i class="ri-list-check-2 text-muted font-24"></i>
                                    <h3><span>715</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Tasks</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                <div class="card-body text-center">
                                    <i class="ri-group-line text-muted font-24"></i>
                                    <h3><span>31</span></h3>
                                    <p class="text-muted font-15 mb-0">Members</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                <div class="card-body text-center">
                                    <i class="ri-line-chart-line text-muted font-24"></i>
                                    <h3><span>93%</span> <i class="mdi mdi-arrow-up text-success"></i>
                                    </h3>
                                    <p class="text-muted font-15 mb-0">Productivity</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="header-title">Tasks</h4>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle arrow-none card-drop"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">

                            <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>

                            <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>

                            <a href="javascript:void(0);" class="dropdown-item">Action</a>

                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>
                <div
                    class="card-header bg-light-lighten border-top border-bottom border-light py-1 text-center">
                    <p class="m-0"><b>107</b> Tasks completed out of 195</p>
                </div>
                <div class="card-body pt-2">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-hover mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                class="text-body">Coffee detail page - Main Page</a>
                                        </h5>
                                        <span class="text-muted font-13">Due in 3 days</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Status</span> <br>
                                        <span class="badge badge-warning-lighten">In-progress</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Assigned to</span>
                                        <h5 class="font-14 mt-1 fw-normal">Logan R. Cohn</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Total time spend</span>
                                        <h5 class="font-14 mt-1 fw-normal">3h 20min</h5>
                                    </td>
                                    <td class="table-action" style="width: 90px;">
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                class="text-body">Drinking bottle graphics</a></h5>
                                        <span class="text-muted font-13">Due in 27 days</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Status</span> <br>
                                        <span class="badge badge-danger-lighten">Outdated</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Assigned to</span>
                                        <h5 class="font-14 mt-1 fw-normal">Jerry F. Powell</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Total time spend</span>
                                        <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                    </td>
                                    <td class="table-action" style="width: 90px;">
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                class="text-body">Drinking bottle graphics</a></h5>
                                        <span class="text-muted font-13">Due in 27 days</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Status</span> <br>
                                        <span class="badge badge-danger-lighten">Outdated</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Assigned to</span>
                                        <h5 class="font-14 mt-1 fw-normal">Jerry F. Powell</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Total time spend</span>
                                        <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                    </td>
                                    <td class="table-action" style="width: 90px;">
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                class="text-body">Drinking bottle graphics</a></h5>
                                        <span class="text-muted font-13">Due in 27 days</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Status</span> <br>
                                        <span class="badge badge-danger-lighten">Outdated</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Assigned to</span>
                                        <h5 class="font-14 mt-1 fw-normal">Jerry F. Powell</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Total time spend</span>
                                        <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                    </td>
                                    <td class="table-action" style="width: 90px;">
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                class="text-body">Drinking bottle graphics</a></h5>
                                        <span class="text-muted font-13">Due in 27 days</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Status</span> <br>
                                        <span class="badge badge-danger-lighten">Outdated</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Assigned to</span>
                                        <h5 class="font-14 mt-1 fw-normal">Jerry F. Powell</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Total time spend</span>
                                        <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                    </td>
                                    <td class="table-action" style="width: 90px;">
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                class="text-body">Drinking bottle graphics</a></h5>
                                        <span class="text-muted font-13">Due in 27 days</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Status</span> <br>
                                        <span class="badge badge-danger-lighten">Outdated</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Assigned to</span>
                                        <h5 class="font-14 mt-1 fw-normal">Jerry F. Powell</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Total time spend</span>
                                        <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                    </td>
                                    <td class="table-action" style="width: 90px;">
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="font-14 my-1"><a href="javascript:void(0);"
                                                class="text-body">Drinking bottle graphics</a></h5>
                                        <span class="text-muted font-13">Due in 27 days</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Status</span> <br>
                                        <span class="badge badge-danger-lighten">Outdated</span>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Assigned to</span>
                                        <h5 class="font-14 mt-1 fw-normal">Jerry F. Powell</h5>
                                    </td>
                                    <td>
                                        <span class="text-muted font-13">Total time spend</span>
                                        <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                                    </td>
                                    <td class="table-action" style="width: 90px;">
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-pencil"></i></a>
                                        <a href="javascript: void(0);" class="action-icon"> <i
                                                class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- MAINEND --}}

    <x-slot name="bottomscript">
    </x-slot>

</x-kecamatan-layout>
