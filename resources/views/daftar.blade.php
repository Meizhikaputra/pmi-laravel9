@extends('home')

@section('container')
<div class="container">
<div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 aling-center">Silahkan isi Data ini untuk menjadi pendonor</h1>
  </div>
<div class="col-lg-8">
    <form method="post" action="/daftaronline" class="mb-5" autocomplete="off">
        @csrf
        @if(session('success'))
        <div class="alert alert-primary" role="alert">
          {{ session('success') }}
        </div>
        @endif
        <input type="hidden" value="Online" name="pendaftaran">
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" autofocus class="form-control @error('name') is-invalid @enderror"  id="name" name="name" required  value="{{ old('name') }}">
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-control" name="jeniskelamin">
          <option value="laki-laki" selected>Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror"  id="tanggallahir" name="tanggallahir" required  value="{{ old('tanggallahir') }}">
        @error('tanggallahir')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="umur" class="form-label">Umur Pendonor</label>
        <input type="text" class="form-control @error('umur') is-invalid @enderror"  id="umur" name="umur" required  value="{{ old('umur') }}">
        @error('umur')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="alamatrumah" class="form-label">Alamat Rumah</label>
        <input type="text" class="form-control @error('alamatrumah') is-invalid @enderror"  id="alamatrumah" name="alamatrumah" required  value="{{ old('alamatrumah') }}">
        @error('alamatrumah')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="notelepon" class="form-label">No. Telepon</label>
        <input type="text" class="form-control @error('notelepon') is-invalid @enderror"  id="notelepon" name="notelepon" required  value="{{ old('notelepon') }}">
        @error('notelepon')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="golongandarah">Golongan Darah</label>
        <select class="form-control" name="golongandarah">
          <option value="A" selected>A</option>
          <option value="B">B</option>
          <option value="AB">AB</option>
          <option value="O">O</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="donorkeberapa" class="form-label">Donor Yang  ke Berapa kali</label>
        <input type="text" class="form-control @error('donorkeberapa') is-invalid @enderror"  id="donorkeberapa" name="donorkeberapa" required  value="{{ old('donorkeberapa') }}">
        @error('donorkeberapa')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-5">
        <label for="macamdonor" class="form-label">Macam Donor</label>
        <select class="form-control" name="macamdonor">
          <option value="sukarela (baru)" selected>Donor Sukarela (Baru)</option>
          <option value="sukarela (ulang)" >Donor Sukarela (Ulang)</option>
          <option value="pengganti">Donor Pengganti</option>
          <option value="bayaran">Donor Bayaran</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="tempatdonor" class="form-label">Tempat Donor</label>
        <select class="form-control" name="tempatdonor">
          <option value="PMI" selected>Kantor UDD PMI</option>
          <option value="Mobile unit">Mobile Unit</option>
        </select>
      </div>
      <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      </div>
      <h1 class="h3 mt-5 mb-4">Harap Isi Dengan Jujur Untuk Kenyamanan Bersama</h1>
      {{-- 1 --}}
      <div class="mb-3">
        <label class="form-label">1. Apakah Anda </label><br>
        <input class="form-check-label ml-3" name="pertanyaan1" type="checkbox" id="pertanyaan1" value="ya">
        <label for="pertanyaan1"> Sehat Hari Ini?</label><br>
        <input class="form-check-label ml-3" name="pertanyaan2" type="checkbox" id="pertanyaan2" value="ya">
        <label for="pertanyaan2"> Sudah Makan?</label><br>
        <input class="form-check-label ml-3" name="pertanyaan3" type="checkbox" id="pertanyaan3" value="ya">
        <label for="pertanyaan3"> Tidur/istirahat cukup</label> 
      </div>
      {{-- 2 --}}
      <div class="mb-3">
        <label for="pertanyaan4">2. Sedang minum obat (aspirin 3 Hari/) antibiotik 7 HARI TERAKHIR?</label>
        <input class="form-check-label ml-3" name="pertanyaan4" type="checkbox" id="pertanyaan4" value="ya">
      </div>
      {{-- 3 --}}
      <div class="mb-3">
        <label class="form-label">3. BAGI WANITA apakah sedang?</label><br>
        <input class="form-check-label ml-3" name="pertanyaan5" type="checkbox" id="pertanyaan5" value="ya">
        <label for="pertanyaan5"> haid?</label><br>
        <input class="form-check-label ml-3" name="pertanyaan6" type="checkbox" id="pertanyaan6" value="ya">
        <label for="pertanyaan6" > hamil?</label><br>
        <input class="form-check-label ml-3" name="pertanyaan7" type="checkbox" id="pertanyaan7" value="ya">
        <label for="pertanyaan7" > menyusui?</label> 
      </div>
      {{-- 4 --}}
      <div class="mb-3">
        <label class="form-label">4. Dalam 12 bulan terakhir mendapatkan</label><br>
        <input class="form-check-label ml-3" name="pertanyaan8" type="checkbox" id="pertanyaan8" value="ya">
        <label for="pertanyaan8"> Operasi?</label> <br>
        <input class="form-check-label ml-3" name="pertanyaan9" type="checkbox" id="pertanyaan9" value="ya">
        <label for="pertanyaan9" > Transfusi Darah?</label><br>
        <input class="form-check-label ml-3" name="pertanyaan10" type="checkbox" id="pertanyaan10" value="ya">
        <label for="pertanyaan10" > Vaksin?</label> 
      </div>
      {{-- 5 --}}
      <div class="mb-3">
        <label class="form-label">5. Apakah memiliki riwayat penyakit</label><br>
        <input class="form-check-label ml-3" name="pertanyaan11" type="checkbox" id="pertanyaan11" value="ya">
        <label for="pertanyaan11"> Kuning/hepatitis?</label> <br>
        <input class="form-check-label ml-3" name="pertanyaan12" type="checkbox" id="pertanyaan12" value="ya">
        <label for="pertanyaan12" > Sifilis?</label><br>
        <input class="form-check-label ml-3" name="pertanyaan13" type="checkbox" id="pertanyaan13" value="ya">
        <label for="pertanyaan13" > Ginjal?</label> <br>
        <input class="form-check-label ml-3" name="pertanyaan14" type="checkbox" id="pertanyaan14" value="ya">
        <label for="pertanyaan14" > Jantung?</label> <br>
        <input class="form-check-label ml-3" name="pertanyaan15" type="checkbox" id="pertanyaan15" value="ya">
        <label for="pertanyaan15" > Alergi (gatal-gatal, batuk, pilek)?</label> <br>
        <input class="form-check-label ml-3" name="pertanyaan16" type="checkbox" id="pertanyaan16" value="ya">
        <label for="pertanyaan16" > Asma/Sesak nafas?</label> <br>
        <input class="form-check-label ml-3" name="pertanyaan17" type="checkbox" id="pertanyaan17" value="ya">
        <label for="pertanyaan17" > Gangguan darah?</label> <br>
        <input class="form-check-label ml-3" name="pertanyaan18" type="checkbox" id="pertanyaan18" value="ya">
        <label for="pertanyaan18" > TBC(dalam 12 bulan terakhir)?</label> <br>
        <input class="form-check-label ml-3" name="pertanyaan19" type="checkbox" id="pertanyaan19" value="ya">
        <label for="pertanyaan19" > Amnesia(dalam 3 tahun terakhir)?</label> <br>
        <input class="form-check-label ml-3" name="pertanyaan20" type="checkbox" id="pertanyaan20" value="ya">
        <label for="pertanyaan20" > Tipes(dalam 6 bulan terakhir)?</label> <br>
        <input class="form-check-label ml-3" name="pertanyaan21" type="checkbox" id="pertanyaan21" value="ya">
        <label for="pertanyaan21" > Sering pinsan/ kejang-kejang?</label>
      </div>
      {{-- 6 --}}
      <div class="mb-3">
        <label for="pertanyaan22">6. Menggunakan narkoba/memakai jarum suntik secara bergantian selama 12 bulan terakhir?</label>
        <input class="form-check-label" name="pertanyaan22" type="checkbox" id="pertanyaan22" value="ya">
      </div>
      {{-- 7 --}}
      <div class="mb-3">
        <label for="pertanyaan23">7. Berganti-ganti pasangan tanpa alat pengaman (kondom) 12 bulan terakhir?</label>
        <input class="form-check-label" name="pertanyaan23" type="checkbox" id="pertanyaan23" value="ya">
      </div>
      {{-- 8 --}}
      <div class="mb-3">
        <label for="pertanyaan24">8. Meminum minuman keras seperti Alkohol, Malaga dan lain-lain sejenis alkohol?</label>
        <input class="form-check-label" name="pertanyaan24" type="checkbox" id="pertanyaan24" value="ya">
      </div>
      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

</div>
</div>

@endsection