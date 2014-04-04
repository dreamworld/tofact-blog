<div class="cls"></div>
</section><!-- #main -->
<div class="cls"></div>
	<footer id="footer" role="contentinfo">
		<div id="colophon">
<?php	/*get_sidebar( 'footer' );*/?>
<div id="site-info">
            <a href="javascript:void(0)" onClick="goRoll(0)" id="goTop">返回顶部</a><?php if ($this->options->sitemap): ?><a href="<?php $this->options->sitemap() ?>">网站地图</a> &nbsp; <?php endif; ?><?php if ($this->options->icp): ?><a href="http://www.miitbeian.gov.cn/" rel="external nofollow"><?php $this->options->icp() ?></a> <?php endif; ?><?php $this->options->tongji() ?> <?php if ($this->options->copyright): ?><?php _e('©'); ?><?php $this->options->copyright() ?><?php else: ?><?php _e('©2012-2013'); ?><?php endif; ?><?php if ($this->options->load_time == 'display') echo " - 加载耗时" . timer_stop() . "s"; ?> | Theme <?php if ($this->options->banquan == 'close' || $this->is('page') || !$this->is('index')) echo "<span id='official'>frontopen2 for typecho</span>"; else echo '<a id="official" href="http://www.frontopen.com/" target="_blank" title="frontopen主题官方站">frontopen2 for typecho</a>'; ?></div>
		</div><?php //-- #colophon -->?>
	</footer><?php //-- #footer -->?>
</div><?php //-- #web_bod --?>
<?php
	$this->footer();
?>
<div id="float"><a id="float_gotop" class="floatbtn"  href="javascript:void()" onClick="goRoll(0)" title="返回顶部"></a><a class="linbak floatbtn" href="<?php $this->options->adminUrl(); ?>" title="登陆&注册"></a><a id="float_goend" class="floatbtn" href="javascript:void()" onClick="goend()" title="转到底部"></a></div>
</body>
</html>