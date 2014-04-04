<div class="mbx"><i class="icon-home icon-large" style="font-size:14px;"></i>
<?php /*wheatv_breadcrumbs();*/ ?>
<a href="<?php $this->options->siteUrl(); ?>"  class="gray">首页</a>  >  <a href="<?php category($this); ?>" title="查看<?php $this->category(',', false); ?>中的全部文章"><?php $this->category(',', false); ?></a>  >  <?php $this->title() ?>
</div>
<?php /*if ( have_posts() ) while ( have_posts() ) : the_post();*/ ?>

				<div id="post-<?php $this->cid(); ?>">
                <div class="c-top2" id="post-<?php $this->cid(); ?>">
                <div class="datetime"><?php $this->date('Y'); ?><br /><?php $this->date('m-d'); ?></div>
					<header class="tit"><h1 class="entry-title"><?php $this->title() ?></h1>
					<aside class="entry-meta iititle2">
                        <span><i class="icon-user icon-large"></i> <a href="<?php $this->author->permalink(); ?>" title="由<?php $this->author(); ?>发布" rel="author"><?php $this->author(); ?></a></span><span><i class="icon-folder-open icon-large"></i> <a href="<?php category($this); ?>" title="查看<?php $this->category(',', false); ?>中的全部文章" rel="category tag"><?php $this->category(',', false); ?></a></span><?php $all = Typecho_Plugin::export(); if (array_key_exists('Views', $all['activated'])) echo ''. Views_Plugin::theViews('<span><i class="icon-eye-open icon-large"></i> 围观<i id="number">', '</i>次</span>') .''; ?><span><i class="icon-comment-alt icon-large"></i> <a href="<?php $this->permalink() ?>#respond" class="ds-thread-count" data-thread-key="<?php $this->cid(); ?>" title="<?php $this->title() ?>上的评论"><?php $this->commentsNum('留下评论', '1 条评论', '%d 条评论'); ?></a></span><span><i class="icon-pencil icon-large"></i> 编辑日期：<time><?php $modified = new Typecho_Date($this->modified); echo $modified->format('Y-m-d');?></time></span><span><i class="icon-zoom-in icon-large"></i> 字体：<a href="javascript:;" onclick="checkFontSize(18)">大</a> <a href="javascript:;" onclick="checkFontSize(16)">中</a> <a href="javascript:;" onclick="checkFontSize(14)">小</a></span>
					</aside>
                    </header>
                    <div class="cls"></div>
		    </div>
                    <!-- .entry-meta -->

					<article class="entry-content">
                    <?php if($this->options->post_ad_1){?>
						<div class="ad_1">
						<?php echo $this->options->post_ad_1; ?>
                        </div>
					<?php }?>

						<?php $this->content(); ?>
						<?php /*wp_link_pages( array( 'before' => '<div class="page-link">' . __( '', 'frontopen' ).'<span class="t_s_s">文章分页</span>','next_or_number'=>'number','after' => '</div>','link_before'=>'<span>','link_after'=>'</span>'));	*/?><div class="cls"></div>
                        <div class="loc_link"><ul><li>本文固定链接: <a href="<?php $this->permalink() ?>" rel="bookmark" title="<?php $this->title() ?>"><?php $this->permalink() ?></a></li>
                        <li>转载请注明: <?php if($this->options->zhuanzai){echo $this->options->zhuanzai;}else{ ?><a href="<?php $this->author->permalink(); ?>" title="由<?php $this->author(); ?>发布" rel="author"><?php $this->author(); ?></a> <?php $this->date('Y年m月d日'); ?> 于 <a href="<?php $this->options->siteUrl(); ?>" title="访问<?php $this->options->title(); ?>"><?php $this->options->title(); ?></a> 发表<?php }?></li></ul>
                        </div>
                        <?php if($this->options->fenxiang){?>
							<div style="margin-top:10px">
							<?php echo $this->options->fenxiang;?>
							<div class="cls"></div></div>
							<?php }?>
                        <div class="author_info">
                        	<div class="au_top_bar"><div class="edit_date">最后编辑日期：<time><?php $modified = new Typecho_Date($this->modified); echo $modified->format('Y-m-d');?></time></div><b>作者：<?php $this->author(); ?></b></div>
                            <div class="avatar"><?php echo '<img src="'. ($this->request->isSecure() ? 'https://secure' : 'http://www') . '.gravatar.com/avatar/' . md5(strtolower($this->author->mail)) . '?s=96&r=G' .'&d=mm" alt="' . $this->author->screenName . '"class="avatar" height="96" width="96" />'; ?></div>
                            <div class="type_out"><span class="ttxx"><?php if($this->options->author_description){$this->options->author_description();}else{echo "这个作者貌似有点懒，什么都没有留下。";}?></span><div class="au_links"><a href="<?php $this->author->permalink(); ?>" class="c1"><i class="icon-home"></i> 站内专栏</a><?php if($this->author->url){?> <a href="<?php $this->author->url();?>" class="c2" target="_blank" rel="external nofollow"><i class="icon-globe"></i> 站点</a><?php }?></div></div>
                        <div class="cls"></div>
                        <div style="display:none"><?php echo $this->options->zhifu_url; ?></div>
                        <?php if($this->options->zhifu_url) {?>
                        <div class="j_zeng">
                        	<a href="<?php echo $this->options->zhifu_url; ?>" target="_blank" class="jz_bt" rel="external nofollow">捐  赠</a><span><?php if($this->options->juankuan){echo $this->options->juankuan;}else{echo "如果您觉得这篇文章有用处，请支持作者！鼓励作者写出更好更多的文章！";}?></span>
                        </div>
                        <?php }?>
					</article>
                    
                    <!-- .entry-content -->

					<!-- .entry-utility -->
				</div><!-- #post-## -->
