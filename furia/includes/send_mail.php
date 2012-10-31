<?php
/**
 * Envia email do feedback (via Ajax).
 * 
 * <p>Validamos o email do remetente enviando uma msg para ele.
 * se obtivermos sucesso então enviamos email ao DevFuria.</p>
 */



/**
 * Session
 */
session_start();



/**
 * Receber os dados
 */
$_POST['id']       = isset($_POST['id'])       ? $_POST['id']       : null ;
$_POST['contato']  = isset($_POST['contato'])  ? $_POST['contato']  : null ;
$_POST['email']    = isset($_POST['email'])    ? $_POST['email']    : null ;
$_POST['feedback'] = isset($_POST['feedback']) ? $_POST['feedback'] : null ;
$_POST['url']      = isset($_POST['url'])      ? $_POST['url']      : null ;


/**
 * Validando o identificador
 */
# checa o id
if( $_SESSION['id'] != $_POST['id']  ){
    echo "fail";
    die();
}
# checa se veio email
if( !$_POST['email'] ){
    echo "fail";
    die();
}
# checa se veio email
if( !$_POST['feedback'] ){
    echo "fail";
    die();
}



/**
 * Enviar email para remetente.
 */
$from    = "feedback@devfuria.com.br";
$to      = $_POST['email'];
$subject = "Site: DevFuria - mensagem";
$message = "A devfuria agradeçe seu feedback.<br /> www.devfuria.com.br";
$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: $from\n";
$headers .= "Reply-To: $from\n";
$res = mail($to, $subject, $message, $headers);

/**
 * Conseguimos enviar o email?
 */
if( !$res ){
    echo "fail";
    die();
}


/**
 * Enviar email para a DevFuria
 */
$from    = $_POST['email'];
$to      = "feedback@devfuria.com.br";
$subject = "DevFuria - mensagem";
$message = $_POST['contato'] . " say: \n" . $_POST['feedback'] . "\n" . $_POST['url'];

$headers  = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: $from\n";
$headers .= "Reply-To: $from\n";
$headers .= "Cc: flaviomicheletti@hotmail.com";

$res = mail($to, $subject, $message, $headers);

/**
 * Conseguimos enviar o email?
 */
if( !$res ){
    echo "fail";
    die();
}
?>
