<!--================ Content Area =================-->
<section class="content-section py-5" data-aos="fade-up">
  <div class="container">

    <!-- Judul Section -->
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary-emphasis" style="font-family:'Poppins', sans-serif;">Sejarah SD Negeri 03 Sikampuh</h2>
      <p class="text-secondary" style="font-size:15px;">Profil singkat mengenai latar belakang berdirinya sekolah kami</p>
      <hr class="w-25 mx-auto" style="border:2px solid #b30000; opacity:0.8;">
    </div>

    <!-- Card Sejarah -->
    <div class="card sejarah-card mx-auto shadow-lg border-0 rounded-4" style="max-width:900px;">
      <div class="card-body p-4 p-md-5 position-relative">
        <div class="ribbon bg-primary text-white fw-semibold px-3 py-1 rounded-end" 
             style="position:absolute; top:20px; left:-5px; font-size:14px;">
          Latar Belakang
        </div>

        <div class="d-flex align-items-center mb-3">
          <div class="icon-wrapper me-3">
            <i class="fas fa-school fa-2x text-primary"></i>
          </div>
          <h4 class="card-title mb-0 fw-semibold" style="font-family:'Poppins', sans-serif;">Asal Usul Berdirinya Sekolah</h4>
        </div>

        <p class="card-text text-dark mt-3" style="line-height:1.9; text-align:justify; font-size:15.5px;">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
          standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
          a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
          remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
          Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
          of Lorem Ipsum.
        </p>
      </div>
    </div>
  </div>
</section>
<!--================ End Content Area =================-->

<!-- Custom CSS -->
<style>
  /* Section background */
  .content-section {
    background: linear-gradient(180deg, #f8f9fc 0%, #eef2f7 100%);
  }

  /* Card styling */
  .sejarah-card {
    transition: all 0.4s ease-in-out;
    background: #ffffff;
  }

  .sejarah-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
  }

  /* Ribbon */
  .ribbon {
    background-color: #b30000 !important;
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
  }

  /* Title dan text */
  .card-title {
    font-size: 1.25rem;
    color: #b30000;
  }

  .card-text {
    color: #333;
  }

  /* Icon */
  .icon-wrapper {
    background: #e8f0fe;
    border-radius: 10px;
    padding: 10px;
  }
</style>
