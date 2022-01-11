
<!-- ======= Footer ======= -->
<section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Contact</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
              <address>
            <strong><?= $parametres->getParams('nom_site') != null ? $parametres->getParams('nom_site')['valeur'] :'#'?></strong><br><?= $parametres->getParams('adresse_site') != null ? $parametres->getParams('adresse_site')['valeur'] :'#'?>
            </address>
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> <?= $parametres->getParams('phone_site') != null ? $parametres->getParams('phone_site')['valeur'] :'#'?></strong><br><?= $parametres->getParams('adresse_site') != null ? $parametres->getParams('adresse_site')['valeur'] :'#'?>
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> <?= $parametres->getParams('email_site') != null ? $parametres->getParams('email_site')['valeur'] :'#'?></strong><br><?= $parametres->getParams('adresse_site') != null ? $parametres->getParams('adresse_site')['valeur'] :'#'?>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Liens rapides</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Derniers Evènements</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="conditions.php">Termes et conditions</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="politique.php">Politique de confidentialité</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="contact.php">Nous contacter</a>
                  </li>
                 
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Menu</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="index.php">Accueil</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="about.php">Notre Agence</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="property-grid.php">Nos Propriétés</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="agents-grid.php">Nos Collaborateurs</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="agents-grid.php">Nos Partenaires</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="<?= $parametres->getParams('facebook') != null ? $parametres->getParams('facebook')['valeur'] :'#'?>" target="_blank">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?= $parametres->getParams('twitter') != null ? $parametres->getParams('twitter')['valeur'] :'#'?>" target="_blank">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?= $parametres->getParams('instagram') != null ? $parametres->getParams('instagram')['valeur'] :'#'?>" target="_blank">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="<?= $parametres->getParams('linkedin') != null ? $parametres->getParams('linkedin')['valeur'] :'#'?>" target="_blank">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; 2021
              <span class="color-a" style="text-transform:uppercase"><?= $parametres->getParams('nom_site') != null ? $parametres->getParams('nom_site')['valeur'] :''?>. </span> TOUS DROITS RÉSERVÉS. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->