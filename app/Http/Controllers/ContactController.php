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
            $mail->isSMTP();
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Host       = env('MAIL_HOST');
            $mail->SMTPAuth   = true;
            $mail->Username   = env('MAIL_USERNAME');
            $mail->Password   = env('MAIL_PASSWORD');
            $mail->Port       = env('MAIL_PORT');

            //Recipients
            $mail->setFrom($email, $subject);
            $mail->addAddress(env('MAIL_FROM_ADDRESS'));
            $mail->addReplyTo($email, $subject);

            // Content
            $mail->isHTML(true);                                 
            $mail->Subject = $subject.' - pregunta: ';
            $mail->Body    = $textarea;

            $mail->send();
            return redirect()->route('confirmEmailContact')->with(['messageSuccess' => 'El email se ha enviado correctamente ']);
        } catch (Exception $e) {
            return redirect()->route('confirmEmailContact')->with(['messageDanger' => 'El email no se ha enviado correctamente ']);
        }
    }
}

