<?php

/* config start */

$emailAddress = 'wolcr@wolcr.org';

/* config end */


require "phpmailer/class.phpmailer.php";

session_name("fancyform");
session_start();


foreach($_POST as $k=>$v)
{
	if(ini_get('magic_quotes_gpc'))
	$_POST[$k]=stripslashes($_POST[$k]);
	
	$_POST[$k]=htmlspecialchars(strip_tags($_POST[$k]));
}


$err = array();

if(!checkLen('name'))
	$err[]='El campo nombre es muy corto o esta vac&iacute;o!';

if(!checkLen('email'))
	$err[]='El campo email es muy corto o esta vac&iacute;o!';
else if(!checkEmail($_POST['email']))
	$err[]='Su email no es v&aacute;lido!';

if(!checkLen('country'))
	$err[]='No ha seleccionado un pa&iacute;s!';

if(!checkLen('message'))
	$err[]='El campo de mensaje es muy corto o esta vac&iacute;o!';

if((int)$_POST['captcha'] != $_SESSION['expect'])
	$err[]='El captcha es inv&aacute;lido!';


if(count($err))
{
	if($_POST['ajax'])
	{
		echo '-1';
	}

	else if($_SERVER['HTTP_REFERER'])
	{
		$_SESSION['errStr'] = implode('<br />',$err);
		$_SESSION['post']=$_POST;
		
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	exit;
}


$msg=
'Nombre:	'.$_POST['name'].'<br />
Iglesia:	'.$_POST['company'].'<br />
Pa&iacute;s:	'.$_POST['country'].'<br />
C&oacute;digo de &aacute;rea:	'.$_POST['areacode'].'<br />
Tel&eacute;fono:	'.$_POST['phone'].'<br />
Email:	'.$_POST['email'].'<br />

Mensaje:<br /><br />

'.nl2br($_POST['message']).'

';


$mail = new PHPMailer();
$mail->IsMail();

$mail->AddReplyTo($_POST['email'], $_POST['name']);
$mail->AddAddress($emailAddress);
$mail->SetFrom($_POST['email'], $_POST['name']);
$mail->Subject = "Solicitud de Reservacion Verano Vaquero 2013, ".$_POST['name'].", ".mb_strtolower($_POST['country'])."";

$mail->MsgHTML($msg);

$mail->Send();


unset($_SESSION['post']);

if($_POST['ajax'])
{
	echo '1';
}
else
{
	$_SESSION['sent']=1;
	
	if($_SERVER['HTTP_REFERER'])
		header('Location: '.$_SERVER['HTTP_REFERER']);
	
	exit;
}

function checkLen($str,$len=2)
{
	return isset($_POST[$str]) && mb_strlen(strip_tags($_POST[$str]),"utf-8") > $len;
}

function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}

?>
