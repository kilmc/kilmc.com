<?php snippet('header') ?>

<section class="container journal">
  <h2 class="journal-title"><?php echo html($page->title()) ?></h2>
  
  <?php foreach($page->children()->visible()->flip() as $entry): ?>
    <article class="clearfix">
      <div class="journal-entry-secondary clearfix">
        <p class="journal-entry-date"><?php echo html($entry->date('jS \of F, Y')) ?></p>
        <p class="journal-entry-location">
          <i class="ss-icon date-icon">Location</i><?php echo $entry->location()?>
        </p>
      </div>
      <div class="journal-entry-primary">
        <?php echo kirbytext($entry->text()) ?>
      </div>
    </article>
  
  <?php endforeach ?>

</section>

<?php snippet('footer') ?>