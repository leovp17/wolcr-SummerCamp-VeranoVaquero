<?php

session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	$success='<h2>Gracias!</h2><p>Sus datos han sido enviados.<br/>Pronto nos pondremos en contacto con usted.</p>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Verano Vaquero 2012 - 2013 | Palabra de Vida Costa Rica</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- 1140px Grid styles for IE -->
<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

<!-- The 1140px Grid - http://cssgrid.net/ -->
<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />

<!-- Your styles -->
<link rel="stylesheet" href="css/reset.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" href="css/landing.css" type="text/css" media="screen" />

<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
<script type="text/javascript" src="js/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<!-- formulario -->
<link rel="stylesheet" type="text/css" href="css/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<script type="text/javascript" src="js/jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="js/formValidator/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
</head>

<body>
<!-- header section -->

<div id="header" class="container">
  <ul id="nav" class="row">
    <li class="onecol"></li>
    <li id="schedule" class="twocol"><a href="#fechas">Fechas</a></li>
    <li id="prices" class="twocol"><a href="#precios">Precios</a></li>
    <li id="logo" class="twocol"><a href="index.html">Palabra de Vida Costa Rica</a></li>
    <li id="photos" class="twocol"><a href="https://www.facebook.com/media/set/?set=a.359060814105586.97109.129904087021261&type=3">Fotos</a></li>
    <li id="contact" class="twocol"><a href="#reserve">Contacto</a></li>
    <li class="onecol last"></li>
  </ul>
  <div id="banner" class="row">
    <div class="onecol"></div>
    <h1 class="fourcol"> <span id="verano">
      <div>VERANO</div>
      </span> <span id="vaquero">
      <div>VAQUERO</div>
      </span> <span id="dosmiltrece">
      <div>2013</div>
      </span> </h1>
    <div id="cowboy" class="threecol"></div>
    <div class="threecol">
      <h5 id="disfruta">Disfruta de la mejor semana de tu vida</h5>
      <h5 id="aparta">Aparta ya<br>
        tu lugar</h5>
      <div id="cnreservar"> <a class="gradient" id="reservar" href="#reserve">RESERVAR</a> </div>
      <div class="onecol last"></div>
    </div>
  </div>
</div>

<!-- Content section -->
<div id="content"  class="container"> 
  <!-- fechas section --> 
  <a id="fechas"></a>
  <div id="fechas" class="row">
    <h2 class="twelvecol">Fechas</h2>
    <ul>
      <li class="threecol">
        <div class="uno">
          <h3>Jovenes Mayores</h3>
          <p>26 - 29 Diciembre 2012<br />
            +21 a&ntilde;os</p>
        </div>
      </li>
      <li class="threecol">
        <div class="dos">
          <h3>Jovenes</h3>
          <p>7 - 12 Enero 2013<br />
            12-20 a&ntilde;os</p>
        </div>
      </li>
      <li class="threecol">
        <div class="tres">
          <h3>Jovenes</h3>
          <p>14 - 19 Enero 2013<br />
            12-20 a&ntilde;os</p>
        </div>
      </li>
      <li class="threecol last">
        <div class="cuatro">
          <h3>Ninos</h3>
          <p>21 - 24 Enero 2013<br />
            7-11 a&ntilde;os</p>
        </div>
      </li>
    </ul>
  </div>
  
  <!-- Precios section --> 
  <a id="precios"></a>
  <div id="prices" class="row">
    <h2 class="twelvecol">Precios</h2>
    <p class="twelvecol">Aprovecha las siguientes promociones que ponemos a tu disposici&oacute;n y aparta tu lugar ya mismo!</p>
    <ul id="promo">
      <li class="uno fourcol">
        <p>Julio a Agosto*<br />
          Costo: 35.000 col.<br />
          Apartar con 5.000 col.</p>
      </li>
      <li class="dos fourcol">
        <p>Setiembre a Octubre*<br />
          Costo: 40.000 col.<br />
          Apartar con 10.000 col.</p>
      </li>
      <li class="tres fourcol last">
        <p>Noviembre a 15 Diciembre*<br />
          Costo: 40.000 col.<br />
          Apartar con 15.000 col.</p>
      </li>
      <li class="cuatro fourcol">
        <p>15 Diciembre a Enero*<br />
          Costo: 50.000 col.<br />
          Apartar con 15.000 col.</p>
      </li>
      <li class="cinco fourcol">
        <p>Semanas<br />
          J&oacute;venes Mayores y Ni&ntilde;os<br />
          Costo: 30.000 col.</p>
      </li>
    </ul>
    <p class="footnote twelvecol">*Para hacer v&aacute;lida la promoci&oacute;n debes de pagar 5000 colones por mes una vez que hayas apartado tu lugar para mantener el valor de la misma.<br />
      <br />
      Promociones no aplican para semana de J&oacute;venes Mayores ni de ni&ntilde;os.</p>
  </div>
</div>
<!-- footer section -->
<div id="footer" class="container">
  <div class="row">
    <h2 class="twelvecol">Contacto<a id="reserve"></a></h2>
    <p class="threecol">Palabra de Vida Costa Rica<br />
      Tels. 2250-1212 | 8822-7711<br />
      Hacienda: 26620626<br />
      Encuentranos en <a href="https://www.facebook.com/pages/Palabra-de-Vida-Costa-Rica/129904087021261" target="_blank">Facebook</a></p>
    <span class="threecol"></span>
    <div id="form-container" class="twelvecol last">
      <form id="contact-form" name="contact-form" method="post" action="submit.php">
        <table width="100%" border="0" cellspacing="0" cellpadding="5">
          <tr>
            <td ><label for="name">* Nombre Completo:</label></td>
            <td ><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?=$_SESSION['post']['name']?>" /></td>
            <td  id="errOffset">&nbsp;</td>
          </tr>
          <tr>
            <td ><label for="company">* Iglesia:</label></td>
            <td ><input type="text" class="validate[required,custom[onlyLetter]]" name="company" id="company" value="<?=$_SESSION['post']['company']?>" /></td>
            <td  id="errOffset">&nbsp;</td>
          </tr>
          <tr>
            <td><label for="country">* Pa&iacute;s:</label></td>
            <td><select name="country" id="country">
                <option value="" selected="selected"> - Elija un pa&iacute;s -</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value=""> ----------------- </option>
                <option value="Panama">Panam&aacute;</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Honduras">Honduras</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Mexico">M&eacute;xico</option>
              </select></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label for="areacode">* C&oacute;digo de &aacute;rea:</label></td>
            <td><input type="text" class="validate[required,custom[onlyNumber]]" name="areacode" id="areacode" value="<?=$_SESSION['post']['areacode']?>" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label for="phone">* Tel&eacute;fono:</label></td>
            <td><input type="text" class="validate[required,custom[telephone]]" name="phone" id="phone" value="<?=$_SESSION['post']['phone']?>" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><label for="email">* Email:</label></td>
            <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?=$_SESSION['post']['email']?>" /></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td valign="top"><label for="message">* Message</label></td>
            <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?>
</textarea></td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td><label for="captcha">*
                <?=$_SESSION['n1']?>
                +
                <?=$_SESSION['n2']?>
                =</label></td>
            <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td valign="top">&nbsp;</td>
            <td colspan="2"><input type="submit" name="button" id="button" value="Enviar" />
              <input type="reset" name="button2" id="button2" value="Limpiar" />
              <?=$str?>
              <img id="loading" src="images/ajax-load.gif" width="16" height="16" alt="loading" /></td>
          </tr>
        </table>
      </form>
      <?=$success?>
    </div>
  </div>
</div>
<div id="pie" class="row"> Palabra de Vida Costa Rica | Derechos Reservados 2012 <a href="http://www.wolcr.org/webmail" class="email-interno" target="_blank">Webmail</a> <br />
      Diseñado por: <a href="http://www.leovp.com" target="_blank">leovp.com</a></div>
</body>
</html>
