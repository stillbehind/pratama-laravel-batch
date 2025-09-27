@extends('layouts.master')

@section('judul')
Nama Genre 
@endsection

@section('content')

<form action="/genre/{{ $genre->id }}" method="POST">
    @csrf @method('PUT')
    <div class="form-group">
        <label>Nama Genre</label>
        <input type="text" name="name" value="{{ $genre->name }}" class="form-control">
        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
    </div>
    <button class="btn btn-success">Update</button>
</form>

@endsection 