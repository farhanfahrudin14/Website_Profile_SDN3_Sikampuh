<!-- ================= CAROUSEL (FINAL) ================= -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3500">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php $no=0; foreach($banners as $banner): ?>
      <li data-target="#carouselExampleCaptions" data-slide-to="<?= $no ?>" class="<?php if($no == 0) echo 'active'; ?>"></li>
    <?php $no++; endforeach ?>
  </ol>

  <!-- Slides -->
  <div class="carousel-inner">
    <?php $no=0; foreach($banners as $banner): $no++; ?>
      <div class="carousel-item <?php if($no==1) echo 'active'; ?>">
        <div class="carousel-bg" style="background-image: url('<?= base_url("img/banner/$banner->photo") ?>');"></div>
        <div class="carousel-caption text-left d-none d-md-block fade-caption" data-aos="fade-up">
          <h2 class="font-weight-bold"><?= $banner->title ?></h2>
          <p><?= $banner->text ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!-- ================= SAMBUTAN ================= -->
<section class="sambutan mt-5" data-aos="fade-up">
  <div class="container shadow-sm p-4 rounded bg-light">
    <h2>Sambutan Kepala Sekolah</h2>
    <hr style="width:120px; border:2px solid #b30000;">
    <img src="<?= base_url('img/sambutan/' . $sambutan->photo) ?>" alt="Kepala Sekolah"
         style="float:left; max-width:250px; height:auto; margin-right:15px; margin-bottom:10px;
                border-radius:5px; box-shadow:0 4px 6px rgba(0,0,0,0.2);">
    <p style="line-height:1.7; text-align:justify;">
      <?= nl2br($sambutan->content) ?>
    </p>
    <div style="clear:both;"></div>
  </div>
</section>

<!-- ================= BERITA + KALENDER ================= -->
<section id="berita" class="last-news mt-5 mb-5" data-aos="fade-up">
  <div class="container">
    <div class="row">
      <!-- Kolom Berita -->
      <div class="col-lg-8 mb-4">
        <h2 class="mb-3">Berita Terkini</h2>
        <hr style="width:120px; border:2px solid #b30000;">
        <div class="row mt-4 justify-content-center">
          <?php $max_show = 2; $count = 0; ?>
          <?php foreach($berita as $b) : if($count >= $max_show) break; ?>
            <div class="col-md-6 mb-4 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="<?= $count * 200 ?>">
              <div class="card h-100 shadow border rounded-3 berita-card" style="max-width: 320px; width:100%;">
                <img src="<?= base_url('img/berita/thumbs/' . $b->photo) ?>"
                     class="card-img-top rounded-top-3" style="height:180px; object-fit:cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title"><?= $b->title ?></h5>
                  <p class="card-text text-muted"><?= character_limiter($b->content, 60) ?></p>
                  <a href="<?= base_url("blog/baca/$b->seo_title") ?>" class="btn btn-custom btn-sm mt-auto">
                    Lanjut Membaca <i class="fa fa-arrow-right ml-1"></i>
                  </a>
                </div>
              </div>
            </div>
            <?php $count++; endforeach ?>
        </div>

        <div class="row mt-4">
          <div class="col text-center">
            <a href="<?= base_url('blog') ?>" class="btn btn-custom shadow-sm px-4">
              Lihat Semua Berita <i class="fa fa-angle-double-right ml-2"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Kolom Kalender -->
      <div class="col-lg-4" data-aos="fade-left">
        <h2 class="mb-3">Kalender</h2>
        <hr style="width:120px; border:2px solid #b30000;">
        <div class="card shadow border rounded-3">
          <div class="card-body p-2">
            <iframe src="https://calendar.google.com/calendar/embed?src=id.indonesian%23holiday%40group.v.calendar.google.com&ctz=Asia%2FJakarta"
                    style="border:0" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= GALERI VIDEO ================= -->
