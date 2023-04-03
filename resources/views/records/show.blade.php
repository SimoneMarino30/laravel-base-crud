@extends('layout.app')

@section('page-name', 'Detail')

@section('main_content')
<ul>
  @foreach ($record->getAttributes() as $attr => $value)
  {{-- <li>{{ $attr }} => {{ $value }}</li>
</ul> --}}
@endforeach
{{-- card --}}
<div class="card" style="width: 18rem;">
  <img src="{{ $record->poster }}" class="card-img-top img-fluid" alt="...">
  <div class="card-body text-dark">
    <h5 class="card-title">{{ $record->title }}</h5>
    <p class="card-text">{{ $record->author }}</p>
    <p class="card-text">{{ $record->album }} - {{ $record->editor }}</p>
    <p class="card-text">{{ $record->year }} - {{ $record->length }}</p>
    <a href="{{ route('records.index')}}" class="btn btn-success">Back to List</a>
  </div>
</div>
@endsection

