<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><?= isset($row) ? 'Edit' : 'Tambah' ?> Data Dokter</h3>
      </div>
      <form method="post">
        <div class="card-body">
          <div class="form-group">
            <label>Nama Dokter</label>
            <input type="text" name="nama" class="form-control" value="<?= isset($row) ? $row->nama : '' ?>" required>
          </div>
          <div class="form-group">
            <label>No Telepon</label>
            <input type="number" name="notelp" class="form-control" value="<?= isset($row) ? $row->notelp : '' ?>" required>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="<?= site_url('dokter') ?>" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
</section>
