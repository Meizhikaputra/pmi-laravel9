<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar', [
            'title' => 'Daftar'
        ]);
    }

    public function daftaronline(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'jeniskelamin' => 'required',
            'pendaftaran' => 'required',
            'tanggallahir' => 'required',
            'umur' => 'required',
            'alamatrumah' => 'required',
            'notelepon' => 'required',
            'golongandarah' => 'required',
            'donorkeberapa' => 'required',
            'macamdonor' => 'required',
            'tempatdonor' => 'required',
            'pertanyaan1' => 'min:1',
            'pertanyaan2' => 'min:1',
            'pertanyaan3' => 'min:1',
            'pertanyaan4' => 'min:1',
            'pertanyaan5' => 'min:1',
            'pertanyaan6' => 'min:1',
            'pertanyaan7' => 'min:1',
            'pertanyaan8' => 'min:1',
            'pertanyaan9' => 'min:1',
            'pertanyaan10' => 'min:1',
            'pertanyaan11' => 'min:1',
            'pertanyaan11' => 'min:1',
            'pertanyaan12' => 'min:1',
            'pertanyaan13' => 'min:1',
            'pertanyaan14' => 'min:1',
            'pertanyaan15' => 'min:1',
            'pertanyaan16' => 'min:1',
            'pertanyaan17' => 'min:1',
            'pertanyaan18' => 'min:1',
            'pertanyaan19' => 'min:1',
            'pertanyaan20' => 'min:1',
            'pertanyaan21' => 'min:1',
            'pertanyaan22' => 'min:1',
            'pertanyaan23' => 'min:1',
            'pertanyaan24' => 'min:1',
        ]);
        $validatedData['tanggal'] = date('d M Y');
        $validatedData['bulan'] = date('m Y');
        Donor::create($validatedData);
        return redirect('/daftar')->with('success', 'Selamat, data berhasil di kirim.
        Silahkan Datang ke PMI Kota Lubuklinggau dan anda bisa langsung melakukan donor darah');
    }
}
