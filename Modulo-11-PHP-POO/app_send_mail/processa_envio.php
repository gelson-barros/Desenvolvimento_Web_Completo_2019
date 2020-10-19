<?php 

require "./bibliotecas/PHPMailer/Exception.php";
require "./bibliotecas/PHPMailer/OAuth.php";
require "./bibliotecas/PHPMailer/PHPMailer.php";
require "./bibliotecas/PHPMailer/POP3.php";
require "./bibliotecas/PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/
class Mensagem {
    private $para = null;
    private $assunto = null;
    private $mensagem = null;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function mensagemValida(){
        if(empty($this->para) || empty($this->assunto) || empty($this->mensagem)){
            return false;
        }

        return true;
    }
}

$mensagem = new Mensagem();
$mensagem->__set('para', $_POST['para']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem', $_POST['mensagem']);
/*
echo '<hr>';
echo '<pre>';
print_r($mensagem);
echo '</pre>';
*/

if(!$mensagem->mensagemValida()){
    echo 'Mensagem é não Valida';
    die();
}

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nicosbrilho@gmail.com';                 // SMTP username
    $mail->Password = 'RedDevil8';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nicosbrilho@gmail.com', 'Web Completo Rementente');
    $mail->addAddress('nicosbrilho@gmail.com', 'Web Completo Destinatario');     // Add a recipient
    
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Oi. Eu sou o assunto';
    $mail->Body    = 'Oi. Eu sou o conteúdo do <strong>e-mail</strong>';
    $mail->AltBody = 'Oi. Eu sou o conteúdo do e-mail';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Não foi possível enviar este e-mail! Por favor tente novamente mais tarde. ';
    echo 'Detalhes do erro: ' . $mail->ErrorInfo;
}
?>