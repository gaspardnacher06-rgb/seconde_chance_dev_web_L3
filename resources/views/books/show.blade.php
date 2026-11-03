@extends('layouts.app')

@section('title', $book->title)

@section('content')
    <a href="/books" class="btn btn-link px-0 mb-3">
        Retour au catalogue
    </a>

    <article class="card">
        <div class="card-body p-4">
            <p class="book-date">
                {{ $book->publication_date->format('d/m/Y') }}
            </p>

            <h1>{{ $book->title }}</h1>

            <p class="lead mt-4">
                {{ $book->summary }}
            </p>
        </div>
    </article>
@endsection
