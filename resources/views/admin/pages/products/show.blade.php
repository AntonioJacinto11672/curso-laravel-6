@extends('admin.layouts.app')

@section('title', 'Detalhes do Produtos ')

@section('content')
<h1> Produto {{ $product->price }}  <a href=" {{ route('products.index') }} "> << </a></h1>



<ul>
    <li><strong>Nome: </strong> {{ $product->name }} </li>
    <li><strong>Price: </strong> {{ $product->price }} </li>
    <li><strong>Description: </strong> {{ $product->description }} </li>

</ul>

<form action="{{ route('products.destroy', $product->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Deletar Produto: {{ $product->name }}</button>
</form>
 @endsection
