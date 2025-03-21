<?php

require_once('class/clientes.php');
$clientes = new ClientesClass();
$lista = $clientes->Listar();

//var_dump($lista);

?>

<!--Link que direciona para a PG Cadastrar-->

<section class="botao">

    <a class="cadastrarnovo" href="index.php?p=clientes&c=cadastrar">

        Novo Cliente

    </a>

</section>

<table class="table">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Endereço</th>
            <th scope="col">Cidade</th>
            <th scope="col">CEP</th>
            <th scope="col">Estado</th>
            <th scope="col">Status</th>
            <th scope="col">CRM</th>
            <th scope="col">ATUALIZAR</th>
            <th scope="col">DESATIVAR</th>
        </tr>
    </thead>


    <tbody>

        <!--foreach – busca as informações contidas na variável $lista e $linha repete as linhas contidas na tabela -->

        <?php foreach ($lista as $linha) : ?>

            <tr>
                <td><?php echo $linha['idCliente'] ?></td>
                <td><?php echo $linha['nomeCliente'] ?></td>
                <td><?php echo $linha['cpfCliente'] ?></td>
                <td><?php echo $linha['telefoneCliente'] ?></td>
                <td><?php echo $linha['emailCliente'] ?></td>
                <td><?php echo $linha['enderecoCliente'] ?></td>
                <td><?php echo $linha['cidadeCliente'] ?></td>
                <td><?php echo $linha['cepCliente'] ?></td>
                <td><?php echo $linha['estadoCliente'] ?></td>
                <td><?php echo $linha['statusCliente'] ?></td>
                <td><?php echo $linha['crmCliente'] ?></td>

                <td class="botaoanimadoum">
                    <a href="index.php?p=clientes&c=atualizar&id=<?php echo $linha['idCliente'] ?>">
                        <img src="../admin/img/atualizar.png" alt="atualizar">
                    </a>
                </td>

                <td class="botaoanimadoum">
                    <a href="index.php?p=clientes&c=desativar&id=<?php echo $linha['idCliente'] ?>">
                        <img src="../admin/img/desativar.png" alt="desativar">
                    </a>
                </td>


            </tr>





        <?php endforeach; ?>

    </tbody>
</table>