{{ Form::open(array('method' => 'put', 'url' => route('news.update',$post))) }}

{{ Form::label('title', 'Titre', ['class' => 'form-label']) }}
{{ Form::text('title', $post->title, ['class' => 'form-control']) }}

{{ Form::label('slug', 'URL', ['class' => 'form-label']) }}
{{ Form::text('slug', $post->slug, ['class' => 'form-control']) }}

{{ Form::label('category_id', 'Catégorie', ['class' => 'form-label']) }}
{{ Form::select('category_id', $category, $post->category_id, ['class' => 'form-control']) }}

{{ Form::label('content', 'Contenu', ['class' => 'form-label']) }}
{{ Form::textarea('content', $post->content, ['class' => 'form-control']) }}


{{ Form::checkbox('online', 1, $post->online ,['class' => 'form-label']) }}
{{ Form::label('content', 'En ligne ?', ['class' => 'form-label']) }}
<br/>


{{ Form::submit('Envoyer',['class' => 'btn btn-primary mt-2'] ) }}

{{ Form::close() }}
