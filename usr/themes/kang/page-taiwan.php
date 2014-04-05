<?php 
    /** 
    * page-taiwan
    * 
    * @package custom 
    */
?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>


<?php $this->widget('Widget_Archive@pageTaiwan', 'pageSize=10&type=category', 'slug=taiwan')->to($categoryPosts); ?>
<?php if ($categoryPosts->have()): ?>
	<?php while($categoryPosts->next()): ?>
		<article class="post" itemscope itemtype="http://schema.org/BlogPosting">
		<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $categoryPosts->permalink() ?>"><?php $categoryPosts->title() ?></a></h2>
            <div class="post-content" itemprop="articleBody">
				<?php $categoryPosts->excerpt(80, '……'); ?>
            </div>
		</article>
    	<?php endwhile; ?>

<?php else: ?>
    <article class="post">
        <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
    </article>
<?php endif; ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
