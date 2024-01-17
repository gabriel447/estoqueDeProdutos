        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['categoria']; ?></td>
            <td><?php echo $row['marca']; ?></td>
            <td><?php echo $row['modelo']; ?></td>
            <td><?php echo $row['serial']; ?></td>
            <td><?php echo $row['ean']; ?></td>
            <td style="border: 0;">
                <form method="get" action="item.php">
                    <button type="submit" value="<?php echo $row['serial']; ?>" name="deletar" style="border:0;">
                        <img style="width: 30px;" src="../img/excluir.png">
                    </button>
                </form>
            </td>
        </tr>
        <?php

        include '../conexao.php';

        if (isset($_GET['deletar'])) {
            $result = $_GET['deletar'];
            $categoria = $row['categoria'];

            $query = "DELETE FROM produtos WHERE serial = '$result'; ";
            $query .= "DELETE FROM checklist_notebook WHERE serie = '$result';";
            $query .= "DELETE FROM checklist_celular WHERE serie = '$result';";

            if (mysqli_multi_query($conexao, $query)) {
                header('location:consultar.php?deletado');
            } else {
                header('location:consultar.php?ndeletado');
            }
        }

        ?>

        <link href="../css/style.css" rel="stylesheet">