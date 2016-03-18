<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <div class="am-g am-g-fixed blog-g-fixed am-animation-slide-bottom">
  <div class="am-u-md-8">
    <?php if($this->have()):?>
    <?php while($this->next()): ?>
    <section class="am-panel am-panel-default">
    <div class="am-panel-bd">
      <h3 class="am-article-title blog-title">
        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
      </h3>
      <h4 class="am-article-meta blog-meta"><i class="am-icon-user"></i> <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> <i class="am-icon-clock-o"></i> <?php $this->date('Y-n-j'); ?> <i class="am-icon-folder-o"></i> <?php $this->category(','); ?> <i class="am-icon-comment-o"></i> <?php $this->commentsNum('%d'); ?> <i class="am-icon-bookmark-o"></i> <?php $this->tags(',', true, '无'); ?></h4>      
      <div class="am-g">
        <div class="am-u-sm-12">
          <?php $this->excerpt($this->options->Abstractnumber); ?>
        </div>
      </div>
    </div>
    </section>
<?php endwhile; ?>
				<?php else:?>
				 <article class="blog-main">
                 <h3 class="am-text-center am-article-title blog-title">抱歉，没有与搜索词相关的文章！</h3>
				 <br />
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
  </article>
                <?php endif;?>				
        <hr class="am-article-divider blog-hr">
				<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
  </div>
<?php $this->need('sidebar.php'); ?>
</div>
<?php $this->need('footer.php'); ?>	