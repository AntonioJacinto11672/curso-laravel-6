@extends('admin.layouts.app');

@section('title', 'Cadastrar Novos Produto');


@section('content')
<h1> Editar O Produto {{ $id }}</h1>
<form action="{{ route('products.update', '$id') }}" method="post">
    {{-- <input type="hidden" name="_method" value="PUT"> --}}
    @method('PUT');
    @csrf
    <input type="text" name="name" id="name" placeholder="name:">
    <input type="text" name="description" placeholder="Descricão">
    <button type="submit">Enviar</button>
</form>
@endsection
