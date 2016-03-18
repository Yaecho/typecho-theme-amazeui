<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$tempStr = str_replace("/index.php","",$_SERVER['REQUEST_URI']);
$action = substr($tempStr,1,2 );
if( $action == "go" ){
$urlArr = include_once 'urls.php';
$query = trim(substr($tempStr,4),"/");
foreach($urlArr as $key=>$value){$arr[]=$key;}
if(in_array($query,$arr)){
header("Location: ".$urlArr[$query]);
}
}
?>
<?php $this->need('header.php'); ?>
<div class="am-g am-g-fixed blog-g-fixed">
  <div class="am-u-md-8">
    <article class="blog-main">
      <h3 class="am-article-title blog-title">        
      </h3>
      <div class="am-g">
        <div class="am-u-sm-12">
          <h2 class="am-text-center am-text-xxxl am-margin-top-lg">404. Not Found</h2>
        <p class="am-text-center">没有找到你要的页面</p>
		<div>
		<ul>
			<strong>您可能遇到了以下问题：</strong>
			<li>您所访问的页面被网站管理员删除。</li>
			<li>如果您是通过站外搜索而出现问题，请您在右上方的搜索框重新搜索。</li>
			<li>如果您是在地址栏输入或复制粘贴地址出现问题，请您检查地址拼写是否正确。</li>
			<li>如果您是点击站内链接而出现问题，请联系网站管理员，谢谢！</li>
		</ul>
	</div><br />
	<figure data-am-widget="figure" class="am am-figure am-figure-default "   data-am-figure="{  pureview: 'true' }">
    <?php
     $str=@file_get_contents('http://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');
 	if(preg_match("/<url>(.+?)<\/url>/ies",$str,$matches)){
  		$imgurl='https://cn.bing.com'.$matches[1];
 	}
      echo '<img src="'.$imgurl.'" data-rel="'.$imgurl.'" alt="必应每日美图"/>';
	  ?>
          <figcaption class="am-figure-capition-btm">
            必应每日美图
          </figcaption>    
  </figure>
        </div>
      </div>
    </article>		
  </div>
<?php $this->need('sidebar.php'); ?>
</div>
<?php $this->need('footer.php'); ?>	