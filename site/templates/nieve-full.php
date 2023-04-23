<?php snippet('header') ?>

<style>
    .waitlist{
        position: absolute;
        z-index: 100;
    }
    .video-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    }
    .video-container > video {
        display: block;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }
    .spoti-container{
        position: absolute;
        bottom: 12px;
        z-index: 100;
        width: 50%;
        left: 25%;
    }
    @media screen and (max-aspect-ratio: 1920/1080) {
    .video-container > video {
        height: 100%;
    }
    }
    @media screen and (min-aspect-ratio: 1920/1080) {
    .video-container > video {
        width: 100%;
    }
    }

</style>


<section id="home">
        <div class="video-container">
            <video autoplay muted loop id="bgvid" playbackRate=2>
              <source src="assets/videos/720.mp4" type="video/mp4">
            </video>
        </div>

        <input class="waitlist" type="text"> Add me to the waitlist! </input>

        <div class="spoti-container">
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/748e49dhMDScn1AC2UofiB?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>        </div>
        </div>
</section>

<script>
    document.querySelector('video').playbackRate = 0.7;
</script>

<?php snippet('footer') ?>
