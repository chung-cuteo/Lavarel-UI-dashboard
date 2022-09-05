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
      @include('parts.search-bar')
      <div class="card shadow border-0 mb-7">
        <div class="card-header d-flex align-items-center">
          <h5 class="mb-0"> 見積依頼一覧</h5>
          <div class="d-flex align-items-center" style="margin-left:auto">
            <label class="flex-shrink-0" style="margin: 0">一覧件表示数</label>
            <select class="form-select form-select-sm mx-4" size="1" aria-label="">
              <option selected>20</option>
              <option value="1">30</option>
              <option value="2">50</option>
              <option value="2">100</option>
            </select>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-hover table-nowrap">
            <thead class="thead-light">
              <tr>
                <th scope="col">案件ID</th>
                <th scope="col">姓</th>
                <th scope="col">名</th>
                <th scope="col">メールアドレス</th>
                <th scope="col">見積依頼日</th>
                <th scope="col">士業名称</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($requestQuotationList as $item)
                <tr>
                  <td>
                    {{ $item['project_id'] }}
                  </td>
                  <td>
                    {{ $item['firts_name'] }}
                  </td>
                  <td>
                    {{ $item['last_name'] }}
                  </td>
                  <td>
                    {{ $item['email'] }}
                  </td>
                  <td>
                    {{ $item['quotation_date'] }}
                  </td>
                  <td>
                    {{ $item['professional_name'] }}
                  </td>
                  <td class="text-end">
                    <a href="/projects/request-quotation/{{ $item['project_id'] }}/edit"
                      class="btn btn-sm btn-neutral">編集</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer border-0 py-5">
          <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
          @include('parts.pagination')
        </div>
      </div>
    </div>
  </main>
@endsection
