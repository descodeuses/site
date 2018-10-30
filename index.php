<?php
  require_once __DIR__ . '/include/init.php';
  include __DIR__ . '/layout/top.php';
  include __DIR__ . '/layout/nav.php';
 ?>
 <main>
     <section class="hero is-info is-fullheight" id="cover">
         <div class="hero-body">
             <div class="container">
                 <div class="column is-4 is-offset-8">
                     <h2 class="title"> Qui sont-elles ?</h2>
                     <p class="subtitle"> Des Femmes. Dans les Quartiers. Connectées, emancipées, elles vont à l'assaut du numérique ! </p>
                 </div>
             </div>
         </div>
         <div class="hero-foot">
           <div class="container">
             <div class="column is-4 is-offset-8">
             </div>
           </div>
         </div>
     </section>
     <!-- chiffres -->
     <section class="section container is-medium">
         <div class="section">
             <h2 class="title has-text-centered">1,6 millions d’habitants en QPV</h2>
              <p class="heading has-text-centered">en Île de France</p>
         </div>
         <div class="hero is-medium">
             <div class="tile is-ancestor">
                 <div class="tile is-parent">
                     <article class="tile is-child has-text-centered">
                         <p class="title"><i class="fas fa-male"></i> <i class="fas fa-female"></i></p>
                         <p class="title">52%</p>
                         <p class="heading">Femmes</p>
                     </article>
                 </div>
                 <div class="tile is-parent">
                     <article class="tile is-child has-text-centered">
                         <p class="title"><i class="far fa-smile"></i> <i class="far fa-frown"></i></p>
                         <p class="title">1 sur 2</p>
                         <p class="heading">Enloignée de l'emploi</p>
                     </article>
                 </div>
                 <div class="tile is-parent">
                     <article class="tile is-child has-text-centered">
                         <p class="title"><i class="fas fa-search"></i> <i class="fas fa-desktop"></i></p>
                         <p class="title">191 000</p>
                         <p class="heading">cherchent emploi</p>
                     </article>
                 </div>
                 <div class="tile is-parent">
                     <article class="tile is-child has-text-centered">
                         <p class="title"><i class="fas fa-desktop"></i> <i class="fas fa-desktop"></i></p>
                         <p class="title">80.000</p>
                         <p class="heading">Postes à pourvoir dans le web</p>
                     </article>
                 </div>
             </div>
         </div>
     </section>

     <!-- ambition -->
     <section class="section hero is-info" id="ambitions">
         <div class="columns">
             <div class="column is-8 is-offset-2">
                 <h2 class="title">notre ambition : être un acteur majeur de l’accompagnement des femmes des quartiers politique de la ville, à intégrer le numérique.</h2>
                 <p class="has-text-right"><span>DesCodeuses</span></p>
             </div>
         </div>
     </section>

     <!-- actions -->
     <section class="section container has-text-centered" id="actions">
         <h2 class="title">Nos actions</h2>
         <div class="columns">
             <div class="column is-4 has-text-centered">
                 <svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                     <defs>
                         <pattern id="img" patternUnits="userSpaceOnUse" width="100" height="100">
                             <image xlink:href="https://farm4.staticflickr.com/3165/5733278274_2626612c70.jpg" x="-25" width="150" height="100" />
                         </pattern>
                     </defs>
                     <polygon points="50 1 95 25 95 75 50 99 5 75 5 25" fill="url(#img)"/>
                 </svg>
                 <h2>sensibilisation</h2>
                 <p>Sensibiliser les femmes des quartiers politique de la ville aux opportunités d’emploi dans le numérique</p>
             </div>
             <div class="column is-4 has-text-centered">
                 <svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                     <defs>
                         <pattern id="img" patternUnits="userSpaceOnUse" width="100" height="100">
                             <image xlink:href="https://farm4.staticflickr.com/3165/5733278274_2626612c70.jpg" x="-25" width="150" height="100" />
                         </pattern>
                     </defs>
                     <polygon points="50 1 95 25 95 75 50 99 5 75 5 25" fill="url(#img)"/>
                 </svg>
                 <h2>Formation</h2>
                 <p>Former les femmes des quartiers politique de la ville aux métiers du développement web</p>
             </div>
             <div class="column is-4 has-text-centered">
                 <svg viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                     <defs>
                         <pattern id="img" patternUnits="userSpaceOnUse" width="100" height="100">
                             <image xlink:href="https://farm4.staticflickr.com/3165/5733278274_2626612c70.jpg" x="-25" width="150" height="100" />
                         </pattern>
                     </defs>
                     <polygon points="50 1 95 25 95 75 50 99 5 75 5 25" fill="url(#img)"/>
                 </svg>
                 <h2>Accompagnement</h2>
                 <p>Accompagner les femmes des quartiers politique de la ville jusqu’à l’emploi</p>
             </div>
         </div>
         </div>
     </section>

     <!-- equipe -->
     <div class="section equipe has-text-centered" id="equipe">
         <h2 class="title">Notre Equipe</h2>
         <div class="columns is-multiline">
             <div class="column is-3 is-offset-3 profil center-align">
                 <div class="photo-fondateurs">
                     <img src="assets/images/profilephoto.png" alt="photo souad">
                 </div>
                 <div>
                     <p><span>Souad <br> Boutegrabet</span></p>
                     <p>Fondatrice, Formatrice</p>
                 </div>
                 <div class="rs">
                     <ul>
                         <li><i class="fab fa-twitter"></i></li>
                         <li><i class="fab fa-linkedin-in"></i></li>
                     </ul>
                 </div>
             </div>
             <div class="column is-3 profil center-align">
                 <div class="photo-fondateurs">
                     <img src="assets/images/michelson.jpg" alt="photo michelson">
                 </div>
                 <div>
                     <p><span>Michelson <br>
                         Novaes Santos Nantier</span></p>
                     <p>Président, Formateur</p>
                 </div>
                 <div class="rs">
                     <ul>
                         <li><i class="fab fa-twitter"></i></li>
                         <li><i class="fab fa-linkedin-in"></i></li>
                     </ul>
                 </div>
             </div>
             <div class="column is-3 profil is-offset-1 center-align">
                 <div class="photo-fondateurs">
                     <img src="assets/images/siluette.png" alt="photo Jessy">
                 </div>
                 <div>
                     <p><span>Jessy</span></p>
                     <p>Community manager</p>
                 </div>
                 <div class="rs">
                     <ul>
                         <li><i class="fab fa-twitter"></i></li>
                         <li><i class="fab fa-linkedin-in"></i></li>
                     </ul>
                 </div>
             </div>
             <div class="column is-3 profil center-align">
                 <div class="photo-fondateurs">
                     <img src="assets/images/siluette.png" alt="photo Emeline">
                 </div>
                 <div>
                     <p><span>Emeline</span></p>
                     <p>Designer</p>
                 </div>
                 <div class="rs">
                     <ul>
                         <li><i class="fab fa-twitter"></i></li>
                         <li><i class="fab fa-linkedin-in"></i></li>
                     </ul>
                 </div>
             </div>
             <div class="column is-3 profil center-align">
                 <div class="photo-fondateurs">
                     <img src="assets/images/siluette.png" alt="photo Haythem">
                 </div>
                 <div>
                     <p><span>Haythem</span></p>
                     <p>Bénévole</p>
                 </div>
                 <div class="rs">
                     <ul>
                         <li><i class="fab fa-twitter"></i></li>
                         <li><i class="fab fa-linkedin-in"></i></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="section" id="contact">
         <h2  class="title has-text-centered">Contact</h2>
         <div class="container">
            <form class="" action="contact.php" method="post">
                <div class="field is-horizontal">
                    <div class="field-body">
                        <div class="field">
                            <p class="control is-expanded has-icons-left">
                                <input class="input" type="text" name="nomprenom" placeholder="Nom & Prénom" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control is-expanded has-icons-left has-icons-right">
                                <input class="input" type="email" name="email" placeholder="E-mail" required>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field">
                    <input class="input" type="text" name="societe" placeholder="Société">
                </div>

                <div class="field">
                    <input class="input" type="text"  name="objet" placeholder="Objet">
                </div>
                <div class="field">
                    <textarea id="textarea1" class="textarea"name="message" id="message" placeholder="Message"></textarea>
                </div>
                <button class="button is-success is-outlined" type="submit" name="envoyer"><span>Envoyer</span>
                    <span class="icon is-small">
                      <i class="fas fa-check"></i>
                    </span>
                </button>
                <button class="button is-danger is-outlined" type="reset" name="reset"> <span>Annuler</span>
                    <span class="icon is-small"><i class="fas fa-times"></i></span>
                    </button>
            </form>
        </div>
     </div>
 </main>

 <?php
    include __DIR__ . '/layout/footer.php';
   include __DIR__ . '/layout/bottom.php';
  ?>
