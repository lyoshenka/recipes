<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>

  <?php echo css('assets/css/main.css') ?>

</head>
<body>

  <header>
    <a class="logo" href="<?php echo url() ?>">
      <?php echo $site->title()->html() ?>
    </a>
    <?php //snippet('menu') ?>
  </header>