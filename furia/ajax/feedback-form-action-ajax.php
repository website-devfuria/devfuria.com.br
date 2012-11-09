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
isset($_SESSION['id']) or die;


/**
 * Receber os dados
 */
$_POST['id']       = isset($_POST['id'])       ? $_POST['id']       : null ;
$_POST['contato']  = isset($_POST['contato'])  ? $_POST['contato']  : null ;
$_POST['email']    = isset($_POST['email'])    ? $_POST['email']    : null ;
$_POST['feedback'] = isset($_POST['feedback']) ? $_POST['feedback'] : null ;
$_POST['url']      = isset($_POST['url'])      ? $_POST['url']      : null ;


try {

    /**
     * Validações
     */
    # checa o id
    if( $_SESSION['id'] != $_POST['id'] ){ throw new Exception("ID do form não confere !!!"); }
    
    # checa se veio email
    if( !$_POST['email'] ){ throw new Exception("Preencha o email !!!"); }
   
    # checa se veio menssagem
    if( !$_POST['feedback'] ){ throw new Exception("Escreva alguma coisa !!!"); }



    /**
     * Enviar email para remetente.
     */
    $from     = "feedback@devfuria.com.br";
    $to       = $_POST['email'];
    $subject  = "Site: DevFuria - mensagem";
    $message  = "A devfuria agradeçe seu feedback.<br /> www.devfuria.com.br";
    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: $from\n";
    $headers .= "Reply-To: $from\n";
    $res = mail($to, $subject, $message, $headers);

    /**
     * Conseguimos enviar o email?
     */
    if( !$res ){ throw new Exception("Email inválido !!!"); }


    /**
     * Enviar email para a DevFuria
     */
    $from     = $_POST['email'];
    $to       = "feedback@devfuria.com.br";
    $subject  = "DevFuria - mensagem";
    $message  = $_POST['contato'] . " say: \n" . $_POST['feedback'] . "\n" . $_POST['url'];

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "From: $from\n";
    $headers .= "Reply-To: $from\n";
    $headers .= "Cc: flaviomicheletti@hotmail.com";

    $res = mail($to, $subject, $message, $headers);

    /**
     * Conseguimos enviar o email?
     */
    if( !$res ){ throw new Exception("Algo deu errado !!!"); }
    
} catch (Exception $e) {
    
    echo json_encode( $e->getMessage() );
    
}
?>