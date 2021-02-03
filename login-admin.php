<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>

    <!-- Latest compiled and minified CSS (ter em todos os códigos)-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/arquivo1.css">
    <!-- JS -->
    <script type="text/javascript" src="js/arquivo-js.js"></script>

</head>

<body>
    <!-- div para barra de configurações(ter em todos os códigos)-->
    <div class="imagemFundoTop">
        <!--<img src="img/fundo-cinza.png" alt="Imagem de Fundo" width=100% height=75px>-->

        <div class="col-6">
            <img id="img-logo" src="img/logo.PNG" alt="Imagem de Fundo">
            <h1 id="bibliotech-name">BiblioTech</h1>
        </div>

    </div>

    <div class="container"  style="width: 50%;">
        <form action="login.php" method="POST">
            <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b>Login Admin</b></h1>

            </div>
            <div class="card align-items-center" style="background-color: #D3D3D3;">
                <br>
                <?php
                if (isset($_SESSION['nao_autenticado'])) :
                ?>
                    <div class="">
                        <input class="btn btn-danger w-100" type="button" disabled value="ERRO: login ou senha inválidos.">
                    </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <br>
                <div class="form-group w-50">
                    <label style="margin: auto;" for="login">Login:</label><br>
                    <input name="login" id="login" class="form-control" type="text" placeholder="Seu Login" required>
                </div>
                <br>
                <div class="form-group w-50">
                    <label style="margin: auto;" for="senha">Senha:</label><br>
                    <input name="senha" id="senha" class="form-control" type="password" placeholder="Sua Senha" required>
                </div>
                
                <br>
                <input class="btn btn-primary w-50" type="submit" name="btnCadastrar" value="Entrar">
                

                <br>
                <hr noshade=”noshade” width="15%" size="20px">
                <div>
                <a href="cadastroAdmin.php"><button class="btn btn-success w-100" type="button" name="btnCadastrar" >Criar Conta</button></a>
                </div>
                <br>
            </div>


        </form>
    </div>
    <br>
    <br>
    <!--Div para a imagem de fundo de baixo (ter em todos os códigos)-->
    <div class="imagemFundoBottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col" style="text-align: center;  margin-top: 40px;">
                    <div style="color: white;">
                        <h1>Contate-nos</h1>
                    </div>
                    <div style="color:white" class="hover">
                        <a href="https://www.instagram.com/bibliotechaps/" target="_blank"> <img src="img/instagram.png" alt="iconeInsta"></a>Instagram
                    </div>
                    <div style="color:white">
                        <img src="img/mail.png" alt="iconeMail">bibliotech@outlook.com.br
                    </div>
                </div>

                <div class="col" style="text-align: center; color: white; margin-top: 60px;">
                    <div>
                        <h5>Copyright &copy; Bibliotech 2020</h5>
                    </div>
                </div>

                <div class="col hover" style="text-align: center; color: white; margin-top: 40px;">
                    <h1>Bibliotech</h1>
                    <a href="equipe.php"><img src="img/team.png" alt="IconeTeam"></a>Conheça nossa equipe
                </div>
            </div>
        </div>
    </div>
</body>

</html>