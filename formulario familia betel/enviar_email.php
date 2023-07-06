<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recupere os dados do formulário
  $nome = $_POST["nome"];
  $endereco = $_POST["endereco"];
  $bairro = $_POST["bairro"];
  $cidade = $_POST["cidade"];
  $telefone = $_POST["telefone"];
  $sexo = $_POST["sexo"];
  $estado_civil = $_POST["estado_civil"];
  $medicamento = $_POST["medicamento"];
  $problema_saude = $_POST["problema_saude"];
  $igreja = $_POST["igreja"];
  $pastor = $_POST["pastor"];
  $familiar_contato = $_POST["familiar_contato"];
  $valor_encontro = $_POST["valor_encontro"];
  $forma_pagamento = $_POST["forma_pagamento"];

  // Configurações do email
  $to = "eduardocechinel07@gmail.com"; // Email de destino
  $subject = "Novo formulário de inscrição"; // Assunto do email

  // Monta o corpo do email
  $message = "Nome: $nome\n";
  $message .= "Endereço: $endereco\n";
  $message .= "Bairro: $bairro\n";
  $message .= "Cidade: $cidade\n";
  $message .= "Telefone: $telefone\n";
  $message .= "Sexo: $sexo\n";
  $message .= "Estado Civil: $estado_civil\n";
  $message .= "Toma algum medicamento: $medicamento\n";
  $message .= "Tem algum problema de saúde: $problema_saude\n";
  $message .= "Nome da Igreja onde congrega: $igreja\n";
  $message .= "Nome do seu Pastor: $pastor\n";
  $message .= "Nome e telefone de um familiar próximo para contato: $familiar_contato\n";
  $message .= "Valor do Encontro: R$$valor_encontro\n";
  $message .= "Forma de Pagamento: $forma_pagamento\n";

  // Configurações adicionais do email
  $headers = "From: nome_do_seu_site@example.com"; // Email do remetente

  // Envie o email
  if (mail($to, $subject, $message, $headers)) {
    // Email enviado com sucesso
    $success_message = "E-mail enviado com sucesso!";
  } else {
    // Erro ao enviar o email
    $error_message = "Erro ao enviar o e-mail.";
  }
}
?>