<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Tambah Jenis Pengukuran</h1>
    </div>

    <div class="section-body">
        <div class="card text-bg-light mb-3" style="width: 100%">
            <div class="card-body">
                <h5 class="card-title">Tambah Jenis Pengukuran</h5>
                <form class="row g-1" action="<?= site_url('tambah-dokumen-penetapan') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>

                    <div class="container-md col-12">
                        <label class="form-label">Nama</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-pen"></i></span>
                            <input placeholder="Nama" type="text" class="form-control datepicker" name="nama">
                        </div>
                    </div>

                    <div class="button-baru d-flex justify-content-end pe-3 gap-3">
                        <button type="submit" class="btn btn-primary" style="width: 10%;">BARU</button>
                        <a href="<?= site_url('jenis-pengukuran') ?>" class="btn btn-primary" style="width: 10%;">TUTUP</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>