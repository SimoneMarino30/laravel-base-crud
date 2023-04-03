@extends('layout.app')

@section('page-name', 'New Record')

@section('main_content')
<h1 class="my-3">Insert details :</h1>
<form action="{{ route('records.store') }}" method="POST" class="row gy-3">
  {{-- * Invio del form, Token * --}}
  @csrf
  {{-- **** --}}
<div class="col-6">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title">
</div>

<div class="col-6">
  <label for="album" class="form-label">Album</label>
  <input type="text" class="form-control" id="album" name="album">
</div>

<div class="col-6">
  <label for="author" class="form-label">Author</label>
  <input type="text" class="form-control" id="author" name="author">
</div>

<div class="col-6">
  <label for="year" class="form-label">Year</label>
  <input type="text" class="form-control" id="year" name="year">
</div>

<div class="col-6">
  <label for="editor" class="form-label">Editor</label>
  <input type="text" class="form-control" id="editor" name="editor">
</div>

<div class="col-6">
  <label for="length" class="form-label">Length</label>
  <input type="text" class="form-control" id="length" name="length">
</div>

<div class="col-12">
  <label for="poster" class="form-label">Poster</label>
  <input type="text" class="form-control" id="poster" name="poster" aria-describedby="emailHelp">
</div>

<div class="col-12 d-flex">
  <button type="submit" class="btn btn-outline-success ms-auto">Save</button>
</div>

</form>
@endsection