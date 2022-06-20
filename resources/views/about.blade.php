@extends('layouts.main')

@section('content')
    <h1 class="text-4xl font-bold text-slate-800">Halaman About</h1>
    <h3 class="text-2xl mt-3">{{ $nama }}</h3>
    <p class="text-xl">{{ $email }}</p>
    <img src="img/1.jpg" alt="Nur Multazam" class="w-52 rounded-lg shadow-lg mt-3">
@endsection
