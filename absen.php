<?php include 'header.php'; ?>

<div class="content-wrapper">
  <form>
    <fieldset style="margin: 22px;">
      <legend>Input Absen</legend>

      <!-- Pilih Siswa -->
      <div class="mb-3">
        <label for="Select" class="form-label">Pilih Siswa</label><br>
        <select id="Select" class="form-select" style="width: 300px; height: 30px;">
          <option>Sakit</option>
        </select>
      </div>

      <!-- Input Tanggal -->
      <div class="mb-3">
        <label for="DateInput" class="form-label">Input Tanggal</label><br>
        <input type="date" id="DateInput" class="form-control" style="width: 300px;">
      </div>

      <!-- Keterangan -->
      <div class="mb-3">
        <label for="SelectKeterangan" class="form-label">Keterangan</label><br>
        <select id="SelectKeterangan" class="form-select" style="width: 300px; height: 30px;">
          <option>Sakit</option>
          <option>Dispen</option>
          <option>Alpha</option>
          <option>Izin</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>
</div>

<?php include 'footer.php'; ?>
