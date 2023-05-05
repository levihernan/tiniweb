<?php echo js('assets/slick/slick.min.js') ?>
<script type="text/javascript">
$(document).ready(function(){
  $('.home-slider').slick({
    arrows: false,
    fade: true,
    autoplay: true,
    autoplaySpeed: 1000
  });
  $('.fotos-slider').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });
  $('.bio-slider').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });
});
</script>


<?php echo js('assets/js/typeit.min.js') ?>
<script type="text/javascript">

new TypeIt('#textosTitle', {
  strings: ['textos'],
  autoStart: false,
  speed: 75,
  lifeLike: false,
});

new TypeIt('#fotosTitle', {
  strings: ['35mm'],
  autoStart: false,
  speed: 75,
  lifeLike: false,
});

new TypeIt('#amorTitle', {
  strings: ['íntimo & universal'],
  autoStart: false,
  speed: 75,
  lifeLike: false,
});

new TypeIt('#prensaTitle', {
  strings: ['prensa & links'],
  autoStart: false,
  speed: 75,
  lifeLike: false,
});

new TypeIt('#tiendaTitle', {
  strings: ['tienda'],
  autoStart: false,
  speed: 75,
  lifeLike: false,
});

new TypeIt('#bioTitle', {
  strings: ['bio'],
  autoStart: false,
  speed: 75,
  lifeLike: false,
});

new TypeIt('#contactoTitle', {
  strings: ['contacto'],
  autoStart: false,
  speed: 75,
  lifeLike: false,
});

</script>


<?php echo js('assets/js/jquery.stellar.js') ?>
<?php echo js('assets/js/progressbar.min.js') ?>
<script type="text/javascript">

  function hideLoader(){
    $('#loader').toggleClass('loader-invisible');
  }


  // progressbar.js@1.0.0 version is used
  // Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

  var bar = new ProgressBar.Path('#heart-path', {
    easing: 'easeInOut',
    duration: 1000
  });

  bar.set(0);
  bar.animate(0.5);

  $(window).on("load", function() {

    bar.animate(1.0);  // Number from 0.0 to 1.0
    setTimeout(hideLoader, 1000);

    $(window).stellar({
      horizontalScrolling: false,
      responsive: true,
    });

  });

</script>


<script type="text/javascript">
  // Cache selectors
  var topMenu = $("#top-menu"),
  topMenuHeight = topMenu.outerHeight()+15,
  // All list items
  menuItems = topMenu.find("a"),
  // Anchors corresponding to menu items
  scrollItems = menuItems.map(function(){
    var item = $($(this).attr('href'));
    // var item = $(this).attr("href");
    if (item.length) { return item; }
  });

  // Bind to scroll
  $(window).scroll(function(){
    // Get container scroll position
    var fromTop = $(this).scrollTop()+topMenuHeight;

    if ($(this).scrollTop() < 500){
      $("#top-menu").addClass("ghostMenu");
    }
    else {
      $("#top-menu").removeClass("ghostMenu");
    }

    // Get id of current scroll item
    var cur = scrollItems.map(function(){
      if ($(this).offset().top < fromTop)
      return this;
    });
    // Get the id of the current element
    cur = cur[cur.length-1];
    var id = cur && cur.length ? cur[0].id : "";
    // Set/remove active class
    menuItems
    .parent().removeClass("active")
    .end().filter("[href='#"+id+"']").parent().addClass("active");
  })



</script>

</body>
</html>
