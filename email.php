<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';


if(isset($_POST['submit'])){
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $messagem = $_POST['mensagem'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'khi.lucass@gmail.com';
    $mail->Password = '9982361kKHI!1810'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('khi.lucass@gmail.com'); 
    $mail->addAddress('luukarai@gmail.com');

    
    $mail->isHTML(true);
    $mail->Subject = 'Contato de portfólio';
    $mail->Body = "<h3>Nome : $nome <br>Email: $email <br>Mensagem : $messagem</h3>";

    $mail->send();

    $mail->ClearAddresses();
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject    = 'Confirmação de contato';
    $mail->Body       = '<div>
                          <h2>Obrigado por entrar em contato</h2><br/>
                          <p>Seu email foi enviado certinho, estarei retornando em breve.</p>
                        </div>';
    $mail->AltBody    = 'Seu email foi enviado certinho, estarei retornando em breve.';
    $mail->Send();


  } catch (Exception $e){
    $alert = '<div class="alerta-erro">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
  

}
?>