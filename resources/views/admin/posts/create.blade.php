@extends('layouts.admin')

@section('content')

    <div class="container w-50">
        <h1>Creo il post</h1>

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" id="title" name="title" placeholder="Titolo fumetto"
                value="{{ old('title') }}"
                class="form-control @error('title') is-invalid @enderror">
                @error('title')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Url immagine</label>
                <input type="text" id="image" name="image" placeholder="URL immagine fumetto"
                value="{{ old('image') }}"
                class="form-control @error('image') is-invalid @enderror">
                @error('image')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label> <br>
                <textarea name="description" id="description" cols="30" rows="10"
                class="@error('title') is-invalid @enderror">
                    {{ old('description') }}
                </textarea>
                @error('description')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
