@extends('default')

@section('content')
    <h1 class="mt-5">Raccourcir url</h1>
    <form action="" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="mb-3">
            <label for="url" class="form-label">Lien a raccourcir</label>
            <input type="text" class="form-control" id="url" name="url" placeholder="https://example.com" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Raccourcir</button>
    </form>
@stop
