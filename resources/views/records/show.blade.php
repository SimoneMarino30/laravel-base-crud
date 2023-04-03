@extends('layout.app')

@section('page-name', 'Detail')

@section('main_content')
<ul>
  @foreach ($record->getAttributes() as $attr => $value)
  <li>{{ $attr }} => {{ $value }}</li>
</ul>
@endforeach
@endsection

