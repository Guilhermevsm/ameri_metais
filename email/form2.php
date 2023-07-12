<?php


$email = $_POST["email"];


$mensagem = "$email cadastrou-se para receber as novidades.";




try{
    require("/home2/amerim76/public_html/email/PHPMailer.php");
    require("/home2/amerim76/public_html/email/SMTP.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "mail.amerimetais.com.br";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "contato@amerimetais.com.br";
    $mail->Password = "ameri@Senha2023";
    $mail->SetFrom("contato@amerimetais.com.br");
    $mail->Subject = "Cadastro email novidades";
    $mail->Body = $mensagem;
    $mail->AddAddress("contato.amerimetais@gmail.com");
    $mail->Send();
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
$sucesso="Mensagem enviada";
header("location: ../?mensagem=$sucesso");
die();

?>