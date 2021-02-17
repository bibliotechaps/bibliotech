<?php
    session_start();
    include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Editoras</title>
    <link rel="stylesheet" href="css/arquivo1.css   ">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
    function confirmarExclusao(id, nm){
        if(window.confirm("Deseja realmente apagar o registro:\n" + id + "-" + nm)){
            window.location = "excluir-editora.php?id=" + id;
        }
    }

</script>
</head>

<body>

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
            <a href="perfil-admin.php"><img src="img/profile.png" alt="imagem profile" title="Perfil"></a>Perfil
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
        <?php
            //comando sql para selecionar os livros cadastradas
            $sql = "SELECT * FROM editora order by nome";
            //executar o comando sql
            $dadosEditoras = $conn->query($sql);
            if ($dadosEditoras->num_rows > 0){
                ?>

                <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b> Consultar Editoras </b></h1>
                <hr>
            </div>

                <br>

            <table class="table table-striped table-hover">
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Editoras</b></td>
                        <td><b>Editar</b></td>
                        <td><b>Excluir</b></td>
                        
                    </tr>

                    <?php 

                        //fetch_assoc() retorna cada linha da matriz
                        while($exibir = $dadosEditoras->fetch_assoc()){ 
                            ?>
                            <tr>
                                <td><?php echo $exibir["id"]?></td>
                                <td><?php echo $exibir["nome"]?></td>
                                <td> <div class="hover"> <a href="editar-editora.php?id=<?php echo $exibir["id"]?>"><img src="img/edit-box-line (1).png" title="Editar"></a> </div></td>
                                <td> <div class= "hover"><a href="#" onclick="confirmarExclusao('<?php echo $exibir["id"] ?> ',' <?php echo $exibir["nome"]?>')" ><img src="img/delete-bin-6-line (1).png " title="Excluir"></a></div> </td>
                            </tr>
                            <?php
                        }

                    ?>

                </table>

                <br>
            
                <div class="row justify-content-md-center">
                    <div style="align-items: center;">
                        <a href="adicionar-livro.php"><button type="button" class="btn btn-danger">Voltar</button></a>
                    </div>
                </div>
                    
                <?php 
            }
        
        ?>

        <br><br>

    </div>
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