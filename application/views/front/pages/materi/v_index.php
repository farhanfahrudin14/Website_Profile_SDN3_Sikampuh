<!-- [<div class="container my-4">
  <div class="row pt-5 pb-3">
    <div class="col text-center">
      <h2 class="font-weight-bold text-dark">Daftar Materi Kelas <?= $kelas ?></h2>
      <p class="text-muted">
        Kumpulan materi pembelajaran Kelas <?= $kelas ?> SD Negeri 03 Sikampuh yang dapat dipelajari dan diunduh oleh siswa.
      </p>
      <hr class="w-25 mx-auto" style="border:2px solid #0d2d4d; opacity:0.8;">
    </div>
  </div>

  <?php if (!empty($materi)) : ?>
    <div class="row">
      <?php foreach ($materi as $m) : ?>
        <div class="col-md-4 mb-4">
          <div class="card custom-card h-100 border-0 rounded-3">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title font-weight-bold text-dark"><?= $m->judul; ?></h5>
              <p class="card-text text-muted">
                <?= word_limiter(strip_tags($m->deskripsi), 20); ?>
              </p>
              <div class="mt-auto">
                <?php if (!empty($m->file)) : ?>
                  <a href="<?= base_url('uploads/materi/'.$m->file); ?>" 
                     class="btn custom-btn btn-sm" target="_blank">
                    Download Materi
                  </a>
                <?php else: ?>
                  <span class="badge bg-secondary">Belum ada file</span>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else : ?>
    <div class="alert alert-info text-center">
      Belum ada materi untuk kelas ini.
    </div>
  <?php endif; ?>

  <!-- Tombol kembali -->
  <div class="row justify-content-center mt-5">
    <div class="col-lg-10 text-center">
      <a href="<?= site_url('akademik/materi'); ?>" class="btn custom-btn">
        ← Kembali ke Daftar Materi Pelajaran
      </a>
    </div>
  </div>
</div>

<!-- Style tombol & card -->
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

  /* Tombol utama (warna default ada background) */
  .custom-btn {
    background-color: #b30000;   /* biru tua */
    color: #fff;                /* teks putih */
    border: 2px solid #b30000;
    border-radius: 8px;
    padding: 8px 16px;
    font-weight: 500;
    transition: all 0.3s ease;
  }
  .custom-btn:hover {
    background-color: #fff;      /* putih */
    color: #b30000;             /* teks biru */
    border: 2px solid #b30000;
    transform: translateY(-2px);
  }
</style>
] -->