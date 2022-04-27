@extends('layouts.app')

@section('metaTitle', 'edit comic info')

@section('main')
  <main>
    <h1>add new comic to db</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="d-flex align-items-center">
        <label class="w-25 p-3 h3" for="title">title:</label>
        <input type="text" name="title" id="input-title" value="{{ $comic->title }}">
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3 h3" for="description">description:</label>
        <textarea name="description" id="input-description" cols="50" rows="10">
          {{ $comic->description }}
        </textarea>
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3 h3" for="thumb">thumb url:</label>
        <textarea name="thumb" id="input-thumb" cols="50" rows="2">
          {{ $comic->thumb }}
        </textarea>
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3 h3" for="price">price:</label>
        <input type="text" inputmode="numeric" name="price" id="input-price" value="{{ $comic->price }}">
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3 h3" for="series">series:</label>
        <input type="text" name="series" id="input-series" value="{{ $comic->series }}">
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3 h3" for="sale-date">sale date:</label>
        <input type="date" name="sale_date" id="input-sale-date" value="{{ $comic->sale_date }}">
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3 h3" for="type">type:</label>
        <input type="text" name="type" id="input-type" value="{{ $comic->type }}">
      </div>
      <div class="p-3">
        <button type="submit">Update</button>
      </div>
    </form>
  </main>
@endsection