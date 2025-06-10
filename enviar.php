<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe e trata os dados
    $nome = strip_tags(trim($_POST["nome"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefone = strip_tags(trim($_POST["telefone"]));
    $mensagem = strip_tags(trim($_POST["mensagem"]));

    // Verifica se os campos obrigatórios foram preenchidos
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos obrigatórios.";
        exit;
    }

    // Define o e-mail de destino
    $para = "contato@tmfiresafe.com.br"; // <-- SUBSTITUA pelo seu e-mail
    $assunto = "Nova mensagem do site";

    // Monta o corpo do e-mail
    $conteudo = "Nova mensagem do formulario:\n\n";
    $conteudo .= "Nome: $nome\n";
    $conteudo .= "E-mail: $email\n";
    $conteudo .= "Telefone: $telefone\n";
    $conteudo .= "Mensagem:\n$mensagem\n";

    // Cabeçalhos
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envia o e-mail
    if (mail($para, $assunto, $conteudo, $headers)) {
        header("Location: index.html");
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Acesso inválido.";
}
