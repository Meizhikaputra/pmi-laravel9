@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Data Pendonor</h1>
  </div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/donors/{{ $donor->name }}" class="mb-5">
      @method('put')
        @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name" required autofocus value="{{ old('name', $donor->name) }}">
        @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
        <select class="form-select" name="jeniskelamin">
            @if(old('jeniskelamin', $donor->jeniskelamin) == $donor->jeniskelamin)
          <option value="{{ $donor->jeniskelamin }}" selected>{{ $donor->jeniskelamin }}</option>
          @else
          <option value="{{ $donor->jeniskelamin }}">{{ $donor->jeniskelamin }}</option>
          @endif
        </select>
      </div>
      <div class="mb-3">
        <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
        <input type="text" class="form-control @error('tanggallahir') is-invalid @enderror"  id="tanggallahir" name="tanggallahir" required  value="{{ old('tanggallahir', $donor->tanggallahir) }}">
        @error('tanggallahir')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="alamatrumah" class="form-label">Alamat Rumah</label>
        <input type="text" class="form-control @error('alamatrumah') is-invalid @enderror"  id="alamatrumah" name="alamatrumah" required  value="{{ old('alamatrumah', $donor->alamatrumah) }}">
        @error('alamatrumah')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="notelepon" class="form-label">No. Telepon</label>
        <input type="text" class="form-control @error('notelepon') is-invalid @enderror"  id="notelepon" name="notelepon" required  value="{{ old('notelepon', $donor->notelepon) }}">
        @error('notelepon')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="golongandarah" class="form-label">Golongan Darah</label>
        <select class="form-select" name="golongandarah">
            @if(old('golongandarah', $donor->golongandarah) == $donor->golongandarah)
          <option value="{{ $donor->golongandarah }}" selected>{{ $donor->golongandarah }}</option>
          @else
          <option value="{{ $donor->golongandarah }}">{{ $donor->golongandarah }}</option>
          @endif
        </select>
      </div>
      <div class="mb-3">
        <label for="donorkeberapa" class="form-label">Donor Yang  ke Berapa kali</label>
        <input type="text" class="form-control @error('donorkeberapa') is-invalid @enderror"  id="donorkeberapa" name="donorkeberapa" required  value="{{ old('donorkeberapa', $donor->donorkeberapa) }}">
        @error('donorkeberapa')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="macamdonor" class="form-label">Macam Donor</label>
        <input type="text" class="form-control @error('macamdonor ') is-invalid @enderror"  id="macamdonor " name="macamdonor" required  value="{{ old('macamdonor', $donor->macamdonor) }}">
        @error('macamdonor')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="tekanandarah" class="form-label">Tekanan darah</label>
        <input type="text" class="form-control @error('tekanandarah') is-invalid @enderror"  id="tekanandarah" name="tekanandarah" required  value="{{ old('tekanandarah', $donor->tekanandarah) }}">
        @error('tekanandarah')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="beratbadan" class="form-label">Berat Badan</label>
        <input type="text" class="form-control @error('beratbadan') is-invalid @enderror"  id="beratbadan" name="beratbadan" required  value="{{ old('beratbadan', $donor->beratbadan) }}">
        @error('beratbadan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="rhesus" class="form-label">Rhesus</label>
        <select class="form-select" name="rhesus">
          <option value="+" selected>+</option>
          <option value="-">-</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="ditolak" class="form-label">Ditolak :
          Alasan...
        </label>
        <input type="text" class="form-control @error('ditolak') is-invalid @enderror"  id="ditolak" name="ditolak" required  value="{{ old('ditolak', $donor->ditolak) }}">
        @error('ditolak')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="ujisaring" class="form-label">Uji Saring</label>
        <select class="form-select" name="ujisaring">
            @if(old('ujidaring', $donor->ujisaring) == $donor->ujisaring)
          <option value="{{ $donor->ujisaring }}" selected>{{ $donor->ujisaring }}</option>
          @else
          <option value="{{ $donor->ujisaring }}" >{{ $donor->ujisaring }}</option>
          @endif
        </select>
      </div>
      <div class="mb-3">
        <label for="nokantong" class="form-label">No Kantong Darah</label>
        <input type="text" class="form-control @error('nokantong') is-invalid @enderror"  id="nokantong" name="nokantong"  value="{{ old('nokantong', $donor->nokantong) }}">
        @error('nokantong')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="tempatdonor" class="form-label">Tampat Donor</label>
        <input type="text" class="form-control @error('tempatdonor') is-invalid @enderror"  id="tempatdonor" name="tempatdonor" required  value="{{ old('tempatdonor', $donor->tempatdonor) }}">
        @error('tempatdonor')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

</div>
@endsection