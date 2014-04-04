<?php
/**
 * 中国原创 - 扁平风格的响应式网页模板，在任何设备上都能够完美的显示。<br>获得此主题的帮助请访问<a href="http://www.frontopen.com/">frontopen.com</a>
 * 
 * @package Front Open 2
 * @author 品味人生
 * @version 1.30.48
 * @link http://www.frontopen.com
 */
 $this->need('header.php'); ?>
<script type="text/javascript">loading('33%',<?php $this->options->load_speed(); ?>)</script>
  <div class="main">
  <?php
  /* Run the loop to output the posts.
   * If you want to overload this in a child theme then include a file
   * called loop-index.php and that will be used instead.
   */
   $this->need('loop.php');
  ?>
  </div><!-- #main -->
<script type="text/javascript">loading('55%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('sidebar.php'); ?>
<script type="text/javascript">loading('78%',<?php $this->options->load_speed(); ?>)</script>
<?php $this->need('footer.php'); ?>
<script type="text/javascript">loading('100%',<?php $this->options->load_speed(); ?>)</script>
