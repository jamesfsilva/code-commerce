@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Produtos</div>
            <div class="panel-body">
                <a href="{{ route('products.images.create',['productId' => $product->id]) }}" class="btn btn-primary" role="button">Nova Imagem</a><br/><br/>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Extension</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product->images as $image)
                        <tr>
                            <td>{{ $image->id }}</td>
                            <td>
                                <img src="{{ url('uploads/'.$image->id.'.'.$image->extension) }}" width="50" alt="">
                            </td>
                            <td>{{ $image->extension }}</td>
                            <td>
                                <a href="{{ route('products.images.delete', ['id' => $image->id])  }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <a href="{{ route('products.index') }}" class="btn btn-default">Voltar</a> 
            </div>
        </div>
    </div>
</div>
@endsection