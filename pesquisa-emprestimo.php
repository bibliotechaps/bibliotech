<?php
    session_start();
    include_once('conexao.php');
    $pesquisa = $conn->real_escape_string($_POST['pesquisa']);

    //criar o comando sql para a busca na base de dados
    $sql =  "SELECT * 
                FROM emprestimo
                where aluno_id like '%$pesquisa%' 
                or admin_id like '%$pesquisa%'
                order by aluno_id";

     //executar o comando sql
     $dadosEmprestimos = $conn->query($sql);
     if($dadosEmprestimos->num_rows > 0){
        ?>
        <table class="table table-striped table-hover">
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Data Inicial</b></td>
                        <td><b>Data Final</b></td>
                        <td><b>Administrador</b></td>
                        <td><b>Aluno</b></td>
                        <td><b>Livro</b></td>
                    </tr>

                    <?php 

                        //fetch_assoc() retorna cada linha da matriz
                        while($exibir = $dadosEmprestimos->fetch_assoc()){ 
                            ?>
                            <tr>
                                <td><?php echo $exibir["id"]?></td>
                                <td><?php echo $exibir["dataInicial"]?></td>
                                <td><?php echo $exibir["dataFinal"]?></td>
                                <?php
                                //busca os dados do administrador com base no código da tabela de livros
                                $sqlAdministrador = "SELECT * FROM admin WHERE id = " . $exibir["admin_id"];
                                $dadosAdministrador = $conn->query($sqlAdministrador);
                                $administrador = $dadosAdministrador->fetch_assoc();
                                ?>
                                <td><?php echo $administrador["nome"]?></td>
                                <?php
                                //busca os dados do aluno com base no código da tabela de livros
                                $sqlAluno = "SELECT * FROM aluno WHERE id = " . $exibir["aluno_id"];
                                $dadosAluno = $conn->query($sqlAluno);
                                $aluno = $dadosAluno->fetch_assoc();
                                ?>
                                <td><?php echo $aluno["nome"]?></td>
                                <?php
                                //busca os dados do livro com base no código da tabela de livros
                                $sqlLivro = "SELECT * FROM livro WHERE id = " . $exibir["livro_id"];
                                $dadosLivro = $conn->query($sqlLivro);
                                $livro = $dadosLivro->fetch_assoc();
                                ?>
                                <td><?php echo $livro["titulo"]?></td>
                            </tr>
                            <?php
                        }

                    ?>

                </table>

                <br> 
                <br>
        


     <?php
         
     }         
     else{
        echo "Nenhum registro retornado! Verifique seus filtros.";
        ?>
            <br>
            <br>
           
        <?php
     }
?>