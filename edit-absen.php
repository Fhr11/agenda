<?php
include_once('header.php');
    ?>
    <!-- Konten Edit Data Tamu -->
     <div class="content-wrapper">

     
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6>Data Tamu</h6>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="id_tamu" id="id_tamu" value="<?= $id_tamu ?>">
                <div class="form-group row">
                    <label for="nama_tamu" class="col-sm-3 col-form-label">Nama Tamu</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_tamu" name="nama_tamu" value="<?= $dataTamu['nama_tamu'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="alamat" name="alamat"><?= $dataTamu['alamat'] ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="no_hp" class="col-sm-3 col-form-label">No. Telepon</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $dataTamu['no_hp'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="bertemu" class="col-sm-3 col-form-label">Bertemu dg.</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="bertemu" name="bertemu" value="<?= $dataTamu['bertemu'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kepentingan" class="col-sm-3 col-form-label">Kepentingan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="kepentingan" name="kepentingan" value="<?= $dataTamu['kepentingan'] ?>">
                    </div>
                </div>
               
                <div class="form-group row">
                    <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                    <div class="col-sm-8">
                        <img src="assets/uploadgambar/" alt="">
                        <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $dataTamu['gambar'] ?>">
                    </div>
                </div>
        
            </div>
        <div class="form-group row">
            <label for="" class="col-sm-3 col-form-label"></label>
            <div class="col-sm-8 d-flex justify-content-end">

            </div>
            <a type="button" class="btn btn-danger btn-icon-split" href="buku-tamu.php">
                <span class="icon text-white-50">
                    <i class="fas fa-chevron-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>

<!-- /.container-fluid -->

<?php
include_once('footer.php');
?>