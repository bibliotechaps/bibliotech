<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Admin</title>

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
    <!-- JQuerry masks -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</head>

<body>
    <!--Div para a imagem de fundo de cima (ter em todos os códigos)-->
    <div class="imagemFundoTop">
        <!--<img src="img/fundo-cinza.png" alt="Imagem de Fundo" width=100% height=75px>-->

        <div class="col-6">
            <img id="img-logo" src="img/logo.PNG" alt="Imagem de Fundo">
            <h1 id="bibliotech-name">BiblioTech</h1>
        </div>

    </div>
    <div class="container">
        <form method="POST" action="insert-admin.php" autocomplete="off">

            <div class="col-12 mb-2">
                <h1 id="title"><b>Cadastrar Admin</b></h1>
                <hr>
            </div>

            <div class="row justify-content-around p-3 w-100 m-0">

                <div class="form-group  col-3">
                    <label style="margin: auto;" for="nome">Nome:</label><br>
                    <input name="nome" class="form-control" type="text" placeholder="Seu nome" autofocus required>
                </div>

                <div class="form-group  col-3" id="resposta1">
                    <label style="margin: auto;" for="login">Login:</label><br>
                    <input name="login" class="form-control" type="text" placeholder="Seu Login" required>
                </div>

                <div class="form-group  col-3">
                    <label style="margin: auto;" for="senha">Senha:</label><br>
                    <input name="senha" id="senha" class="form-control" type="password" placeholder="Sua Senha" required>
                </div>

                <div class="form-group  col-3">
                    <label style="margin: auto;" for="senha2">Confirmar Senha:</label><br>
                    <input name="senha2" id="senha2" class="form-control" type="password" placeholder="Repita Sua Senha" required>
                </div>

                <div class="form-group  col-3">
                    <label style="margin: auto;" for="email">Email:</label><br>
                    <input name="email" class="form-control" type="text" placeholder="Seu Email" required>
                </div>

                <div class="form-group  col-3">
                    <label style="margin: auto;" for="telefone">Telefone:</label><br>
                    <input name="telefone" class="form-control" type="tel" placeholder="Seu Telefone" required onkeypress="$(this).mask('(00) 90000-0000')">
                </div>
                <div class="form-group  col-3">
                    <label style="margin: auto;" for="dataNasc">Data de Nascimento:</label><br>
                    <input name="dataNasc" class="form-control" type="date" required>
                </div>

                <div class="form-group  col-3">
                    <label style="margin: auto;" for="cpf">CPF:</label><br>
                    <input name="cpf" type="text" class="form-control" placeholder="Ex.: 000.000.000-00" required onkeypress="$(this).mask('000.000.000-00')">
                </div>
                <div class="form-group col-3">
                    <label style="margin: auto;" for="cep">CEP:</label><br>
                    <input name="cep" type="text" class="form-control" placeholder="Seu CEP" required onkeypress="$(this).mask('00.000-000')">
                </div>
                <div class="form-group col-3">
                    <label style="margin: auto;" for="name">Estado:</label><br>
                    <!--<input name="estado" id="estado" class="form-control" type="text" placeholder="Seu Estado" required>-->
                    <select name="estado" class="form-control" required>
                        <option value="ac">AC</option>
                        <option value="al">AL</option>
                        <option value="ap">AP</option>
                        <option value="am">AM</option>
                        <option value="ba">Ba</option>
                        <option value="ce">CE</option>
                        <option value="df">DF</option>
                        <option value="es">ES</option>
                        <option value="go">GO</option>
                        <option value="ma">MA</option>
                        <option value="mt">MT</option>
                        <option value="ms">MS</option>
                        <option value="mg">MG</option>
                        <option value="pa">PA</option>
                        <option value="pb">PB </option>
                        <option value="pr">PR</option>
                        <option value="pe">PR </option>
                        <option value="pi">PI</option>
                        <option value="rj">RJ </option>
                        <option value="rn">RN</option>
                        <option value="rs">RS</option>
                        <option value="ro">RO</option>
                        <option value="rr">RR </option>
                        <option value="sc">SC</option>
                        <option value="sp">SP</option>
                        <option value="se">SE</option>
                        <option value="to">TO </option>
                    </select>
                </div>
                <div class="form-group col-3">
                    <label style="margin: auto;" for="cidade">Cidade:</label><br>
                    <input name="cidade" class="form-control" type="text" placeholder="Sua Cidade" required>
                </div>
                <div class="form-group  col-3">
                    <label style="margin: auto;" for="bairro">Bairro:</label><br>
                    <input name="bairro" class="form-control" type="text" placeholder="Seu Bairro" required>
                </div>
                <div class="col-4">
                    <!-- só para identar -->
                </div>
                <div class="form-group  col-4">
                    <label style="margin: auto;" for="endereco">Endereço:</label><br>
                    <input name="endereco" class="form-control" type="text" placeholder="Nome da rua e número da casa" required>
                </div>
                <div class="col-4">
                    <!-- só para identar -->
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
                <div style="align-items: center;">
                    <input class="btn btn-success" type="submit" name="btnCadastrar" value="Cadastrar">
                    <a href="inicial.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                </div>
            </div>
                    <br>
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
                    <a href="equipe.html"><img src="img/team.png" alt="IconeTeam"></a>Conheça nossa equipe
                </div>
            </div>
        </div>
    </div>
</body>

</html>