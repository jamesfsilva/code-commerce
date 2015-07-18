@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos</div>
                <div class="panel-body">
                    <a href="{{ route('products.create') }}" class="btn btn-primary" role="button">Novo Produto</a><br/><br/>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Featured</th>
                            <th>Recommended</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>R$ {{ number_format($product->price,2,',','.') }}</td>
                                <td>{{ $product->featured ? 'Sim' : 'Não' }}</td>
                                <td>{{ $product->recommend ? 'Sim' : 'Não' }}</td>
                                <td>
                                    <a href="{{ route('products.edit', ['id' => $product->id])  }}">Editar</a> |
                                    <a href="{{ route('products.delete', ['id' => $product->id])  }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection