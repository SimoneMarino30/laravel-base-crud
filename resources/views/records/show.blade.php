@extends('layout.app')

@section('page-name', 'Detail')

@section('main_content')
{{-- <ul> --}}
@foreach ($record->getAttributes() as $attr => $value)
  {{-- <li>{{ $attr }} => {{ $value }}</li>
</ul> --}}
@endforeach
{{-- card --}}
{{-- <div class="card" style="width: 18rem;">
  <img src="{{ $record->poster }}" class="card-img-top img-fluid" alt="...">
  <div class="card-body text-dark">
    <h5 class="card-title">{{ $record->title }}</h5>
    <p class="card-text">{{ $record->author }}</p>
    <p class="card-text">{{ $record->album }} - {{ $record->editor }}</p>
    <p class="card-text">{{ $record->year }} - {{ $record->length }}</p>
    <a href="{{ route('records.index')}}" class="btn btn-success">Back to List</a>
  </div>
</div> --}}

{{-- *********** NEW LAYOUT ********** --}}
<div class="row">
  <div class="col-8">
    <h3 class="text-success">Title:</h3>
      <p class="fs-3">{{ $record->title }}</p>
    <div class="my-4">
      <h3 class="text-success">Author:</h3>
      <p class="fs-3">{{ $record->author }}</p>
      <h3 class="text-success">Album:</h3>
      <p class="fs-3">{{ $record->album }}</p>
      <h3 class="text-success">Editor:</h3>
      <p class="fs-3">{{ $record->editor }}</p>
      <h3 class="text-success">Year:</h3>
      <p class="fs-3">{{ $record->year }}</p>
      <h3 class="text-success">Length:</h3>
      <p class="fs-3">{{ $record->length }}</p>
    </div>
  </div>
  <div class="col-4">
    <img src="{{ $record->poster }}" class="img-fluid my-5" alt="img">
    <br>
    <a href="{{ route('records.index')}}" class="btn btn-success">Back to List</a>
  </div>
</div>
@endsection


