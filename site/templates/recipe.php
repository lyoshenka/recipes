<?php snippet('header') ?>

  <main class="main" role="main">

    <h1 id="js-language-switcher">
      <span class="js-current"><?php echo $page->title()->html() ?></span>
      <?php if ($page->russianName()): ?>
        <span class="subtitle js-other clickable"><?php echo $page->russianName()->html() ?></span>
      <?php endif ?>
    </h1>

    <?php echo $page->blurb()->kirbytext() ?>
    <?php echo $page->blurbRussian()->kirbytext() ?>

    <?php if (trim($page->history())): ?>
      <a id="history"/>
      <div class="english-only">
        <h2>History</h2>
        <?php echo $page->history()->kirbytext() ?>
      </div>
      <div class="russian-only">
        <h2>История</h2>
        <?php echo $page->historyRussian()->kirbytext() ?>
      </div>
    <?php endif ?>

    <a id="ingredients"/>
    <div class="english-only">
      <h2>Ingredients</h2>
      <ul>
      <?php foreach (explode("\n", $page->ingredients()) as $line): ?>
        <?php if(!trim($line)) { continue; } ?>
        <li><?php echo $line ?></li>
      <?php endforeach ?>
      </ul>
    </div>

    <div class="russian-only">
      <h2>Ингредиенты</h2>
      <ul>
      <?php foreach (explode("\n", $page->ingredientsRussian()) as $line): ?>
        <?php if(!trim($line)) { continue; } ?>
        <li><?php echo $line ?></li>
      <?php endforeach ?>
      </ul>
    </div>
  
    <a id="instructions"/>
    <div class="english-only">
      <h2>Instructions</h2>
      <?php echo $page->instructions()->kirbytext() ?>
    </div>
    <div class="russian-only">
      <h2>Способ Приготовления</h2>
      <?php echo $page->instructionsRussian()->kirbytext() ?>
    </div>

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
