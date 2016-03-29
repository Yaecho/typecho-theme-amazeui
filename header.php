<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
<?php if (!empty($this->options->somesettings) && in_array('Opencdn', $this->options->somesettings)): ?>
  <link rel="stylesheet" href="//cdn.bootcss.com/amazeui/2.5.2/css/amazeui.min.css">
<?php else:?>
  <link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/amazeui.min.css'); ?>">
<?php endif;?>
  <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">  
  <style>
    @media only screen and (min-width: 1200px) {
      .blog-g-fixed {
        max-width: 1000px;
      }
    }
    @media only screen and (min-width: 641px) {
      .blog-sidebar {
        font-size: 1.4rem;
      }
    }
    .blog-main {
      padding: 20px 0;
    }
    .blog-title {
      margin: 10px 0 20px 0;
    }
    .blog-meta {
      font-size: 14px;
      margin: 10px 0 20px 0;
      color: #222;
    }
    .blog-meta a {
      color: #27ae60;
    }
    .blog-pagination a {
      font-size: 1.4rem;
    }
    .blog-team li {
      padding: 4px;
    }
    .blog-team img {
      margin-bottom: 0;
    }
    .blog-content img,
    .blog-team img {
      max-width: 100%;
      height: auto;
    }
    .blog-footer {
      padding: 10px 0;
      text-align: center;
    }	
    .main{
      background-color: #f4f6f8;
    }
    .am-topbar {
      background: #ffffff;
    }
     .am-with-topbar-fixed-top{
      padding-top: 65px;
    }
  </style>
  <?php $this->header(); ?>
</head>
<body class="main">
<header class="am-topbar am-topbar-fixed-top">
 <div class="">
  <h1 class="am-topbar-brand">
    <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
  </h1>
  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
          data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
      class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
      <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
      <?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
    </ul>

    <form class="am-topbar-form am-topbar-left am-form-inline am-topbar-right" role="search" method="post" action="">
      <div class="am-form-group">
        <input type="text" class="am-form-field am-input-sm" placeholder="搜索文章" name="s">
      </div>
      <button type="submit" class="am-btn am-btn-default am-btn-sm">搜索</button>
    </form>

  </div>
 </div>
</header>
