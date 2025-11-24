<div class="container mt-1">
  <!-- Judul -->
  <div class="row pt-5 pb-3">
    <div class="col text-center">
      <h2 class="font-weight-bold text-dark">Daftar Prestasi</h2>
      <p class="text-muted">
        Daftar prestasi yang telah diraih oleh siswa sekolah SD Negeri 03 Sikampuh sebagai bentuk pencapaian dalam bidang akademik maupun non-akademik.
      </p>
      <hr class="w-25 mx-auto" style="border:2px solid #b30000; opacity:0.8;">
    </div>
  </div>

  <?php if (!empty($prestasi)) : ?>
    <div class="row">
      <?php foreach ($prestasi as $p) : ?>
        <div class="col-md-4 mb-4">
          <div class="card custom-card h-100 border-0 rounded-3">

            <?php if (!empty($p->foto)) : ?>
              <img src="<?= base_url('uploads/prestasi/' . $p->foto); ?>" 
                   class="card-img-top rounded-top" 
                   alt="<?= $p->judul; ?>" 
                   style="height: 200px; object-fit: cover;">
            <?php endif; ?>

            <div class="card-body d-flex flex-column">
              <h5 class="card-title font-weight-bold text-dark"><?= $p->judul; ?></h5>
              <p class="card-text text-muted">
                <?= word_limiter(strip_tags($p->deskripsi), 20); ?>
              </p>
            </div>

            <div class="card-footer text-center bg-white border-0">
              <a href="<?= site_url('akademik/prestasi_detail/' . $p->id); ?>" 
                 class="btn custom-btn btn-sm">
                 Lanjut Membaca
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else : ?>
    <div class="alert alert-info text-center">
      Belum ada data prestasi yang ditambahkan.
    </div>
  <?php endif; ?>
</div>

<!-- Custom CSS -->
<style>
  /* Card styling */
  .custom-card {
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }
  .custom-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 12px 24px rgba(0,0,0,0.2);
  }

  /* Tombol (default biru, hover putih) */
  .custom-btn {
    background-color: #b30000;
    color: #fff;
    border: 2px solid #b30000;
    border-radius: 8px;
    padding: 6px 14px;
    font-weight: 500;
    transition: all 0.3s ease;
  }
  .custom-btn:hover {
    background-color: #fff;
    color: #b30000;
    border: 2px solid #b30000;
    transform: translateY(-2px);
  }
  .custom-btn:active {
    transform: scale(0.96);
  }
</style>
