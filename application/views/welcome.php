<div class="container-fluid">
  <?php foreach ($categories as $category) {?>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h2 class="mtn text-system"><?php echo $category['name']; ?></h2>
    </div>
    <?php foreach ($category['stocks'] as $stock) {?>
    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
      <h3 class="mtn"><?php echo $stock['name']; ?></h3>
      <ul>
        <li><a target="_blank" href="https://www.google.com.tw/search?q=<?php echo urlencode($stock['name']); ?>&tbm=nws">Google</a></li>
        <li><a target="_blank" href="https://news.cnyes.com/tag/<?php echo urlencode($stock['name']); ?>">鉅亨</a></li>
        <li><a target="_blank" href="https://udn.com/search/tagging/2/<?php echo urlencode($stock['name']); ?>">聯合新聞網</a></li>
        <li><a target="_blank" href="https://money.udn.com/search/tagging/1001/<?php echo urlencode($stock['name']); ?>">經濟日報</a></li>
        <li><a target="_blank" href="https://tw.stock.yahoo.com/q/h?s=<?php echo urlencode($stock['num']); ?>">Yahoo!奇摩股市</a></li>
        <li><a target="_blank" href="https://goodinfo.tw/StockInfo/ShowK_ChartFlow.asp?RPT_CAT=PER&STOCK_ID=<?php echo $stock['num']; ?>&CHT_CAT=WEEK">台灣股市資訊網</a></li>
        <li><a target="_blank" href="https://histock.tw/stock/<?php echo $stock['num']; ?>/%E6%AF%8F%E8%82%A1%E7%9B%88%E9%A4%98">EPS</a></li>
        <li><a target="_blank" href="https://www.cmoney.tw/follow/channel/stock-<?php echo $stock['num']; ?>?chart=d">CMoney</a></li>
      </ul>
    </div>
    <?php }?>
  </div>
  <?php }?>
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