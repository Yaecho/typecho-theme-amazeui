<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="am-g am-g-fixed blog-g-fixed am-animation-slide-bottom">
  <div class="am-u-md-8">
    <section class="am-panel am-panel-default">
    <div class="am-panel-bd">
      <h3 class="am-article-title blog-title">
        <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
      </h3>
      <h4 class="am-article-meta blog-meta"><i class="am-icon-user"></i> <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> <i class="am-icon-clock-o"></i> <?php $this->date('Y-n-j'); ?> <i class="am-icon-folder-o"></i> <?php $this->category(','); ?> <i class="am-icon-comment-o"></i> <?php $this->commentsNum('%d'); ?> <i class="am-icon-bookmark-o"></i> <?php $this->tags(',', true, '无'); ?></h4>      
      <div class="am-g">
        <div class="am-u-sm-12">
          <?php $this->content(); ?>
          <?php if (isset($this->fields->github) || isset($this->fields->baidu)): ?><h3>网络资源</h3><?php endif;?>
          <?php if (isset($this->fields->github)): ?><p>源码地址：<a href="<?php echo $this->fields->github;?>" target="_blank"><i class="am-icon-github am-icon-fw"></i>GitHub</a></p><?php endif; ?>
          <?php if (isset($this->fields->baidu)): ?><p>下载地址：<a href="<?php echo $this->fields->baidu;?>" target="_blank"><i class="am-icon-cloud-download am-icon-fw"></i>百度云</a></p><?php endif; ?>
        </div>
      </div>
    </article>
  <p><i class="am-icon-tags"></i> <?php $this->tags(',', true, '无'); ?></p>
    <div class="am-panel am-panel-success">
      <div class="am-panel-bd am-text-success am-text-sm"><i class="am-icon-bell-o"></i> 除特别注明外，本站所有文章均为 <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> 原创，可以自由转载、引用，但需要署名作者并且注明文章出处。</div>
    </div>
  <hr class="am-article-divider blog-hr">
	<?php $this->thePrev('上一篇 : %s', '上一篇：没有上一篇'); ?><br />
  <?php $this->theNext('下一篇 : %s', '下一篇：没有下一篇'); ?><br />
	<hr class="am-article-divider blog-hr">	
    <?php $this->need('comments.php'); ?>
  </div>
  </section>
  </div>
<?php $this->need('sidebar.php'); ?>
</div>
<?php $this->need('footer.php'); ?>	