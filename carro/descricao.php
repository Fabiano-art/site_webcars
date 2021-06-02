<?php

    $tipo = $_GET["type"];

    $con = mysqli_connect('sql205.epizy.com' , 'epiz_28294967', 'smdzbudccFatuAc');
    $resultado = mysqli_select_db($con, 'epiz_28294967_web_cars_db');

    $sql = "select titulo, descricao, banner_principal from pagina where titulo = '$tipo'";

    $registros = mysqli_query($con, $sql) or die(mysqli_error($con) . "<br>" . $sql);

    $linhas = mysqli_num_rows($registros);

    $cont = 0;

    while($cont < $linhas){
        $dados = mysqli_fetch_array($registros) ;

        $tituloPagina = $dados['titulo'];
        $DescricaoPagina = $dados['descricao'];
        $banner = $dados['banner_principal'];

        $cont++;
    }
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Web Cars&reg; | <?php echo $tituloPagina; ?></title>
    <link rel="stylesheet" href="../css/carro.css">
    <link rel="sortcut icon" href="../img/logotipo.jpg" type="image/jpg" />
</head>

<body>

    <?php
        require('../componentes/header.html');
    ?>

    <div style="height: 100px">
        
    </div>

    <section>
        <div class="intro conteiner-flex">
            <div class="div-interno">
                <h1>Os <?php echo $tituloPagina?>...</h1>
                <p>
                    <?php  
                        echo $DescricaoPagina;
                    ?>
                </p>
            </div>

            <div class="div-interno centralizado">
                <img src=<?php echo $banner; ?> 
                alt="Sedan" width="100%">
            </div>
        </div>

        <h1>Abaixo listamos os principais <?php echo $tituloPagina?> no mercado</h1>

        <div class="slider conteiner-flex">


            <?php
                $cont = 0;

                $sql = "select nome, foto, preco, potencia, combustivel from carro where tipo = '$tipo'";
                $registros = mysqli_query($con, $sql) or die(mysqli_error($con) . "<br>" . $sql);

                $linhas = mysqli_num_rows($registros);

                while($cont < $linhas){

                    $dados = mysqli_fetch_array($registros);

                    $nome = $dados['nome'];
                    $pathFoto = $dados['foto'];
                    $preco = $dados['preco'];
                    $potencia = $dados['potencia'];
                    $combustivel = $dados['combustivel'];

                    echo "<div class='card-carro'>";

                        echo "<h2> $nome </h2>";
                        echo "<img src='$pathFoto' width='100%'>";

                        echo "<table class='atributos-table'>";
                            echo "<tr>";
                                echo "<td>Preco: </td>";

                                echo "<td> $preco </td>";

                            echo"</tr>";
                            echo "<tr>";

                                echo "<td>Potência: </td>";

                                echo "<td> $potencia </td>";
                                
                            echo "</tr>";
                            echo "<tr>";

                                echo "<td>Combustível: </td>";

                                echo "<td> $combustivel </td>";

                            echo "</tr>";
                        echo "</table>";

                    echo "</div>";
                    $cont++;
                }
                
            ?>
            
        </div>

        </section>


    <?php

        require('../componentes/footer.html');

    ?>

</body>

<script type="text/javascript" src="../js/cabecalhoRetratil.js"></script>

</html>