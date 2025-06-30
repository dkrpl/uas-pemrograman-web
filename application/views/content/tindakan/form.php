<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><?= isset($row) ? 'Edit' : 'Tambah' ?> Data Tindakan</h3>
      </div>
      <form method="post">
        <div class="card-body">
          <div class="form-group">
            <label>Nama Tindakan</label>
            <input type="text" name="nama" class="form-control" value="<?= isset($row) ? $row->nama : '' ?>" required>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="<?= site_url('supplier') ?>" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
</section>
