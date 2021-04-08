<?php

    $tipo = $_GET["type"];

    $con = mysqli_connect('localhost' , 'root', '');
    $resultado = mysqli_select_db($con, 'web_cars_db');

    $sql = "select nome, foto, preco, potencia, combustivel, titulo, descricao, banner_principal" .
    " from pagina " .
    " join carro on pagina.id_pagina = carro.pagina_id_fk where carro.tipo = " . "'{$tipo}'";

    $registros = mysqli_query($con, $sql) or die(mysqli_error($con) . "<br>" . $sql);

    $linhas = mysqli_num_rows($registros);

    $cont = 0;

    while($cont < $linhas){
        $dados = mysqli_fetch_array($registros) ;

        $tituloPagina = $dados['titulo'];
        $DescricaoPagina = $dados['descricao'];
        $banner = $dados['banner_principal'];

        // $nome = $dados['nome'];
        // $pathFoto = $dados['foto'];
        // $preco = $dados['preco'];
        // $potencia = $dados['potencia'];
        // $combustivel = $dados['combustivel'];

        $cont++;
        
    }
        
    
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Web Cars&reg; | Sedan</title>
    <link rel="stylesheet" href="../css/carro.css">
</head>

<body>

    <header>
        <div class="cabecalho conteiner-flex">

            <div>
                <a href="../index.html">
                    <img src="../img/logotipo.jpg" alt="logotipo web cars" title="logotipo web cars" width="120px">
                </a>
                
            </div>

            <nav>
                <ul class="menu-button">
                    <li><a href="/descricao.php?type=sedan">Sedan</a> </li>
                    <li><a href="./descricao.php?type=hatch">Hatchback</a> </li>
                    <li> <a href="./descricao.php?type=suv">SUV</a></li>
                    <li> <a href="./descricao.php?type=pickup">Pickup</a></li>
                </ul>
            </nav>
            
        </div>

    </header>
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
                alt="Sedan" width="500px">
            </div>
        </div>

        <h1>Abaixo listamos os principais sedans no mercado</h1>

        <div class="slider conteiner-flex">


            <?php
                $cont = 0;

                $registros = mysqli_query($con, $sql) or die(mysqli_error($con) . "<br>" . $sql);

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


    <footer>
        <div class="rodape conteiner-flex">
            <div>
                <ul class="lista-rodape">
                    <li><h2>Fontes</h2></li>
                    <li>Imagens: <a href="https://pixabay.com/pt/">Pixabay</a> </li>
                </ul>
            </div>

            <div>
                <ul class="lista-rodape">
                    <li><h2>Repositório do projeto</h2></li>
                    <li> 
                        <a href="https://github.com/Fabiano-art/site_webcars">
                            https://github.com/Fabiano-art/site_webcars
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <ul class="lista-rodape">
                    <li><h2>Desenvolvedor: Fabiano Guimarães</h2></li>
                    <li> <a href="mailto:fabio.dub@outlook.com">Enviar email</a></li>
                    <li> <a href="https://github.com/Fabiano-art">Acesse Github</a></li>
                    <li> <a href="https://www.linkedin.com/in/fabiano-guimar%C3%A3es-3902a7202/">Acesse Linkedin</a> </li>
                </ul>
            </div>

        </div>
    </footer>

</body>

<script type="text/javascript" src="../js/cabecalhoRetratil.js"></script>

</html>