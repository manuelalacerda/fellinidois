<!--Criando links para chamar as pgs-->
<!-- (@ é um operador de supressão de erros)-->
<!--determina qual ação executar com base no valor do parâmetro c passado pela URL. Dependendo do valor, ele incluirá o conteúdo de arquivos específicos (listar.php, cadastrar.php, atualizar.php, ou desativar.php)-->
 
<?php
 
$pagina = @$_GET['f'];
 
if($pagina == NULL){
 
    require_once('listar.php');
 
}else{
 
    if($pagina == 'cadastrar'){ require_once('cadastrar.php');}
    if($pagina == 'atualizar'){ require_once('atualizar.php');}
    if($pagina == 'desativar'){ require_once('desativar.php');}
 
}
 
?>