<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fellini</title>

    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/slick.css">

    <link rel="stylesheet" href="css/slick-theme.css">

    <link rel="stylesheet" href="css/estilo.css">

    <link rel="stylesheet" href="css/responsivo.css">

</head>

<body class="concreto">

    <!--Cabeçalho-->

     <!--Topo-->

     <?php require_once('conteudo/topo.php'); ?>

    <main>

        <!--Banner-->

        <?php require_once('conteudo/banner.php'); ?>
        
        <!--Fim Banner-->

        <!--Início da Visão-->

        <?php require_once('conteudo/visao.php'); ?>

        <!--Fim da Visão-->

        <!--Início Serviços-->

        <?php require_once('conteudo/servicos.php'); ?>

        <!--Fim Serviços-->

        <!--Projetos3D-->

        <?php require_once('conteudo/projetos3d.php'); ?>

        <!--Fim Projetos3D-->

        <!--Início Depoimentos-->

        <?php require_once('conteudo/depoimentos.php'); ?>

        <!--Fim Depoimentos-->



    </main>

    <!--Rodapé-->

    <?php require_once('conteudo/rodape.php'); ?>

    <!--Fim Rodapé-->

   
    <!--Biblioteca-->

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!--tirou Type/ trocou o arquivo para js-->

    <script src="js/slick.min.js"></script>

    <!--trocou a pasta para js/ chamou animacoes-->

    <script src="js/animacoes.js"></script>

</body>

</html>