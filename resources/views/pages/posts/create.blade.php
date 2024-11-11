@extends("layouts.app")

@section("page-title", "Create")

@section("main-content")
<section class="container py-4">
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("posts.store") }}">
            @csrf

            <h1 class="mb-3">
                Creating a new post:
            </h1>
            <div class="mb-3">
                <label for="post-title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="post-title" name="title">
            </div>
            <div class="mb-3">
                <label for="post-author" class="form-label">Author:</label>
                <input type="text" class="form-control" id="post-author" name="author">
            </div>
            <div class="mb-3">
                <label for="post-description" class="form-label">Description:</label>
                <input type="text" class="form-control" id="post-description" name="description">
            </div>
            <div class="mb-3">
                <label for="post-date" class="form-label">Date:</label>
                <input type="text" class="form-control" id="post-date" name="date">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Create new Post
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset fields
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
