<?php

namespace App\Http\Controllers;

use App\WebsiteGeneral;
use App\Http\Requests\WebsiteGeneralRequest;

class WebsiteGeneralController extends Controller
{
    public function index()
    {
        $website_generals = WebsiteGeneral::all();
        return view('plataforma.website_generals.index', compact('website_generals'));
    }

    public function create()
    {
        return view('plataforma.website_generals.create');
    }

    public function store(WebsiteGeneralRequest $request)
    {
        WebsiteGeneral::create($request->all());

        return redirect('admin/website_generals')->with('message', 'WebsiteGeneral criado com Sucesso');
    }

    public function edit(WebsiteGeneral $website_general)
    {
        return view('plataforma.website_generals.edit', compact('website_general'));
    }

    public function update(WebsiteGeneralRequest $request, WebsiteGeneral $website_general)
    {
        $website_general->fill($request->all());
        $website_general->save();

        return redirect('admin/website_generals')->with('message', 'WebsiteGeneral editado com sucesso');
    }

    public function destroy($id)
    {
        $website_generals = WebsiteGeneral::find($id);
        $website_generals->delete();

        return redirect('admin/website_generals')->with('message', 'WebsiteGeneral deletado com sucesso');
    }
}
