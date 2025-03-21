<?php
 
//Importe classes PHPMailer para o namespace global
//Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$ok = 0;
 
if (isset($_POST['email'])) {
 
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $estado = $_POST['estado'];
    $atividade = $_POST['atividade'];
    if ($_GET['acao']=='enviar'){
        $arquivo = $_FILES["arquivo"];
    }
    $mens = $_POST['mens'];
    $assunto = 'Felinni Arquitetos';
 
    //echo $nome;
    //echo $cnpj;
    //echo $telefone;
    //echo $email;
    //echo $endereco;
    //echo $cidade;
    //echo $cep;
    //echo $estado;
    //echo $atividade;
    //echo $mens;
 
    require_once('mailer/Exception.php');
    require_once('mailer/PHPMailer.php');
    require_once('mailer/SMTP.php');
 
    $mail = new PHPMailer(true);
 
    try {
        //Configurações do servidor
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Habilita saída de depuração detalhada
        $mail->isSMTP();                                            //Enviar usando SMTP
        $mail->Host = 'smtp.hostinger.com';                   //Defina o servidor SMTP para enviar
        $mail->SMTPAuth = true;                                   //Habilitar autenticação SMTP
        $mail->Username = 'contato@felinni.smpsistema.com.br';       //SMTP nome de usuário
        $mail->Password = 'Senac@Felinni01';                           //SMTP senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Habilitar criptografia TLS implícita
        $mail->Port = 465;                                    //Porta TCP para conexão
 
        //Destinatários
        $mail->setFrom('contato@felinni.smpsistema.com.br', $assunto);            // Quem dispara o email
        $mail->addAddress('manuelalacerda88@gmail.com');                 //Adicionar um destinatário
 
 
        //Conteúdo do email
        $mail->isHTML(true);                                          //Defina o formato do e-mail para HTML
        //---------------------------------------------------
 
 
        $mail->Subject = 'ASSUNTO DO EMAIL';
 
       $mail->addAttachment($arquivo['tmp_name'], $arquivo['name']);
               
 
        //Conteúdo HTML
        $mail->Body = "        
            <strong>Nome: </strong> $nome <br>
            <strong>CNPJ:</strong> $cnpj <br>
            <strong>Telefone:</strong> $telefone <br>
            <strong>E-mail :</strong> $email <br>
            <strong>Endereco:</strong> $endereco<br>
            <strong>Cidade:</strong> $cidade <br>
            <strong>CEP:</strong> $cep <br>
            <strong>Estado:</strong> $estado <br>
            <strong>Atividade:</strong> $atividade <br>
            <strong>Mensagem:</strong> $mens
           
 
        ";
 
        //Sem formatação HTML
        $mail->AltBody = "
            <strong>Nome: </strong> $nome <br>
            <strong>CNPJ:</strong> $cnpj <br>
            <strong>Telefone:</strong> $telefone <br>
            <strong>E-mail :</strong> $email <br>
            <strong>Endereco :</strong> $endereco<br>
            <strong>Cidade :</strong> $cidade<br>
            <strong>CEP :</strong> $cep<br>
            <strong>Estado :</strong> $estado<br>
            <strong>Atividade :</strong> $atividade<br>
            <strong>Mensagem:</strong> $mens
        ";
       
 
        $mail->send();
        //echo 'Email enviado com Sucesso!';
        $ok = 1;
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
        $ok = 2;
    }
}
 
 
?>
 
 
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felinni</title>
 
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
 
        <section> <!--CRIAMOS PARA POST-->
            <form action="?acao=enviar" enctype="multipart/form-data" method="POST"> <!--CRIAMOS PARA POST-->
 
                <section class="contato">
 
                    <div class="site">
 
                        <h2>Contato</h2>
 
                        <h4>
                            <?php
                            if ($ok == 1) {
                                echo $nome . ", e-mail enviado com sucesso!";
                            } else if ($ok == 2) {
 
                                echo $nome . ", não foi possível enviar sua mensagem!";
                            }
 
                            ?>
 
                        </h4>
 
                    </div>
 
                </section>
 
                <section class="cx">
 
                    <div class="site">
 
                        <input type="text" name="nome" id="nome" placeholder="Nome Fornecedor:" required>
 
                        <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ Fornecedor:" required>
 
                        <input type="text" name="telefone" id="telefone" placeholder="Telefone Fornecedor:" required>
 
                        <input type="text" name="email" id="email" placeholder="E-mail Fornecedor:" required>
 
                        <input type="text" name="endereco" id="endereco" placeholder="Endereço Fornecedor:" required>
 
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade Fornecedor:" required>
 
                        <input type="text" name="cep" id="cep" placeholder="CEP Fornecedor:" required>
 
                        <input type="text" name="estado" id="estado" placeholder="Estado Fornecedor:" required>
 
                        <input type="text" name="atividade" id="atividade" placeholder="Atividade Fornecedor:" required>
 
 
 
                        <div class="mb-3">
 
                            <label for="formFile" class="form-label">Anexar Portfólio</label>
 
                            <input class="form-control" name="arquivo" type="file" id="arquivo">
 
                        </div>
 
 
                    </div>
 
                </section>
 
 
                <section class="caixamensagem">
                    <!--Caixa de Mensagem-->
 
                    <div class="site">
 
                        <div>
 
                            <textarea name="mens" id="mens" cols="50" rows="10" placeholder="Mensagem:"></textarea>
 
                        </div>
 
                        <div>
 
                            <input type="submit" value="Enviar">
 
                        </div>
 
                    </div>
 
                </section>
 
            </form>
        </section>
 
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
tem menu de contexto
Redigir