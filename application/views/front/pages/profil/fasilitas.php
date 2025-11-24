<!-- Fasilitas -->
<div>
  <div class="container">

    <!-- Judul -->
    <div class="row pt-5 pb-3">
      <div class="col text-center">
        <h2 class="font-weight-bold text-dark">Fasilitas Sekolah</h2>
        <p class="text-muted">Berbagai sarana dan prasarana yang mendukung proses belajar mengajar di SD Negeri 03 Sikampuh</p>
        <hr class="w-25 mx-auto" style="border:2px solid #b30000; opacity:0.8;">
      </div>
    </div>

    <!-- Card Fasilitas -->
    <div class="row">
      <?php foreach($fasilitas as $f) : ?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
          <div class="card h-100 border-0 shadow-sm card-fasilitas">
            <a href="<?= base_url('img/fasilitas/' . $f->photo) ?>" target="_blank">
              <img src="<?= base_url('img/fasilitas/' . $f->photo) ?>" 
                   class="card-img-top img-fluid" 
                   alt="<?= $f->name ?>" 
                   style="height:200px; object-fit:cover;">
            </a>
            <div class="card-body text-center">
              <h6 class="card-title mb-0"><?= $f->name ?></h6>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>

  </div>
</div>
<!-- End of Fasilitas -->

<!-- Custom CSS -->
<style>
.card-fasilitas {
  border-radius: 6px !important; /* lebih kotak */
  overflow: hidden !important;
  transition: all 0.3s ease !important;
  box-shadow: 
    0 4px 8px rgba(0, 0, 0, 0.12),
    0 2px 4px rgba(0, 0, 0, 0.08) !important; 
}

.card-fasilitas:hover {
  transform: translateY(-6px) !important;
  box-shadow: 
    0 12px 20px rgba(0, 0, 0, 0.18),
    0 6px 8px rgba(0, 0, 0, 0.12) !important; 
}


.card-fasilitas img {
  transition: transform 0.3s ease;
}

.card-fasilitas:hover img {
  transform: scale(1.04);
}

</style>

