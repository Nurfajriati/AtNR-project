<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ratingController extends Controller
{
    public function readdata()
    {
        $rating = DB::table('rating')
            ->select('rating_web', 'nama_tempat','rating_tempat')
            ->get();
        $rating = json_decode($rating, true);

        return view('rating',[
            'rating'=>$rating,
        ]);
    }
    
    public function store(Request $request)
    {
         //memasukkan data kedalam databse
         DB::table('rating')->insert([
            'rating_web' => $request->rating_web,
            'nama_tempat' => $request->nama_tempat,
            'rating_tempat' => $request->rating_tempat,
        ]);

        return redirect('/rating');
    }
}
