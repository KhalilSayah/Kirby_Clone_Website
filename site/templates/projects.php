<?php snippet('header') ?>
<body class=bg-piks-salmon>
<div class="block-0">
    <h1 class="title h4-size   title__underline underline--blue ">Nos Projets</h1>
</div>
<!--   Lister les projects -->
<?php foreach ($page->children()->listed() as $subpage): ?>

<div class="projects__lines">

<section class="block-type block-type-details"> 
    <section class="block__row block__details-line">
  <div class="details-line">
    <div class="details-line__content">  
      <h3 class="h4-size"><?php echo $subpage->content()->get('Project') ?></h3>
      <details class="details-line__details">
        <summary class="details-line__summary">Plus de détails</summary>
        <p><?php echo $subpage->content()->get('Description') ?></p>      </details>
    </div>
    <div class="details-line__aside">
      <ul class="details-line__cats" style="align-content: flex-end;" role="list">
                <li><?php echo $subpage->content()->get('Tag') ?></li>
                
              </ul>
      <div class="btn-container btn-left">
      <a class="btn btn--blue " href=<?php echo $subpage->content()->get('Link') ?> target="_blank">
     Visiter le site    </a>
  </div>    </div>
  </div>
</section>  </section>

<?php endforeach ?>


</div>
<?php snippet('contact')?>

</body>
<?php snippet('footer')?>