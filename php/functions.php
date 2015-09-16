<?
function sendEmailLead($data_sendEmailLead){

	global $pdo;
	global $table;

	$body2 = "ID: <b>".CLIENT."</b><br>";
	$body2 .= "Nombre: <strong>" . $data_sendEmailLead[nombre] . "</strong><br />";
    $body2 .= "Apellido: <strong>" . $data_sendEmailLead[apellido] . "</strong><br />";
	$body2 .= "Teléfono: <strong>" . $data_sendEmailLead[telefono] . "</strong><br />";
	$body2 .= "Correo: <strong>" . $data_sendEmailLead[email] . "</strong><br />";
	$body2 .= "<br /> <br /> La Loma Gran Reserva";

	$body = "<body style='font-size:12px; font-family:Arial, Verdana; color:#333333;'>" . utf8_decode($body2) . "</body>";

	try {

            require_once("mandrill/src/Mandrill.php");
            $mandrill = new Mandrill('X9j55u4TZA0q9pUvPGdSMA');

            //echo $data_sendEmailLead[argmon];

            if($data_sendEmailLead[argmon]==""){
                $subject = SUBJECTLEAD;
            }else{
                $subject = SUBJECTLEAD." -- ".$data_sendEmailLead[argmon];
            }


            $AddAddress = array();

            $mailrecipients = explode(",", MAILRECIPIENTS);
            foreach ($mailrecipients as $recipient) {
                    if($data_sendEmailLead[argmon] == ""){
                        // $smtp->AddAddress($recipient);
            			array_push($AddAddress, array(
                			"email" => $recipient,
                			"type" => 'to'
                        ));
                    }
            }

            // always send to bcc
            // array_push($AddAddress, array(
            //     "email" => "corre0@dominio.mx",
            //     "type" => 'to'
            // ));

            $message = array(
            'html' => utf8_encode($body),
            'subject' => $subject,
            'from_email' => "no-reply@laloma-granreserva.com",
            'from_name' => CLIENT,
            'to' => $AddAddress,
            'headers' => "",
            'bcc_address' => $bcc,
            'important' => false,
            'track_opens' => true,
            'track_clicks' => true,
            'auto_text' => true,
            'auto_html' => true,
            'inline_css' => true,
            'url_strip_qs' => true,
            'preserve_recipients' => true,
            'tags'=> array(
              'Lead_casasAtlixco'
            )
            );

            $async = true;
            $result = $mandrill->messages->send($message, $async);

            // print_r($result);


    } catch(Mandrill_Error $e) {
        // Mandrill errors are thrown as exceptions
        echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
        // A mandrill error occurred: Mandrill_PaymentRequired - This feature is only available for accounts with a positive balance.
        throw $e;
    }
}
?>