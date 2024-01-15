@extends('layout.main')
@section('content')
<main class="py-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-title">
            <strong>Add Car</strong>
          </div>
          <form action="{{ route('cars.save') }}" method="POST">
            @csrf
            @include('carviews._form')
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection