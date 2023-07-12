<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$assunto = $_POST["mensagem"];

$mensagem = "Mensagem recebida atravez do site. \nDe: $nome. \nE-mail: $email. \nTelefone: $telefone. \nMensagem: $assunto.";

//mail("claudiobucar@alvesebucar.com.br", "Contato Site", $mensagem);


try{
    require("/home2/amerim76/public_html/email/PHPMailer.php");
    require("/home2/amerim76/public_html/email/SMTP.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "--------";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "contato@amerimetais.com.br";
    $mail->Password = "---------";
    $mail->SetFrom("contato@amerimetais.com.br");
    $mail->Subject = "Contato Site";
    $mail->Body = $mensagem;
    $mail->AddAddress("contato.amerimetais@gmail.com");
    $mail->Send();
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
$sucesso="Mensagem enviada";
header("location: ../contato/?mensagem=$sucesso");
die();

?>
