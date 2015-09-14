@extends('main')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Nova Imagem</div>
            <div class="panel-body">

                @if ($errors->any())
                <ul class="alert">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                {!! Form::open(['route' => ['products.images.save', $product->id], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {!! Form::label('image', 'Image:'); !!}
                    {!! Form::file('image', null, ['class'=>'form-control']); !!}
                </div>
                <br>
                <div class="form-group">
                    {!! Form::submit('Salvar imagem', ['class'=>'btn btn-primary']); !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection