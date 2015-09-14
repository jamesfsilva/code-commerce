@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Novo Produto</div>
            <div class="panel-body">

                @if ($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                {!! Form::open(['route'=>'products.save']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nome:'); !!}
                    {!! Form::text('name', null, ['class'=>'form-control']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('category', 'Categoria:'); !!}
                    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Descrição:'); !!}
                    {!! Form::textarea('description', null, ['class'=>'form-control']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('price', 'Preço:'); !!}
                    {!! Form::text('price', null, ['class'=>'form-control']); !!}
                </div>
                <div class="checkbox">
                    <label>{!! Form::checkbox('featured', 1) !!}Destaque</label>
                </div>
                <div class="checkbox">
                    <label>{!! Form::checkbox('recommend', 1) !!}Recomendar</label>
                </div>
                <br>
                <div class="form-group">
                    {!! Form::submit('Adiciona Produto', ['class'=>'btn btn-primary']); !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection