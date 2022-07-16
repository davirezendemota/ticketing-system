<?php


if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "playersinthegood@gmail.com";
    $subject = "Ticket - Sistema";
    $body = "Nome: {$nome} \n Email: {$email} \n Mensagem: {$mensagem}";
    // TROCAR DEPOIS ================
    $header = "From: igor@programadorbr.com"."\r\n"
                ."Reply-To {$email}"."\r\n"
                ."X=Mailer:PHP/".phpversion();
    if(mail($to, $subject, $body, $header)){
        echo("Email enviado com sucesso!");
    } else{
        echo("O e-mail não pode ser enviado");
    }

}

?>