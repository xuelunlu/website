<?php //Bootstrap v3.3.7 https://getbootstrap.com/docs/3.3/css/#forms ?>
<h4>新增內容</h4>
<hr class="alt short">
<form id="create-node-form" method="post" action="<?php echo site_url('manage/node/create_submit'); ?>">
  <div style="display: none;" id="form-alert" class="alert alert-danger" role="alert"></div>
  <div class="form-group">
    <label class="sr-only" for="title">標題</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="標題">
  </div>
  <button type="submit" class="btn btn-default">新增</button>
</form>