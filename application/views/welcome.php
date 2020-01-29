<div class="container-fluid">
  <div class="row">
    <?php foreach ($target as $key => $value) {?>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
      <h3 class="mtn"><?php echo $value[0]; ?></h3>
      <ul>
        <li><a target="_blank" href="https://www.google.com.tw/search?q=<?php echo urlencode($value[0]); ?>&tbm=nws">Google</a></li>
        <li><a target="_blank" href="https://news.cnyes.com/tag/<?php echo urlencode($value[0]); ?>">鉅亨</a></li>
        <li><a target="_blank" href="https://udn.com/search/tagging/2/<?php echo urlencode($value[0]); ?>">聯合新聞網</a></li>
        <li><a target="_blank" href="https://goodinfo.tw/StockInfo/ShowK_ChartFlow.asp?RPT_CAT=PER&STOCK_ID=<?php echo $value[1]; ?>&CHT_CAT=WEEK">台灣股市資訊網</a></li>
        <li><a target="_blank" href="https://histock.tw/stock/<?php echo $value[1]; ?>/%E6%AF%8F%E8%82%A1%E7%9B%88%E9%A4%98">EPS</a></li>
      </ul>
    </div>
    <?php }?>
  </div>
  <div class="row">
    <?php foreach ($theme as $key => $value) {?>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
      <h3 class="mtn"><?php echo $value; ?></h3>
      <ul>
        <li><a target="_blank" href="https://news.cnyes.com/tag/<?php echo urlencode($value); ?>">鉅亨</a></li>
        <li><a target="_blank" href="https://udn.com/search/tagging/2/<?php echo urlencode($value); ?>">聯合新聞網</a></li>
      </ul>
    </div>
    <?php }?>
  </div>
</div>