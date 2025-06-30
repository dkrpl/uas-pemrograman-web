<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><?= isset($row) ? 'Edit' : 'Tambah' ?> Data Tindakan</h3>
      </div>
      <form method="post">
        <div class="card-body">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="<?= isset($row) ? $row->tanggal : '' ?>" required>
          </div>

           <div class="form-group">
            <label>Nama Pasien</label>
            <select name="norm" class="form-control" id="select-pasien" required>
                <option value="">-- Pilih Pasien --</option>
                <?php foreach ($pasien as $p): ?>
                  <option value="<?= $p->norm ?>" <?= isset($row) && $row->norm == $p->norm ? 'selected' : '' ?>> <?= $p->nama ?></option>
                <?php endforeach ?>
              </select>
          </div>
          
          <div class="form-group">
            <label>Visum</label>
            <input type="text" name="visum" class="form-control" value="<?= isset($row) ? $row->visum : '' ?>" required>
          </div>
          
          <div class="form-group">
            <label>Tindakan</label>
            <select name="id_tindakan" class="form-control" id="select-tindakan" required>
                <option value="">-- Pilih Tindakan --</option>
                <?php foreach ($tindakan as $t): ?>
                  <option value="<?= $t->id ?>" data-nama="<?= $t->nama ?>" <?= isset($row) && $row->id_tindakan == $t->id ? 'selected' : '' ?>> <?= $t->nama ?></option>
                <?php endforeach ?>
              </select>
              <input type="hidden" name="tindakan" id="input-tindakan" class="form-control" value="<?= isset($row) ? $row->tindakan : '' ?>">
          </div>

          <div class="form-group">
            <label>Nama Dokter</label>
            <select name="id_dokter" class="form-control" id="select-dokter" required>
                <option value="">-- Pilih Dokter --</option>
                <?php foreach ($dokter as $d): ?>
                  <option value="<?= $d->id ?>" <?= isset($row) && $row->id_dokter == $d->id ? 'selected' : '' ?>> <?= $d->nama ?></option>
                <?php endforeach ?>
              </select>
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
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const selectTindakan = document.getElementById('select-tindakan');
    const inputTindakan = document.getElementById('input-tindakan');

    selectTindakan.addEventListener('change', function () {
      const selectedOption = this.options[this.selectedIndex];
      const namaTindakan = selectedOption.getAttribute('data-nama');
      if (namaTindakan) {
        inputTindakan.value = namaTindakan;
      }
    });
  });
</script>

