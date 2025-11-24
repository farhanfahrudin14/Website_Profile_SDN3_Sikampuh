<div class="container mt-5" data-aos="fade-up">
  <!-- Judul -->
  <div class="row pt-5 pb-3">
    <div class="col text-center">
      <h2 class="fw-bold text-dark animate__animated animate__fadeInDown">Data Siswa</h2>
      <p class="text-muted animate__animated animate__fadeInUp">
        Data siswa SD Negeri 03 Sikampuh yang ditampilkan berdasarkan tahun ajaran, kelas, jumlah siswa, dan wali kelas.
      </p>
      <hr class="w-25 mx-auto" style="border:2px solid #b30000; opacity:0.8;">
    </div>
  </div>

  <!-- Card Container -->
  <div class="card shadow-lg border-0 rounded-4 overflow-hidden data-siswa-card">
    <div class="card-body p-4">
      <div class="table-responsive">
        <table class="table align-middle table-hover">
          <thead class="table-header text-center">
            <tr>
              <th>No</th>
              <th>Tahun Ajaran</th>
              <th>Kelas</th>
              <th>Jumlah Siswa</th>
              <th>Wali Kelas</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($siswa)): ?>
              <?php $no=1; foreach($siswa as $row): ?>
                <tr>
                  <td class="text-center"><?= $no++ ?></td>
                  <td><?= $row->tahun_ajaran ?></td>
                  <td><?= $row->nama_kelas ?></td>
                  <td class="text-center"><?= $row->jumlah_siswa ?></td>
                  <td><?= $row->wali_kelas ?></td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="5" class="text-center text-muted">Belum ada data siswa</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Style -->
<style>
  @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap');

  .data-siswa-card {
    background: linear-gradient(135deg, #ffffff, #f7faff);
    transition: all 0.4s ease;
    border: 1px solid rgba(0, 31, 77, 0.1);
  }

  .data-siswa-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0, 31, 77, 0.15);
  }

  .table {
    font-family: 'Quicksand', sans-serif;
    border-radius: 10px;
    overflow: hidden;
  }

  .table-header {
    background: #b30000;
    color: #fff;
    font-weight: 600;
    letter-spacing: 0.3px;
  }

  .table-hover tbody tr {
    transition: all 0.3s ease;
  }

  .table-hover tbody tr:hover {
    background-color: rgba(0, 31, 77, 0.08);
    transform: scale(1.01);
  }

  th, td {
    vertical-align: middle !important;
    padding: 12px 16px;
  }

  td {
    color: #333;
    font-size: 15px;
  }

  h2 {
    color: #b30000;
  }
</style>

<!-- AOS (kalau belum ditambahkan di halaman) -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({ duration: 900, once: true });</script>
