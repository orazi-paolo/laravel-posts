@extends("layouts.app")

@section("page-title", "Show")

@section("main-content")
<main class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$posts->title}}</h5>
            <ul>
                <li>
                    <p>Autore: {{$posts->author}}</p>
                </li>
                <li>
                    <p>Descrizione: {{$posts->description}}</p>
                </li>
                <li>
                    <p>Data: {{$posts->date}}</p>
                </li>
            </ul>
        </div>
    </div>
</main>
@endsection
