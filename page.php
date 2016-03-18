<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="am-g am-g-fixed blog-g-fixed am-animation-slide-bottom">
  <div class="am-u-md-12">
    <section class="am-panel am-panel-default">
    <div class="am-panel-bd">
      <h3 class="am-article-title blog-title">
        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
      </h3>
      <div class="am-g">
        <div class="am-u-sm-12">
          <?php $this->content(); ?>
        </div>
      </div>

    <hr class="am-article-divider blog-hr">		
    <?php $this->need('comments.php'); ?>	
    </div>
    </section>			
  </div>
</div>
<?php $this->need('footer.php'); ?>	