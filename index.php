<!--
@author Daniel Ubaldo Antônio <danielubaldovrb@gmail.com>
Created at: 27/12/2020 17:36
-->
<?php

$imgExt = (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') == true) ? "webp" : "png";

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, follow">
    <meta name="googlebot" content="noindex, follow">
    <title>Resident Evil Revelations 2 - Caixas, Desenhos, Dicas, Emblemas e Larvas</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="assets/css/style-prefixed.min.css">
    <script src="assets/js/top-scripts.min.js"></script>
</head>
<body>
<header>
    <h1>Resident Evil<br>Revelations 2</h1>
    <figure class="responsive-image">
        <img alt="Resident Evil Revelations 2" height="101" src="assets/img/rere2.<?= $imgExt; ?>" width="504">
        <figcaption>Resident Evil Revelations 2</figcaption>
    </figure>
    <ul>
        <li>Caixas</li>
        <li>Desenhos</li>
        <li>Dicas</li>
        <li>Emblemas</li>
        <li>Larvas</li>
    </ul>
</header>
<section id="indice">
    <h1>Índice</h1>
    <ol type="1">
        <li><a href="#caixas-de-utensilio">Caixas de Utensílio e Caixas Militares</a></li>
        <li><a href="#desenhos-de-kafka">Desenhos de Kafka</a></li>
        <li><a href="#dicas">Dicas</a></li>
        <ol type="a">
            <li><a href="#finais-diferentes">Finais Diferentes</a></li>
            <li><a href="#dificultade-extra">Dificuldade Extra</a></li>
            <li><a href="#municao-infinita">Munição Infinita</a></li>
            <li><a href="#roupas-extras">Roupas Extras</a></li>
            <li><a href="#armas-especiais">Armas Especiais</a></li>
            <li><a href="#filtros">Filtros</a></li>
        </ol>
        <li><a href="#emblemas">Emblemas de Torre</a></li>
        <li><a href="#larvas">Larvas de Inseto</a></li>
        <li><a href="#episodio-1">Episódio 1 - Colônia Penal</a></li>
        <ol type="a" id="ind-epi-1">
            <li><a href="#episodio-1-desenho-01">Desenho 1</a></li>
            <li><a href="#episodio-1-emblema-01">Emblema 1</a></li>
            <li><a href="#episodio-1-desenho-02">Desenho 2</a></li>
            <li><a href="#episodio-1-emblema-02">Emblema 2</a></li>
            <li><a href="#episodio-1-caixa-militar-01">Caixa Militar 1</a></li>
            <li><a href="#episodio-1-emblema-03">Emblema 3</a></li>
            <li><a href="#episodio-1-desenho-03">Desenho 3</a></li>
            <li><a href="#episodio-1-caixa-militar-02">Caixa Militar 2</a></li>
            <li><a href="#episodio-1-desenho-04">Desenho 4</a></li>
            <li><a href="#episodio-1-desenho-05">Desenho 5</a></li>
            <li><a href="#episodio-1-caixa-militar-03">Caixa Militar 3</a></li>
            <li><a href="#episodio-1-emblema-04">Emblema 4</a></li>
            <li><a href="#episodio-1-desenho-06">Desenho 6</a></li>
            <li><a href="#episodio-1-emblema-05">Emblema 5</a></li>
            <li><a href="#episodio-1-emblema-06">Emblema 6</a></li>
            <li><a href="#episodio-1-larva-01">Larva 1</a></li>
            <li><a href="#episodio-1-caixa-de-utensilio-01">Caixa de Utensílio 1</a></li>
            <li><a href="#episodio-1-larva-02">Larva 2</a></li>
            <li><a href="#episodio-1-larva-03">Larva 3</a></li>
            <li><a href="#episodio-1-larva-04">Larva 4</a></li>
            <li><a href="#episodio-1-emblema-07">Emblema 7</a></li>
            <li><a href="#episodio-1-caixa-de-utensilio-02">Caixa de Utensílio 2</a></li>
            <li><a href="#episodio-1-larva-05">Larva 5</a></li>
            <li><a href="#episodio-1-emblema-08">Emblema 8</a></li>
            <li><a href="#episodio-1-larva-06">Larva 6</a></li>
        </ol>
        <li><a href="#episodio-2">Episódio 2 - Contemplação</a></li>
        <ol type="a" id="ind-epi-2">
            <li><a href="#episodio-2-desenho-01">Desenho 1</a></li>
            <li><a href="#episodio-2-emblema-01">Emblema 1</a></li>
            <li><a href="#episodio-2-desenho-02">Desenho 2</a></li>
            <li><a href="#episodio-2-caixa-militar-01">Caixa Militar 1</a></li>
            <li><a href="#episodio-2-caixa-militar-02">Caixa Militar 2</a></li>
            <li><a href="#episodio-2-caixa-militar-03">Caixa Militar 3</a></li>
            <li><a href="#episodio-2-caixa-militar-04">Caixa Militar 4</a></li>
            <li><a href="#episodio-2-emblema-02">Emblema 2</a></li>
            <li><a href="#episodio-2-desenho-03">Desenho 3</a></li>
            <li><a href="#episodio-2-emblema-03">Emblema 3</a></li>
            <li><a href="#episodio-2-desenho-04">Desenho 4</a></li>
            <li><a href="#episodio-2-caixa-militar-05">Caixa Militar 5</a></li>
            <li><a href="#episodio-2-caixa-militar-06">Caixa Militar 6</a></li>
            <li><a href="#episodio-2-desenho-05">Desenho 5</a></li>
            <li><a href="#episodio-2-emblema-04">Emblema 4</a></li>
            <li><a href="#episodio-2-emblema-05">Emblema 5</a></li>
            <li><a href="#episodio-2-desenho-06">Desenho 6</a></li>
            <li><a href="#episodio-2-larva-01">Larva 1</a></li>
            <li><a href="#episodio-2-emblema-06">Emblema 6</a></li>
            <li><a href="#episodio-2-caixa-de-utensilio-01">Caixa de Utensílio 1</a></li>
            <li><a href="#episodio-2-emblema-07">Emblema 7</a></li>
            <li><a href="#episodio-2-caixa-de-utensilio-02">Caixa de Utensílio 2</a></li>
            <li><a href="#episodio-2-caixa-de-utensilio-03">Caixa de Utensílio 3</a></li>
            <li><a href="#episodio-2-larva-02">Larva 2</a></li>
            <li><a href="#episodio-2-caixa-de-utensilio-04">Caixa de Utensílio 4</a></li>
            <li><a href="#episodio-2-larva-03">Larva 3</a></li>
            <li><a href="#episodio-2-larva-04">Larva 4</a></li>
            <li><a href="#episodio-2-caixa-de-utensilio-05">Caixa de Utensílio 5</a></li>
            <li><a href="#episodio-2-caixa-de-utensilio-06">Caixa de Utensílio 6</a></li>
            <li><a href="#episodio-2-larva-05">Larva 5</a></li>
            <li><a href="#episodio-2-caixa-de-utensilio-07">Caixa de Utensílio 7</a></li>
            <li><a href="#episodio-2-caixa-de-utensilio-08">Caixa de Utensílio 8</a></li>
            <li><a href="#episodio-2-emblema-08">Emblema 8</a></li>
            <li><a href="#episodio-2-emblema-09">Emblema 9</a></li>
            <li><a href="#episodio-2-caixa-de-utensilio-09">Caixa de Utensílio 9</a></li>
            <li><a href="#episodio-2-larva-06">Larva 6</a></li>
        </ol>
        <li><a href="#episodio-3">Episódio 3 - Julgamento</a></li>
        <ol type="a" id="ind-epi-3">
            <li><a href="#episodio-3-desenho-01">Desenho 1</a></li>
            <li><a href="#episodio-3-emblema-01">Emblema 1</a></li>
            <li><a href="#episodio-3-caixa-militar-01">Caixa Militar 1</a></li>
            <li><a href="#episodio-3-emblema-02">Emblema 2</a></li>
            <li><a href="#episodio-3-desenho-02">Desenho 2</a></li>
            <li><a href="#episodio-3-caixa-militar-02">Caixa Militar 2</a></li>
            <li><a href="#episodio-3-desenho-03">Desenho 3</a></li>
            <li><a href="#episodio-3-caixa-militar-03">Caixa Militar 3</a></li>
            <li><a href="#episodio-3-emblema-03">Emblema 3</a></li>
            <li><a href="#episodio-3-caixa-militar-04">Caixa Militar 4</a></li>
            <li><a href="#episodio-3-caixa-militar-05">Caixa Militar 5</a></li>
            <li><a href="#episodio-3-emblema-04">Emblema 4</a></li>
            <li><a href="#episodio-3-caixa-militar-06">Caixa Militar 6</a></li>
            <li><a href="#episodio-3-desenho-04">Desenho 4</a></li>
            <li><a href="#episodio-3-emblema-05">Emblema 5</a></li>
            <li><a href="#episodio-3-caixa-militar-07">Caixa Militar 7</a></li>
            <li><a href="#episodio-3-desenho-05">Desenho 5</a></li>
            <li><a href="#episodio-3-caixa-militar-08">Caixa Militar 8</a></li>
            <li><a href="#episodio-3-emblema-06">Emblema 6</a></li>
            <li><a href="#episodio-3-emblema-07">Emblema 7</a></li>
            <li><a href="#episodio-3-desenho-06">Desenho 6</a></li>
            <li><a href="#episodio-3-larva-01">Larva 1</a></li>
            <li><a href="#episodio-3-caixa-de-utensilio-01">Caixa de Utensílio 1</a></li>
            <li><a href="#episodio-3-emblema-08">Emblema 8</a></li>
            <li><a href="#episodio-3-larva-02">Larva 2</a></li>
            <li><a href="#episodio-3-larva-03">Larva 3</a></li>
            <li><a href="#episodio-3-emblema-09">Emblema 9</a></li>
            <li><a href="#episodio-3-caixa-de-utensilio-02">Caixa de Utensílio 2</a></li>
            <li><a href="#episodio-3-caixa-de-utensilio-03">Caixa de Utensílio 3</a></li>
            <li><a href="#episodio-3-caixa-de-utensilio-04">Caixa de Utensílio 4</a></li>
            <li><a href="#episodio-3-larva-04">Larva 4</a></li>
            <li><a href="#episodio-3-emblema-10">Emblema 10</a></li>
            <li><a href="#episodio-3-larva-05">Larva 5</a></li>
            <li><a href="#episodio-3-caixa-de-utensilio-05">Caixa de Utensílio 5</a></li>
            <li><a href="#episodio-3-emblema-11">Emblema 11</a></li>
            <li><a href="#episodio-3-larva-06">Larva 6</a></li>
        </ol>
        <li><a href="#episodio-4">Episódio 4 - Metamorfose</a></li>
        <ol type="a" id="ind-epi-4">
            <li><a href="#episodio-4-desenho-01">Desenho 1</a></li>
            <li><a href="#episodio-4-desenho-02">Desenho 2</a></li>
            <li><a href="#episodio-4-desenho-03">Desenho 3</a></li>
            <li><a href="#episodio-4-emblema-01">Emblema 1</a></li>
            <li><a href="#episodio-4-desenho-04">Desenho 4</a></li>
            <li><a href="#episodio-4-caixa-militar-01">Caixa Militar 1</a></li>
            <li><a href="#episodio-4-desenho-05">Desenho 5</a></li>
            <li><a href="#episodio-4-emblema-02">Emblema 2</a></li>
            <li><a href="#episodio-4-caixa-militar-02">Caixa Militar 2</a></li>
            <li><a href="#episodio-4-desenho-06">Desenho 6</a></li>
            <li><a href="#episodio-4-emblema-03">Emblema 3</a></li>
            <li><a href="#episodio-4-emblema-04">Emblema 4</a></li>
            <li><a href="#episodio-4-larva-01-ou-larva-06">Larva 1 (ou Larva 6)</a></li>
            <li><a href="#episodio-4-larva-06-ou-larva-01">Larva 6 (ou Larva 1)</a></li>
            <li><a href="#episodio-4-caixa-de-utensilio-01-ou-caixa-de-utensilio-05">Caixa de Utensílio 1 (ou Caixa de
                    Utensílio 5)</a></li>
            <li><a href="#episodio-4-caixa-de-utensilio-05-ou-caixa-de-utensilio-01">Caixa de Utensílio 5 (ou Caixa de
                    Utensílio 1)</a></li>
            <li><a href="#episodio-4-emblema-05">Emblema 5</a></li>
            <li><a href="#episodio-4-larva-02">Larva 2</a></li>
            <li><a href="#episodio-4-emblema-06">Emblema 6</a></li>
            <li><a href="#episodio-4-caixa-de-utensilio-02">Caixa de Utensílio 2</a></li>
            <li><a href="#episodio-4-larva-03">Larva 3</a></li>
            <li><a href="#episodio-4-emblema-07">Emblema 7</a></li>
            <li><a href="#episodio-4-emblema-08">Emblema 8</a></li>
            <li><a href="#episodio-4-larva-04">Larva 4</a></li>
            <li><a href="#episodio-4-caixa-de-utensilio-03">Caixa de Utensílio 3</a></li>
            <li><a href="#episodio-4-caixa-de-utensilio-04">Caixa de Utensílio 4</a></li>
            <li><a href="#episodio-4-emblema-09">Emblema 9</a></li>
            <li><a href="#episodio-4-larva-05">Larva 5</a></li>
            <li><a href="#episodio-4-emblema-10">Emblema 10</a></li>
        </ol>
        <li><a href="#modo-de-raide">Modo de raide</a></li>
        <ol type="a" id="ind-modo-de-raide">
            <li><a href="#i">Estágio I</a></li>
            <ol type="a" id="ind-i">
                <li><a href="#i-01">I - 01</a></li>
                <li><a href="#i-02">I - 02</a></li>
                <li><a href="#i-03">I - 03</a></li>
                <li><a href="#i-04">I - 04</a></li>
                <li><a href="#i-05">I - 05</a></li>
                <li><a href="#i-06">I - 06</a></li>
            </ol>
            <li><a href="#ii">Estágio II</a></li>
            <ol type="a" id="ind-ii">
                <li><a href="#ii-01">II - 01</a></li>
                <li><a href="#ii-02">II - 02</a></li>
                <li><a href="#ii-03">II - 03</a></li>
                <li><a href="#ii-04">II - 04</a></li>
                <li><a href="#ii-05">II - 05</a></li>
                <li><a href="#ii-06">II - 06</a></li>
            </ol>
            <li><a href="#iii">Estágio III</a></li>
            <ol type="a" id="ind-iii">
                <li><a href="#iii-01">III - 01</a></li>
                <li><a href="#iii-02">III - 02</a></li>
                <li><a href="#iii-03">III - 03</a></li>
                <li><a href="#iii-04">III - 04</a></li>
                <li><a href="#iii-05">III - 05</a></li>
                <li><a href="#iii-06">III - 06</a></li>
            </ol>
            <li><a href="#iv">Estágio IV</a></li>
            <ol type="a" id="ind-iv">
                <li><a href="#iv-01">IV - 01</a></li>
                <li><a href="#iv-02">IV - 02</a></li>
                <li><a href="#iv-03">IV - 03</a></li>
                <li><a href="#iv-04">IV - 04</a></li>
                <li><a href="#iv-05">IV - 05</a></li>
                <li><a href="#iv-06">IV - 06</a></li>
            </ol>
            <li><a href="#v">Estágio V</a></li>
            <ol type="a" id="ind-v">
                <li><a href="#v-01">V - 01</a></li>
                <li><a href="#v-02">V - 02</a></li>
                <li><a href="#v-03">V - 03</a></li>
                <li><a href="#v-04">V - 04</a></li>
                <li><a href="#v-05">V - 05</a></li>
                <li><a href="#v-06">V - 06</a></li>
            </ol>
            <li><a href="#vi">Estágio VI</a></li>
            <ol type="a" id="ind-vi">
                <li><a href="#vi-01">VI - 01</a></li>
                <li><a href="#vi-02">VI - 02</a></li>
                <li><a href="#vi-03">VI - 03</a></li>
                <li><a href="#vi-04">VI - 04</a></li>
                <li><a href="#vi-05">VI - 05</a></li>
                <li><a href="#vi-06">VI - 06</a></li>
            </ol>
            <li><a href="#vii">Estágio VII</a></li>
            <ol type="a" id="ind-vii">
                <li><a href="#vii-01">VII - 01</a></li>
                <li><a href="#vii-02">VII - 02</a></li>
                <li><a href="#vii-03">VII - 03</a></li>
                <li><a href="#vii-04">VII - 04</a></li>
                <li><a href="#vii-05">VII - 05</a></li>
                <li><a href="#vii-06">VII - 06</a></li>
            </ol>
            <li><a href="#viii">Estágio VIII</a></li>
            <ol type="a" id="ind-viii">
                <li><a href="#viii-01">VIII - 01</a></li>
                <li><a href="#viii-02">VIII - 02</a></li>
                <li><a href="#viii-03">VIII - 03</a></li>
                <li><a href="#viii-04">VIII - 04</a></li>
                <li><a href="#viii-05">VIII - 05</a></li>
                <li><a href="#viii-06">VIII - 06</a></li>
            </ol>
            <li><a href="#omega">Estágio Ω</a></li>
            <ol type="a" id="ind-omega">
                <li><a href="#omega-01">Ω - 01</a></li>
            </ol>
            <li><a href="#ix">Estágio IX</a></li>
            <ol type="a" id="ind-ix">
                <li><a href="#ix-01">IX - 01</a></li>
                <li><a href="#ix-02">IX - 02</a></li>
                <li><a href="#ix-03">IX - 03</a></li>
                <li><a href="#ix-04">IX - 04</a></li>
            </ol>
        </ol>
        <li><a href="#referencias">Referências</a></li>
        <ol type="a" id="ind-referencias">
            <li><a href="#revil">Resident Evil Revelations 2</a></li>
            <li><a href="#ign">Resident Evil Revelations 2 Wiki Guide</a></li>
        </ol>
    </ol>
</section>
<article id="content">

    <h1 id="caixas-de-utensilio">Caixas de Utensílio e Caixas Militares</h1>
    <div class="block">
        <p>Em Resident Evil Revelations 2, o jogador encontrará diversas caixas trancadas que contém muitos itens úteis.
            Existem dois tipos de caixas – as caixas militares (Military Boxes) e as caixas de utensílio (Gimmick
            Boxes).</p>
        <p>Neste guia, vamos revelar todas as localizações das Gimmick Boxes, que podem ser abertas apenas por Natalia
            no cenário de Barry, pelo fato de sua mão ser pequena, e das Military Boxes que podem ser abertas apenas com
            Moira e seu pé de cabra (Crowbar). Além das localizações, serão listadas quais as premiações conquistadas em
            cada episódio.</p>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h1 id="desenhos-de-kafka">Desenhos de Kafka</h1>
    <div class="block">
        <p>A misteriosa Supervisora é obcecada pelas obras de Franz Kafka, cujos temas são parte integral da história de
            Resident Evil Revelations 2. Com Moira Burton, o jogador deve usar a lanterna para iluminar as paredes e
            encontrar desenhos misteriosos que remetem às obras de Kafka. Ao encontrar todos os desenhos do capítulo,
            você libera um arquivo secreto na galeria</p>
        <p><strong>IMPORTANTE:</strong> é necessário focar a lanterna no desenho ou não confirma como coletado!</p>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h1 id="dicas">Dicas</h1>
    <div class="block">
        <h2 id="finais-diferentes">Finais Diferentes</h2>
        <p>Resident Evil Revelations 2 apresenta dois finais diferentes. O final é definido por uma decisão tomada
            durante o Episódio 3 – Julgamento.</p>
        <p><strong>Final Bom (Good Ending):</strong> Espere o comando “trocar personagem” aparecer na tela e troque de
            Claire para Moira. Faça o Quick Time Event (QTE) para que Moira mate Neil Monstro.</p>
        <p><strong>Final Ruim (Bad Ending):</strong> Faça a QTE para matar Neil Monstro com Claire.</p>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="dificultade-extra">Dificuldade Extra</h2>
        <p>Para desbloquear a dificuldade “No Escape”, termine o jogo na dificuldade “Sobrevivente”.</p>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="municao-infinita">Munição Infinita</h2>
        <p>Termine o jogo na dificuldade “No Escape”, após isso você poderá comprar a munição infinita para todas as
            armas através da galeria.</p>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="roupas-extras">Roupas Extras</h2>
        <p>As roupas extras podem ser obtidas ao se cumprirem alguns objetivos na campanha e podem ser compradas através
            da galeria.</p>
        <p><strong>Roupas clássicas (Claire RE2 e Barry S.T.A.R.S):</strong> termine o jogo pela primeira vez.</p>
        <p><strong>Claire “Sniper”:</strong> faça o final bom.</p>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="armas-especiais">Armas Especiais</h2>
        <p>As armas especiais podem ser obtidas ao se cumprirem alguns objetivos na campanha e podem ser compradas
            através da galeria. Ao usar uma arma especial durante a campanha, seu rank é reduzido para C.</p>
        <ul type="square">
            <li><strong>Chicago Typewriter:</strong> termine o jogo na dificuldade “casual” ou superior.</li>
            <li><strong>Besta:</strong> termine o jogo na dificuldade “normal” ou superior.</li>
            <li><strong>Furadeira:</strong> termine o jogo na dificuldade “sobrevivente” ou superior.</li>
            <li><strong>Arma de bolhas:</strong> termine todas os episódios no modo “contagem regressiva”.</li>
            <li><strong>Katana:</strong> termine todos os episódios no modo “invisível”.</li>
            <li><strong>Espada curta:</strong> termine o jogo na dificuldade “normal” com rank S em todos os episódios.
            </li>
            <li><strong>Rocket Launcher infinita:</strong> termine o jogo em menos de três horas.</li>
        </ul>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="filtros">Filtros</h2>
        <p>Os filtros de vídeo podem ser obtidos ao se cumprirem alguns objetivos na campanha e podem ser comprados
            através da galeria.</p>
        <ul type="square">
            <li><strong>Classic horror:</strong> termine o jogo na dificuldade “Normal” ou superior.</li>
            <li><strong>Sepia:</strong> termine o jogo na dificuldade “normal” ou superior com rank S em todos os
                episódios.
            </li>
            <li><strong>Comic Noir:</strong> termine o jogo na dificuldade “Sobrevivente” superior com rank S em todos
                os episódios.
            </li>
            <li><strong>Cursed Video:</strong> termine o jogo na dificuldade “No Escape” ou superior com rank S em todos
                os episódios
            </li>
            <li><strong>Black and White:</strong> termine o jogo em todas as dificuldades com rank S em todos os
                episódios.
            </li>
        </ul>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h1 id="emblemas">Emblemas de Torre</h1>
    <div class="block">
        <p>Resident Evil Revelations 2 possui uma série de Emblemas de Torre escondidos em vários pontos dos cenários de
            Claire e Barry. Ao encontrar todos os emblemas de um capítulo, você desbloqueia um dos recordes e tem acesso
            a um arquivo secreto na galeria.</p>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h1 id="larvas">Larvas de Inseto</h1>
    <div class="block">
        <p>Resident Evil Revelations 2 possui uma série de colecionáveis, incluindo as Larvas de Inseto. Elas só podem
            ser enxergadas e coletadas por Natalia Korda, e aparecem como uma “aura” vermelha que parece perseguir a
            personagem em alguns locais por onde a personagem passa. Para coletá-las, você deve atacar essas “auras” com
            um tijolo. Ao encontrar todas as larvas, você desbloqueia um arquivo secreto na galeria.</p>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h1 id="episodio-1">Episódio 1 - Colônia Penal</h1>

    <div class="block">
        <h2 id="episodio-1-desenho-01">Desenho 1</h2>
        <p>No centro de detenção, após pegar a chave do bloco de experimentos, a Supervisora vai soltar um grupo de
            Aflitos (Afflicteds) quando você decidir voltar pela escada. Nessa área, onde você controla Moira pela
            primeira vez. Vá
            para dentro da sala de onde sai um Aflito (Afflicted) (próxima a escada de fuga) e ilumine a parede. Cuidado
            com os
            três Aflitos (Afflicteds)sque chegam depois para não morrer.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Desenho 1.1" height="563" loading="lazy" src="assets/img/ep01des01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Desenho 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Desenho 1.2" height="563" loading="lazy" src="assets/img/ep01des01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Desenho 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-emblema-01">Emblema 1</h2>
        <p>No centro de detenção, antes de pegar a chave no corpo pendurado, observe o emblema em uma plataforma ao
            fundo. Você também pode
            pegá-lo quando passar por aí novamente.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 1.1" height="563" loading="lazy" src="assets/img/ep01emb01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 1.2" height="563" loading="lazy" src="assets/img/ep01emb01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-desenho-02">Desenho 2</h2>
        <p>No centro de detenção, na sala onde Moira obtém o pé de cabra, ilumine a parede próxima da saída para o
            centro de detenção.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Desenho 2" height="563" loading="lazy" src="assets/img/ep01des02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Desenho 2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-emblema-02">Emblema 2</h2>
        <p>No centro de detenção, antes do portão onde você usa a engrenagem dourada para fugir, aponte para o teto. O
            emblema está no centro.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 2.1" height="563" loading="lazy" src="assets/img/ep01emb02.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 2.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 2.2" height="563" loading="lazy" src="assets/img/ep01emb02.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 2.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-caixa-militar-01">Caixa Militar 1</h2>
        <p>No centro de detenção, após chegar à sala de tortura com a engrenagem dourada,
            Claire dará um impulso para Moira chegar ao nível superior e poder destrancar a porta pela qual é possível
            descer uma escada. A caixa poderá ser encontrada no final do corredor à direita.</p>
        <p><strong>Item:</strong> Estojo de munição de pistola.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Caixa Militar 1.1" height="563" loading="lazy"
                 src="assets/img/ep01caimil01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Caixa Militar 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Caixa Militar 1.2" height="563" loading="lazy"
                 src="assets/img/ep01caimil01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Caixa Militar 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-emblema-03">Emblema 3</h2>
        <p>No centro de detenção, subindo na plataforma onde Claire dá um impulso em Moira, é possível ver um emblema em
            cima da máquina de tortura.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 3" height="563" loading="lazy" src="assets/img/ep01emb03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-desenho-03">Desenho 3</h2>
        <p>No centro de detenção, no segundo andar, há uma grande sala escura que leva a uma escada do outro lado. Essa
            sala tem um arquivo com um trecho de uma obra da Kafka e uma caixa militar. Aponte a lanterna para a grande
            parede ao longe.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Desenho 3" height="563" loading="lazy" src="assets/img/ep01des03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Desenho 3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-caixa-militar-02">Caixa Militar 2</h2>
        <p>No centro de detenção, no segundo andar, há um grande corredor que dá acesso a
            uma grande sala escura, do mesmo lado onde é possível também obter um desenho de Kafka, olhe em direção à
            direita inferior.</p>
        <p><strong>Item:</strong> Caixa de peças - Cadência de tiro nv. 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Caixa Militar 2" height="563" loading="lazy" src="assets/img/ep01caimil02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Caixa Militar 2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-desenho-04">Desenho 4</h2>
        <p>No centro de detenção, após ligar o gerador de energia com Moira, um Aflito (Afflicted) vai arrombar uma
            porta de
            metal anteriormente inacessível. Mate-o e vasculhe a sala de onde ele saiu. Ilumine a parede ao fundo para
            ver o desenho.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Desenho 4.1" height="563" loading="lazy" src="assets/img/ep01des04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Desenho 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Desenho 4.2" height="563" loading="lazy" src="assets/img/ep01des04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Desenho 4.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-desenho-05">Desenho 5</h2>
        <p>Fora do centro de detenção, logo que escapar, ilumine a parede acima do portão central na entrada.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Desenho 5" height="563" loading="lazy" src="assets/img/ep01des05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Desenho 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-caixa-militar-03">Caixa Militar 3</h2>
        <p>Fora do centro de detenção, após percorrer a mata até alcançar uma ponte de madeira, dirija-se à esquerda
            antes de passar pela ponte para ver a terceira caixa.</p>
        <p><strong>Item:</strong> Caixa de peças - Carregamento rápido nv. 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Caixa Militar 3" height="563" loading="lazy" src="assets/img/ep01caimil03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Caixa Militar 3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-emblema-04">Emblema 4</h2>
        <p>Fora do centro de detenção, siga em direção à porta trancada e observe o lado esquerdo da ponte de
            madeira.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 4" height="563" loading="lazy" src="assets/img/ep01emb04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 4</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-desenho-06">Desenho 6</h2>
        <p>Fora do centro de detenção, cruzando a ponte de madeira, dê meia volta e ilumine a parede dela do lado
            direito.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Desenho 6" height="563" loading="lazy" src="assets/img/ep01des06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Desenho 6</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-emblema-05">Emblema 5</h2>
        <p>Fora do centro de detenção, no topo das pedras, logo no começo da campanha de Barry, siga para a direta para
            encontrar um emblema entre as caixas ao final do corredor com o portão amarelo.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 5.1" height="563" loading="lazy" src="assets/img/ep01emb05.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 5.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 5.2" height="563" loading="lazy" src="assets/img/ep01emb05.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 5.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-emblema-06">Emblema 6</h2>
        <p>No centro de detenção, na sala em que Natalia avisa sobre o primeiro Pútrido (Rotten) (que pode ser atacado
            pelas
            costas), siga para a direita e encontre o emblema em uma estante perto da porta.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 6" height="563" loading="lazy" src="assets/img/ep01emb06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 6</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-larva-01">Larva 1</h2>
        <p>No centro de detenção, próximo à sala de tortura onde você obteve a engrenagem com Claire e Moira, saia e
            vire à esquerda. No sentido oposto à parede com a cadeira que tem um trecho de uma obra de Kafka. Você verá
            a larva na parede.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Larva 1.1" height="563" loading="lazy" src="assets/img/ep01lar01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Larva 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Larva 1.2" height="563" loading="lazy" src="assets/img/ep01lar01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Larva 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-caixa-de-utensilio-01">Caixa de Utensílio 1</h2>
        <p>No centro de detenção, dentro da sala de controle, no segundo andar do centro de detenção.</p>
        <p><strong>Item:</strong> Caixa de peças – Carregamento rápido nv. 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Caixa de Utensílio 1.1" height="563" loading="lazy"
                 src="assets/img/ep01caiute01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Caixa de Utensílio 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Caixa de Utensílio 1.2" height="563" loading="lazy"
                 src="assets/img/ep01caiute01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Caixa de Utensílio 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-larva-02">Larva 2</h2>
        <p>No centro de detenção, após abrir as celas, mate os Pútridos (Rottens), saia da sala de controle e dirija-se
            à segunda cela à esquerda. A larva está na parede à esquerda.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Larva 2" height="563" loading="lazy" src="assets/img/ep01lar02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Larva 2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-larva-03">Larva 3</h2>
        <p>No centro de detenção, logo após coletar a segunda larva, vá para a extrema direita, vá para a cela com o
            buraco no chão onde só Natalia pode passar. Desça e você verá a larva em uma parede ao alto logo que cair.
            Pegue um tijolo no final do corredor e atire mirando para cima para coletá-la.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Larva 3.1" height="563" loading="lazy" src="assets/img/ep01lar03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Larva 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Larva 3.2" height="563" loading="lazy" src="assets/img/ep01lar03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Larva 3.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Larva 3.3" height="563" loading="lazy" src="assets/img/ep01lar03.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Larva 3.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-larva-04">Larva 4</h2>
        <p>Na floresta, logo após Barry e Natalia decidirem pegar o caminho alternativo da ponte que a Claire e a
            Moira cruzaram antes. Com Natalia, suba até adentrar a mata densa e escura, para ver a larva no tronco de
            uma árvore.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Larva 4" height="563" loading="lazy" src="assets/img/ep01lar04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Larva 4</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-emblema-07">Emblema 7</h2>
        <p>Na floresta, na área com um poste, uma caixa de madeira e uma pilha de entulho, verifique a pilha pela parte
            de trás para encontrar um emblema.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 7.1" height="563" loading="lazy" src="assets/img/ep01emb07.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 7.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 7.2" height="563" loading="lazy" src="assets/img/ep01emb07.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 7.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-caixa-de-utensilio-02">Caixa de Utensílio 2</h2>
        <p>Na floresta, no meio da mata escura repleta de Aparições (Revenants), onde há um poste iluminando o meio da
            trilha.
            Próximo às pegadas da Natália, no meio da mata.</p>
        <p><strong>Item:</strong> Rubi.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Caixa de Utensílio 2.1" height="563" loading="lazy"
                 src="assets/img/ep01caiute02.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Caixa de Utensílio 2.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Caixa de Utensílio 2.2" height="563" loading="lazy"
                 src="assets/img/ep01caiute02.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Caixa de Utensílio 2.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Caixa de Utensílio 2.3" height="563" loading="lazy"
                 src="assets/img/ep01caiute02.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Caixa de Utensílio 2.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-larva-05">Larva 5</h2>
        <p>Na floresta, assim que sair da mata repleta de Aparições (Revenants), irá de encontro a um pequeno edifício.
            A larva está do lado de dentro, ao lado direito da janela.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Larva 5.1" height="563" loading="lazy" src="assets/img/ep01lar05.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Larva 5.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Larva 5.2" height="563" loading="lazy" src="assets/img/ep01lar05.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Larva 5.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-emblema-08">Emblema 8</h2>
        <p>Na floresta, na área com um guindaste e um portão grande trancado com muitas correntes, siga em direção à
            cabana do lado direito. Quase em frente à cabana, há uma pilha de madeira e três latões.</p>
        <p>Com Natalia, use um tijolo para acertar o emblema atrás dos galões. Ou, com o Barry, agache e atire através
            da fresta entre os troncos de madeira e o galão.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 8.1" height="563" loading="lazy" src="assets/img/ep01emb08.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 8.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 8.2" height="563" loading="lazy" src="assets/img/ep01emb08.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 8.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 8.3" height="563" loading="lazy" src="assets/img/ep01emb08.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 8.3</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 8.4" height="563" loading="lazy" src="assets/img/ep01emb08.04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 8.4</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 1 Emblema 8.5" height="563" loading="lazy" src="assets/img/ep01emb08.05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Emblema 8.5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-1-larva-06">Larva 6</h2>
        <p>Na floresta, esta é a mesma área onde encontrará o 8º e último emblema do episódio. Após entrar na cabana com
            duas Aparições (Revenants), do lado de fora há uma alavanca para acionar o guindaste. Antes de acionar, olhe
            na base dele, do lado direito, para ver a larva.</p>
        <figure class="responsive-image">
            <img alt="Ep. 1 Larva 6" height="563" loading="lazy" src="assets/img/ep01lar06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 1 Larva 6</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h1 id="episodio-2">Episódio 2 - Contemplação</h1>

    <div class="block">
        <h2 id="episodio-2-desenho-01">Desenho 1</h2>
        <p>No vilarejo de pesca, assim que sair do bar, ilumine a placa escrita Wossek.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Desenho 1" height="563" loading="lazy" src="assets/img/ep02des01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Desenho 1</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-emblema-01">Emblema 1</h2>
        <p>No vilarejo de pesca, saia do Wossek e vá aos fundos do bar. Você verá uma escada mas não suba por ela. Vá
            até o final e vire à direita para ver o emblema ao fundo. Este emblema pode ser obtido depois com Barry e
            Natalia.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 1" height="563" loading="lazy" src="assets/img/ep02emb01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 1</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-desenho-02">Desenho 2</h2>
        <p>No vilarejo de pesca, siga Gabriel Chavez até o helicóptero. Após a conversa, vá ao outro lado do helicóptero
            e ilumine a calda dele.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Desenho 2" height="563" loading="lazy" src="assets/img/ep02des02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Desenho 2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-militar-01">Caixa Militar 1</h2>
        <p>No vilarejo de pesca, acompanhe Gabriel Chavez até o helicóptero e veja a caixa atrás dele. Ela deve ser
            aberta antes da emboscada no vilarejo.</p>
        <p><strong>Item:</strong> Caixa de peças - Dano nv. 2.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa Militar 1" height="563" loading="lazy" src="assets/img/ep02caimil01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa Militar 1</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-militar-02">Caixa Militar 2</h2>
        <p>No vilarejo de pesca, depois de conversar com Gabriel Chavez e for em busca do combustível e da bateria, vá
            em direção à viela à esquerda do portão. A caixa está dentro da cabana vazia.
        </p>
        <p><strong>Item:</strong> Caixa de peças - Cadência de tiro nv. 2.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa Militar 2" height="563" loading="lazy" src="assets/img/ep02caimil02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa Militar 2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-militar-03">Caixa Militar 3</h2>
        <p>No vilarejo de pesca, dentro da casa onde você coleta a bateria para o helicóptero.</p>
        <p><strong>Item:</strong> Bolsa de expansão (Moira).</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa Militar 3.1" height="563" loading="lazy"
                 src="assets/img/ep02caimil03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa Militar 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa Militar 3.2" height="563" loading="lazy"
                 src="assets/img/ep02caimil03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa Militar 3.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-militar-04">Caixa Militar 4</h2>
        <p>No vilarejo de pesca, próximo do prédio onde você coleta o combustível para o helicóptero, continue em
            direção à sua direita (esqueda no mapa) até chegar a um beco sem saída.</p>
        <p><strong>Item:</strong> Caixa de peças - Capacidade nv. 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa Militar 4.1" height="563" loading="lazy"
                 src="assets/img/ep02caimil04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa Militar 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa Militar 4.2" height="563" loading="lazy"
                 src="assets/img/ep02caimil04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa Militar 4.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa Militar 4.3" height="563" loading="lazy"
                 src="assets/img/ep02caimil04.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa Militar 4.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-emblema-02">Emblema 2</h2>
        <p>No vilarejo de pesca, o emblema está localizado no topo da chaminé da casa oposta à primeira que Pedro
            Fernandez usa a furadeira (lado direito de sua perspectiva), onde você pega a Submetralhadora AB50. Este
            emblema pode ser obtido depois com Barry e Natalia.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 2.1" height="563" loading="lazy" src="assets/img/ep02emb02.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 2.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 2.2" height="563" loading="lazy" src="assets/img/ep02emb02.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 2.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-desenho-03">Desenho 3</h2>
        <p>Entre o vilarejo de pesca e a cidade, na passagem subterrânea, ilumine a parede atrás de dois barris
            quebráveis, em frente a escada da porta de saida.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Desenho 3" height="563" loading="lazy" src="assets/img/ep02des03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Desenho 3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-emblema-03">Emblema 3</h2>
        <p>Na cidade, logo que sair da passagem subterrânea, você verá o emblema em um prédio à esquerda, bem ao longe.
            Este emblema pode ser obtido depois com Barry e Natalia.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 3.1" height="563" loading="lazy" src="assets/img/ep02emb03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 3.2" height="563" loading="lazy" src="assets/img/ep02emb03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 3.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-desenho-04">Desenho 4</h2>
        <p>Na cidade, você verá uma rua com alguns Ortros (Orthrus), onde há um grande portão azul de metal. Ilumine o
            lado direito da porta dele na qual Moira deve usar o pé de cabra para abrir.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Desenho 4" height="563" loading="lazy" src="assets/img/ep02des04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Desenho 4</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-militar-05">Caixa Militar 5</h2>
        <p>Na cidade, após se separar de Neil, no segundo andar do restaurante, antes de descer as escadas.</p>
        <p><strong>Item:</strong> Caixa de peças – Dispersão nv. 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa Militar 5" height="563" loading="lazy" src="assets/img/ep02caimil05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa Militar 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-militar-06">Caixa Militar 6</h2>
        <p>Na cidade, no canto da sala onde você enfrenta o primeiro Detonador (Sploder).</p>
        <p><strong>Item:</strong> Estojo de munição de espingarda.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa Militar 6" height="563" loading="lazy" src="assets/img/ep02caimil06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa Militar 6</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-desenho-05">Desenho 5</h2>
        <p>Na cidade, na sala onde encontra o segundo Detonador (Sploder), na parede à direita.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Desenho 5" height="563" loading="lazy" src="assets/img/ep02des05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Desenho 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-emblema-04">Emblema 4</h2>
        <p>Na cidade, depois do cenário do portão eletrônico que fecha automaticamente após certo tempo. Saia do prédio,
            passe a pequena ponte, desça as escadas e verifique debaixo delas, atrás das grades. Este emblema pode ser
            obtido depois com Barry e Natalia.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 4" height="563" loading="lazy" src="assets/img/ep02emb04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 4</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-emblema-05">Emblema 5</h2>
        <p>Na cidade, você estará no encalço de Natalia e chegará um momento em que terá de pular entre dois prédios.
            Antes de pular, olhe para a esquerda inferior no topo de um container.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 5" height="563" loading="lazy" src="assets/img/ep02emb05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-desenho-06">Desenho 6</h2>
        <p>Na cidade, após a última bancada, no teto das escadas que levam à área do confronto contra Vulcaníria
            (Vulcanblubber).</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Desenho 6" height="563" loading="lazy" src="assets/img/ep02des06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Desenho 6</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-larva-01">Larva 1</h2>
        <p>No começo, volte para a torre de transmissão e saia do outro lado – por onde você veio no episódio 1 – no
            chão, próximo à grade do lado de fora.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Larva 1" height="563" loading="lazy" src="assets/img/ep02lar01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Larva 1</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-emblema-06">Emblema 6</h2>
        <p>Com Barry e Natalia, nos escombros de uma casa onde você deve matar duas Aparições (Revenants). Não é a
            primeira, mas a segunda casa que encontrar. Este emblema não pode ser obtido com Claire e Moira.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 6.1" height="563" loading="lazy" src="assets/img/ep02emb06.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 6.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 6.2" height="563" loading="lazy" src="assets/img/ep02emb06.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 6.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-de-utensilio-01">Caixa de Utensílio 1</h2>
        <p>Em meio a floresta, após você passar o portão de metal e for em busca da Back Gate Key, há uma área com uma
            árvore caída à esquerda. A caixa está em frente.</p>
        <p><strong>Item:</strong> Estojo de munição de pistola.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 1" height="563" loading="lazy"
                 src="assets/img/ep02caiute01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 1</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-emblema-07">Emblema 7</h2>
        <p>Você precisará obter uma chave para prosseguir com Barry e Natalia. No caminho para obtê-la, você precisará
            cruzar entre os telhados de duas casas por uma ponte de madeira. Nesse instante, olhe para às rochas à
            esquerda para ver o emblema. Este emblema não pode ser obtido com Claire e Moira.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 7.1" height="563" loading="lazy" src="assets/img/ep02emb07.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 7.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 7.2" height="563" loading="lazy" src="assets/img/ep02emb07.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 7.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-de-utensilio-02">Caixa de Utensílio 2</h2>
        <p>Na cabana onde encontra a Back Gate Key.</p>
        <p><strong>Item:</strong> Caixa de peças – Antirrecuo nv.1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 2" height="563" loading="lazy"
                 src="assets/img/ep02caiute02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-de-utensilio-03">Caixa de Utensílio 3</h2>
        <p>No vilarejo de pesca, em uma casa azul em que a Natalia tem que abrir a porta por dentro.</p>
        <p><strong>Item:</strong> Esmeralda (1.000 PB).</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 3.1" height="563" loading="lazy"
                 src="assets/img/ep02caiute03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 3.2" height="563" loading="lazy"
                 src="assets/img/ep02caiute03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 3.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-larva-02">Larva 2</h2>
        <p>No vilarejo de pesca, no prédio onde Claire e Moira conseguiram o combustível para o helicóptero, embaixo da
            prateleira.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Larva 2.1" height="563" loading="lazy" src="assets/img/ep02lar02.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Larva 2.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Larva 2.2" height="563" loading="lazy" src="assets/img/ep02lar02.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Larva 2.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-de-utensilio-04">Caixa de Utensílio 4</h2>
        <p>No vilarejo de pesca, atrás do bar Wossek, ao subir as escadas que dão para os fundos.</p>
        <p><strong>Item:</strong> Caixa de peças – Atordoamento nv. 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 4.1" height="563" loading="lazy"
                 src="assets/img/ep02caiute04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 4.2" height="563" loading="lazy"
                 src="assets/img/ep02caiute04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 4.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-larva-03">Larva 3</h2>
        <p>Saindo do vilarejo de pesca, logo após passar pela porta de metal, antes de entrar na passagem subterrânea,
            olhe a parede à direita.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Larva 3.1" height="563" loading="lazy" src="assets/img/ep02lar03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Larva 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Larva 3.2" height="563" loading="lazy" src="assets/img/ep02lar03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Larva 3.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-larva-04">Larva 4</h2>
        <p>Você deve matar Pedro com Claire para conseguir coletar esta larva com Barry e Natalia. Se Claire matar Pedro
            no vilarejo de pesca, Barry obterá a furadeira mais cedo e poderá usá-la na primeira parede com um X
            vermelho na cidade. Após derrubá-la, olhe para à sua direita (esquerda se virar a câmera).</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Larva 4.1" height="563" loading="lazy" src="assets/img/ep02lar04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Larva 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Larva 4.2" height="563" loading="lazy" src="assets/img/ep02lar04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Larva 4.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-de-utensilio-05">Caixa de Utensílio 5</h2>
        <p>Requer que você tenha matado o Pedro Mutante com Claire e Moira. Barry obterá a furadeira mais cedo em seu
            cenário e poderá acessar uma área que exige o uso dela para pular no prédio ao lado.</p>
        <p><strong>Item:</strong> Esmeralda (1.000 PB).</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 5.1" height="563" loading="lazy"
                 src="assets/img/ep02caiute05.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 5.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 5.2" height="563" loading="lazy"
                 src="assets/img/ep02caiute05.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 5.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-de-utensilio-06">Caixa de Utensílio 6</h2>
        <p>Na cidade, ao final do armazém, antes do portão que leva ao parque do lado de fora.</p>
        <p><strong>Item:</strong> Bolda de expansão (Natalia).</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 6" height="563" loading="lazy"
                 src="assets/img/ep02caiute06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 6</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-larva-05">Larva 5</h2>
        <p>Na cidade, quando sair do armazém, olhe no topo do escorregador do parquinho. Será necessário arremessar um
            tijolo para conseguir, ou subir nele, agachar e golpear o inseto.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Larva 5" height="563" loading="lazy" src="assets/img/ep02lar05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Larva 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-de-utensilio-07">Caixa de Utensílio 7</h2>
        <p>Na cidade, dentro do prédio com o portão eletrônico que fecha automaticamente após certo tempo, na sala com a
            alavanca. Há uma Garretérea (Glasp) na escada que dá acesso à sala.</p>
        <p><strong>Item:</strong> Caixa de peças – Dano nv. 2.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 7" height="563" loading="lazy"
                 src="assets/img/ep02caiute07.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 7</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-de-utensilio-08">Caixa de Utensílio 8</h2>
        <p>Na cidade, no prédio com o elevador quebrado, no primeiro andar, vá ao apartamento oposto ao banheiro.</p>
        <p><strong>Item:</strong> Caixa de peças – Capacidade nv. 2.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 8.1" height="563" loading="lazy"
                 src="assets/img/ep02caiute08.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 8.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 8.2" height="563" loading="lazy"
                 src="assets/img/ep02caiute08.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 8.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-emblema-08">Emblema 8</h2>
        <p>Na cidade, no prédio com elevador quebrado, Natalia deverá passar por um buraco para destrancar uma porta de
            uma sala com uma Garretérea (Glasp) no terceiro andar. Ande agachado para não ser detectado e mate o inimigo
            com Barry. O emblema está numa estante dessa mesma sala. Este emblema não pode ser obtido com Claire e
            Moira.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 8" height="563" loading="lazy" src="assets/img/ep02emb08.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 8</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-emblema-09">Emblema 9</h2>
        <p>Na cidade, dentro da torre, olhe para o teto desabado da primeira sala e você verá o emblema no topo dos
            escombros. Este emblema não pode ser obtido com Claire e Moira.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Emblema 9" height="563" loading="lazy" src="assets/img/ep02emb09.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Emblema 9</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-caixa-de-utensilio-09">Caixa de Utensílio 9</h2>
        <p>Na cidade, logo após entrar a torre, no canto de uma sala adjacente ao salão principal.</p>
        <p><strong>Item:</strong> Esmeralda (1.000 PB).</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Caixa de Utensílio 9" height="563" loading="lazy"
                 src="assets/img/ep02caiute09.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Caixa de Utensílio 9</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-2-larva-06">Larva 6</h2>
        <p>Na cidade, na torre, suba as escadas e olhe para um pilar arredondado. O último inseto está ao lado direito
            deste pilar, na parede. Será necessário arremessar um tijolo para conseguir.</p>
        <figure class="responsive-image">
            <img alt="Ep. 2 Larva 6" height="563" loading="lazy" src="assets/img/ep02lar06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 2 Larva 6</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h1 id="episodio-3">Episódio 3 - Julgamento</h1>

    <div class="block">
        <h2 id="episodio-3-desenho-01">Desenho 1</h2>
        <p>Na cidade, assim que o episódio começar e tomar o controle dos personagens, verifique a parede ao lado do
            portão gigante que leva à fábrica.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Desenho 1" height="563" loading="lazy" src="assets/img/ep03des01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Desenho 1</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-01">Emblema 1</h2>
        <p>Após entrar no pátio da fábrica de processamento de alimentos com os três prédios, vá para a esquerda da
            porta que entrou e olhe para cima das janelas do primeiro prédio para ver o emblema.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 1.1" height="563" loading="lazy" src="assets/img/ep03emb01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 1.2" height="563" loading="lazy" src="assets/img/ep03emb01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-militar-01">Caixa Militar 1</h2>
        <p>No pátio da fábrica de processamento de alimentos, entre o primeiro e o segundo prédio.</p>
        <p><strong>Item:</strong> Estojo e munição de pistola automática.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 1.1" height="563" loading="lazy"
                 src="assets/img/ep03caimil01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 1.2" height="563" loading="lazy"
                 src="assets/img/ep03caimil01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-02">Emblema 2</h2>
        <p>No primeiro prédio da fábrica de processamento de alimentos, assim que chegar ao segundo andar, dê a volta e
            olhe até conseguir enxergar uma bandeira ao centro. O emblema está bem acima. Pode ser visto melhor se
            estiver agachado.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 2.1" height="563" loading="lazy" src="assets/img/ep03emb02.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 2.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 2.2" height="563" loading="lazy" src="assets/img/ep03emb02.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 2.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-desenho-02">Desenho 2</h2>
        <p>Dentro do primeiro complexo da fábrica de processamento de alimentos, no segundo andar, vá até o sanitário e
            mate o Aflito (Afflicted) que está escondido. Ilumine a parede atrás da privada do toilete que ele estava
            escondido.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Desenho 2.1" height="563" loading="lazy" src="assets/img/ep03des02.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Desenho 2.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Desenho 2.2" height="563" loading="lazy" src="assets/img/ep03des02.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Desenho 2.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-militar-02">Caixa Militar 2</h2>
        <p>Na fábrica de processamento de alimentos, no segundo andar, dentro da sala de onde os inimigos arrombam uma
            porta azul no corredor para emboscá-lo.</p>
        <p><strong>Item:</strong> Caixa de peças – Foco.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 2.1" height="563" loading="lazy"
                 src="assets/img/ep03caimil02.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 2.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 2.2" height="563" loading="lazy"
                 src="assets/img/ep03caimil02.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 2.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-desenho-03">Desenho 3</h2>
        <p>Na fábrica de processamento de alimentos, no segundo prédio, o matadouro, vá até a sala onde há um barril
            explosivo e uma erva vermelha. Ilumine a parede próxima da erva vermelha.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Desenho 3.1" height="563" loading="lazy" src="assets/img/ep03des03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Desenho 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Desenho 3.2" height="563" loading="lazy" src="assets/img/ep03des03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Desenho 3.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-militar-03">Caixa Militar 3</h2>
        <p>Na fábrica de processamento de alimentos, no segundo prédio, o matadouro, na sala principal com os porcos,
            por onde passa o Vulcaníria (Vulcanblubber).</p>
        <p><strong>Item:</strong> Bolsa de expansão (Claire).</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 3.1" height="563" loading="lazy"
                 src="assets/img/ep03caimil03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 3.2" height="563" loading="lazy"
                 src="assets/img/ep03caimil03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 3.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-03">Emblema 3</h2>
        <p>Na fábrica de processamento de alimentos, no segundo prédio, o matadouro, em um corredor que leva à sala que
            tem a chave do abatedouro, dentro da caixa de lixo azul que fica ao lado esquerdo da porta que Moira deve
            abrir com o pé de cabra.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 3.1" height="563" loading="lazy" src="assets/img/ep03emb03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 3.2" height="563" loading="lazy" src="assets/img/ep03emb03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 3.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-militar-04">Caixa Militar 4</h2>
        <p>Na fábrica de processamento de alimentos, no segundo prédio, o matadouro, na sala onde Claire e Moira ficam
            presas com as lâminas rotativas, dê um impulso para Moira encontrar a caixa. Seja rápido ou Claire será
            morta.</p>
        <p><strong>Item:</strong> Caixa de peças raras – Cadência de tiro nv. 3.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 4.1" height="563" loading="lazy"
                 src="assets/img/ep03caimil04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 4.2" height="563" loading="lazy"
                 src="assets/img/ep03caimil04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 4.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-militar-05">Caixa Militar 5</h2>
        <p>Na fábrica de processamento de alimentos, no segundo prédio, o matadouro, na sala com o moedor de carne e a
            segunda metade da réplica do fígado, na sala de trás com a alavanca.</p>
        <p><strong>Item:</strong> Caixa de peças - Capacidade nv. 3.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 5" height="563" loading="lazy" src="assets/img/ep03caimil05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-04">Emblema 4</h2>
        <p>Na fábrica de processamento de alimentos, no terceiro prédio, quando ele estiver em chamas, você terá que
            alternar entre Moira e Claire fechando as válvulas para seguir em frente. Em um certo momento, Moira
            precisará subir em uma caixa. Alterne para Claire e olhe para a parede próxima à escada quebrada para ver o
            emblema. O emblema também pode ser visto de outros pontos do cenário.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 4.1" height="563" loading="lazy" src="assets/img/ep03emb04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 4.2" height="563" loading="lazy" src="assets/img/ep03emb04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 4.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-militar-06">Caixa Militar 6</h2>
        <p>Na fábrica de processamento de alimentos, no terceiro prédio, quando ele estiver em chamas, próximo ao final,
            quando Moira subir em um cano para dar a volta e descobrir qual porta é segura. A caixa está em uma passagem
            à esquerda.</p>
        <p><strong>Item:</strong> Caixa de peças - Dano nv. 4.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 6.1" height="563" loading="lazy"
                 src="assets/img/ep03caimil06.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 6.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 6.2" height="563" loading="lazy"
                 src="assets/img/ep03caimil06.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 6.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-desenho-04">Desenho 4</h2>
        <p>Nos esgotos, após a explosão da fábrica de processamento de alimentos, ilumine a parede à esquerda antes de
            entrar no túnel.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Desenho 4" height="563" loading="lazy" src="assets/img/ep03des04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Desenho 4</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-05">Emblema 5</h2>
        <p>Nos esgotos, após encontrar o velho russo (Evgeny Rebic) e o portão for liberado, desça as escadas e dê meia
            volta para chegar até o fim do corredor alagado e ver o emblema na parede do lado direito, atrás das
            grades.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 5" height="563" loading="lazy" src="assets/img/ep03emb05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-militar-07">Caixa Militar 7</h2>
        <p>Nos esgotos, após passar a bancada, vá até o final do corredor e suba o declive para achar a caixa.</p>
        <p><strong>Item:</strong> Caixa de peças - Rajada + 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 7.1" height="563" loading="lazy"
                 src="assets/img/ep03caimil07.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 7.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 7.2" height="563" loading="lazy"
                 src="assets/img/ep03caimil07.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 7.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-desenho-05">Desenho 5</h2>
        <p>Nos esgotos, você vai passar por um corredor com um cano arrebentado vazando água como uma cachoeira.
            Atravesse a cortina de água e ilumine a parede acima do portão.</p>
        <p>O portão pode ser levantado para disponibilizar uma arma para o Barry.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Desenho 5.1" height="563" loading="lazy" src="assets/img/ep03des05.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Desenho 5.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Desenho 5.2" height="563" loading="lazy" src="assets/img/ep03des05.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Desenho 5.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-militar-08">Caixa Militar 8</h2>
        <p>Nos esgotos, próximo ao Vulcaníria (Vulcanblubber), na parte onde Claire dá um impulso para Moira subir e
            alcançar uma plataforma para descer uma caixa.</p>
        <p><strong>Item:</strong> Caixa de peças raras - Golpe fácil nv. 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 8.1" height="563" loading="lazy"
                 src="assets/img/ep03caimil08.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 8.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa Militar 8.2" height="563" loading="lazy"
                 src="assets/img/ep03caimil08.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa Militar 8.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-06">Emblema 6</h2>
        <p>Nos esgotos, em um corredor onde aparece um Vulcaníria (Vulcanblubber) e mais Aflitos (Afflicteds),
            dispache-os e depois use Moira para subir a plataforma que Claire não alcança. Lá em cima, pegue a caixa e a
            solte no nível inferior para Claire subir. Olhe para o lado oposto dessa plataforma, o emblema estará atrás
            das caixas.</p>
        <p>Aproveite também para acionar uma válvula que fica numa outra plataforma próxima, ao lado das escadas, para
            possibilitar a coleta do Emblema 8 por Barry e Natalia.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 6" height="563" loading="lazy" src="assets/img/ep03emb06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 6</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-07">Emblema 7</h2>
        <p>Nas catacumbas da torre, na área com túmulos, olhe do lado direto da pequena ponte, por onde corre água.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 7.1" height="563" loading="lazy" src="assets/img/ep03emb07.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 7.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 7.2" height="563" loading="lazy" src="assets/img/ep03emb07.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 7.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-desenho-06">Desenho 6</h2>
        <p>Dentro das catacumbas da torre, vá até o portão bloqueado pelas grades e vire à esquerda. Você verá um outro
            portão com grades. Ilumine a parede à direita dele, antes das grades.</p>
        <p>Mais adiante, quando for matar o Neil Monstro, você precisa matá-lo com a Moira para realizar o final bom.
            Somente alcançando o final bom é que você consegue acesso ao emblema 10 do episódio 4. Do contrário, se
            matar o Neil Monstro com a Claire e obter o final ruim, não será possível coletar o emblema 10 do episódio
            4. Assim, será necessário uma nova rodada de jogo para conseguir o final bom e o emblema 10 do episódio
            4.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Desenho 6.1" height="563" loading="lazy" src="assets/img/ep03des06.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Desenho 6.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Desenho 6.2" height="563" loading="lazy" src="assets/img/ep03des06.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Desenho 6.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-larva-01">Larva 1</h2>
        <p>Nos esgotos, ao refazer o caminho de volta com Barry e Natalia, você encontrará os primeiros Pútridos
            (Rottens) na plataforma que Claire levantou para passar de um lado para o outro. A larva está embaixo da
            ponte de metal.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 1.1" height="563" loading="lazy" src="assets/img/ep03lar01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 1.2" height="563" loading="lazy" src="assets/img/ep03lar01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-de-utensilio-01">Caixa de Utensílio 1</h2>
        <p>Nos esgotos, com Claire e Moira, precisa ter acionado a válvula que pode ser acessada de uma plataforma ao
            lado da escada onde enfrentou um Vulcaníria (Vulcanblubber) e alguns Aflitos (Afflicteds). Com Barry,
            dirija-se à essa área e passe agachado. Neste local, você encontra o emblema 8 também.</p>
        <p><strong>Item:</strong> Estojo de munição de fúzil tático.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa de Utensílio 1.1" height="563" loading="lazy"
                 src="assets/img/ep03caiute01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa de Utensílio 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa de Utensílio 1.2" height="563" loading="lazy"
                 src="assets/img/ep03caiute01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa de Utensílio 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-08">Emblema 8</h2>
        <p>Nos esgotos, para coletar este emblema, você precisa ter acionado a válvula de abertura do portão com Claire
            e Moira, que pode ser acessada de uma plataforma ao lado da escada onde enfrentou um Vulcaníria
            (Vulcanblubber). Com Barry, dirija-se à essa área e passe agachado para ver a caixa de utensílio 1. Olhe ao
            redor para encontrar o emblema.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 8" height="563" loading="lazy" src="assets/img/ep03emb08.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 8</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-larva-02">Larva 2</h2>
        <p>Nos esgotos, indo em direção ao corredor no qual encontra a arma AK-47, olhe para os dois canos do lado
            direito. Arremesse um tijolo dentro do cano da direita.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 2.1" height="563" loading="lazy" src="assets/img/ep03lar02.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 2.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 2.2" height="563" loading="lazy" src="assets/img/ep03lar02.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 2.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 2.3" height="563" loading="lazy" src="assets/img/ep03lar02.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 2.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-larva-03">Larva 3</h2>
        <p>Logo que chegar na unidade de tratamento de esgoto, olhe o grande portão de grades. Arremesse um tijolo entre
            as grades para acertar a larva.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 3.1" height="563" loading="lazy" src="assets/img/ep03lar03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 3.2" height="563" loading="lazy" src="assets/img/ep03lar03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 3.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-09">Emblema 9</h2>
        <p>Na unidade de tratamento de esgoto, assim que Natalia abrir o portão número 2, alterne para Barry, passe o
            portão e olhe para o canto superior esquerdo.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 9.1" height="563" loading="lazy" src="assets/img/ep03emb09.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 9.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 9.2" height="563" loading="lazy" src="assets/img/ep03emb09.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 9.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-de-utensilio-02">Caixa de Utensílio 2</h2>
        <p>Na unidade de tratamento de esgoto, logo após abrir o portão número 2, derrube a barricada com o Barry
            possibilitando que Natalia tenha acesso à caixa.</p>
        <p><strong>Item:</strong> Caixa de peças raras – Dano nv. 4.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa de Utensílio 2" height="563" loading="lazy"
                 src="assets/img/ep03caiute02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa de Utensílio 2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-de-utensilio-03">Caixa de Utensílio 3</h2>
        <p>Na unidade de tratamento de esgoto, após abrir o portão número 4.</p>
        <p>Muito cuidado com as Garretéreas (Glasps) que surgirem de repente para não ser morto instantaneamente.</p>
        <p><strong>Item:</strong> Bolsa de expansão (Barry).</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa de Utensílio 3" height="563" loading="lazy"
                 src="assets/img/ep03caiute03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa de Utensílio 3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-de-utensilio-04">Caixa de Utensílio 4</h2>
        <p>No final da unidade de tratamento de esgoto, haverá duas escadas verticais que levam a alguns escombros. Vá
            pelo lado direito, mate a Garretérea (Glasp) e suba a escada para chegar à caixa.</p>
        <p><strong>Item:</strong> Estojo de munição de fuzil de precisão.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa de Utensílio 4.1" height="563" loading="lazy"
                 src="assets/img/ep03caiute04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa de Utensílio 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa de Utensílio 4.2" height="563" loading="lazy"
                 src="assets/img/ep03caiute04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa de Utensílio 4.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-larva-04">Larva 4</h2>
        <p>No final da unidade de tratamento de esgoto, haverá duas escadas verticais que levam a alguns escombros.
            Pegue um tijolo, vá pelo lado esquerdo e arremesse-o na plataforma. A larva está no topo nos escombros.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 4.1" height="563" loading="lazy" src="assets/img/ep03lar04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 4.2" height="563" loading="lazy" src="assets/img/ep03lar04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 4.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-10">Emblema 10</h2>
        <p>Na pedreira, ao descer a primeira escada vertical, olhe para o container que caiu no teto do armazém.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 10" height="563" loading="lazy" src="assets/img/ep03emb10.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 10</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-larva-05">Larva 5</h2>
        <p>Na pedreira, do lado de fora do prédio que você encontra o Dhurlga, dirija-se ao lado esquerdo, onde há uma
            grade. O inseto estará do outro lado, mas você deverá arremessar um tijolo por cima da grade para
            acertar.</p>
        <p>Subir no gerador de energia, que você tira de dentro do armazém onde luta com Dhurlga, pode ajudar.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 5.1" height="563" loading="lazy" src="assets/img/ep03lar05.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 5.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 5.2" height="563" loading="lazy" src="assets/img/ep03lar05.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 5.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 5.3" height="563" loading="lazy" src="assets/img/ep03lar05.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 5.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-caixa-de-utensilio-05">Caixa de Utensílio 5</h2>
        <p>Na pedreira, assim que tiver conseguido o gerador de energia para o elevador, use-o para alcançar uma
            plataforma que fica na mesma área que o portão eletrônico.</p>
        <p><strong>Item:</strong> Caixa de peças raras - Carregamento rápido M nv. 1. (para a Magnum).</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Caixa de Utensílio 5" height="563" loading="lazy"
                 src="assets/img/ep03caiute05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Caixa de Utensílio 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-emblema-11">Emblema 11</h2>
        <p>Na pedreira, assim que o elevador emperrar, chegue ao topo, mate os inimigos e dirija-se até a parte da ponte
            que cedeu e mire do outro lado, no topo da torre direita. Usar o rifle pode ajudar.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 11.1" height="563" loading="lazy" src="assets/img/ep03emb11.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 11.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 11.2" height="563" loading="lazy" src="assets/img/ep03emb11.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 11.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Emblema 11.3" height="563" loading="lazy" src="assets/img/ep03emb11.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Emblema 11.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-3-larva-06">Larva 6</h2>
        <p>Na pedreira, após derrotar o Dhurlga e cruzar o último portão acionado pelo gerador, procure a larva na ponte
            de pedra que cedeu, à direita.</p>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 6.1" height="563" loading="lazy" src="assets/img/ep03lar06.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 6.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 6.2" height="563" loading="lazy" src="assets/img/ep03lar06.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 6.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 3 Larva 6.3" height="563" loading="lazy" src="assets/img/ep03lar06.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 3 Larva 6.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h1 id="episodio-4">Episódio 4 - Metamorfose</h1>

    <div class="block">
        <h2 id="episodio-4-desenho-01">Desenho 1</h2>
        <p>Na torre, quando derrotar Neil Monstro e sair do elevador, ilumine a parte inferior da sacada acima da
            primeira
            porta.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 1.1" height="563" loading="lazy" src="assets/img/ep04des01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 1.1</figcaption>
        </figure>
        <p>Passando pela porta, há uma sala com monitores. Nela, há uma alavanca de alterna o fechamento das comportas
            da eclusa, a comporta direita já está fechada. O fechamento delas influencia na coleta das larvas por
            Natalia, uma larva está de um lado e a outra do lado oposto. Para coletar a larva 1, a comporta esquerda
            deve ser fechada, para a larva 6, a comporta direita deve ser fechada.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 1.2" height="563" loading="lazy" src="assets/img/ep04des01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 1.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 1.3" height="563" loading="lazy" src="assets/img/ep04des01.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 1.3</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 1.4" height="563" loading="lazy" src="assets/img/ep04des01.04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 1.4</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 1.5" height="563" loading="lazy" src="assets/img/ep04des01.05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 1.5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-desenho-02">Desenho 2</h2>
        <p>Na torre, na suíte, ilumine o quadro ao lado esquerdo da cama.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 2" height="563" loading="lazy" src="assets/img/ep04des02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-desenho-03">Desenho 3</h2>
        <p>Na torre, na suíte, quebre o aquário, arraste-o para a esquerda e ilumine o chão arranhado.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 3" height="563" loading="lazy" src="assets/img/ep04des03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-emblema-01">Emblema 1</h2>
        <p>Na torre, no laboratório, onde encontra com a Supervisora, olhe a estante à direita.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 1.1" height="563" loading="lazy" src="assets/img/ep04emb01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 1.2" height="563" loading="lazy" src="assets/img/ep04emb01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-desenho-04">Desenho 4</h2>
        <p>Na torre em colapso, na área do gerador de energia, há dois corredores. O corredor da esquerda tem uma
            primeira bancada, siga pelo corredor da direita e ilumine a parede.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 4.1" height="563" loading="lazy" src="assets/img/ep04des04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 4.2" height="563" loading="lazy" src="assets/img/ep04des04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 4.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 4.3" height="563" loading="lazy" src="assets/img/ep04des04.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 4.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-caixa-militar-01">Caixa Militar 1</h2>
        <p>Na torre em colapso, na área do gerador de energia, após abrir o portão com dois cadeados dourados, em
            frente.</p>
        <p><strong>Item:</strong> Estojo de munição de Magnum.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa Militar 1.1" height="563" loading="lazy"
                 src="assets/img/ep04caimil01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa Militar 1.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa Militar 1.2" height="563" loading="lazy"
                 src="assets/img/ep04caimil01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa Militar 1.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-desenho-05">Desenho 5</h2>
        <p>No exterior da torre em colapso, desça a primeira plataforma. Ilumine a parede em frente à segunda
            plataforma.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 5" height="563" loading="lazy" src="assets/img/ep04des05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-emblema-02">Emblema 2</h2>
        <p>No exterior da torre em colapso, desça a primeira plataforma. Na parede em frente à segunda plataforma, você
            obtém o desenho 5. Desça para a terceira plataforma e olhe embaixo da primeira plataforma.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 2" height="563" loading="lazy" src="assets/img/ep04emb02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-caixa-militar-02">Caixa Militar 2</h2>
        <p>No exterior da torre em colapso, após descer a terceira plataforma. Cuidado para não correr demais e cair do
            alto por acidente, tente descer de lado.</p>
        <p><strong>Item:</strong> Diamante.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa Militar 2.1" height="563" loading="lazy"
                 src="assets/img/ep04caimil02.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa Militar 2.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa Militar 2.2" height="563" loading="lazy"
                 src="assets/img/ep04caimil02.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa Militar 2.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa Militar 2.3" height="563" loading="lazy"
                 src="assets/img/ep04caimil02.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa Militar 2.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-desenho-06">Desenho 6</h2>
        <p>Na última área da torre em colapso, após cruzar umas escadas caídas que servem como plataformas, ilumine a
            parede à esquerda da passagem que cedeu à explosão.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 6.1" height="563" loading="lazy" src="assets/img/ep04des06.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 6.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Desenho 6.2" height="563" loading="lazy" src="assets/img/ep04des06.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Desenho 6.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-emblema-03">Emblema 3</h2>
        <p>Na última área da torre em colapso, você irá descer uma escada vertical bem comprida. Ao prosseguir, Moira
            vai gritar "Run run run...". Nesse instante, pare e olhe para a estrutura central da torre à direita, para
            ver o emblema mais abaixo.</p>
        <p>Também é possível alcançá-lo mais de perto um pouco antes da fuga terminar, quando um cano cai. Antes de
            passar por ele, vá adiante para a direita. Ou atravesse o cano, e olhe para a direita antes de passar
            agachado pelas vigas de metal.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 3.1" height="563" loading="lazy" src="assets/img/ep04emb03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 3.2" height="563" loading="lazy" src="assets/img/ep04emb03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 3.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 3.3" height="563" loading="lazy" src="assets/img/ep04emb03.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 3.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-emblema-04">Emblema 4</h2>
        <p>Quando chegar ao local das grandes comportas da eclusa, haverá uma pequena ponte que deverá cruzar. Ao
            atravessá-la, não desça as escadas, olhe para frente no topo de um poste distante com um holofote. Use o
            rifle para atirar.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 4.1" height="563" loading="lazy" src="assets/img/ep04emb04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 4.2" height="563" loading="lazy" src="assets/img/ep04emb04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 4.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 4.3" height="563" loading="lazy" src="assets/img/ep04emb04.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 4.3</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 4.4" height="563" loading="lazy" src="assets/img/ep04emb04.04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 4.4</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-larva-01-ou-larva-06">Larva 1 (ou Larva 6)</h2>
        <p>Para coletar essa larva, com Claire, é necessário ter puxado uma vez a alavanca para alternar o fechamento
            das duas comportas da eclusa (fechar a comporta esquerda) na sala dos monitores dentro da torre.</p>
        <p>Com Barry, ao chegar na eclusa, vá por onde Claire fechou a comporta e suba a escada vertical. Suba a escada
            comum e arremesse o tijolo contra o concreto do outro lado da grade.</p>
        <p>A larva 1 e a larva 6 não podem ser coletadas na mesma rodada de jogo. É preciso escolher qual delas quer
            obter primeiro. Em outra rodada, colete a larva que falta.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Larva 1.1 (ou Larva 6.1)" height="563" loading="lazy"
                 src="assets/img/ep04lar01lar06.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Larva 1.1 (ou Larva 6.1)</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Larva 1.2 (ou Larva 6.2)" height="563" loading="lazy"
                 src="assets/img/ep04lar01lar06.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Larva 1.2 (ou Larva 6.2)</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-larva-06-ou-larva-01">Larva 6 (ou Larva 1)</h2>
        <p>Para coletar essa larva, com Claire, é necessário <em><strong>NÃO</strong> ter puxado a alavanca para
                alternar o fechamento das duas comportas da eclusa</em> (manter fechada a comporta direita) na sala dos
            monitores dentro da torre.</p>
        <p>Com Natalia, abaixo da ponte do córrego, arremesse um tijolo através das grades do portão, na parede
            esquerda.</p>
        <p>A larva 1 e a larva 6 não podem ser coletadas na mesma rodada de jogo. É preciso escolher qual delas quer
            obter primeiro. Em outra rodada, colete a larva que falta.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Larva 6 (ou Larva 1)" height="563" loading="lazy"
                 src="assets/img/ep04lar06lar01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Larva 6 (ou Larva 1)</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-caixa-de-utensilio-01-ou-caixa-de-utensilio-05">Caixa de Utensílio 1 (ou Caixa de Utensílio
            5)</h2>
        <p>Para coletar essa caixa de utensílio, com Claire, é necessário ter puxado uma vez a alavanca para alternar o
            fechamento das duas comportas da eclusa (fechar a comporta esquerda) na sala dos monitores dentro da
            torre.</p>
        <p>A caixa de utensílio 1 e a caixa de utensílio 5 não podem ser abertas na mesma rodada de jogo. É preciso
            escolher qual delas quer abrir primeiro. Em outra rodada, abra a caixa que falta.</p>
        <p>A caixa está no final do córrego, dentro de um prédio. Com Barry, mate o Pútrido (Rotten) que está na sala
            trancada e use Natalia para rastejar pelo buraco e alcançar a caixa.</p>
        <p><strong>Item:</strong> Caixa de peças – Antirrecuo nv. 2.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 1.1 (ou Caixa de Utensílio 5.1)" height="563" loading="lazy"
                 src="assets/img/ep04caiute01caiute05.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 1.1 (ou Caixa de Utensílio 5.1)</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 1.2 (ou Caixa de Utensílio 5.2)" height="563" loading="lazy"
                 src="assets/img/ep04caiute01caiute05.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 1.2 (ou Caixa de Utensílio 5.2)</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-caixa-de-utensilio-05-ou-caixa-de-utensilio-01">Caixa de Utensílio 5 (ou Caixa de Utensílio
            1)</h2>
        <p>Para coletar essa caixa de utensílio, com Claire, é necessário <em><strong>NÃO</strong> ter puxado a alavanca
                para alternar o fechamento das duas comportas da eclusa</em> (manter fechada a comporta direita) na sala
            dos monitores dentro da torre.</p>
        <p>Com Natalia, se rasteje através de um buraco num container. Com Barry, atire no cadeado do container que
            guarda a caixa e mate os Pútridos (Rottens) que estiverem dentro dele.</p>
        <p><strong>Item:</strong> Caixa de peças – Perfuração nv. 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 5.1 (ou Caixa de Utensílio 1.1)" height="563" loading="lazy"
                 src="assets/img/ep04caiute05caiute01.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 5.1 (ou Caixa de Utensílio 1.1)</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 5.2 (ou Caixa de Utensílio 1.2)" height="563" loading="lazy"
                 src="assets/img/ep04caiute05caiute01.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 5.2 (ou Caixa de Utensílio 1.2)</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 5.3 (ou Caixa de Utensílio 1.3)" height="563" loading="lazy"
                 src="assets/img/ep04caiute05caiute01.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 5.3 (ou Caixa de Utensílio 1.3)</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-emblema-05">Emblema 5</h2>
        <p>Com Barry, na área em que você deve passar o aterro usando o guindaste, ao chegar na plataforma 3 do lado
            esquerdo, olhe em direção a plataforma 2. O emblema está na coluna de concreto, ao lado da viga de
            metal.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 5" height="563" loading="lazy" src="assets/img/ep04emb05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-emblema-06">Emblema 6</h2>
        <p>Na entrada da mina, onde há o elevador, haverá um trilho com três carrinhos na parte superior. Pule e vá até
            o fim da linha, onde há um carrinho parado. O emblema está atrás do carrinho.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 6.1" height="563" loading="lazy" src="assets/img/ep04emb06.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 6.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 6.2" height="563" loading="lazy" src="assets/img/ep04emb06.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 6.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 6.3" height="563" loading="lazy" src="assets/img/ep04emb06.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 6.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-larva-02">Larva 2</h2>
        <p>Na coluna da parede da escada que está atrás do elevador que leva às minas.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Larva 2" height="563" loading="lazy" src="assets/img/ep04lar02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Larva 2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-caixa-de-utensilio-02">Caixa de Utensílio 2</h2>
        <p>Nas minas, numa área cheia de Pútridos (Rottens), com um andaime de madeira, vá até a passagem leste e
            empurre o carrinho até o final para dar acesso a sala com a caixa. Cuidado com o gás venenoso!</p>
        <p><strong>Item:</strong> Caixa de peças – Capacidade nv. 3.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 2.1" height="563" loading="lazy"
                 src="assets/img/ep04caiute02.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 2.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 2.2" height="563" loading="lazy"
                 src="assets/img/ep04caiute02.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 2.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 2.3" height="563" loading="lazy"
                 src="assets/img/ep04caiute02.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 2.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-larva-03">Larva 3</h2>
        <p>Nas minas, numa área cheia de Pútridos (Rottens), com um andaime de madeira, há uma passagem a oeste com um
            carrinho que Barry deve empurrar até o final para acessar uma outra passagem à direita (onde há uma Aparição
            (Revenant)). Arremesse um tijolo atrás do carrinho.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Larva 3.1" height="563" loading="lazy" src="assets/img/ep04lar03.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Larva 3.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Larva 3.2" height="563" loading="lazy" src="assets/img/ep04lar03.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Larva 3.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-emblema-07">Emblema 7</h2>
        <p>Nas minas, após se livrar do gás venenoso e descer o elevador, olhe para cima. O emblema está no topo de uma
            coluna de metal.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 7" height="563" loading="lazy" src="assets/img/ep04emb07.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 7</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-emblema-08">Emblema 8</h2>
        <p>Na mansão, olhe embaixo das escadas que levam ao laboratório secreto.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 8.1" height="563" loading="lazy" src="assets/img/ep04emb08.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 8.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 8.2" height="563" loading="lazy" src="assets/img/ep04emb08.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 8.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-larva-04">Larva 4</h2>
        <p>Na mansão, no laboratório secreto, quando alcançar a câmara de cultivo de Aparições (Revenants), fique entre
            os dois primeiros tubos com os inimigos, olhe para o tanque com a Aparição (Revenant) que está ao fundo e à
            esquerda. A larva está no topo dele.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Larva 4.1" height="563" loading="lazy" src="assets/img/ep04lar04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Larva 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Larva 4.2" height="563" loading="lazy" src="assets/img/ep04lar04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Larva 4.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-caixa-de-utensilio-03">Caixa de Utensílio 3</h2>
        <p>Na mansão, no laboratório secreto, o chegar na câmara de cultivo de Aparições (Revenants), dirija-se à
            passagem à esquerda para chegar à sala de tortura com duas Aparições (Revenants).</p>
        <p><strong>Item:</strong> Estojo de munição de magnum.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 3" height="563" loading="lazy"
                 src="assets/img/ep04caiute03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-caixa-de-utensilio-04">Caixa de Utensílio 4</h2>
        <p>Na mansão, no laboratório secreto, quando obter a chave de emblema, retorne ao primeiro andar da mansão. Siga
            pelo corredor à direita da entrada da mansão para chegar à sala com a mesa de jantar e abrir a porta com
            emblema. A caixa está atrás da mesa da recepção.</p>
        <p><strong>Item:</strong> Caixa de peças raras – Rajada + 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 4.1" height="563" loading="lazy"
                 src="assets/img/ep04caiute04.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 4.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 4.2" height="563" loading="lazy"
                 src="assets/img/ep04caiute04.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 4.2</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Caixa de Utensílio 4.3" height="563" loading="lazy"
                 src="assets/img/ep04caiute04.03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Caixa de Utensílio 4.3</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-emblema-09">Emblema 9</h2>
        <p>Após acessar a sala com o cartão de segurança nível 2, onde há um depósito de cadáveres e outros objetos, vá
            em direção à pilha de cadavéres ao lado oposto do elevador e de meia volta. Olhe para o chão de metal e verá
            o emblema embaixo das grades.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 9.1" height="563" loading="lazy" src="assets/img/ep04emb09.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 9.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 9.2" height="563" loading="lazy" src="assets/img/ep04emb09.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 9.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-larva-05">Larva 5</h2>
        <p>No subterrâneo da mansão, onde há bonecas desfiguradas, junto à última bancada do jogo, num lança-chamas
            suspenso de cabeça para baixo, similar ao do centro de detenção do episódio 1.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Larva 5" height="563" loading="lazy" src="assets/img/ep04lar05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Larva 5</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="episodio-4-emblema-10">Emblema 10</h2>
        <p>Para coletar este emblema, é necessário realizar o final bom e, para isso, ter matado o Neil Monstro com a
            Moira depois de coletar o desenho 6 do episódio 3.</p>
        <p>Na segunda parte da batalha contra o último chefe, quando tiver o controle do personagem no helicóptero, use
            o rifle e mire à esquerda para ver o emblema em meio às ruinas.</p>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 10.1" height="563" loading="lazy" src="assets/img/ep04emb10.01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 10.1</figcaption>
        </figure>
        <figure class="responsive-image">
            <img alt="Ep. 4 Emblema 10.2" height="563" loading="lazy" src="assets/img/ep04emb10.02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ep. 4 Emblema 10.2</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h1 id="modo-de-raide">Modo de Raide</h1>

    <h2 id="i">Estágio I</h2>

    <div class="block raid-mode">
        <h3 id="i-01">I - 01</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Do esgoto para a superfície das ruas estreitas da Edônia</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>38</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="I - 01" height="563" loading="lazy" src="assets/img/modo-de-raide/i-01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>I - 01</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="i-02">I - 02</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Feira chinesa no edifício</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>39</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="I - 02" height="563" loading="lazy" src="assets/img/modo-de-raide/i-02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>I - 02</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="i-03">I - 03</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Dos andaimes para o bar, em Tall Oaks</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>31</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="I - 03" height="563" loading="lazy" src="assets/img/modo-de-raide/i-03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>I - 03</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="i-04">I - 04</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Sala de aula da universidade Ivy, em Tall Oaks</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>32</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="I - 04" height="563" loading="lazy" src="assets/img/modo-de-raide/i-04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>I - 04</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="i-05">I - 05</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Morros rochosos da Edônia</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Limite de tempo</li>
                <li>Sem reaparecimento</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>35</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Ironheads</li>
                <li>Rottens</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="I - 05" height="563" loading="lazy" src="assets/img/modo-de-raide/i-05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>I - 05</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="i-06">I - 06</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Andar superior e cobertura da loja de armas, em Tall Oaks</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>40</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Ironheads</li>
                <li>Rottens</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="I - 06" height="563" loading="lazy" src="assets/img/modo-de-raide/i-06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>I - 06</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h2 id="ii">Estágio II</h2>

    <div class="block raid-mode">
        <h3 id="ii-01">II - 01</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Montanhas da Edônia com pilhas de troncos</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Proteger o alvo</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Sem reaparecimento</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>35</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Ironheads</li>
                <li>Orthus</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="II - 01" height="563" loading="lazy" src="assets/img/modo-de-raide/ii-01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>II - 01</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="ii-02">II - 02</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Catacumbas do cemitério da catedral de Tall Oaks com água</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>41</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Orthus</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="II - 02" height="563" loading="lazy" src="assets/img/modo-de-raide/ii-02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>II - 02</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="ii-03">II - 03</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Floresta</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>30</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Revenants</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="II - 03" height="563" loading="lazy" src="assets/img/modo-de-raide/ii-03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>II - 03</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="ii-04">II - 04</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Túnel do metrô de Tall Oaks com 1 trilho</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Alcançar o objetivo</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Limite de tempo</li>
                <li>Sem reaparecimento</li>
                <li>Inimigos explodem ao morrer</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>38</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Ironheads</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="II - 04" height="563" loading="lazy" src="assets/img/modo-de-raide/ii-04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>II - 04</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="ii-05">II - 05</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Plataforma onde Chris e Piers fogem do HAOS</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>35</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Ironheads</li>
                <li>Rottens</li>
                <li>Slingers</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="II - 05" height="563" loading="lazy" src="assets/img/modo-de-raide/ii-05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>II - 05</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="ii-06">II - 06</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE Rev. 1 – Casino</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>31</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Scagdead</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Orthus</li>
                <li>Revenants</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="II - 06" height="563" loading="lazy" src="assets/img/modo-de-raide/ii-06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>II - 06</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h2 id="iii">Estágio III</h2>

    <div class="block raid-mode">
        <h3 id="iii-01">III - 01</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Caverna gelada da Edônia com chão congelado e uma ponte suspensa por guindastes</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>41</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Hunters</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="III - 01" height="563" loading="lazy" src="assets/img/modo-de-raide/iii-01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>III - 01</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="iii-02">III - 02</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Recepção e corredores do centro de pesquisas da Neo-Umbrella em Lanshiang</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>38</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Ironheads</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="III - 02" height="563" loading="lazy" src="assets/img/modo-de-raide/iii-02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>III - 02</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="iii-03">III - 03</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Zona de guerra na Edônia anterior ao local onde Chris e Sherry se encontram</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>32</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Revenants</li>
                <li>Rottens</li>
                <li>Slingers</li>
                <li>Splashers</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="III - 03" height="563" loading="lazy" src="assets/img/modo-de-raide/iii-03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>III - 03</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="iii-04">III - 04</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Do vestiário para os cômodos do palácio da Neo-Umbrella em Lanshiang</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>38</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Ironheads</li>
                <li>Orthus</li>
                <li>Revenants</li>
                <li>Splashers</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="III - 04" height="563" loading="lazy" src="assets/img/modo-de-raide/iii-04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>III - 04</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="iii-05">III - 05</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Prisão</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>29</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Executioner Majini</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="III - 05" height="563" loading="lazy" src="assets/img/modo-de-raide/iii-05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>III - 05</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="iii-06">III - 06</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Ruas estreitas da feira chinesa</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>44</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Napads</li>
                <li>Orthus</li>
                <li>Revenants</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="III - 06" height="563" loading="lazy" src="assets/img/modo-de-raide/iii-06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>III - 06</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h2 id="iv">Estágio IV</h2>

    <div class="block raid-mode">
        <h3 id="iv-01">IV - 01</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Centro de pesquisas da Neo-Umbrella em Lanshiang</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>32</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Hunters</li>
                <li>Napads</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="IV - 01" height="563" loading="lazy" src="assets/img/modo-de-raide/iv-01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>IV - 01</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="iv-02">IV - 02</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Beco a caminho da estação de metrô Tall Oaks Station</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>34</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Hunters</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="IV - 02" height="563" loading="lazy" src="assets/img/modo-de-raide/iv-02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>IV - 02</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="iv-03">IV - 03</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Feira chinesa no edifício com paredes quebradas</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>27</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Glasps</li>
                <li>Revenants</li>
                <li>Splashers</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="IV - 03" height="563" loading="lazy" src="assets/img/modo-de-raide/iv-03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>IV - 03</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="iv-04">IV - 04</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Área do Quad Tower com monólito onde há luta com Derek Simmons dinossauro</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Limite de tempo</li>
                <li>Sem reaparecimento</li>
                <li>Inimigos explodem ao morrer</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>27</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Vulcanblubber</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Hunters</li>
                <li>Napads</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="IV - 04" height="563" loading="lazy" src="assets/img/modo-de-raide/iv-04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>IV - 04</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="iv-05">IV - 05</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Túnel do metrô de Tall Oaks com 2 trilhos</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>37</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Scagdead</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Hunters</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="IV - 05" height="563" loading="lazy" src="assets/img/modo-de-raide/iv-05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>IV - 05</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="iv-06">IV - 06</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Telhado quebrado flutuando sobre a água em Lanshiang</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>37</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Glasps</li>
                <li>Ironheads</li>
                <li>Napads</li>
                <li>Rottens</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="IV - 06" height="563" loading="lazy" src="assets/img/modo-de-raide/iv-06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>IV - 06</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h2 id="v">Estágio V</h2>

    <div class="block raid-mode">
        <h3 id="v-01">V - 01</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Térreo da loja de armas em Tall Oaks</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Proteger o alvo</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Sem reaparecimento</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>40</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Executioner Majini</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Giant Whip Spiders</li>
                <li>Ironheads</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="V - 01" height="563" loading="lazy" src="assets/img/modo-de-raide/v-01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>V - 01</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="v-02">V - 02</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Colmeia subaquática</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>63</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Hunters</li>
                <li>Napads</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="V - 02" height="563" loading="lazy" src="assets/img/modo-de-raide/v-02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>V - 02</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="v-03">V - 03</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Inferior da ponte veicular na Edônia</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>35</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Glasps</li>
                <li>Ironheads</li>
                <li>Rottens</li>
                <li>Slingers</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="V - 03" height="563" loading="lazy" src="assets/img/modo-de-raide/v-03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>V - 03</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="v-04">V - 04</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Plataforma de metal sobre a lava em Lanshiang</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>34</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Glasps</li>
                <li>Orthus</li>
                <li>Rottens</li>
                <li>Slingers</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="V - 04" height="563" loading="lazy" src="assets/img/modo-de-raide/v-04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>V - 04</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="v-05">V - 05</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Avião</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>36</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Revenants</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="V - 05" height="563" loading="lazy" src="assets/img/modo-de-raide/v-05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>V - 05</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="v-06">V - 06</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Catacumbas com armadilhas do cemitério da Catedral de Tall Oaks</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>31</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Giant Whip Spiders</li>
                <li>Ironheads</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="V - 06" height="563" loading="lazy" src="assets/img/modo-de-raide/v-06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>V - 06</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h2 id="vi">Estágio VI</h2>

    <div class="block raid-mode">
        <h3 id="vi-01">VI - 01</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Superior da ponte veicular na Edônia</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>34</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>2 Executioner Majini</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Napads</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VI - 01" height="563" loading="lazy" src="assets/img/modo-de-raide/vi-01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VI - 01</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="vi-02">VI - 02</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Túnel com metrô em Tall Oaks</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Alcançar o objetivo</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Limite de tempo</li>
                <li>Sem reaparecimento</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>30</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Hunters</li>
                <li>Napads</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VI - 02" height="563" loading="lazy" src="assets/img/modo-de-raide/vi-02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VI - 02</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="vi-03">VI - 03</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Feira chinesa na rua com pátio</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>35</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Rasklapanjes</li>
                <li>Rottens</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VI - 03" height="563" loading="lazy" src="assets/img/modo-de-raide/vi-03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VI - 03</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="vi-04">VI - 04</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Parque de diversão infantil da cidade</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>25</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Dhurlga</li>
                <li>2 Executioner Majinis</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VI - 04" height="563" loading="lazy" src="assets/img/modo-de-raide/vi-04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VI - 04</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="vi-05">VI - 05</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Galpão onde Chris e Piers enfrentam o HAOS</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>27</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>3 Scagdeads</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Hunters</li>
                <li>Orthus</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VI - 05" height="563" loading="lazy" src="assets/img/modo-de-raide/vi-05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VI - 05</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="vi-06">VI - 06</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Vilarejo de pesca com o bar Wossek</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Inimigos explodem ao morrer</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>28</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Vulcanblubber</li>
                <li>1 Mutant Pedro</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Napads</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VI - 06" height="563" loading="lazy" src="assets/img/modo-de-raide/vi-06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VI - 06</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h2 id="vii">Estágio VII</h2>

    <div class="block raid-mode">
        <h3 id="vii-01">VII - 01</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Montanha da Edônia com nevasca onde o avião caiu</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>30</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Executioner Majini</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Giant Whip Spiders</li>
                <li>Ironheads</li>
                <li>Revenants</li>
                <li>Rottens</li>
                <li>Splashers</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VII - 01" height="563" loading="lazy" src="assets/img/modo-de-raide/vii-01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VII - 01</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="vii-02">VII - 02</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Pátio das fábricas (ФАБРИКА)</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Proteger o alvo</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Sem reaparecimento</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>29</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Dhurlga</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Revenants</li>
                <li>Rottens</li>
                <li>Slingers</li>
                <li>Splashers</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VII - 02" height="563" loading="lazy" src="assets/img/modo-de-raide/vii-02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VII - 02</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="vii-03">VII - 03</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Salão de entrada do palácio em Lanshiang</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>27</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Vulcanblubber</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Hunters</li>
                <li>Napads</li>
                <li>Slingers</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VII - 03" height="563" loading="lazy" src="assets/img/modo-de-raide/vii-03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VII - 03</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="vii-04">VII - 04</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Navio porta-aviões da Neo-Umbrella</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Limite de tempo</li>
                <li>Sem reaparecimento</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>27</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>2 Dhurlgas</li>
                <li>1 Scagdead</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Hunters</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VII - 04" height="563" loading="lazy" src="assets/img/modo-de-raide/vii-04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VII - 04</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="vii-05">VII - 05</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Fábrica onde está o olho falso</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>34</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Mutant Pedro</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Orthus</li>
                <li>Revenants</li>
                <li>Rottens</li>
                <li>Splashers</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VII - 05" height="563" loading="lazy" src="assets/img/modo-de-raide/vii-05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VII - 05</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="vii-06">VII - 06</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Armazém</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>34</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Giant Whip Spiders</li>
                <li>Glasps</li>
                <li>Napads</li>
                <li>Orthus</li>
                <li>Revenants</li>
                <li>Rottens</li>
                <li>Splashers</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VII - 06" height="563" loading="lazy" src="assets/img/modo-de-raide/vii-06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VII - 06</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h2 id="viii">Estágio VIII</h2>

    <div class="block raid-mode">
        <h3 id="viii-01">VIII - 01</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Área da missão I – 01 invertida, RE 6 – Do esgoto para a superfície das ruas estreitas da Edônia
                </li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>23</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>3 Scagdeads</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Glasps</li>
                <li>Hunters</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VIII - 01" height="563" loading="lazy" src="assets/img/modo-de-raide/viii-01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VIII - 01</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="viii-02">VIII - 02</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Sala de espera da universidade Ivy em Tall Oaks</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>31</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Executioner Majini</li>
                <li>2 Scagdeads</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Napads</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VIII - 02" height="563" loading="lazy" src="assets/img/modo-de-raide/viii-02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VIII - 02</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="viii-03">VIII - 03</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Cemitério da Catedral de Tall Oaks</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Proteger o alvo</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Sem reaparecimento</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>20</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Dhurlga</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Napads</li>
                <li>Rasklapanjes</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VIII - 03" height="563" loading="lazy" src="assets/img/modo-de-raide/viii-03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VIII - 03</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="viii-04">VIII - 04</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Da passagem subterrânea do vilarejo de pesca para a cidade</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>35</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Executioner Majini</li>
                <li>1 Scagdead</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Glasps</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VIII - 04" height="563" loading="lazy" src="assets/img/modo-de-raide/viii-04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VIII - 04</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="viii-05">VIII - 05</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Gerador de energia no topo da torre</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>29</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>2 Vulcanblubbers</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Glasps</li>
                <li>Ironheads</li>
                <li>Revenants</li>
                <li>Splashers</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VIII - 05" height="563" loading="lazy" src="assets/img/modo-de-raide/viii-05.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VIII - 05</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="viii-06">VIII - 06</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Ruínas na Edônia</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>14</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Monster Neil</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Ironheads</li>
                <li>Napads</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="VIII - 06" height="563" loading="lazy" src="assets/img/modo-de-raide/viii-06.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>VIII - 06</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h2 id="omega">Estágio Ω</h2>

    <div class="block raid-mode">
        <h3 id="omega-01">Ω - 01</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>Primeira arena da Monster Alex</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Inimigos explodem ao morrer</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>12</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Monster Alex</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Ironheads</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="Ω - 01" height="563" loading="lazy" src="assets/img/modo-de-raide/omega-01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>Ω - 01</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h2 id="ix">Estágio IX</h2>

    <div class="block raid-mode">
        <h3 id="ix-01">IX - 01</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Salão de refeição da universidade Ivy em Tall Oaks</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>60</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Ironheads</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="IX - 01" height="563" loading="lazy" src="assets/img/modo-de-raide/ix-01.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>IX - 01</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="ix-02">IX - 02</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE Rev. 1 – Hall do salão com um grande relógio de pêndulo</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>40</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>3 Scagdeads</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Orthus</li>
                <li>Rasklapanjes</li>
                <li>Rottens</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="IX - 02" height="563" loading="lazy" src="assets/img/modo-de-raide/ix-02.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>IX - 02</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="ix-03">IX - 03</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Esgoto da zona de guerra na Edônia onde Chris e Sherry enfrentam o Ogroman</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Proteger o alvo</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Sem reaparecimento</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>60</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>0</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Afflicteds</li>
                <li>Ironheads</li>
                <li>Napads</li>
                <li>Sploders</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="IX - 03" height="563" loading="lazy" src="assets/img/modo-de-raide/ix-03.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>IX - 03</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block raid-mode">
        <h3 id="ix-04">IX - 04</h3>
        <ul class="main-ul">
            <li class="main-li">Cenário</li>
            <ul>
                <li>RE 6 – Zona de guerra na Edônia onde Chris e Sherry enfrentam o Ogroman</li>
            </ul>
            <li class="main-li">Objetivo da missão</li>
            <ul>
                <li>Derrotar os inimigos</li>
            </ul>
            <li class="main-li">Regras especiais</li>
            <ul>
                <li>Não há</li>
            </ul>
            <li class="main-li">Nº de inimigos</li>
            <ul>
                <li>40</li>
            </ul>
            <li class="main-li">Chefe(s)</li>
            <ul>
                <li>1 Dhurlga</li>
            </ul>
            <li class="main-li">Inimigos comuns</li>
            <ul>
                <li>Revenants</li>
                <li>Slingers</li>
                <li>Splashers</li>
            </ul>
        </ul>
        <figure class="responsive-image">
            <img alt="IX - 04" height="563" loading="lazy" src="assets/img/modo-de-raide/ix-04.<?= $imgExt; ?>"
                 width="1000">
            <figcaption>IX - 04</figcaption>
        </figure>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <h1 id="referencias">Referências</h1>

    <div class="block">
        <h2 id="revil">REVIL</h2>
        <p><a href="https://residentevil.com.br/resident-evil-revelations-2" target="_blank">Resident Evil Revelations
                2</a></p>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>

    <div class="block">
        <h2 id="ign">IGN</h2>
        <p><a href="https://www.ign.com/wikis/resident-evil-revelations-2" target="_blank">Resident Evil Revelations 2
                Wiki Guide</a></p>
        <p><a href="#indice">Ir ao índice</a></p>
    </div>
</article>
<footer>
    <button class="back-to-top" onclick="topFunction()" title="Voltar ao topo"> ▲ </button>
</footer>
<script src="assets/js/bottom-scripts.min.js"></script>
</body>
</html>
