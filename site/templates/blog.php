<?php snippet('header-content') ?>
<?php echo css('assets/css/vertical-scroll.css') ?>

  <main class="main" role="main">
      <div class="page-wrap">
    <div class="side-color text" style="background:#<?php if($color = $page->color()): ?><?php echo $color->text() ?><?php endif ?>;">
        <div class="waterfront">
      <h1 style="zoom:0.9; color:#<?php echo $page->colortitle()->html() ?> !important"><?php echo $page->title()->html() ?></h1>
      <h2 style="color:#<?php echo $page->colortitle()->html() ?> !important"><?php echo $page->info()->kirbytext() ?></h2>
         <!--?php snippet('social-share') ?-->
    </div></div>

    <div class="text watercontent">
      <?php foreach ($page->children()->visible() as $entry):?>
        <h2><?php echo $entry->title()->text() ?></h2>
        <?php echo $entry->text()->kirbytext() ?>
        <h1>&nbsp;</h1>
    <?php endforeach ?>

    </div>
    </div>

  </main>



<?php snippet('footer') ?>
