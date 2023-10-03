<div class="row">
    <center>
        <h2>Peminjaman Inventaris</h2>
    </center>
    <hr>
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Peminjaman</div>
            <div class="panel-body">
                <form action="">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Kode Peminjaman</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Peminjam</label>
                            <select name="" id="" class="form-control">
                                <option value="">Nama Pegawai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Barang</label>
                            <select name="" id="" class="form-control">
                                <option value="">Laptop</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-md btn-primary">Simpan</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="panel panel-primary">
        <div class="panel-heading">Daftar Barang Dipinjam</div>
        <div class=""panel-body>
            <table class="table table-bordered table-striped">
                <head>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tgl. Pinjam</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Tgl. Kembali</th>
                            <th>Status</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>5-7-2023</td>
                            <td>Sadewa</td>
                            <td>Sapu</td>
                            <td>3</td>
                            <td>8-7-2023</td>
                            <td>
                                <label for="" class="label label-danger">Baik</label>
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm">Konfirmasi</a>
                            </td>
                        </tr>
                    </tbody>
                </head>
            </table>
        </div>
        </div>
    </div>
</div>