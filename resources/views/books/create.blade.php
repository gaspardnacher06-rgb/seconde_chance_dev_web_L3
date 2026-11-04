@extends('layouts.app')
@section('content')

 <form action="/books" method="POST">
 @csrf
 <input type="text" name="title">
 <input type="text" name="summary">
 <input type="date" name="publication_date">
 <input type="number" name="page_count">
 <button type="submit">Creer</button>
</form>
@endsection