<?php

namespace App\Http\Controllers;

use App\Models\Jamaah;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class JamaahController extends Controller
{
    public function index(){
        $data = Jamaah::get(); 
        return view('Administrator/Jamaahs/Jamaah', compact('data'));
    }

    public function add(){
        return view('Administrator/Jamaahs/addJamaah');
    }

    public function insertdata(Request $request){
        Jamaah::create($request->all());
        return redirect()->route('Jamaah')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = Jamaah::find($id);
        return view('Administrator/Jamaahs/updateJamaah' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Jamaah::find($id);
        $data->update($request->all());
        return redirect()->route('Jamaah')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Jamaah::find($id);
        $data->delete();
        return redirect()->route('Jamaah')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = Jamaah::all();
        $PDF = PDF::loadView('Administrator/Jamaahs/reportJamaah', array('data' => $data));
        return $PDF->stream('data-jamaah.pdf');
    }
}
