<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateFinanceiro2Request;
use Illuminate\Http\Request;

class Financeiro2Controller extends Controller
{
    protected $request;

    public function __construct(Request $request) //Injeção de Dependencias (explicacao do video)
    {
        //dd($request);
        $this->request = $request;

        //Middlewares em controllers

        /* $this->middleware('auth'); */

        //middlewares em controllers especificos (usar only)
        /*$this->middleware('auth')->only([
            'create', 'store'
        ]);*/

        //middlewares em todos exceto
        $this->middleware('auth')->except(['index', 'show', 'create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = '<h1>Olá</h1>'; //testando as views com variavel
        $teste2 = 123;
        $teste3 = 'setada';
        $teste4 = 'aa';
        $teste5 = [1, 2, 3];
        $products = ['Tv', 'Smarthphone', 'Sofá'];
        return view('sobre', compact('teste', 'teste2', 'teste3', 'teste4', 'teste5', 'products'));

        //compact() funcao cria array para retornar
        //variaveis
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teste.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreUpdateFinanceiro2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateFinanceiro2Request $request)//adicionar como parametro e colocar no @param
    { //CRIACAO DE BANCO DE DADOS, USAR O COMANDO NO CMD: php artisan migrate
        // $request->validate([
        //     'name' => 'required|min:3|max:255',
        //     'texto' => 'nullable|required|min:3|max:255'
        // ]);
        //UTILIZAR A LINHA DE COMANDO 
        //php artisan make:request StoreUpdateFinanceiro2Request
        //PARA CRIAR A VALIDACAO DA FORMA CORRETA
         dd('ok');
            //dd($request->all());
        //dd($request->only(['name', 'texto']));
        //dd($request->texto);
        //dd($request->has('teste'));
        // dd($request->input('teste', 'default'));
        //dd($request->except('_token'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
