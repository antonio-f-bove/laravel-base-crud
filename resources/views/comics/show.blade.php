@extends('layouts.app')

@section('metaTitle', 'comic id:{{ $comic->id }}')

@section('main')
<div class="container">
  <div class="img-wrapper">
    <img src="{{ $comic->thumb }}" alt="cover">
  </div>
  
  <section>
    <dl>
      <dt class="h3">Title</dt>
      <dd>{{ $comic->title }}</dd>
      <dt class="h3">description</dt>
      <dd>{{ $comic->description }}</dd>
      <dt class="h3">thumb</dt>
      <dd>{{ $comic->thumb }}</dd>
      <dt class="h3">price</dt>
      <dd>{{ $comic->price }}</dd>
      <dt class="h3">series</dt>
      <dd>{{ $comic->series }}</dd>
      <dt class="h3">sale_date</dt>
      <dd>{{ $comic->sale_date }}</dd>
      <dt class="h3">type</dt>
      <dd>{{ $comic->type }}</dd>
      <dt class="h3">created_at</dt>
      <dd>{{ $comic->created_at }}</dd>
      <dt class="h3">updated_at</dt>
      <dd>{{ $comic->updated_at }}</dd>
    </dl>

  </section>
</div>
@endsection