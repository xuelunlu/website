<?php //Bootstrap v3.3.7 https://getbootstrap.com/docs/3.3/css/#forms ?>
<h4>新增內容</h4>
<hr class="alt short">
<form id="create-node-form" method="post" action="<?php echo site_url('manage/node/create_submit'); ?>">
	<div style="display: none;" id="form-alert" class="alert alert-danger" role="alert"></div>
	<div class="row">
		<div class="col-md-3">
			<div class="form-group">
				<label for="title">標題</label>
				<input type="text" class="form-control" id="title" name="title" placeholder="">
			</div>
		</div>
		<div class="col-md-3"><input type="file" id="images" multiple name="images[]" /></div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-12"><input type="submit" name="" value="新增" class="btn btn-default"></div>
	</div>
</form>