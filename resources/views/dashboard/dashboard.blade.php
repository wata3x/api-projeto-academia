@extends('master')

@section('content')

<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row">
    <div class="col s6">
        <div class="card-panel light-blue">
            <a href="{{ URL::route('categoria.list') }}"><span class="white-text">Categorias</span></a>
        </div>
    </div>

    <div class="col s6">
        <div class="card-panel light-blue">
            <span class="white-text">Exercicios</span>
        </div>
    </div>

</div>
@endsection