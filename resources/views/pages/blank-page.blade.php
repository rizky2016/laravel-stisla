@extends('layouts.app')

@section('title', 'Table')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> Kelas</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                    <div class="breadcrumb-item">Table</div>
                </div>
            </div>

            <div class="section-body">

            

            <br>
            <br>
                
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        

                    <button type="button"class="btn btn-success" id="modal-1" onclick="onklik()">Tambah</button>
                                        

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

            <form class="modal-part"
            id="modal-p-part">
            <!-- <p>This login form is taken from elements with <code>#modal-login-part</code> id.</p> -->
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
                <label>Jurusan</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text"
                        class="form-control"
                        placeholder="Jurusan"
                        name="jurusan">
                </div>
            </div>
            <div class="form-group">
                <label>Lantai</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    </div>
                    <input type="text"
                        class="form-control"
                        placeholder="Lantai"
                        name="lantai">
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
