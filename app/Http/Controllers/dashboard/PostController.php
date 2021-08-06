<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Listar elementos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Hola mundos";
    }

    /**
     * Formulario para crear un recurso
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.post.create"); // Retorno la vista create de la ruta views/dashboard/post
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:5|max:500'
        ]);

        if ($validator->fails()) {
            return (redirect('dashboard/post/create'))
                ->withErrors($validator)
                ->withInput();
        }
        echo "Hola mundo: " . $request->title;
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     *  Eliminar un recurso
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
