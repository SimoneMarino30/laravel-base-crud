@extends('layout.app')

@section('page_name')
show
@endsection

@section('main_content')
<ul>
  @foreach ($record->getAttributes() as $attr => $value)
  <li>{{ $attr }} => {{ $value }}</li>
</ul>
@endforeach
@endsection

