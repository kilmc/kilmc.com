<?php snippet('header') ?>
<div class="projects-container">
  <?php
  
  $projects = $page->children();

  if(param('tag')) $projects = $projects->filterBy('tags', param('tag'), ',');
  
  /* site wide tag search 
  foreach($pages->index() as $p) {
    
    if($p->tags() != '') {
      $tags = str::split(str::lower($p->tags()), ',');
      
      if(in_array(param('tag'), $tags)) {
        echo $p->title() . '<br />';
      }
                  
    }
  
  }
  */
    
  ?>
  <?php foreach($projects AS $project): ?>
    <div class="container project-wrap">
      <a href="<?php echo $project->url() ?>"><img src="<?php echo $project->files()->first()->url(); ?>" alt=""/></a>
      <a href="<?php echo $project->url() ?>"><h2 class="project-title"><?php echo html($project->title()) ?></h2></a>
    
      <?php $tags = str::split($project->tags()) ?>
      
      <?php if($tags): ?>                   
      <ul class="project-tags">
        <?php foreach($tags as $tag): ?>        
        <li class="project-tag"><a href="<?php echo $page->url() ?>/tag:<?php echo urlencode($tag) ?>"><?php echo html($tag) ?></a></li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>
    
    </div>
  <?php endforeach ?>
</div>






