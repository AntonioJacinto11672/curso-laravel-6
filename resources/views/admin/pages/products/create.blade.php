@extends('admin.layouts.app')

@section('title', 'Cadastrar Novos Produto')


@section('content')

<h1>Cadastrado Produto</h1>
{{-- errors => Quarda os Erros das Validações --}}

@include('includes.alert')
<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="name" id="name" placeholder="name:" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="price" placeholder="Prço:" value="{{ old('price') }}">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="description" placeholder="Descricão:" value="{{ old('description') }}">
    </div>

    <div class="form-group">
        <input type="file" class="form-control" name="photo" >
    </div>
    <button type="submit" class="btn btn-success">Enviar</button>
</form>
@endsection
