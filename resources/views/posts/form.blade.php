<?php
    if(isset($post->id))
        {
            $options = ['method' => 'put', 'url' => route('news.update',$post)];
        }
    else
        {
            $options = ['method' => 'post', 'url' => route('news.store')];
        }
?>

@include('errors')

{{ Form::open($options) }}

{{ Form::label('title', 'Titre', ['class' => 'form-label']) }}
{{ Form::text('title', $post->title, ['class' => 'form-control']) }}

{{ Form::label('slug', 'URL', ['class' => 'form-label']) }}
{{ Form::text('slug', $post->slug, ['class' => 'form-control']) }}

{{ Form::label('category_id', 'Catégorie', ['class' => 'form-label']) }}
{{ Form::select('category_id', $category, $post->category_id, ['class' => 'form-control']) }}

{{ Form::label('tags[]', 'Tags', ['class' => 'form-label']) }}
{{ Form::select('tags[]', DB::table('tags')->pluck('name','id'), $post->tags->pluck('id'), ['class' => 'form-control', 'multiple' => true]) }}

{{ Form::label('content', 'Contenu', ['class' => 'form-label']) }}
{{ Form::textarea('content', $post->content, ['class' => 'form-control']) }}


{{ Form::checkbox('online', 1, $post->online ,['class' => 'form-label']) }}
{{ Form::label('content', 'En ligne ?', ['class' => 'form-label']) }}
<br/>


{{ Form::submit('Envoyer',['class' => 'btn btn-primary mt-2'] ) }}

{{ Form::close() }}
