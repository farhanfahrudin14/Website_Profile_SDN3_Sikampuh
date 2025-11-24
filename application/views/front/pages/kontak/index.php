<!-- Kontak Kami -->
<div class="container mt-5 mb-5">

    <!-- NOTIFIKASI FLASHDATA -->
    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success shadow-sm custom-alert" role="alert">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <!-- END NOTIFIKASI -->

    <!-- Judul -->
    <div class="row pt-5 pb-3" data-aos="fade-down">
        <div class="col text-center">
            <h2 class="fw-bold text-dark" style="font-family: 'Poppins', sans-serif;">Kontak Kami</h2>
            <p class="text-muted" style="font-family: 'Nunito', sans-serif;">
                Hubungi kami untuk informasi lebih lanjut mengenai SD Negeri 03 Sikampuh
            </p>
            <hr class="judul-garis">
        </div>
    </div>

    <?php if (!empty($kontak)): ?>
        <div class="row g-4">

            <!-- Info Kontak + Form -->
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                <div class="card card-custom shadow-lg h-100">
                    <div class="card-body p-4">

                        <h5 class="section-title">📍 Alamat</h5>
                        <p class="text-muted"><?= $kontak->alamat ?></p>

                        <h5 class="section-title mt-4">📞 Telepon</h5>
                        <p class="text-muted"><?= $kontak->telepon ?></p>

                        <h5 class="section-title mt-4">📧 Email</h5>
                        <p class="text-muted"><?= $kontak->email ?></p>

                        <h5 class="section-title mt-4 mb-3">✉️ Kirim Saran</h5>

                        <form action="<?= base_url('kontak/kirim_saran') ?>" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control form-control-custom" placeholder="Masukkan nama Anda" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Anda</label>
                                <input type="email" name="email_pengirim" class="form-control form-control-custom" placeholder="contoh@gmail.com" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pesan / Saran</label>
                                <textarea name="pesan" class="form-control form-control-custom" rows="4" placeholder="Tulis saran Anda di sini..." required></textarea>
                            </div>

                            <button type="submit" class="btn btn-submit w-100">
                                Kirim Saran
                            </button>

                        </form>

                    </div>
                </div>
            </div>

            <!-- Peta Lokasi -->
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                <div class="card card-custom shadow-lg">
                    <div class="card-body p-4">
                        <h5 class="section-title mb-3">🗺️ Lokasi Kami</h5>

                        <?php if (!empty($kontak->maps)): ?>
                            <div class="map-container">
                                <iframe 
                                    src="<?= $kontak->maps ?>" 
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        <?php else: ?>
                            <p class="text-muted">Lokasi belum tersedia.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    <?php else: ?>
        <div class="alert alert-warning text-center mt-4">Data kontak belum diisi.</div>
    <?php endif; ?>
</div>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&family=Nunito:wght@400;600&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({ duration: 900, once: true });
</script>

<style>
/* ALERT CUSTOM tanpa icon dan tanpa tombol close */
.custom-alert {
    border-left: 4px solid #b30000;
    font-weight: 600;
    padding: 12px 15px;
    border-radius: 8px;
}

/* Garis judul */
.judul-garis {
    width: 80px;
    margin: 10px auto 0;
    border: 2px solid #b30000;
    opacity: 0.9;
}

/* Card Custom */
.card-custom {
    border: 0;
    border-radius: 20px !important;
    transition: all 0.3s ease;
}
.card-custom:hover {
    transform: translateY(-6px);
}

/* Judul Section */
.section-title {
    font-weight: 700;
    font-family: 'Poppins', sans-serif;
    color: #b30000;
}

/* Form Control */
.form-control-custom {
    border-radius: 10px;
    padding: 10px 12px;
    border: 1.5px solid #ddd;
    transition: 0.3s ease;
}
.form-control-custom:focus {
    border-color: #b30000;
    box-shadow: 0 0 5px rgba(179, 0, 0, 0.3);
}

/* Tombol Submit */
.btn-submit {
    background: #b30000;
    color: white;
    padding: 10px;
    border-radius: 12px;
    font-weight: 600;
    transition: 0.3s ease;
}
.btn-submit:hover {
    background: #8c0000;
}

/* MAP — diperkecil */
/* MAP — dibuat sedikit lebih besar */
.map-container {
    width: 100%;
    height: 400px; /* dari 250px jadi 300px */
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}
.map-container iframe {
    width: 100%;
    height: 100%;
    border: 0;
}

</style>
