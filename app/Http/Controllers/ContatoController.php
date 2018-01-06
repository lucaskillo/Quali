<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function contato() {
        return View('site\contato');
    }

    public function getEmail() {
        return View('email');
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
