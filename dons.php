<?php
  require_once __DIR__ . '/include/init.php';
  include __DIR__ . '/layout/top.php';
  include __DIR__ . '/layout/nav.php';
 ?>
 <main>
     <section class="hero section is-info is-medium">
         <div class="container has-text-centered">
             <h1 class="title">Dons</h1>
             <p class="subtitle">Si vous souhaitez faire un don à DesCodeuses.</p>
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
                                 <td>10107</td>
                                 <td>00651</td>
                                 <td>00622048380</td>
                                 <td>20</td>
                             </tr>
                         </tbody>
                     </table>
                     <p>IBAN FR76 1010 7006 5100 6220 4838 020</p>
                 </div>
                 <div class="column is-4 has-text-centered">
                     <h2 class="title has-text-centered">Par carte bancaire</h2>
                     <a href="https://www.helloasso.com/associations/descodeuses/formulaires/1" target="_blank" class="button is-uppercase is-info">faire un don</a>

                 </div>
             </div>
         </div>
 </main>
 <?php
    include __DIR__ . '/layout/footer.php';
   include __DIR__ . '/layout/bottom.php';
  ?>
