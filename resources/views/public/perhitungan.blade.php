@extends('public.layouts.app')
@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Perhitungan Prediksi</h4>
                </div>
                <div class="card-body">
                    <form action="/perhitungan-prediksi" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Luas Lahan Sawah <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="luas_lahan"
                                placeholder="Masukkan Luas Lahan ..." required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bibit Tumbuhan Holtikura <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="bibit" placeholder="Masukkan Bibit..."
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pupuk <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="pupuk" placeholder="Masukkan Pupuk..."
                                required>
                        </div>
                        <button class="btn btn-primary" type="submit">Hitung</button>
                        <a href="" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
