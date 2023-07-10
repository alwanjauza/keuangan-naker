<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Tambah Parameter</h1>
    </div>

    <div class="section-body">
        <div class="card text-bg-light mb-3" style="width: 100%">
            <div class="card-body">
                <h5 class="card-title">Tambah Parameter</h5>
                <form class="row g-1" action="<?= site_url('tambah-dokumen-penetapan') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Jenis Pengukuran</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-weight-scale"></i></span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Harga</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-dollar-sign"></i></span>
                            <input placeholder="Harga" name="harga" type="number" class="form-control">
                        </div>
                    </div>

                    <div class="container-md col-12">
                        <label class="form-label">Keterangan</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-pen"></i></span>
                            <input placeholder="Keterangan" type="text" class="form-control datepicker" name="keterangan">
                        </div>
                    </div>

                    <div class="button-baru d-flex justify-content-end pe-3 gap-3">
                        <button type="submit" class="btn btn-primary" style="width: 10%;">BARU</button>
                        <a href="<?= site_url('parameter') ?>" class="btn btn-primary" style="width: 10%;">TUTUP</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>