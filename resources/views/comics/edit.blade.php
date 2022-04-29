@extends('layouts.app')

@section('metaTitle', 'edit comic info')

@section('main')
  <main>
    <h1>edit comic-book info</h1>
    <form action="{{ route('comics.update', $comic) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label class="w-25 p-3 h3" for="title">title:</label>
        <input class="form-control @error('title') is-invalid @enderror" 
        value="{{ old('title') ?: $comic->title}}"
        type="text" name="title" id="input-title" placeholder="input title"
        >
        @error('title')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label class="w-25 p-3 h3" for="description">description:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" 
        name="description" id="input-description" 
        cols="50" rows="10" placeholder="input description"
        >
          {{ old('description') ?: $comic->description }}
        </textarea>
        @error('description')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label class="w-25 p-3 h3" for="thumb">thumb url:</label>
        <textarea class="form-control @error('thumb') is-invalid @enderror" 
        name="thumb" id="input-thumb" cols="50" rows="2" placeholder="input url"
        >
          {{ old('thumb') ?: $comic->thumb }}
        </textarea>
        @error('thumb')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label class="w-25 p-3 h3" for="price">price:</label>
        <input class="form-control @error('price') is-invalid @enderror" 
        value="{{ old('price') ?: $comic->price }}"
        type="text" inputmode="numeric" name="price" id="input-price" placeholder="input price"
        >
        @error('price')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label class="w-25 p-3 h3" for="series">series:</label>
        <input class="form-control @error('series') is-invalid @enderror" 
        value="{{ old('series') ?: $comic->series }}"
        type="text" name="series" id="input-series" placeholder="input series"
        >
        @error('series')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label class="w-25 p-3 h3" for="sale-date">sale date:</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" 
        value="{{ old('sale_date') ?: $comic->sale_date }}"
        type="date" name="sale_date" id="input-sale-date" placeholder="input sale-date"
        >
        @error('sale_date')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label class="w-25 p-3 h3" for="type">type:</label>
        <input class="form-control @error('type') is-invalid @enderror" 
        value="{{ old('type') ?: $comic->type }}"
        type="text" name="type" id="input-type" placeholder="input type"
        >
        @error('type')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="p-3">
        <button type="submit">Update</button>
      </div>
    </form>
  </main>
@endsection