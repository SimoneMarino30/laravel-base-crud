@extends('layout.app')

@section('page-name', 'Homepage')

@section('cdn')
{{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  {{-- Fontawesome Icons --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('main_content')
<div class="row row-cols-2">
  <div class="col"><i class="fa-solid fa-compact-disc fa-spin mt-5" id="home-vinyl" style="color: #198754;"></i></div>
  <div class="col" id="home-text">WELCOME TO THE FAKEST RECORDS LIST ON THE WHOLE INTERNET!</div>
</div>

@endsection


    
