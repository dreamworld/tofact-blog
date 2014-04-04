<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Front_Open
 * @since Front Open 1.0
 */

$this->need('header.php'); ?>
<script type="text/javascript">loading('33%',<?php $this->options->load_speed(); ?>)</script>
  <div id="container">
      <div id="content" role="main" style="width:96%">
      <?php
      /* Run the loop to output the page.
       * If you want to overload this in a child theme then include a file
       * called loop-page.php and that will be used instead.
       */
      $this->need('loop-page.php');
      ?>
      </div><!-- #content -->
  </div><!-- #container -->
<script type="text/javascript">loading('55%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('sidebar.php'); ?>
<script type="text/javascript">loading('78%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('footer.php'); ?>
<script type="text/javascript">loading('100%',<?php $this->options->load_speed(); ?>)</script>
