<?php

namespace App\Controllers;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use GuzzleHttp\Client;
require_once APPPATH . "/ThirdParty/phpMailer/Exception.php";
require_once APPPATH . "/ThirdParty/phpMailer/PHPMailer.php";
require_once APPPATH . "/ThirdParty/phpMailer/SMTP.php";

require_once APPPATH . "../vendor/guzzlehttp/guzzle/src/Client.php";

class Home extends BaseController
{
    public $session;

    public function __construct() {
        $this->session = $this->getSession(); // Asignar el resultado de la función a la variable
    }

    public function getSession() {
        // Aquí podrías llamar a la función 'session()' o realizar cualquier otra operación
        return session(); // Ejemplo: llamando a la función 'session()' para obtener la sesión
    }

    


    public function index()
    {



        return view('index');
    }
    public function success()
    {



        return view('success');
    }

    public function acerca()
    {



        return view('about');
    }
    public function contacto()
    {



        return view('contact');
    }

    public function Careers()
    {


        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.manatal.com/open/v3/career-page/ncq/jobs/');
        $body = $response->getBody();
        $content = $body->getContents();
        $data = json_decode($content, true);





        $data = ["data" => $data];
        $session = session();
        $session->set($data);
        return view('Careers', $data);
    }



    public function jobs()
    {


        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.manatal.com/open/v3/career-page/ncq/jobs/');
        $body = $response->getBody();
        $content = $body->getContents();
        $data = json_decode($content, true);





        $data = ["data" => $data];
      
        $this->session->set($data);
        return view('empleos', $data);
    }

    public function job()
    {
        $id = $_POST['id'];

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.manatal.com/open/v3/career-page/ncq/jobs/' . $id . '/');
        $body = $response->getBody();
        $content = $body->getContents();
        $data = json_decode($content, true);

        $data = ["data" => $data];
       
        $this->session->set($data);
        return view('job', $data);
    }


    public function aplicar()
    {

        $id = $_POST['id'];

        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];

        // Obtener el contenido y el nombre del archivo PDF subido
        $fileContent = file_get_contents($_FILES['fileInput']['tmp_name']);
        $filename = $_FILES['fileInput']['name'];

        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://api.manatal.com/open/v3/career-page/ncq/jobs/'.$id.'/apply/', [
            'multipart' => [
                [
                    'name' => 'full_name',
                    'contents' => $full_name
                ],
                [
                    'name' => 'email',
                    'contents' => $email
                ],
                [
                    'name' => 'phone_number',
                    'contents' => $phone_number
                ],
                [
                    'name' => 'resume',
                    'filename' => 'CV'.$full_name,
                    'contents' => $fileContent,
                    'headers' => [
                        'Content-Type' => 'application/pdf'
                    ]
                ]
            ],
            'headers' => [
                'accept' => 'application/json',
            ],
        ]);

        return view('success');
    }


    public function contactenos(){

        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $mensaje = $_POST['mensaje'];

        $message = "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>
        <tbody>
            <tr>
                <td>
                    <table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width: 100%; background-color: #fff; font-family: sans-serif'>
                        <thead>
                            <tr>
                                <th colspan='2' style='background: linear-gradient(135deg, #1f33e0, #09e0bc); font-family: sans-serif; color: #fefefe; font-size: 25px; padding: 15px; text-align: center; vertical-align: middle; display: flex; justify-content: center; align-items: center;'>Nuevo contacto Careers NCQ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan='2'>
                                    <div style='padding-left: 20px'>
                                       
                                        <p style='font-size: 15px; font-family: sans-serif'>Les informamos que se ha recibido un nuevo contacto a través del formulario de la página de Careers NCQ. A continuación, los detalles:</p>
                                        <ul style='padding-left: 60px'>
                                            <li> <strong>Nombre: </strong>$full_name </li>
                                            <li> <strong>Correo:</strong> $email </li>
                                            <li> <strong>Teléfono: </strong> $phone_number </li>
                                            <li> <strong>Mensaje:</strong> $mensaje</li>
                                        </ul>
                                        <br> Por favor, tomen nota y realicen el seguimiento necesario. <br> <br>
                                        <font color='#888888'><br> <b><a href='https://www.ncq.co.cr/Careers' style='text-decoration: none; color: black'>Careers NCQ</a></b> <br></font>
                                        <p></p> <br>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr height='50'>
                                <th colspan='4' style='font-size: 15px; font-family: sans-serif; padding: 25px; background-color: #000000; text-align: justify; color: #ffffff; font-weight: 300; line-height: 20px'></th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>";
    
      
		$mail = new PHPMailer(true);
		try {

			$mail->SMTPDebug = 0;
			$mail->isSMTP();
			$mail->Host       = 'smtp.gmail.com';
			$mail->SMTPAuth   = true;
			$mail->Username   = 'empleo@ncq.co.cr';
			$mail->Password   = 'empleo4500705';
			$mail->SMTPSecure = 'ssl';
			$mail->Port       = 465;
			$mail->setFrom('empleo@ncq.co.cr', 'Careers NCQ');
			$mail->addAddress($email);     //Add a recipient
			$mail->addCC("eleiton@ncq.co.cr", mb_convert_encoding("Ever Leitón", "ISO-8859-1", "UTF-8"));
			$mail->isHTML(true);
			$mail->Subject =  mb_convert_encoding('Nuevo Contacto | Careers NCQ', "ISO-8859-1", "UTF-8");
			$mail->Body    = mb_convert_encoding($message, "ISO-8859-1", "UTF-8");
			$mail->send();

    } catch (Exception $e) {
        print_r($e);
        return view('errors/html/error_404');
    }

}
}
