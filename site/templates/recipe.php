<?php snippet('header') ?>

  <main class="main" role="main">

    <h1>
      <?php echo $page->title()->html() ?>
      <?php if ($page->russianName()): ?>
        <span class="subtitle"><?php echo $page->russianName()->html() ?></span>
      <?php endif ?>
    </h1>

    <?php echo $page->blurb()->kirbytext() ?>

    <?php if (trim($page->history())): ?>
      <h2 id="history">History</h2>
      <?php echo $page->history()->kirbytext() ?>
    <?php endif ?>

    <h2 id="ingredients">Ingredients</h2>

    <ul>
    <?php foreach (explode("\n", $page->ingredients()) as $line): ?>
      <?php if(!trim($line)) { continue; } ?>
      <li><?php echo $line ?></li>
    <?php endforeach ?>
    </ul>


    <h2 id="instructions">Instructions</h2>

    <?php echo $page->instructions()->kirbytext() ?>

    <?php if (trim($page->tags())): ?>
      # <?php echo join(', ', explode(',', $page->tags()->__toString())) ?>
    <?php endif ?>

    <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
    <figure>
      <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
    </figure>
    <?php endforeach ?>

    <?php /*
    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>
    */ ?>

  </main>

<?php snippet('footer') ?>