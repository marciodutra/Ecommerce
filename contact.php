<!DOCTYPE html>
<html lang="en">
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contato | Life Style Store</title>
        <style type="text/css">
            .p1{
                text-align: justify;
            }
        </style>
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'header.php';
?>
<div class="container" id="content">
    <div class="row">
    <div class="col-lg">
        <img src="contact.png" style="float: right;">
        <h1>Entrar em contato</h1>
        <p id="p1">Olá, estamos aqui para ajudá-lo.<br> Fique à vontade para entrar em contato conosco caso tenha alguma dúvida sobre produtos, pagamento ou entrega do pedido.<br>No que diz respeito ao pagamento, aceitaremos apenas encomendas pré-pagas, de forma a evitar o pagamento em dinheiro e, consequentemente, manter o distanciamento social.<br> No que diz respeito ao atraso na entrega do pedido, observe que estamos fazendo o possível para entregar seu pedido no prazo, mas seu pedido pode atrasar devido à situação atual (ou circunstâncias imprevistas). No entanto, garantimos que seu pedido será entregue em breve.<br>Caso você tenha alguma outra dúvida, preencha o formulário abaixo e nossa equipe entrará em contato com você em até 24 horas.<br>Você também pode entrar em contato com o número abaixo para entrar em contato com nosso executivo de atendimento ao cliente imediatamente.</p>
    </div><br><br>
    <div class="col-lg">
        <div style="float: right;">
            <h1>INFORMAÇÕES DA EMPRESA</h1><br>
            <p id="p1">Porto Alegre, RS</p><br>
            <p id="p1">Telefone/whats : 51 994690210</p><br>
            <p id="p1">Email : professormarciodutra@gmail.com</p>
        </div>
        <h1>CONTATO</h1>
        <div style="float: left;">
        <form>
            <div class="form-group">
                <input type="text" name="name" placeholder="Nome" autofocus="on" class="form-control" required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
            </div>
            <div class="form-group">
                <textarea rows="5" cols="60" placeholder="Endereço"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>