@extends('layouts.master')

@section('judul')
Nama Genre 
@endsection

@section('content')

<form action="/genre" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Genre</label>
        <input type="text" name="name" class="form-control">
        @error('name') <div class="text-danger">{{ $message }}</div> @enderror

        <div class="form-group">
    <label for="description">Deskripsi</label>
    <textarea name="description" class="form-control" id="description" placeholder="Masukkan deskripsi genre"></textarea>
</div>

    </div>
    <button class="btn btn-primary">Simpan</button>
</form>

@endsection