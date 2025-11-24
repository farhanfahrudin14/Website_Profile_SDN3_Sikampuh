<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white">
            <h4 class="mb-0"><?= $title ?></h4>
        </div>
        <div class="card-body">
            <p>Apakah Anda yakin ingin menghapus data video ini?</p>
            <ul class="list-group mb-3">
                <li class="list-group-item"><strong>Judul:</strong> <?= $video->judul ?></li>
                <li class="list-group-item"><strong>Link:</strong> <?= $video->link ?></li>
                <?php if (!empty($video->thumbnail) && file_exists('./uploads/videos/'.$video->thumbnail)): ?>
                <li class="list-group-item">
                    <strong>Thumbnail:</strong><br>
                    <img src="<?= base_url('uploads/videos/'.$video->thumbnail) ?>" width="150" class="img-thumbnail mt-2">
                </li>
                <?php endif; ?>
            </ul>
            <form action="<?= site_url('c_videos/destroy/'.$video->id) ?>" method="post" class="d-flex justify-content-between">
                <a href="<?= site_url('c_videos') ?>" class="btn btn-secondary">❌ Batal</a>
                <button type="submit" class="btn btn-danger">✅ Ya, Hapus</button>
            </form>
        </div>
    </div>
</div>
