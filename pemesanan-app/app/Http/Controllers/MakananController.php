<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakananController extends Controller
{
    public function index()
    {
    	// mengambil data dari table makanan
    	$makanan = DB::table('makanan')->get();

    	// mengirim data makanan ke view index
    	return view('makanan' ,['makanan' => $makanan]);
 
    }
}
