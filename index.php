<link rel="stylesheet" href="..\..\bootstrap-5.3.0-alpha2-dist\css\bootstrap.min.css">
<link href="starter-template.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
//jQuery library
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
//Latest compiled JavaScript
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<link rel="stylesheet" href="style.css">
<script src="..\..\bootstrap-5.3.0-alpha2-dist\js\bootstrap.min.js"></script>
<?php require "config.php";?>
<section>
  <h1>PIERRE | PAPIER | CISEAUX</h1>


  <div class="col-md-4">
    <div class="victoire alert alert-danger">
        <strong>Vous avez choisi : <span><?= $choix_utilisateur ?></span></strong> 
        <hr>
        <strong>L'ordinateur a choisi : <span><?= $choix_ordinateur ?></span></strong>
      </div>
    </div>
  </div>
  <form action="index.php" method="post">
    <div class="input-group col-md-4" id=" choix">
      <input type="radio" name="choice" value="pierre" class="radio"/>Pierre <br>
      <input type="radio" name="choice" value="papier" class="radio"/>Papier <br>
      <input type="radio" name="choice" value="ciseaux" class="radio"/>Ciseaux <br>
    </div>
    <input class="send" type="submit" name="submit" value="Jouer" class="submite"/>
  </form>
  <div class="alert-success">
          <?= $message ?>
    </div> 
 </section>