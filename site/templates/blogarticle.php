<?php snippet('header') ?>

<article class="container post-wrap">
  <?php if($featuredImage = $page->files()->find('featured.jpg')): ?>
    <img src="<?php echo $featuredImage->url() ?>" class="featured-image" alt="" /> 
  <?php endif ?>
  
  <?php 
    $classValue = '';

    if($featuredImage) {
      $classValue .= ' with-featured-image';
    }

    if($page->date() == '') {
      $classValue .= ' no-date';
    }

  ?>
  
  <h2 class="title<?php echo $featuredImage ? ' with-featured-image' : '' ?><?php echo $page->date() ? '' : ' no-date' ?>">
    <a href="<?php echo $page->url() ?>"><?php echo html($page->title()) ?></a></h2>
  <?php if($page->date()): ?>
    <span class="tiny-text post-info"><?php echo html($page->date('jS \of F, Y')) ?></span>
  <?php endif ?>
  <?php if($page->preface()): ?>
    <div class="preface">
      <?php echo kirbytext($page->preface()) ?>
    </div>
  <?php endif ?>
  <?php echo kirbytext($page->text()) ?>
  
</article>

<?php snippet('footer') ?>