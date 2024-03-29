<?php
include_once("conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Efetuar Empréstimo</title>
    <link rel="stylesheet" href="css/arquivo1.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- JQuerry masks -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script>
        //data do empréstimo
        function atuDataDev() {

            let today = document.getElementById('dataEmp').value;
            let date = new Date(today.substring(0, 4), today.substring(5, 7), today.substring(8, 10));
            date.setDate(date.getDate() + 10);

            document.getElementById('dataDev').value = date.getFullYear() + '-' + date.getMonth().toString().padStart(2, '0') + '-' + date.getDate().toString().padStart(2, '0');
        }

        //confirmacao do emprestimo
        function pergunta() {
            if (confirm('Tem certeza que deseja realizar esse empréstimo?')) {
                document.meuformulario.submit()
            }
        }
    </script>


</head>


<body>
    <script>
        $('#InputDateTime').mask("99/99/9999 99:99:99");
        $('#InputDate').mask("99/99/9999");
    </script>

    <!--Div para a imagem de fundo de cima (ter em todos os códigos)-->
    <div class="imagemFundoTop">
        <!--<img src="img/fundo-cinza.png" alt="Imagem de Fundo" width=100% height=75px>-->

        <div class="col-6">
            <img id="img-logo" src="img/logo.png" alt="Imagem de Fundo">
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

        <script>
            $('.date_time').mask('00/00/0000 00:00:00');
        </script>

        <form method="post" autocomplete="off" action="insert-emprestimo.php" name="meuformulario">



            <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b> Efetuar Empréstimo </b></h1>
                <hr>
            </div>
            <div class="row justify-content-center p-3 w-100 m-0">
                <div class="col-2"></div>
                <div class="form-group col-auto col-4">
                    <label for="aluno_id" class="control-label hover" style="margin: auto;"> Login Aluno: </label>
                    <select name="aluno_id" class="form-control" required>
                        <?php
                        $result_niveis_aluno = "SELECT * FROM aluno order by login";
                        $resultado_niveis_aluno = mysqli_query($conn, $result_niveis_aluno);
                        while ($row_niveis_aluno = mysqli_fetch_assoc($resultado_niveis_aluno)) { ?>
                            <option value="<?php echo $row_niveis_aluno['id']; ?>"><?php echo $row_niveis_aluno['login']; ?>
                            </option><?php
                                    }
                                        ?>
                    </select>
                </div>

                <div class="form-group col-auto col-4">
                    <label for="livro_id" class="control-label hover" style="margin: auto;"> Livro: </label>
                    <select name="livro_id" class="form-control" required>
                        <?php
                        $result_niveis_livro = "SELECT * FROM livro order by titulo";
                        $resultado_niveis_livro = mysqli_query($conn, $result_niveis_livro);
                        while ($row_niveis_livro = mysqli_fetch_assoc($resultado_niveis_livro)) { ?>
                            <option value="<?php echo $row_niveis_livro['id']; ?>"><?php echo $row_niveis_livro['titulo']; ?>
                            </option><?php
                                    }
                                        ?>
                    </select>
                </div>
                <div class="col-2"></div>
                <div class="col-3"></div>
                <div class="form-group  col-3">
                    <label style="margin: auto;" for="dataEmp">Data do Empréstimo:</label><br>
                    <input name="dataEmp" id="dataEmp" class="form-control" type="date" required onchange="atuDataDev();" onkeypress="$(this).mask('0000-00-00')" value="<?php echo date('Y-m-d') ?>">
                </div>


                <div class="form-group  col-3">
                    <label style="margin: auto;" for="dataDev">Data da Devolução:</label><br>
                    <input name="dataDev" id="dataDev" class="form-control" type="date" required onkeypress="$(this).mask('0000-00-00')" value="<?php echo date('Y-m-d', strtotime('+10 days')) ?>">
                </div>
                <div class="col-3"></div>

                <div style="align-items: center;">
                    <input class="btn btn-success" onclick="pergunta()" type="button" name="btnCadastrar" value="Realizar">
                    <a href="inicial.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                </div>
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