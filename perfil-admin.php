<?php
session_start();
include("conexao.php");

$query = "select * from admin where login = '{$_SESSION['login']}'";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <!-- Latest compiled and minified CSS -->
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
    <!--Div para a imagem de fundo de cima (ter em todos os códigos)-->
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
        <div class="hover" id="icone-aluno">
            <a href="perfil-aluno.php"><img src="img/aluno.png" alt="imagem aluno" title="Aluno"></a>Aluno
        </div>
    </div>

    <div class="container">
        <form method="POST" action="">

            <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b>Perfil do Admin</b></h1>
                <hr>
            </div>

            <div class="row justify-content-around p-3 w-100 m-0">
                <?php while ($dado = $result->fetch_array()) { ?>

                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="nome">Nome:</label><br>
                        <input name="nome" id="nome" class="form-control" type="text" value="<?php
                                                                                                $_SESSION['nome'] = $dado['nome'];
                                                                                                echo $_SESSION['nome'];
                                                                                                ?>" readonly>
                    </div>

                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="login">Login:</label><br>
                        <input name="login" id="login" class="form-control" type="text" value="<?php
                                                                                                $_SESSION['login'] = $dado['login'];
                                                                                                echo $_SESSION['login'];
                                                                                                ?>" readonly>
                    </div>

                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="email">Email:</label><br>
                        <input name="email" id="email" class="form-control" type="text" value="<?php
                                                                                                $_SESSION['email'] = $dado['email'];
                                                                                                echo $_SESSION['email'];
                                                                                                ?>" readonly>
                    </div>

                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="datanasc">Data de Nascimento:</label><br>
                        <input name="dataNasc" id="dataNasc" class="form-control" type="date" value="<?php
                                                                                                        $_SESSION['dataNasc'] = $dado['dataNasc'];
                                                                                                        echo $_SESSION['dataNasc'];
                                                                                                        ?>" readonly>
                    </div>

                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="cpf">CPF:</label><br>
                        <input name="cpf" id="cpf" class="form-control" type="text" value="<?php
                                                                                            $_SESSION['cpf'] = $dado['cpf'];
                                                                                            echo $_SESSION['cpf'];
                                                                                            ?>" readonly>
                    </div>
                    <div class="form-group  col-4">
                        <label style="margin: auto;" for="telefone">Telefone:</label><br>
                        <input name="telefone" id="telefone" class="form-control" type="tel" value="<?php
                                                                                                    $_SESSION['telefone'] = $dado['telefone'];
                                                                                                    echo $_SESSION['telefone'];
                                                                                                    ?>" readonly>
                    </div>

                    <div class="form-group  col-3">
                        <label style="margin: auto;" for="cep">CEP:</label><br>
                        <input name="cep" id="cep" class="form-control" type="text" value="<?php
                                                                                            $_SESSION['cep'] = $dado['cep'];
                                                                                            echo $_SESSION['cep'];
                                                                                            ?>" readonly>
                    </div>

                    <div class="form-group  col-3">
                        <label style="margin: auto;" for="estado">Estado:</label><br>
                        <input name="estado" id="estado" class="form-control" style=" text-transform: uppercase" type="text" value="<?php
                                                                                                                                    $_SESSION['estado'] = $dado['estado'];
                                                                                                                                    echo $_SESSION['estado'];
                                                                                                                                    ?>" readonly>
                    </div>

                    <div class="form-group  col-3">
                        <label style="margin: auto;" for="cidade">Cidade:</label><br>
                        <input name="cidade" id="cidade" class="form-control" type="text" value="<?php
                                                                                                    $_SESSION['cidade'] = $dado['cidade'];
                                                                                                    echo $_SESSION['cidade'];
                                                                                                    ?>" readonly>
                    </div>
                    <div class="form-group  col-3">
                        <label style="margin: auto;" for="bairro">Bairro:</label><br>
                        <input name="bairro" id="bairro" class="form-control" type="text" value="<?php
                                                                                                    $_SESSION['bairro'] = $dado['bairro'];
                                                                                                    echo $_SESSION['bairro'];
                                                                                                    ?>" readonly>
                    </div>


                    <div class="form-group  col-6">
                        <label style="margin: auto;" for="endereco">Endereço:</label><br>
                        <input name="endereco" id="endereco" class="form-control" type="text" value="<?php
                                                                                                        $_SESSION['endereco'] = $dado['endereco'];
                                                                                                        echo $_SESSION['endereco'];
                                                                                                        ?>" readonly>

                    </div>
                <?php } ?>

            </div>

        </form>
        <!--
        <div class="row justify-content-center " style="align-items: center;">
            <div class="ml-2">
                <a href="perfil-editable.php"><button class="btn btn-primary" type="">Editar</button></a>
            </div>
            <button class="btn btn-danger ">Excluir</button>
        </div>
        -->
        <div class="row justify-content-center">
            <div class="mr-1">
                <a href="perfil-editable-admin.php"><button class="btn btn-primary">Editar</button></a>
            </div>
            <div>
                <a href="excluir-admin.php"><button class="btn btn-danger">Excluir</button></a>
            </div>
        </div>
        <br><br>
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