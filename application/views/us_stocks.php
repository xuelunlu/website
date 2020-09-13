<div class="container-fluid">
	<div class="row">
		<?php foreach ($themes as $theme) {?>
		<div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
			<h3 class="mtn"><?php echo $theme; ?></h3>
			<ul>
				<li><a target="_blank" href="https://www.google.com.tw/search?q=<?php echo urlencode($theme); ?>&tbm=nws">Google</a></li>
				<li><a target="_blank" href="https://news.cnyes.com/tag/<?php echo urlencode($theme); ?>">鉅亨</a></li>
				<li><a target="_blank" href="https://udn.com/search/tagging/2/<?php echo urlencode($theme); ?>">聯合新聞網</a></li>
			</ul>
		</div>
		<?php }?>
	</div>
</div>