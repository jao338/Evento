<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        
        $busca = request('search');

        return view('products/produtos', ['busca' => $busca]);

    }

    public function search($id){

        return view('products/produto', ['id' => $id]);
    }

    public function create(){

    }
}
