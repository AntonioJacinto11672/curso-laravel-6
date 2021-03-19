@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')
    <h1>Exibindo os Produtos</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Cadastrar Produto</a>
    <hr>



    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th width="100">ações</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($products))
        @foreach ($products as $product)
            <tr>
            <td>{{ $product->name }} </td>
            <td>{{ $product->price }} </td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">edit</a>
                <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
            </td>
            </tr>
        @endforeach
    @endif

    </tbody>
    </table>
    {{ $products->links() }}
@endsection
