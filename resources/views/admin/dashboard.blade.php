@extends('layouts.admin.app')
@if ($customer ==null)
<div class="row margin_top">
    <div class="col-sm-0 col-xl-2"></div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-xxl-4 col-lg-4 col-md-4">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-top justify-content-between">
                            <div>
                                <span class="avatar avatar-md avatar-rounded bg-secondary">
                                    <i class="ti ti-user fs-16"></i>
                                </span>
                            </div>
                            <div class="flex-fill ms-3">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div>
                                        <p class="text-muted mb-0">Udt Users</p>
                                        <h4 class="fw-semibold mt-1 drivers">
                                            <div class="" role="status">
                                                <span class="">{{ $udt_users }}</span>
                                            </div>
                                        </h4>
                                    </div>
                                    <div id="crm-divers"></div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <div>
                                        <a class="text-secondary" href="{{ route('dashboard',['type' =>'udt']) }}">View All<i
                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0 fw-semibold per-divers"></p>
                                        <span class="text-muted op-7 fs-11 d-none">this month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-md-4">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-top justify-content-between">
                            <div>
                                <span class="avatar avatar-md avatar-rounded bg-secondary">
                                    <i class="ti ti-user fs-16"></i>
                                </span>
                            </div>
                            <div class="flex-fill ms-3">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div>
                                        <p class="text-muted mb-0">Booster Card Users</p>
                                        <h4 class="fw-semibold mt-1 drivers">
                                            <div class="" role="status">
                                                <span class="">{{ $booster_card }}</span>
                                            </div>
                                        </h4>
                                    </div>
                                    <div id="crm-divers"></div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <div>
                                        <a class="text-secondary" href="{{ route('dashboard',['type' =>'booster_card']) }}">View All<i
                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0 fw-semibold per-divers"></p>
                                        <span class="text-muted op-7 fs-11 d-none">this month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4 col-md-4">
                <div class="card custom-card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-top justify-content-between">
                            <div>
                                <span class="avatar avatar-md avatar-rounded bg-secondary">
                                    <i class="ti ti-user fs-16"></i>
                                </span>
                            </div>
                            <div class="flex-fill ms-3">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div>
                                        <p class="text-muted mb-0">Green Gen Users</p>
                                        <h4 class="fw-semibold mt-1 drivers">
                                            <div class="" role="status">
                                                <span class="">{{ $green_gen }}</span>
                                            </div>
                                        </h4>
                                    </div>
                                    <div id="crm-divers"></div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <div>
                                        <a class="text-secondary" href="{{ route('dashboard',['type' =>'green_gen']) }}">View All<i
                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                    </div>
                                    <div class="text-end">
                                        <p class="mb-0 fw-semibold per-divers"></p>
                                        <span class="text-muted op-7 fs-11 d-none">this month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-0 col-xl-2"></div>
</div>
@endif

@if ($customer !=null)
@section('header')
Customers Management
@endsection
@section('content')
@php
    $table_name = 'Customers List';
    $table_id = 'datatable';
    $tableData = [ 'Name', 'Email','Src'];
@endphp
@include('common.table.table')

@include('common.modal.add_edit_modal')
@endsection
@endif

{{-- @dd('bqwabba'); --}}
@section('js_after')
    {{-- **Show Data** --}}
    <script type="text/javascript">
        $(function () { 
          var table = $('.data-table').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('get_users',['type' => $customer]) }}",
              columns: [
                  {data: 'name', name: 'name'},
                  {data: 'email', name: 'email' },
                  {data: 'src', name: 'src', orderable: false, searchable: false}
              ]
          });
          
        });
    </script>
    // {{-- @include('common.js.get_data') --}}


    // {{-- **Delete Data** --}}
@endsection