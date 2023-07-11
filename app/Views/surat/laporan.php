<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Laporan</h1>
    </div>
    <div class="section-body">
        <div class="card text-bg-light mb-3" style="width: 100%">
            <div class="card-body">
                <h5 class="card-title">Laporan</h5>
                <form class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label">Format</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-file-export"></i></span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected value="pdf">pdf</option>
                                <option value="xlsx">xls</option>
                                <option value="xlsx">xlsx</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <label class="form-label">Laporan</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-book"></i></span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected value="kas">Laporan Realisasi Penerimaan Kas</option>
                                <option value="xlsx">(BPn - 1) Buku Kas Umum Penerimaan</option>
                                <option value="xlsx">(BPn - 2) Rekapitulasi Penerimaan Harian</option>
                                <option value="xlsx">(BPn - 3) Laporan Realisasi Pendapatan</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card text-bg-light mb-3" style="width: 100%;">
            <div class="card-body">
                <h6 class="card-title">Parameter</h6>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Bulan</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-calendar-days"></i></span>
                            <input placeholder="Pilih Bulan" type="date" class="form-control datepicker" name="tgl_awal">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tgl. Cetak</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-calendar-days"></i></span>
                            <input placeholder="Pilih Bulan" type="date" class="form-control datepicker" name="tgl_awal">
                        </div>
                    </div>
                    <div class="button-baru text-end pe-3">
                        <a href="<?= site_url('tambah-penerimaan-lain') ?>" class="btn btn-primary" style="width: 15%;">UNDUH LAPORAN</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>