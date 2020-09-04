<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceiroController extends Controller
{
    public function index(){
        $values = ['1', '2', '3'];

        return $values;
    }

    public function show($id){
        return "Exibindo o produto de id: {$id}";
    }

    public function update($id){
        return "Editando o produto: {$id}";
    }

    public function store(){
        return "Cadastro de uma finança";
    }

    public function destroy(){
        return "destroindo algo";
    }

    public function create(){
        return "criando!";
    }
}
