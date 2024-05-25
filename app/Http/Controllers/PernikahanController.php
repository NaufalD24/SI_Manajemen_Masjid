<?php

namespace App\Http\Controllers;

use App\Models\Jamaah;
use App\Models\Pernikahan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PernikahanController extends Controller
{
    public function index(){
        $data = Pernikahan::get(); 
        return view('Administrator/Pernikahans/Pernikahan', compact('data'));
    }

    public function add(){
        $data_jamaah = Jamaah::get();
        return view('Administrator/Pernikahans/addPernikahan', compact( 'data_jamaah'));
    }

    public function insertdata(Request $request){
        Pernikahan::create($request->all());
        return redirect()->route('Pernikahan')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = Pernikahan::find($id);
        $data_jamaah = Jamaah::get();
        return view('Administrator/Pernikahans/updatePernikahan' , compact('data', 'data_jamaah'));
    }

    public function updatedata(Request $request, $id){
        $data = Pernikahan::find($id);
        $data->update($request->all());
        return redirect()->route('Pernikahan')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Pernikahan::find($id);
        $data->delete();
        return redirect()->route('Pernikahan')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = Pernikahan::all();
        $PDF = PDF::loadView('Administrator/Pernikahans/reportPernikahan', array('data' => $data));
        return $PDF->stream('data-pernikahan.pdf');
    }
}
