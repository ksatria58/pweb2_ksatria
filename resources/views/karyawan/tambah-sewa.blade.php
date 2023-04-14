@extends('template')
@section('body')
    <div class="container">
        <h3>Tambah Data</h3>
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Nama Alat Berat</label>&nbsp;
                        <input type="text" name="nama_alat">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Operator </label>&nbsp;
                        <input type="text" name="nama_operator">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Sewa </label>&nbsp;
                        <input type="text" name="tanggal_sewa">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Kembali </label>&nbsp;
                        <input type="text" name="tanggal_kembali">
                    </div>
                    <div class="form-group">
                        <a href="/sewa">
                        <button class="btn btn-warning">Kembali</button>
                        </a>
                        <a href="">
                            <button class="btn btn-success">Tambah</button>
                            </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
