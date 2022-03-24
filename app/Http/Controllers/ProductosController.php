<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos['productos']=Productos::paginate(5);
        return view('productos.index',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //relacionando con la vista
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Aqui se recepcionan los datos desde el formulario de la vista (productos/crear))
        $datosProductos = request()->except('_token');
        if($request->hasFile('imagen')){
            $datosProductos['imagen']=$request->file('imagen')->store('uploads','public');
        }
        Productos::insert($datosProductos);
        //return response()->json($datosProductos);
        return redirect('productos')->with('mensaje', 'Prodcuto creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productos = Productos::findOrFail($id);
        return view('productos.edit', compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Aqui se recepcionan los datos desde el formulario de la vista (productos/crear))
        $datosProductos = request()->except(['_token','_method']);
        
        if($request->hasFile('imagen')){
            $productos = Productos::findOrFail($id);
            Storage::delete('public/'.$productos->imagen);
            $datosProductos['imagen']=$request->file('imagen')->store('uploads','public');
        }
        Productos::where('id','=',$id)->update($datosProductos);
        $productos = Productos::findOrFail($id);
        return view('productos.edit', compact('productos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Busca el producto por el id
        $productos = Productos::findOrFail($id);
        //Condicional para eleiminar la imagen de la carpeta del servidor
        if(Storage::delete('public/'.$productos->imagen)){
            Productos::destroy($id);
        }
        //Retorna un redireccionamiento hacia listado productos
        return redirect('productos')->with('mensaje', 'Se elimino el producto ' . $productos->nombre);
    }
}

