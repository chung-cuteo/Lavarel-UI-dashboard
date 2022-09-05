<!-- Dashboard -->
@extends('layouts.app')

@section('sidenav')
  @include('parts.sidenav')
@endsection

@section('content-header')
  @include('parts.content-header')
@endsection

@section('content')
  <main class="py-6 bg-surface-secondary">
    <div class="container-fluid">
      <div class="row">
        @include('parts.month-picker')
      </div>

      <div class="row g-6 mb-6">
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <span class="h6 font-semibold text-muted text-sm d-block mb-2">案件数</span>
                  <span class="h3 font-bold mb-0">50件</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                    <i class="bi bi-cast"></i>
                  </div>
                </div>
              </div>
              <div class="mt-2 mb-0 text-sm">
                <span class="badge badge-pill bg-soft-success text-success me-2">
                  <i class="bi bi-arrow-up me-1"></i>13%
                </span>
                <span class="text-nowrap text-xs text-muted">Since last month</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <span class="h6 font-semibold text-muted text-sm d-block mb-2">見積依頼者数</span>
                  <span class="h3 font-bold mb-0">100</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                    <i class="bi bi-people"></i>
                  </div>
                </div>
              </div>
              <div class="mt-2 mb-0 text-sm">
                <span class="badge badge-pill bg-soft-success text-success me-2">
                  <i class="bi bi-arrow-up me-1"></i>20%
                </span>
                <span class="text-nowrap text-xs text-muted">Since last month</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card shadow border-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <span class="h6 font-semibold text-muted text-sm d-block mb-2">登録士業数</span>
                  <span class="h3 font-bold mb-0">100</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                    <i class="bi bi-person-check-fill"></i>
                  </div>
                </div>
              </div>
              <div class="mt-2 mb-0 text-sm">
                <span class="badge badge-pill bg-soft-danger text-danger me-2">
                  <i class="bi bi-arrow-down me-1"></i>-7%
                </span>
                <span class="text-nowrap text-xs text-muted">Since last month</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        @include('parts.dashboard-chart')
      </div>
    </div>
  </main>
@endsection
