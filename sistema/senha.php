<?php
require_once("../conexao/conexao.php");

$login = "SELECT * FROM login ";

$acesso = mysqli_query($conexao,$login);

$info = mysqli_fetch_all($acesso, MYSQLI_BOTH);

$mensagem = $info[1][1];


try{
    require("/home2/amerim76/public_html/admin-site/PHPMailer.php");
    require("/home2/amerim76/public_html/admin-site/SMTP.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "-------";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "contato@amerimetais.com.br";
    $mail->Password = "-------";
    $mail->SetFrom("contato@amerimetais.com.br");
    $mail->Subject = "Senha admin";
    $mail->Body = $mensagem;
    $mail->AddAddress("contato.amerimetais@gmail.com");
    $mail->Send();
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
$sucesso="Mensagem enviada";
header("location: index.php");
die();

?>
