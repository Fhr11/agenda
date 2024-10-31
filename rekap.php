<?php include_once 'header.php'; ?>
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

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2>Rekap Absen</h2>
                </div>
            </div>
        </div>
    </section>

    <div class="row mx-auto d-flex justify-content-center">
        <div class="col-xl-5 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <form method="post" action="">
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <div class="font-weight-bold text-primary text-uppercase mb-1">Periode</div>
                                        </div>
                                        <div class="col-auto">
                                            <input type="date" class="form-control mb-2" id="p_awal" name="p_awal" required>
                                        </div>
                                        <div class="col-auto">
                                            <div class="font-weight-bold text-primary mb-1">s.d</div>
                                        </div>
                                        <div class="col-auto">
                                            <input type="date" class="form-control mb-2" id="p_akhir" name="p_akhir" required>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" name="tampilkan" class="btn btn-primary mb-2">Tampilkan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span class="text">Tabel Rekap Absen</span>
        </div>
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
                                <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger" href="hapus-tamu.php?id=<?= $tamu['id_tamu'] ?>">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
