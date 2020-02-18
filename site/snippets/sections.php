  <?php foreach(site()->children()->visible() as $section): ?>
    <div class="text section" id="<?php echo $section->title()->html() ?>">
      
        <h1 class="section-title"><?php echo $section->title()->html() ?></h1>
        <img class="floating-image" src="<?php echo $section->image()->url() ?>"/>
        <?php echo $section->text()->kirbytext() ?>
        
        <ul>
            <?php foreach($section->children()->visible() as $subpage): ?>
            <li>
                <a href="<?php echo $subpage->url() ?>"><?php echo $subpage->title()->html() ?></a></li>
            <?php endforeach ?>
        </ul>
        
        
    </div>  


  <?php endforeach ?>


    <div class="text section" id="<?php echo $site->children()->find('libro')->title()->html() ?>">
      
        <h1 class="section-title"><?php echo $site->children()->find('libro')->title()->html() ?></h1>
        <img class="floating-image" src="<?php echo $site->children()->find('libro')->image()->url() ?>"/>
        <?php echo $site->children()->find('libro')->text()->kirbytext() ?>
        
        <ul>
            <?php foreach($site->children()->find('libro')->children()->visible() as $subpage): ?>
            <li>
                <a href="<?php echo $subpage->url() ?>"><?php echo $subpage->title()->html() ?></a></li>
            <?php endforeach ?>
        </ul>
        
        
    </div>  



</ul>
