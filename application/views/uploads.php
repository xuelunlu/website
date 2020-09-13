<?php foreach ($data as $key => $value) {?>
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
	<?php if ($value['success']) {?>
	<img src="<?php echo base_url('uploads/' . $value['info']['file_name']); ?>" class="img-responsive" alt="...">
	<?php }?>
</div>
<?php }?>