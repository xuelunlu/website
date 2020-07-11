<h4>內容管理</h4>
<hr class="alt short">
<?php echo $links; ?>
<table class="table">
	<thead>
		<tr class="primary">
			<th>標題</th>
		</tr>
	</thead>
	<?php if ($rows->count() > 0) {?>
	<tbody>
		<?php foreach ($rows as $row) {?>
		<tr>
			<td><?php echo $row->title; ?></td>
		</tr>
		<?php }?>
	</tbody>
	<?php }?>
</table>