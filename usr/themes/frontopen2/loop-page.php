<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Front_Open
 * @since Front Open 1.2
 */
?>
<?php /*if ( have_posts() ) while ( have_posts() ) : the_post();*/ ?>
  <div id="post-<?php $this->cid(); ?>" class="post-<?php $this->cid(); ?>">
      <?php if ( ! $this->is('page') ) { ?>
          <h2 class="entry-title"><?php $this->title() ?></h2>
      <?php } else { ?>
          <h1 class="entry-title"><?php $this->title() ?></h1>
      <?php } ?>

      <div class="entry-content">
          <?php $this->content(); ?>
          <?php /*wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) );*/ ?>
      <?php if($this->user->hasLogin()): ?><span class="edit-link"><a  class="post-edit-link"  href="<?php $this->options->adminUrl('write-post.php?cid=' . $this->cid); ?>">编辑</a></span><?php endif; ?>
      </div><!-- .entry-content -->
  </div><!-- #post-## -->
				<?php $this->need('comments.php');/*comments_template( '', true );*/ ?>
<?php /*endwhile;*/ // end of the loop. ?>
