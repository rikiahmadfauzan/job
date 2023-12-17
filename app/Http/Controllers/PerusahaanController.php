<?php

namespace App\Http\Controllers;
use App\Models\Daftar;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PerusahaanController extends Controller
{
    function create(Request $request){
        $nik = Auth::user()->nik;
        $name = Auth::user()->name;

        Perusahaan::create([
            'nik' => $nik,
            'name' => $name,
            'owner' => $request->owner,
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_telpon' => $request->no_telpon,
            'gaji_min' => $request->gaji_min,
            'gaji_max' => $request->gaji_max,
            'posisi' => $request->posisi,
            'foto_perusahaan' => $request->file('foto_perusahaan')->store('foto_perusahaan'),
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/pengajuan');
    }

    function update(Request $request){
        if($request->file('foto_perusahaan')){
                $perusahaan = Perusahaan::where('id',$request->id)->first();
                Storage::delete($perusahaan->fotoPerusahaan);

            $file = $request->file('foto_perusahaan')->store('foto_perusahaan');
        }else{
            $file = DB::raw('foto_perusahaan');
        }
        Perusahaan::where('id', $request->id)->update([
            'id' => $request->id,
            'owner' => $request->owner,
            'nama_perusahaan' => $request->nama_perusahaan,
            'email' => $request->email,
            'foto_perusahaan' => $file,
            'status' => $request->status,

        ]);
        return redirect('/admin-ajukan');
     }

     function daftar(Request $req){
        $this->validate($req , [
            'document' => 'mimes:pdf'
        ]);
        $nik = Auth::user()->nik;
        $name = Auth::user()->name;
        Daftar::create([
            'id' => $req->id,
            'nama_perusahaan' => $req->nama_perusahaan,
            'nik' => $nik,
            'name' => $name,
            'email' => $req->email,
            'document' => $req->file('document')->store('document'),
        ]);

        return redirect('/home');
     }

   
}
