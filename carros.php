<!doctype html>
<?php
include 'conexao.inc';
$sql = "select * from tb_carros;";
$res = mysqli_query($con, $sql);
?>
<html>
    <head>
        <title>Carros</title>
        <meta charset="utf-8" />
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php
            include 'topo.php';
            ?>
        </header>

        <section id="main">
            <article>
                <div id="listaCarros">
                    <?php
                    /*$l = 5;
                    $c = 5;

                    echo '<table border="1">';
                    $il = 1;
                    echo '<thead>';
                    echo '<tr>';
                    echo '<td>A</td>';
                    echo '<td>B</td>';
                    echo '<td>C</td>';
                    echo '<td>D</td>';
                    echo '<td>E</td>';
                    echo'</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    while ($il <= $l) {
                        echo'<tr>';
                        $ic = 1;
                        while ($ic <= $c) {
                            echo'<td>' . $ic . '</td>';
                            $ic++;
                        }
                        echo'</tr>';
                        $il++;
                    }
                    echo '</tbody>';
                    echo '</table>';*/
                    ?>

                    <?php
                    echo '<table border="1">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>#</th>';
                    echo '<th>ID carro</th>';
                    echo '<th>Marca</th>';
                    echo '<th>Modelo</th>';
                    echo '<th>Versão</th>';
                    echo '<th>Ano Fabricação</th>';
                    echo '<th>Ano Modelo</th>';
                    echo '<th>OBS</th>';
                    echo '<th>Valor</th>';
                    echo '<th>Foto 1</th>';
                    echo '<th>Foto 2</th>';
                    echo '<th>Foto 3</th>';
                    echo '<th>Foto 4</th>';
                    echo '<th>Foto 5</th>';
                    echo '<th>Opção 1:</th>';
                    echo '<th>Opção 2:</th>';
                    echo '<th>Opção 3</th>';
                    echo '<th>Vendido</th>';
                    echo '<th>Bloqueado</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';
                    $il=1;
                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<th scope="row"> '.$il.' </th>';
                        echo '<td>' . $row['id_carro'] . '&nbsp;</td>';
                        echo '<td>' . $row['id_marca'] . '&nbsp;</td>';
                        echo '<td>' . $row['id_modelo'] . '&nbsp;</td>';
                        echo '<td>' . $row['versao'] . '&nbsp;</td>';
                        echo '<td>' . $row['anofabricacao'] . '&nbsp;</td>';
                        echo '<td>' . $row['anomodelo'] . '&nbsp;</td>';
                        echo '<td>' . $row['obs'] . '&nbsp;</td>';
                        echo '<td>' . "R$ " . number_format($row['valor'], 2, ',', '.') . '&nbsp;</td>';
                        echo '<td>' . $row['foto1'] . '&nbsp;</td>';
                        echo '<td>' . $row['foto2'] . '&nbsp;</td>';
                        echo '<td>' . $row['foto3'] . '&nbsp;</td>';
                        echo '<td>' . $row['foto4'] . '&nbsp;</td>';
                        echo '<td>' . $row['foto5'] . '&nbsp;</td>';
                        echo '<td>' . $row['opc1'] . '&nbsp;</td>';
                        echo '<td>' . $row['opc2'] . '&nbsp;</td>';
                        echo '<td>' .$row['opc3'] . '&nbsp;</td>';
                        echo '<td>' . $row['vendido'] . '&nbsp;</td>';
                        echo '<td>' . $row['bloqueado'] . '&nbsp;</td>';
                        echo '</tr>';
                        $il++;
                    }

                    echo '<tbody>';
                    echo '</table>';
                    ?>
                </div>
            </article>
        </section>

        <footer>
            <?php
            include 'rodape.html';
            ?>
        </footer>

    </body>
</html>

<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

