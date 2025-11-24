<!-- Berita -->
<div class="last-news mt-5">
  <div class="container px-5"> <!-- pakai container biar rapih tengah -->
    
    <!-- Judul -->
    <div class="row pt-5 pb-3">
      <div class="col text-center">
        <h2 class="font-weight-bold text-dark">Berita SD Negeri 03 Sikampuh</h2>
        <p class="text-muted">
          Berbagai sarana dan prasarana yang mendukung proses belajar mengajar di SD Negeri 03 Sikampuh
        </p>
        <hr class="w-25 mx-auto" style="border:2px solid #b30000; opacity:0.8;">
      </div>
    </div>

    <!-- Card Berita -->
    <div class="row justify-content-center mt-4">
      <?php foreach($news as $n) : ?>
        <div class="col-lg-4 col-md-6 col-sm-12 my-3"> <!-- lebih lebar -->
          <div class="card h-100 border-0 overflow-hidden custom-card">
            
            <!-- Gambar dengan efek zoom -->
            <div class="overflow-hidden">
              <img src="<?= base_url('img/berita/thumbs/' . $n->photo) ?>" 
                   class="card-img-top img-hover"
                   style="height:220px; object-fit:cover; border-top-left-radius: 6px; border-top-right-radius: 6px; transition: transform 0.4s ease;">
            </div>

            <!-- Body -->
            <div class="card-body d-flex flex-column p-4">
              <h5 class="card-title font-weight-bold"><?= $n->title ?></h5>
              <p class="card-text flex-grow-1 text-muted"><?= character_limiter($n->content, 70) ?></p>
              <a href="<?= base_url("blog/baca/$n->seo_title") ?>" 
                 class="btn btn-berita btn-sm mt-auto">
                 Lanjut Membaca <i class="fa fa-angle-right ml-2"></i>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>

    <!-- Pagination -->
    <div class="row mt-5 pb-5">
      <div class="col text-center">
        <nav aria-label="Page navigation example">
          <?= $pagination ?>
        </nav>
      </div> 
    </div>

  </div>
</div>
<!-- End of Berita -->

<!-- CSS Hover Efek -->
<style>
  /* Card */
  .custom-card {
    border-radius: 6px; /* sudut lebih tegas, tidak terlalu melengkung */
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
  }
  .custom-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 28px rgba(0,0,0,0.25);
  }
  .custom-card:hover .img-hover {
    transform: scale(1.1);
  }

  /* Tombol */
  /* Tombol */
.btn-berita {
  background-color: #b30000; /* biru tua */
  color: #fff;              /* teks putih */
  border-radius: 6px;
  font-weight: 600;
  border: 2px solid #b30000; /* border biar kelihatan pas hover */
  transition: all 0.3s ease;
}

.btn-berita:hover {
  background-color: #fff;     /* jadi putih */
  color: #b30000;             /* teks jadi biru */
  border: 2px solid #b30000;  /* border tetap biru */
  transform: translateY(-2px);
}

.btn-berita:active {
  background-color: #e6e6e6; /* pas klik jadi abu-abu terang */
  color: #b30000;
  transform: scale(0.97);
}
</style>
