<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    $para = "contato@lugom.io";
    $assunto = "Nova mensagem do formulário do site";
    $corpo_mensagem = "Nome: $nome\n";
    $corpo_mensagem .= "Email: $email\n";
    $corpo_mensagem .= "Mensagem: $mensagem\n";
    
    if (mail($para, $assunto, $corpo_mensagem)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar o e-mail.";
    }
}
?>