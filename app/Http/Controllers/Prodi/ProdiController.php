<?php

namespace App\Http\Controllers\Prodi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use Response;
use Validator;
use App\Prodi as Prodi;

class ProdiController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	} 
	public function index() {
		$data = Prodi::all();
		return view('admin.prodi.prodi', ['prodi' => $data]);
	}
	public function tambah(){
		$data = Prodi::all();
		return view('admin.prodi.tambah', $data);
	}
	public function create() {
		$input = Input:: all();
		$validasi = array(
			'prodiKode' => 'required|unique:program_studi',
			'prodiNama' => 'required|max:60',
			'prodiKodeLabel' => 'required|max:2|unique:program_studi',
			'prodiJenjang' => 'required'
		);
		$message = array(
			'prodiKode.required' => 'kode program studi dibutuhkan',
			'prodiKode.unique' => 'kode program studi sudah digunakan',
			'prodiNama.required' => 'nama program studi dibutuhkan',
			'prodiKodeLabel.required' => 'inisial program studi dibutuhkan',
			'prodiKodeLabel.unique' => 'inisial program studi sudah digunakan',
			'prodiJenjang.required' => 'jenjang program studi dibutuhkan'
		);
		$validator = Validator::make($input, $validasi, $message);
		if ($validator -> fails()) {
			
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			$prodi = new Prodi;
			$prodi->prodiKode = Input::get('prodiKode');
			$prodi->prodiNama = Input::get('prodiNama');
			$prodi->prodiKodeLabel = Input::get('prodiKodeLabel');
			$prodi->prodiJenjang = Input::get('prodiJenjang');
			$prodi->save();
			return Redirect::to('/prodi');
		}
	}
	public function editProdi($id) {
		$data = Prodi::find($id);
		return view('admin.prodi.editprodi', $data);
	}
	public function simpanEdit($id) {
		$input = Input::all();
		$message =[
			'prodiNama.required' => 'nama program studi dibutuhkan',
			'prodiKodeLabel.required' => 'inisaial program studi dibutuhkan',
			'prodiKodeLabel.unique' => 'inisial program studi sudah digunakan',
			'prodiJenjang.required' => 'jenjang program studi dibutuhkan'
		];
		return Validator::make($input, [
			'prodiKode' => 'required|unique:program_studi',
			'prodiNama' => 'required|max:60',
			'prodiKodeLabel' => 'required|unique:program_studi',
			'prodiJenjang' => 'required'
		], $message);
		if($validator->fails()) {
			return Redirect::back()->withErrors ($validator)->withInput();
		}
		$editprodi = Prodi::find($id);
		$editprodi->prodiKode = Input::get('prodiKode');
		$editprodi->prodiNama = $input['prodiNama'];
		$editprodi->prodiKodeLabel = $input['prodiKodeLabel'];
		$editprodi->prodiJenjang = $input['prodiJenjang'];
		if (! $editprodi->save())
			App::abort(500);
		return Redirect::action('Prodi\ProdiController@index')
		->with('SuccessMessage','Data Prodi"'.Input::get('prodiNama').'"telah berhasil diubah.');
	}
	public function hapus($id) {
		$prodiKode = Prodi::where('prodiKode', '=', $id)->first();
		if ($prodiKode ===null)
			App::abort(404);
		$prodiKode->delete();
		return Redirect::action('Prodi\ProdiController@index');
	}
}
