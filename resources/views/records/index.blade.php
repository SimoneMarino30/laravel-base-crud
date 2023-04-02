@extends('layout.app')

@section('page_name')
Index page
@endsection

@section('main_content')
<div class="container">
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
        <a href="{{ route('records.show', ['record' => $record]) }}">
          Detail: <i class="bi bi-vinyl-fill"></i>
        </a>
      </td>
      {{-- had set limit on 25 in RecordController --}}
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
