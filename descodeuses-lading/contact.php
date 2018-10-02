<?php
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

  echo "Merci pour votre contact! Je ne tarderais pas à vous répondre, promis!";

}
else
  echo "Erreur lors de l'envoi... Essayez encore une fois, svp! ;)";

 ?>
