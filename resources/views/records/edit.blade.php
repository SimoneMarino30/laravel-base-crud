@extends('layout.app')

@section('page-name', 'Edit Record ')

@section('cdn')
{{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('main_content')

<h1 class="my-3 text-success">Edit details of record n° {{ $record->id }}:</h1>

<form action="{{ route('records.update', $record) }}" method="POST" class="row gy-3">
  {{-- * Invio del form, Token * --}}
  @csrf
  {{-- * Cambio del method --}}
  @method('PUT')

<div class="col-6">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" 
  value="{{ old('title') ?? $record->title }}">
  @error('title')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-6">
  <label for="album" class="form-label">Album</label>
  <input type="text" class="form-control @error('album') is-invalid @enderror" id="album" name="album" 
  value="{{ old('album') ?? $record->album}}">
  @error('album')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-6">
  <label for="author" class="form-label">Author</label>
  <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" 
  value="{{ old('author') ?? $record->author }}">
  @error('author')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-6">
  <label for="year" class="form-label">Year</label>
  <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year" 
  value="{{ old('year') ?? $record->year }}">
  @error('year')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-6">
  <label for="editor" class="form-label">Editor</label>
  <input type="text" class="form-control @error('editor') is-invalid @enderror" id="editor" name="editor" 
  value="{{ old('editor') ?? $record->editor }}">
  @error('editor')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-6">
  <label for="length" class="form-label">Length</label>
  <input type="text" class="form-control @error('length') is-invalid @enderror" id="length" name="length" 
  value="{{ old('length') ?? $record->length }}">
  @error('length')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-12">
  <label for="poster" class="form-label">Poster</label>
  <input type="text" class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster"  
  value="{{ old('poster') ?? $record->poster }}">
  @error('poster')
  <div class="invalid-feedback">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="col-12 d-flex">
  <button type="submit" class="btn btn-outline-success ms-auto">Save</button>
</div>

</form>
@endsection