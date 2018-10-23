<?php
  require_once __DIR__ . '/include/init.php';
  include __DIR__ . '/layout/top.php';
  include __DIR__ . '/layout/nav.php';
 ?>
 <main>
     <section class="hero section is-info is-medium">
         <div class="container has-text-centered">
             <h1 class="title">Dons</h1>
             <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
         </div>
     </section>
     <section class="section">
         <div class="container">
             <div class="columns">
                 <div class="column is-8">
                     <h2 class="title has-text-centered">virement bancaire</h2>
                     <table class="table">
                         <thead>
                             <tr>
                                 <th>Titulaire du compte </th>
                                 <th>Domiciliation</th>
                                 <th>Banque</th>
                                 <th>Guichet</th>
                                 <th>N° de compte</th>
                                 <th>Clé</th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td>DesCodeuses</td>
                                 <td>37 Rue du télégraphe, 75020</td>
                                 <td>XXXXX</td>
                                 <td>XXXXXXXXXX</td>
                                 <td>XXXXXXXXXX</td>
                                 <td>XX</td>
                             </tr>
                         </tbody>
                     </table>
                     <p>IBAN XXXXXX XXXXXX XXXXX XXXX</p>
                 </div>
                 <div class="column is-4 has-text-centered">
                     <h2 class="title has-text-centered">PaylPal & Carte</h2>
                     <form id="dons" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="WMUPLQ8NWYNTU">
                        <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                        <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                    </form>

                 </div>
             </div>
         </div>
 </main>
 <?php
    include __DIR__ . '/layout/footer.php';
   include __DIR__ . '/layout/bottom.php';
  ?>
