<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index() {
    	$pertanyaan = PertanyaanModel::get_all();
    	return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create() {
    	return view('pertanyaan.form');
    }

    public function store(Request $request) {
    	// dd($request->all());
    	$data = $request->all();
    	unset($data["_token"]);
    	$pertanyaan = PertanyaanModel::save($data);
    	if($pertanyaan) {
    		$pertanyaan = PertanyaanModel::get_all();
	    	return view('pertanyaan.index', compact('pertanyaan'));
	    }
    }

    public function show($id) {
        $pertanyaan = PertanyaanModel::get_by_id($id);
        $jawaban = JawabanModel::get_by_pertanyaan_id($id);
        return view('pertanyaan.detail', compact('pertanyaan', 'jawaban'));
    }

    public function edit($id) {
        $pertanyaan = PertanyaanModel::get_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request) {
        $data = $request->all();
        $pertanyaan = PertanyaanModel::update($id, $data);
        return redirect('/pertanyaan');
    }

    public function destroy($id) {
        $deleted = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
 