<section id="galeri-video" class="mt-5 mb-5" data-aos="fade-up">
  <div class="container">
    <h2 class="mb-3 text-center">Galeri Video</h2>
    <hr style="width:120px; border:2px solid #b30000;">
    <?php if (!empty($videos)): ?>
      <div class="row">
        <?php foreach ($videos as $v): ?>
          <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="card video-card border shadow h-100 rounded-3 overflow-hidden">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item rounded-top-3"
                        src="https://www.youtube.com/embed/<?= getYoutubeId($v->link) ?>" allowfullscreen></iframe>
              </div>
              <div class="card-body text-center">
                <h5 class="card-title"><?= $v->judul ?></h5>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div class="alert alert-info text-center">Belum ada video.</div>
    <?php endif; ?>
  </div>
</section>

<!-- ================= STYLE ================= -->
<style>
/* === Carousel === */
.carousel,
.carousel-inner,
.carousel-item {
  height: 92vh;
  max-height: 100vh;
}
@media (max-width: 768px) {
  .carousel,
  .carousel-inner,
  .carousel-item { height: 75vh; }
}
.carousel-inner { position: relative; overflow: hidden; }
.carousel-item {
  position: absolute; top: 0; left: 0; width: 100%;
  opacity: 0; visibility: hidden;
  transition: opacity 1.1s ease-in-out, visibility 0s linear 1.1s;
}
.carousel-item.active {
  position: relative; opacity: 1; visibility: visible; transition-delay: 0s, 0s;
}
.carousel-bg {
  width: 100%; height: 100%;
  background-size: cover; background-position: center;
  filter: brightness(85%);
  transform: scale(1.05);
  transition: transform 6s ease;
}
.carousel-item.active .carousel-bg { transform: scale(1); }
.carousel-caption {
  position: absolute; top: 50%; left: 8%;
  transform: translateY(-50%); text-align: left;
  width: 55%; z-index: 10;
}
@media (max-width: 768px) {
  .carousel-caption { width: 80%; left: 10%; text-align: center; }
}
.carousel-caption h2, .carousel-caption p {
  opacity: 0; transform: translateY(20px);
  transition: all 0.8s ease-in-out;
}
.carousel-item.active .carousel-caption h2,
.carousel-item.active .carousel-caption p {
  opacity: 1; transform: translateY(0);
}
.carousel-control-prev-icon, .carousel-control-next-icon {
  filter: drop-shadow(0 0 6px rgba(0,0,0,0.8));
}
.carousel-indicators li {
  background-color: rgba(255,255,255,0.6);
}
.carousel-indicators .active { background-color: #fff; }

/* === Efek Card Hover === */
.berita-card, .video-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.berita-card:hover, .video-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

/* === Tombol Custom === */
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
</style>

<!-- ================= SCRIPT ================= -->
<script>
AOS.init({ duration: 1000, once: true });

const $carousel = $('#carouselExampleCaptions');
const interval = 1500;
let autoSlide = setInterval(nextSlide, interval);

function nextSlide() {
  const $current = $carousel.find('.carousel-item.active');
  let $next = $current.next('.carousel-item');
  if (!$next.length) $next = $carousel.find('.carousel-item').first();
  $next.css('opacity', 0).addClass('active').animate({ opacity: 1 }, 1000, function() {
    $current.removeClass('active').css('opacity', '');
  });
}

function prevSlide() {
  const $current = $carousel.find('.carousel-item.active');
  let $prev = $current.prev('.carousel-item');
  if (!$prev.length) $prev = $carousel.find('.carousel-item').last();
  $prev.css('opacity', 0).addClass('active').animate({ opacity: 1 }, 1000, function() {
    $current.removeClass('active').css('opacity', '');
  });
}

$carousel.find('.carousel-control-prev').click(function() {
  clearInterval(autoSlide);
  prevSlide();
  autoSlide = setInterval(nextSlide, interval);
});

$carousel.find('.carousel-control-next').click(function() {
  clearInterval(autoSlide);
  nextSlide();
  autoSlide = setInterval(nextSlide, interval);
});

$carousel.hover(
  function() { clearInterval(autoSlide); },
  function() { autoSlide = setInterval(nextSlide, interval); }
);
</script>
