<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Tambah Dokumen Penetapan</h1>
    </div>
    <div class="section-body">
        <div class="card text-bg-light mb-3" style="width: 100%">
            <div class="card-body">
                <h5 class="card-title">Tambah Dokumen Penetapan</h5>
                <form class="row g-3">
                    <div class="col-md-3">
                        <label class="form-label">No. Bukti</label>
                        <div class="input-group mb-3">
                            <div class="form-check d-flex align-items-center">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <input class="form-control" type="text" placeholder="No. Bukti" aria-label="default input example" style="width: 250px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Bulan</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-calendar-days"></i></span>
                            <input placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Masa</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-calendar-days"></i></span>
                            <input placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Tgl. Jatuh Tempo</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-calendar-days"></i></span>
                            <input placeholder="masukkan tanggal Awal" type="text" class="form-control datepicker" name="tgl_awal">
                        </div>
                    </div>
                    <form class="container-md row">
                        <div class="col-md-3">
                            <label class="form-label">Pengajuan Permohonan Izin</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-pen"></i></span>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="ya">Ya</option>
                                    <option selected value="tidak">Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Nama</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-pen"></i></span>
                                <input placeholder="Nama" type="text" class="form-control datepicker" name="nama">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Alamat</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-pen"></i></span>
                                <input placeholder="Alamat" type="text" class="form-control datepicker" name="alamat">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">TTD.</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-file-signature"></i></span>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="ya">Dr. HIMAWAN ESTU BAGIJO, S.H., M.H.</option>
                                    <option value="tidak">AGUS GUNAWAN, S.H., M.H.</option>
                                    <option value="tidak">ALEIXO DA SILVA, S.E., M.M.</option>
                                </select>
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
                        <a href="<?= site_url('dokumen-penetapan') ?>" class="btn btn-primary" style="width: 10%;">TUTUP</a>
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