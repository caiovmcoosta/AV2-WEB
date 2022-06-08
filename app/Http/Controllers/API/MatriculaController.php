<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Matricula;
use App\Http\Resources\MatriculaResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matriculas = Matricula::all();
        return response([ 'data' => MatriculaResource::collection($matriculas), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'Nome Aluno' => 'required|max:255',
            'Data de Nascimento' => 'required|max:255',
            'CPF' => 'required|numeric',
            'RG' => 'required|numeric',
            'Nacionalidade' => 'required|max:255',
            'Email' => 'required|max:255',
            'Endereço' => 'required|max:255',
            'Complemento' => 'required|max:255',
            'Cidade' => 'required|max:255',
            'Estado' => 'required|max:255',
            'CEP' => 'required|numeric',
            'Sexo' => 'required|max:255',
            'Estado Civil' => 'required|max:255',
            'Ingressão' => 'required|max:255',
            'Período' => 'required|max:255',
            'Conclusão Ensino Medio' => 'required|max:255',
            'Telefone' => 'required|numeric',
            'Celular' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'message' => 'Validation Error']);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function show(Matricula $matricula)
    {
        return response(['data' => new MatriculaResource($imc), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matricula $matricula)
    {
        $imc->update($request->all());

        return response(['data' => new MatriculaResource($Matricula), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matricula $matricula)
    {
        $matricula->delete();

        return response(['message' => 'Deleted']);
    }
}