<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>">
        <div>
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
    	<form method="post" class="am-form" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
    		
                <div class="am-g">
                <div class="am-u-md-4">
                <label for="author"></label>
                <div class="am-input-group">
                <span class="am-input-group-label"><i class="am-icon-user am-icon-fw"></i></span>
                <input type="text" class="am-form-field" name="author" id="author" placeholder="<?php _e('昵称*'); ?>" value="<?php $this->remember('author'); ?>" required />
                </div>
                </div> 
                <div class="am-u-md-4">         
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?><?php endif; ?>></label>
                <div class="am-input-group">
                <span class="am-input-group-label"><i class="am-icon-at am-icon-fw"></i></span>
                <input type="email" class="am-form-field" name="mail" id="mail" placeholder="<?php _e('电子邮箱*'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                </div>
                </div>
                <div class="am-u-md-4">
                <label for="url"<?php if ($this->options->commentsRequireURL): ?><?php endif; ?>></label>
                <div class="am-input-group">
                <span class="am-input-group-label"><i class="am-icon-globe am-icon-fw"></i></span>
                <input type="url" class="am-form-field" name="url" id="url" placeholder="<?php _e('网站地址'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                </div>
                </div>
                </div>
            <?php endif; ?>   		
                <label for="textarea"></label>
                <textarea rows="8" cols="50" name="text" id="textarea" placeholder="<?php _e('欢迎吐槽|･ω･｀)'); ?>" required ><?php $this->remember('text'); ?></textarea><br>
                <button type="submit" class="am-btn am-btn-default"><?php _e('提交评论'); ?></button>           
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
<br>
</div>