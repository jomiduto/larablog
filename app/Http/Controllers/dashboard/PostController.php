<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Models\PostImage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Listar elementos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')
            ->where('posted', 'yes')
            ->paginate(5);

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
        $categories = Category::pluck('id', 'title');

        return view('dashboard.post.create', ['post' => new Post(), 'categories' => $categories]); // Retorno la vista create de la ruta views/dashboard/post
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
        $post = Post::findOrFail($id);

        return view('dashboard.post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $categories = Category::pluck('id', 'title');

        return view('dashboard.post.edit', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, $id)
    {
        $post = Post::findorFail($id);

        $post->update($request->validated());

        return back()->with('status', 'Post actualizado con éxito');
    }

    // Función carga de imagen
    public function image(Request $request, Post $post)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,bmp,png|max:10240' //10Mb
        ]);

        $filename = time() . "." . $request->image->extension(); // Nombre de la imagen con la función time

        $request->image->move(public_path('images'), $filename); // Se establece la ruta donde se guarda la imagen

        PostImage::create(['post_id' => $post->id, 'image' => $filename]); // Guardar registro en BD

        return back()->with('status', 'Imagen cargada con éxito');
    }

    /**
     *  Eliminar un recurso
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorFail($id);

        $post->delete();

        return back()->with('status', 'Post eliminado con éxito');
    }
}
