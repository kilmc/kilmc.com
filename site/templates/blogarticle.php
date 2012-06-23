<?php snippet('header') ?>

<article class="container post-wrap">
  <?php if($page->featured_image()): ?>
    <?php echo kirbytext($page->featured_image()) ?>
  <?php endif ?>
  <h2 class="title"><?php echo html($page->title()) ?></h2>
  <span class="tiny-text post-info"><?php echo html($page->date('jS \of F, Y')) ?></span>
  <?php echo kirbytext($page->text()) ?>



</article>


<?php snippet('footer') ?>