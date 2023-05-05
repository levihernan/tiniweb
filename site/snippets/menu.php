<nav role="navigation">

  <ul class="menu cf ghostMenu" id="top-menu">
    <?php foreach($pages->visible() as $p): ?>
      <?php if ($p->extsection()!='1'):?>
        <li>
          <a href="<?php if( $page->intendedTemplate() != 'newhome' ): ?><?php echo url() ?>/<?php endif ?>#<?php echo $p->uri() ?>"><?php echo $p->title()->html() ?></a>
        </li>
      <?php endif ?>
    <?php endforeach ?>
  </ul>

</nav>
