<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print($titulo_pagina) ?></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel=<?php print($tipo_folha_estilo);?> href=<?php print($folha_de_estilo); ?>>
    <?php print(@$cabecalho_css); ?>
    <?php print(@$produto_css); ?>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script">
    <!--[if	lt	IE	9]>
            <script	src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

<header class="container">
    <a href="index.php"><h1><img src="img/logo.png" alt="Mirror Fashion"></h1></a>
    
    <p class="sacola">
        Nenhum item na sacola de compras
    </p>

    <nav class="menu-opcoes">
        <ul>    
            <li><a href="#">Sua Conta</a></li>
            <li><a href="#">Lista de Desejos</a></li>
            <li><a href="#">Cartão Fidelidade</a></li>
            <li><a href="./sobre.php">Sobre</a></li>
            <li><a href="#">Ajuda</a></li>
        </ul>
    </nav>
</header>