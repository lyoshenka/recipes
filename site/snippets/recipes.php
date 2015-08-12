<ul class="teaser cf">
  <?php foreach(page('recipes')->children()->visible() as $recipe): ?>
  <li>
    <h3><a href="<?php echo $recipe->url() ?>"><?php echo $recipe->title()->html() ?></a></h3>
    <p><?php echo $recipe->text()->excerpt(80) ?> <a href="<?php echo $recipe->url() ?>">read&nbsp;more&nbsp;→</a></p>
    <?php if($image = $recipe->images()->sortBy('sort', 'asc')->first()): ?>
    <a href="<?php echo $recipe->url() ?>">
      <img src="<?php echo $image->url() ?>" alt="<?php echo $recipe->title()->html() ?>" >
    </a>
    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
