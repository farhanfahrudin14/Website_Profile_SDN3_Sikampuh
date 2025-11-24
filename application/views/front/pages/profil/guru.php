<!--================ Content Area =================-->
<section class="guru-section py-5" data-aos="fade-up">
  <div class="container">
    <!-- Judul -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark" style="font-family:'Poppins', sans-serif;">Daftar Guru SD Negeri 03 Sikampuh</h2>
      <p class="text-secondary" style="font-size:15px;">Profil tenaga pendidik yang menjadi teladan bagi siswa</p>
      <hr class="w-25 mx-auto" style="border:2px solid #b30000; opacity:0.8;">
    </div>

    <!-- Card Guru -->
    <div class="row justify-content-center">
      <?php if (!empty($guru)) : ?>
        <?php foreach ($guru as $g) : ?>
          <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card card-guru shadow-sm border-0 rounded-4">
              <div class="card-img-wrapper">
                <img 
                  src="<?= $g->foto ? base_url('uploads/guru/' . $g->foto) : base_url('assets/img/no-image.png'); ?>" 
                  alt="<?= $g->nama; ?>" 
                  class="card-img-top">
              </div>
              <div class="card-body text-center p-3">
                <h5 class="card-title fw-semibold mb-2 text-primary-emphasis" style="font-family:'Poppins', sans-serif;">
                  <?= $g->nama; ?>
                </h5>
                <p class="card-text mb-1"><strong>NIP:</strong> <?= $g->nip ?: '-'; ?></p>
                <p class="card-text"><strong>Jabatan:</strong> <?= $g->jabatan; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <div class="col-12">
          <div class="alert alert-info text-center shadow-sm rounded-3">
            Belum ada data guru yang ditambahkan.
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<!--================ End Content Area =================-->

<!--================ Custom CSS =================-->
<style>
  /* Background section */
  .guru-section {
    background: linear-gradient(180deg, #f9fafc 0%, #eef2f7 100%);
  }

  /* Card guru */
  .card-guru {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    background: #ffffff;
    transition: all 0.35s ease;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
  }

  .card-guru:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  }

  /* Wrapper image */
  .card-img-wrapper {
    overflow: hidden;
    height: 260px;
    position: relative;
  }

  .card-img-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
  }

  .card-guru:hover .card-img-wrapper img {
    transform: scale(1.08);
  }

  /* Card body */
  .card-body {
    background: rgba(255, 255, 255, 0.85);
    backdrop-filter: blur(6px);
  }

  .card-title {
    font-size: 1.05rem;
    color: #b30000;
  }

  .card-text {
    color: #555;
    font-size: 14.5px;
  }

  /* Responsiveness */
  @media (max-width: 576px) {
    .card-img-wrapper {
      height: 220px;
    }
  }
</style>
