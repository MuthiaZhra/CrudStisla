<?php

namespace App\Http\Controllers;
use App\Models\peserta_tabel;
use Illuminate\Http\Request;

class PesertaC extends Controller
{
    public function index(){
        
      $peserta = peserta_tabel::all();
      return view('pages.peserta', compact('peserta'));
    }

    public function create() {
        return view('create.pesertacreate');
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required|unique:peserta_tabel,nis',
            'namalengkap' => 'required',
            'jk' => 'required|in:L,P',
            'kelas' => 'required',
            'tgllahir' => 'required|date',
            'nilai_web' => 'required|numeric',
            'nilai_pbo' => 'required|numeric',
            'nilai_db' => 'required|numeric',
        ]);
    
        peserta_tabel::create($validatedData);
    
        return redirect()->route('peserta.index') ->with('success', 'Data Berhasil Ditambahkan');
    }
      
    public function destroy($id)
    {
        try {
            $peserta_tabel= peserta_tabel::findOrFail($id);
            $peserta_tabel->delete();
    
            return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil dihapus.');
        } catch (\Exception $p) {
            return redirect()->back()->with('error', 'Gagal menghapus data peserta.');
        }
        
    }    

    public function edit(Request $request, $id)
    {
        $peserta_tabel= peserta_tabel::findOrFail($id);
    return view('create.update', compact('peserta_tabel'));
    }

    public function update(Request $request, $id)
    
    {
        $peserta_tabel= peserta_tabel::findOrFail($id);
        $peserta_tabel->update([
            'nis' => $request->nis,
            'namalengkap' => $request->namalengkap,
            'jk' => $request->jk,
            'kelas' => $request->kelas,
            'tgllahir' => $request->tgllahir,
            'nilai_web' => $request->nilai_web,
            'nilai_pbo' => $request->nilai_pbo,
            'nilai_db' => $request->nilai_db,

        ]);
            
        
    
    
        return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil diperbarui.');
    }
    
//     public function edit($id)
//     {
//     $peserta = peserta_tabel::findOrFail($id);
//     return view('create.update', compact('peserta'));
//     }

//     public function update(Request $request, $id)
// {
//     $peserta = peserta_tabel::findOrFail($id);
    
//     $peserta->update([
//         'nis' => $request->nis,
//         'namalengkap' => $request->namalengkap,
//         'jk' =>$request->jk ,
//         'kelas' =>$request->kelas ,
//         'tgllahir' =>$request->tgllahir,
//         'nilai_web' =>$request->nilai_web,
//         'nilai_pbo' =>$request->nilai_pbo,
//         'nilai_db' =>$request->nilai_db,
//     ]);

//     return redirect()->route('peserta.index')->with('success', 'Data peserta berhasil diperbarui.');



    

   
   
}

