<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Cidade;

class CidadeController extends Controller
{
    public function inserir(Request $request)
    {
        $dados = $request->only( 'nome', 'pacode', 'carga_horaria','data_inicio',
            'data_fim','finalizado','modulo1','modulo2','modulo3','modulo4','modulo5',
            'modulo6','modulo7','modulo8','modulo9','modulo10');
        $cidade = Cidade::create($dados);
        if($cidade){
            return response()->json($cidade,200);
        }

        return response()->json(['error' => 'Falha na inserção'],400);
    }
}
