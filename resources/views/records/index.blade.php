@extends('layout.app')

@section('page-name', 'Records list')

@section('cdn')
{{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('main_content')
  <div class="row my-4">
      <form class="col-8 d-flex justify-content-start" role="search">
        <input class="form-control me-2" name="term" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-0" type="submit">Search</button>
      </form>
      <div class="col-4 d-flex justify-content-end">
        <a type="button" href="{{ route('records.create') }}" class="btn btn-outline-success">Create New Record</a>
      </div>
  </div>
  
  <table class="table table-dark table-striped table-hover">
    <thead>
    <tr>
      <th scope="col">ID:</th>
      <th scope="col">Title:</th>
      <th scope="col">Author:</th>
      <th scope="col">Editor:</th>
      <th scope="col">Year:</th>
      <th scope="col">Length:</th>
      <th scope="col">Actions:</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($records as $record)
    <tr>
      <th scope="row">{{ $record->id }}</th>
      <td>{{ $record->title }}</td>
      <td>{{ $record->author }}</td>
      <td>{{ $record->editor }}</td>
      <td>{{ $record->year }}</td>
      <td>{{ $record->length }}</td>
      <td>
        <a href="{{ route('records.show', $record) }}">
          <i class="bi bi-vinyl-fill me-2 text-success"></i>
        </a>
        <a href="{{ route('records.edit', $record) }}">
          <i class="bi bi-pencil-fill me-2 text-success"></i>
        </a>
        <button class="bi bi-trash3-fill text-danger btn-trash" data-bs-toggle="modal" data-bs-target="#delete-modal-{{ $record->id }}"></button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{-- Paginazione di Bootstrap --}}
{{ $records->links('pagination::bootstrap-5') }}
@endsection

@section('modals')
@foreach ($records as $record)
<!-- Modal -->
<div class="modal fade" id="delete-modal-{{ $record->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header modal-bg">
        <h1 class="modal-title fs-5 text-danger" id="exampleModalLabel">Attenzione, il record n° {{ $record->id }} sta per essere eliminato</h1>
        <a type="button" class="text-success" data-bs-dismiss="modal" aria-label="Close">
          <i class="bi bi-x-circle"></i>
        </a>
      </div>
      <div class="modal-body modal-bg">
        Vuoi eliminare definitivamente il record? <br>
        La risorsa non potrà essere recuperata
      </div>
      <div class="modal-footer modal-bg">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          <i class="bi bi-disc"></i>
          Annulla
        </button>
      
        <form action="{{ route('records.destroy', $record) }}" method="POST">
          @csrf
          @method('delete')
          
          <button class="btn btn-danger">
            <i class="bi bi-trash3-fill"></i>
            Delete
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection