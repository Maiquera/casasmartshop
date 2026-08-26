<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function privacy(){
        return view('pages.privacy');
    }

    public function terms(){
        return view('pages.terms');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:2000',
        ], [
            'name.required' => 'Por favor, informe seu nome.',
            'email.required' => 'Por favor, informe seu e-mail.',
            'email.email' => 'Informe um e-mail válido.',
            'message.required' => 'Por favor, escreva sua mensagem.',
        ]);

        try {
            Mail::to('contato@casasmartshop.com.br')->send(new ContactMail($validated));
        } catch (\Exception $e) {
            logger()->error('Falha ao enviar e-mail de contato: ' . $e->getMessage());
            return back()->withInput()->with('contact_error', 'Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.');
        }
        return back()->with('contact_success', 'Mensagem enviada com sucesso! Responderemos em breve.');
    }
}
