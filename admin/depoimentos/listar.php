<?php

require_once('class/depoimentos.php');
$depoimentos = new DepoimentoClass();
$lista = $depoimentos->Listar();

//var_dump($lista);

?>

<!--Link que direciona para a PG Cadastrar-->

<section class="botao">

    <a class="cadastrarnovo" href="index.php?p=depoimentos&d=cadastrar">

        Novo Depoimento

    </a>

</section>

<table class="table">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Descricao</th>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Status</th>
            <th scope="col">Atualizar</th>
            <th scope="col">Desativar</th>
        </tr>
    </thead>


    <tbody>

        <!--foreach – busca as informações contidas na variável $lista e $linha repete as linhas contidas na tabela -->

        <?php foreach ($lista as $linha) : ?>

            <tr>
                <td><?php echo $linha['idDepoimento'] ?></td>
                <td><?php echo $linha['descricaoDepoimento'] ?></td>

                <td>
                    <img class="fototabela" src="../img/<?php echo $linha['fotoDepoimento'] ?>" alt="<?php echo $linha['nomeDepoimento'] ?>">
                </td>

                <td><?php echo $linha['nomeDepoimento'] ?></td>
                <td><?php echo $linha['statusDepoimento'] ?></td>

                <td class="botaoanimadoum">
                    <a href="index.php?p=depoimentos&d=atualizar&id=<?php echo $linha['idDepoimento'] ?>">
                        <img src="../admin/img/atualizar.png" alt="atualizar">
                    </a>
                </td>

                <td class="botaoanimadoum">
                    <a href="index.php?p=depoimentos&d=desativar&id=<?php echo $linha['idDepoimento'] ?>">
                        <img src="../admin/img/desativar.png" alt="desativar">
                    </a>
                </td>


            </tr>





        <?php endforeach; ?>

    </tbody>
</table>