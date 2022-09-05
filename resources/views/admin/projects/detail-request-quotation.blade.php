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
    <div class="container-fluid py-7">
      <form action="#" method="POST">
        @method('GET')

        {{-- card 1 --}}
        <h5 class="card-title mb-7">見積依頼</h5>
        <div class="card mb-10">
          <div class="card-body">
            <div class="row mb-6">
              <div class="form-group col-sm-3">
                <label>案件ID</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['project_id'] }}" disabled>
                </div>
              </div>
              <div class="form-group col-sm-3">
                <label>都道府県</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['prefecture'] }}" disabled>
                </div>
              </div>
              <div class="form-group col-sm-3">
                <label for="project_id">市区町村</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['city'] }}" disabled>
                </div>
              </div>
              <div class="form-group col-sm-3">
                <label for="project_id">見積項目</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['quotation_item'] }}"
                    disabled>
                </div>
              </div>
            </div>

            <div class="row mb-6">
              <div class="form-group col-12">
                <label>見積依頼詳細</label>
                <div class="input-group">
                  <textarea rows="4" class="form-control" aria-label="With textarea" disabled>{{ $detail['quotation_content'] }}</textarea>
                </div>
              </div>
            </div>

            <div class="row mb-6">
              <div class="form-group col-12">
                <label>質問 1</label>
                <div class="input-group">
                  <textarea rows="4" class="form-control" aria-label="With textarea" disabled>{{ $detail['quotation_content'] }}</textarea>
                </div>
              </div>
            </div>
            @foreach ($detail['question'] as $key => $item)
              <div class="row mb-6">
                <div class="form-group col-12">
                  <label>質問 {{ $key + 1 }}</label>
                  <div class="input-group">
                    <textarea rows="4" class="form-control" aria-label="With textarea" disabled>{{ $item }}</textarea>
                  </div>
                </div>
              </div>
            @endforeach

            <div class="row mb-6">
              <div class="form-group col-sm-3">
                <label>姓</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['firts_name'] }}" disabled>
                </div>
              </div>
              <div class="form-group col-sm-3">
                <label>名</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['last_name'] }}" disabled>
                </div>
              </div>
              <div class="form-group col-sm-3">
                <label for="project_id">フリガナ（姓）</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['firts_name_furigana'] }}"
                    disabled>
                </div>
              </div>
              <div class="form-group col-sm-3">
                <label for="project_id">フリガナ（名）</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['last_name_furigana'] }}"
                    disabled>
                </div>
              </div>
            </div>

            <div class="row mb-6">
              <div class="form-group col-sm-3">
                <label>メールアドレス</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['email'] }}" disabled>
                </div>
              </div>
              <div class="form-group col-sm-3">
                <label>電話番号</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['phone_number'] }}"
                    disabled>
                </div>
              </div>
              <div class="form-group col-sm-3">
                <label>見積依頼日</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['quotation_date'] }}"
                    disabled>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- card 2 --}}
        <h5 class="card-title mb-7">見積依頼案件明細</h5>
        <div class="card mb-10">
          <div class="card-body">
            <div class="row mb-6">
              <div class="form-group col-sm-3">
                <label>明細SEQ</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['detail_SEQ'] }}"
                    disabled>
                </div>
              </div>
              <div class="form-group col-sm-3">
                <label>士業メタID</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder=""
                    value="{{ $detail['professional_meta_id'] }}" disabled>
                </div>
              </div>
            </div>

            <div class="row mb-6">
              <div class="form-group col-12">
                <label for="project_id">キャンセルステータス</label>
                <div class="d-flex align-items-center">
                  <div class="input-group" style="width: 100px">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder=""
                        value="{{ ($detail['cancel_status'] === 0 ? '未' : $detail['cancel_status'] === 1) ? '申請中' : '完了' }}"
                        disabled>
                    </div>
                  </div>
                  @if ($detail['cancel_status'] === 1)
                    <div class="ms-7 form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">キャンセル完了</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                      <label class="form-check-label" for="inlineCheckbox2">キャンセル却下</label>
                    </div>
                  @endif
                </div>
              </div>
            </div>

            @if ($detail['cancel_status'] === 1)
              <div class="row mb-6">
                <div class="form-group col-12">
                  <label>キャンセル理由</label>
                  <div class="input-group">
                    <textarea rows="4" class="form-control" aria-label="With textarea" disabled>{{ $detail['cancel_reason'] }}</textarea>
                  </div>
                </div>
              </div>
            @endif

          </div>
        </div>

        {{-- card 3 --}}
        <h5 class="card-title mb-7">仕業メタ</h5>
        <div class="card mb-10">
          <div class="card-body">
            <div class="row mb-6">
              <div class="form-group col-sm-3">
                <label>士業名称</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" value="{{ $detail['professional_name'] }}" disabled>
                </div>
              </div>
            </div>
          </div>
        </div>

        {{-- submit button --}}
        <div class="row d-flex align-items-center justify-content-center">
          <div class="col-sm-3">
            <div class="d-grid">
              <button type="submit" class="btn btn-secondary">キャンセル</button>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">保存</button>
            </div>
          </div>
        </div>
        @csrf
      </form>
    </div>
  </main>
@endsection
