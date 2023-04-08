<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">

<?php 
require "header.php";
require "config.php";
?>
<section>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Voir vos Choix</h4>
    <p><strong>Vous avez choisi : <span><?= $choix_utilisateur ?></span></strong> </p>
    <hr>
    <p class="mb-0"><strong>L'ordinateur a choisi :<?= $choix_ordinateur ?></strong></p>
    <hr>
    <div class="alert-success" style="color:red">
          <?= $message ?>
    </div> 
  </div>
  <!------------------------------------------------------------------------------>
  
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Choix de jeu</h4>
    <form action="index.php" method="post">
      <p>
        <strong>
          <span>
            <div class="input-group" id="choix">
                <input type="radio" name="choice" value="pierre" class="radio"/>Pierre 
                <input type="radio" name="choice" value="papier" class="radio"/>Papier 
                <input type="radio" name="choice" value="ciseaux" class="radio"/>Ciseaux 
            </div>
          </span>
        </strong>
      </p>
      <hr>
      <p class="mb-0"><strong>L'ordinateur a choisi :<?= $choix_ordinateur ?></strong></p>
      <hr>
      <input class="send" type="submit" name="submit" value="Jouer" class="submite"/>
    </form>
  </div>
  <!------------------------------------------------------------------------------>
  
  <!------------------------------------------------------------------------------>
  <ol class="list-group list-group-numbered">
    <li class="list-group-item d-flex justify-content-between align-items-start">
    <span class="badge bg-primary rounded-pill">Score: <?= $compteur_user?></span><br><br>
      <div class="ms-2 me-auto">
        Score joueur
      </div>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
    <span class="badge bg-primary rounded-pill">Score: <?=$compteur_null?></span><br><br>
      <div class="ms-2 me-auto">
        Match null
      </div>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-start">
    <span class="badge bg-primary rounded-pill">Score: <?=$compteur_ordi?></span><br><br>
      <div class="ms-2 me-auto">
        Score Ordinateur
      </div>
    </li>
  </ol>
</section>
<?php require "footer.php"?>