<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white">
            <h4 class="mb-0"><?= $title ?></h4>
        </div>
        <div class="card-body">
            <p class="mb-3">Apakah Anda yakin ingin menghapus data siswa ini?</p>

            <ul class="list-group mb-3">
                <li class="list-group-item"><strong>Tahun Ajaran:</strong> <?= $siswa->tahun_ajaran ?></li>
                <li class="list-group-item"><strong>Nama Kelas:</strong> <?= $siswa->nama_kelas ?></li>
                <li class="list-group-item"><strong>Jumlah Siswa:</strong> <?= $siswa->jumlah_siswa ?></li>
                <li class="list-group-item"><strong>Wali Kelas:</strong> <?= $siswa->wali_kelas ?></li>
            </ul>

            <form action="<?= site_url('c_siswa/destroy/'.$siswa->id) ?>" method="post" class="d-flex justify-content-between">
                <a href="<?= site_url('c_siswa') ?>" class="btn btn-secondary">❌ Batal</a>
                <button type="submit" class="btn btn-danger">✅ Ya, Hapus</button>
            </form>
        </div>
    </div>
</div>
