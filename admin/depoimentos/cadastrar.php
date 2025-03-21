<?php

if (isset($_POST['descricaoDepoimento'])) {

    $descricaoDepoimento    =           $_POST['descricaoDepoimento'];
    $nomeDepoimento         =           $_POST['nomeDepoimento'];
    $statusDepoimento       =           $_POST['statusDepoimento'];

    //FOTO
    $arquivo                        = $_FILES['fotoDepoimento'];

    if ($arquivo['error']) {

        throw new Exception('Error' . $arquivo['error']);
    }

    if (move_uploaded_file($arquivo['tmp_name'], '../img/depoimento/' . $arquivo['name'])) {
        $fotoDepoimento = 'depoimento/' . $arquivo['name']; //ex: depoimento/cadastrar.png


    } else {
        throw new Exception('Error: Não foi possível realizar o upload da imagem');
    }



    //var_dump($_POST['descricaoDepoimento']);
    //var_dump($_POST['fotoDepoimento']);
    //var_dump($_POST['altDepoimento']);/////////////
    //var_dump($_POST['nomeDepoimento']);
    //var_dump($_POST['statusDepoimento']);


    //Pegar a classe depoimentos.php

    require_once('class/depoimentos.php');

    $depoimentos = new DepoimentoClass();

    $depoimentos->descricaoDepoimento      =       $descricaoDepoimento;
    $depoimentos->fotoDepoimento           =       $fotoDepoimento;
    $depoimentos->nomeDepoimento           =       $nomeDepoimento;
    $depoimentos->statusDepoimento         =       $statusDepoimento;


    $depoimentos->Cadastrar();
}


?>



<h1 class="cadastrar">CADASTRAR DEPOIMENTOS</h1>

<section class="formcadastrar">

    <form action="index.php?p=depoimentos&d=cadastrar" method="POST" enctype="multipart/form-data">

        <div>
            <div >
                <img class="fotocadastrar" src="../img/cadastrar.png" alt="" id="imgFoto">
                <input type="file" class="form-control" id="fotoDepoimento" name="fotoDepoimento" required style="display:none ;">
            </div>

            <input type="text" name="descricaoDepoimento" id="descricaoDepoimento" placeholder="Descrição:" required>

            <input type="text" name="nomeDepoimento" id="nomeDepoimento" placeholder="Nome: " required>


            <select name="statusDepoimento" required>

                <option selected>Status Depoimento</option>
                <option value="ATIVO">ATIVO</option>
                <option value="INATIVO">INATIVO</option>
                <option value="DESATIVADO">DESATIVADO</option>

            </select>

            <input type="submit" value="Enviar">

        </div>

    </form>

</section>


<script>
    document.getElementById('imgFoto').addEventListener('click', function() {

        //alert ('Click na IMG');

        document.getElementById('fotoDepoimento').click();

    });

    document.getElementById('fotoDepoimento').addEventListener('change', function(d) {

        let imgFoto = document.getElementById('imgFoto');
        let arquivo = d.target.files[0];

        if (arquivo) {

            let carregar = new FileReader();

            carregar.onload = function(d) {

                imgFoto.src = d.target.result;


            }
            carregar.readAsDataURL(arquivo);

        }


    });
</script>