<?php
  require_once __DIR__ . '/include/init.php';
  include __DIR__ . '/layout/top.php';
  include __DIR__ . '/layout/nav.php';

  if(isset($_POST['envoyer']))
   {
    $nomprenom = $_POST['nomprenom'];
    $societe = $_POST['societe'];
    $email = $_POST['email'];
    $objet = "[DesCodeuses] " . $_POST['objet'];

    $message = "Destinataire : " .$nomprenom ."<br>E-mail : " .$email . "<br><br>" .$_POST['message'];

    $message = nl2br($message);

    $headers = 'MINE-Version 1.0' ."\r\n";
    $headers = 'Content-type : text/html; charset=utf-8' . "\r\n";

    mail('contact@descodeuses.org', $objet, $message, $headers);

   echo "
   <main>
       <div class=\"container\">
          <article class=\"message is-success\">
            <div class=\"message-header\">
              <p>Super !</p>
            </div>
            <div class=\"message-body\">
              Merci pour votre contact! Je ne tarderais pas à vous répondre, promis!
            </div>
          </article>
       </div>
   </main>
  ";
 }
 else
   echo "
   <main>
       <div class=\"container\">
           <article class=\"message is-danger\">
             <div class=\"message-header\">
               <p>Attention !</p>
             </div>
             <div class=\"message-body\">
               Erreur lors de l'envoi... Essayez encore une fois, svp! ;)
             </div>
           </article>
       </div>
   </main>
   ";

include __DIR__ . '/layout/footer.php';
include __DIR__ . '/layout/bottom.php';
