<?php

namespace App\Http\Controllers;

use App\Distrito;
use Illuminate\Http\Request;

/**
 * Class DistritoController
 * @package App\Http\Controllers
 */
class DistritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distritos = Distrito::paginate();

        return view('distrito.index', compact('distritos'))
            ->with('i', (request()->input('page', 1) - 1) * $distritos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $distrito = new Distrito();
        return view('distrito.create', compact('distrito'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // dd($request);
    request()->validate(Distrito::$rules);
    $distritoData = request()->except('_token');
    
    if ($request->hasFile('nuevaImagenDistrito')) {
        $file = $request->file('nuevaImagenDistrito');
        $filename = uniqid() . '.png'; 
        $file->storeAs('public/images', $filename);
        $distritoData['imagenDistrito'] = $filename;
    }
    

    Distrito::create($distritoData);

    return redirect()->route('distritos.index')->with('success', 'Distrito creado exitosamente.');
}

    

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $distrito = Distrito::find($id);

        return view('distrito.show', compact('distrito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distrito = Distrito::find($id);

        return view('distrito.edit', compact('distrito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Distrito $distrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distrito $distrito)
    {
        request()->validate(Distrito::$rules);

        $currentImage = $distrito->imagenDistrito;
        
        if($request->hasFile('nuevaImagenDistrito')){
            $file = $request->file('nuevaImagenDistrito');
            $filename = uniqid() . '.png';
            $file->storeAs('public/images',$filename);
            

            $distrito->imagenDistrito = $filename;

            if($currentImage){
                $imagePath = storage_path('app/public/images/' .$currentImage);
                if(file_exists($imagePath)){
                    unlink($imagePath);
                }
            }
        }




        $distrito->update($request->except('nuevaImagenDistrito'));

        return redirect()->route('distritos.index')
            ->with('success', 'Distrito updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $distrito = Distrito::find($id)->delete();

        return redirect()->route('distritos.index')
            ->with('success', 'Distrito deleted successfully');
    }
}
