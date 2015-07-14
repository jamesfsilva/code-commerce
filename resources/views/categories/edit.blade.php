@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Editando Categoria: {{ $category->name }}</div>
                <div class="panel-body">

                    @if ($errors->any())
                        <ul class="alert">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['route' => ['categories.update', $category->id], 'method' => 'put']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nome:'); !!}
                        {!! Form::text('name', $category->name, ['class'=>'form-control']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Descrição:'); !!}
                        {!! Form::textarea('description', $category->description, ['class'=>'form-control']); !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Salvar alterações', ['class'=>'btn btn-primary']); !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection