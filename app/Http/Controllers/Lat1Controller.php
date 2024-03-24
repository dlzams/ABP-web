<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"] = "Agus";
        $data["asal"] = "Bandung";
    
        return view('v_latihan1', $data);
    }

    public function method2(){
		$data['title'] = "Daftar Mahasiswa";
		$data['daf_mhs'] = array(
			array("nama" => "Azzam", "asal" => "Bandung"),
	 	    array("nama" => "Agung", "asal" => "Jakarta"),
		    array("nama" => "Sachra", "asal" => "Surabaya"),
            array("nama" => "Lazuardi", "asal" => "Jayapura"),
            array("nama" => "Kemal", "asal" => "Japan"),
            array("nama" => "Aziz", "asal" => "UK"),
            array("nama" => "Max Verstrappen", "asal" => "Netherland")
		);
		return view('v_latihan2', $data);
	}

}
