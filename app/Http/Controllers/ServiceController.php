<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('plataforma.services.index', compact('services'));
    }

    public function create()
    {
        return view('plataforma.services.create');
    }

    public function store(ServiceRequest $request)
    {
        Service::create($request->all());

        return redirect('admin/services')->with('message', 'Serviço criado com Sucesso');
    }

    public function edit(Service $service)
    {
        return view('plataforma.services.edit', compact('service'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $service->fill($request->all());
        $service->save();

        return redirect('admin/services')->with('message', 'Serviço editado com sucesso');
    }

    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();

        return redirect('admin/services')->with('message', 'Serviço deletado com sucesso');
    }
}
