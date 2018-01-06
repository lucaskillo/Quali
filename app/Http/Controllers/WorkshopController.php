<?php

namespace App\Http\Controllers;

use App\Workshop;
use App\Http\Requests\WorkshopRequest;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshops = Workshop::all();
        return view('plataforma.workshops.index', compact('workshops'));
    }

    public function create()
    {
        return view('plataforma.workshops.create');
    }

    public function store(WorkshopRequest $request)
    {
        Workshop::create($request->all());

        return redirect('admin/workshops')->with('message', 'Workshop criado com Sucesso');
    }

    public function edit(Workshop $workshop)
    {
        return view('plataforma.workshops.edit', compact('workshop'));
    }

    public function update(WorkshopRequest $request, Workshop $workshop)
    {
        $workshop->fill($request->all());
        $workshop->save();

        return redirect('admin/workshops')->with('message', 'Workshop editado com sucesso');
    }

    public function destroy($id)
    {
        $workshops = Workshop::find($id);
        $workshops->delete();

        return redirect('admin/workshops')->with('message', 'Workshop deletado com sucesso');
    }
}
