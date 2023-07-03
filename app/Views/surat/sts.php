<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>STS</h1>
    </div>
    <div class="section-body">
        <div class="card text-bg-light mb-3" style="width: 100%">
            <div class="card-body">
                <h5 class="card-title">Dokumen Penetapan</h5>
                <form class="row g-3">
                    <div class="col-md-9">
                        <label class="form-label">BPn / BPnP</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-user"></i></span>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Bulan</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-calendar-days"></i></span>
                            <input placeholder="Pilih Bulan" type="text" class="form-control datepicker" name="tgl_awal">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card text-bg-light mb-3" style="width: 100%;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-title">Data STS</h6>
                    <div class="input-group mb-3" style="width: 40%;">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cari">
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">No. Bukti</th>
                            <th scope="col">Tgl. Bukti</th>
                            <th scope="col">Untuk</th>
                            <th scope="col">Jumlah</th>
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