<?php
include_once('header.php');
?>
<style>
    .card-shadow-mb-4 {
        padding-top: 20px;
    }
</style>
    <!-- DataTales Tambah -->
     <div class="content-wrapper">
    <div class="card shadow mb-4">
        <h2 style="margin-left : 20px">Input Absen</h2>
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary btn-icon-split"
             data-toggle="modal" data-target="#tambahModal">
                <span class="icon text-white-50">
                    <i class="fa fa-plus"></i>
                </span>
                <span class="text">Data Absen</span>
            </button>
        </div>
        <fieldset>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Siswa</th>
                            <th>Kelas</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>
                                    <a class="btn btn-success" href="edit-absen.php">Ubah</a>
                                    <a onclick="confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger" href="function.php?id_tamu=<?= $tamu['id_tamu'] ?>">Hapus</a>
                                    
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </fieldset>



    <!-- Modal -->
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="TambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TambahModalLabel">Tambah Absen Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action=""
                    enctype="multipart/form-data">
                        <input type="hidden" name="id_tamu" id="id_tamu" value="<?= $kodeTamu ?>">
                        <div class="form-group row">
                            <label for="nama_tamu" class="col-sm-3 col-form-label">Nama Siswa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nama_tamu" name="nama_tamu">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-3 col-form-label">Kelas</label>
                            <div class="col-sm-8">
                                <input class="form-control" id="alamat" name="alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_hp" class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="no_hp" name="no_hp">
                                <option value="1">Sakit</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
                    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                </div>
                    </form>
            </div>
        </div>
    </div>

</div>
     </div>
<!-- /.container-fluid -->

<?php
include_once('footer.php');
?>
