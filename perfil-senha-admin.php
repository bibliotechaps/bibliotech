<?php
include_once("conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Senha</title>

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

    <script>
    function confirmarModificacao(nome, id){
        if(window.confirm("Deseja realmente editar a senha do Admin " + id + " - " + nome+ "?")){
            senha2.setCustomValidity('');
        }
    }
    </script>

</head>

<body>

    <!-- div para barra de configurações(ter em todos os códigos)-->
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

    <div class="container" id="menor">
        <form method="POST" action="confirmSenha.php">
            <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b>Editar Senha</b></h1>
                <hr>
            </div>

            <div class="row justify-content-center w-100">

                <div class="form-group ">
                    <label style="margin: auto;" for="senhaAtual">Digite sua senha atual:</label><br>
                    <input name="senhaAtual" id="senhaAtual" class="form-control" type="password" placeholder="1234" required>
                </div>


            </div>

            <div class="row justify-content-center w-100">
                <div class="form-group ">
                    <label style="margin: auto;" for="senha">Digite a nova senha:</label><br>
                    <input name="senha" id="senha" class="form-control" type="password" placeholder="1234" required>
                </div>
            </div>

            <div class="row justify-content-center w-100">

                <div class="form-group">
                    <label style="margin: auto;" for="senha2">Confirmar nova senha:</label><br>
                    <input name="senha2" id="senha2" class="form-control" type="password" placeholder="1234" required>
                </div>
            </div>
            <script>
                //verifica se as senhas são iguais
                var senha = document.getElementById("senha"),
                    senha2 = document.getElementById("senha2");

                function validatePassword() {
                    if (senha.value != senha2.value) {
                        senha2.setCustomValidity("Senhas diferentes!");
                    } else {
                        senha2.setCustomValidity('');
                    }
                }

                senha.onchange = validatePassword;
                senha2.onkeyup = validatePassword;
            </script>
            <div class="row justify-content-center container" style="align-items: center;">
                <div class="mr-2">
                <a href="#" onclick="confirmarModificacao('<?php echo $_SESSION['nome'];?>','<?php echo $_SESSION['id'];?>')"><input class="btn btn-success" type="submit" onclick="validatePassword()" value="Atualizar"><a>
                </div>
                <div>
                    <a href="perfil-admin.php"><button id="cancelar" type="button" class="btn btn-danger">Cancelar</button></a>
                </div>

            </div>

        </form>
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