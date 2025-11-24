<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0"><?= $title ?></h4>
        </div>
        <div class="card-body">
            <form action="<?= site_url('c_videos/update/'.$video->id) ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul:</label>
                    <input type="text" name="judul" id="judul" value="<?= $video->judul ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link YouTube:</label>
                    <input type="url" name="link" id="link" value="<?= $video->link ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail:</label><br>
                    <?php if (!empty($video->thumbnail) && file_exists('./uploads/videos/'.$video->thumbnail)): ?>
                        <img src="<?= base_url('uploads/videos/'.$video->thumbnail) ?>" width="100" class="img-thumbnail mb-2">
                    <?php endif; ?>
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                    <small class="text-muted">Kosongkan jika tidak ingin ganti thumbnail</small>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="<?= site_url('c_videos') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
