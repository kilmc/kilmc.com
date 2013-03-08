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

  <script type="text/javascript" src="http://use.typekit.com/naf3qdj.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <link href="<?php echo url('assets/fonts/ss-standard.css') ?>" rel="stylesheet" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1; maximum-scale=1.0; user-scalable=0;">
  <?php echo css('assets/styles/stylesheets/style.css', 'screen') ?>
</head>

<body>

  <header>
    <h1><a class="logo ir" href="<?php echo url('') ?>">Kilmc</a></h1>
    <ul class="top-nav clearfix">
      <li><a href="<?php echo url('blog') ?>">Blog</a></li>
      <li><a href="<?php echo url('travel') ?>">Travel</a></li>
      <li><a href="<?php echo url('about') ?>">About</a></li>
      <li><a href="http://twitter.com/kilmc">Twitter</a></li>
    </ul>

    <ul class="mobile-nav clearfix">
      <li><a href="http://twitter.com/kilmc">Twitter</a></li>
      <li><a href="<?php echo url('about') ?>">About</a></li>
    </ul>
  </header>

