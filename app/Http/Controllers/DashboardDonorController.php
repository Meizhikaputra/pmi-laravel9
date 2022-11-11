<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\GetDonor;
use Illuminate\Http\Request;

class DashboardDonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.datapendonor.index', [
            'donors' => Donor::latest()->Filter(request(['search']))->paginate(10)->withQueryString()->sortByDesc('id')
        ]);
    }


    public function online()
    {
        return view('dashboard.datapendonor.index', [
            'donors' => Donor::where('pendaftaran', '=', 'online')->get()->sortByDesc('id')
        ]);
    }
    public function offline()
    {
        return view('dashboard.datapendonor.index', [
            'donors' => Donor::where('pendaftaran', '=', 'offline')->get()->sortByDesc('id')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.datapendonor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return redirect('/dashboard/donors')->with('success', 'Data Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(Donor $donor)
    {
        return view('dashboard.datapendonor.show', [
            'donor' => $donor
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(Donor $donor)
    {
        return view('dashboard.datapendonor.edit', [
            'donor' => $donor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donor $donor)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'jeniskelamin' => 'required',
            'tanggallahir' => 'required',
            'alamatrumah' => 'required',
            'notelepon' => 'required',
            'golongandarah' => 'required',
            'donorkeberapa' => 'required',
            'macamdonor' => 'required',
            'tekanandarah' => 'required',
            'beratbadan' => 'required',
            'rhesus' => 'required',
            'ditolak' => 'required',
            'ujisaring' => 'required',
            'nokantong' => 'required',
            'tempatdonor' => 'required',
        ]);
        Donor::where('id', $donor->id)
            ->update($validatedData);

        return redirect('/dashboard/donors')->with('success', 'Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donor $donor)
    {
        Donor::destroy($donor->id);

        return redirect('dashboard/donors')->with('hapus', 'Pos Telah Berhasil di Hapus');
    }

    public function pilihdonor()
    {
        return view('dashboard.datapendonor.pilihdonor', [
            'donors' => Donor::where('status', 0)->Filter(request(['search']))->paginate(10)->withQueryString()->sortByDesc('id')
        ]);
    }

    public function ambil(Donor $donor)
    {
        return view('dashboard.datapendonor.ambil', [
            'donor' => $donor
        ]);
    }


    public function createambil(Request $request, Donor $donor)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required',
            'jeniskelamin' => 'required',
            'tanggallahir' => 'required',
            'alamatrumah' => 'required',
            'notelepon' => 'required',
            'golongandarah' => 'required',
            'donorkeberapa' => 'required',
            'macamdonor' => 'required',
            'tekanandarah' => 'required',
            'beratbadan' => 'required',
            'rhesus' => 'required',
            'ditolak' => 'required',
            'ujisaring' => 'required',
            'nokantong' => 'required',
            'tempatdonor' => 'required',
            'rumahsakit' => 'required',
            'donorsukarela' => 'required',
            'darahkeluar' => 'required',
            'namapasien' => 'required'

        ]);
        $validatedData['status'] = true;
        $validatedData['tanggalambil'] = date('d M Y');

        // $status = $request->validate([
        //     'status' => 'required'
        // ]);
        // Donor::where('id', $donor)->update($status);
        Donor::where('id', $donor->id)->update($validatedData);

        return redirect('/dashboard/pilihdonor')->with('success', 'Ambil Darah Berhasil');
    }

    public function darahkeluar()
    {
        return view('dashboard.datapendonor.darahkeluar', [
            'donors' => Donor::where('status', 1)->get()
        ]);
    }

    public function detailkeluar(Donor $donor)
    {
        return view('dashboard.datapendonor.detailkeluar', [
            'donor' => $donor
        ]);
    }

    public function cektekanan(Donor $donor)
    {
        return view('dashboard.datapendonor.cektekanan', [
            'donor' => $donor
        ]);
    }

    public function buattes(Donor $donor, Request $request)
    {
        $validatedData = $request->validate([
            'tekanandarah' => 'required',
            'beratbadan' => 'required',
            'rhesus' => 'required',
            'ditolak' => 'required',
            'ujisaring' => 'required',
            'nokantong' => 'required',
            'tempatdonor' => 'required',

        ]);

        Donor::where('id', $donor->id)->update($validatedData);
        return redirect('/dashboard/donors')->with('success', 'Berhasil Melakukan Tes Kesehatan');
    }
}
