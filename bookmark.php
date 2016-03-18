<?php
/**
 * 云书签
 *
 * @package custom
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
  $this->need('header.php');
 ?>
<div class="am-container am-text-center am-animation-slide-bottom">
<p class="am-text-lg"><strong>我的书签</strong></p>
<div class="am-g">

  <div class="am-u-md-3">
    <div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/iloveyoulong" target="_blank">龙轩导航</a><p>做个有用的导航</p></div>
    </div>
  </div>

  <div class="am-u-md-3">
  	<div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/fuliba" target="_blank">福利吧</a><p>分享你的福利吧</p></div>
    </div>
  </div>

  <div class="am-u-md-3">
  	<div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/itellyou" target="_blank">MSDN我告诉你</a><p>系统镜像下载站</p></div>
    </div>
  </div>

  <div class="am-u-md-3">
  	<div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/dytt8" target="_blank">电影天堂</a><p>免费电影下载</p></div>
    </div>
  </div>

  <div class="am-u-md-3">
    <div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/laozuo" target="_blank">老左博客</a><p>VPS主机评测</p></div>
    </div>
  </div>

  <div class="am-u-md-3">
    <div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/amazeui" target="_blank">Amaze UI</a><p>跨屏前端框架</p></div>
    </div>
  </div>

  <div class="am-u-md-3">
    <div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/zhitu" target="_blank">智图</a><p>图片压缩工具</p></div>
    </div>
  </div>

  <div class="am-u-md-3">
    <div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/dou-bi" target="_blank">逗比根据地</a><p>科学上网分享</p></div>
    </div>
  </div>

  <div class="am-u-md-3">
    <div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/atool" target="_blank">aTool</a><p>在线工具集合</p></div>
    </div>
  </div>

  <div class="am-u-md-3">
    <div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/521xunlei" target="_blank">爱密码网</a><p>迅雷帐号分享</p></div>
    </div>
  </div>

  <div class="am-u-md-3">
    <div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/hostloc" target="_blank">主机交流</a><p>全球借刀杀人论坛</p></div>
    </div>
  </div>

  <div class="am-u-md-3 am-u-end">
    <div class="am-panel am-panel-default">
      <div class="am-panel-bd"><a href="<?php $this->options->siteUrl(); ?>go/github" target="_blank">GitHub</a><p>程序猿天堂</p></div>
    </div>
  </div>

</div>
<small>注：个人收集非友链</small>
</div>
<?php $this->need('footer.php'); ?>