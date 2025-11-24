<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0"><?= $title ?></h4>
        </div>
        <div class="card-body">
            <form action="<?= site_url('c_videos/store') ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul:</label>
                    <input type="text" name="judul" id="judul" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link YouTube:</label>
                    <input type="url" name="link" id="link" class="form-control" placeholder="https://www.youtube.com/watch?v=xxxxx" required>
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail:</label>
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control" accept="image/*">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="<?= site_url('c_videos') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
