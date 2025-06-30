<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><?= isset($row) ? 'Edit' : 'Tambah' ?> Data Pasien</h3>
      </div>
      <form method="post">
        <div class="card-body">
          <div class="form-group">
            <label>Norm</label>
            <input type="text" name="norm" class="form-control" value="<?= isset($row) ? $row->norm : (isset($norm) ? $norm : '') ?>" readonly>
          </div>
          <div class="form-group">
            <label>Nama Pasien</label>
            <input type="text" name="nama" class="form-control" value="<?= isset($row) ? $row->nama : '' ?>" required>
          </div>
          <div class="form-group">
            <label>No Telepon</label>
            <input type="number" name="notelp" class="form-control" value="<?= isset($row) ? $row->notelp : '' ?>" required>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" required><?= isset($row) ? $row->alamat : '' ?></textarea>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="<?= site_url('pasien') ?>" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
</section>
