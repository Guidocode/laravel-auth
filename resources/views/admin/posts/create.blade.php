@extends('layouts.admin')

@section('content')

    <div class="container w-50">
        <h1>Creo il post</h1>

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Url immagine</label>
                <input type="text" class="form-control" id="image">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label> <br>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
