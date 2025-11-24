<!-- Bagian Teks Berjalan Atas -->
<div class="bg-dark text-white py-1">
  <marquee behavior="scroll" direction="left" scrollamount="5">
    Selamat Datang di Website Resmi SD Negeri Sikampuh 03 Kroya | Mencetak Generasi Cerdas, Berkarakter, dan Berprestasi
  </marquee>
</div>

<!-- Bagian Identitas Sekolah + Jam -->
<div class="bg-white border-bottom py-2">
  <div class="container d-flex justify-content-between align-items-center flex-wrap">
    <!-- Logo dan Identitas -->
    <div class="d-flex align-items-center">
      <img src="<?= base_url('img/identitas/UMP.png') ?>" 
           alt="Logo Sekolah" style="height:70px; margin-right:15px;">
      <div>
        <h3 class="mb-0 font-weight-bold text-uppercase" style="color:#b30000;">
          SD NEGERI SIKAMPUH 03 KROYA
        </h3>
        <small class="text-dark">
          Jl. Hiu No. 47 Sikampuh Kecamatan Kroya Kabupaten Cilacap, Provinsi Jawa Tengah, (53282).
        </small>
      </div>
    </div>

    <!-- Waktu dan Tanggal -->
    <div class="text-right mt-3 mt-md-0">
      <h4 id="jam" class="font-weight-bold mb-1"></h4>
      <span id="tanggal" class="small font-weight-semibold"></span>
    </div>
  </div>
</div>

<!-- Navbar Menu -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#b30000;">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav font-weight-bold">
        <li class="nav-item <?php if($title == 'Beranda') echo 'active'; ?>">
          <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
        </li>

        <!-- Dropdown Profil -->
        <li class="nav-item dropdown <?php if(in_array($title, ['Sejarah','Visi & Misi','Struktur','Fasilitas','Data Guru'])) echo 'active'; ?>">
          <a class="nav-link dropdown-toggle" href="#" id="profilDropdown" role="button"
             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Profil
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= base_url('profil/sejarah') ?>">Sejarah</a>
            <a class="dropdown-item" href="<?= base_url('profil/visimisi') ?>">Visi & Misi</a>
            <a class="dropdown-item" href="<?= base_url('profil/struktur') ?>">Struktur Organisasi</a>
            <a class="dropdown-item" href="<?= base_url('profil/fasilitas') ?>">Fasilitas</a>
            <a class="dropdown-item" href="<?= base_url('profil/guru') ?>">Guru</a>
          </div>
        </li>

        <!-- Dropdown Akademik -->
        <li class="nav-item dropdown <?php if(in_array($title, ['Materi Pelajaran','Ekstrakurikuler','Prestasi','Data Siswa'])) echo 'active'; ?>">
          <a class="nav-link dropdown-toggle" href="#" id="akademikDropdown" role="button"
             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Akademik
          </a>
          <div class="dropdown-menu">
      
            <a class="dropdown-item" href="<?= site_url('akademik/ekskul') ?>">Ekstrakurikuler</a>
            <a class="dropdown-item" href="<?= site_url('akademik/prestasi') ?>">Prestasi</a>
            <a class="dropdown-item" href="<?= site_url('akademik/siswa') ?>">Data Siswa</a>
          </div>
        </li>

        <li class="nav-item <?php if($title == 'Berita') echo 'active'; ?>">
          <a class="nav-link" href="<?= base_url('blog') ?>">Berita</a>
        </li>

        <li class="nav-item <?php if($title == 'PPDB') echo 'active'; ?>">
          <a class="nav-link" href="<?= base_url('ppdb') ?>">PPDB</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= site_url('kontak') ?>">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- ================= STYLE ================= -->
<style>
  /* Navbar */
  .navbar-nav .nav-link {
    color: #fff !important;
    padding: 10px 18px;
    text-transform: uppercase;
  }
  .navbar-nav .nav-item.active .nav-link,
  .navbar-nav .nav-link:hover {
    background-color: #b30000;
    border-radius: 2px;
  }
  .navbar-nav .dropdown-menu {
    border-radius: 0;
    margin-top: 0;
  }
  marquee {
    font-weight: bold;
    letter-spacing: 1px;
  }

  /* === Waktu dan tanggal === */
  #jam {
    font-size: 1.8rem;
    letter-spacing: 3px;
    color: #b30000;
    text-shadow: 0 0 6px rgba(0, 51, 102, 0.3);
  }

  #tanggal {
    font-size: 1rem;
    color: #b30000;
    letter-spacing: 1px;
  }

  /* === WARNA DROPDOWN MENU BIAR MERAH === */
  .navbar .dropdown-menu {
      background-color: #b30000 !important;
      border: none !important;
      box-shadow: none !important;
  }

  .navbar .dropdown-menu .dropdown-item {
      color: #fff !important;
  }

  .navbar .dropdown-menu .dropdown-item:hover,
  .navbar .dropdown-menu .dropdown-item:focus {
      background-color: #990000 !important;
      color: #fff !important;
  }
</style>

<!-- ================= SCRIPT ================= -->
<script>
  function updateWaktu() {
    const now = new Date();
    const jam = String(now.getHours()).padStart(2, '0');
    const menit = String(now.getMinutes()).padStart(2, '0');
    const detik = String(now.getSeconds()).padStart(2, '0');
    document.getElementById("jam").textContent = `${jam} : ${menit} : ${detik}`;

    const hariList = ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"];
    const bulanList = ["Januari","Februari","Maret","April","Mei","Juni",
                       "Juli","Agustus","September","Oktober","November","Desember"];
    const hari = hariList[now.getDay()];
    const tanggal = now.getDate();
    const bulan = bulanList[now.getMonth()];
    const tahun = now.getFullYear();
    document.getElementById("tanggal").textContent = `${hari}, ${tanggal} ${bulan} ${tahun}`;
  }

  setInterval(updateWaktu, 1000);
  updateWaktu();
</script>
