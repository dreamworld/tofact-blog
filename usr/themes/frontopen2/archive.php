<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Front_Open
 * @since Front Open 1.0
 */
$this->need('header.php'); ?>
<script type="text/javascript">loading('33%',<?php $this->options->load_speed(); ?>)</script>
		<div id="container">
			<div id="content" role="main">
<?php
/* Queue the first post, that way we know
* what date we're dealing with (if that is the case).
*
* We reset this later so we can run the loop
* properly with a call to rewind_posts().
*/
	if ($this->have()):
		/*the_post();*/
?>
			<h1 class="page-title">
<?php if ($this->is('archive', day)) : ?>
				<?php $this->archiveTitle(array('date' => _t('日归档: <span>%s</span>'),),'',''); ?>
<?php elseif ($this->is('archive', month)) : ?>
				<?php $this->archiveTitle(array('date' => _t('月归档: <span>%s</span>'),),'',''); ?>
<?php elseif ($this->is('archive', year)) : ?>
				<?php $this->archiveTitle(array('date' => _t('年归档: <span>%s</span>'),),'',''); ?>
<?php else : ?>
				<?php _e( '博客归档' ); ?>
<?php endif; ?>
			</h1>
<?php endif; ?>
<?php
/* Since we called the_post() above, we need to
* rewind the loop back to the beginning that way
* we can run the loop properly, in full.
*/
/*rewind_posts();*/
/* Run the loop for the archives page to output the posts.
* If you want to overload this in a child theme then include a file
* called loop-archive.php and that will be used instead.
*/
/*get_template_part( 'loop', 'archive' );*/
$this->need('loop.php');
?>
    </div><!-- #content -->
  </div><!-- #container -->
<script type="text/javascript">loading('55%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('sidebar.php'); ?>
<script type="text/javascript">loading('78%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('footer.php'); ?>
<script type="text/javascript">loading('100%',<?php $this->options->load_speed(); ?>)</script>
