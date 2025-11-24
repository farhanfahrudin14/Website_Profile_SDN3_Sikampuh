<!-- <div class="container mt-1">
  <!-- Judul -->
  <div class="row pt-5 pb-3">
    <div class="col text-center">
      <h2 class="font-weight-bold text-dark">Daftar Materi Pelajaran</h2>
      <p class="text-muted">Pilih kelas untuk melihat materi pelajaran sesuai tingkat masing-masing.</p>
      <hr class="w-25 mx-auto" style="border:2px solid #b30000; opacity:0.8;">
    </div>
  </div>

  <!-- Card Kelas -->
  <div class="row">
    <?php for ($i = 1; $i <= 6; $i++): ?>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card custom-card shadow-sm h-100 text-center">
          <div class="card-body d-flex flex-column p-4">
            
            <!-- Ikon + Judul -->
<div class="mb-3">
  <i class="fa fa-book fa-3x mb-2" style="color:#b30000;"></i>
  <h4 class="card-title font-weight-bold">Kelas <?= $i ?></h4>
</div>

            
            <!-- Deskripsi -->
            <p class="card-text text-muted flex-grow-1">
              Materi lengkap untuk siswa Kelas <?= $i ?>.
            </p>

            <!-- Tombol -->
            <div class="mt-auto">
              <a href="<?= site_url('akademik/materi_kelas/'.$i) ?>" 
                 class="btn btn-custom px-4">
                 Lihat Materi
              </a>
            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>

<!-- CSS Custom -->
<style>
  /* Card */
  .custom-card {
    border-radius: 10px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .custom-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.15);
  }

  /* Tombol */
  .btn-custom {
    background-color: #b30000;
    color: #fff;
    border-radius: 6px;
    font-weight: 600;
    border: 2px solid #b30000;
    transition: all 0.3s ease;
  }
  .btn-custom:hover {
    background-color: #fff;
    color: #b30000;
    border: 2px solid #b30000;
    transform: translateY(-2px);
  }
  .btn-custom:active {
    background-color: #e6e6e6;
    color: #b30000;
    transform: scale(0.97);
  }
</style> -->
