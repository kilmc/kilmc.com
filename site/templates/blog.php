<?php snippet('header') ?>

<section class="content blog">
 
  <?php foreach($page->children()->visible()->flip() as $article): ?>
  
  <?php 
    $featuredImage = $article->files()->find('featured.jpg');

    if($featuredImage) {
      $classValue = 'with-featured-image';
    }

  ?>
  
  <article class="container <?php echo $classValue ?>">
    <?php if($featuredImage): ?>
      <a href="<?php echo $article->url() ?>">
        <img src="<?php echo $featuredImage->url() ?>" class="featured-image" alt="" /> 
      </a>
    <?php endif ?>
    <h2 class="title <?php echo $featuredImage ? 'with-featured-image' : '' ?>">
      <a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
    <?php if($article->summary()): ?>
      <div class="post-summary">
        <p><span class="inline-title summary">Summary:</span> 
          <a href="<?php echo $article->url() ?>"><?php echo html($article->summary()) ?></a>
        </p>
      </div>
    <?php endif ?>
    <span class="tiny-text post-info date"><?php echo html($article->date('jS \of F, Y')) ?></span>
    
    <?php if($article->preface()): ?>
      <div class="preface home"><?php echo kirbytext($article->preface()) ?></div>
    <?php endif ?>
    
    <div class="post-body <?php echo $article->summary() ? '' : 'no-summary' ?>">
      <?php echo kirbytext($article->text()) ?>
    </div>
    <?php if($article->summary()): ?>
      <span class="tiny-text post-info reading-time">
        Reading Time: <?php echo readingtime($article->text()) ?>
      </span>
    <?php endif ?>

  </article>

  <?php endforeach ?>

</section>


<?php snippet('footer') ?>