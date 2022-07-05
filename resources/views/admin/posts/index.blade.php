@extends('layouts.app')

@section('content')

<div class="container">
    {{-- Posts --}}
    <!-- Titolo contenitore -->
    <div class="title-content">Posts</div>
    <!-- /Titolo contenitore -->


    <table class="table bg-light">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">description</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>{{$post->description}}</td>
                    {{-- <td class="d-flex">
                        <a class="btn btn-success mx-1" href="{{ route('comics.show', $post) }}">SHOW</a>
                        <a class="btn btn-primary mx-1" href="{{ route('comics.edit', $post) }}">EDIT</a>
                        <form class="d-inline mx-1"
                            onsubmit="return confirm('confermi l\'eliminazione di: {{ $comic->title }}?')"
                            action="{{ route('comics.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >DELETE</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
