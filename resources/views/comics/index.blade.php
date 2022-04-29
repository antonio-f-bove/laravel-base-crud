@extends('layouts.app')

@section('metaTitle', 'Comics')

@section('main')
  <table class="table table-dark">
    <thead>
      <th>id</th>
      <th>title</th>
      <th>description (preview)</th>
      <th>thumbnail url</th>
      <th>price</th>
      <th>sale_date</th>
      <th>ACTIONS</th>
    </thead>
    <tbody>
      @foreach ($comics as $comic)
      <tr class="{{ $comic->trashed() ? 'table-danger' : '' }}">
        <td>{{ $comic->id }}</td>
        <td>{{ $comic->title }}</td>
        <td>{{ substr($comic->description, 0, 50) . '...' }}</td>
        <td>{{ substr($comic->thumb, 0, 50) . '...' }}</td>
        <td>{{ $comic->price }}</td>
        <td>{{ $comic->sale_date }}</td>
        <td>
          <ul class="custom-list">
            @if (!$comic->trashed())
              <li>
                <a href="{{ route('comics.show', $comic) }}">Show details</a>
              </li>
              <li>
                <a href="{{ route('comics.edit', $comic) }}">Update</a>
              </li>
              <li>
                <a href="{{ route('comics.destroy', $comic) }}"
                  onclick="event.preventDefault();
                  document.getElementById('delete-form-{{ $comic->id }}').submit();"
                  >
                    Delete
                </a>
              </li>
            @else
              <li>
                <a href="{{ route('comics.restore', $comic) }}"
                onclick="event.preventDefault();
                document.getElementById('restore-form-{{ $comic->id }}').submit();"
                >
                  Restore
                </a>
                <form action="{{ route('comics.restore', $comic) }}" method="POST"
                id="restore-form-{{ $comic->id }}" style="display: none;"
                >
                  @csrf
                  @method('POST')
                </form>
              </li>
              <li>
                <a href="{{ route('comics.destroy', $comic) }}"
                onclick="event.preventDefault();
                document.getElementById('delete-form-{{ $comic->id }}').submit();"
                >
                  Delete permanently
                </a>
              </li>
            @endif
            <form id="delete-form-{{ $comic->id }}" action="{{ route('comics.destroy', $comic) }}"
              method="POST" style="display: none;"
              >
              @csrf
              @method('DELETE')
            </form>
          </ul>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection