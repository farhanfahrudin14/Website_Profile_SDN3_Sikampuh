<div class="blog mt-5 mb-5">
  <div class="container">
    
    <!-- Judul -->
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h1 class="text-center font-weight-bold mb-3"><?= $prestasi->judul; ?></h1>
      </div>
    </div>

    <!-- Tanggal upload -->
    <div class="row justify-content-center mb-4">
      <div class="col-lg-10 text-center">
        <small class="text-muted">
          <i class="fa fa-calendar-alt mr-2"></i>
          Diunggah pada <?= date('d M Y', strtotime($prestasi->diupload)); ?>
        </small>
      </div>
    </div>

    <!-- Gambar -->
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <?php if (!empty($prestasi->foto)) : ?>
          <img src="<?= base_url('uploads/prestasi/' . $prestasi->foto); ?>" 
               alt="<?= $prestasi->judul; ?>" 
               class="img-fluid rounded shadow-sm mb-4"
               style="max-width:100%; height:auto;">
        <?php endif; ?>
      </div>
    </div>

    <!-- Konten -->
    <div class="row justify-content-center mt-4 konten">
      <div class="col-lg-10" style="line-height: 1.8; font-size: 1.05rem; text-align: justify;">
        <?= nl2br($prestasi->deskripsi); ?>
      </div>
    </div>

    <!-- Tombol kembali -->
    <div class="row justify-content-center mt-5">
      <div class="col-lg-10 text-center">
        <a href="<?= site_url('akademik/prestasi'); ?>" class="btn custom-btn">
          ← Kembali ke Daftar Prestasi
        </a>
      </div>
    </div>

  </div>
</div>

<!-- Style -->
<style>
  /* Card shadow untuk image */
  .blog img {
    box-shadow: 0 6px 18px rgba(0,0,0,0.15);
  }

  /* Tombol custom (sama seperti sebelumnya) */
  .custom-btn {
    background-color: #b30000;
    color: #fff;
    border: 2px solid #b30000;
    border-radius: 8px;
    padding: 10px 20px;
    font-weight: 600;
    transition: all 0.3s ease;
  }
  .custom-btn:hover {
    background-color: #fff;
    color: #b30000;
    border: 2px solid #b30000;
    transform: translateY(-2px);
  }
  .custom-btn:active {
    background-color: #e6e6e6;
    color: #b30000;
    transform: scale(0.97);
  }
</style>
