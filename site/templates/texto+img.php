<?php snippet('header-content') ?>
<?php echo css('assets/css/vertical-scroll.css') ?>

<main class="main" role="main">
  <div class="water-wrap">

    <?php if($image = $page->image()): ?>
      <img draggable="false" class="side-image" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
    <?php endif ?>

    <div class="text watercontent" style="background:#<?php if($color = $page->color()): ?><?php echo $color->text() ?><?php endif ?>;">
      <div class="waterfront">
        <h1 style="color:#<?php echo $page->colortitle()->html() ?> !important"><?php echo $page->title()->html() ?></h1>
        <h2 style="color:#<?php echo $page->colortitle()->html() ?> !important"><?php echo $page->info()->kirbytext() ?></h2>
      </div>
      <!-- <div class=""> -->
        <?php echo $page->text()->kirbytext() ?>
      <!-- </div> -->
    </div>
  </div>


</main>



<?php snippet('footer') ?>
