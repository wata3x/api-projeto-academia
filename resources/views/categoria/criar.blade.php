@extends('master')

@section('content')
    <form method="post" action="{{ route('categoria.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <label>Nome:</label>
        <input type="text" name="nome"/>
        <label for="imagem">Imagem</label>
        <input type="file" name="imagem" id="imagem">
        <button type="submit">Criar</button>
    </form>
@endsection