<section class="content">
  <div class="container-fluid">

    <div class="card card-default color-palette-box">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-box-open"></i>
              Data Pasien
            </h3>
            <a href="<?= site_url('pasien/add') ?>" class="btn btn-primary float-right" >
                  <i class="fa fa-plus"> Tambah Data</i>
                </a>
          </div>
          <div class="card-body">
            <div class="col-12 table-responsive">
          <table class="table table-striped" id="example1" >
          <thead class="thead-dark">
            <tr>
              <th>Norm</th>
              <th>Nama</th>
              <th>No Telp</th>
              <th>Alamat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pasien as $row): ?>
              <tr>
                <td><?= $row->norm ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->notelp ?></td>
                <td><?= $row->alamat ?></td>
                <td>
                  <a href="<?= site_url('pasien/edit/'.$row->norm) ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?= site_url('pasien/delete/'.$row->norm) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
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
