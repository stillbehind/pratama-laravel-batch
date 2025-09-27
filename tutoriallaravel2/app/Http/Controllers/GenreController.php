<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;




class GenreController extends Controller
{
    //
    public function index()
    {
        $genres = DB::table('genres')->get();
        return view('genre.index', compact('genres'));
    }

    public function create()
    {
        return view('genre.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        $now = Carbon::now();

        DB::table('genres')->insert([
            'name' => $request->name,
            'description' => $request-> input('description'),
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        return redirect('/genre');
    }

    public function show($id)
    {
        $genre = DB::table('genres')->where('id', $id)->first();
        return view('genre.show', compact('genre'));
    }

    public function edit($id)
    {
        $genre = DB::table('genres')->where('id', $id)->first();
        return view('genre.edit', compact('genre'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:genres,name,' . $id
        ]);

        DB::table('genres')->where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect('/genre');
    }

    public function destroy($id)
    {
        DB::table('genres')->where('id', $id)->delete();
        return redirect('/genre');
    }

}
