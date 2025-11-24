<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0"><?= $title ?></h4>
        </div>
        <div class="card-body">
            <a href="<?= site_url('c_siswa/create') ?>" class="btn btn-success mb-3">
                + Tambah
            </a>

            <?php if($this->session->flashdata('success')): ?>
                <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
            <?php elseif($this->session->flashdata('error')): ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Tahun Ajaran</th>
                            <th>Nama Kelas</th>
                            <th>Jumlah Siswa</th>
                            <th>Wali Kelas</th>
                            <th style="width:150px;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($siswa as $s): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $s->tahun_ajaran ?></td>
                            <td><?= $s->nama_kelas ?></td>
                            <td><?= $s->jumlah_siswa ?></td>
                            <td><?= $s->wali_kelas ?></td>
                            <td>
                                <a href="<?= site_url('c_siswa/edit/'.$s->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="<?= site_url('c_siswa/delete/'.$s->id) ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
