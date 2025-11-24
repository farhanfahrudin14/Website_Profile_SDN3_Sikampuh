<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0"><?= $title ?></h4>
        </div>
        <div class="card-body">
            <form action="<?= base_url('c_siswa/store') ?>" method="post">
                <div class="mb-3">
                    <label for="tahun_ajaran" class="form-label">Tahun Ajaran:</label>
                    <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control" required>
                </div>
<div class="mb-3">
    <label for="nama_kelas" class="form-label">Nama Kelas:</label>
    <input type="text" name="nama_kelas" id="nama_kelas" 
           class="form-control" required>
    <small class="form-text text-muted">
        Contoh: Kelas 1, Kelas 2, Kelas 3, dst.
    </small>
</div>

                <div class="mb-3">
                    <label for="jumlah_siswa" class="form-label">Jumlah Siswa:</label>
                    <input type="number" name="jumlah_siswa" id="jumlah_siswa" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="wali_kelas" class="form-label">Wali Kelas:</label>
                    <input type="text" name="wali_kelas" id="wali_kelas" class="form-control" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="<?= site_url('c_siswa') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
