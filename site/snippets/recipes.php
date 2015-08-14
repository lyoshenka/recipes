<ul class="recipes cf">
  <?php foreach(page('recipes')->children()->visible() as $recipe): ?>
  <li>
    <span class="recipe-name"><a href="<?php echo $recipe->url() ?>"><?php echo $recipe->title()->html() ?></a></span>
    <p><?php // echo $recipe->blurb()->kirbytext() ?></p>
    <?php if($image = $recipe->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $recipe->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $recipe->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
