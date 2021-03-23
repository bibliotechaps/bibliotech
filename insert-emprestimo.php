<?php
session_start();
include_once("conexao.php");
$aluno_id = $_POST["aluno_id"];
$livro_id = $_POST["livro_id"];
$admin_id = $_SESSION['id'];
$dataInicial = $_POST["dataEmp"];
$dataFinal = $_POST["dataDev"];

$sqlEmp = "SELECT * from emprestimo where aluno_id = '$aluno_id'";
$dadosEmp = $conn->query($sqlEmp);
//verifica se o aluno já tem dois emprestimos pendentes
if ($dadosEmp->num_rows > 1) {
?>
    <script>
        alert('Esse aluno já pussui dois empréstimos pendentes.');
        window.location = 'efetuar-emprestimo.php';
    </script>
    <?php
} else {
    $sqlVeri = "SELECT * from emprestimo where aluno_id = '$aluno_id' and livro_id = '$livro_id'";
    $dadosVeri = $conn->query($sqlVeri);
    //verifica se o aluno já tem esse empréstimo
    if ($dadosVeri->num_rows > 0) {
        ?>
        <script>
            alert('Esse aluno já pussui o empréstimo desse livro.');
            window.location = 'efetuar-emprestimo.php';
        </script>
        <?php
    }else{
        $sqlVeriLivro = "SELECT volume from livro where id = '$livro_id'";
        $dadosVeriLivro = $conn->query($sqlVeriLivro);
        $volume = $dadosVeriLivro->fetch_assoc();
        $volumeLivro = $volume['volume'];
        //verifica se contém esse livro no estoque
        if ($volumeLivro<1) {
            ?>
            <script>
                alert('Esse livro selecionado não está disponível em estoque.');
                window.location = 'efetuar-emprestimo.php';
            </script>
            <?php
        }else{
            $sqlInsert = "INSERT into emprestimo (aluno_id, livro_id, admin_id, dataInicial, dataFinal) values ('$aluno_id', '$livro_id', '$admin_id', '$dataInicial', '$dataFinal')";

            if ($conn->query($sqlInsert)) {
                $volumeLivro = $volumeLivro -1;
                $sqlSubtrai = "UPDATE livro set volume = '$volumeLivro' where id = '$livro_id'";
                $dadosSubtrai = $conn->query($sqlSubtrai);
                ?>

                <script>
                    alert('Empréstimo inserido com sucesso!');
                    //window.location = 'consultar-emprestimo.php';
                    window.location = 'efetuar-emprestimo.php';
                </script>

                <?php
            } else {
                ?>

                <script>
                    alert('Erro ao inserir o empréstimo!');
                    window.location = 'efetuar-empretimo.php';
                </script>

                <?php
            }
        }

    
    }
}
?>