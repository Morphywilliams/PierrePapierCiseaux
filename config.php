<?php
/* parti fonctionnement */

$message = null;
if (isset($_POST['submit']) && isset($_POST['choice'])) {

  $choix_utilisateur = $_POST['choice']; // Recuperation du choix de l'utilisateur
  $choices = ["pierre", "papier", "ciseaux"]; 
  $choix_ordinateur = $choices[array_rand($choices)]; // Choix de l'ordinateur

  if(!empty($_POST['choice']) && isset($_POST['choice'])){

    if ($choix_utilisateur == $choix_ordinateur) {
      $message = "Egalité ";
    } 
    elseif (
              $choix_utilisateur == "pierre" && $choix_ordinateur == "ciseaux" ||
              $choix_utilisateur == "papier" && $choix_ordinateur == "pierre" ||
              $choix_utilisateur == "ciseaux" && $choix_ordinateur == "papier"
              )
            {
      $message = "Vous avez gagné !";
    } else {
      $message = "L'ordinateur a gagné !";
    }
  }else{
    $message = "Entrez un choix ";
  }
}
else{
  $choix_utilisateur = "Rien jusque la faite un choix";
  $choix_ordinateur = 'Rien, j\'attend le lencement du jeu ';
}
 ?>