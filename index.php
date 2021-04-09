<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Web Cars&reg; | página inicial</title>

    <link rel="stylesheet" href="css/home.css">
    <link rel="sortcut icon" href="./img/logotipo.jpg" type="image/jpg" />

</head>
<body>
    
    <?php

        require_once('./componentes/header.html');

    ?>

    <div class="banner">
        <img src="img/carroPrincipal2.jpg" alt="Banner carro" title="Banner carro" width="100%">
    </div>

    <div class="apresentacao">

        <div class="interno">
            <h1>Maior comodidade</h1>
            <p class="apresentacao-paragrafo">
                Na Web Cars&reg;, damos uma visão geral de cada tipo de carro para que você acerte na escolha
            </p>
        </div>

    </div>

    <section>
        <div class="apresentacao-carro">
                <h2>Sedans</h2>

                <img src="https://cdn.pixabay.com/photo/2016/11/03/21/44/car-1796389_960_720.jpg" alt="carro sedan" title="carro sedan"
                width="100%">

                <p>
                    Conhecidos por serem carros longos e design moderno.
                    Os sedans (berlina, tursimo ou carro de três volumes) 
                </p>
                
                <a href="http://fabiano-developer.infinityfreeapp.com/carro/descricao.php?type=sedan">
                    <button class="botao-veja-mais">Veja mais detalhes</button>
                </a>

        </div>

        <div class="apresentacao-carro">
            <h2>Hatchbacks</h2>

                <img src="img/hatchback.jpg" alt="carro hatchback" title="carro hatchback"
                width="100%">

                <p>
                    Traseira recolhida, design esportivo, muito atraido pelos jovens.
                    Conheça os Hatchbacks 
                </p>
                
                <a href="http://fabiano-developer.infinityfreeapp.com/carro/descricao.php?type=hatch">
                    <button class="botao-veja-mais">Veja mais detalhes</button>
                </a>
        </div>

        <div class="apresentacao-carro">
            <h2>SUV</h2>

                <img src="img/suv.jpg" alt="carro SUV" title="carro SUV"
                width="100%">

                <p>
                    Veículo utilitário esportivo ou somente SUV, combina o força de um off-road com 
                    design sofisticado e muito estilo
                </p>
                
                <a href="http://fabiano-developer.infinityfreeapp.com/carro/descricao.php?type=suv">
                    <button class="botao-veja-mais">Veja mais detalhes</button>
                </a>
        </div>

        <div class="apresentacao-carro">
            <h2>Picape</h2>

                <img src="img/pickup.jpg" alt="carro pick up" title="carro pick up"
                width="100%">

                <p>
                    Muita força, traça 4x4. Perfeitos para transporte de cargas.
                    Conheça toda a versalidade das pickups
                </p>
                
                <a href="http://fabiano-developer.infinityfreeapp.com/carro/descricao.php?type=pickup">
                    <button class="botao-veja-mais">Veja mais detalhes</button>
                </a>
        </div>
    </section>

    <?php
        require('./componentes/footer.html');
    ?>

</body>

<script type="text/javascript" src="js/cabecalhoRetratil.js"></script>

</html>