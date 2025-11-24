<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><?= $title ?></h4>
        </div>
        <div class="card-body">
            <a href="<?= site_url('c_videos/create') ?>" class="btn btn-success mb-3">+ Tambah Video</a>

            <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
            <?php elseif($this->session->flashdata('error')): ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th width="50">No</th>
                            <th>Judul</th>
                            <th>Link</th>
                            <th>Thumbnail</th>
                            <th width="150">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($videos as $v): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $v->judul ?></td>
                            <td>
                                <?php if(!empty($v->link)): ?>
                                    <a href="<?= $v->link ?>" target="_blank"><?= $v->link ?></a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (!empty($v->thumbnail) && file_exists('./uploads/videos/'.$v->thumbnail)): ?>
                                    <img src="<?= base_url('uploads/videos/'.$v->thumbnail) ?>" width="100" class="img-thumbnail">
                                <?php else: ?>
                                    <span class="text-danger">Thumbnail tidak tersedia</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= site_url('c_videos/edit/'.$v->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= site_url('c_videos/delete/'.$v->id) ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
