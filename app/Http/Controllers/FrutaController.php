<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $frutas = DB::table('frutas')
                ->orderBy('id', 'desc')
                ->get();

        return view('fruta.index', [
            'frutas' => $frutas
        ]);
    }

    public function detail($id){
        $fruta = DB::table('frutas')->where('id', $id)->first();

        return view('fruta.detail', [
            'fruta' => $fruta
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fruta.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fruta = DB::table('frutas')->insert([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'fecha' => date('Y-m-d')
        ]);

       return redirect()->action('FrutaController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fruta = DB::table('frutas')->where('id', $id)->first();

        return view('fruta.crear', [
            'fruta' => $fruta
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $fruta = DB::table('frutas')->where('id', $id)
                                    ->update([
                                        'nombre' => $request->input('nombre'),
                                        'descripcion' => $request->input('descripcion'),
                                        'precio' => $request->input('precio')
                                    ]);
        
        return redirect()->action('FrutaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fruta = DB::table('frutas')->where('id', $id)->delete();
        return redirect()->action('FrutaController@index');
    }
}
