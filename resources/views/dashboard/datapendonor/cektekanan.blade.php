@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Silahkan Isi Hasil Pemeriksaan Pasien Dengan Nama : {{ $donor->name }}</h1>
  </div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/donors/{{ $donor->id }}/buattes" class="mb-5">
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
        <input type="hidden" value="{{ $donor->tempatdonor }}" name="tempatdonor">
        <div class="mb-3">
        <label for="tekanandarah" class="form-label">Tekanan darah</label>
        <input type="text" class="form-control @error('tekanandarah') is-invalid @enderror"  id="tekanandarah" name="tekanandarah" required  value="{{ old('tekanandarah') }}">
        @error('tekanandarah')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="beratbadan" class="form-label">Berat Badan</label>
        <input type="text" class="form-control @error('beratbadan') is-invalid @enderror"  id="beratbadan" name="beratbadan" required  value="{{ old('beratbadan') }}">
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
        <input type="text" class="form-control @error('ditolak') is-invalid @enderror"  id="ditolak" name="ditolak" required  value="{{ old('ditolak') }}">
        @error('ditolak')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="ujisaring" class="form-label">Uji Saring</label>
        <select class="form-select" name="ujisaring">
          <option value="Baik" selected>Baik</option>
          <option value="HIV">HIV</option>
          <option value="Hbsag">Hbsag</option>
          <option value="HCV">HCV</option>
          <option value="TPAH">TPAH</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="nokantong" class="form-label">No Kantong Darah</label>
        <input type="text" class="form-control @error('nokantong') is-invalid @enderror"  id="nokantong" name="nokantong"  value="{{ old('nokantong') }}">
        @error('nokantong')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Buat Data</button>
    </form>

</div>
@endsection