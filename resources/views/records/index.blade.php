@extends('layout.app')

@section('page-name', 'Records list')

@section('cdn')
{{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('main_content')
<div class="container">
  <form class="d-flex mb-3" role="search">
        <input class="form-control me-2" name="term" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  <table class="table table-dark table-striped table-hover">
    <thead>
    <tr class="table-success">
      <th class="table-primary" scope="col">ID:</th>
      <th scope="col">Title:</th>
      <th scope="col">Author:</th>
      <th scope="col">Length:</th>
      <th scope="col">Actions:</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($records as $record)
    <tr>
      <th class="table-success" scope="row">{{ $record->id }}</th>
      <td>{{ $record->title }}</td>
      <td>{{ $record->author }}</td>
      <td>{{ $record->length }}</td>
      <td>
        <a href="{{ route('records.show', $record) }}">
          <i class="bi bi-vinyl-fill"></i>
        </a>
      </td>
      {{-- had set limit on 25 in RecordController --}}
    </tr>
    @endforeach
  </tbody>
</table>
{{ $records->links('pagination::bootstrap-5') }}
</div>
@endsection
