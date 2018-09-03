<?php
if ((isset($_POST['nombre'])) && (strlen(trim($_POST['nombre'])) > 0)) {
	$nombre = stripslashes(strip_tags($_POST['nombre']));
} else {$nombre = 'No suministrado';}

if ((isset($_POST['empresa'])) && (strlen(trim($_POST['empresa'])) > 0)) {
	$empresa = stripslashes(strip_tags($_POST['empresa']));
} else {$empresa = 'No suministrado';}

if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {
	$email = stripslashes(strip_tags($_POST['email']));
} else {$email = 'No suministrado';}

if ((isset($_POST['telefono'])) && (strlen(trim($_POST['telefono'])) > 0)) {
	$telefono = stripslashes(strip_tags($_POST['telefono']));
} else {$telefono = 'No suministrado';}

if ((isset($_POST['pais'])) && (strlen(trim($_POST['pais'])) > 0)) {
	$pais = stripslashes(strip_tags($_POST['pais']));
} else {$pais = 'No suministrado';}

if ((isset($_POST['ciudad'])) && (strlen(trim($_POST['ciudad'])) > 0)) {
	$ciudad = stripslashes(strip_tags($_POST['ciudad']));
} else {$ciudad = 'No suministrado';}



if ((isset($_POST['mensaje'])) && (strlen(trim($_POST['mensaje'])) > 0)) {
	$mensaje = stripslashes(strip_tags($_POST['mensaje']));
} else {$mensaje = 'No suministrado';}

if ((isset($_POST['mensaje_cliente'])) && (strlen(trim($_POST['mensaje_cliente'])) > 0)) {
	$mensaje_cliente = stripslashes(strip_tags($_POST['mensaje_cliente']));
} else {$mensaje_cliente = '';}

if ((isset($_POST['titulo_cliente'])) && (strlen(trim($_POST['titulo_cliente'])) > 0)) {
	$titulo_cliente = stripslashes(strip_tags($_POST['titulo_cliente']));
} else {$titulo_cliente = '';}

if ((isset($_POST['correo_empresa'])) && (strlen(trim($_POST['correo_empresa'])) > 0)) {
	$correo_empresa = stripslashes(strip_tags($_POST['correo_empresa']));
} else {$correo_empresa = 'mail@example.com';}

if ((isset($_POST['nombre_correo_empresa'])) && (strlen(trim($_POST['nombre_correo_empresa'])) > 0)) {
	$nombre_correo_empresa = stripslashes(strip_tags($_POST['nombre_correo_empresa']));
} else {$nombre_correo_empresa = 'Contacto';}

if ((isset($_POST['asunto'])) && (strlen(trim($_POST['asunto'])) > 0)) {
	$asunto = stripslashes(strip_tags($_POST['asunto']));
} else {$asunto = 'Contacto desde Formulario Web';}

$body_head = '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body style="margin:0; padding:0">';

if($mensaje_cliente != '') {
	$mensaje_cliente = str_replace("{nombre_cliente}",$nombre,$mensaje_cliente);
	$customer_head = '';
}  else {
	$customer_head = '';
}

ob_start();
?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family:'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, sans-serif; font-size:14px; color:#5a5a5a; background-color:#f3f3f3">
    <tbody>
        <tr>
            <td style="color:#FFFFFF; background-color:#00468c">
                <table width="100%" border="0" style="padding:15px 20px; color:#FFFFFF;">
                    <tbody>
                        <tr>
                            <td width="50%" valign="middle">
                                <a href="http://www.promindeco.com" target="_blank">
									<img src="http://josedavidsanchez.com/avances/solutec/test/images-solutec/logo-solutec-group.png" width="210" height="60" alt="Promindeco">
								</a>
                            </td>
                            <td width="50%" valign="middle" style=" text-align:right;">
                                <div style="color:#fff;">Saludos</div>
                                <div>									
                                    <?=$nombre;?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>

        <tr>
            <td style="padding:15px">
                <div>
                    <?=$mensaje_cliente;?>
                </div>
            </td>
        </tr>

        <tr style="background-color:#f3f3f3">
            <td style=" width:100%; padding:20px;">

                <table width="100%" border="0" cellpadding="0" cellspacing="0" style="color:#5a5a5a; padding:20px; background-color:#ffffff;">
                    <tbody>
                        <tr>
                            <td width="50%" style="padding: 10px 0">
                                <div style="margin-bottom: 5px"><strong>Nombre:</strong></div>
                                <div>
                                    <?=$nombre;?>
                                </div>
                            </td>
                            <td width="50%" valign="top" colspan="2" style="padding: 10px 0">
                                <div><strong>Empresa</strong></div>
                                <div>
                                    <?=$empresa;?>
                                </div>
                            </td>
                        </tr>
						
						<tr>
						<td width="100%" valign="top" colspan="3" style="padding: 10px 0">
                                <div><strong>Email</strong></div>
                                <div>
                                    <?=$email;?>
                                </div>
                            </td>						
						</tr>

                        <tr>
							<td width="33.33%" valign="top" style="padding: 10px 0">
                                <div style="margin-bottom: 5px"><strong>Telefono</strong></div>
                                <div>
                                    <?=$telefono;?>
                                </div>
                            </td>
							
							<td width="33.33%" style="padding: 10px 0">
                                <div style="margin-bottom: 5px"><strong>Pais</strong></div>
                                <div>
                                    <?=$pais;?>
                                </div>
                            </td>
							
                            <td width="33.33%" style="padding: 10px 0">
                                <div style="margin-bottom: 5px"><strong>Ciudad</strong></div>
                                <div>
                                    <?=$ciudad;?>
                                </div>
                            </td>                            

                        </tr>

                        <tr>
                            <td width="100%" colspan="3" style="padding: 10px 0">
                                <div style="margin-bottom: 5px"><strong>Mensaje</strong></div>
                                <div>
                                    <?=$mensaje;?>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </td>
        </tr>

        <tr>
            <td colspan="2" style=" color:white; text-align:center; padding:20px; background-color:#00468c">
                <div style="margin-bottom:10px;">
                </div>
                <div>Copyright 2018 Solutec LLC.<br>
Todos los derechos reservados</div>
            </td>
        </tr>
    </tbody>
</table>

    

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/56ead616b2282a2a6ce4aee0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->	
    
<!-- Cookie Bar -->
    <div class="notice-cookies shadow-out-03 col-100">
        <aside class="container"></aside>
    </div>
    <!-- END Cookie Bar -->	

</body>
</html>
<?
$body_main = ob_get_contents();

$body = $body_head . $body_main;
$body_customer = $body_head . $customer_head . $body_main;;

if($email == 'No suministrado') {
	$email = 'mail@example.com';
}

$to = $email;
$email = $email;
$fromaddress = $email;
$fromname = $nombre;

require("phpmailer.php");

///////////////////////////////////////
/////// Envío de correo empresa ///////

$mail = new PHPMailer();

$mail->From     = $email;
$mail->FromName = $nombre;
$mail->AddAddress($correo_empresa, $nombre_correo_empresa);

$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->Subject  =  $asunto;
$mail->Body     =  $body;
$mail->AltBody  =  "Cuerpo del mensaje";

if(!$mail->Send()) {
	$recipient = $correo_empresa;
	$subject = 'Envio fallido';
	$content = $body;	
	mail($recipient, $subject, $content, "From: $email\r\nReply-To: $email\r\nX-Mailer: DT_formmail");
}
//////////////////////////////////////

//////////////////////////////////////
///// Envío de correo al cliente /////
if ((isset($_POST['email'])) && (strlen(trim($_POST['email'])) > 0)) {

	$mailc = new PHPMailer();

	$email = stripslashes(strip_tags($_POST['email']));
	$mailc->From = $correo_empresa;
	$mailc->FromName = $nombre_correo_empresa;
	$mailc->AddAddress($email,$nombre);

	$mailc->WordWrap = 50;
	$mailc->IsHTML(true);

	$mailc->Subject  =  $asunto;
	$mailc->Body     =  $body_customer;
	$mailc->AltBody  =  "Cuerpo del mensaje";

	if(!$mailc->Send()) {
		$recipient = $email;
		$subject = 'Envio fallido';
		$content = $body_customer;	
		mail($recipient, $subject, $content, "From: $correo_empresa\r\nReply-To: $correo_empresa\r\nX-Mailer: DT_formmail");
		exit;
	}
}
//////////////////////////////////////

?>
