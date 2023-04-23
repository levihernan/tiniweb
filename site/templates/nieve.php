<?php snippet('header-content') ?>
<?php echo css('assets/css/horizontal-scroll.css') ?>
<?php echo js('assets/js/jquery.mousewheel.js') ?>
<script>
	$(function(){
		$("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
		$(".post").wrap("<td></td>");
		$("#page-wrap").mousewheel(function(event, delta) {
			this.scrollLeft -= (delta * 30);
      event.preventDefault();
            if ($(window).width() < 1080) {
            }
            else {
               //event.preventDefault();
            }
            //	event.preventDefault();
		});
	});

  function addMeButton(){
    if($('.text-input').val() == ''){
      $('.text-input').focus();
    }
    else $('.form').submit();
  }

  $(document).on('submit','.form',function(){
    $('#add-me-text').text('added!');
  });

</script>

<style>
  .video-post{
    height: 100vh;
  }


  .spoti-container{
        position: absolute;
        bottom: 0;
        z-index: 100;
        padding: 12px;
        width: 100%;
        opacity: 70%;
        transition: all 0.5s
    }
    .spoti-container:hover{
      opacity: 100%;
    }

  .spoti-container > iframe{
    height: 100px;
    width: 100%;
  }
  .text-input{
    width: 80%;
    text-align: center
  }
  .form{
    width: 100%;
  }

</style>

  <main class="main" role="main">
    <div id="page-wrap" class="imagenes">
        <div class="post text">
            <div class="waterfront">
            <form class="form" action="https://formspree.io/f/xeqwvrqj" method="POST" target="_blank">
            <input class="text-input" name="email" type="text"></input>
            </form>
                <h2 id='add-me-text' onClick="addMeButton()">
                  Add me to the waitlist!
                </h2>
                
                <div class="spoti-container">
                    <iframe id="spoti" style="border-radius:12px" src="https://open.spotify.com/embed/playlist/748e49dhMDScn1AC2UofiB?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>        </div>
                </div>
            </div>
            <div class="video-post">
            <video autoplay muted loop id="bgvid" playbackRate=0.7 height=100%>
                  <source src="assets/videos/720.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        


    </div>
  </main>

<?php snippet('footer') ?>
