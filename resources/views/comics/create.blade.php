@extends('layouts.app')

@section('metaTitle', 'Add comic to db')

@section('main')
  <main>
    <h1>add new comic to db</h1>
    <form action="{{ route('comics.store') }}" method="POST">
      @csrf
      <div class="d-flex align-items-center">
        <label class="w-25 p-3" for="title">title:</label>
        <input type="text" name="title" id="input-title" placeholder="input title">
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3" for="description">description:</label>
        <textarea name="description" id="input-description" cols="50" rows="10">
          input description
        </textarea>
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3" for="thumb">thumb:</label>
        <textarea name="thumb" id="input-thumb" cols="50" rows="10">
          input thumb
        </textarea>
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3" for="price">price:</label>
        <input type="number" name="price" id="input-price" placeholder="input price">
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3" for="series">series:</label>
        <input type="text" name="series" id="input-series" placeholder="input series">
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3" for="sale-date">sale date:</label>
        <input type="date" name="sale_date" id="input-sale-date" placeholder="input sale-date">
      </div>
      <div class="d-flex align-items-center">
        <label class="w-25 p-3" for="type">type:</label>
        <input type="text" name="type" id="input-type" placeholder="input type">
      </div>
      <div class="p-3">
        <button type="submit">Add comic</button>
        <button type="reset">Reset</button>
      </div>
    </form>
  </main>
@endsection