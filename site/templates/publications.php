<?php snippet('w_header')  ?>
<body class='bg-piks bg-piks-grey'>
    <div class='block-0'>

<section class='articles__container block__container'>
<div class="articles__header">
    <h1 class="title h4-size   title__underline underline--blue ">Publications</h1>
    
</div>

<div class="articles__block">
      <div class="articles__list-articles">
        <?php $page = page('publications') ?>
        <?php foreach ($page->children()->listed() as $subpage): ?>
                                <article class="list-articles">
            <header class="list-articles__header">
              <a class="list-articles__link" href=<?php echo $subpage->url()?>>
                <h2 class="list-articles__title"><?php echo $subpage->content()->get('description') ?></h2>
              </a>
              <time class="list-articles__date" datetime="2022-06-02"><?php echo $subpage->content()->get('Date') ?></time>
            </header> 
          </article>
          <?php endforeach ?>               

                    </div>
    </div>

    
      </section>

    </div>

    <?php snippet('contact')?>

</body>
<?php snippet('footer')?>