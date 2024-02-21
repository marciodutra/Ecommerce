<!-- this code is header navigation bar in website -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <!--To add menu option when screen width is reduced-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <!--If user is logged in, then header will contain these-->
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Carrinho </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Configurações</a></li>
                    <li><a href = "orderhistory.php"><span class = "glyphicon glyphicon-file"></span> Meus pedidos</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Sair</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Cadastre-se</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> Sobre nós</a></li>
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contato</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>