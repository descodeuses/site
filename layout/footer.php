<footer class="footer">
  <div class="container">
    <div class="columns">
      <div class="column is-6">
        <p class="grey-text text-lighten-4"><strong>DesCodeuses</strong> est une association loi 1901 régistré à Paris sur le numéro <strong> W751242699</strong>.</p>
        <p>SIRET XXXXXXX</p>
      </div>
      <div class="column is-6 is-offset-2">
        <ul>
          <li><a class="has-text-grey" href="<?= RACINE_WEB;?>recrutement.php">Recrutement</a></li>
          <li><a class="has-text-grey" href="<?= RACINE_WEB;?>dons.php">Dons</a></li>
          <li><a class="has-text-grey" href="<?= RACINE_WEB;?>index.php#contact">Contact</a></li>
          <li><a class="has-text-grey" href="<?= RACINE_WEB;?>confidentialite.php">Politique de confidentialité</a></li>
          <li><a class="has-text-grey" href="<?= RACINE_WEB;?>mentions.php">Mentions légales</a></li>
        </ul>
      </div>
    </div>
    <div class="has-text-centered">
        <form id="dons" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="LYPSS72ZVEK54">
            <input type="image" src="http://www.descodeuses.org/assets/images/btn_dons.png" border="1" style="border-radius:3px" name="submit" alt="Button pour les dons">
            <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container has-text-dark has-text-centered help">
  © 2018 Copyright DesCodeuses
  </div>
</div>
