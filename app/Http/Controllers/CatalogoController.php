<?php

namespace App\Http\Controllers;

use App\Catalogo;
use App\Emprendimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogoController extends Controller
{
    public function index()
    {
        $catalogos = Catalogo::paginate();
        $emprendimientos = Emprendimiento::all();
        return view('catalogo.index', compact('catalogos', 'emprendimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogos->perPage());
    }

    public function create()
    {
        $catalogo = new Catalogo();
        $emprendimientos = Emprendimiento::all();
        return view('catalogo.create', compact('catalogo', 'emprendimientos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombreCatalogos' => 'required',
            'cantidad' => 'required|integer',
            'estado' => 'required',
            'nuevaImagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $catalogoData = $request->except('_token');
        $catalogoData['id_Empre'] = $request->input('id_Empren'); // Asigna el valor del emprendimiento seleccionado


        if ($request->hasFile('nuevaImagen')) {
            $file = $request->file('nuevaImagen');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $catalogoData['foto'] = $filename;
        }

        Catalogo::create($catalogoData);
        return redirect()->route('catalogos.index')
            ->with('success', 'Catalogo creado exitosamente.');
    }

    public function show($id)
    {
        $catalogo = Catalogo::find($id);
        return view('catalogo.show', compact('catalogo'));
    }

    public function edit($id)
    {
        $catalogo = Catalogo::find($id);
        return view('catalogo.edit', compact('catalogo'));
    }

    public function update(Request $request, Catalogo $catalogo)
    {
        $request->validate([
            'nombreCatalogos' => 'required',
            'cantidad' => 'required|integer',
            'estado' => 'required',
            'nuevaImagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $catalogoData = $request->except('_token');

        if ($request->hasFile('nuevaImagen')) {
            $file = $request->file('nuevaImagen');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/images', $filename);
            $catalogoData['foto'] = $filename;
        }

        $catalogo->update($catalogoData);
        return redirect()->route('catalogos.index')
            ->with('success', 'Catalogo actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $catalogo = Catalogo::find($id);
        if ($catalogo) {
            Storage::delete('public/images/' . $catalogo->foto);
            $catalogo->delete();
        }

        return redirect()->route('catalogos.index')
            ->with('success', 'Catalogo eliminado exitosamente.');
    }
}
