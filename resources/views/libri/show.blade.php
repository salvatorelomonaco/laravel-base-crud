@extends('layouts.structure')

@section('page-title', 'Homepage')

@section('content')
    <a href={{ route('books.index') }}>Homepage</a>
    <h2>Details</h2>
    <ul>
        <li>Title: {{ $books->name }}</li>
        <li>Genre: {{ $books->genre }}</li>
        <li>Author: {{ $books->author }}</li>
        <li>Pages: {{ $books->pages }}</li>
    </ul>
@endsection