@extends('admin.layouts.app')

@section('title', 'Cadastrar Novos Produto')


@section('content')

<h1>Cadastrado Produto</h1>
{{-- errors => Quarda os Erros das Validações --}}
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
@endif
<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" id="name" placeholder="name:">
    <input type="text" name="description" placeholder="Descricão">
    <input type="file" name="photo" >
    <button type="submit">Enviar</button>
</form>
@endsection
