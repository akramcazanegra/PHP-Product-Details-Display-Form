<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulaire de commande</title>
</head>
<body>
  <h1>Formulaire de commande</h1>
  <form id="commandeForm" action="" method="post">
    <div>
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required>
    </div>
    <div>
      <label for="produits">Produits :</label>
      <select id="produits" name="produits" required>
        <option value="">Choisir un produit</option>
        <option value="1">Produit 1</option>
        <option value="2">Produit 2</option>
        <option value="3">Produit 3</option>
       
      </select>
    </div>
    <button type="submit" name="submit">Envoyer</button>
  </form>

  <?php

  $prix_produits = [
    1 => 10, 
    2 => 15, 
    3 => 20  
  ];


  if(isset($_POST['submit'])) {
    if(isset($_POST['nom']) && isset($_POST['produits'])) {
      $nom = $_POST['nom'];
      $produit = $_POST['produits'];
      $prix = $prix_produits[$produit];

      // Affichage du récapitulatif de commande
      echo "<h2>Récapitulatif de la commande</h2>";
      echo "<p>Nom : $nom</p>";
      echo "<table border='1'>
              <tr>
                <th>Produit</th>
                <th>Prix</th>
              </tr>
              <tr>
                <td>Produit $produit</td>
                <td>$prix €</td>
              </tr>
            </table>";
  


      $total = $prix;
      echo "<p>Total à payer : $total €</p>";
    }
  }
  ?>
</body>
</html>
