<div class="container my-5">
  <h2 class="text-center mb-5 fw-bold text-dark"><?= $title; ?></h2>

  <?php if (!empty($ekskul)) : ?>
    <div class="row justify-content-center">
      <?php foreach ($ekskul as $index => $e) : ?>
        <div class="col-md-4 col-sm-6 mb-4 d-flex">
          <div class="card ekskul-card border-0 shadow-sm rounded-4 overflow-hidden flex-fill position-relative">

            <!-- FOTO -->
            <div class="img-wrapper position-relative">
              <img src="<?= base_url('uploads/ekskul/' . $e->foto); ?>"
                   alt="<?= htmlspecialchars($e->judul); ?>"
                   class="img-fluid w-100 ekskul-img"
                   data-img="<?= base_url('uploads/ekskul/' . $e->foto); ?>">

              <!-- OVERLAY -->
              <div class="img-overlay d-flex justify-content-center align-items-center">
                <span class="zoom-icon">Lihat Gambar</span>
              </div>
            </div>

            <!-- ISI -->
            <div class="card-body text-center pt-3 pb-3 px-3">
              <h5 class="fw-semibold ekskul-title mb-2"><?= htmlspecialchars($e->judul); ?></h5>

              <p class="ekskul-desc mb-2">
                <?= htmlspecialchars($e->deskripsi); ?>
              </p>

              <?php if (strlen($e->deskripsi) > 100): ?>
                <span class="read-more-text text-primary fw-semibold"
                      style="cursor:pointer;font-size:0.93rem;"
                      data-target="overlay-<?= $index; ?>">
                  Baca selengkapnya
                </span>
              <?php endif; ?>
            </div>

            <!-- OVERLAY FULL DESCRIPTION -->
            <div class="overlay-detail position-absolute top-0 start-0 w-100 h-100 bg-white p-4"
                id="overlay-<?= $index; ?>">
              <p class="text-secondary" style="font-size:0.95rem;line-height:1.6;">
                <?= nl2br(htmlspecialchars($e->deskripsi)); ?>
              </p>
              <span class="close-overlay text-primary fw-semibold" style="cursor:pointer;">Tutup</span>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>

  <?php else : ?>
    <p class="text-center">Belum ada data ekskul.</p>
  <?php endif; ?>
</div>

<!-- MODAL GAMBAR -->
<div id="imageModal" class="modal fade show" tabindex="-1" style="display:none;">
  <span class="modal-close">&times;</span>
  <img class="modal-content-img" id="modalImage">
</div>

<style>

/* Card Ekskul */
.ekskul-card {
  min-height: 300px;
  padding-bottom: 10px;
  transition: all 0.35s ease;
  background: #fff;
  border-radius: 14px;
  box-shadow: 
      0 4px 12px rgba(0,0,0,0.10),
      0 12px 28px rgba(0,0,0,0.12);
}
.ekskul-card:hover {
  transform: translateY(-5px);
  box-shadow:
      0 8px 18px rgba(0,0,0,0.12),
      0 16px 40px rgba(0,0,0,0.15);
}

/* Wrapper Gambar */
.img-wrapper {
  position: relative;
  overflow: hidden;
}

/* Gambar */
.ekskul-img {
  height: 220px;
  width: 100%;
  object-fit: cover;
  transition: transform 0.6s ease;
}

/* Zoom gambar */
.ekskul-card:hover .ekskul-img {
  transform: scale(1.08);
}

/* Overlay */
.img-overlay {
  position: absolute;
  top:0;
  left:0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.45);
  opacity: 0;
  transition: 0.35s ease;
  pointer-events: none; /* FIX SUPAYA BISA DIKLIK GAMBAR */
}

.img-wrapper:hover .img-overlay {
  opacity: 1;
}

/* Icon lupa */
.zoom-icon {
  font-size: 1.1rem;  /* ukuran kecil, rapi */
  color: white;
  opacity: 0;
  transform: scale(0.9);
  transition: 0.3s ease;
  letter-spacing: 0.5px; /* biar lebih elegan */
  cursor: pointer;
}

.img-wrapper:hover .zoom-icon {
  opacity: 1;
  transform: scale(1);
}

/* Judul */
.ekskul-title {
  font-size: 1.18rem;
  color: #222;
  transition: color 0.3s ease;
}
.ekskul-card:hover .ekskul-title {
  color: #b30000;
}

/* Deskripsi */
.ekskul-desc {
  color: #555;
  font-size: 0.92rem;
  max-height: 55px;
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

/* Overlay Detail */
.overlay-detail {
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  z-index: 10;
}

.overlay-detail.active {
  opacity: 1;
  visibility: visible;
}

/* Modal image */
#imageModal {
  position: fixed;
  inset: 0;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.9);
  display:flex;
  justify-content:center;
  align-items:center;
  z-index:9999;
}

#imageModal img {
  max-width: 90%;
  max-height: 80vh;
  border-radius: 10px;
}

.modal-close {
  position:absolute;
  top:20px;right:40px;
  color:#fff;
  font-size:40px;font-weight: bold;
  cursor:pointer;
}

@media(max-width:768px){
  .ekskul-card {min-height: 350px;}
  .ekskul-img {height: 200px;}
}

</style>

<script>
document.addEventListener("DOMContentLoaded", () => {

  // Read more overlay
  document.querySelectorAll(".read-more-text").forEach(el =>
    el.addEventListener("click", () =>
      document.getElementById(el.dataset.target).classList.add("active"))
  );

  document.querySelectorAll(".close-overlay").forEach(el =>
    el.addEventListener("click", () =>
      el.closest(".overlay-detail").classList.remove("active"))
  );

  // Modal Gambar
  const modal = document.getElementById("imageModal");
  const modalImg = document.getElementById("modalImage");

  document.querySelectorAll(".ekskul-img").forEach(img =>
    img.addEventListener("click", () => {
      modal.style.display = "flex";
      modalImg.src = img.dataset.img;
    })
  );

  document.querySelector(".modal-close").addEventListener("click",
    () => modal.style.display = "none"
  );

  modal.addEventListener("click", e => {
    if (e.target === modal) modal.style.display = "none";
  });
});
</script>
