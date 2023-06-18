<!DOCTYPE html>
<html>
<head>
  <title>Validation du Panier</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Validation du Panier</h1>
  <form action="traitement_formulaire.php" method="post">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
    
    <label for="ville">Ville :</label>
    <input type="text" id="ville" name="ville" required>
    
    <label for="adresse">Adresse de facturation :</label>
    <input type="text" id="adresse" name="adresse" required>
    
    <label for="code_postal">Code Postal :</label>
    <input type="text" id="code_postal" name="code_postal" required>
    
    <label for="telephone">Numéro de téléphone :</label>
    <input type="text" id="telephone" name="telephone" required>
    
    <label for="carte_bleue">Numéro de carte bleue :</label>
    <input type="text" id="carte_bleue" name="carte_bleue" required>
    
    <label for="code_securite">Code de sécurité :</label>
    <input type="text" id="code_securite" name="code_securite" required>
    
    <input type="submit" value="Valider">
  </form>
</body>
</html>