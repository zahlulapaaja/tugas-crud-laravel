<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index($pertanyaan_id) {
        $pertanyaan = PertanyaanModel::get_by_id($pertanyaan_id);
    	$jawaban = JawabanModel::get_by_pertanyaan_id($pertanyaan_id);
    	return view('jawaban.index', compact('jawaban', 'pertanyaan'));
    }

    public function create($pertanyaan_id) {
        $pertanyaan = PertanyaanModel::get_by_id($pertanyaan_id);
        return view('jawaban.form', compact('pertanyaan'));
    }

    public function store(Request $request) {
    	// dd($request->all());
    	$data = $request->all();
    	unset($data["_token"]);
    	$saved = JawabanModel::save($data);
	    return redirect('/jawaban/' . $data["pertanyaan_id"]);
    }
}
