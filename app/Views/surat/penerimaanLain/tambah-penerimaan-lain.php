<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Tambah Penerimaan Lain</h1>
    </div>
    <div class="section-body">
        <div class="card text-bg-light mb-3" style="width: 100%">
            <div class="card-body">
                <h5 class="card-title">Tambah Penerimaan Lain</h5>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">No. Bukti</label>
                        <div class="input-group d-flex align-items-center mb-3 ps-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <input class="form-control" type="text" placeholder="No. Bukti" aria-label="default input example" style="width: 100%;">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label">UYHD</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-pen"></i></span>
                            <select class="form-select" aria-label="Default select example">
                                <option value="ya">Ya</option>
                                <option selected value="tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Virtual Account</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-building-columns"></i></span>
                            <input placeholder="Virtual Account" type="text" class="form-control datepicker" name="tgl_awal">
                        </div>
                    </div>
                    <div class="container-md">
                        <label class="form-label">Untuk</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-pen"></i></span>
                            <input placeholder="Untuk" type="text" class="form-control datepicker" name="untuk">
                        </div>
                    </div>
                </form>
                <div class="button-baru d-flex justify-content-end gap-3">
                    <a href="#" class="btn btn-primary" style="width: 10%;">BARU</a>
                    <a href="<?= site_url('penerimaan-lain') ?>" class="btn btn-primary" style="width: 10%;">TUTUP</a>
                </div>
                </form>
            </div>
        </div>

        <div class="card text-bg-light mb-3" style="width: 100%;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="card-title">Data Dokumen Penetapan</h6>
                    <a href="#" class="btn btn-primary" style="width: 10%;">TAMBAH</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Keg.</th>
                            <th scope="col">Koderek</th>
                            <th scope="col">Nama Rekening</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">VA</th>
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