@extends('dashboard.layouts.main')


@section('container') 

<div class="container">
    <div class="row my-3">
        <div class="col-lg-5">
        <h1 class="mb-3">Silahkan Isi Data Pengambilan Darah {{ $donor->name }}</h1>
        <table class="table table-hover">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Data</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">Nama : </th>
                  <td>{{ $donor->name }}</td>
              </tr>
              <tr>
                  <th scope="row">Jeni Kelamin : </th>
                  <td>{{ $donor->jeniskelamin }}</td>
              </tr>
              <tr>
                  <th scope="row">Alamat Rumah : </th>
                  <td>{{ $donor->alamatrumah }}</td>
              </tr>
              <tr>
                  <th scope="row">NO. Telepon : </th>
                  <td>{{ $donor->notelepon }}</td>
              </tr>
              <tr>
                  <th scope="row">Golongan Darah : </th>
                  <td>{{ $donor->golongandarah }}</td>
              </tr>
              <tr>
                  <th scope="row">Donor Yang ke berapa kali : </th>
                  <td>{{ $donor->donorkeberapa }}</td>
              </tr>
              <tr>
                  <th scope="row">Macam Donor : </th>
                  <td>{{ $donor->macamdonor }}</td>
              </tr>
              <tr>
                  <th scope="row">Tekanan Darah : </th>
                  <td>{{ $donor->tekanandarah }}</td>
              </tr>
              <tr>
                  <th scope="row">Berat Badan : </th>
                  <td>{{ $donor->beratbadan }}</td>
              </tr>
              <tr>
                  <th scope="row">Rhesus : </th>
                  <td>{{ $donor->rhesus }}</td>
              </tr>
              <tr>
                  <th scope="row">Di Tolak : </th>
                  <td>Alasan : {{ $donor->beratbadan }}</td>
              </tr>
              <tr>
                  <th scope="row">Uji Saring : </th>
                  <td>{{ $donor->ujisaring }}</td>
              </tr>
              <tr>
                  <th scope="row">No. Kantong : </th>
                  <td>{{ $donor->nokantong }}</td>
              </tr>
              <tr>
                  <th scope="row">Tempat Donor : </th>
                  <td>{{ $donor->tempatdonor }}</td>
              </tr>
          </tbody>

        </table>


        <h1 class="mb-3">Data Pengambil Darah</h1>
        
        <form action="/dashboard/donors/{{ $donor->id }}/createambil" method="post">
        @csrf
        @method('put')
        <input type="hidden" value="{{ $donor->name }}" name="name">
        <input type="hidden" value="{{ $donor->jeniskelamin }}" name="jeniskelamin">
        <input type="hidden" value="{{ $donor->tanggallahir }}" name="tanggallahir">
        <input type="hidden" value="{{ $donor->alamatrumah }}" name="alamatrumah">
        <input type="hidden" value="{{ $donor->notelepon }}" name="notelepon">
        <input type="hidden" value="{{ $donor->golongandarah }}" name="golongandarah">
        <input type="hidden" value="{{ $donor->donorkeberapa }}" name="donorkeberapa">
        <input type="hidden" value="{{ $donor->macamdonor }}" name="macamdonor">
        <input type="hidden" value="{{ $donor->tekanandarah }}" name="tekanandarah">
        <input type="hidden" value="{{ $donor->beratbadan }}" name="beratbadan">
        <input type="hidden" value="{{ $donor->rhesus }}" name="rhesus">
        <input type="hidden" value="{{ $donor->ditolak }}" name="ditolak">
        <input type="hidden" value="{{ $donor->beratbadan }}" name="beratbadan">
        <input type="hidden" value="{{ $donor->ujisaring }}" name="ujisaring">
        <input type="hidden" value="{{ $donor->nokantong }}" name="nokantong">
        <input type="hidden" value="{{ $donor->tempatdonor }}" name="tempatdonor">
        <input type="hidden" value="{{ true }}" name="status">


        <div class="col-lg-8">
        <div class="mb-3">
            <label for="namapasien" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control @error('namapasien') is-invalid @enderror"  id="namapasien" name="namapasien" required autofocus value="{{ old('namapasien') }}">
            @error('namapasien')
              <div class="invalid-feedback">
                {{ $message }}
              </div>          
            @enderror
        </div>
        <div class="mb-3">
            <label for="rumahsakit" class="form-label">Rumah Sakit</label>
            <input type="text" class="form-control @error('rumahsakit') is-invalid @enderror"  id="rumahsakit" name="rumahsakit" required autofocus value="{{ old('rumahsakit') }}">
            @error('rumahsakit')
              <div class="invalid-feedback">
                {{ $message }}
              </div>          
            @enderror
        </div>
        <div class="mb-3">
            <label for="donorsukarela" class="form-label">Donor Sukarela</label>
            <input type="text" class="form-control @error('donorsukarela') is-invalid @enderror"  id="donorsukarela" name="donorsukarela" required autofocus value="{{ old('donorsukarela') }}">
            @error('donorsukarela')
              <div class="invalid-feedback">
                {{ $message }}
              </div>          
            @enderror
        </div>
        <div class="mb-3">
            <label for="darahkeluar" class="form-label">Darah Keluar</label>
            <input type="text" class="form-control @error('darahkeluar') is-invalid @enderror"  id="darahkeluar" name="darahkeluar" required autofocus value="{{ old('darahkeluar') }}">
            @error('darahkeluar')
              <div class="invalid-feedback">
                {{ $message }}
              </div>          
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ambil Darah</button>
        </form>
        
        </div>
    </div>
    </div>
</div>
@endsection