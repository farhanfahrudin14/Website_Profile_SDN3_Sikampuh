<!--================ Visi & Misi Section =================-->
<section class="visimisi-section py-5" data-aos="fade-up">
  <div class="container">

    <!-- Judul -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark" style="font-family:'Poppins', sans-serif;">Visi & Misi SD Negeri 03 Sikampuh</h2>
      <p class="text-muted" style="font-size:15px;">Tujuan utama serta arah pengembangan sekolah</p>
      <hr class="w-25 mx-auto" style="border:2px solid #b30000; opacity:0.8;">
    </div>

    <!-- Gambar Visi Misi -->
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="visimisi-card shadow-lg border-0 rounded-4 text-center p-3" data-aos="zoom-in" data-aos-duration="1000">
          <div class="visimisi-img-wrapper">
            <img src="<?= base_url('img/visimisi/y.png') ?>" 
                 alt="Visi Misi" 
                 class="img-fluid rounded-4">
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<!--================ End Visi & Misi Section =================-->

<!--================ Custom CSS =================-->
<style>
  .visimisi-section {
    background: linear-gradient(180deg, #f9fafc 0%, #eef2f7 100%);
  }

  .visimisi-card {
    background: #fff;
    border-radius: 16px;
    transition: all 0.4s ease;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
  }

  .visimisi-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.2);
  }

  .visimisi-img-wrapper {
    overflow: hidden;
    border-radius: 16px;
  }

  .visimisi-img-wrapper img {
    transition: transform 0.5s ease;
  }

  .visimisi-card:hover img {
    transform: scale(1.05);
  }

  /* Responsiveness */
  @media (max-width: 768px) {
    .visimisi-img-wrapper img {
      border-radius: 10px;
    }
  }
</style>
