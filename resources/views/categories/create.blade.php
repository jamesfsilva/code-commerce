@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Nova Categoria</div>
                <div class="panel-body">

                    @if ($errors->any())
                        <ul class="alert">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::open(['route'=>'categories.save']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Nome:'); !!}
                        {!! Form::text('name', null, ['class'=>'form-control']); !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Descrição:'); !!}
                        {!! Form::textarea('description', null, ['class'=>'form-control']); !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Adiciona Categoria', ['class'=>'btn btn-primary']); !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection