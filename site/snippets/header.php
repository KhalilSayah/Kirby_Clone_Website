<?php
/*
  Snippets are a great way to store code snippets for reuse
  or to keep your templates clean.

  This header snippet is reused in all templates.
  It fetches information from the `site.txt` content file
  and contains the site navigation.

  More about snippets:
  https://getkirby.com/docs/guide/templates/snippets
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php
  /*
    In the title tag we show the title of our
    site and the title of the current page
  */
  ?>
  <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>

  <?php
  /*
    Stylesheets can be included using the `css()` helper.
    Kirby also provides the `js()` helper to include script file.
    More Kirby helpers: https://getkirby.com/docs/reference/templates/helpers
  */
  ?>
  <?= css([
    
    'assets/css/main.css'
  ]) ?>

  <?php
  /*
    The `url()` helper is a great way to create reliable
    absolute URLs in Kirby that always start with the
    base URL of your site.
  */
  ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
</head>
<body>

<header class="header-top bg-piks-green  bg-end end-green ">
  <div id="top" class="top_container">
  <a class="logo" href="<?= $site->url() ?>">
      <?= $site->title()->esc() ?>
    </a>
  <input type="checkbox" id="burgerbutton"/>
  <label for="burgerbutton" class="burgerimage" title="Navigation">&#x2630; MENU</label>
  <ul class="menu__list">

    <?php foreach ($site->children()->listed() as $item): ?>
        <li class="menu__item">
        <a <?php e($item->isOpen(), 'aria-current ') ?> href="<?= $item->url() ?>"><?= $item->title()->esc() ?></a>
    
    <?php endforeach ?>
    <li class="menu__item">
      <a href="#section-contact">Contact</a>

  </ul>
</nav>
  
  </div>
  <div class="bg-piks-green bg-hero-salmon ">
  <div id="hero" class="hero">
          <div class="baseline bg-piks-salmon quote-green piks-blue">
                  <p><?php echo $page->content()->get('description') ?></p>  </div>
     
  </div>
</div>
</header>

  <main class="main">
