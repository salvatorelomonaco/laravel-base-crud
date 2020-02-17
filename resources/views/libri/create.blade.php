@extends('layouts.structure')

@section('page-title', 'Insert book')

@section('content')
    <h2>Insert a book</h2>
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        <label for="name">Title</label>
        <input type="text" id="name" placeholder="Title" name="name">

        <label for="genre">Genre</label>
        <input type="text" id="genre" placeholder="Genre" name="genre">

        <label for="author">Author</label>
        <input type="text" id="author" placeholder="Author" name="author">

        <label for="pages">Pages</label>
        <input type="text" id="pages" placeholder="Pages" name="pages">

        <button type="submit">Insert</button>
    </form>
@endsection