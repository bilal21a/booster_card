@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="row">

            <div class="col">
                <div class="row">
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-primary">
                                            <i class="ti ti-users fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">Total UDT Customers</p>
                                                <h4 class="fw-semibold mt-1 udt">
                                                    <div class="spinner-border" role="status">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </h4>
                                            </div>
                                            <div id="crm-udt"></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-primary" href="#">View All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 fw-semibold per-udt"></p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-secondary">
                                            <i class="ti ti-users fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">Total Booster Card Customers</p>
                                                <h4 class="fw-semibold mt-1 booster_card">
                                                    <div class="spinner-border" role="status">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </h4>
                                            </div>
                                            <div id="crm-booster_card"></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-secondary" href="#">View All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 fw-semibold per-booster_card"></p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                        <div class="card custom-card overflow-hidden">
                            <div class="card-body">
                                <div class="d-flex align-items-top justify-content-between">
                                    <div>
                                        <span class="avatar avatar-md avatar-rounded bg-success">
                                            <i class="ti ti-users fs-16"></i>
                                        </span>
                                    </div>
                                    <div class="flex-fill ms-3">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                                            <div>
                                                <p class="text-muted mb-0">Total Green Gen Customers</p>
                                                <h4 class="fw-semibold mt-1 green_gen">
                                                    <div class="spinner-border" role="status">
                                                        <span class="sr-only">Loading...</span>
                                                    </div>
                                                </h4>
                                            </div>
                                            <div id="crm-green_gen"></div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <div>
                                                <a class="text-success" href="#">View All<i
                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                            </div>
                                            <div class="text-end">
                                                <p class="mb-0 fw-semibold per-green_gen"></p>
                                                <span class="text-muted op-7 fs-11">this month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
       
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="get_count_graph" value="{{ route('get_count_graph') }}">
<input type="hidden" id="get_percentage" value="{{ route('get_percentage') }}">
@endsection
@section('js_after')
    <!-- CRM-Dashboard -->
    <script src="{{ asset('assets_admin/custom/Customdashboard.js') }}"></script>
    <script>
        axios.get("{{ route('get_count') }}")
            .then(response => {
                console.log(response.data);
                var data = response.data;
                Object.entries(data).forEach(([key, value]) => {
                    console.log(key + ': ' + value);
                    $(`.${ key }`).html(value);
                    // Perform actions on each property
                });

            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection