<div class="container-fluid py-5" style="padding-bottom: 100px;">
<?php
  date_default_timezone_set('Asia/Jakarta');
  $jam = date('H');
  if ($jam >= 5 && $jam < 12) $ucapan = "Selamat Pagi";
  elseif ($jam >= 12 && $jam < 15) $ucapan = "Selamat Siang";
  elseif ($jam >= 15 && $jam < 18) $ucapan = "Selamat Sore";
  else $ucapan = "Selamat Malam";

  $nama_admin = $this->session->userdata('nama') ?? 'Admin';
?>

<!-- Header -->
<div class="d-flex justify-content-between align-items-center mb-5 mt-3">
  <div>
    <h2 class="fw-bold text-dark mb-1"><?= $ucapan ?>, <?= $nama_admin ?> SDN 03 Sikampuh Kroya👋</h2>
    <p class="text-muted mb-0 fs-6">Semoga harimu menyenangkan</p>
  </div>
  <button class="btn btn-outline-primary btn-sm px-4 py-2 shadow-sm rounded-pill">
    <i class="fas fa-sync-alt me-2"></i>Refresh
  </button>
</div>

<!-- Statistik -->
<div class="row gy-5 gx-4 mt-2 mb-5"> <!-- gy-5 biar antar baris ada space -->
  <?php
  $stats = [
    ['label' => 'Banner', 'value' => $total_banner, 'icon' => 'fas fa-desktop', 'gradient' => 'linear-gradient(135deg, #4e73df, #224abe)'],
    ['label' => 'Fasilitas', 'value' => $total_fasilitas, 'icon' => 'fas fa-place-of-worship', 'gradient' => 'linear-gradient(135deg, #1cc88a, #13855c)'],
    ['label' => 'Berita', 'value' => $total_berita, 'icon' => 'fas fa-newspaper', 'gradient' => 'linear-gradient(135deg, #f6c23e, #dda20a)'],
    ['label' => 'Videos', 'value' => $total_videos, 'icon' => 'fas fa-video', 'gradient' => 'linear-gradient(135deg, #36b9cc, #117a8b)'],
    ['label' => 'Ekskul', 'value' => $total_ekskul, 'icon' => 'fas fa-users', 'gradient' => 'linear-gradient(135deg, #4e73df, #3751c1)'],
    ['label' => 'Prestasi', 'value' => $total_prestasi, 'icon' => 'fas fa-trophy', 'gradient' => 'linear-gradient(135deg, #1cc88a, #0d6834)'],
    ['label' => 'Guru', 'value' => $total_guru, 'icon' => 'fas fa-chalkboard-teacher', 'gradient' => 'linear-gradient(135deg, #4e73df, #224abe)'],
  ];

  foreach ($stats as $s): ?>
    <div class="col-xl-3 col-lg-4 col-md-6">
      <div class="card border-0 rounded-4 shadow-lg overflow-hidden stat-card position-relative">
        <div class="card-body d-flex justify-content-between align-items-center p-4">
          <div>
            <p class="text-muted small text-uppercase fw-semibold mb-1"><?= $s['label'] ?></p>
            <h3 class="fw-bold mb-0 text-dark"><?= $s['value'] ?></h3>
          </div>
          <div class="icon-box shadow-sm" style="background: <?= $s['gradient'] ?>;">
            <i class="<?= $s['icon'] ?> fa-2x text-white"></i>
          </div>
        </div>
        <div class="stat-highlight"></div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
</div>

<!-- Style -->
<style>
  .stat-card {
    transition: transform .3s ease, box-shadow .3s ease;
    background: #fff;
    border-radius: 16px;
    height: 130px; /* semua card tinggi seragam */
  }
  .stat-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0,0,0,.15);
  }
  .icon-box {
    width: 70px;
    height: 70px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .stat-highlight {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 4px;
    width: 100%;
    background: linear-gradient(90deg, rgba(78,115,223,0.7), rgba(28,200,138,0.7));
    border-radius: 0 0 16px 16px;
  }
  h3 {
    font-size: 2rem;
  }
</style>
