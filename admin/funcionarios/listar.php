<?php

require_once('class/funcionarios.php');
$funcionario = new FuncionarioClass();
$lista = $funcionario->Listar();

//var_dump($lista);

?>

<!--Link que direciona para a PG Cadastrar-->

<section class="botao">

    <a class="cadastrarnovo" href="index.php?p=funcionario&f=cadastrar">

        Novo Funcionario

    </a>

</section>

<table class="table">

    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <!--<th scope="col">DataNasc</th>-->
            <th scope="col">Endereço</th>
            <!--<th scope="col">Cidade</th>-->
            <!--<th scope="col">Cep</th>-->
            <!--<th scope="col">Estado</th>-->
            <!--<th scope="col">Cargo</th>-->
            <th scope="col">Nivel</th>
            <th scope="col">Foto</th>
            <th scope="col">Email</th>
            <!--<th scope="col">Senha</th>-->
            <th scope="col">Telefone</th>
            <!--<th scope="col">TipoContrato</th>-->
            <th scope="col">Status</th>
            <th scope="col">ATUALIZAR</th>
            <th scope="col">DESATIVAR</th>
        </tr>
    </thead>


    <tbody>

        <!--foreach – busca as informações contidas na variável $lista e $linha repete as linhas contidas na tabela -->

        <?php foreach ($lista as $linha) : ?>

            <tr>
                <td><?php echo $linha['idFuncionario'] ?></td>
                <td><?php echo $linha['nomeFuncionario'] ?></td>
                <!--<td><?php echo $linha['datadascFuncionario'] ?></td>-->
                <td><?php echo $linha['enderecoFuncionario'] ?></td>
                <!--<td><?php echo $linha['cidadeFuncionario'] ?></td>-->
                <!--<td><?php echo $linha['cepFuncionario'] ?></td>-->
                <!--<td><?php echo $linha['estadoFuncionario'] ?></td>-->
                <!--<td><?php echo $linha['cargoFuncionario'] ?></td>-->
                <td><?php echo $linha['nivelFuncionario'] ?></td>

                <td>
                    <img class="fototabela" src="../img/<?php echo $linha['fotoFuncionario'] ?>" alt="<?php echo $linha['nomeFuncionario'] ?>">
                </td>

                <td><?php echo $linha['emailFuncionario'] ?></td>
                <!--<td><?php echo $linha['senhaFuncionario'] ?></td>-->
                <td><?php echo $linha['telefoneFuncionario'] ?></td>
                <!--<td><?php echo $linha['tipocontratoFuncionario'] ?></td>-->
                <td><?php echo $linha['statusFuncionario'] ?></td>


                <td class="botaoanimadoum">
                    <a href="index.php?p=funcionario&f=atualizar&id=<?php echo $linha['idFuncionario'] ?>">
                        <img src="../admin/img/atualizar.png" alt="atualizar">
                    </a>
                </td>

                <td class="botaoanimadoum">
                    <a href="index.php?p=funcionario&f=desativar&id=<?php echo $linha['idFuncionario'] ?>">
                        <img src="../admin/img/desativar.png" alt="desativar">
                    </a>
                </td>


            </tr>





        <?php endforeach; ?>

    </tbody>
</table>