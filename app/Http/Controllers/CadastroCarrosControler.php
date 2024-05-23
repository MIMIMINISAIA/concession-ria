<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarrosRequest;
use App\Models\Carros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CadastroCarrosControler extends Controller
{
    public function Cadastro(CarrosRequest $request)
    {
        $carros = Carros::create([
            'modelo' => $request->modelo,
            'ano' => $request->ano,
            'marca' => $request->marca,
            'cor' => $request->cor,
            'peso' => $request->peso,
            'potencia' => $request->potencia,
            'descricao' => $request->descricao,
            'valor' => $request->valor,

        ]);

        return response()->json([
            "success" => true,
            "message" => "Carro Cadastrado com sucesso",
            "data" => $carros
        ], 200);
    }

    


    public function retornarTodos()
    {
        $carros = Carros::all();
        return response()->json([
            'status' => true,
            'data' => $carros
        ]);
    }

    public function pesquisarPorModelo($modelo)
    {
        $carros = Carros::where('modelo', 'like', '%' . $modelo . '%')->get();

        if (count($carros) > 0) {
            return response()->json([
                'status' => true,
                'data' => $carros
            ]);
        }

        return response()->json([
            'status' => false,
            'data' => 'Não há resultados para a pesquisa.'
        ]);
    }

   
   
    public function update(Request $request)
    {
        $carros = Carros::find($request->id);

        if (!isset($carros)) {
            return response()->json([
                'status' => false,
                'message' => "Cadastro não encontrado"
            ]);
        }

        if (isset($request->modelo)) {
            $carros->modelo = $request->modelo;
        }
        if (isset($request->ano)) {
            $carros->ano = $request->ano;
        }
        if (isset($request->marca)) {
            $carros->marca = $request->marca;
        }
        if (isset($request->cor)) {
            $carros->cor = $request->cor;
        }
        if (isset($request->peso)) {
            $carros->peso = $request->peso;
        }
        if (isset($request->potencia)) {
            $carros->potencia = $request->potencia;
        }
        if (isset($request->descricao)) {
            $carros->descricao = $request->descricao;
        }
        if (isset($request->valor)) {
            $carros->valor = $request->valor;
        };
        

        $carros->update();

        return response()->json([
            'status' => true,
            'message' => "Cadastro atualizado"
        ]);
    }

    public function excluir($id)
    {
        $carros = Carros::find($id);

        if (!isset($carros)) {
            return response()->json([
                'status' => false,
                'message' => "Cadastro não encotrado"
            ]);
        }

        $carros->delete();

        return response()->json([
            'status' => true,
            'message' => "Cadastro excluido com sucesso"
        ]);
    }

}
