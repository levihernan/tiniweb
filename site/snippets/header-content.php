<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <meta property="og:title" content="<?php echo $page->title()->html() ?>"/>
  <meta property="og:author" content="<?php echo $site->author()->html() ?>"/>
  <meta property="og:url" content="<?php echo $page->url() ?>"/>
  <?php foreach($site->images()->sortBy('sort', 'asc') as $image): ?>
    <meta property="og:image" content="<?php echo $image->url() ?>"/>
  <?php endforeach ?>

  <link rel="icon"
  type="image/png"
  href="<?= $site->url() ?>/assets/images/favicon.png">

  <?php echo css('assets/css/font-awesome.css') ?>
  <?php echo css('assets/css/main.css') ?>
  <!-- <?php echo css('assets/css/valen.css') ?> -->
  <?php echo css('assets/css/inaki.css') ?>

  <?php echo js('assets/js/jquery-1.12.1.min.js') ?>
  <?php echo js('assets/js/smoothscroll.js') ?>

  <?php snippet('analitycs') ?>
</head>
<body id="scrolling-div">

  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>">
      <img src="<?php echo url() ?>/assets/images/VV-Logo-Small.png" alt="">
    </a>
    <?php snippet('menu') ?>
  </header>
