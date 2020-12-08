<?php

namespace App\Http\Controllers;

use App\keuangan;
// use App\Keuangankela;
use Illuminate\Http\Request;
use App\Exports\KeuanganExport;
use Maatwebsite\Excel\Facades\Excel;

class keuanganController extends Controller
{
    public function index(){
        $keuangan = Keuangan::all();
        return view('keuangan.keuangankelas',['keuangan' => $keuangan]);
    }

    public function show(Request $request){
        $kode = $request->input('kode');
        $keuangan = Keuangan::where('kode', $kode)->get();
        return view('keuangan.keuangankelas' , ['keuangan'=> $keuangan]);
    }
    
    public function tambah(Request $request){
        Keuangan::create([
            'bulan' => $request->bulan,
            'pemasukan' => $request->pemasukan,
            'pengeluaran' => $request->pengeluaran,
            'saldo' => $request->saldo,
            'kode' => $request->kode
        ]);
        return redirect('/keuangannn');
    }

    public function hapus($id)
    {
        $keuangan = Keuangan::find($id);
        $keuangan->delete();
        return redirect('/keuangan');
    }

    public function update(Request $request,$id)
    {
        $keuangan = Keuangan :: find($id);
        $keuangan->bulan = $request->bulan;
        $keuangan->pemasukan = $request->pemasukan;
        $keuangan->pengeluaran = $request->pengeluaran;
        $keuangan->saldo = $request->saldo;
        $keuangan->save();
        // return dd(keuangan);
        return redirect('/keuangan');
    }
    public function export_excel()
	{
		return Excel::download(new KeuanganExport, 'siswa.xlsx');
	}


}
