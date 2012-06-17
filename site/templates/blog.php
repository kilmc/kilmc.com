<?php snippet('header') ?>

<section class="content blog">
 
  <?php foreach($page->children()->visible()->flip() as $article): ?>
  
  <article class="container <?php if($article->featured_image() != ''): ?><?php echo 'with-featured-image' ?><?php endif ?>">
    <?php if($article->featured_image() != ''): ?>
      <?php echo kirbytext($article->featured_image()) ?>
    <?php endif ?>
    <h2 class="title"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
    <span class="tiny-text post-info"><?php echo html($article->date('jS \of F, Y')) ?></span>
    <?php echo kirbytext($article->text()) ?>
  </article>

  <?php endforeach ?>

</section>
