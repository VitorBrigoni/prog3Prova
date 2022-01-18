@extends('templates.base')
@section('title', 'Blog Principal')
@section('h1', 'Página Principal do Blog')

@section('content')
<div class="row">
    <div class="col">
        <p>Bem-Vindo ao blog, insira seu post abaixo</p>

        <a class="btn btn-primary" href="{{route('blog.inserir')}}" role="button">Inserir Post</a>
    </div>
</div>

<div class="col">

    {{-- Foreach que passa todos os posts da controller e ja cria a div com css customizado --}}
    @foreach($posts as $post)
        <div class="row">       
            <div class="card w-100" style="margin: 9px; width: 15rem">
                <div class="card-body">
                    <a href="{{ route('blog.show', $post) }}">
                        {{-- Titulo --}}
                        <h5 class="card-title">{{$post->titulo}}</h5>                    
                    </a>
                    {{-- Tempo --}}
                    <h6 class="card-subtitle mb-2 text-muted">{{$post->created_at}}</h6>
                    {{-- Descrição --}}
                    <p class="card-text">{{$post->descricao}}</p>
                </div>
            </div>
        </div>
    @endforeach

</div>
@endsection
