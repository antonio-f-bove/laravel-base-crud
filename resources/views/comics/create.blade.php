@extends('layouts.app')

@section('metaTitle', 'Add comic to db')

@section('main')
  <main class="container">
    <h1>add new comic to db</h1>
    <form action="{{ route('comics.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label class="w-25 p-3 h3" for="title">title:</label>
        <input class="form-control @error('title') is-invalid @enderror" 
        value="{{ old('title') }}"
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
          {{ old('description') }}
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
          {{ old('thumb') }}
        </textarea>
        @error('thumb')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label class="w-25 p-3 h3" for="price">price:</label>
        <input class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"
        type="text" inputmode="numeric" name="price" id="input-price" placeholder="input price"
        >
        @error('price')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label class="w-25 p-3 h3" for="series">series:</label>
        <input class="form-control @error('series') is-invalid @enderror" 
        value="{{ old('series') }}"
        type="text" name="series" id="input-series" placeholder="input series"
        >
        @error('series')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label class="w-25 p-3 h3" for="sale-date">sale date:</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" 
        value="{{ old('sale_date') }}"
        type="date" name="sale_date" id="input-sale-date" placeholder="input sale-date"
        >
        @error('sale_date')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="form-group">
        <label class="w-25 p-3 h3" for="type">type:</label>
        <input class="form-control @error('type') is-invalid @enderror" 
        value="{{ old('type') }}"
        type="text" name="type" id="input-type" placeholder="input type"
        >
        @error('type')
          <small class="invalid-feedback">{{ $message }}</small>
        @enderror
      </div>
      <div class="p-3">
        <button type="submit">Add comic</button>
        <button type="reset">Reset</button>
      </div>
    </form>
  </main>
@endsection