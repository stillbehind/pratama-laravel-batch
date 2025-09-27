@extends('layouts.master')

@section('judul')
Nama Genre 
@endsection

@section('content')


<h2>Detail Genre</h2>
<p>ID: {{ $genre->id }}</p>
<p>Nama: {{ $genre->name }}</p>

@endsection