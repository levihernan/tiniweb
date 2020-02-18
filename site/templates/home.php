<?php snippet('header') ?>


  <main class="main" role="main">

    <div class="text section home" id="home">

        <a href="#libro" class="tapa"> <img src="tapa.jpg"></a>
      <div class="container">
        <?php foreach(site()->children()->visible() as $category): ?>
        <div class="tile">
            <div class="star">
                <a href="#<?php echo $category->title()->html() ?>"><img class="section-img" src="<?php echo $category->image()->url()?>"></a>
            </div>
            <p class="category-title">
                <?php echo $category->title()->html() ?>
            </p>
        </div>

      <?php endforeach ?>
          </div>
    </div>


    <?php snippet('sections') ?>

      <p id="credito"> por hernan levi &nbsp; </&#33;--></p>
  </main>

<?php snippet('footer') ?>
