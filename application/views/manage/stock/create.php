<?php //3.3.7 ?>
<form id="create-stock-form" method="post" action="<?php echo site_url('manage/stock/create_submit'); ?>" class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="code">股票代號</label>
    <input type="text" class="form-control" id="code" placeholder="股票代號">
  </div>
  <div class="form-group">
    <label class="sr-only" for="name">股票名稱</label>
    <input type="text" class="form-control" id="name" placeholder="股票名稱">
  </div>
  <button type="submit" class="btn btn-default">新增</button>
</form>