@extends('layouts.app')

@section('title', 'Table')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Siswa dan Kelas</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Table</div>
                </div>
            </div>

            <div class="section-body">

            <a href="#" class="btn btn-info">Tambah siswa</a>

            <br>
            <br>
                
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Siswa</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Umur</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Radit</td>
                                            <td>XI PPLG 2</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Yudia</td>
                                            <td>XI pplg 2</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Samuel</td>
                                            <td>XI pplg 2</td>
                                            <td>16</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <a href="#" class="btn btn-info">Tambah Kelas</a>

                        <br>
                        <br>

                        <div class="card">
                            <div class="card-header">
                                <h4>Kelas</h4>
                            </div>

                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col">Lantai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>XI</td>
                                            <td>PPLG</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>X</td>
                                            <td>TJKT</td>
                                            <td>1</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
