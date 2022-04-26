@extends('layouts.app')

@section('metaTitle', 'Comics')

@section('main')
  <table class="table table-dark table-hover">
    <thead>
      <th>id</th>
      <th>title</th>
      <th>description (preview)</th>
      <th>thumbnail url</th>
      <th>price</th>
      <th>sale_date</th>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
      <tr>
        <td>{{ $comic->id }}</td>
        <td>{{ $comic->title }}</td>
        <td>{{ substr($comic->description, 0, 50) . '...' }}</td>
        <td>{{ substr($comic->thumb, 0, 50) . '...' }}</td>
        <td>{{ $comic->price }}</td>
        <td>{{ $comic->sale_date }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection