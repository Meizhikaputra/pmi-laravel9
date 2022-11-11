@extends('dashboard.layouts.main')


@section('container') 

<div class="container">
    <div class="row my-3">
        <div class="col-lg-5">
        <h1 class="mb-3">Data {{ $donor->name }}</h1>
        <table class="table table-hover">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Data</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row">Nama Pendonor : </th>
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

        <h3>Data Pertanyaan</h3>
        
    {{-- 1 --}}
    <div class="mb-3">
        <label class="form-label">1. Apakah Anda </label><br>
        <input class="form-check-input" name="pertanyaan1" type="checkbox" id="pertanyaan1" value="ya"
        @if($donor->pertanyaan1 == 'ya')
            checked
        @endif>
        <label for="pertanyaan1"> Sehat Hari Ini?</label> <br>
        <input class="form-check-input ml-2" name="pertanyaan2" type="checkbox" id="pertanyaan2" value="ya"
        @if($donor->pertanyaan2 == 'ya')
            checked
        @endif>
        <label for="pertanyaan2" > Sudah Makan?</label>
        <input class="form-check-input" name="pertanyaan3" type="checkbox" id="pertanyaan3" value="ya"
        @if($donor->pertanyaan3 == 'ya')
            checked
        @endif>
        <label for="pertanyaan3" > Tidur/istirahat cukup</label> 
      </div>
      {{-- 2 --}}
      <div class="mb-3">
        <label for="pertanyaan4">2. Sedang minum obat (aspirin 3 Hari/) antibiotik 7 HARI TERAKHIR?</label>
        <input class="form-check-input" name="pertanyaan4" type="checkbox" id="pertanyaan4" value="ya"
        @if($donor->pertanyaan4 == 'ya')
            checked
        @endif>
      </div>
      {{-- 3 --}}
      <div class="mb-3">
        <label class="form-label">3. BAGI WANITA apakah sedang?</label><br>
        <input class="form-check-input" name="pertanyaan5" type="checkbox" id="pertanyaan5" value="ya"
        @if($donor->pertanyaan5 == 'ya')
            checked
        @endif>
        <label for="pertanyaan5"> haid?</label> <br>
        <input class="form-check-input ml-2" name="pertanyaan6" type="checkbox" id="pertanyaan6" value="ya"
        @if($donor->pertanyaan6 == 'ya')
            checked
        @endif>
        <label for="pertanyaan6" > hamil?</label><br>
        <input class="form-check-input" name="pertanyaan7" type="checkbox" id="pertanyaan7" value="ya"
        @if($donor->pertanyaan7 == 'ya')
            checked
        @endif>
        <label for="pertanyaan7" > menyusui?</label> 
      </div>
      {{-- 4 --}}
      <div class="mb-3">
        <label class="form-label">4. Dalam 12 bulan terakhir mendapatkan</label><br>
        <input class="form-check-input" name="pertanyaan8" type="checkbox" id="pertanyaan8" value="ya"
        @if($donor->pertanyaan8 == 'ya')
            checked
        @endif>
        <label for="pertanyaan8"> Operasi?</label> <br>
        <input class="form-check-input ml-2" name="pertanyaan9" type="checkbox" id="pertanyaan9" value="ya"
        @if($donor->pertanyaan9 == 'ya')
            checked
        @endif>
        <label for="pertanyaan9" > Transfusi Darah?</label><br>
        <input class="form-check-input" name="pertanyaan10" type="checkbox" id="pertanyaan10" value="ya"
        @if($donor->pertanyaan10 == 'ya')
            checked
        @endif>
        <label for="pertanyaan10" > Vaksin?</label> 
      </div>
      {{-- 5 --}}
      <div class="mb-3">
        <label class="form-label">5. Apakah memiliki riwayat penyakit</label><br>
        <input class="form-check-input" name="pertanyaan11" type="checkbox" id="pertanyaan11" value="ya"
        @if($donor->pertanyaan11 == 'ya')
            checked
        @endif>
        <label for="pertanyaan11"> Kuning/hepatitis?</label> <br>
        <input class="form-check-input ml-2" name="pertanyaan12" type="checkbox" id="pertanyaan12" value="ya"
        @if($donor->pertanyaan12 == 'ya')
            checked
        @endif>
        <label for="pertanyaan12" > Sifilis?</label><br>
        <input class="form-check-input" name="pertanyaan13" type="checkbox" id="pertanyaan13" value="ya"
        @if($donor->pertanyaan13 == 'ya')
            checked
        @endif>
        <label for="pertanyaan13" > Ginjal?</label> <br>
        <input class="form-check-input" name="pertanyaan14" type="checkbox" id="pertanyaan14" value="ya"
        @if($donor->pertanyaan14 == 'ya')
            checked
        @endif>
        <label for="pertanyaan14" > Jantung?</label> <br>
        <input class="form-check-input" name="pertanyaan15" type="checkbox" id="pertanyaan15" value="ya"
        @if($donor->pertanyaan15 == 'ya')
            checked
        @endif>
        <label for="pertanyaan15" > Alergi (gatal-gatal, batuk, pilek)?</label> <br>
        <input class="form-check-input" name="pertanyaan16" type="checkbox" id="pertanyaan16" value="ya"
        @if($donor->pertanyaan16 == 'ya')
            checked
        @endif>
        <label for="pertanyaan16" > Asma/Sesak nafas?</label> <br>
        <input class="form-check-input" name="pertanyaan17" type="checkbox" id="pertanyaan17" value="ya"
        @if($donor->pertanyaan17 == 'ya')
            checked
        @endif>
        <label for="pertanyaan17" > Gangguan darah?</label> <br>
        <input class="form-check-input" name="pertanyaan18" type="checkbox" id="pertanyaan18" value="ya"
        @if($donor->pertanyaan18 == 'ya')
            checked
        @endif>
        <label for="pertanyaan18" > TBC(dalam 12 bulan terakhir)?</label> <br>
        <input class="form-check-input" name="pertanyaan19" type="checkbox" id="pertanyaan19" value="ya"
        @if($donor->pertanyaan19 == 'ya')
            checked
        @endif>
        <label for="pertanyaan19" > Amnesia(dalam 3 tahun terakhir)?</label> <br>
        <input class="form-check-input" name="pertanyaan20" type="checkbox" id="pertanyaan20" value="ya"
        @if($donor->pertanyaan20 == 'ya')
            checked
        @endif>
        <label for="pertanyaan20" > Tipes(dalam 6 bulan terakhir)?</label> <br>
        <input class="form-check-input" name="pertanyaan21" type="checkbox" id="pertanyaan21" value="ya"
        @if($donor->pertanyaan21 == 'ya')
            checked
        @endif>
        <label for="pertanyaan21" > Sering pinsan/ kejang-kejang?</label>
      </div>
      {{-- 6 --}}
      <div class="mb-3">
        <label for="pertanyaan22">6. Menggunakan narkoba/memakai jarum suntik secara bergantian selama 12 bulan terakhir?</label>
        <input class="form-check-input" name="pertanyaan22" type="checkbox" id="pertanyaan22" value="ya"
        @if($donor->pertanyaan22 == 'ya')
            checked
        @endif>
      </div>
      {{-- 7 --}}
      <div class="mb-3">
        <label for="pertanyaan23">7. Berganti-ganti pasangan tanpa alat pengaman (kondom) 12 bulan terakhir?</label>
        <input class="form-check-input" name="pertanyaan23" type="checkbox" id="pertanyaan23" value="ya"
        @if($donor->pertanyaan23 == 'ya')
            checked
        @endif>
      </div>
      {{-- 8 --}}
      <div class="mb-3">
        <label for="pertanyaan24">8. Meminum minuman keras seperti Alkohol, Malaga dan lain-lain sejenis alkohol?</label>
        <input class="form-check-input" name="pertanyaan24" type="checkbox" id="pertanyaan24" value="ya"
        @if($donor->pertanyaan24 == 'ya')
            checked
        @endif>
      </div>
</div>
@endsection