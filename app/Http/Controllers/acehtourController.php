<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class acehtourController extends Controller
{
    public function readdata()
    {
        $select = DB::table('komentar')
            ->select('komentar')
            ->get();
        $select = json_decode($select, true);

        // $sinopsis = DB::table('notesinopsis')
        //     ->select('judul', 'sinopsis')
        //     ->get();
        // $sinopsis = json_decode($sinopsis, true);

        return view('komentar', [
            'select' => $select,
            // 'sinopsis' => $sinopsis,
        ]);
    }

    public function input()
    {
        return view('komentar');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('komentar')->insert([
            'komentar' => $request->komentar,
            // 'sinopsis' => $request->sinopsis,
        ]);

        return redirect('/komentar');
    }
}