@extends('dashboard.layouts.main')


@section('container') 

<div class="container">
    <div class="row my-3">
        <div class="col-lg-5">
        <h1 class="mb-3">Detail Data {{ $donor->name }}</h1>
        <table class="table table-hover">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Data</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">Nama Pendonor: </th>
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
        <h3>Pengambil</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Nama Pasien : </th>
                    <td>{{ $donor->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Rumah Sakit : </th>
                    <td>{{ $donor->rumahsakit }}</td>
                </tr>
                <tr>
                    <th scope="row">Darah Keluar : </th>
                    <td>{{ $donor->darahkeluar }}</td>
                </tr>
                <tr>
                    <th scope="row">Donor Sukarela : </th>
                    <td>{{ $donor->donorsukarela }}</td>
                </tr>
                </tbody>
            </table>
        
        
        </div>
    </div>
</div>
@endsection