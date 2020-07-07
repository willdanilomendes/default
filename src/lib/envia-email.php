<?

define(U , '../../');

$codigo = rand();


//Página onde o usuário será redirecionado se nao validar o captcha.
if(!isset($_POST['retorno_err'])) {
$retorno_err = "index.php?error";
} else {
$retorno_err = $_POST['retorno_err'];
}

//Destinatário do Email, caso seja mais de 1, separe os emails por virgula.
if(!isset($_POST['destino'])) {
$destino = "contato@forgedesign.com.br,willian.costa@forgedesign.com.br,michael.oliveira@forgedesign.com.br";
} else {
$destino = $_POST['destino'];
}

//Assunto do email
if(!isset($_POST['assunto'])) {
$assunto = "CONTATO Via Site ForgeDesign" . $codigo ;
} else {
$assunto = $_POST['assunto'];
}

//Página onde o usuário será redirecionado após o envio.
if(!isset($_POST['retorno'])) {
$retorno = U . "contato/enviado.php";
} else {
$retorno = $_POST['retorno'];
}

//Nome do remetente do email
$servidor_from = $confs['titulo'];

//Servidor SMTP
$servidor_smtp = "mail.forgedesign.com.br";

//Usuário do email
$servidor_usuario = "enviar@forgedesign.com.br";

//Senha do email
$servidor_senha = "x}ujPs[8XRjH";

//Porta do Servidor. Geralmente 587.
$servidor_porta = 587;

//URL do Logotipo que vai no email
//$url_logotipo = "";


//NAO MEXER NAS LINHAS ABAIXO

if($_POST['check'] == "") {

$msg_body .= "<p><img src=\"$url_logotipo\" width=\"100\"></p>";
date_default_timezone_set("America/Sao_Paulo");

$msg_body .= "<p>Email enviado pelo site em " . date("d/m/Y - H:i") . "</p>";

$keys = array_keys($_POST);
$values = array_values($_POST);
$tamanho = count($_POST);
$i = 0;

$msg_body .= "<table width=\"600\" border=\"0\">";

    while($i < $tamanho) { if($keys[$i] !="destino" && $keys[$i] !="assunto" && $keys[$i] !="retorno" && $keys[$i]
        !="button" && $keys[$i] !="submit" && $keys[$i] !="input_y" && $keys[$i] !="input_x" && $keys[$i] !="form" &&
        $keys[$i] !="bntok" && $keys[$i] !="btnok" && $keys[$i] !="x" && $keys[$i] !="y" && $keys[$i] !="bntOK_x" &&
        $keys[$i] !="bntOK_y" && $keys[$i] !="check" ) { if($values[$i] !="" ) { if(is_array($values[$i])) {
        foreach($values[$i] as $servico) { $msg_body .="<tr><td width=\" 100\"><b>" . $keys[$i] . "</b></td>
        <td width=\"500\">" . $servico . "</td>
        </tr>";

        }

        } else {
        $msg_body .= "<tr>
            <td width=\"100\"><b>" . $keys[$i] . "</b></td>
            <td width=\"500\">" . @nl2br($values[$i]) . "</td>
        </tr>";
        }

        }

        $msg_body .= "</td>
        </tr>";
        }
        $i = $i + 1;
        }

        $msg_body .= "</table>";

include "class.phpmailer.php";

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";              // sets the prefix to the servier
$mail->Host = $servidor_smtp;
$mail->Port = $servidor_porta;

$mail->Username = $servidor_usuario;
$mail->Password = $servidor_senha;

$mail->From = $servidor_usuario;
$mail->FromName = $servidor_from;
$mail->Subject = $assunto;

$mail->Body = $msg_body;
$mail->AltBody = "Para ver essa mensagem, abra em um leitor de email compativel com HTML.";

$mail->CharSet = "utf-8";

$destinos = explode(",",$destino);
foreach($destinos as $para) {

$mail->AddAddress($para);

}

if(!$mail->Send()) {
echo "Problema ao enviar o email: " . $mail->ErrorInfo;
} else {
header("Location:$retorno");
}
}

?>