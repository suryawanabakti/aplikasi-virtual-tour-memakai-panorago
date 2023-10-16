@extends('public.layouts.app')
@section('content')
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Web Profile</h4>
                </div>
                <div class="card-body">
                    <form action="/setting" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Judul</label>
                            <input type="text" class="form-control" required name="title"
                                value="{{ $setting->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">About</label>
                            <input type="text" class="form-control" required name="about"
                                value="{{ $setting->about }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" required name="deskripsi"
                                value="{{ $setting->deskripsi }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">No. Telepon</label>
                            <input type="text" class="form-control" required name="no_telepon"
                                value="{{ $setting->no_telepon }}">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" required name="email"
                                value="{{ $setting->email }}">
                        </div>

                        <button class="btn btn-primary" type="submit">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
