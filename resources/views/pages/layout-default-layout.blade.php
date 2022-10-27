@extends('layouts.app')

@section('title', 'Table')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Siswa</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Table</div>
                </div>
            </div>

            <div class="section-body">

            <button type="button"class="btn btn-success" id="modal-11">Tambah</button>

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

                        <form class="modal-part"
            id="modal-f-part">
            <!-- <p>This login form is taken from elements with <code>#modal-login-part</code> id.</p> -->
            <div class="form-group">
                <label>Nama</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text"
                        class="form-control"
                        placeholder="Nama"
                        name="nama">
                </div>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text"
                        class="form-control"
                        placeholder="Kelas"
                        name="kelas">
                </div>
            </div>
            <div class="form-group">
                <label>Umur</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text"
                        class="form-control"
                        placeholder="Umur"
                        name="umur">
                </div>
            </div>
            <div class="form-group mb-0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox"
                        name="remember"
                        class="custom-control-input"
                        id="remember-me">
                    <label class="custom-control-label"
                        for="remember-me">Remember Me</label>
                </div>
            </div>
        </form>

@endsection

@push('scripts')
     <!-- JS Libraies -->
     <script src="{{ asset('library/prismjs/prism.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script>
@endpush
