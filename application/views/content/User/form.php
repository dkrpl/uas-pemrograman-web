<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><?= isset($row) ? 'Edit' : 'Tambah' ?> User </h3>
      </div>
      <form method="post">
        <div class="card-body">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= isset($row) ? $row->nama : '' ?>" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= isset($row) ? $row->email : '' ?>" required>
          </div>
          <div class="form-group">
            <label>Password <?= isset($row) ? '(Kosongkan jika tidak diubah)' : '' ?></label>
            <input type="password" name="paswd" class="form-control" <?= isset($row) ? '' : 'required' ?>>
          </div>

          <div class="form-group">
            <label>Akses</label>
            <select name="akses" class="form-control" required>
              <option value="prodi">Prodi</option>
              <option value="dosen">Dosen</option>
              <option value="mahasiswa">Mahasiswa</option>
            </select>
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control" value="<?= isset($row) ? $row->kelas : '' ?>" required>
          </div>
        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
          <a href="<?= site_url('user') ?>" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
</section>
