<?php snippet('w_header') ?>
<body class='bg-piks-grey'>

<main class='article block-0'>
    <article class='article__container'>

    <header class="article__header">
      <time class="article__published" datetime="2022-06-02">Publié le <?php echo $page->content()->get('Date')?></time>
      
    </header>

    <section class='article__content stack'>

    <?php echo $page->contents()->kt() ?>

    </section>

    </article>

</main>
<?php snippet('contact')?>
</body>
<?php snippet('footer')?>