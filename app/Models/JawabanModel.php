<?php 

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
	public static function get_by_pertanyaan_id($pertanyaan_id) {
		$jawaban = DB::table('jawaban')->get()->where('pertanyaan_id', $pertanyaan_id);
		return $jawaban;
	}

	public static function save($data) {
        $data["created_at"] = DB::raw('now()');
		$new_jawaban = DB::table('jawaban')->insert($data);
		return $new_jawaban;
	}

}