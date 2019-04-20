<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index(Request $request) {
		$level = Auth::user()->level;
     switch ($level) {
        case "1":
            return $this->dashboardLevel1(); //Admin
            break;
        case "2":            
            return $this->dashboardLevel2($request); //Dosen
            break;
        case "3":
            return $this->dashboardLevel3(); //Mahasiswa
            break;
        default:
            abort(404);
      }
	}
	protected function dashboardLevel1() {
		return view('admin.index');
	}
  protected function dashboardLevel2() {
    return view('admin.index');
  }
  protected function dashboardLevel3() {
    return view('admin.index');
  }
}
