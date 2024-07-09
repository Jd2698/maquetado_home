<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Demos;
use App\Http\Requests\StoreDemosRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UpdateDemosRequest;

class DemosController extends Controller
{

    public function index()
    {
        $demos = Demos::all();
        return DataTables::of($demos)->toJson();
    }

    public function store(StoreDemosRequest $request)
    {
        Demos::create([
            "nombre" => $request->input('name'),
            "apellido" => $request->input('lastname'),
            "email" => $request->input('email'),
            "telefono" => $request->input('phone'),
            "pais" => $request->input('country'),
            "organizacion" => $request->input('organization'),
            "puesto" => $request->input('puesto_trabajo'),
        ]);
    }
}
