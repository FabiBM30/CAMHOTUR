<?php

namespace App\Http\Controllers;

use App\Empresario;
use Illuminate\Http\Request;

/**
 * Class EmpresarioController
 * @package App\Http\Controllers
 */
class EmpresarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresarios = Empresario::paginate();

        return view('empresario.index', compact('empresarios'))
            ->with('i', (request()->input('page', 1) - 1) * $empresarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresario = new Empresario();
        return view('empresario.create', compact('empresario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empresario::$rules);

        $empresario = Empresario::create($request->all());

        return redirect()->route('empresarios.index')
            ->with('success', 'Empresario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresario = Empresario::find($id);

        return view('empresario.show', compact('empresario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresario = Empresario::find($id);

        return view('empresario.edit', compact('empresario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empresario $empresario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresario $empresario)
    {
        request()->validate(Empresario::$rules);

        $empresario->update($request->all());

        return redirect()->route('empresarios.index')
            ->with('success', 'Empresario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empresario = Empresario::find($id)->delete();

        return redirect()->route('empresarios.index')
            ->with('success', 'Empresario deleted successfully');
    }
}
