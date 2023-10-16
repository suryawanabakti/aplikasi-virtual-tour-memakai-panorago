@extends('public.layouts.app')
@section('content')
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header d-flext justify-content-between">
                    <h4 class="card-title">Admin / Tambah Admin</h4>
                    <a class="btn btn-primary" href="/admin">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="/admin" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" required id="name" name="name"
                                placeholder="Masukkan Nama...">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" required id="email" name="email"
                                placeholder="Masukkan Email...">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" required id="password" name="password"
                                placeholder="Masukkan Password...">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Password Konfirmasi</label>
                            <input type="password" class="form-control" required id="password_confirmation"
                                name="password_confirmation" placeholder="Masukkan Konfirmasi Password">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a class="btn btn-primary" href="">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
