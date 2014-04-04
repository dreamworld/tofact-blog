<?php
if ($this->categories[0]['mid'] == $this->options->picCat)
{
//  $archive->parameter->pageSize = 20;
$this->need('loop-categorypic.php');
die;}
$this->need('loop-category.php');
?>
