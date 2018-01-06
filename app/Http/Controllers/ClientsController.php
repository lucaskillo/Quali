<?php

namespace App\Http\Controllers;

use App\Client;
use App\Workshop;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('plataforma.users.index', compact('users'));
    }

    public function create()
    {
        return view('plataforma.users.create');
    }

    public function store(UserRequest $request)
    {
        User::create($request->all());

        return redirect('admin/users')->with('message', 'Usuário criado com Sucesso');
    }

    public function edit(User $user)
    {
        return view('plataforma.users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $user->fill($request->all());
        $user->save();

        return redirect('admin/users')->with('message', 'Usuário editado com sucesso');
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('admin/users')->with('message', 'Usuário deletado com sucesso');
    }

}
