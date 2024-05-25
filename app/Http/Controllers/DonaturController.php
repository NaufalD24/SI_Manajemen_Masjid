<?php

namespace App\Http\Controllers;

use App\Models\Jamaah;
use App\Models\Donatur;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DonaturController extends Controller
{
    public function index(){
        $data = Donatur::get(); 
        return view('Administrator/Donaturs/Donatur', compact('data'));
    }

    public function add(){
        $data_jamaah = Jamaah::get();
        return view('Administrator/Donaturs/addDonatur', compact( 'data_jamaah'));
    }

    public function insertdata(Request $request){
        Donatur::create($request->all());
        return redirect()->route('Donatur')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = Donatur::find($id);
        $data_jamaah = Jamaah::get();
        return view('Administrator/Donaturs/updateDonatur' , compact('data', 'data_jamaah'));
    }

    public function updatedata(Request $request, $id){
        $data = Donatur::find($id);
        $data->update($request->all());
        return redirect()->route('Donatur')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Donatur::find($id);
        $data->delete();
        return redirect()->route('Donatur')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = Donatur::all();
        $PDF = PDF::loadView('Administrator/Donaturs/reportDonatur', array('data' => $data));
        return $PDF->stream('data-tiket-futsal.pdf');
    }
}
