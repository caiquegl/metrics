<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use SendGrid\Mail\To;
use SendGrid\Mail\From;
use SendGrid\Mail\Content;
use SendGrid\Mail\Mail;
use SendGrid\Mail\Subject;
use SendGrid\Mail\MailSettings;
use SendGrid\Mail\SandBoxMode;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Color\Color;

use Illuminate\Support\Facades\View;

use SendGrid\Mail\Attachment;


class TwilioController extends Controller
{
    public function enviarMensagem(Request $request)
    {
        try {
            $twilio_sid = env('TWILIO_SID');
            $twilio_token = env('TWILIO_AUTH_TOKEN');
            $twilio_number = env('TWILIO_PHONE_NUMBER');

            $client = new Client($twilio_sid, $twilio_token);

            // $numeroDestino = $request->input('numero');
            // $mensagem = $request->input('mensagem');

            // dd($twilio_number);
            $message = $client->messages->create(
                "whatsapp:+5511966331995",
                [
                    'from' => "whatsapp:$twilio_number",
                    'body' => 'teste api living funcionando quero cerveja',
                ]
            );

            print($message->sid);
    
            // Verifica se a mensagem foi enviada com sucesso
            if ($message->status === 'sent') {
                return response()->json(['status' => 'success', 'message' => 'Mensagem enviada com sucesso']);
            } else {
                return response()->json(['status' => 'error', 'message' => 'Erro ao enviar a mensagem']);
            }

            return response()->json(['status' => 'success', 'message' => 'Mensagem enviada com sucesso']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function enviarEmail(Request $request)
    {
        $destinatario = "lchavesdesousa@gmail.com";
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("gustavo.simoes@systemhope.com.br", "Gustavo");
        $email->setSubject("Teste Email");
        $email->addTo($destinatario, "Gustavo");
        $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
        $email->addContent("text/html", "<strong>Teste de envio de email</strong>");
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            $status = $response->statusCode() . "\n";
            
            return response()->json(['status' => $status, 'message' => $response->headers()]);
        } catch (Exception $ex) {
            echo 'Caught exception: '.  $ex->getMessage();
            return response()->json(['status' => 'error', 'message' => 'Erro ao enviar e-mail']);
        }
    }

    public function enviarEmailModel($email, $uuid, $telefone)
    {

    
        $qrCode = QrCode::create($uuid)
        ->setSize(300)
        ->setMargin(10)
        ->setEncoding(new Encoding('UTF-8'))
        ->setErrorCorrectionLevel(ErrorCorrectionLevel::Low)
        ->setForegroundColor(new Color(0, 0, 0))
        ->setBackgroundColor(new Color(255, 255, 255));
        $qrCodeImage = (new PngWriter())->write($qrCode);
        $qrCodeImage->saveToFile(base_path('./public/uploads/qrcode/' . $uuid . '.png'));

     

        $destinatario = $email;
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("gustavo.simoes@systemhope.com.br", "Heineken");
        $email->setSubject("Campanha Heineken");
        $email->addTo($destinatario, "Gustavo");

        
        
        $fileContent = file_get_contents(base_path('./public/uploads/qrcode/' . $uuid . '.png'));
        $attachment = new Attachment();
        $attachment->setContent(base64_encode($fileContent)); // Converte o conteúdo do arquivo em base64
        $attachment->setType("image/png");
        $attachment->setFilename("qr_code.png");
        $attachment->setDisposition("attachment");
        $email->addContent("text/html", View::make('livewire.pages.vip', ['vip' => $uuid])->render());
        $email->addAttachment($attachment);

        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));

        $twilio_sid = env('TWILIO_SID');
        $twilio_token = env('TWILIO_AUTH_TOKEN');
        $twilio_number = env('TWILIO_PHONE_NUMBER');

        $client = new Client($twilio_sid, $twilio_token);

        // $numeroDestino = $request->input('numero');
        // $mensagem = $request->input('mensagem');

        // dd($twilio_number);


        try {
            $response = $sendgrid->send($email);
            $status = $response->statusCode() . "\n";

            $message = $client->messages->create(
                "whatsapp:+55". $telefone,
                [
                    'from' => "whatsapp:+13346001856",
                    'body' => "O link para seu QR CODE é: " . env('APP_URL') . "/living/qrcode_scan/" .  $uuid,
                ]
            );
            dd($message);
            return true;
        } catch (Exception $ex) {
            echo 'Caught exception: '.  $ex->getMessage();
            return false;
        }
    }
}    
