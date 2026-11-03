@extends('layouts.app')

@section('title', 'Livres')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1>Livres</h1>
            <p class="text-secondary mb-0">Parcourez les livres du catalogue.</p>
        </div>
    </div>

    @if ($books->isEmpty())
        <div class="alert alert-info">
            Aucun livre n'est disponible.
        </div>
    @else
        <div class="row g-4">
            @foreach ($books as $book)
                <div class="col-md-6 col-lg-4">
                    <article class="card h-100 book-card">
                        <div class="card-body">
                            <p class="book-date mb-2">
                                {{ $book->publication_date->format('d/m/Y') }}
                            </p>

                            <h2 class="h5">{{ $book->title }}</h2>

                            <p class="text-secondary">
                                @if (mb_strlen($book->summary) > 110)
                                    {{ mb_substr($book->summary, 0, 110) }}…
                                @else
                                    {{ $book->summary }}
                                @endif
                            </p>

                            <a href="/books/{{ $book->id }}" class="btn btn-outline-primary">
                                Voir la fiche
                            </a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    @endif
@endsection
