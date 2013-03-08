<?php snippet('header') ?>

<?php foreach($page->children()->visible()->flip() as $journal): ?>

  <section class="container travel light" 
    <?php if($featuredImage = $journal->files()->find('featured.jpg')): ?>
      style="background-image: url('<?php echo $featuredImage->url() ?>')">
    <?php endif ?>
    <a href="<?php echo $journal->url() ?>">
      <h2><?php echo html($journal->title()) ?></h2>
      <p><?php echo kirbytext($journal->dates()) ?></p>
    </a>
  </section>

<?php endforeach ?>


<?php snippet('footer') ?>