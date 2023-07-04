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
                <form class="row g-1" action="<?= site_url('tambah-dokumen-penetapan') ?>" method="post" autocomplete="off">
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">No. Bukti</label>
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <input class="form-control" name="no_bukti" required type="text" placeholder="No. Bukti" aria-label="default input example" style="width: 250px;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Tgl. Bukti</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-calendar-days"></i></span>
                            <input placeholder="Tanggal Bukti" name="tgl_bukti" type="date" class="form-control datepicker">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Masa</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-calendar-days"></i></span>
                            <input placeholder="Tanggal Masa" name="masa" type="date" class="form-control datepicker">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="inputEmail4" class="form-label">Tgl. Jatuh Tempo</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-calendar-days"></i></span>
                            <input placeholder="Tanggal Jatuh Tempo" name="tgl_jatuh_tempo" type="date" class="form-control datepicker">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Pengajuan Permohonan Izin</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-pen"></i></span>
                            <select class="form-select" name="izin" aria-label="Default select example">
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
                            <select class="form-select" name="ttd" aria-label="Default select example">
                                <option value="Dr. HIMAWAN ESTU BAGIJO, S.H., M.H.">Dr. HIMAWAN ESTU BAGIJO, S.H., M.H.</option>
                                <option value="AGUS GUNAWAN, S.H., M.H.">AGUS GUNAWAN, S.H., M.H.</option>
                                <option value="ALEIXO DA SILVA, S.E., M.M.">ALEIXO DA SILVA, S.E., M.M.</option>
                            </select>
                        </div>
                    </div>

                    <div class="container-md col-12">
                        <label class="form-label">Untuk</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-pen"></i></span>
                            <input placeholder="Untuk" type="text" class="form-control datepicker" name="untuk">
                        </div>
                    </div>

                    <div class="button-baru d-flex justify-content-end pe-3 gap-3">
                        <button type="submit" class="btn btn-primary" style="width: 10%;">BARU</button>
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