<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width , initial-scale=1.0 , user-scalable=0 , minimum-scale=1.0 , maximum-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<title><?php if ($this->is('index')) : ?>
<?php if ($this->options->SmallTitle): ?><?php $this->options->SmallTitle() ?> | <?php else: ?><?php $this->options->description(); ?> | <?php endif; ?><?php endif; ?>
<?php $this->archiveTitle(array(
                'search'    =>  _t('Search: %s')
        ), '', ' | '); ?><?php $this->options->title(); ?><?php if($this->_currentPage>1) echo ' - Part '.$this->_currentPage; ?></title>
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="pingback" href="<?php $this->options->xmlRpcUrl(); ?>" />
<script type="text/javascript" src="<?php $this->options->themeUrl('jquery.js'); ?>"></script>
<script type="text/javascript">$(function(){mod_txt = '#<?php $this->options->sider_roll(); ?>'; adminBar = "" || 0});</script>
<script type="text/javascript" src="<?php $this->options->themeUrl('frontopen.js'); ?>?ver=<?php echo VRESION?>"></script>
<link rel="alternate" type="application/rss+xml" title="<?php $this->options->title(); ?> &raquo; Feed" href="<?php $this->options->feedUrl(); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $this->options->title(); ?> &raquo; 评论Feed" href="<?php $this->options->commentsFeedUrl(); ?>" />
<?php
  $this->header('description=&keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&rss2=&rss1=&commentReply=&atom=');
