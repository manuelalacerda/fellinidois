<?php

$id = $_GET['id'];

//echo $id;

require_once("class/clientes.php");

$cliente = new ClientesClass($id);

//echo $cliente->nomeCliente;

if(isset($_POST['nomeCliente'])){

    $nomeCliente           = $_POST['nomeCliente'];
    $cpfCliente            = $_POST['cpfCliente'];
    $telefoneCliente       = $_POST['telefoneCliente'];
    $emailCliente          = $_POST['emailCliente'];
    $enderecoCliente       = $_POST['enderecoCliente'];
    $cidadeCliente         = $_POST['cidadeCliente'];
    $cepCliente            = $_POST['cepCliente'];
    $estadoCliente         = $_POST['estadoCliente'];
    $statusCliente         = $_POST['statusCliente'];
    $crmCliente            = $_POST['crmCliente'];


    //Pegar a classe clientes.php
 
    //require_once('class/clientes.php');
 
    //$cliente = new ClientesClass();
 
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
 
    $cliente->Atualizar();
}

?>


<h2 class="cadastrar">ATUALIZAR CLIENTE</h2>

<section class="formcadastrar">

    <form action="index.php?p=clientes&c=atualizar&id=<?php echo $cliente->idCliente ?>" method="POST" enctype="multipart/form-data">

        <div>

            <input type="text" name="nomeCliente" id="nomeCliente" placeholder="Nome Cliente:" required value="<?php echo $cliente->nomeCliente; ?>">
            <input type="text" name="cpfCliente" id="cpfCliente" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="CPF Cliente: (ex: 111.111.111.11) " required value="<?php echo $cliente->cpfCliente; ?>">
            <input type="text" id="telefoneCliente" name="telefoneCliente" placeholder="Telefone Cliente: (XX) XXXXX-XXXX" inputmode="numeric" required maxlength="14" value="<?php echo $cliente->telefoneCliente; ?>">
            <input type="text" name="emailCliente" id="emailCliente" placeholder="E-mail Funcionário:" required value="<?php echo $cliente->emailCliente; ?>">
            <input type="text" name="enderecoCliente" id="enderecoCliente" placeholder="Endereço Cliente: " required value="<?php echo $cliente->enderecoCliente; ?>">
            <input type="text" name="cidadeCliente" id="cidadeCliente" placeholder="Cidade Cliente: " required value="<?php echo $cliente->cidadeCliente; ?>">
            <input type="text" name="cepCliente" id="cepCliente" pattern="\d{5}-\d{3}" placeholder="CEP Cliente: (ex: 12345-678)" required value="<?php echo $cliente->cepCliente; ?>">
            <input type="text" name="estadoCliente" id="estadoCliente" pattern="[A-Za-z]{2}" placeholder="Estado Cliente: (ex: SP)" required value="<?php echo $cliente->estadoCliente; ?>">


            <select name="statusCliente" required>

                <option value="<?php echo $cliente->statusCliente ?>"><?php echo $cliente->statusCliente ?></option>
                <option value="ATIVO">ATIVO</option>
                <option value="INATIVO">INATIVO</option>
                <option value="DESATIVADO">DESATIVADO</option>

            </select>

            <select name="crmCliente" required>

                <option value="<?php echo $cliente->crmCliente ?>"><?php echo $cliente->crmCliente ?></option>
                <option value="REDES SOCIAS">REDES SOCIAS</option>
                <option value="INDICACAO">INDICAÇÃO</option>
                <option value="PARTICIPACAO">PARTICIPAÇÃO</option>

            </select>

            <input type="submit" value="Enviar">

        </div>

    </form>

</section>