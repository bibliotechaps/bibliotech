<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include('verifica_login.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Incial</title>

    <!-- Latest compiled and minified CSS-->
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
    <!-- div para barra de configurações(ter em todos os codigos) -->
    <div class="imagemFundoTop">
        <!--<img src="img/fundo-cinza.png" alt="Imagem de Fundo" width=100% height=75px>-->

        <div class="col-6">
            <img id="img-logo" src="img/logo.PNG" alt="Imagem de Fundo">
            <h1 id="bibliotech-name">BiblioTech</h1>
        </div>

        <!-- Ícones -->
        <div id="icone-livro" class="hover">
            <a href="consultar-livro.php"><img src="img/book-mark.png" alt="ConsultarLivro" title="Livro"></a>Livro
        </div>
        <div id="icone-perfil" class="hover">
            <a href="perfil-admin.php"><img src="img/profile.png" alt="imagem profile" title="Perfil"></a><?php
                                                                                                            echo $_SESSION['login'];
                                                                                                            ?>
        </div>
        <div id="icone-sair" class="hover">
            <a href="logout.php"><img src="img/logout.png" alt="imagem login" title="Sair"></a>Sair
        </div>
        <div class="hover" id="icone-home">
            <a href="inicial.php"><img src="img/home.png" alt="imagem home" title="Página Inicial"></a>Inicial
        </div>

    </div>
    <div class="geral" id="menor">
        <!--Título-->
        <div class="col-12 mb-2">
            <h1 id="title"><b>Página Inicial</b></h1>
            <hr>
        </div>

        <div class="align-text-center">
            <h4 id="title" style=" text-transform: uppercase"> Bem vindo, <?php
                                                                            echo $_SESSION['login'];
                                                                            ?></h4>
        </div>

        <br>
        <div class="container">
            <a href="cadastroAluno.php" class="hover"><img src="img/add.png" alt="Cadastro Aluno"></a> Cadastro Aluno

        </div>
        <br>

        <div class="container">
            <a href="consultar-aluno.php" class="hover"><img src="img/user-pesqui.png" alt="Consultar Aluno"></a> Consultar Aluno
        </div>
        <br>
        <div class="container">
            <a href="adicionar-livro.php" class="hover"><img src="img/book.png" alt="Adcionar Livro"></a> Adicionar Livro
        </div>
        <br>

        <div class="container">
            <a href="efetuar-emprestimo.php" class="hover"><img src="img/efetuar.png" alt="Efetuar Emprestimo"></a> Efetuar Empréstimo

        </div>
        <br>
        <div class="container">
            <a href="relatorio-de-emprestimo.php" class="hover"><img src="img/file-list-3-fill.png" alt="Relatório de Empréstimo"></a> Relatório de Empréstimo
        </div>
        <br>
    </div>
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