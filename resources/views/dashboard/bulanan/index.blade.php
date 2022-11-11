@extends('dashboard.layouts.main')


@section('container') 

<div class="container">
    <div class="row my-3">
        <div class="col">
        <h1 class="mb-3">Laporan Bulan {{ date('m Y') }}</h1>
        <table class="table table-bordered border-success mb-5">
          <thead>
              <tr>
                  <th scope="col" rowspan="4" class="text-center">No</th>
                  <th scope="col" rowspan="4" class="text-center">Kelompok Umur</th>
                  <th scope="col" rowspan="4" class="text-center">Jumlah Total Donasi(kantong)</th>
                  <th scope="col" colspan="4" class="text-center">Jumlah Donasi Dalam Gedung (Jumlah Kantong)</th>
                  <th scope="col" colspan="2" class="text-center">Jumlah Donasi Sukarela Dari Kegiatan Mobile Unit (Jumlah Kantong)</th>
                  <th scope="col" colspan="2" class="text-center">Jumlah Donasi Darah Menurut</th>
                  <th scope="col" colspan="8" class="text-center">Jumlah Donasi Darah Menurut Golongan Darah dan Rhesus</th>
                  <tr>
                    <th scope="row" colspan="2"class="text-center">Donor Sukarela</th>
                    <th scope="row" rowspan="2"class="text-center">Donor Pengganti</th>
                    <th scope="row" rowspan="2"class="text-center">Donor Bayaran</th>
                    <th scope="row" rowspan="2"class="text-center">Baru</th>
                    <th scope="row" rowspan="2"class="text-center">ulang</th>
                    <th scope="row" rowspan="2"class="text-center">Pria</th>
                    <th scope="row" rowspan="2"class="text-center">Wanita</th>
                    <th scope="row" colspan="2"class="text-center">O</th>
                    <th scope="row" colspan="2"class="text-center">A</th>
                    <th scope="row" colspan="2"class="text-center">B</th>
                    <th scope="row" colspan="2"class="text-center">AB</th>
                  </tr>
                  <tr>
                    <th scope="row"class="text-center">Baru</th>
                    <th scope="row"class="text-center">ulang</th>
                    <th scope="row"class="text-center">Pos</th>
                    <th scope="row"class="text-center">Neg</th>
                    <th scope="row"class="text-center">Pos</th>
                    <th scope="row"class="text-center">Neg</th>
                    <th scope="row"class="text-center">Pos</th>
                    <th scope="row"class="text-center">Neg</th>
                    <th scope="row"class="text-center">Pos</th>
                    <th scope="row"class="text-center">Neg</th>
                  </tr>
                  

              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row"class="text-center">1</th>
                  <th scope="row"class="text-center">< 18 Tahun</th>
                  <td class="text-center">{{ $jumlahdonasi1 }}</td>
                  <td class="text-center">{{ $sukarelabaruQ }}</td>
                  <td class="text-center">{{ $sukarelaulangQ }}</td>
                  <td class="text-center">{{ $penggantiQ }}</td>
                  <td class="text-center">{{ $bayaranQ }}</td>
                  <td class="text-center">{{ $mobileunitbaruQ }}</td>
                  <td class="text-center">{{ $mobileunitulangQ }}</td>
                  <td class="text-center">{{ $laki2Q }}</td>
                  <td class="text-center">{{ $perempuanQ }}</td>
                  <td class="text-center">{{ $rhesusO1Q }}</td>
                  <td class="text-center">{{ $rhesusO2Q }}</td>
                  <td class="text-center">{{ $rhesusA1Q }}</td>
                  <td class="text-center">{{ $rhesusA2Q }}</td>
                  <td class="text-center">{{ $rhesusB1Q }}</td>
                  <td class="text-center">{{ $rhesusB2Q }}</td>
                  <td class="text-center">{{ $rhesusAB1Q }}</td>
                  <td class="text-center">{{ $rhesusAB2Q }}</td>
              </tr>
              <tr>
                  <th scope="row"class="text-center">2</th>
                  <th scope="row"class="text-center">18 - 24 Tahun</th>
                  <td class="text-center">{{ $jumlahdonasi2 }}</td>
                  <td class="text-center">{{ $sukarelabaru }}</td>
                  <td class="text-center">{{ $sukarelaulang }}</td>
                  <td class="text-center">{{ $pengganti }}</td>
                  <td class="text-center">{{ $bayaran }}</td>
                  <td class="text-center">{{ $mobileunitbaru }}</td>
                  <td class="text-center">{{ $mobileunitulang }}</td>
                  <td class="text-center">{{ $laki2 }}</td>
                  <td class="text-center">{{ $perempuan }}</td>
                  <td class="text-center">{{ $rhesusO1 }}</td>
                  <td class="text-center">{{ $rhesusO2 }}</td>
                  <td class="text-center">{{ $rhesusA1 }}</td>
                  <td class="text-center">{{ $rhesusA2 }}</td>
                  <td class="text-center">{{ $rhesusB1 }}</td>
                  <td class="text-center">{{ $rhesusB2 }}</td>
                  <td class="text-center">{{ $rhesusAB1 }}</td>
                  <td class="text-center">{{ $rhesusAB2 }}</td>
              </tr>
              <tr>
                  <th scope="row"class="text-center">3</th>
                  <th scope="row"class="text-center">25-44 Tahun</th>
                  <td class="text-center">{{ $jumlahdonasi3 }}</td>
                  <td class="text-center">{{ $sukarelabaruW }}</td>
                  <td class="text-center">{{ $sukarelaulangW }}</td>
                  <td class="text-center">{{ $penggantiW }}</td>
                  <td class="text-center">{{ $bayaranW }}</td>
                  <td class="text-center">{{ $mobileunitbaruW }}</td>
                  <td class="text-center">{{ $mobileunitulangW }}</td>
                  <td class="text-center">{{ $laki2W }}</td>
                  <td class="text-center">{{ $perempuanW }}</td>
                  <td class="text-center">{{ $rhesusO1W }}</td>
                  <td class="text-center">{{ $rhesusO2W }}</td>
                  <td class="text-center">{{ $rhesusA1W }}</td>
                  <td class="text-center">{{ $rhesusA2W }}</td>
                  <td class="text-center">{{ $rhesusB1W }}</td>
                  <td class="text-center">{{ $rhesusB2W }}</td>
                  <td class="text-center">{{ $rhesusAB1W }}</td>
                  <td class="text-center">{{ $rhesusAB2W }}</td>
              </tr>
              <tr>
                  <th scope="row"class="text-center">4</th>
                  <th scope="row"class="text-center">45 - 59 Tahun</th>
                  <td class="text-center">{{ $jumlahdonasi4 }}</td>
                  <td class="text-center">{{ $sukarelabaruE }}</td>
                  <td class="text-center">{{ $sukarelaulangE }}</td>
                  <td class="text-center">{{ $penggantiE }}</td>
                  <td class="text-center">{{ $bayaranE }}</td>
                  <td class="text-center">{{ $mobileunitbaruE }}</td>
                  <td class="text-center">{{ $mobileunitulangE }}</td>
                  <td class="text-center">{{ $laki2E }}</td>
                  <td class="text-center">{{ $perempuanE }}</td>
                  <td class="text-center">{{ $rhesusO1E }}</td>
                  <td class="text-center">{{ $rhesusO2E }}</td>
                  <td class="text-center">{{ $rhesusA1E }}</td>
                  <td class="text-center">{{ $rhesusA2E }}</td>
                  <td class="text-center">{{ $rhesusB1E }}</td>
                  <td class="text-center">{{ $rhesusB2E }}</td>
                  <td class="text-center">{{ $rhesusAB1E }}</td>
                  <td class="text-center">{{ $rhesusAB2E }}</td>
              </tr>
              <tr>
                  <th scope="row"class="text-center">5</th>
                  <th scope="row"class="text-center">60 Tahun Keatas</th>
                  <td class="text-center">{{ $jumlahdonasi5 }}</td>
                  <td class="text-center">{{ $sukarelabaruR }}</td>
                  <td class="text-center">{{ $sukarelaulangR }}</td>
                  <td class="text-center">{{ $penggantiR }}</td>
                  <td class="text-center">{{ $bayaranR }}</td>
                  <td class="text-center">{{ $mobileunitbaruR }}</td>
                  <td class="text-center">{{ $mobileunitulangR }}</td>
                  <td class="text-center">{{ $laki2R }}</td>
                  <td class="text-center">{{ $perempuanR }}</td>
                  <td class="text-center">{{ $rhesusO1R }}</td>
                  <td class="text-center">{{ $rhesusO2R }}</td>
                  <td class="text-center">{{ $rhesusA1R }}</td>
                  <td class="text-center">{{ $rhesusA2R }}</td>
                  <td class="text-center">{{ $rhesusB1R }}</td>
                  <td class="text-center">{{ $rhesusB2R }}</td>
                  <td class="text-center">{{ $rhesusAB1R }}</td>
                  <td class="text-center">{{ $rhesusAB2R }}</td>
              </tr>
              <tr>
                  <th scope="row"class="text-center" colspan="2">Jumlah</th>
                  <td class="text-center">{{ $jumlahdonasi1+$jumlahdonasi2+$jumlahdonasi3+$jumlahdonasi4+$jumlahdonasi5 }}</td>
                  <td class="text-center">{{ $sukarelabaruQ+$sukarelabaru+$sukarelabaruW+$sukarelabaruE+$sukarelabaruR }}</td>
                  <td class="text-center">{{ $sukarelaulangQ+$sukarelaulang+$sukarelaulangW+$sukarelaulangE+$sukarelaulangR }}</td>
                  <td class="text-center">{{ $penggantiQ+$pengganti+$penggantiW+$penggantiE+$penggantiR }}</td>
                  <td class="text-center">{{ $bayaranQ+$bayaran+$bayaranW+$bayaranE+$bayaranR }}</td>
                  <td class="text-center">{{ $mobileunitbaruQ+$mobileunitbaru+$mobileunitbaruW+$mobileunitbaruE+$mobileunitbaruR }}</td>
                  <td class="text-center">{{ $mobileunitulangQ+$mobileunitulang+$mobileunitulangW+$mobileunitulangE+$mobileunitulangR }}</td>
                  <td class="text-center">{{ $laki2Q+$laki2+$laki2W+$laki2E+$laki2R }}</td>
                  <td class="text-center">{{ $perempuanQ+$perempuan+$perempuanW+$perempuanE+$perempuanR }}</td>
                  <td class="text-center">{{ $rhesusO1+$rhesusO1W+$rhesusO1Q+$rhesusO1E+$rhesusO1R }}</td>
                  <td class="text-center">{{ $rhesusO2+$rhesusO2Q+$rhesusO2W+$rhesusO2E+$rhesusO2R }}</td>
                  <td class="text-center">{{ $rhesusA1+$rhesusA1Q+$rhesusA1W+$rhesusA1E+$rhesusA1R }}</td>
                  <td class="text-center">{{ $rhesusA2+$rhesusA2W+$rhesusA2E+$rhesusA2Q+$rhesusA2R }}</td>
                  <td class="text-center">{{ $rhesusB1+$rhesusB1Q+$rhesusB1W+$rhesusB1E+$rhesusB1R }}</td>
                  <td class="text-center">{{ $rhesusB2+$rhesusB2Q+$rhesusB2W+$rhesusB2E+$rhesusB2R }}</td>
                  <td class="text-center">{{ $rhesusAB1+$rhesusAB1Q+$rhesusAB1W+$rhesusAB1E+$rhesusAB1R }}</td>
                  <td class="text-center">{{ $rhesusAB2+$rhesusAB2Q+$rhesusAB2W+$rhesusAB2E+$rhesusAB2R }}</td>
              </tr>
          </tbody>

        </table>

        @php
            $d = date('m');
        @endphp
        <h1 class="mb-3 ">Laporan Bulan {{ 0 . $d-1 . date(' Y') }}</h1>
        <table class="table table-bordered border-success">
          <thead>
              <tr>
                  <th scope="col" rowspan="4" class="text-center">No</th>
                  <th scope="col" rowspan="4" class="text-center">Kelompok Umur</th>
                  <th scope="col" rowspan="4">Jumlah Total Donasi(kantong)</th>
                  <th scope="col" colspan="4">Jumlah Donasi Dalam Gedung (Jumlah Kantong)</th>
                  <th scope="col" colspan="2">Jumlah Donasi Sukarela Dari Kegiatan Mobile Unit (Jumlah Kantong)</th>
                  <th scope="col" colspan="2">Jumlah Donasi Darah Menurut</th>
                  <th scope="col" colspan="8">Jumlah Donasi Darah Menurut Golongan Darah dan Rhesus</th>
                  <tr>
                    <th scope="row"class="text-center" colspan="2">Donor Sukarela</th>
                    <th scope="row"class="text-center" rowspan="2">Donor Pengganti</th>
                    <th scope="row"class="text-center" rowspan="2">Donor Bayaran</th>
                    <th scope="row"class="text-center" rowspan="2">Baru</th>
                    <th scope="row"class="text-center" rowspan="2">ulang</th>
                    <th scope="row"class="text-center" rowspan="2">Pria</th>
                    <th scope="row"class="text-center" rowspan="2">Wanita</th>
                    <th scope="row"class="text-center" colspan="2">O</th>
                    <th scope="row"class="text-center" colspan="2">A</th>
                    <th scope="row"class="text-center" colspan="2">B</th>
                    <th scope="row"class="text-center" colspan="2">AB</th>
                  </tr>
                  <tr>
                    <th scope="row"class="text-center">Baru</th>
                    <th scope="row"class="text-center">ulang</th>
                    <th scope="row"class="text-center">Pos</th>
                    <th scope="row"class="text-center">Neg</th>
                    <th scope="row"class="text-center">Pos</th>
                    <th scope="row"class="text-center">Neg</th>
                    <th scope="row"class="text-center">Pos</th>
                    <th scope="row"class="text-center">Neg</th>
                    <th scope="row"class="text-center">Pos</th>
                    <th scope="row"class="text-center">Neg</th>
                  </tr>
                  

              </tr>
          </thead>
          <tbody>
              <tr>
                  <th scope="row"class="text-center">1</th>
                  <th scope="row"class="text-center">< 18 Tahun</th>
                  <td class="text-center">{{ $Ajumlahdonasi1 }}</td>
                  <td class="text-center">{{ $AsukarelabaruQ }}</td>
                  <td class="text-center">{{ $AsukarelaulangQ }}</td>
                  <td class="text-center">{{ $ApenggantiQ }}</td>
                  <td class="text-center">{{ $AbayaranQ }}</td>
                  <td class="text-center">{{ $AmobileunitbaruQ }}</td>
                  <td class="text-center">{{ $AmobileunitulangQ }}</td>
                  <td class="text-center">{{ $Alaki2Q }}</td>
                  <td class="text-center">{{ $AperempuanQ }}</td>
                  <td class="text-center">{{ $ArhesusO1Q }}</td>
                  <td class="text-center">{{ $ArhesusO2Q }}</td>
                  <td class="text-center">{{ $ArhesusA1Q }}</td>
                  <td class="text-center">{{ $ArhesusA2Q }}</td>
                  <td class="text-center">{{ $ArhesusB1Q }}</td>
                  <td class="text-center">{{ $ArhesusB2Q }}</td>
                  <td class="text-center">{{ $ArhesusAB1Q }}</td>
                  <td class="text-center">{{ $ArhesusAB2Q }}</td>
              </tr>
              <tr>
                  <th scope="row"class="text-center">2</th>
                  <th scope="row"class="text-center">18 - 24 Tahun</th>
                  <td class="text-center">{{ $Ajumlahdonasi2 }}</td>
                  <td class="text-center">{{ $Asukarelabaru }}</td>
                  <td class="text-center">{{ $Asukarelaulang }}</td>
                  <td class="text-center">{{ $Apengganti }}</td>
                  <td class="text-center">{{ $Abayaran }}</td>
                  <td class="text-center">{{ $Amobileunitbaru }}</td>
                  <td class="text-center">{{ $Amobileunitulang }}</td>
                  <td class="text-center">{{ $Alaki2 }}</td>
                  <td class="text-center">{{ $Aperempuan }}</td>
                  <td class="text-center">{{ $ArhesusO1 }}</td>
                  <td class="text-center">{{ $ArhesusO2 }}</td>
                  <td class="text-center">{{ $ArhesusA1 }}</td>
                  <td class="text-center">{{ $ArhesusA2 }}</td>
                  <td class="text-center">{{ $ArhesusB1 }}</td>
                  <td class="text-center">{{ $ArhesusB2 }}</td>
                  <td class="text-center">{{ $ArhesusAB1 }}</td>
                  <td class="text-center">{{ $ArhesusAB2 }}</td>
              </tr>
              <tr>
                  <th scope="row"class="text-center">3</th>
                  <th scope="row"class="text-center">25-44 Tahun</th>
                  <td class="text-center">{{ $Ajumlahdonasi3 }}</td>
                  <td class="text-center">{{ $AsukarelabaruW }}</td>
                  <td class="text-center">{{ $AsukarelaulangW }}</td>
                  <td class="text-center">{{ $ApenggantiW }}</td>
                  <td class="text-center">{{ $AbayaranW }}</td>
                  <td class="text-center">{{ $AmobileunitbaruW }}</td>
                  <td class="text-center">{{ $AmobileunitulangW }}</td>
                  <td class="text-center">{{ $Alaki2W }}</td>
                  <td class="text-center">{{ $AperempuanW }}</td>
                  <td class="text-center">{{ $ArhesusO1W }}</td>
                  <td class="text-center">{{ $ArhesusO2W }}</td>
                  <td class="text-center">{{ $ArhesusA1W }}</td>
                  <td class="text-center">{{ $ArhesusA2W }}</td>
                  <td class="text-center">{{ $ArhesusB1W }}</td>
                  <td class="text-center">{{ $ArhesusB2W }}</td>
                  <td class="text-center">{{ $ArhesusAB1W }}</td>
                  <td class="text-center">{{ $ArhesusAB2W }}</td>
              </tr>
              <tr>
                  <th scope="row"class="text-center">4</th>
                  <th scope="row"class="text-center">45 - 59 Tahun</th>
                  <td class="text-center">{{ $Ajumlahdonasi4 }}</td>
                  <td class="text-center">{{ $AsukarelabaruE }}</td>
                  <td class="text-center">{{ $AsukarelaulangE }}</td>
                  <td class="text-center">{{ $ApenggantiE }}</td>
                  <td class="text-center">{{ $AbayaranE }}</td>
                  <td class="text-center">{{ $AmobileunitbaruE }}</td>
                  <td class="text-center">{{ $AmobileunitulangE }}</td>
                  <td class="text-center">{{ $Alaki2E }}</td>
                  <td class="text-center">{{ $AperempuanE }}</td>
                  <td class="text-center">{{ $ArhesusO1E }}</td>
                  <td class="text-center">{{ $ArhesusO2E }}</td>
                  <td class="text-center">{{ $ArhesusA1E }}</td>
                  <td class="text-center">{{ $ArhesusA2E }}</td>
                  <td class="text-center">{{ $ArhesusB1E }}</td>
                  <td class="text-center">{{ $ArhesusB2E }}</td>
                  <td class="text-center">{{ $ArhesusAB1E }}</td>
                  <td class="text-center">{{ $ArhesusAB2E }}</td>
              </tr>
              <tr>
                  <th scope="row"class="text-center">5</th>
                  <th scope="row"class="text-center">60 Tahun Keatas</th>
                  <td class="text-center">{{ $Ajumlahdonasi5 }}</td>
                  <td class="text-center">{{ $AsukarelabaruR }}</td>
                  <td class="text-center">{{ $AsukarelaulangR }}</td>
                  <td class="text-center">{{ $ApenggantiR }}</td>
                  <td class="text-center">{{ $AbayaranR }}</td>
                  <td class="text-center">{{ $AmobileunitbaruR }}</td>
                  <td class="text-center">{{ $AmobileunitulangR }}</td>
                  <td class="text-center">{{ $Alaki2R }}</td>
                  <td class="text-center">{{ $AperempuanR }}</td>
                  <td class="text-center">{{ $ArhesusO1R }}</td>
                  <td class="text-center">{{ $ArhesusO2R }}</td>
                  <td class="text-center">{{ $ArhesusA1R }}</td>
                  <td class="text-center">{{ $ArhesusA2R }}</td>
                  <td class="text-center">{{ $ArhesusB1R }}</td>
                  <td class="text-center">{{ $ArhesusB2R }}</td>
                  <td class="text-center">{{ $ArhesusAB1R }}</td>
                  <td class="text-center">{{ $ArhesusAB2R }}</td>
              </tr>
              <tr>
                  <th scope="row"class="text-center" colspan="2">Jumlah</th>
                  <td class="text-center">{{ $Ajumlahdonasi1+$Ajumlahdonasi2+$Ajumlahdonasi3+$Ajumlahdonasi4+$Ajumlahdonasi5 }}</td>
                  <td class="text-center">{{ $AsukarelabaruQ+$Asukarelabaru+$AsukarelabaruW+$AsukarelabaruE+$AsukarelabaruR }}</td>
                  <td class="text-center">{{ $AsukarelaulangQ+$Asukarelaulang+$AsukarelaulangW+$AsukarelaulangE+$AsukarelaulangR }}</td>
                  <td class="text-center">{{ $ApenggantiQ+$Apengganti+$ApenggantiW+$ApenggantiE+$ApenggantiR }}</td>
                  <td class="text-center">{{ $AbayaranQ+$Abayaran+$AbayaranW+$AbayaranE+$AbayaranR }}</td>
                  <td class="text-center">{{ $AmobileunitbaruQ+$Amobileunitbaru+$AmobileunitbaruW+$AmobileunitbaruE+$AmobileunitbaruR }}</td>
                  <td class="text-center">{{ $AmobileunitulangQ+$Amobileunitulang+$AmobileunitulangW+$AmobileunitulangE+$AmobileunitulangR }}</td>
                  <td class="text-center">{{ $Alaki2Q+$Alaki2+$Alaki2W+$Alaki2E+$Alaki2R }}</td>
                  <td class="text-center">{{ $AperempuanQ+$Aperempuan+$AperempuanW+$AperempuanE+$AperempuanR }}</td>
                  <td class="text-center">{{ $ArhesusO1+$ArhesusO1W+$ArhesusO1Q+$ArhesusO1E+$ArhesusO1R }}</td>
                  <td class="text-center">{{ $ArhesusO2+$ArhesusO2Q+$ArhesusO2W+$ArhesusO2E+$ArhesusO2R }}</td>
                  <td class="text-center">{{ $ArhesusA1+$ArhesusA1Q+$ArhesusA1W+$ArhesusA1E+$ArhesusA1R }}</td>
                  <td class="text-center">{{ $ArhesusA2+$ArhesusA2W+$ArhesusA2E+$ArhesusA2Q+$ArhesusA2R }}</td>
                  <td class="text-center">{{ $ArhesusB1+$ArhesusB1Q+$ArhesusB1W+$ArhesusB1E+$ArhesusB1R }}</td>
                  <td class="text-center">{{ $ArhesusB2+$ArhesusB2Q+$ArhesusB2W+$ArhesusB2E+$ArhesusB2R }}</td>
                  <td class="text-center">{{ $ArhesusAB1+$ArhesusAB1Q+$ArhesusAB1W+$ArhesusAB1E+$ArhesusAB1R }}</td>
                  <td class="text-center">{{ $ArhesusAB2+$ArhesusAB2Q+$ArhesusAB2W+$ArhesusAB2E+$ArhesusAB2R }}</td>
              </tr>
          </tbody>

        </table>
        
        
        </div>
    </div>
</div>
@endsection