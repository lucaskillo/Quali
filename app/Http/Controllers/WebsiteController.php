<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Service;
use App\WebsiteGeneral;

class WebsiteController extends Controller
{
    public function portifolio() {
        //return View('site.portifolio');
        $services = Service::all();
        return view('site.portifolio', compact('services'));
    }

    public function parceiros() {
        return View('site.parceiros');
    }

    public function quemsomos() {
        $website_generals = WebsiteGeneral::all();
        return View('site.quemsomos', compact('website_generals'));
    }

    public function home() {
        $website_generals = WebsiteGeneral::all();
        return View('site.home', compact('website_generals'));
    }

    public function contato() {
        return View('site.contato');
    }

    public function postContato() {
        $rules = array(
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'required' );
        $validation = Validator::make(Input::all(), $rules);

        if($validation->passes()) {
            $data = array();
            $data['nome'] = Input::get("nome");
            $data['email'] = Input::get("email");
            $data['mensagem'] = Input::get("mensagem");
            $data['assunto'] = Input::get("assunto");

            Mail::send('email', $data, function($message) {
                $message->from(Input::get('email'), Input::get('nome'));
                $message->to('lucas_skillo@yahoo.com.br') ->subject('Contato Site');
            });
            return Redirect::to('contato') ->with('message_sucesso', 'Mensagem enviada com sucesso!');
        }
        return Redirect::to('contato')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'Erro! Preencha todos os campos corretamente.');
    }


}
