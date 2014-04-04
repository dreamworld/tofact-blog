<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @subpackage Front_Open
 * @since Front Open 1.0
 */

$this->need('header.php'); ?>
<script type="text/javascript">loading('33%',<?php $this->options->load_speed(); ?>)</script>
		<div id="container">
			<div id="content" role="main">

				<h1 class="page-title"><?php $this->archiveTitle(array('tag' => _t('标签归档: <span>%s</span>'),),'',''); ?></h1>

<?php
/* Run the loop for the tag archive to output the posts
 * If you want to overload this in a child theme then include a file
 * called loop-tag.php and that will be used instead.
 */
 $this->need('loop.php');
?>
			</div><!-- #content -->
		</div><!-- #container -->
<script type="text/javascript">loading('55%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('sidebar.php'); ?>
<script type="text/javascript">loading('78%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('footer.php'); ?>
<script type="text/javascript">loading('100%',<?php $this->options->load_speed(); ?>)</script>
