<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
//获取真实ip
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) 
{
$list = explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
$_SERVER['REMOTE_ADDR'] = $list[0];
}

function themeConfig($form) {

    //作者头像
    $authoravatar = new Typecho_Widget_Helper_Form_Element_Text('authoravatar', NULL, NULL, _t('作者头像地址'), _t('用于调用侧边栏头像'));
    $form->addInput($authoravatar);

    $somesettings = new Typecho_Widget_Helper_Form_Element_Checkbox('somesettings', 
    array('Opencdn' => _t('开启CDN加速CSS、JS（使用bootcdn.cn的CDN服务）')),
    array('Opencdn'), _t('CDN加速')
    );
    $form->addInput($somesettings->multiMode());


    //博主qq
    $qq = new Typecho_Widget_Helper_Form_Element_Text('qq', NULL, NULL, _t('博主QQ'), _t('在这里填入博主的QQ号码'));
    $form->addInput($qq);
    //博主微博
    $weibo = new Typecho_Widget_Helper_Form_Element_Text('weibo', NULL, NULL, _t('博主微博'), _t('在这里填入博主所属微博地址'));
    $form->addInput($weibo);
    //博主推特
    $twitter = new Typecho_Widget_Helper_Form_Element_Text('twitter', NULL, NULL, _t('博主推特'), _t('在这里填入博主所属推特地址'));
    $form->addInput($twitter);
    //博主Github
    $github = new Typecho_Widget_Helper_Form_Element_Text('github', NULL, NULL, _t('博主Github'), _t('在这里填入博主所属Github地址'));
    $form->addInput($github);
    //博主Tumblr
    $tumblr = new Typecho_Widget_Helper_Form_Element_Text('tumblr', NULL, NULL, _t('博主Tumblr'), _t('在这里填入博主所属Tumblr地址'));
    $form->addInput($tumblr);
    //摘要字数
    $Abstractnumber = new Typecho_Widget_Helper_Form_Element_Text('Abstractnumber', NULL, NULL, _t('摘要字数'), _t('首页以及搜索页面显示文章摘要字数'));
    $form->addInput($Abstractnumber);
    //随机名言
    $words = new Typecho_Widget_Helper_Form_Element_Textarea('words', NULL,NULL, _t('随机名言'), _t('每条一行，在侧边栏头像下方显示'));
    $form->addInput($words);
   
    //统计代码
    $tongji = new Typecho_Widget_Helper_Form_Element_Textarea('tongji', NULL, NULL, _t('统计代码'), _t('建议用cnzz的文字统计代码'));
    $form->addInput($tongji);

}

