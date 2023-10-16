@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    @forelse ($movies as $movie)
      <strong>Titolo:</strong>
      <p> {{ $movie->title }}</p>

      <strong>Titolo originale:</strong>
      <p>{{ $movie->original_title }}</p>

      <strong>Voto</strong>
      <p>{{ $movie->vote }}</p>
      <hr>
    @empty
      <h2>Nessun Film nella lista</h2>
    @endforelse

  </section>
@endsection
