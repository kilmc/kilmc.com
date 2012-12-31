<?php snippet('header') ?>

<?php $viewType = $site->uri()->params('view');
  if (!$viewType ) {
    $viewType = 'list';
  }
 ?>

<?php if ($viewType == 'list'):?>

  <div class="images-container">
    <?php foreach($page->images() as $image): ?>
      <a href="<?php echo $page->url() . '/view:' . $viewType . '#' . $image->filename() ?>" name="<?php echo $image->filename() ?>" class="image-link" >
        <img src="<?php echo $image->url() ?>" alt="<?php echo $image->caption() ?>">
      </a>
    <?php endforeach ?>

  </div>
  
<?php else: ?>

  <div class="images-container">
    <?php 
      $mainImage = $page->images()->first();

      $imageName = $site->uri()->params('image');
      if($imageName) {
        $image = $page->files()->find($imageName);
        if($image) {
          $mainImage = $image;
        }
      }

      $mainImageURL = $mainImage->url();

    ?>
    <?php if ($mainImage->hasNext()): ?>
      <a href="<?php echo $page->url() . '/view:' . $viewType . '/image:' . $mainImage->next()->filename() ?>">Next</a>
    <?php endif ?>
    
    <?php if ($mainImage->hasPrev()): ?>
      <a href="<?php echo $page->url() . '/view:' . $viewType . '/image:' . $mainImage->prev()->filename() ?>">Prev</a>
    <?php endif ?>
    
    <img src="<?php echo $mainImageURL ?>" class="image-main">
    <?php foreach($page->images() as $image): ?>
      <a href="<?php echo $page->url() . '/view:' . $viewType . '/image:' . $image->filename() ?>" class="image-link" >
        <?php echo thumb($image, array('width' => 60, 'class' => 'image-thumb')) ?>
      </a> 
    <?php endforeach ?>
  </div>

<?php endif ?>



<?php snippet('footer') ?>