<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kecelakaan;

class KecelakaanController extends Controller
{
    public function index(){
    	return Kecelakaan::all();
    }

    public function create(request $request){
    	$kecelakaan = new Kecelakaan;
    	$kecelakaan->lokasi = $request->lokasi;
    	$kecelakaan->tipe = $request->tipe;
    	$kecelakaan->waktu = $request->waktu;
    	$kecelakaan->keterangan = $request->keterangan;
    	$kecelakaan->foto = $request->foto;
    	$kecelakaan->save();

    	return "Data Berhasil Masuk";

    }

    public function update(request $request, $id_lapor){
    	$lokasi = $request->lokasi;
    	$tipe = $request->tipe;
    	$waktu = $request->waktu;
    	$keterangan = $request->keterangan;
    	$foto = $request->foto;

    	$kecelakaan = Kecelakaan::find($id_lapor);
    	$kecelakaan->lokasi = $request->lokasi;
    	$kecelakaan->tipe = $request->tipe;
    	$kecelakaan->waktu = $request->waktu;
    	$kecelakaan->keterangan = $request->keterangan;
    	$kecelakaan->foto = $request->foto;
    	$kecelakaan->save();

    	return "Data Berhasil Diupdate";
		
		}

		public function delete($id_lapor){
		$kecelakaan = Kecelakaan::find($id_lapor);
		$kecelakaan->delete();

    	return "Data Berhasil Dihapus";
		
		}

}
