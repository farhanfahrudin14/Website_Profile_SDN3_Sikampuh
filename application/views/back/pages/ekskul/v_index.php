<style>
    .text-wrap {
        white-space: normal !important;
        word-wrap: break-word !important;
        max-width: 300px; /* Biar rapi */
    }
</style>

<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><?= $title ?></h4>
        </div>
        <div class="card-body">
            <a href="<?= site_url('c_ekskul/create') ?>" class="btn btn-success mb-3">
                + Tambah
            </a>

            <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
            <?php elseif($this->session->flashdata('error')): ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width:50px;">No</th>
                            <th class="text-wrap">Judul</th>
                            <th class="text-wrap">Deskripsi</th>
                            <th>Foto</th>
                            <th style="width:150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($ekskul as $e): ?>
                        <?php 
                            $deskripsi = $e->deskripsi;
                            $shortDesc = substr($deskripsi, 0, 80);
                            $isLong = strlen($deskripsi) > 80;
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>

                            <td class="text-wrap">
                                <?= $e->judul ?>
                            </td>

                            <td class="text-wrap">
                                <span id="shortDesc<?= $e->id ?>">
                                    <?= $shortDesc ?>
                                    <?php if($isLong): ?>
                                        ... <a href="javascript:void(0)" onclick="toggleDesc(<?= $e->id ?>)" class="text-primary">Baca selengkapnya</a>
                                    <?php endif; ?>
                                </span>

                                <?php if($isLong): ?>
                                <span id="fullDesc<?= $e->id ?>" style="display:none;">
                                    <?= nl2br($deskripsi) ?>
                                    <br>
                                    <a href="javascript:void(0)" onclick="toggleDesc(<?= $e->id ?>)" class="text-danger">Tutup</a>
                                </span>
                                <?php endif; ?>
                            </td>

                            <td>
                                <?php if (!empty($e->foto)): ?>
                                    <img src="<?= base_url('uploads/ekskul/'.$e->foto) ?>" width="80" class="img-thumbnail">
                                <?php endif; ?>
                            </td>

                            <td>
                                <a href="<?= site_url('c_ekskul/edit/'.$e->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= site_url('c_ekskul/delete/'.$e->id) ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
function toggleDesc(id) {
    var shortText = document.getElementById("shortDesc" + id);
    var fullText = document.getElementById("fullDesc" + id);

    if (shortText.style.display === "none") {
        shortText.style.display = "inline";
        fullText.style.display = "none";
    } else {
        shortText.style.display = "none";
        fullText.style.display = "inline";
    }
}
</script>
