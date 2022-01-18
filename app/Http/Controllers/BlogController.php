<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{   // Busca e seleciona os posts para organizar pelo horario de criacao
    public function index()
    {
        $posts = Blog::orderBy('created_at', 'desc')->get();
        return view('blog.index', ['posts' => $posts, 'pagina' => 'blog']);
    }
    // Função de Criação (Retorna a view)
    public function create()
    {
        return view('blog.create', ['pagina' => 'blog']);
    }
    // Função para salvar as imagens no store e no banco
    public function store(Request $form)
    {
        $pathImagem = $form->file('imagem')->store('', 'imagens');

        $post = new Blog();
        $post->titulo = $form->titulo; 
        $post->descricao = $form->descricao;
        $post->imagem = $pathImagem;
        $post->save();

        return redirect()->route('blog');
    }

    // Função Mostra (Retorna a view já com o post)
    public function show(Blog $post)
    {
        return view('blog.show', ['post' => $post, 'pagina' => 'blog']);
    }

}
