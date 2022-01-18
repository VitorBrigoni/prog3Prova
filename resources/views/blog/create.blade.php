@extends('templates.base')
@section('title', 'Pagina de Inserir')
@section('h1', 'Insira seu post no blog')

@section('content')
<div class="row">
    <div class="col-4">
        {{-- Form com enctype para permitir adicionar arquivos (fotos nesse caso) --}}
        <form method="post" action="{{ route('blog.gravar') }}" enctype="multipart/form-data">

            {{-- csrf utilizado para proteger o formulário --}}
            @csrf

            {{-- Div para adicionar o título --}}
            <div class="mb-3">
                <label for="nome" class="form-label">Título</label>
                <input type="text" class="form-control" id="nome" name="titulo">
            </div>

            {{-- Div para adicionar descrição --}}
            <div class="mb-3">
                <label for="comentario" class="form-label">Descricao</label>
                <textarea class="form-control" id="comentario" name="descricao" rows="3"></textarea>
            </div>

            {{-- Div para associar imagem --}}
            <div class="mb-3">
                <p>Associar imagem: <input type="file" name="imagem"></p>
            </div>

            {{-- Div que guarda o botao utilizado para salvar o post --}}
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Gravar</button>
            </div>
        </form>
    </div>
</div>
@endsection
