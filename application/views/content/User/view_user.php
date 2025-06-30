<section class="content">
  <div class="container-fluid">

    <div class="card card-default color-palette-box">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-box-open"></i>
              Data User
            </h3>
            <a href="<?= site_url('user/add') ?>" class="btn btn-primary float-right" >
                  <i class="fa fa-plus"> Tambah Data</i>
                </a>
          </div>
          <div class="card-body">
            <div class="col-12 table-responsive">
          <table class="table table-striped" id="example1" >
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Kelas</th>
              <th>Akses</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($list as $row): ?>
              <tr>
                <td><?= $row->id ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->kelas ?></td>
                <td><?= $row->akses ?></td>
                <td>
                  <a href="<?= site_url('user/edit/'.$row->id) ?>" class="btn btn-warning btn-sm">Edit</a>
                  <a href="<?= site_url('user/delete/'.$row->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
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
