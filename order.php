<?php
require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Confirmation | Life Style Store</title>
        <link href="bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="jquery.js"></script>
        <script src="bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="col-md-12">
                <div class="jumbotron">
                      <h3 align="center">Seu pedido foi feito com sucesso. Obrigado por comprar conosco.</h3><hr>
                      <p align="center">Seu pedido será entregue em 2 dias</p><hr>
                    <p align="center">Clique <a href="products.php">aqui</a> para comprar qualquer outro item.</p>
                </div>
            </div>
        </div>
        <?php include("footer.php");
        ?>
    </body>
</html>
</html>