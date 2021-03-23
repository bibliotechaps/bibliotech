    <table class="table table-striped table-hover" style="width: 70% !important; margin: auto;">
        <tr>
            <td><b>ID</b></td>
            <td><b>Data Inicial</b></td>
            <td><b>Data Final</b></td>
            <td><b>Administrador</b></td>
            <td><b>Aluno</b></td>
            <td><b>Livro</b></td>
        </tr>
        <tr>
            <?php
            session_start();
            include_once('conexao.php');
            $pesquisa = $conn->real_escape_string($_POST['pesquisa']);

            $sql = "SELECT emprestimo.id, emprestimo.dataInicial, emprestimo.dataFinal, admin.nome, aluno.nome, livro.titulo
                FROM aluno 
                JOIN emprestimo ON emprestimo.aluno_id = aluno.id
                JOIN admin ON admin.id = emprestimo.admin_id
                JOIN livro ON livro.id = emprestimo.livro_id
                WHERE aluno.nome like '%$pesquisa%'
                OR livro.titulo like '%$pesquisa%'
                ORDER BY aluno.nome ASC";

            $result = mysqli_query($conn, $sql);
            $array = [];

            if (mysqli_num_rows($result) != 0) {
                while ($row = mysqli_fetch_array($result)) {
                    array_push($array, $row);

                    echo
                    '<tr></tr><td> ' . $row[0] . '</td>' .
                        '<td> ' . $row[1] . '</td>' .
                        '<td> ' . $row[2] . '</td>' .
                        '<td> ' . $row[3] . '</td>' .
                        '<td> ' . $row[4] . '</td>' .
                        '<td> ' . $row[5] . '</td></tr>';
                }
            }

            ?>
        </tr>
    </table>

    <br>
    <br>