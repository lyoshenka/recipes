<ul class="recipe-list">
  <?php foreach(page('recipes')->children()->visible() as $recipe): ?>
  <li>
    <h3 class="recipe-name">
      <a class="nicelink" href="<?php echo $recipe->url() ?>"><?php echo $recipe->title()->html() ?></a>
      <span class="subtitle"><?php echo $recipe->russianName() ?></span>
    </h3>
    <div class="recipe-blurb"><?php echo $recipe->blurb()->kirbytext() ?></div>
    <?php if($image = $recipe->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $recipe->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $recipe->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
