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

        $rating = DB::table('rating')
            ->select('rating_web', 'nama_tempat','rating_tempat')
            ->get();
        $rating = json_decode($rating, true);

        return view('komentar', [
            'select' => $select,
        ]);

        return view('rating',[
            'rating'=>$rating,
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

        //memasukkan data kedalam databse
        DB::table('rating')->insert([
            'rating' => $request->rating,
        ]);

        return redirect('/rating');

    }
}