<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="apple-touch-icon" href="<?php echo url('assets/images/apple-touch-icon-precomposed.jpg') ?>" />

  <script type="text/javascript" src="//use.typekit.net/yur8vji.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script type="text/javascript" src="assets/scripts/jquery-1.9.1.min.js"></script>
  <link href="<?php echo url('assets/fonts/ss-standard.css') ?>" rel="stylesheet" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1; maximum-scale=1.0; user-scalable=0;">
  <?php echo css('assets/styles/stylesheets/style.css', 'screen') ?>
</head>

<body>
<script>
  $(document).ready(function() {
    $(".logo").click(function () {
      $(".content").fadeToggle("fast", function () {

      });
      $(".menu").fadeToggle("fast", function () {
        
      });
    });
  });
</script>

<nav class="menu">
  <a href="#">Blog Posts</a>
  <a href="#">Films</a>
  <a href="#">Music</a>
  <a href="#">Design</a>
  <a href="#">Links</a>
</nav>