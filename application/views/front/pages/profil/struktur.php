<!--================ Struktur Organisasi =================-->
<section class="struktur-section py-5" data-aos="fade-up">
  <div class="container">

    <!-- Judul -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark" style="font-family:'Poppins', sans-serif;">Struktur Organisasi SD Negeri 03 Sikampuh</h2>
      <p class="text-muted" style="font-size:15px;">Gambaran susunan kepengurusan sekolah</p>
      <hr class="w-25 mx-auto" style="border:2px solid #b30000; opacity:0.8;">
    </div>

    <!-- Gambar Struktur -->
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="struktur-card shadow-lg border-0 rounded-4 p-3 text-center" data-aos="zoom-in" data-aos-duration="1000">
          <div class="struktur-img-wrapper">
            <img src="<?= base_url('img/struktur_organisasi/' . $struktur->photo) ?>" 
                 alt="Struktur Organisasi" 
                 class="img-fluid rounded-4">
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--================ End Struktur Organisasi =================-->

<!--================ Custom CSS =================-->
<style>
  .struktur-section {
    background: linear-gradient(180deg, #f9fafc 0%, #eef2f7 100%);
  }

  .struktur-card {
    background: #ffffff;
    border-radius: 16px;
    transition: all 0.4s ease;
    overflow: hidden;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
  }

  .struktur-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
  }

  .struktur-img-wrapper {
    overflow: hidden;
    border-radius: 16px;
  }

  .struktur-img-wrapper img {
    transition: transform 0.5s ease;
  }

  .struktur-card:hover img {
    transform: scale(1.05);
  }

  /* Responsiveness */
  @media (max-width: 768px) {
    .struktur-img-wrapper img {
      border-radius: 10px;
    }
  }
</style>
