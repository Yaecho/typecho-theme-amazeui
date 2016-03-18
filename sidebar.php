<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
 <div class="am-u-md-4 blog-sidebar">
    <div class="am-panel-group">
      <section class="am-panel am-panel-default">
        <div class="am-panel-bd">
          <div class="am-text-center">
            <br>
            <img class="am-circle" alt="author-avatar" src="<?php echo $this->options->authoravatar; ?>" width="80" height="80" />
            <h2><?php $this->options->title() ?></h2>
            <div class="am-center">
              <?php if(!empty($this->options->weibo)): ?>
              <a href="<?php $this->options->weibo(); ?>" target="_blank"><span class="am-icon-sm am-icon-weibo"> 微博</span></a>&nbsp;&nbsp;
              <?php endif ?>
              <?php if(!empty($this->options->qq)): ?>
              <a href="tencent://message/?uin=<?php $this->options->qq(); ?>&amp;Site=有事Q我&amp;Menu=yes" target="_blank"><span class="am-icon-sm am-icon-qq"> QQ</span></a>&nbsp;&nbsp;
              <?php endif ?>
              <?php if(!empty($this->options->twitter)): ?>
              <a href="<?php $this->options->twitter(); ?>" target="_blank"><span class="am-icon-sm am-icon-twitter"> Twitter</span></a>&nbsp;&nbsp;
              <?php endif ?>
              <?php if(!empty($this->options->github)): ?>
              <a href="<?php $this->options->github(); ?>" target="_blank"><span class="am-icon-sm am-icon-github"> Github</span></a>&nbsp;&nbsp;
              <?php endif ?>
              <?php if(!empty($this->options->tumblr)): ?>
              <a href="<?php $this->options->tumblr(); ?>" target="_blank"><span class="am-icon-sm am-icon-tumblr"> Tumblr</span></a>
              <?php endif ?>
            </div>
            <p>
            <?php 
               $str_array = explode("\n", $this->options->words);
               $key = array_rand($str_array);
               echo $str_array[$key]; 
            ?> 
            </p>
          </div>           
        </div>
      </section>
      <ul class="am-list am-list-border">
        <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
      </ul>
      <section class="am-panel am-panel-default"><br>
		<div class="ttjxc-tag">
        <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud')->to($tags); ?>
        <?php if($tags->have()): ?>
        <?php while ($tags->next()): ?>
        <a class="am-text-lg" style="color:rgb(<?php echo(rand(0,255)); ?>,<?php echo(rand(0,255)); ?>,
           <?php echo(rand(0,255)); ?>)" href="<?php $tags->permalink();?>">
           <?php $tags->name(); ?></a>
           <?php endwhile; ?>
        <?php else:?>
           暂无标签
        <?php endif; ?>
		</div><br>
      </section>
    </div>
  </div>