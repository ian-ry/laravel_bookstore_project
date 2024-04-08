@extends('layout.app')
@section('title', 'Create')

@section('content')

<link rel="stylesheet" href={{ asset('css/create.css')}}>
<div class="bg">
<h1>Add a book.</h1>

<form action="{{ route('book.store') }}" method="POST">
    @csrf

    <fieldset>
        <legend>Input the book data here.</legend>

        <p><label for="title">Title:</label></p>
        <p><input type="text" id="title" name="title"></p>
        
        <p><label for="author_name">Author:</label></p>
        <p><input type="text" name="author_name" id="author_name"></p>

        <p><label for="ISBN">ISBN: </label></p>
        <p><input type="text" name="ISBN" id="ISBN"></p>

        <p><label for="published_year">Published year: </label></p>
        <p><input type="number" name="published_year" id="published_year"></p>

    </fieldset>

    <button type="submit">Add book.</button>
</form>
</div>
@endsection