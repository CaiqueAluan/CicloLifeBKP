<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfil;

class PerfilController extends Controller
{
    //CRUD

    //create
    public function store(Request $request)
    {
       
        
        $perfil = new Perfil;

        $perfil->bio = $request->bio;
        $perfil->nascimento = $request->nascimento;
        $perfil->cidade = $request->cidade;
        $perfil->user_id = auth()->user()->id;

        $perfil->save();
        
        return redirect('dashboard');
    }

    //reade
    public function read()
    {
        $user = auth()->user()->id;
        //Carrega as despesas na variável
        //SELECT WHERE
        $bio = Perfil::where('', 'Despesa')->where('user_id', $user)->get();

        //Carrega a view passando os dados consultados
        $dados = [
            'bio' => $bio,
        ];

        return view('dashboard', $dados);
    }
}
