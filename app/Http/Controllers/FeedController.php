<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Feed;

class FeedController extends Controller
{
    //CRUD

    //C
    public function store(Request $request)
    {


        $feed = new Feed;

        $feed->titulo = $request->titulo;
        $feed->texto = $request->texto;
        if ($request->file('foto')) {
            $randomTxt = Str::random(20);
            $file = $request->file('foto');
            $filename = $randomTxt . date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/uploads'), $filename);
            $feed->foto = $filename;
        }
        $feed->user_id = auth()->user()->id;

        $feed->save();

        return redirect('dashboard');
    }


    //R

    public function read()
    {
        $feeds = Feed::get();

        $dados = [
            'feeds' => $feeds
        ];
        //dd($dados);
        return view('dashboard', $dados);
    }



    //U

    public function update(Request $request)
    {
        Feed::findOrFail($request->id)->update($request->all());
        
        return redirect('dashboard');
    }

    //D

    public function deletar($id){
        Feed::findOrFail($id)->delete();
        return redirect('dashboard');
    }
}
