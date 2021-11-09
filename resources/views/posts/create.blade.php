@extends('default')

@section('content')
    <h1>Créer</h1>

    {{ Form::open(array('url' => route('news.store'))) }}

    {{ Form::label('title', 'Titre', ['class' => 'form-label']) }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}

    {{ Form::label('slug', 'URL', ['class' => 'form-label']) }}
    {{ Form::text('slug',null, ['class' => 'form-control']) }}

    {{ Form::label('content', 'Contenu', ['class' => 'form-label']) }}
    {{ Form::textarea('content', null, ['class' => 'form-control']) }}

    {{ Form::submit('Envoyer',['class' => 'btn btn-primary mt-2'] ) }}

    {{ Form::close() }}
@stop
