<div class="blog mt-5 mb-5">
  <div class="container">
    
    <!-- Judul -->
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <h1 class="font-weight-bold mb-3"><?= $berita->title ?></h1>
        <p class="text-muted">
          <i class="fa fa-calendar-alt mr-2"></i><?= mediumdate_indo($berita->date) ?>
        </p>
      </div>
    </div>

    <!-- Gambar Utama -->
    <div class="row justify-content-center mt-4">
      <div class="col-lg-10 text-center">
        <img src="<?= base_url('img/berita/' . $berita->photo) ?>" 
             class="img-fluid rounded shadow-sm mb-4" 
             alt="<?= $berita->title ?>"
             style="max-height: 450px; object-fit: cover; width:100%;">
      </div>
    </div>

    <!-- Konten -->
    <div class="row justify-content-center mt-4 konten">
      <div class="col-lg-10">
        <div class="p-3" style="line-height:1.8; text-align:justify; font-size:1.05rem;">
          <?= $berita->content ?>
        </div>
      </div>
    </div>

    <!-- Tombol Kembali -->
    <div class="row justify-content-center mt-5">
      <div class="col-lg-10 text-center">
        <a href="<?= site_url('blog'); ?>" class="btn btn-custom px-4">
          ← Kembali ke Daftar Berita
        </a>
      </div>
    </div>

  </div>
</div>

<!-- Custom CSS -->
<style>
/* 🔹 Tombol Custom */
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

/* 🔹 Judul */
.blog h1 {
  font-size: 2rem;
  color: #b30000;
}

/* 🔹 Konten paragraf */
.konten p {
  margin-bottom: 1rem;
}
</style>
