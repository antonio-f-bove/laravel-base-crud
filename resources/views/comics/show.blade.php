@extends('layouts.app')

@section('metaTitle', 'comic id:{{ $comic->id }}')

@section('main')
<div class="container">
  <div class="img-wrapper">
    <img src="{{ $comic->thumb }}" alt="cover">
  </div>
  
  <section>
    <dl>
      <dt>Title</dt>
      <dd>{{ $comic->title }}</dd>
      <dt>description</dt>
      <dd>{{ $comic->description }}</dd>
      <dt>thumb</dt>
      <dd>{{ $comic->thumb }}</dd>
      <dt>price</dt>
      <dd>{{ $comic->price }}</dd>
      <dt>series</dt>
      <dd>{{ $comic->series }}</dd>
      <dt>sale_date</dt>
      <dd>{{ $comic->sale_date }}</dd>
      <dt>type</dt>
      <dd>{{ $comic->type }}</dd>
      <dt>created_at</dt>
      <dd>{{ $comic->created_at }}</dd>
      <dt>updated_at</dt>
      <dd>{{ $comic->updated_at }}</dd>
    </dl>

  </section>
</div>
@endsection