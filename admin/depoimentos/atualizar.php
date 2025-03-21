<?php

$id = $_GET['id'];

//echo $id;

require_once("class/depoimentos.php");

$depoimentos = new DepoimentoClass($id);

//echo $depoimentos->nomeDepoimento;

if(isset($_POST['idDepoimento'])){

    $descricaoDepoimento     = $_POST['descricaoDepoimento'];
    $nomeDepoimento          = $_POST['nomeDepoimento'];
    $fotoDepoimento          = $_POST['fotoDepoimento'];
    $statusDepoimento        = $_POST['statusDepoimento'];


    if (!empty($_FILES['fotoDepoimento']['name'])) {



        //FOTO
        $arquivo = $_FILES['fotoDepoimento'];

        if ($arquivo['error']) {

            throw new Exception('Error' . $arquivo['error']);

        }

        if (move_uploaded_file($arquivo['tmp_name'], '../img/depoimento/' . $arquivo['name'])) {
            $fotoExercicio = 'depoimento/' . $arquivo['name']; //ex: depoimento/andrelacerda.png


        } else {
            throw new Exception('Error: Não foi possível realizar o upload da imagem');

        }

    } else {
        
        $fotoDepoimento = $depoimentos->fotoDepoimento;

    }



    //Pegar a classe depoimentos.php
 
    //require_once('class/clientes.php');
 
    //$depoimentos = new DepoimentoClass();

    $depoimentos->descricaoDepoimento   =       $descricaoDepoimento;
    $depoimentos->nomeDepoimento        =       $nomeDepoimento;
    $depoimentos->statusDepoimento      =       $statusDepoimento;
    $depoimentos->fotoDepoimento        =       $fotoDepoimento;

    $depoimentos->Atualizar();
}

?>


<h2 class="cadastrar">ATUALIZAR DEPOIMENTOS</h2>

<section class="formcadastrar">

    <form action="index.php?p=depoimentos&d=atualizar&id=<?php echo $depoimentos->descricaoDepoimento ?>" method="POST" enctype="multipart/form-data">

        <div>

            
            <textarea name="descricaoDepoimento" id="descricaoDepoimento" cols="30" rows="10"><?php echo $depoimentos->descricaoDepoimento; ?></textarea>
            <input type="text" name="fotoDepoimento" id="fotoDepoimento"  placeholder="foto: " required value="<?php echo $depoimentos->nomeDepoimento; ?>">
            <input type="text" name="nomeDepoimento" id="nomeDepoimento"  placeholder="Nome: " required value="<?php echo $depoimentos->nomeDepoimento; ?>">

            <select name="statusDepoimento" required>

                <option value="<?php echo $depoimentos->statusDepoimento ?>"><?php echo $depoimentos->statusDepoimento ?></option>
                <option value="ATIVO">ATIVO</option>
                <option value="INATIVO">INATIVO</option>
                <option value="DESATIVADO">DESATIVADO</option>

            </select>

            
            <input type="submit" value="Enviar">

        </div>

    </form>

</section>