<div class="c-bot">
        <?php if ($this->tags): ?>
        <span class="cb_bq"><i class="icon-tag icon-large"></i> <?php $this->tags(', ', true, ''); ?></span>
        <?php endif; ?>
		<?php if($this->user->hasLogin()): ?><i class="icon-edit icon-large"></i> <a class="post-edit-link" href="<?php $this->options->adminUrl('write-page.php?cid=' . $this->cid); ?>">编辑</a><?php endif; ?>
        <div class="cls"></div>
    </div>
    <br />
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php theNext($this); ?></div>
					<div class="nav-next"><?php thePrev($this); ?></div>
				</div><!-- #nav-below -->
<div class="cls"></div>
				<?php if($this->options->post_ad_2) {?>
                    <div class="ad_2">
						<?php echo $this->options->post_ad_2; ?>
                    </div>
                <?php }?>
                <div class="relatedposts">
<h3 class="widget-title"><i class="icon-warning-sign"></i> 您可能还会对这些文章感兴趣！</h3>
<ul>
	<?php
	/*$post_num = 8; 
	global $post;
	$exists_related_ids = array();
	$tmp_post = $post;
	$tags = ''; $i = 0;
	$exists_related_ids[] = $post->ID;
	if ( get_the_tags( $post->ID ) ) {
	foreach ( get_the_tags( $post->ID ) as $tag ) $tags .= $tag->name . ',';
	$tags = strtr(rtrim($tags, ','), ' ', '-');
	$myposts = get_posts('numberposts='.$post_num.'&tag='.$tags.'&exclude='.$post->ID);
	foreach($myposts as $post) {
	setup_postdata($post);
	?>
	<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读 <?php the_title(); ?>"><?php the_title(); ?></a></li>
	<?php
	$exists_related_ids[] = $post->ID;
	$i += 1;
	}
	}
	if ( $i < $post_num ) {
	$post = $tmp_post; setup_postdata($post);
	$cats = ''; 
	$post_num -= $i;
	foreach ( get_the_category( $post->ID ) as $cat ) $cats .= $cat->cat_ID . ',';
	$cats = strtr(rtrim($cats, ','), ' ', '-');
	$myposts = get_posts('numberposts='.$post_num.'&orderby=rand&category='.$cats.'&exclude='. implode(",", $exists_related_ids));
	foreach($myposts as $post) {
	setup_postdata($post);
	?>
	<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读 <?php the_title(); ?>"><?php the_title(); ?></a></li>
	<?php
	}
	}
	$post = $tmp_post; setup_postdata($post);*/
	?>
	<?php $this->related(8)->to($relatedPosts); ?>
	<?php while ($relatedPosts->next()): ?>
		<li><a href="<?php $relatedPosts->permalink(); ?>" rel="bookmark" title="详细阅读 <?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
		<?php endwhile; ?>
	</ul>
<div class="cls"></div>
</div>

				<?php $this->need( 'comments.php' );/*comments_template( '', true );*/ ?>
<?php /*setPostViews(get_the_ID());*/?>
<?php /*endwhile;*/ // end of the loop. ?>
