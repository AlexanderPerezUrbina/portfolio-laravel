<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Rules\Captcha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => 'required',
            'g-recaptcha-response' => new Captcha(),
        ],
        [
            'g-recaptcha-response.required' => 'Necesitas confirmar el ReCaptcha',
            'name.required' => 'Tienes que poner tu nombre',
            'email.required' => 'El correo electronico es obligatorio',
            'email.email' => 'Asegurate de que el correo electronico sea valido',
            'message.required' => 'El mensaje es obligatorio',
            'phone.required' => 'Tu numero de telefono es obligatorio',
        ]);

        if (!$data['g-recaptcha-response']) {
            return response()->json([
                'message' => 'The ReCaptcha field is required',
            ], 422);
        }

        Mail::to(env('MAIL_TO_ADDR'))->send(new Contact($data));

        return response()->json(['message' => 'El mensaje se ha enviado correctamente.'], 200);
    }
}
