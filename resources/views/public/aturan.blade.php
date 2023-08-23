@extends('public.layouts.app')
@section('content')
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Aturan</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Aturan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>R1</td>
                                <td>IF luas lahan sawah sempit AND bibit
                                    holtikura sedikit AND pupuk sedikit THEN hasil
                                    produksi panen berkurang</td>
                            </tr>
                            <tr>
                                <td>R2</td>
                                <td>IF luas lahan sawah sempit AND bibit
                                    holtikura sedikit AND pupuk banyak THEN hasil
                                    produksi panen bertambah</td>
                            </tr>
                            <tr>
                                <td>R3</td>
                                <td>IF luas lahan sawah sempit AND bibit
                                    holtikura banyak AND pupuk sedikit THEN hasil
                                    produksi panen holtikura berkurang</td>
                            </tr>
                            <tr>
                                <td>R4</td>
                                <td>IF luas lahan sawah sempit AND bibit
                                    holtikura banyak AND pupuk banyak THEN hasil
                                    produksi panen bertambah</td>
                            </tr>
                            <tr>
                                <td>R5</td>
                                <td>IF luas lahan sawah luas AND bibit holtikura
                                    sedikit AND pupuk sedikit THEN hasil
                                    produksi panen holtikura berkurang</td>
                            </tr>
                            <tr>
                                <td>R6</td>
                                <td>IF luas lahan sawah luas AND bibit holtikura
                                    sedikit AND pupuk banyak THEN hasil
                                    produksi panen holtikura bertambah</td>
                            </tr>
                            <tr>
                                <td>R7</td>
                                <td>IF luas lahan sawah luas AND bibit holtikura
                                    banyak AND pupuk sedikit THEN hasil
                                    produksi panen holtikura berkurang</td>
                            </tr>
                            <tr>
                                <td>R8</td>
                                <td>IF luas lahan sawah luas AND bibit holtikura
                                    banyak AND pupuk banyak THEN hasil
                                    produksi panen holtikura bertambah</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
