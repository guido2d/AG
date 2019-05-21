<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contacto;

use App\Suscriptor;

use Log;

class ContactoController extends Controller
{
    public function enviarMail(Request $request){
        $data = array(
            "nombre" => $request->get('nombre'),
            "apellido" => $request->get('apellido'),
            "email" => $request->get('email'),
            "telefono" => $request->get('telefono'),
            "mensaje" => $request->get('mensaje')
        );
        
        Mail::send('emails.contacto', $data, function($message){
            //mensaje enviado por
            $message->from('info@brandguru.com.ar', 'BrandGuru');

            //mensaje para
            $message->to('ariel@brandguru.com.ar', 'Ariel Benedetti')->subject('Nuevo mensaje desde contacto');

        });
        
        return 'Su mensaje ha sido enviado correctamente.';
        /*return redirect('/')->with('enviado', 'mensaje enviado');*/
        
    }

    public function nuevaSuscripcion(Request $request){
        
        $email = $request->get('email');

        $suscripcion = Suscriptor::where('email', $email)->first();

        if(empty($suscripcion)){
            $newSus = new Suscriptor;
            $newSus->email = $email;
            $newSus->save();

            return response()->json([
                "ok" => true,
                "mensaje" => "El email se ha suscripto éxitosamente. Muchas Gracias."
            ]);
        }else{

            // el email ya existe
            return response()->json([
                "ok" => false,
                "mensaje" => "El email ya se encuentra suscripto."
            ]);
        }

    }
}
