<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\soal;

class crud extends Controller
{
    public function tambah(Request $request){
        $tambah = new soal;
        $tambah->soal = $request->soal;
        $tambah->A = $request->A;
        $tambah->B = $request->B;
        $tambah->C = $request->C;
        $tambah->D = $request->D;
        $tambah->E = $request->E;
        $tambah->save();
        return redirect('soal');
    }

    public function read(){
        $hasil = soal::all();
        return view('soal')->with('soal', $hasil);;
    }

    public function edit($id){
        $soal = soal::find($id);
        return view('update_soal', ['soal' => $soal]);
    }

    public function update($id, Request $request){
        $this->validate($request,[
        'soal' => 'required',
        'A' => 'required',
        'B' => 'required',
        'C' => 'required',
        'D' => 'required',
        'E' => 'required',
        ]);

                $soal = soal::find($id);
                $soal->soal = $request->soal;
                $soal->A = $request->A;
                $soal->B = $request->B;
                $soal->C = $request->C;
                $soal->D = $request->D;
                $soal->E = $request->E;
                $soal->save();
                return redirect('/soal');
            }
        public function delete($id){
            $soal = soal::find($id);
            $soal->delete();
            return redirect('/soal');
        }
}
