<!-- PPDB -->
<div>

    <!-- Judul -->
    <div class="row pt-5 pb-3">
      <div class="col text-center">
        <h2 class="font-weight-bold text-dark">Berita SD Negeri 03 Sikampuh</h2>
        <p class="text-muted">Berbagai sarana dan prasarana yang mendukung proses belajar mengajar di SD Negeri 03 Sikampuh</p>
        <hr class="w-25 mx-auto" style="border:2px solid #b30000; opacity:0.8;">
      </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">

            <?php foreach($ppdb as $p) : ?>
                <div class="col-lg-8 col-md-10 col-sm-12 mb-4 d-flex align-items-stretch">
                    <div class="card shadow-lg w-100">
                        
                        <!-- Foto -->
                        <?php if(!empty($p->foto)): ?>
                            <a href="<?= base_url('uploads/ppdb/' . $p->foto) ?>" target="_blank">
                                <img 
                                    src="<?= base_url('uploads/ppdb/' . $p->foto) ?>" 
                                    class="card-img-top img-fluid" 
                                    style="height:400px; object-fit:cover; background:#f8f9fa; border-bottom:1px solid #ddd;">
                            </a>
                        <?php endif; ?>

                        <div class="card-body d-flex flex-column">
                            <!-- Judul -->
                            <h4 class="card-title text-center mb-3"><?= $p->judul ?></h4>

                            <!-- Deskripsi -->
                            <?php if(!empty($p->deskripsi)): ?>
                                <p class="card-text" 
                                   style="flex-grow:1; text-align:justify; white-space:pre-line; line-height:1.4; font-size:14px; margin-bottom:0;">
                                    <?= nl2br($p->deskripsi) ?>
                                </p>
                            <?php endif; ?>

                            <!-- Link -->
                            <?php if(!empty($p->link)): ?>
                                <div class="text-left">
                                    <a href="<?= $p->link ?>" target="_blank" class="btn btn-primary mt-3 px-4">
                                        Klik di sini menuju ke pendaftaran →
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</div>
<!-- End of PPDB -->
