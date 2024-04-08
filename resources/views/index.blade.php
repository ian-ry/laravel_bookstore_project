<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store</title>
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
</head>
<body>
    <h1>Welcome to the Book Store!</h1>

    <main>
        <div><button><a href="{{ route ('book.create') }}">Add a new book...</a></button></div>
        <p></p>
        @foreach ($books as $book)
            
        <div>
            <fieldset>
                <legend>Title: {{ $book-> title}}</legend>


                <label>Author: </label>
                <p>{{ $book->author_name }}</p>

                <label>ISBN: </label>
                <p>{{ $book->ISBN }}</p>

                <label>Published in: </label>
                <p>{{ $book->published_year }}</p>

                <div>
                    <button><a href="{{ route('book.edit', '$book->id') }}">Edit this book.</a></button>

                    <form action="{{ route('book.destroy', $book->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete this book.</button>
                    </form>
                </div>

            </fieldset>
        </div>
        @endforeach
    </main>
</body>
</html>