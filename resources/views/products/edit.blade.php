@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Editando Produto: {{ $product->name }}</div>
            <div class="panel-body">

                @if ($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                {!! Form::open(['route' => ['products.update', $product->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nome:'); !!}
                    {!! Form::text('name', $product->name, ['class'=>'form-control']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Descrição:'); !!}
                    {!! Form::textarea('description', $product->description, ['class'=>'form-control']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('price', 'Preço:'); !!}
                    {!! Form::text('price', $product->price, ['class'=>'form-control']); !!}
                </div>
                <div class="checkbox">
                    <label>{!! Form::checkbox('featured', 1, $product->featured) !!}Destaque</label>
                </div>
                <div class="checkbox">
                    <label>{!! Form::checkbox('recommend', 1, $product->recommend) !!}Recomendar</label>
                </div>
                <br>
                <div class="form-group">
                    {!! Form::submit('Salvar alterações', ['class'=>'btn btn-primary']); !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection