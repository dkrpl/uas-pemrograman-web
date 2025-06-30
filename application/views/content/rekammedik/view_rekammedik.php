<section class="content">
  <div class="container-fluid">

    <div class="card card-default color-palette-box">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-box-open"></i>
              Data Rekam Medis
            </h3>
            <a href="<?= site_url('rekammedik/add') ?>" class="btn btn-primary float-right" >
                  <i class="fa fa-plus"> Tambah Data</i>
                </a>
          </div>
          <div class="card-body">
            <div class="col-12 table-responsive">
          <table class="table table-striped" id="example1" >
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Tanggal</th>
              <th>Nama Pasien</th>
              <th>Visum</th> 
              <th>Tindakan</th>
              <th>Dokter</th> 
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($rekammedik as $row): ?>
              <tr>
                <td><?= $row->id ?></td>
                <td><?= $row->tanggal ?></td>
                <td><?= $row->pasien ?></td>
                <td><?= $row->visum ?></td>
                <td><?= $row->tindakan ?></td>
                <td><?= $row->dokter ?></td>
                <td>
                  <a href="<?= site_url('rekammedik/edit/'.$row->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?= site_url('rekammedik/delete/'.$row->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
              </table>
            </div>
              </div>
          <!-- /.card-body -->
        </div>


  </div>
</section>
