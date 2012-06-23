<?php snippet('header') ?>

<section class="content blog">
 
  <?php foreach($page->children()->visible()->flip() as $article): ?>
  
  <article class="container <?php if($article->featured_image()): ?><?php echo 'with-featured-image' ?><?php endif ?>">
    <?php if($article->featured_image()): ?>
      <a href="<?php echo $article->url() ?>"><?php echo kirbytext($article->featured_image()) ?></a>
    <?php endif ?>
    <h2 class="title <?php if($article->featured_image()): ?><?php echo 'with-featured-image' ?><?php endif ?>"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
    <?php if($article->summary()): ?>
      <div class="post-summary">
        <p><span class="inline-title summary">Summary:</span> 
          <a href="<?php echo $article->url() ?>"><?php echo html($article->summary()) ?></a>
        </p>
      </div>
    <?php endif ?>
    <span class="tiny-text post-info date"><?php echo html($article->date('jS \of F, Y')) ?></span>
    <div class="post-body <?php if($article->summary() == ''): ?><?php echo 'no-summary' ?><?php endif ?>"><?php echo kirbytext($article->text()) ?></div>
    <?php if($article->summary()): ?>
      <span class="tiny-text post-info reading-time">Reading Time: <?php echo readingtime($article->text()) ?></span>
    <?php endif ?>

  </article>

  <?php endforeach ?>

</section>
