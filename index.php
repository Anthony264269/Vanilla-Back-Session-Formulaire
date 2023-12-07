<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form action='./user.php' method='post'> 
<!-- ICI je renvoie vers ma page informations.php que j'ai créé au préalable -->
<label>Civilité(e)</label>
<select id="simple" name="Civilité(e)">
  <option>Mr,Mme</option>
  <option>Mr</option>
  <option>Mme</option>
  </select>
<label>Nom de famille</label>
<input type="text" placeholder="votre nom de famille" name="nom">

<label>Prénom </label>
<input type="text" placeholder="votre prénom" name="prenom">
<input type="file" accept="image/*,.pdf" />
<button type="submit">Envoyer</button>
<!-- type SUBMIT important pour envoyer vos données -->
</form>
</body>
</html>


<?php








?>