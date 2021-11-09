@extends("default")

@section("title", $title):

@section("content")
    <h1>{{ $title }}</h1>
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eius, exercitationem facilis hic inventore non tempora! Cum, similique, unde! Atque blanditiis facilis inventore, ipsum iste itaque mollitia tempore temporibus voluptate? </p>
@endsection

@section('sidebar')
    @parent
    <h3>Sidebar</h3>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi atque cum deleniti doloribus harum illum magnam, obcaecati officia omnis optio quam quos reiciendis repellat, repellendus repudiandae sit ut vitae?

    <ul>
        @forelse($numbers as $number)
            <li>{{$number}}</li>
        @empty
            <li>Aucun chiffre</li>
        @endforelse
    </ul>
@endsection
