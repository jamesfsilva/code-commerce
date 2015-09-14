@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">Categorias</div>
            <div class="panel-body">
                <a href="{{ route('categories.create') }}" class="btn btn-primary" role="button">Nova Categoria</a><br/><br/>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <a href="{{ route('categories.edit', ['id' => $category->id])  }}">Editar</a> |
                                <a href="{{ route('categories.delete', ['id' => $category->id])  }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $categories->render() !!}
            </div>
        </div>
    </div>
</div>
@endsection