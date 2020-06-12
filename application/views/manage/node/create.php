<?php //3.3.7 ?>
<form id="create-node-form" method="post" action="<?php echo site_url('manage/node/create_submit'); ?>" class="form-inline">
  <div class="form-group">
    <label class="sr-only" for="title">標題</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="標題">
  </div>
  <div class="form-group">
    <label class="sr-only" for="name">股票名稱</label>
    <input type="text" class="form-control" id="name" placeholder="股票名稱">
  </div>
  <button type="submit" class="btn btn-default">新增</button>
</form>