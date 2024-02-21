<?php

//establish the connection to database, and start the session
require("common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of index page-->
        <title>Ecommerce Márcio Dutra</title>
        <!-- Bootstrap Core CSS -->
        <link href="bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1>Nós vendemos estilo de vida.</h1>
                            <p>Desconto fixo de 40% em marcas premium </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Compre agora</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="1.jpg" alt="">
                                <div class="caption">
                                    <h3>Câmeras</h3>
                                    <p>Escolha entre os melhores disponíveis no mundo.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="10.jpg" alt="">
                                <div class="caption">
                                    <h3>Relógios</h3>
                                    <p>Relógios originais das melhores marcas.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="13.jpg" alt="">
                                <div class="caption">
                                    <h3>Camisas</h3>
                                    <p>Nossa requintada coleção de camisas.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>