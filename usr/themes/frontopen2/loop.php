<?php
if($this->options->dis_num){
	$dis_num = $this->options->dis_num;
	}
	else{
		$dis_num = 150;
	};
?>
<div class="top_box">
<?php 
	/*if(is_home() && get_option('sticky_posts')){
    $sticky = get_option('sticky_posts'); 
    rsort( $sticky );//对数组逆向排序，即大ID在前 
    $sticky = array_slice( $sticky, 0, 3);//输出置顶文章数，请修改5，0不要动，如果需要全部置顶文章输出，可以把这句注释掉 
    query_posts( array( 'post__in' => $sticky, 'caller_get_posts' => 1 ) ); 
    if (have_posts()) :while (have_posts()) : the_post();*/
?>
<?php if($this->is('index')): ?> 
<?php
$db = Typecho_Db::get();
$prefix = $db->getPrefix();
$sticky_posts = $db->fetchAll($this->db
	->select()->from($prefix.'contents')
	->orWhere('cid = ?',$this->options->sticky_1)
	->orWhere('cid = ?',$this->options->sticky_2)
	->orWhere('cid = ?',$this->options->sticky_3)
	->where('type = ? AND status = ? AND password IS NULL', 'post', 'publish'));
	rsort( $sticky_posts );//对数组逆向排序，即大ID在前 
	foreach ($sticky_posts as $sticky_posts) {
		$result = Typecho_Widget::widget('Widget_Abstract_Contents')->push($sticky_posts);
		$post_views = number_format($result['views']);
		$post_title = htmlspecialchars($result['title']);
		$post_date = date('Y-m-d', $result['created']);
		$permalink = $result['permalink'];
		/*if($post_views > $this->options->view_num){echo 'HOT';} else {echo ''.$post_views.''' VIEW';};*/
		echo '<div class="top_post">
      <div class="title">置 顶</div><article class="ulist">
      <h2><a href="'.$permalink.'" title="'.$post_title.'" rel="bookmark"><i class="icon-eject icon-large"></i>'.$post_title.'</a>
    <span class="title_hot">'.$post_views. ' VIEW</span>  <span>'.$post_date .'</span></h2>
    </article>
    </div>'."\n\r";}
?>
<?php endif; ?>

</div>
<?php
  /*global $query_string;
  query_posts( $query_string . '&ignore_sticky_posts=1' );*/
?>
<?php if (! $this->have()) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( '未找到' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( '抱歉，您访问的归档页面未找到。也许搜索能帮到您。' ); ?></p>
			<form role="search" method="post" id="searchform" class="searchform" action="/">
				<div>
					<label class="screen-reader-text" for="s">搜索：</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="搜索" />
				</div>
			</form>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php while($this->next()): ?>

<article class="post_box">
    <div class="c-top" id="post-<?php $this->cid(); ?>">
            <div class="datetime"><?php $this->date('Y'); ?><br /><?php $this->date('m-d'); ?></div>	
            <header class="tit">
                <h2 class="h1"><a href="<?php $this->permalink() ?>" title="链向 <?php $this->title() ?> 的固定链接" rel="bookmark"><?php $this->title() ?></a><?php
					  /*$t1=$post->post_date;
					  $t2=date("Y-m-d H:i:s");
					  $diff=(strtotime($t2)-strtotime($t1))/3600;*/
					  if(timeZone($this->date->timeStamp)) echo " <span class='title_new'>NEW</span>";
					  if($this->options->view_time == 'display'){if (Views_Plugin::theViews('', '', '0') > 0){echo '' . Views_Plugin::theViews(' <span class="title_hot">', ' VIEW</span>') . '';}}else {if ($this->options->view_time == 'close'){if (Views_Plugin::theViews('', '', '0') > $this->options->view_num){echo " <span class='title_hot'>HOT</span>";};}} ?></h2>
                <aside class="iititle"><span><i class="icon-user icon-large"></i> <a href="<?php $this->author->permalink(); ?>" title="由<?php $this->author(); ?>发布" rel="author"><?php $this->author(); ?></a></span><span><i class="icon-folder-open icon-large"></i> <a href="<?php category($this); ?>" title="查看<?php $this->category(',', false); ?>中的全部文章" rel="category tag"><?php $this->category(',', false); ?></a></span><?php if($this->options->view_time == 'close'){if (Views_Plugin::theViews('', '', '0') > 0){echo '' . Views_Plugin::theViews('<span><i class="icon-eye-open icon-large"></i> 围观', '次</span>') . '';}} ?><span><i class="icon-comment-alt icon-large"></i> <a href="<?php $this->permalink() ?>#respond" class="ds-thread-count" data-thread-key="<?php $this->cid(); ?>" title="<?php $this->title() ?>上的评论"><?php $this->commentsNum('留下评论', '1 条评论', '%d 条评论'); ?></a></span></aside>
            </header>
    </div>
    <div class="c-con">
    <?php if ($this->options->dis_href == 'display'): ?><a href="<?php $this->permalink() ?>" class="disp_a" rel="bookmark" title="链向 <?php $this->title() ?> 的固定链接"><?php endif; ?>
    <?php /*if(!get_option('themes_fo2_dis_href')){?><a href="<?php the_permalink(); ?>" class="disp_a" rel="bookmark" title="<?php printf( esc_attr__( 'Permalink to %s', 'frontopen' ), the_title_attribute( 'echo=0' ) ); ?>"><?php }*/ ?><?php /*if($ifpic != 'checked'){ ?>
	<?php if ( has_post_thumbnail() ) { ?>
    <?php the_post_thumbnail('thumbnail');
		if(has_excerpt()) the_excerpt();
		else
		echo dm_strimwidth(strip_tags($post->post_content),0,$dis_num,'....');}
		elseif(catch_that_image()){?><img class="zy_img" src="<?php echo catch_that_image() ?>" />
		<?php if(has_excerpt()) the_excerpt();
		else
		echo dm_strimwidth(strip_tags($post->post_content),0,$dis_num,'....');}
		else {if(has_excerpt()) the_excerpt();
		else
		echo dm_strimwidth(strip_tags($post->post_content),0,$dis_num+50,'....');}}*/
		if ( preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $r ) ){
       		echo '<img src="'.$this->options->themeUrl.'/timthumb.php?src='.$r['2']['0'].'&h=140&w=205&zc=1" alt="'.$this->title.'">';
       	};
		$this->excerpt($dis_num, '...');
		/*if($ifpic == 'checked'){the_content( 'Read More >' , $strip_teaser, $more_file);}
		wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'frontopen' ), 'after' => '</div>' ) );*/
		if($this->options->dis_href == 'display'){?>
        </a><?php }?>
<a href="<?php $this->permalink() ?>" class="more-link"><?php if($this->options->readmore) {echo ''.$this->options->readmore().'';}else{echo "Read More >";}?></a><div class="cls"></div>
    </div>
    <div class="c-bot">
        <?php if ($this->tags): ?><aside class="cb_bq"><i class="icon-tag icon-large"></i> <?php $this->tags(', ', true, ''); ?></aside><?php endif; ?><?php if($this->user->hasLogin()): ?><i class="icon-edit icon-large"></i> <a class="post-edit-link" href="<?php $this->options->adminUrl('write-post.php?cid=' . $this->cid); ?>">编辑</a><?php endif; ?>
        <div class="cls"></div>
    </div>
</article>
    
	<?php /*comments_template( '', true );*/ ?>
<?php endwhile; // End the loop. Whew. ?>
<?php /* Display navigation to next/previous pages when applicable */ ?>
<div class="cls"></div>
<?php $this->pageNav('&laquo; 上一页', '下一页 &raquo;',6, '...', array('wrapTag' => 'div', 'wrapClass' => 'page_num', 'itemTag' => NULL, 'textTag' => '', 'currentClass' => 'current', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>