<?php

$pagina = @$_GET['p'];

//echo '<h2>'.$pagina.'<h2/>';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD Felinni Arquitetos</title>

    <link rel="stylesheet" href="../css/reset.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilo.css">


</head>

<body>

    <header class="topo">

        <h1>
            <img src="../img/logoriginal.png" alt="Logo Felinni Arquitetos">
        </h1>

        <!--Mudar o título da PG para o item que for clicado no menu-->
        <!--Não esquecer de trocar @$_GET por $pagina nos links do menu-->

        <div>

            <?php

            switch ($pagina) {

                case 'dashboard':
                    echo 'Dashboard';
                    break;

                case 'clientes':
                    //echo 'PG Clientes';
                    echo 'Clientes';
                    break;

                case 'depoimentos':
                    echo 'Depoimentos';
                    break;

                case 'funcionarios':
                    echo 'Funcionários';
                    break;

                case 'docfuncionarios':
                    echo 'Documento Funcionários';
                    break;

                case 'fornecedores':
                    echo 'Fornecedores';
                    break;

                case 'obras':
                    echo 'Obras';
                    break;


                case 'projetos':
                    echo 'Projetos';
                    break;

                case 'servicos':
                    echo 'Serviços';
                    break;


                case 'vendas':
                    echo 'Vendas';
                    break;

                case 'relatorio':
                    echo 'Relatório';
                    break;

                case 'ajuda':
                    echo 'Ajuda e Suporte';
                    break;

                default:
                    echo 'Dashboard';
                    break;
            }

            ?>

        </div>

        <div>

            <img src="../img/btnlogin.png" alt="Foto Usuário">

            <h2>Nome:</h2>

        </div>
    </header>

    <main>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php?p=dashboard" class="<?php echo ($pagina == 'dashboard') || ($pagina == '') ? 'menuAtivo' : ''; ?> ">
                            Dashboard </a></li>
                    <li><a href="index.php?p=clientes" class="<?php echo ($pagina == 'clientes') ? 'menuAtivo' : ''; ?> "> Clientes </a></li>
                    <li><a href="index.php?p=depoimentos" class="<?php echo ($pagina == 'depoimentos') ? 'menuAtivo' : ''; ?> "> Depoimentos </a></li>
                    <li><a href="index.php?p=funcionarios" class="<?php echo ($pagina == 'funcionarios') ? 'menuAtivo' : ''; ?> ">
                            Funcionários </a></li>
                    <li><a href="index.php?p=docfuncionarios" class="<?php echo ($pagina == 'docfuncionarios') ? 'menuAtivo' : ''; ?> ">
                            Doc Funcionários </a></li>
                    <li><a href="index.php?p=fornecedores" class="<?php echo ($pagina == 'fornecedores') ? 'menuAtivo' : ''; ?> ">
                            Fornecedores </a></li>
                    <li><a href="index.php?p=obras" class="<?php echo ($pagina == 'obras') ? 'menuAtivo' : ''; ?> "> Obras </a></li>
                    <li><a href="index.php?p=projetos" class="<?php echo ($pagina == 'projetos') ? 'menuAtivo' : ''; ?> ">
                            Projetos </a></li>
                    <li><a href="index.php?p=servicos" class="<?php echo ($pagina == 'servicos') ? 'menuAtivo' : ''; ?> "> Serviços </a></li>
                    <li><a href="index.php?p=vendas" class="<?php echo ($pagina == 'vendas') ? 'menuAtivo' : ''; ?> "> Vendas </a></li>
                    <li><a href="index.php?p=relatorio" class="<?php echo ($pagina == 'relatorio') ? 'menuAtivo' : ''; ?> "> Relatório </a></li>
                    <li><a href="index.php?p=ajuda" class="<?php echo ($pagina == 'ajuda') ? 'menuAtivo' : ''; ?> ">
                            Ajuda e Suporte </a></li>
                </ul>
            </nav>
        </div>
        <div class="box">
            <!-- CONTEÚDO DAS PÁGINAS -->


            <?php

            switch ($pagina) {

                case 'dashboard':
                    echo 'PG Dashboard';
                    break;

                case 'clientes':
                    //echo 'PG Clientes';
                    require_once('clientes/clientes.php');
                    break;

                case 'depoimentos':
                    //echo 'PG Depoimentos';
                    require_once('depoimentos/depoimentos.php');
                    break;

                case 'funcionarios':
                    //echo 'PG Funcionarios';
                    require_once('funcionarios/funcionarios.php');
                    break;

                case 'docfuncionarios':
                    echo 'PG Doc Funcionarios';
                    break;

                case 'fornecedores':
                    echo 'PG Fornecedores';
                    break;

                case 'obras':
                    echo 'PG Obras';
                    break;


                case 'projetos':
                    echo 'PG Projetos';
                    break;

                case 'servicos':
                    echo 'PG Servicos';
                    break;

                case 'vendas':
                    echo 'PG Vendas';
                    break;

                case 'relatorio':
                    echo 'PG relatorio';
                    break;


                case 'ajuda':
                    echo 'PG Ajuda';
                    break;

                default:
                    echo 'pg dashboard';
                    break;
            }

            ?>
        </div>

    </main>

    <footer class="rodape">

        <div class="copyright">


            <img src="../admin/img/copyright2.png" alt="">
            <p>Copyright - 2023 - Fellini</p>


        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>

</body>

</html>