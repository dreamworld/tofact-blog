<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Front_Open
 * @since Front Open 1.0
 */

$this->need('header.php'); ?>
<script type="text/javascript">loading('33%',<?php $this->options->load_speed(); ?>)</script>
<div class="mbx"><i class="icon-home icon-large" style="font-size:14px;"></i>
		<a href="<?php $this->options->siteUrl(); ?>"  class="gray">首页</a>  >  <?php $this->category(',', false); ?>
        </div>
  <div id="container">
    <div id="content" role="main">
      <h1 class="page-title"><?php
          $this->archiveTitle(array('category' => _t('分类目录归档：<span>%s</span>'),),'','');
      ?></h1>
        <?php
            $category_description = $this->_description;
            if ( ! empty( $category_description ) )
                echo '<div class="archive-meta">' . $category_description . '</div>';
		?>
		<?php $this->need('loop.php'); ?>
    </div><!-- #content -->
  </div><!-- #container -->
<script type="text/javascript">loading('55%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('sidebar.php'); ?>
<script type="text/javascript">loading('78%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('footer.php'); ?>
<script type="text/javascript">loading('100%',<?php $this->options->load_speed(); ?>)</script>
