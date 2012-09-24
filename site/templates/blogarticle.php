<?php snippet('header') ?>

<article class="container post-wrap">
  <?php if($page->featured_image()): ?>
    <?php echo kirbytext($page->featured_image()) ?>
  <?php endif ?>
  <h2 class="title 
    <?php if($page->featured_image()): ?><?php echo 'with-featured-image' ?><?php endif ?> <?php if($page->date() == ''):  ?><?php echo 'no-date' ?><?php endif ?>">
    <a href="<?php echo $page->url() ?>"><?php echo html($page->title()) ?></a></h2>
  <?php if($page->date()): ?>
    <span class="tiny-text post-info"><?php echo html($page->date('jS \of F, Y')) ?></span>
  <?php endif ?>
  <?php if($page->preface()): ?>
    <div class="preface"><?php echo kirbytext($page->preface()) ?></div>
  <?php endif ?>
  <?php echo kirbytext($page->text()) ?>



</article>

<?php snippet('footer') ?>