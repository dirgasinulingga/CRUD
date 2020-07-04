<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\jawabanModel;

class JawabanController extends Controller
{
    public function index() {
        $jawaban = jawabanModel::get_all();
        return view('jawaban.index', compact('jawaban'));
    }

    public function store() {
        $jawaban = jawabanModel::get_all();
        return view('jawaban.store', compact('jawaban'));
    }
}
