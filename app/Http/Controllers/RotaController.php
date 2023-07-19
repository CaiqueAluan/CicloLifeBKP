<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rota;
use App\Models\User;

class RotaController extends Controller
{
    //CRUD

    //C
    public function store(Request $request)
    {


        $rota = new Rota;

        $rota->nomedoperfil = $request->nomedoperfil;
        $rota->comentario = $request->comentario;
        $rota->user_id = auth()->user()->id;

        $rota->save();

        return redirect('rotas');
    }

    //R
    public function read()
    {
        $users = User::get();

        $rotas = Rota::get();

        $dados = [
            'rotas' => $rotas,
            'users' => $users
        ];
        //dd($dados);
        return view('rotas', $dados);
    }

    //U
    public function update(Request $request)
    {
        Rota::findOrFail($request->id)->update($request->all());
        
        return redirect('rotas');
    }

    //D
    public function deletar($id){
        Rota::findOrFail($id)->delete();
        return redirect('rotas');
    }
}