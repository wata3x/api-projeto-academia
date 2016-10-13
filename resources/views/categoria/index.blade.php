@extends('master')

@section('content')
<div class="row">
    <h2>Listagem de Categorias</h2>
    <table>
        <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id }} </td>
            <td>{{ $categoria->nome }}</td>
            <td>
                <a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
                <a class="btn-floating btn-small waves-effect waves-light light-blue"><i class="material-icons">mode_edit</i></a>

            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
    @endsection