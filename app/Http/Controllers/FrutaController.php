<?php

namespace App\Http\Controllers;

use App\Models\Fruta;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
    public function index()
    {
        $frutas = Fruta::where('estado', true)->get();
        return view('Users.index', compact('frutas'));
    }

    public function store(Request $request)
    {
        $fruta = new Fruta();
        $fruta->Nombre = $request->Nombre;
        $fruta->Cantidad = $request->Cantidad;
        $fruta->Proveedor = $request->Proveedor;
        $fruta->save();
        return redirect('/Formulario');

    }


    public function edit($id)
    {
        $fruta = Fruta::find($id);
        return view('Users.edit', compact('fruta'));
    }

    public function update(Request $request, $id )
    {
        $fruta = Fruta::find($id);
        if($fruta)
        {
        $fruta->Nombre = $request->Nombre;
        $fruta->Cantidad = $request->Cantidad;
        $fruta->Proveedor = $request->Proveedor;
        $fruta->save();

        }
        return redirect('/Formulario');
    }

    public function destroy($id)
    {
        $fruta = Fruta::find($id);
        if( $fruta )
        {
            $fruta->Estado=false;  
            $fruta->save();
        }
        return back();
    }
}
