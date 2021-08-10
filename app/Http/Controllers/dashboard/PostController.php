<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
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
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        // dd($posts);

        return view('dashboard.post.index', ['posts' => $posts]);
    }

    /**
     * Formulario para crear un recurso
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.post.create'); // Retorno la vista create de la ruta views/dashboard/post
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        // Forma de validar los campos del formulario

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required|min:5|max:500',
        //     // 'url_clean' => 'required|min:5|max:500',
        //     'content' => 'required|min:5'
        // ]);

        // if ($validator->fails()) {
        //     return (redirect('dashboard/post/create'))
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        Post::create($request->validated());

        // echo "Hola mundo: " . $request->title;
        return back()->withInput()->with('status', 'Post creado con éxito!');
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
