@extends('templates.base')
@section('title', 'Parte de Show do Post')

@section('content')
<h2>{{ $post->titulo }}</h2>
<p><img src="{{asset('img/' . $post->imagem)}}"></p>
<label>Descrição:</label>
<p>{{ $post->descricao }}</p>
@endsection
