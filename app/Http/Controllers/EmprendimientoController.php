<?php

namespace App\Http\Controllers;

use App\Emprendimiento;
use App\Distrito;
use Illuminate\Http\Request;

/**
 * Class EmprendimientoController
 * @package App\Http\Controllers
 */
class EmprendimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // Asegúrate de importar el modelo Distrito
     public function index()
     {
         $emprendimientos = Emprendimiento::paginate();
         $distritos = Distrito::all();
 
         return view('emprendimiento.index', compact('emprendimientos','distritos'))
             ->with('i', (request()->input('page', 1) - 1) * $emprendimientos->perPage());
     }
 
   
 
 



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emprendimiento = new Emprendimiento();
        $distrito = Distrito::all();
        return view('emprendimiento.create', compact('emprendimiento','distrito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        request()->validate(Emprendimiento::$rules);

        $emprendimiento = Emprendimiento::create($request->all());
        //dd($request);
        return redirect()->route('emprendimientos.index')
            ->with('success', 'Emprendimiento created successfully.');

    }

    public function filtrarEmprendimientosPorTipo($tipo)
{
    
    $emprendimientosFiltrados = Emprendimiento::where('tipo_emprendimiento', $tipo)->get();
    
  
    return view('emprendimiento.filtered_results', compact('emprendimientosFiltrados', 'tipo'));

}
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emprendimiento = Emprendimiento::find($id);

        return view('emprendimiento.show', compact('emprendimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emprendimiento = Emprendimiento::find($id);
        $distrito = Distrito::all();

        return view('emprendimiento.edit', compact('emprendimiento','distrito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Emprendimiento $emprendimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emprendimiento $emprendimiento)
    {
        request()->validate(Emprendimiento::$rules);

        $emprendimiento->update($request->all());

        return redirect()->route('emprendimientos.index')
            ->with('success', 'Emprendimiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $emprendimiento = Emprendimiento::find($id)->delete();

        return redirect()->route('emprendimientos.index')
            ->with('success', 'Emprendimiento deleted successfully');
    }
}
