<?php

namespace App\Http\Controllers;

use App\Catalogo;
use App\Emprendimiento;
use Illuminate\Http\Request;

/**
 * Class CatalogoController
 * @package App\Http\Controllers
 */
class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogos = Catalogo::paginate();
        $emprendimientos = Emprendimiento::all();
        return view('catalogo.index', compact('catalogos','emprendimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $catalogos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogo = new Catalogo();
        $emprendimientos = Emprendimiento::all();
        return view('catalogo.create', compact('catalogo','emprendimientos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Catalogo::$rules);
        $catalogoData = request()->except('_token');

        if ($request->hasFile('nuevaImagen')) {
            $file = $request->file('nuevaImagen');
            $filename = uniqid() . '.png'; 
            $file->storeAs('public/image', $filename);
            $distritoData['foto'] = $filename;
        }

        Catalogo::create($catalogoData);
        return redirect()->route('catalogos.index')
            ->with('success', 'Catalogo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catalogo = Catalogo::find($id);

        return view('catalogo.show', compact('catalogo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogo = Catalogo::find($id);

        return view('catalogo.edit', compact('catalogo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Catalogo $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogo $catalogo)
    {
        request()->validate(Catalogo::$rules);

        $catalogo->update($request->all());

        return redirect()->route('catalogos.index')
            ->with('success', 'Catalogo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $catalogo = Catalogo::find($id)->delete();

        return redirect()->route('catalogos.index')
            ->with('success', 'Catalogo deleted successfully');
    }
}
