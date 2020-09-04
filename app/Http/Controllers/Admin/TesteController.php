<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(){
        return 'Teste Controller de admin';
    }

    public function dashboard(){
        return 'Dashboard de admin';
    }

    public function financeiro(){
        return 'Financeiro de admin';
    }
}
