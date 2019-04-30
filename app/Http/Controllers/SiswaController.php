<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
	public function index() {
		return Siswa::all();
	}

	public function create(Request $request) {
		$siswa = new Siswa;
		$siswa->nama = $request->nama;
		$siswa->domisili = $request->domisili;
		$siswa->save();

		return "Successfully. Siswa has been added.";
	}

	public function update(Request $request, $id) {
		$nama = $request->nama;
		$domisili = $request->domisili;

		$siswa = Siswa::find($id);
		$siswa->nama = $nama;
		$siswa->domisili = $domisili;
		$siswa->save();

		return "Successfully. Siswa has been updated";
	}

	public function delete($id) {
		$siswa = Siswa::find($id);
		$siswa->delete();

		return "Successfully. Siswa has been deleted";
	}
}