<div class="block__row block__cards piks-green">
        <h2 class="title h4-size   title__underline underline--green ">Nos Services</h2>
        <div class="block__card block__card--piks-green columns">
        
        <?php foreach ($page->children()->listed() as $subpage): ?>
        
        
        
              <div class="card card--piks-green">
                    <h3 class="card__title h4-size  "><?php echo $subpage->content()->get('Service')?></h3>
                      <span class="card__square end-salmon"></span>
                              <div class="card__description ">
            <p><?php echo $subpage->content()->get('Description')?></p>  </div>
                                          <div class="btn-container btn-center">
            <a class="btn btn--green  btn-flex " href=<?php echo $subpage->url()?>>En savoir plus  </a>
  </div>                  </div>
            
            <?php endforeach ?>
            </div>
        </div> 