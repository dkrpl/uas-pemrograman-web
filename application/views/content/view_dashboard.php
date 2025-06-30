<section class="content">
  <div class="container-fluid">
    <!-- Statistik Box -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?= $jml_pasien ?></h3>
            <p>Total Pasien</p>
          </div>
          <div class="icon">
            <i class="fas fa-procedures"></i>
          </div>
          <a href="<?= site_url('pasien') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $jml_dokter ?></h3>
            <p>Total Dokter</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-md"></i>
          </div>
          <a href="<?= site_url('dokter') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?= $jml_tindakan ?></h3>
            <p>Total Tindakan</p>
          </div>
          <div class="icon">
            <i class="fas fa-stethoscope"></i>
          </div>
          <a href="<?= site_url('tindakan') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?= $jml_rekammedik ?></h3>
            <p>Total Rekam Medis</p>
          </div>
          <div class="icon">
            <i class="fas fa-file-medical-alt"></i>
          </div>
          <a href="<?= site_url('rekammedik') ?>" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>

    <!-- Chart Statistik -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Statistik Kunjungan Pasien</h3>
      </div>
      <div class="card-body">
        <canvas id="kunjunganChart" height="100"></canvas>
      </div>
    </div>
  </div>
</section>
<script src="<?= base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
<script>
  const ctx = document.getElementById('kunjunganChart').getContext('2d');
  const kunjunganChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?= json_encode($bulan) ?>,
      datasets: [{
        label: 'Jumlah Kunjungan',
        data: <?= json_encode($jumlah_kunjungan) ?>,
        backgroundColor: 'rgba(60,141,188,0.9)',
        borderColor: 'rgba(60,141,188,1)',
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });
</script>
