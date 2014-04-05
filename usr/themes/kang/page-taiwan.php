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


<?php $this->widget('Widget_Archive@index', 'pageSize=4&type=category', 'slug=taiwan')->to($indexpub); ?>
<?php while($indexpub->next()): ?>
	<?php $indexpub->permalink(); ?>
	<?php $indexpub->title() ?>
	<?php $indexpub->excerpt(80, '……'); ?>
<?php endwhile; ?>



	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
