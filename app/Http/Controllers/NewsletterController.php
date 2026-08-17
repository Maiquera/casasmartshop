<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;
use App\Mail\WelcomeNewsletter;
use Illuminate\Support\Facades\Mail;


class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ], [
            'email.required' => 'Por favor, informe seu e-mail.',
            'email.email' => 'Informe um e-mail válido.',
            'email.unique' => 'Este e-mail já está cadastrado!',
        ]);

        NewsletterSubscriber::create([
            'email' => $request->email,
        ]);

        try {
            Mail::to($request->email)->send(new WelcomeNewsletter());
        } catch (\Exception $e) {
            logger()->error('Falha ao enviar e-mail da newsletter: ' . $e->getMessage());
        }

        return back()->with('newsletter_success', '🎉 Inscrição realizada com sucesso! Você receberá nossas novidades.');
    }
}
