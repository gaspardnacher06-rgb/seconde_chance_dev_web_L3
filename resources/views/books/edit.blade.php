@extends('layouts.app')
@section('content')
    <h1>Modifier:{{$book->title}}</h1>
@if ($errors->any())
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
@endif
<form action="/books/{{$book->id}}"method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{$book->title}}">
    <textarea name="summary">{{$book->summary}}</textarea>
    <input type="date" name="date_pub" value="{{$book->publication_date}}">
    <input type="number" name="page_count" value="{{$book->page_count}}">
    <button type="submit">Enregistrer</button>
</form>
@endsection