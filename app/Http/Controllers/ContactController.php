<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../../vendor/autoload.php';

class ContactController extends Controller
{
    public function confirmEmailContact()
    {
        return view('includes.confirmEmailContact');
    }

    public function sendInfoContact (Request $request)
    {
        $user = \Auth::user();
        $id = $user->id;

        $validate = $this->validate($request, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'textarea' => ['required', 'string', 'max:255'],
        ]);

        $subject = $request->input('name');
        $email = $request->input('email');
        $textarea = $request->input('textarea');

        $mail = new PHPMailer(true);

        try {
            //Server settings
//            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Host       = env('MAIL_HOST');                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = env('MAIL_USERNAME');                     // SMTP username
            $mail->Password   = env('MAIL_PASSWORD');                               // SMTP password
            $mail->Port       = env('MAIL_PORT');                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($email, $subject);
            $mail->addAddress('webpunchline@gmail.com');     // Add a recipient
//            $mail->addAddress('ellen@example.com');               // Name is optional
//            $mail->addReplyTo('info@example.com', 'Information');
//            $mail->addCC('cc@example.com');
//            $mail->addBCC('bcc@example.com');

            // Attachments
//            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject.' - pregunta: ';
            $mail->Body    = $textarea;
//            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            return redirect()->route('confirmEmailContact')->with(['messageSuccess' => 'El email se ha enviado correctamente ']);
        } catch (Exception $e) {
            return redirect()->route('confirmEmailContact')->with(['messageDanger' => 'El email no se ha enviado correctamente ']);
        }
    }
}

