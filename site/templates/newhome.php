<?php snippet('header') ?>

<div id="orientationSign" class="">
  <div class="container text-center">
    <img class="orientationSign" src="assets/images/orientationSign.png" alt="">
  </div>

</div>

<div id="loader" class="">
  <div class="container">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 100 100">
      <path fill-opacity="0" stroke-width="1" stroke="#bbb" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
      <path id="heart-path" fill-opacity="0" stroke-width="3" stroke="#ED6A5A" d="M81.495,13.923c-11.368-5.261-26.234-0.311-31.489,11.032C44.74,13.612,29.879,8.657,18.511,13.923  C6.402,19.539,0.613,33.883,10.175,50.804c6.792,12.04,18.826,21.111,39.831,37.379c20.993-16.268,33.033-25.344,39.819-37.379  C99.387,33.883,93.598,19.539,81.495,13.923z"/>
    </svg>
  </div>
</div>

<main class="main no-display" role="main">
  <div class="container no-border">
    <section id="home" class="vertical-center">

      <div class="row section-content">
        <div class="col-md-5 col-xs-7 col-sm-6 home-izq">
          <div class="home-slider">
            <div class="">
              <img src="assets/images/VV-Home-01-A.png">
            </div>
            <div class="">
              <img src="assets/images/VV-Home-01-B.png">
            </div>
            <div class="">
              <img src="assets/images/VV-Home-01-C.png">
            </div>
          </div>
        </div>
        <div class="col-md-5 col-xs-5 col-xs-pull-1 col-md-pull-0 col-sm-6 col-sm-pull-0 home-der">
          <div class="home-menu">
            <?php foreach(site()->children()->visible() as $category): ?>
              <a href="<?php if ($category->extsection()!='1'):?>#<?php endif ?><?php echo $category->uri() ?>">
                <h2>
                  <?php echo $category->title()->html() ?>
                </h2>
              </a>
            <?php endforeach ?>
          </div>
          <div class="home-composition mobile-hidden"  data-stellar-offset-parent="true" data-stellar-vertical-offset="100">
            <img class="back" data-stellar-ratio="0.95"  src="assets/images/VV-Home-BG-02.png" alt="">
            <img class="front" src="assets/images/VV-Home-02.png" alt="">
          </div>
        </div>


        <div class="col-md-2 social-icons text-center" data-stellar-ratio="0.7">
          <!-- AGREGAR LINKS -->
          <!-- MANEJADOS DESDE EL BACKEND -->
          <ul>
            <li>
              <a href="http://facebook.com/<?= $site->facebook()->text() ?>" target="_blank">
                <i class="fa fa-facebook fa-lg"></i>
              </a>
            </li>
            <li>
              <a href="http://instagram.com/<?= $site->instagram()->text() ?>" target="_blank">
                <i class="fa fa-instagram fa-lg"></i>
              </a>
            </li>
            <li>
              <a href="http://twitter.com/<?= $site->twitter()->text() ?>" target="_blank">
                <i class="fa fa-twitter fa-lg"></i>
              </a>
            </li>
            <li>
              <a href="mailto:<?= $site->email()->text() ?>" target="_blank">
                <i class="fa fa-envelope fa-lg"></i>
              </a>
            </li>
          </ul>
        </div>

        <div class="col-md-5 col-md-offset-6 col-sm-8 col-sm-offset-2 no-click">
          <div class="home-composition-mobile desktop-hidden"  data-stellar-offset-parent="true" data-stellar-vertical-offset="100">
            <img class="back" data-stellar-ratio="1.05"  src="assets/images/VV-Home-BG-02.png" alt="">
            <img class="front" src="assets/images/VV-Home-02.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <section id="textos" class="vertical-center">
      <div class="row section-content">
        <div class="col-md-4 col-md-offset-1 textos-izq no-padding">
          <h1 class="" id="textosTitle"></h1>
          <div class="col-md-5 col-xs-8 col-xs-offset-4 col-md-offset-0 col-sm-6 col-sm-offset-6 textos-composition" data-stellar-offset-parent="true"  data-stellar-vertical-offset="200">
            <img class="back"  data-stellar-ratio="0.9" src="assets/images/VV-Textos-01-B.png" alt="">
            <img class="middle" src="assets/images/VV-Textos-01-A.png" alt="">
            <img class="front"  data-stellar-ratio="1.1" src="assets/images/VV-Textos-01-C.png" alt="">
          </div>
        </div>
        <div class="col-md-6 list-textos">
          <?= $site->children()->find('textos')->text()->kirbytext() ?>
          <ol>
            <?php foreach($site->children()->find('textos')->children()->visible() as $subpage): ?>
              <li>
                <a href="<?php echo $subpage->url() ?>" <?php if ($subpage->intendedTemplate() == 'link'): ?> target="_blank" <?php endif ?>><?php echo $subpage->title()->html() ?>
                </a>
              </li>
            <?php endforeach ?>
          </ol>
        </div>
      </div>
    </section>


    <section id="fotos" class="vertical-center">
      <div class="row section-content">
        <div class="col-md-8 col-md-offset-2">
          <div class="fotos-composition">
            <h1 class="title-35mm" id="fotosTitle">35mm</h1>

            <div class="back col-md-10 col-sm-8 col-sm-offset-2 col-md-offset-0" >
              <!-- SLIDER -->
              <div class="fotos-slider">
                <div class="">
                  <img src="assets/images/VV-Fotos-02-A.png">
                </div>
                <div class="">
                  <img src="assets/images/VV-Fotos-02-B.png">
                </div>
                <div class="">
                  <img src="assets/images/VV-Fotos-02-C.png">
                </div>
                <div class="">
                  <img src="assets/images/VV-Fotos-02-D.png">
                </div>
              </div>
            </div>

            <div class="menu" data-stellar-offset-parent="true" data-stellar-vertical-offset="100">
              <div class="menu-azul" data-stellar-ratio="0.9">
                <?= $site->children()->find('fotos')->text()->kirbytext() ?>
                <ul>
                  <?php foreach($site->children()->find('fotos')->children()->visible() as $subpage): ?>
                    <li>
                      <a href="<?php echo $subpage->url() ?>" <?php if ($subpage->intendedTemplate() == 'link'): ?> target="_blank" <?php endif ?>>
                        <?php echo $subpage->title()->html() ?>
                      </a>
                    </li>
                  <?php endforeach ?>
                </ul>
              </div>
              <img class="middle" data-stellar-ratio="1.1" src="assets/images/VV-Fotos-01-BG.png" alt="">
            </div>

          </div>
        </div>

      </div>
    </section>

    <section id="amor" class="vertical-center">
      <div class="row section-content">
        <div class="col-md-3 col-md-offset-1 col-xs-5 col-xs-offset-1 col-sm-4 col-sm-offset-0">
          <div class="amor-composition-1" data-stellar-offset-parent="true" data-stellar-vertical-offset="100">
            <img class="front" data-stellar-ratio="0.95" src="assets/images/VV-Intimo-01-A.png" alt="">
            <img class="middle" data-stellar-ratio="1.05" src="assets/images/VV-Intimo-01-B.png" alt="">
            <img class="back" data-stellar-ratio="1.15" src="assets/images/VV-Intimo-01-C.png" alt="">
          </div>
        </div>
        <div class="col-md-4 col-xs-8 col-xs-offset-2 col-md-offset-0 col-sm-4 col-sm-offset-5 col-sm-pull-1 col-md-pull-0">
          <h1 class="" id='amorTitle'></h1>
          <?= $site->children()->find('amor')->text()->kirbytext() ?>
        </div>
        <div class="col-md-3 col-xs-5 col-xs-offset-6 col-md-offset-0 col-sm-4 col-sm-offset-8">
          <div class="amor-composition-2" data-stellar-offset-parent="true" data-stellar-vertical-offset="200">
            <img class="front" data-stellar-ratio="1.15" src="assets/images/VV-Intimo-02-A.png" alt="">
            <img class="middle" data-stellar-ratio="1.05" src="assets/images/VV-Intimo-02-B.png" alt="">
            <img class="back" data-stellar-ratio="0.95" src="assets/images/VV-Intimo-02-C.png" alt="">
          </div>
        </div>

      </div>
    </section>

    <section id="prensa" class="vertical-center">
      <div class="row section-content">
        <div class="col-md-6 col-md-offset-0 col-sm-6 col-sm-offset-5 text-right">

          <h1 class="" id='prensaTitle'></h1>
          <?= $site->children()->find('prensa')->text()->kirbytext() ?>
          <ul>
            <?php foreach($site->children()->find('prensa')->children()->visible() as $subpage): ?>
              <li>
                <a href="<?php echo $subpage->url() ?>" <?php if ($subpage->intendedTemplate() == 'link'): ?> target="_blank" <?php endif ?>>
                  <?php echo $subpage->title()->html() ?>
                </a>
              </li>
            <?php endforeach ?>
          </ul>

        </div>
        <div class="col-md-5 prensa-composition col-xs-6 col-xs-offset-1 col-sm-4 col-sm-offset-2 col-md-offset-0" data-stellar-offset-parent="true"  data-stellar-vertical-offset="200">
          <img class="back"  data-stellar-ratio="1.15" src="assets/images/VV-Links-02-C.png" alt="">
          <img class="middle"  data-stellar-ratio="1.05" src="assets/images/VV-Links-02-B.png" alt="">
          <img class="front"  data-stellar-ratio="0.9" src="assets/images/VV-Links-02-A.png" alt="">
        </div>

      </div>
    </section>

    <section id="tienda" class="vertical-center">
      <div class="row section-content">
        <div class="col-md-8 col-md-offset-2" data-stellar-offset-parent="true"  data-stellar-vertical-offset="100">
          <div class="tienda-composition">
            <div class="tienda-menu col-md-4 col-md-push-8 col-xs-8 col-xs-offset-4 col-md-offset-0 col-sm-6 col-sm-offset-6">
              <h1 id="tiendaTitle"></h1>
              <div class="menu-amarillo" data-stellar-ratio="1.1">
                <?= $site->children()->find('tienda')->text()->kirbytext() ?>
                <ul>
                  <?php foreach($site->children()->find('tienda')->children()->visible() as $subpage): ?>
                    <li>
                      <a href="<?php echo $subpage->url() ?>" <?php if ($subpage->intendedTemplate() == 'link'): ?> target="_blank" <?php endif ?>>
                        <?php echo $subpage->title()->html() ?>
                      </a>
                    </li>
                  <?php endforeach ?>
                </ul>
                <a class="boton-tienda" target="-_blank" href="http://www.valentinavaras.mitiendanube.com">
                  <img src="assets/images/VV-Tienda-BotonTexto.png" alt="">
                </a>
              </div>
              <img class="middle" data-stellar-ratio="0.9" src="assets/images/VV-Tienda-Bolsa.png" alt="">
            </div>

          </div>

          <div class="tienda-back col-md-8 col-md-pull-4 col-sm-8 col-sm-offset-2 col-md-offset-0" >
            <img src="assets/images/VV-Tienda-BG.png">

          </div>

        </div>
      </div>
    </section>

    <section id="bio" class="vertical-center">
      <div class="row section-content">
        <div class="col-md-5 col-md-offset-1 col-sm-8 col-sm-offset-2">
          <div class="bio-slider">
            <div class="">
              <img class="bio-image" src="assets/images/VV-Bio-02-A.png" alt="">
            </div>
            <div class="">
              <img class="bio-image" src="assets/images/VV-Bio-02-B.png" alt="">
            </div>
            <!-- <div class="">
            <img class="bio-image" src="assets/images/VV-Bio-02-C.png" alt="">
          </div> -->
        </div>
      </div>
      <div class="col-md-5 bio-text col-sm-8 col-sm-offset-2 col-md-offset-0">
        <h1 class="" id="bioTitle"></h1>
        <?= $site->children()->find('bio')->text()->kirbytext() ?>
        <!-- <img class="logo-bio" src="assets/images/VV-Logo-Small.png" alt=""> -->
      </div>

    </div>
  </section>

  <section id="contacto" class="section-contacto">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1">

        <div class="col-md-3 col-md-offset-0 col-xs-6">
          <a href="http://facebook.com/<?= $site->facebook()->text() ?>" target="_blank">
            <img src="assets/images/VV-Contacto-FB.png" class="contacto-img" alt="">
          </a>
        </div>
        <div class="col-md-3 col-xs-6">
          <a href="http://instagram.com/<?= $site->instagram()->text() ?>" target="_blank">
            <img src="assets/images/VV-Contacto-IG.png" class="contacto-img" alt="">
          </a>
        </div>
        <div class="col-md-3 col-xs-6">
          <a href="http://twitter.com/<?= $site->twitter()->text() ?>" target="_blank">
            <img src="assets/images/VV-Contacto-TW.png" class="contacto-img" alt="">
          </a>
        </div>
        <div class="col-md-3 col-xs-6">
          <a href="mailto:<?= $site->email()->text() ?>" target="_blank">
            <img src="assets/images/VV-Contacto-GM.png" class="contacto-img" alt="">
          </a>
        </div>
      </div>

    </div>
  </section>

</div>

<p class="firma">Desarrollada por <a target="_blank" href="http://levihernan.com">Hernan Levi</a></p>

</main>

<?php snippet('footer') ?>
