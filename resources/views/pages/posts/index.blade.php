@extends("layouts.app")

@section("page-title", "Posts")

@section("main-content")
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold text-center">POSTS FEED</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Data</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">{{ $comics->id }}</th>
                    <td>{{ $comics->title }}</td>
                    <td>{{ $comics->description }}</td>
                    <td>{{ $comics->author }}</td>
                    <td>{{ $comics->date }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
