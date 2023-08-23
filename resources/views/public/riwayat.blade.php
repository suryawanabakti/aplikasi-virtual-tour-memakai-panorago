@extends('public.layouts.app')
@section('content')
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Riwayat Perhitungan</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal Input</th>
                                    <th>Luas Lahan</th>
                                    <th>Bibit</th>
                                    <th>Pupuk</th>
                                    <th>Hasil Produksi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perhitungan as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->created_at->format('d M Y') }}</td>
                                        <td>{{ $data->luas_lahan }}</td>
                                        <td>{{ $data->bibit }}</td>
                                        <td>{{ $data->pupuk }}</td>
                                        <td><span class="fw-bold">{{ $data->hasil }}</span></td>
                                        <td>
                                            <a href="/riwayat-perhitungan/{{ $data->id }}"
                                                class="btn btn-info btn-sm">Cek
                                                Perhitungan</a>
                                            <a onclick="return confirm('Apakah anda yakin ?')"
                                                href="/perhitungan-prediksi/{{ $data->id }}/destroy"
                                                class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
