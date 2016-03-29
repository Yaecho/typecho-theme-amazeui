<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

 <div data-am-widget="gotop" class="am-gotop am-gotop-fixed" >
   <a href="#top" title="回到顶部">
       <span class="am-gotop-title">回到顶部</span>
         <i class="am-gotop-icon am-icon-chevron-up"></i>
   </a>
 </div>
<footer class="blog-footer">
  <p><br>
    <small><i class="am-icon-copyright"></i> <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>|
    由 <a href="http://typecho.org/">Typecho</a> 强力驱动|Theme By Amaze UI && <a href="http://www.ttjxc.cn">TTjxc</a></small>

  </p>
  <small><?php $this->options->tongji();?></small>
</footer>
<?php if (!empty($this->options->somesettings) && in_array('Opencdn', $this->options->somesettings)): ?>
  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/modernizr/2.8.3/modernizr.js"></script>
  <script src="//cdn.bootcss.com/amazeui/2.5.2/js/amazeui.ie8polyfill.min.js"></script>
  <![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!-->
  <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
  <!--<![endif]-->
  <script src="//cdn.bootcss.com/amazeui/2.5.2/js/amazeui.min.js"></script>
<?php else:?>
  <!--[if lt IE 9]>
  <script src="//cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/modernizr/2.8.3/modernizr.js"></script>
  <script src="<?php $this->options->themeUrl('assets/js/amazeui.ie8polyfill.min.js'); ?>"></script>
  <![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!-->
  <script src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
  <!--<![endif]-->
  <script src="<?php $this->options->themeUrl('assets/js/amazeui.min.js'); ?>"></script>
<?php endif;?>

<?php $this->footer(); ?>
</body>
</html>