?>
<script type="text/javascript">
var duoshuoQuery = {"short_name":"<?php $this->options->duoshuo_id() ?>","theme":"<?php echo ($this->options->Duoshuo_theme) ? $this->options->Duoshuo_theme : 'default'?>","stylePatch":"typecho\/Front_Open_2"};
</script>
<script type="text/javascript" src="http://static.duoshuo.com/embed.js" charset="UTF-8" async="async"></script>
<?php if($this->is('post') || $this->is('page')): ?>
<link rel="canonical" href="<?php $this->permalink(); ?>" />
<?php endif; ?>
<meta name="description" content="<?php echo $this->_description; ?>">
<meta name="keywords" content="<?php echo $this->_keywords; ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>?ver=<?php echo VRESION?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('mobile.css'); ?>?ver=<?php echo VRESION?>" />
<style type="text/css">
<?php if ($this->options->navcon == 'display'): ?>
.navcon ul li{float:left;background:url(<?php $this->options->themeUrl("images/li_right.gif"); ?>) right repeat-y;}
.navcon ul li a:hover,.navcurrent{color:#FD5E02 !important;background:url(<?php $this->options->themeUrl("images/li_right.gif"); ?>) #000 right repeat-y;}<?php echo "\n\r" ?>
<?php endif; ?>
@media screen and (min-width:1366px){.c-con{height:<?php if($this->options->con_height){echo ''.$this->options->con_height.'px';}else{echo "140px";} ?>;}}
<?php if($this->options->page_suo == 'display'){echo ".entry-content p{text-indent: 2em;}.entry-content p iframe{margin-left:-2em;}";};?>
</style>
<?php if($this->options->page_width){?>
<style type="text/css">body{max-width:<?php echo $this->options->page_width; ?>px; _width:<?php echo $this->options->page_width; ?>px; margin:auto;}<?php if($this->options->page_width < 1366){echo ".post_box {width:95%; height:auto;}";} ?>@media screen and (max-width:960px){body{width:100%; margin:auto;}.post_box {width:100%; height:auto;}.main {width:100% !important;}.side {width:25%;} .page_php {width:72% !important;} #content {width: 75%;}}
<?php if($this->options->page_width <= 959){echo ".main {width:70%;}.side {width:30%;} .page_php {width: 67% !important;} #content {width: 70%;}";}?>
</style>
<?php }?>
<?php if($this->options->css){echo "<style type='text/css'>" . $this->options->css . "</style>";}?>
<!--[if lt IE 9]><script src="<?php $this->options->themeUrl('html5.js'); ?>"></script><![endif]-->
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>?ver=<?php echo VRESION?>">
<!--[if IE 7]>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome-ie7.min.css'); ?>?ver=<?php echo VRESION?>">
<![endif]-->
</head>

<body>
<div class="loading"></div>
<div class="web_bod">
<header class="header marauto">
    <span class="logo">
    <?php if($this->options->logo_img){?>
    <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>" rel="home"><img src="<?php $this->options->logo_img() ?>" alt="<?php if ($this->options->logo): ?><?php $this->options->logo() ?><?php else: ?><?php $this->options->title() ?><?php endif; ?>" /></a>
    <?php }else{ ?>
    <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title(); ?>" rel="home"><b class="bclass"><?php if ($this->options->logo): ?><?php $this->options->logo() ?><?php else: ?><?php $this->options->title() ?><?php endif; ?></b></a>
    <?php } ?>
    <i><?php if ($this->options->small_title): ?><?php $this->options->small_title() ?><?php else: ?><?php $this->options->description(); ?><?php endif; ?></i>
    </span>
  <?php if($this->options->search == 'display'){ ?>
  <form role="search" method="post" id="searchform" action="/">
      <span class="search">
        <input name="s" id="s" type="text"  class="input" value="<?php $this->options->search_type(); ?>" onclick="this.value = '';" style="color:#999" onkeypress="javascript:if(event.keyCode == 13){query(this.value);}" x-webkit-speech=""/>
        <button id="searchsubmit" class="btn"><?php if($this->options->search_btn){ $this->options->search_btn();}else{echo "SEARCH";} ?></button>
      </span>
    </form>
  <?php }?>
  <div class="cls"></div>
</header>
<?php if($this->options->topbtn_display== 'display') {?>
<div class="nav marauto">
    	<div class="tig">
        <?php if (!empty($this->options->top_right_btn_text) && !empty($this->options->top_right_btn_url)): ?>
        	<a href="<?php $this->options->top_right_btn_url() ?>" target="<?php $this->options->top_right_btn_target() ?>" rel="<?php $this->options->top_right_btn_rel() ?>" title="<?php $this->options->top_right_btn_title() ?>"><span class="sub"><?php $this->options->top_right_btn_text() ?></span></a>
            <?php endif; ?>
            <?php if ($this->options->rss == 'display'): ?>
            <a href="javascript:;"><span id="rss_open" class="rrs">订阅RSS</span></a><div class="rss_box"><a class="close_rss" href="#"></a><span>邮件订阅</span><br><?php if($this->options->rss_key){?><br><form class="subscribe-mail" action="http://list.qq.com/cgi-bin/qf_compose_send" target="_blank" method="post"><input type="hidden" name="t" value="qf_booked_feedback"><input type="hidden" name="id" value="<?php echo $this->options->rss_key ?>"><input class="rss_input" id="to" name="to" type="email" placeholder="Your E-mail"><input class="rss_submit" type="submit" value="订阅"></form><?php }?><div class="ress_btn_box">订阅源：<a target="_blank" href="<?php $this->options->feedUrl(); ?>" rel="alternate" type="application/rss+xml" title="rss Feed">RSS</a> <a target="_blank" rel="external nofollow" href="http://mail.qq.com/cgi-bin/feed?u=<?php $this->options->feedUrl(); ?>">QQ邮箱</a> <a target="_blank" rel="external nofollow" href="http://www.xianguo.com/subscribe.php?url=<?php $this->options->feedUrl(); ?>">鲜果</a> <a target="_blank" rel="external nofollow" href="http://www.zhuaxia.com/add_channel.php?sourceid=102&url=<?php $this->options->feedUrl(); ?>">抓虾</a></div></div>
            <?php endif; ?>
      <div class="gonggao">
        <ul id="g_box">
      <?php
      if($this->options->top_ac){
      $tip = $this->options->top_ac;    //后台对应的FORMNAME
      $tip = str_replace("\r","",$tip);
      $tips = explode("\n",$tip);
      if(is_array($tips)){
        foreach($tips as $tip){
          $str .= '<li><span class="gg_tx"><i class="icon-volume-off icon-large"></i> '.$tip.'</span></li>'."\n\r";
        }
        echo $str;    //也可以return 看前台如何调
        }} ?>
        </ul>
      </div>
    </div>
<div class="navlist">
<?php /*$num = get_option('themes_fo2_btn_num');	for($i=1; $i<=$num; $i++){  ?>
		<?php if(get_option('themes_fo2_top_btn' . $i . '_display')=='checked') : ?>
			<dl>
			    <dt><a href="<?php echo get_option('themes_fo2_top_btn' . $i . '_url'); ?>" title="<?php echo get_option('themes_fo2_top_btn' . $i . '_title'); ?>" target="<?php echo get_option('themes_fo2_top_btn' . $i . '_target'); ?>" class="nav_button" style="opacity: 0.7;" rel="<?php echo get_option('themes_fo2_top_btn' . $i . '_rel'); ?>"><img src="<?php echo get_option('themes_fo2_top_btn' . $i . '_img'); ?>" width="45" height="45"></a></dt>
                <dd><?php echo get_option('themes_fo2_top_btn' . $i . '_text'); ?></dd>
            </dl>
			<?php endif; ?>
<?php }*/?>
<div class="cls"></div>
</div>
</div>
<?php }?>


<nav class="navcon marauto">
  <div id="mobile_nav_btn">网站导航</div>
  <?php /*wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' , 'fallback_cb'=>'Bing_nav_fallback') ); */?>
  <div class="menu-header"><ul lass="menu"><li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
  <?php $this->widget('Widget_Metas_Category_List')
  ->parse('<li id="menu-item-{mid}" class="menu-item menu-item-{mid}"><a href="{permalink}">{name}</a></li>'); ?>
  <?php $this->widget('Widget_Metas_Category_List')->treeViewCategories(); ?>
  <?php $this->widget('Widget_Contents_Page_List')
  ->parse('<li id="menu-item-{cid}" class="menu_item page-item-{cid}"><a href="{permalink}">{title}</a></li>'); ?>
  </ul></div>
  </nav>   
  <section class="conter marauto">