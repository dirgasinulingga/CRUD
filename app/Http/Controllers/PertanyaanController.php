<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\pertanyaanModel;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = pertanyaanModel::get_all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create(){
        $pertanyaan = pertanyaanModel::get_all();
        return view('pertanyaan.create', compact('pertanyaan'));
    } 
    
    public function store(){
        $pertanyaan = pertanyaanModel::get_all();
        return view('pertanyaan.store', compact('pertanyaan'));
    } 
}
