<?php

//Importe classes PHPMailer para o namespace global
//Eles devem estar no topo do seu script, não dentro de uma função
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;

if (isset($_POST['email'])){

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $comogostariadesercontatado = $_POST['comogostariadesercontatado'];
    $melhoreshorariosparacontato = $_POST['melhoreshorariosparacontato'];
    $mens = $_POST['mens'];

    $assunto = 'Felinni Arquitetos';

    //echo $nome;
    //echo $email;
    //echo $telefone;
    //echo $mens;

    require_once('mailer/Exception.php');
    require_once('mailer/PHPMailer.php');
    require_once('mailer/SMTP.php');

    $mail = new PHPMailer(true);

    try {
        //Configurações do servidor
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Habilita saída de depuração detalhada
        $mail->isSMTP();                                            //Enviar usando SMTP
        $mail->Host       = 'smtp.hostinger.com';                   //Defina o servidor SMTP para enviar
        $mail->SMTPAuth   = true;                                   //Habilitar autenticação SMTP
        $mail->Username   = 'contato@felinni.smpsistema.com.br';       //SMTP nome de usuário
        $mail->Password   = 'Senac@Felinni01';                           //SMTP senha
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Habilitar criptografia TLS implícita
        $mail->Port       = 465;                                    //Porta TCP para conexão
    
        //Destinatários
        $mail->setFrom('contato@felinni.smpsistema.com.br', $assunto);		    // Quem dispara o email
        $mail->addAddress('manuelalacerda88@gmail.com');     		    //Adicionar um destinatário
    
    
        //Conteúdo do email
        $mail->isHTML(true);                                  	    //Defina o formato do e-mail para HTML
        $mail->Subject = 'ASSUNTO DO EMAIL';
        
    //Conteúdo HTML
    $mail->Body    = "        
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $telefone <br>
            <strong>comogostariadesercontatado:</strong> $comogostariadesercontatado <br>
            <strong>melhoreshorariosparacontato:</strong> $melhoreshorariosparacontato <br>
            <strong>Mensagem:</strong> $mens
        ";
    //Sem formatação HTML
        $mail->AltBody = "
            <strong>Nome: </strong> $nome <br>
            <strong>Email:</strong> $email <br>
            <strong>Telefone:</strong> $telefone <br>
            <strong>comogostariadesercontatado:</strong> $comogostariadesercontatado <br>
            <strong>melhoreshorariosparacontato:</strong> $melhoreshorariosparacontato <br>
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
    <title>Fellini</title>

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

        <section>
            <form action="#" method="POST">

                <section class="contato">

                    <div class="site">

                        <h2>Contato</h2>

                        <h4>
                            <?php

                                if($ok == 1){
                                    echo $nome . ", e-mail enviado com sucesso!";
                                }else if ($ok == 2){
                                    echo $nome . ", não foi possivel enviar sua mensagem!";
                                }
                            
                            ?>
                        </h4>

                    </div>

                </section>

                <section class="cx">

                    <div class="site">

                        <input type="text" name="nome" id="nome" placeholder="Nome Completo:" required>
                        <input type="text" name="email" id="email" placeholder="E-mail:" required>
                        <input type="text" name="telefone" id="telefone" placeholder="Telefone/WhatsApp:" required>

                    </div>

                </section>

                <section class="redes">

                    <div class="site">

                        <div>
                            <div>

                                <h3>Como gostaria de ser contatado?</h3>

                            </div>

                            <div>

                                <input type="radio" name="comogostariadesercontatado" id="whats" value="whats">

                                <label for="Whats">WhatsApp</label>

                            </div>

                            <div>

                                <input type="radio" name="comogostariadesercontatado" id="email" value="email">

                                <label for="email">E-mail</label>

                            </div>

                            <div>

                                <input type="radio" name="comogostariadesercontatado" id="tel" value="tel">

                                <label for="fone">Telefone</label>

                            </div>

                        </div>
                        <!--*********************************************-->

                        <div>
                            <div class="horario">

                                <h3>Melhores horários para contato?</h3>

                            </div>

                            <div>

                                <input type="radio" name="melhoreshorariosparacontato" id="manha" value="manha">

                                <label for="Manha">Manhã: (09h - 12h)</label>

                            </div>

                            <div>

                                <input type="radio" name="melhoreshorariosparacontato" id="almoco" value="almoco">

                                <label for="almoco">Almoço: (12h - 14h)</label>

                            </div>

                            <div>

                                <input type="radio" name="melhoreshorariosparacontato" id="tarde" value="tarde">

                                <label for="tarde">Tarde: (14h - 18h)</label>

                            </div>

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