@extends('public.layouts.app')
@section('content')
    {{-- <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Variable
                    </h2>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Variable</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <h4>Luas Lahan</h4>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Himpunan</th>
                                        <th>Batas Bawah</th>
                                        <th>Batas Atas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sempit</td>
                                        <td>2500</td>
                                        <td>10000</td>
                                    </tr>
                                    <tr>
                                        <td>Luas</td>
                                        <td>2500</td>
                                        <td>10000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <h4>Bibit Tumbuhan Holtikura</h4>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Himpunan</th>
                                        <th>Batas Bawah</th>
                                        <th>Batas Atas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sedikit</td>
                                        <td>5</td>
                                        <td>20</td>
                                    </tr>
                                    <tr>
                                        <td>Banyak</td>
                                        <td>5</td>
                                        <td>20</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <h4>Pupuk</h4>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Himpunan</th>
                                        <th>Batas Bawah</th>
                                        <th>Batas Atas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sedikit</td>
                                        <td>150</td>
                                        <td>600</td>
                                    </tr>
                                    <tr>
                                        <td>Banyak</td>
                                        <td>150</td>
                                        <td>600</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <h4>Hasil Produksi Panen Tumbuhan Holtikura <span class="badge bg-secondary">VARIABLE THEN</span>
                        </h4>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Himpunan</th>
                                        <th>Batas Bawah</th>
                                        <th>Batas Atas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Berkurang</td>
                                        <td>1000</td>
                                        <td>3000</td>
                                    </tr>
                                    <tr>
                                        <td>Bertambah</td>
                                        <td>3100</td>
                                        <td>6000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
