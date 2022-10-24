<footer class="bg-piks-salmon">
  <div class="row footer piks-blue piks-blue-link">
    <div class="columns">
      <div class="footer__col footer__links">
        <h4 class="base-size">Liens utiles</h4>
        <ul class="footer-links__list">
                      <li class="footer-list__item html-sitemap__item">
              <a href="https://www.pikselkraft.com/en-ce-moment">En ce moment</a>
            </li>
                      <li class="footer-list__item html-sitemap__item">
              <a href="https://www.pikselkraft.com/liens">Liens</a>
            </li>
                      <li class="footer-list__item html-sitemap__item">
              <a href="https://www.pikselkraft.com/presentation-numerique-responsable">Le numérique responsable</a>
            </li>
                      <li class="footer-list__item html-sitemap__item">
              <a href="https://www.pikselkraft.com/accessibilite-bugs">Accessibilité &amp; Bugs</a>
            </li>
                      <li class="footer-list__item html-sitemap__item">
              <a href="https://www.pikselkraft.com/nos-outils">Nos outils</a>
            </li>
                      <li class="footer-list__item html-sitemap__item">
              <a href="https://www.pikselkraft.com/mentions-legales">Mentions légales</a>
            </li>
                  </ul>
      </div>
      <div class="footer__col footer__sitemap piks-blue">
        <nav aria-labelledby="sitemapTitle">
          <h4 id="sitemapTitle" class="base-size">Plan du site</h4>
          <ul id="footer-nav" class="footer__plan">
            <?php foreach ($site->children()->listed() as $subpage):?>
            <li class="f-plan__item">
              <a class="f-plan__link" href=<?php echo $subpage->url()?>><?php echo $subpage->title()?></a>
            </li>
            <?php endforeach?>
                        
          </ul>
        </nav>
      </div>
      <div class="footer__col footer__eco piks-blue">
        <p>Site web à faible empreinte écologique<br>
Poids moyen par page de 100 ko<br>
Sans tracking</p>      </div>
    </div>
    <div class="footer__mention">
      <p><?php echo $site->content()->get('copyright')?> <a href="https://getkirby.com/" rel="noopener noreferrer" target="_blank">Kirby</a></p>    </div>
  </div>
</footer>