@extends('public.layouts.app')
@section('content')
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header d-flext justify-content-between">
                    <h4 class="card-title">Admin / Tambah Wisata</h4>
                    <a class="btn btn-primary" href="/wisata">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/wisata" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_wisata" class="form-label">Nama Wisata</label>
                            <input type="text" class="form-control" required id="nama_wisata" name="nama_wisata"
                                placeholder="Masukkan Nama Wisata...">
                        </div>
                        <div class="mb-3">
                            <label for="virtual_link" class="form-label">Virtual Link</label>
                            <input type="text" class="form-control" required id="virtual_link" name="virtual_link"
                                placeholder="Masukkan VIrtual Link...">
                        </div>
                        <div class="mb-3">
                            <label for="kabupatenkota" class="form-label">Alamat</label>
                            <input type="text" class="form-control" required id="kabupatenkota" name="kabupatenkota"
                                placeholder="Masukkan Alamat Wisata...">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" required id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi..."
                                cols="30" rows="5"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="latitude" class="form-label">Latitude</label>
                            <input type="text" class="form-control" id="latitude" name="latitude"
                                placeholder="Masukkan Latitude...">
                        </div>
                        <div class="mb-3">
                            <label for="longitude" class="form-label">Longitude</label>
                            <input type="text" class="form-control" id="longitude" name="longitude"
                                placeholder="Masukkan Longitude...">
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <input type="file" class="form-control" required id="gambar" name="gambar"
                                placeholder="Masukkan Nama Gambar...">
                        </div>


                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a class="btn btn-primary" href="">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
