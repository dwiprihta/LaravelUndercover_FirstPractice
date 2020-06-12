<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mahasiswa;
use App;

class mahasiswaController extends Controller
{
    public function cekObject(){
        $mahasiswa = New Mahasiswa;
        dump($mahasiswa);
    }

    public function massAssignment2(){
        $mahasiswa1 = Mahasiswa::create(
            [
                'nim'=>'12345',
                'nama'=>'dwi prihtapambudi',
                'tanggal_lahir'=>'2020-02-10',
                'ipk'=>3.6,

            ]);

            dump($mahasiswa1);

            $mahasiswa2=Mahasiswa::create(
                [
                'nim'=>'123456',
                'nama'=>'dwi erna',
                'tanggal_lahir'=>'2020-02-10',
                'ipk'=>3.6,
                ]);

            dump($mahasiswa1);

            $mahasiswa3=Mahasiswa::create([
                'nim'=>'1234567',
                'nama'=>'zuxxy',
                'tanggal_lahir'=>'2020-02-10',
                'ipk'=>3.6,
            ]);

            dump($mahasiswa1);
        }

    public function update(){
        $mahasiswa=mahasiswa::find('1');
        $mahasiswa->nama='dwika prihta';
        $mahasiswa->save();

        dump ($mahasiswa);

    }

    public function massUpdate(){
        $mahasiswa=mahasiswa::where('nim','12345')->first()->update([
            'nama'=>'dwika prihtapambudi'
        ]);
        return "well done";
    }

    public function massDelete(){
        $mahasiswa=mahasiswa::where('nim','12345')->delete();
    }

    public function all(){
        $mahasiswas=mahasiswa::where('nim','123456')->get();
        dump($mahasiswas);
       return view ('mahasiswa',['mahasiswas'=>$mahasiswas]);
    }

    public function softDelete(){
        $mahasiswa=mahasiswa::where('nim','12345')->delete();
        return "delete success";
    }

    public function restore(){
        $mahasiswa=mahasiswa::withTrashed()->where('nim','12345')->restore();
        return "delete success";
    }
    public function forceDelete(){
        $mahasiswa=mahasiswa::where('nim','12345')->forceDelete();
        return "delete success";
    }

    public function index($locale ='id'){
        app::setlocale($locale);
        return view('form-pendaftaran');
    }

    public function prosesForm(Request $request){
        $validateData=$request->validate([
            'nim'=> 'required|size:3',
            'nama'=> 'required',
            'email'=> 'required|email', 
            'jenis_kelamin'=> 'required',
            'jurusan'=> 'required',
            'alamat'=> '',
        ]);

        dump($validateData);

      // echo $request->nama;
    }
 
    
}
