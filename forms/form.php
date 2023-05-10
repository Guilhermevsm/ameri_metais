<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$assunto = $_POST["assunto"];

$mensagem = "Mensagem recebida atravez do site.\nDe: $nome.\nE-mail: $email.\nTelefone: $telefone.\nMensagem: $assunto.";

//mail("claudiobucar@alvesebucar.com.br", "Contato Site", $mensagem);


try{
    require("/home2/alve2182/public_html/forms/PHPMailer.php");
    require("/home2/alve2182/public_html/forms/SMTP.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.titan.email";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "claudiobucar@alvesebucar.com.br";
    $mail->Password = "@Senha2023";
    $mail->SetFrom("claudiobucar@alvesebucar.com.br");
    $mail->Subject = "Contato Site";
    $mail->Body = $mensagem;
    $mail->AddAddress("claudiobucar@alvesebucar.com.br");
    $mail->Send();
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header('location: http://alvesebucar.com.br/#fale_conosco');
die();

?>