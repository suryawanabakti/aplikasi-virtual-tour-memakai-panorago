@extends('public.layouts.app')
@section('content')
    @php
        $luasLahan = $perhitungan->luas_lahan;
        $bibit = $perhitungan->bibit;
        $pupuk = $perhitungan->pupuk;
        
        $batasAtasLuasSempit = 10000;
        $batasAtasBibitSempit = 20;
        $batasAtasPupuk = 600;
        //cari keanggotaan luas lahan
        $derajatKeanggotaanLuasLahanSempit = ($batasAtasLuasSempit - $luasLahan) / $batasAtasLuasSempit;
        $derajatKeanggotaanLuasLahanLuas = $luasLahan < $batasAtasLuasSempit ? 0 : 1;
        // cari keanggotaan bibit
        $derajatKeanggotaanBibitHoltikuraSedikit = ($batasAtasBibitSempit - $bibit) / $batasAtasBibitSempit;
        $derajatKeanggotaanBibitHoltikuraBanyak = $bibit < $batasAtasBibitSempit ? 0 : 1;
        // cari keanggotaan pupuk
        $derajatKeanggotaanPupukSedikit = ($batasAtasPupuk - $pupuk) / $batasAtasPupuk;
        $derajatKeanggotaanPupukBanyak = $pupuk < $batasAtasPupuk ? 0 : 1;
        
        // Rumus R1
        // IF luas lahan sawah sempit AND bibit
        // padi sedikit AND pupuk sedikit THEN hasil
        // produksi panen berkurang
        $apredikat1 = min($derajatKeanggotaanLuasLahanSempit, $derajatKeanggotaanBibitHoltikuraSedikit, $derajatKeanggotaanPupukSedikit);
        $r1 = 6000 - round($apredikat1, 3) * 6000;
        
        // Rumus R2
        // IF luas lahan sawah sempit AND bibit
        // padi sedikit AND pupuk banyak THEN hasil
        // produksi panen bertambah
        $apredikat2 = min($derajatKeanggotaanLuasLahanSempit, $derajatKeanggotaanBibitHoltikuraSedikit, $derajatKeanggotaanPupukBanyak);
        $r2 = 5000 + round($apredikat2, 3) / (6000 - 5000);
        
        // Rumus R3
        // IF luas lahan sawah sempit AND bibit
        // padi banyak AND pupuk sedikit THEN hasil
        // produksi panen padi berkurang
        $apredikat3 = min($derajatKeanggotaanLuasLahanSempit, $derajatKeanggotaanBibitHoltikuraBanyak, $derajatKeanggotaanPupukSedikit);
        $r3 = 6000 - round($apredikat3, 3) * 6000;
        
        // Rumus R4
        // IF luas lahan sawah sempit AND bibit
        // padi banyak AND pupuk banyak THEN hasil
        // produksi panen bertambah
        $apredikat4 = min($derajatKeanggotaanLuasLahanSempit, $derajatKeanggotaanBibitHoltikuraBanyak, $derajatKeanggotaanPupukBanyak);
        $r4 = 5000 + round($apredikat4, 3) / (6000 - 5000);
        
        // Rumus R5
        // IF luas lahan sawah luas AND bibit padi
        // sedikit AND pupuk sedikit THEN hasil
        // produksi panen padi berkurang
        $apredikat5 = min($derajatKeanggotaanLuasLahanLuas, $derajatKeanggotaanBibitHoltikuraSedikit, $derajatKeanggotaanPupukSedikit);
        $r5 = 6000 - round($apredikat5, 3) * 6000;
        
        // Rumus R6
        // IF luas lahan sawah luas AND bibit padi
        // sedikit AND pupuk banyak THEN hasil
        // produksi panen padi bertambah
        $apredikat6 = min($derajatKeanggotaanLuasLahanLuas, $derajatKeanggotaanBibitHoltikuraSedikit, $derajatKeanggotaanPupukBanyak);
        $r6 = 5000 + round($apredikat6, 3) / (6000 - 5000);
        
        // Rumus R7
        // IF luas lahan sawah luas AND bibit padi
        // banyak AND pupuk sedikit THEN hasil
        // produksi panen padi berkurang
        $apredikat7 = min($derajatKeanggotaanLuasLahanLuas, $derajatKeanggotaanBibitHoltikuraBanyak, $derajatKeanggotaanPupukSedikit);
        $r7 = 6000 - round($apredikat7, 3) * 6000;
        
        // Rumus R8
        // IF luas lahan sawah luas AND bibit padi
        // banyak AND pupuk banyak THEN hasil
        // produksi panen padi bertambah
        $apredikat8 = min($derajatKeanggotaanLuasLahanLuas, $derajatKeanggotaanBibitHoltikuraBanyak, $derajatKeanggotaanPupukBanyak);
        $r8 = 5000 + round($apredikat8, 3) / (6000 - 5000);
        $inferensi = [
            [
                'rule' => 'R1',
                'apredikat' => round($apredikat1, 3),
                'nilai' => $r1,
            ],
            [
                'rule' => 'R2',
                'apredikat' => round($apredikat2, 3),
                'nilai' => $r2,
            ],
            [
                'rule' => 'R3',
                'apredikat' => round($apredikat3, 3),
                'nilai' => $r3,
            ],
            [
                'rule' => 'R4',
                'apredikat' => round($apredikat4, 3),
                'nilai' => $r4,
            ],
            [
                'rule' => 'R5',
                'apredikat' => round($apredikat5, 3),
                'nilai' => $r5,
            ],
            [
                'rule' => 'R6',
                'apredikat' => round($apredikat6, 3),
                'nilai' => $r6,
            ],
            [
                'rule' => 'R7',
                'apredikat' => round($apredikat7, 3),
                'nilai' => $r7,
            ],
            [
                'rule' => 'R8',
                'apredikat' => round($apredikat8, 3),
                'nilai' => $r8,
            ],
        ];
        //Proses Defuzzifikasi
        
        $jumlah1 = round($apredikat1, 3) * $r1 + round($apredikat2, 3) * $r2 + round($apredikat3, 3) * $r3 + round($apredikat4, 3) * $r4 + round($apredikat5, 3) * $r5 + round($apredikat6, 3) * $r6 + round($apredikat7, 3) * $r7 + round($apredikat8, 3) * $r8;
        $jumlah2 = round($apredikat1, 3) + round($apredikat2, 3) + round($apredikat3, 3) + round($apredikat4, 3) + round($apredikat5, 3) + round($apredikat6, 3) + round($apredikat7, 3) + round($apredikat8, 3);
        if ($jumlah1 == 0) {
            $z = 0;
        } else {
            $z = $jumlah1 / $jumlah2;
        }
        
    @endphp
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Cek Perhitungan</h4>
                    <a href="/riwayat-perhitungan" class="btn btn-primary btn-sm">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <b>Diketahui</b> <br>
                        Luas Lahan : {{ $perhitungan->luas_lahan }} <br>
                        Bibit : {{ $perhitungan->bibit }} <br>
                        Pupuk : {{ $perhitungan->pupuk }} <br>
                    </div>
                    <div class="mb-3">
                        <b>Derajat Keanggotaan</b> <br>

                        Luas Lahan Sempit : ({{ $batasAtasLuasSempit }} - {{ $perhitungan->luas_lahan }}) /
                        {{ $batasAtasLuasSempit }} =
                        {{ $derajatKeanggotaanLuasLahanSempit }} <br>
                        Luas Lahan Luas : {{ $perhitungan->luas_lahan }} < {{ $batasAtasLuasSempit }}, Maka hasilnya
                            {{ $derajatKeanggotaanLuasLahanLuas }} <br>
                            <br>

                            Bibit Sedikit : ({{ $batasAtasBibitSempit }} - {{ $perhitungan->bibit }}) /
                            {{ $batasAtasBibitSempit }} =
                            {{ $derajatKeanggotaanBibitHoltikuraSedikit }} <br>
                            Bibit Banyak : {{ $perhitungan->bibit }} < {{ $batasAtasBibitSempit }}, Maka hasilnya
                                {{ $derajatKeanggotaanBibitHoltikuraBanyak }} <br>
                                <br>
                                Pupuk
                                Sedikit : ({{ $batasAtasPupuk }} - {{ $perhitungan->pupuk }}) /
                                {{ $batasAtasPupuk }}={{ $derajatKeanggotaanPupukSedikit }} <br>
                                Pupuk Banyak : {{ $perhitungan->pupuk }} < {{ $batasAtasPupuk }}, Maka hasilnya
                                    {{ $derajatKeanggotaanPupukBanyak }} <br>
                                    <br>
                                    <b>Proses Interfensi</b> <br>
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th>Rule</th>
                                                <th>α-predikat</th>
                                                <th>Nilai z rule</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($inferensi as $item)
                                                <tr>
                                                    <td>{{ $item['rule'] }}</td>
                                                    <td>{{ $item['apredikat'] }}</td>
                                                    <td>{{ $item['nilai'] }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    Hasil
                                    Prediksi : <b>{{ $perhitungan->hasil }}</b>
                    </div>
                </div>
            </div>
        </div>
    @endsection
