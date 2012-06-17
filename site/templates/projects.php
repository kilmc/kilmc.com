<?php snippet('header') ?>
<div class="projects-container">
  <?php foreach($page->children() AS $project): ?>
    <div class="container project-wrap">
      <a href="<?php echo $project->url() ?>"><img src="<?php echo $project->files()->first()->url(); ?>" alt=""/></a>
      <a href="<?php echo $project->url() ?>"><h2 class="project-title"><?php echo html($project->title()) ?></h2></a>
    </div>
  <?php endforeach ?>
</div>






