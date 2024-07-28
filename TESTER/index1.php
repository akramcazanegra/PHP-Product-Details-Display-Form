<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Commande</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#orderForm').submit(function(event){
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'verify.php',
                    data: $(this).serialize(),
                    success: function(response){
                        $('#orderSummary').html(response);
                    }
                });
            });
        });
    </script>
</head>
<body>

<form id="orderForm" method="post">
    <label for="name">Nom :</label><br>
    <input type="text" id="name" name="name"><br><br>

    <label for="products">Produits :</label><br>
    <select id="products" name="products">
        <option value="1">Produit 1 - 10€</option>
        <option value="2">Produit 2 - 20€</option>
        <option value="3">Produit 3 - 30€</option>
    </select><br><br>

    <button type="submit" name="submit">Envoyer</button>
</form>

<div id="orderSummary"></div>

</body>
</html>
