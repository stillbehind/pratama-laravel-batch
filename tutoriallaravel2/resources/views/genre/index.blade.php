@extends('layouts.master')

@section('judul')
Nama Genre 
@endsection

@section('content')


<a href="/genre/create" class="btn btn-primary">Tambah Genre</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th><th>Nama Genre</th><th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($genres as $key => $genre)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $genre->name }}</td>
            <td>
                <a href="/genre/{{ $genre->id }}" class="btn btn-info">Show</a>
                <a href="/genre/{{ $genre->id }}/edit" class="btn btn-warning">Edit</a>
                <form action="/genre/{{ $genre->id }}" method="POST" style="display:inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="3">Belum ada genre</td></tr>
        @endforelse
    </tbody>

  
</table>

  @endsection