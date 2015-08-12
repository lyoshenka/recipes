<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <?php snippet('recipes') ?>

  </main>

<?php snippet('footer') ?>