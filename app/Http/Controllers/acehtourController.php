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

        return view('komentar', [
            'select' => $select,
        ]);
    }

    public function input()
    {
        return view('komentar');
        return view('rating');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('komentar')->insert([
            'komentar' => $request->komentar,
        ]);

        return redirect('/komentar');

    }

    
}