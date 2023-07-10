<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Edit Preorder</h1>
    </div>

    <div class="section-body">
        <div class="card text-bg-light mb-3" style="width: 100%">
            <div class="card-body">
                <h5 class="card-title">Edit Preorder</h5>
                <form class="row g-1" action="<?= site_url('tambah-dokumen-penetapan') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Nama Perusahaan</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-building"></i></span>
                            <input placeholder="Nama Perusahaan" disabled name="perusahaan" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Status</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-truck-fast"></i></span>
                            <select class="form-select" aria-label="Default select example">
                                <option value="Menunggu Konfirmasi" selected>Menunggu Konfirmasi</option>
                                <option value="Menunggu Pembayaran">Menunggu Pembayaran</option>
                                <option value="Lunas">Lunas</option>
                                <option value="Ditolak">Ditolak</option>
                            </select>
                        </div>
                    </div>

                    <div class="container-md col-12">
                        <label class="form-label">Alamat</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-house"></i></span>
                            <input placeholder="Alamat" disabled type="text" class="form-control datepicker" name="keterangan">
                        </div>
                    </div>

                    <div class="button-baru d-flex justify-content-end pe-3 gap-3">
                        <button type="submit" class="btn btn-primary" style="width: 10%;">UPDATE</button>
                        <a href="<?= site_url('preorder') ?>" class="btn btn-primary" style="width: 10%;">TUTUP</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="card text-bg-light mb-3" style="width: 100%;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="head-card d-flex justify-content-between gap-3 align-items-center">
                        <h6 class="card-title">Item Preorder</h6>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Parameter</th>
                            <th scope="col">Jumlah Lokasi</th>
                            <th scope="col">Total Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>