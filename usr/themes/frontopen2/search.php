<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Front_Open
 * @since Front Open 1.0
 */

$this->need('header.php'); ?>
<script type="text/javascript">loading('33%',<?php $this->options->load_speed(); ?>)</script>
  <div id="container">
    <div id="content" role="main">
<?php if ($this->have()): ?>
      <h1 class="page-title"><?php $this->archiveTitle(array('search' => _t('<span>%s</span> 的搜索结果'),),'',''); ?></h1>
        <?php
        /* Run the loop for the search to output the results.
         * If you want to overload this in a child theme then include a file
         * called loop-search.php and that will be used instead.
         */
         $this->need('loop.php');
        ?>
<?php else : ?>
      <div id="post-0" class="post no-results not-found">
          <h2 class="entry-title"><?php _e( '未找到' ); ?></h2>
          <div class="entry-content">
						<p><?php _e( '抱歉，没有符合您搜索条件的结果。请换其它关键词再试。' ); ?></p>
				<form role="search" method="post" id="searchform" class="searchform" action="/">
					<div>
						<label class="screen-reader-text" for="s">搜索：</label>
						<input type="text" value="<?php $this->archiveTitle(array('search' => _t('%s'),),'',''); ?>" name="s" id="s" />
						<input type="submit" id="searchsubmit" value="搜索" />
					</div>
				</form>
          </div><!-- .entry-content -->
      </div><!-- #post-0 -->
<?php endif; ?>
    </div><!-- #content -->
  </div><!-- #container -->
<script type="text/javascript">loading('55%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('sidebar.php'); ?>
<script type="text/javascript">loading('78%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('footer.php'); ?>
<script type="text/javascript">loading('100%',<?php $this->options->load_speed(); ?>)</script>
