<?php include_once('header.php'); ?>
<style>
    .content-wrapper {
        margin-left: 20px; /* Jarak dari sidebar */ margin-right: 20px; /* Jarak dari sidebar */
    }

    .card {
        margin: 30px; /* Jarak luar antara card dengan elemen lain */
    }

    .card-header, .card-body {
        padding: 15px; /* Jarak dalam antara header, body, dan konten */
    }
    
</style>

<!-- Konten Edit Data Tamu -->
<div class="content-wrapper">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6>Data Siswa</h6>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="id_tamu" id="id_tamu" value="<?= $id_tamu ?>">
                
                <div class="form-group row">
                    <label for="nama_tamu" class="col-sm-3 col-form-label">Nama Siswa</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" value="<?= $dataTamu['nama_tamu'] ?>">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Kelas</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="alamat" name="alamat"><?= $dataTamu['alamat'] ?></textarea>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="no_hp" class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $dataTamu['no_hp'] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-8 offset-sm-3 d-flex justify-content-end">
                        <fieldset>
                            <div class="d-flex justify-content-between">
                                <a href="absen.php" class="btn btn-danger btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-chevron-left"></i>
                                    </span>
                                    <span class="text">Kembali</span>
                                </a>
                                <button type="submit" name="simpan" class="btn btn-primary" style="margin-left: 15px;">Simpan</button>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
