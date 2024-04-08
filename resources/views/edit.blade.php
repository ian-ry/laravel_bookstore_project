@extends('layout.app')
@section('title', 'Create')

@section('content')

<h1>Edit a book.</h1>


<form action="{{ route('book.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <fieldset>
        <legend>Edit the book data here.</legend>

        <p><label for="title">Title:</label></p>
        <p><input type="text" id="title" name="title" value="{{ $book->title }}" placeholder="{{ $book->title }}"></p>
        
        <p><label for="author_name">Author:</label></p>
        <p><input type="text" name="author_name" id="author_name" value="{{ $book->author_name}}" placeholder="{{ $book->author_name }}"></p>

        <p><label for="ISBN">ISBN: </label></p>
        <p><input type="text" name="ISBN" id="ISBN" value="{{ $book->ISBN }}" placeholder="{{ $book->ISBN }}"></p>

        <p><label for="published_year">Published year: </label></p>
        <p><input type="number" name="published_year" id="published_year" value="{{ $book->published_year }}" placeholder="{{ $book->published_year}}"></p>

    </fieldset>

    <button type="submit">Update Book.</button>
</form>

@endsection