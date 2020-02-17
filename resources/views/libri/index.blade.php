@extends('layouts.structure')

@section('page-title', 'Homepage')

@section('content')
    <a href="{{ route('books.create') }}">Inserisci libro</a>
    @forelse ($books as $book)
        <ul>
            <li>ID: {{ $book->id}}</li>
            <li>Title: {{ $book->name }}</li>
            <li>Genre: {{ $book->genre }}</li>
            <li>Author: {{ $book->author }}</li>
            <li>Pages: {{ $book->pages }}</li>
            <a href="{{ route('books.show', ['book' => $book->id]) }}">Details</a>
            <a href="{{ route('books.edit', ['book' => $book->id]) }}">Edit</a>
            <form action="{{ route('books.destroy', ['book' => $book->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </ul>
    @empty
        <p>No books available</p>
    @endforelse
@endsection