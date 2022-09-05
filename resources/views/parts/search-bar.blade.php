<form action="#" class="my-6 bg-white p-10 shadow rounded" method="POST">
  @method('GET')
  <div class="row mb-6">
    <div class="form-group col-sm-3">
      <label for="project_id">案件ID</label>
      <div class="input-group">
        <input type="text" name="project_id" class="form-control" placeholder="案件ID" id="project_id" autofocus>
      </div>
    </div>
    <div class="form-group col-sm-3">
      <label for="firts_name">姓</label>
      <div class="input-group">
        <div class="input-group">
          <input type="text" name="firts_name" class="form-control" placeholder="姓" id="firts_name" autofocus>
        </div>
      </div>
    </div>
    <div class="form-group col-sm-3">
        <label for="last_name">名</label>
        <div class="input-group">
          <div class="input-group">
            <input type="text" name="last_name" class="form-control" placeholder="名" id="last_name" autofocus>
          </div>
        </div>
      </div>
    <div class="form-group col-sm-3">
      <label for="professional_name">士業名称</label>
      <div class="input-group">
        <select class="form-select" aria-label="">
          <option selected>士業名1</option>
          <option value="1">士業名1</option>
          <option value="2">士業名2</option>
          <option value="3">士業名3</option>
          <option value="3">士業名4</option>
          <option value="3">士業名5</option>
          <option value="3">士業名6</option>
        </select>
      </div>
    </div>
  </div>

  <div class="row mb-6">
    <div class="form-group col-sm-6">
      <label for="quotation_date">見積依頼日</label>
      <div class="d-flex align-items-center">
        <div class="input-group">
          <input type="date" name="quotation_date_from" class="form-control" value="2022-09-30" placeholder=""
            id="quotation_date" autofocus>
        </div>
        <div class="input-group mx-3">
          <input type="date" name="quotation_date_to" class="form-control" value="2022-10-30" placeholder=""
            id="quotation_date" autofocus>
        </div>
      </div>
    </div>
  </div>

  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-sm-3">
      <div class="d-grid">
        <button type="submit" class="btn btn-secondary">クリア</button>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">検索</button>
      </div>
    </div>
  </div>
  @csrf
</form>
