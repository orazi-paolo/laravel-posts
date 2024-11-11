@extends("layouts.app")
@section("page-title", "Show");

@section("main-content")
<main class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <ul>
                <li>
                    <p>Autore: {{$post->author}}</p>
                </li>
                <li>
                    <p>Descrizione: {{$post->description}}</p>
                </li>
                <li>
                    <p>Data: {{$post->date}}</p>
                </li>
            </ul>
        </div>
    </div>
</main>
@endsection
