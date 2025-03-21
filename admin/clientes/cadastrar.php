<?php

if (isset($_POST['nomeCliente'])) {

    $nomeCliente        =           $_POST['nomeCliente'];
    $cpfCliente         =           $_POST['cpfCliente'];
    $telefoneCliente    =           $_POST['telefoneCliente'];
    $emailCliente       =           $_POST['emailCliente'];
    $enderecoCliente    =           $_POST['enderecoCliente'];
    $cidadeCliente      =           $_POST['cidadeCliente'];
    $cepCliente         =           $_POST['cepCliente'];
    $estadoCliente      =           $_POST['estadoCliente'];
    $statusCliente      =           $_POST['statusCliente'];
    $crmCliente         =           $_POST['crmCliente'];

    //var_dump($_POST['nomeCliente']);
    //var_dump($_POST['cpfCliente']);
    //var_dump($_POST['telefoneCliente']);
    //var_dump($_POST['emailCliente']);
    //var_dump($_POST['enderecoCliente']);
    //var_dump($_POST['cidadeCliente']);
    //var_dump($_POST['cepCliente']);
    //var_dump($_POST['estadoCliente']);
    //var_dump($_POST['statusCliente']);
    //var_dump($_POST['crmCliente']);




    //Pegar a classe clientes.php
 
    require_once('class/clientes.php');
 
    $cliente = new ClientesClass();
 
    $cliente->nomeCliente           =       $nomeCliente;
    $cliente->cpfCliente            =       $cpfCliente;
    $cliente->telefoneCliente       =       $telefoneCliente;
    $cliente->emailCliente          =       $emailCliente;
    $cliente->enderecoCliente       =       $enderecoCliente;
    $cliente->cidadeCliente         =       $cidadeCliente;
    $cliente->cepCliente            =       $cepCliente;
    $cliente->estadoCliente         =       $estadoCliente;
    $cliente->statusCliente         =       $statusCliente;
    $cliente->crmCliente            =       $crmCliente;
 
    $cliente->Cadastrar();

}


?>



<h1 class="cadastrar">CADASTRAR CLIENTE</h1>

<section class="formcadastrar">

    <form action="index.php?p=clientes&c=cadastrar" method="POST" enctype="multipart/form-data">

        <div>

            <input type="text" name="nomeCliente" id="nomeCliente" placeholder="Nome Cliente:" required>
            <input type="text" name="cpfCliente" id="cpfCliente" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="CPF Cliente: (ex: 111.111.111.11) " required>
            <input type="text" id="telefoneCliente" name="telefoneCliente" placeholder="Telefone Cliente: (XX) XXXXX-XXXX" inputmode="numeric" required maxlength="14">
            <input type="text" name="emailCliente" id="emailCliente" placeholder="E-mail Funcionário:" required>
            <input type="text" name="enderecoCliente" id="enderecoCliente" placeholder="Endereço Cliente: " required>
            <input type="text" name="cidadeCliente" id="cidadeCliente" placeholder="Cidade Cliente: " required>
            <input type="text" name="cepCliente" id="cepCliente" pattern="\d{5}-\d{3}" placeholder="CEP Cliente: (ex: 12345-678)" required>
            <input type="text" name="estadoCliente" id="estadoCliente" pattern="[A-Za-z]{2}" placeholder="Estado Cliente: (ex: SP)" required>


            <select name="statusCliente" required>

                <option selected>Status Cliente</option>
                <option value="ATIVO">ATIVO</option>
                <option value="INATIVO">INATIVO</option>
                <option value="DESATIVADO">DESATIVADO</option>

            </select>

            <select name="crmCliente" required>

                <option selected>Como nos conheceu ?</option>
                <option value="REDES SOCIAS">REDES SOCIAS</option>
                <option value="INDICACAO">INDICAÇÃO</option>
                <option value="PARTICIPACAO">PARTICIPAÇÃO</option>

            </select>

            <input type="submit" value="Enviar">

        </div>

    </form>

</section>