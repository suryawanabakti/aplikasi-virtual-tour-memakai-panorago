@extends('public.layouts.app')
@section('content')
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">Wisata</h4>
                    <a class="btn btn-primary" href="/wisata/create">Tambah Wisata</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hovered">
                            <thead>
                                <tr>
                                    <th>Nama Wisata</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Deskripsi</th>
                                    <th>Virtual Link</th>
                                    <th>
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($wisatas as $wisata)
                                    <tr>
                                        <td>{{ $wisata->nama_wisata }}</td>
                                        <td>{{ $wisata->kabupatenkota }}</td>
                                        <td>{{ $wisata->deskripsi }}</td>
                                        <td>

                                            <a class="btn btn-sm btn-primary" href="{{ $wisata->virtual_link }}"
                                                target="_blank">
                                                Lihat Virtual</a>
                                        </td>
                                        <td class="text-nowrap">
                                            <a class="btn btn-primary btn-sm btn-icon"
                                                href="/wisata/{{ $wisata->id }}/edit">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-edit" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                    </path>
                                                    <path
                                                        d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                    </path>
                                                    <path d="M16 5l3 3"></path>
                                                </svg>
                                            </a>
                                            <a onclick="return confirm('Apakah anda yakin menghapus ini ?')"
                                                class="btn btn-primary btn-sm btn-icon"
                                                href="/wisata/{{ $wisata->id }}/delete">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-trash" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 7l16 0"></path>
                                                    <path d="M10 11l0 6"></path>
                                                    <path d="M14 11l0 6"></path>
                                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                </svg>
                                            </a>
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
