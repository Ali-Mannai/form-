<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulaire</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- <script>
    function afficherConfirmation() {
      alert("Formulaire envoyé avec succès !");
    }
  </script> -->
</head>
<body>
  <h1>Formulaire</h1>
  <form id="form1" name="f1" method="POST" action="confirmer.php" >   <!-- onsubmit="afficherConfirmation()" -->
    <div class="form-group">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" placeholder="votre nom" required>
    </div>
    <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input  type="text" id="prenom" name="prenom" placeholder="votre prénom"  required>
    </div>
    <div class="form-group">
      <label for="email">Email :</label>
      <input type="email" id="email" name="email" placeholder="votre Email" required>
    </div>
    <div class="form-group">
      <label for="message">Message :</label>
      <textarea id="message" name="message" rows="4" placeholder="votre texte" required></textarea>
    </div>
    <button type="submit">Envoyer</button>
  </form>
  <?php
  echo "hello from php";
  
  ?>
</body>
</html>
