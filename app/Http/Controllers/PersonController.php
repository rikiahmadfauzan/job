<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Daftar;
use App\Models\Posisi;
use App\Models\Contact;
use App\Models\Perusahaan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{

    function profile(){
        return view('person.profile',);
    }
    function pengajuan(){
        $data['perusahaan'] = Perusahaan::all();
        return view('person.pengajuan',);
    }
    function home(){
        $status = 'disetujui';
        $data['perusahaan'] = Perusahaan::all()->where('status', $status);
        return view('person.home', $data);
    }

    function all(){
        $status = 'disetujui';
        $data['perusahaan'] = Perusahaan::all()->where('status', $status);
        return view('person.allloker', $data);
    }
    function detail($id){
        $data['user'] = User::first();
        $data['perusahaan'] = Perusahaan::find($id);
        return view('person.detail', $data);
    }
    function lokeradmin(){
        $data['perusahaan'] = Perusahaan::all();
        $data['user'] = User::all();
        return view('admin.loker', $data);
    }

    //contact
    function contact_masuk(){
        $data['contact'] = Contact::all();
        return view('admin.contact', $data);
    }
    function contact(){
        return view('person.contact');
    }
    function create_contact(Request $request){
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'pesan' => $request->pesan

        ]);

        return redirect('/contact');
    }

    function daftar(){
        $data['daftar'] = Daftar::all();
        return view('admin.daftar', $data);
    }
    //Menampilkan dokumen
    function view(){

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
            }
}

