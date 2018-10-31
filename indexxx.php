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
     </section>

     <!-- numbers -->
     <section class="section container is-medium numbers">
         <div class="hero is-medium">
            <div class="section has-text-centered">
                <h2 class="title title-vert "> 1.6mi personnes</h2>
                <p class="heading">en ile de france</p>
                <p><strong>Vivent dans les Quartiers Politiques de la ville</strong></p>
            </div>
            <div class="columns">
                <div class="column">
                    <div class="has-text-centered">
                        <img src="assets/images/moitie.png" alt="Icon poste à pouvoir">
                        <h2 class="title title-vert ">52%</h2>
                        <p class="heading">Femmes</p>
                    </div>
                </div>
                <div class="column">
                    <div class="has-text-centered">
                        <img src="assets/images/deuxfemmes2.png" alt="Icon poste à pouvoir">
                        <h2 class="title title-vert ">1 sur 2</h2>
                        <p class="heading">Enloignée de l'emploi</p>
                    </div>
                </div>
                <div class="column">
                    <div class="has-text-centered">
                        <img src="assets/images/loupeordinateur2.png" alt="Icon poste à pouvoir">
                        <h2 class="title title-vert ">191 000</h2>
                        <p class="heading">cherchent emploi</p>
                    </div>
                </div>
                <div class="column">
                    <div class="has-text-centered">
                        <img src="assets/images/femmeordi2.png" alt="Icon poste à pouvoir">
                        <h2 class="title title-vert ">80.000</h2>
                        <p class="heading">Postes à pourvoir dans le web</p>
                    </div>
                </div>
            </div>
        </div>
     </section>

     <!-- ambition -->
     <section class="section hero is-medium is-danger" id="ambitions">
         <div class="columns">
             <div class="column is-8 is-offset-2">
                 <h2 class="title">notre ambition : être un acteur majeur de l’accompagnement des femmes des quartiers politique de la ville, à intégrer le numérique.</h2>
                 <p class="has-text-right"><span>DesCodeuses</span></p>
             </div>
         </div>
     </section>

     <!-- actions -->
     <section class="section is-medium container has-text-centered" id="actions">
         <h2 class="title">Nos actions</h2>
         <div class="columns">
             <div class="column is-4 has-text-centered">
                 <img src="assets/images/sensibilisation.png" alt="Icons sensibilisation">
                 <h2 class="title-2 title-vert">sensibilisation</h2>
                 <p>Sensibiliser les femmes des quartiers politique de la ville aux opportunités d’emploi dans le numérique</p>
             </div>
             <div class="column is-4 has-text-centered">
                 <img src="assets/images/certification.png" alt="Icons certification">
                 <h2 class="title-2 title-vert">Formation</h2>
                 <p>Former les femmes des quartiers politique de la ville aux métiers du développement web</p>
             </div>
             <div class="column is-4 has-text-centered">
                 <img src="assets/images/accompagnement.png" alt="Icons accompagnement">
                 <h2 class="title-2 title-vert">Accompagnement</h2>
                 <p>Accompagner les femmes des quartiers politique de la ville jusqu’à l’emploi</p>
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
                     <p>Co-fondatrice</p>
                 </div>
                 <div class="rs">
                     <ul>
                         <li><a href="https://twitter.com/SouadSoR"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://www.linkedin.com/in/souad-boutegrabet-8772818a/"><i class="fab fa-linkedin-in"></i></a> </li>
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
                     <p>Co-fondateurs</p>
                 </div>
                 <div class="rs">
                     <ul>
                         <li><a href="https://twitter.com/meuladopunk"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://www.linkedin.com/in/michelsonhns/"><i class="fab fa-linkedin-in"></i></a> </li>
                     </ul>
                 </div>
             </div>
             <div class="column is-3 profil is-offset-1 center-align">
                 <div class="photo-fondateurs">
                     <img src="assets/images/siluette.png" alt="photo Emeline">
                 </div>
                 <div>
                     <p><span>Emeline <br>
                         Ancel-Pirouelle</span></p>
                     <p>Graphiste</p>
                 </div>
                 <div class="rs">
                     <ul>
                         <li><a href="https://www.behance.net/emelineap"><i class="fab fa-behance"></i></a></li>
                     </ul>
                 </div>
             </div>
             <div class="column is-3 profil center-align">
                 <div class="photo-fondateurs">
                     <img src="assets/images/haythem.jpg" alt="photo Haythem">
                 </div>
                 <div>
                     <p><span>Haythem <br>
                         Ben Abdallah
                     </span></p>
                     <p>Dévéloppeur</p>
                 </div>
                 <div class="rs">
                     <ul>
                         <li><a href="https://www.linkedin.com/in/haythem-ben-abdallah-11314584/"><i class="fab fa-linkedin-in"></i></a></li>
                     </ul>
                 </div>
             </div>
             <div class="column is-3 profil center-align">
                 <div class="photo-fondateurs">
                     <img src="assets/images/salima.jpg" alt="photo Salima">
                 </div>
                 <div>
                     <p><span>Salima <br>
                         Benaissaoui</span></p>
                     <p>Trésorière</p>
                 </div>
                 <div class="rs">
                     <ul>
                         <li><a href="https://twitter.com/SalimaBena"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="https://www.linkedin.com/in/salima-benaissaoui-8a257897/"><i class="fab fa-linkedin-in"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <!-- contact -->
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
