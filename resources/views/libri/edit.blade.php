@extends('layouts.structure')

@section('page-title', 'Edit book')

@section('content')
    <a href={{ route('books.index') }}>Homepage</a>
    <h2>Edit</h2>
    <form action="{{ route('books.update', ['book' => $books->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">Title</label>
        <input type="text" id="name" placeholder="Title" name="name" value="{{ $books->name }}">

        <label for="genre">Genre</label>
        <input type="text" id="genre" placeholder="Genre" name="genre" value="{{ $books->genre }}">

        <label for="author">Author</label>
        <input type="text" id="author" placeholder="Author" name="author" value="{{ $books->author }}">

        <label for="pages">Pages</label>
        <input type="text" id="pages" placeholder="Pages" name="pages" value="{{ $books->pages }}">

        <button type="submit">Edit</button>
    </form>
@endsection