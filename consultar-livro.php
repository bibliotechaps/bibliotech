<?php
    session_start();
    include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Livro</title>
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
    function confirmarExclusao(id, tt){
        if(window.confirm("Deseja realmente apagar o registro:\n" + id + "-" + tt)){
            window.location = "excluir-livro.php?id=" + id;
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
            $sql = "SELECT * FROM bibliotech.livro order by titulo";
            //executar o comando sql
            $dadosLivros = $conn->query($sql);
            if ($dadosLivros->num_rows > 0){
                ?>

                <!--Título-->
            <div class="col-12 mb-2">
                <h1 id="title"><b> Consultar Livro </b></h1>
                <hr>
            </div>

            <form>
                <h3>Pesquisar livro</h3>
                <input type="text" id="buscar" value="" size="50" class="form-control" style="width: 50%"><br><br>
                
            </form>

             <table class="table table-striped table-hover">
                        <tr>
                            <td><b>ID</b></td>
                            <td><b>ISBN</b></td>
                            <td><b>Título</b></td>
                            <td><b>Ano</b></td>
                            <td><b>Páginas</b></td>
                            <td><b>Volume</b></td>
                            <td><b>Editora</b></td>
                            <td><b>Autor</b></td>
                            <td><b>Vizualizar</b></td>
                            <td><b>Editar</b></td>
                            <td><b>Excluir</b></td>
                            
                        </tr>

                        <?php 

                            //fetch_assoc() retorna cada linha da matriz
                            while($exibir = $dadosLivros->fetch_assoc()){ 
                                ?>
                                <tr>
                                    <td><?php echo $exibir["id"]?></td>
                                    <td><?php echo $exibir["isbn"]?></td>
                                    <td><?php echo $exibir["titulo"]?></td>
                                    <td><?php echo $exibir["anoEdicao"]?></td>
                                    <td><?php echo $exibir["numPaginas"]?></td>
                                    <td><?php echo $exibir["volume"]?></td>
                                    <?php
                                    //busca os dados da editora com base no código da tabela de livros
                                    $sqlEditora = "SELECT * FROM editora WHERE id = " . $exibir["editora_id"];
                                    $dadosEditora = $conn->query($sqlEditora);
                                    $editora = $dadosEditora->fetch_assoc();
                                    ?>
                                    <td><?php echo $editora["nome"]?></td>
                                    <?php
                                    //busca os dados do autor com base no código da tabela de livros
                                    $sqlAutor = "SELECT * FROM autor WHERE id = " . $exibir["autor_id"];
                                    $dadosAutor = $conn->query($sqlAutor);
                                    $autor = $dadosAutor->fetch_assoc();
                                    ?>
                                    <td><?php echo $autor["nome"]?></td>
                                    <td> <div class = "hover"> <a href="VizualizarDadosLivro.php?id=<?php echo $exibir["id"]?>"><img src="img/search-line (2).png" title="Vizualizar"></a></div> </td>
                                    <td> <div class="hover"> <a href="EditarLivro.php?id=<?php echo $exibir["id"]?>"><img src="img/edit-box-line (1).png" title="Editar"></a> </div></td>
                                    <td> <div class= "hover"><a href="#" onclick="confirmarExclusao('<?php echo $exibir["id"] ?> ',' <?php echo $exibir["titulo"]?>')" ><img src="img/delete-bin-6-line (1).png " title="Excluir"></a></div> </td>
                                </tr>
                                <?php
                            }

                        ?>

                    </table>
            
                    
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