<?php
include_once('header.php');
?>

<!-- Begin Page Content -->
<div class="content-wrapper">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" style="margin-left: 20px;">Ubah Data user</h1>


    <!-- Konten Edit Data user -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1>Data user</h1>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="id_user" id="id_user" value="<?= $id_user ?>">
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="user_role" class="col-sm-3 col-form-label">User Role</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="user_role" name="user_role">
                            <option value="admin" <?= $data['user_role'] == 'admin' ? 'selected' : ''; ?>> Administrator</option>
                            <option value="operator" <?= $data['user_role'] == 'operator' ? 'selected' : ''; ?>>Operator</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-8 d-flex justify-content-end">
                    </div>
                    <fieldset style="margin-left : 80%">
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