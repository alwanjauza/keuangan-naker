<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Dokumen Penetapan</h1>
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
                            <!-- <input placeholder="Pilih Bulan" type="date" class="form-control datepicker" name="tgl_awal"> -->
                            <input type="text" class="form-control" name="bulan" id="datepicker" />
                        </div>
                    </div>
                    <div class="button-baru text-end pe-3">
                        <a href="<?= site_url('tambah-dokumen-penetapan') ?>" class="btn btn-primary" style="width: 10%;">BARU</a>
                    </div>
                </form>
            </div>
        </div>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success!!</b>
                    <?= session()->getFlashdata('success') ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Error !</b>
                    <?= session()->getFlashdata('error') ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="card text-bg-light mb-3" style="width: 100%;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-title">Data Dokumen Penetapan</h6>
                    <div class="input-group mb-3" style="width: 40%;">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cari">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">No. Bukti</th>
                                <th scope="col">Tgl. Bukti</th>
                                <th scope="col">Masa</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Untuk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Jumlah di BP/RKUD</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                            <?php foreach ($dokumen_penetapan as $key => $value) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $value->no_bukti ?></td>
                                    <td><?= $value->tgl_bukti ?></td>
                                    <td><?= $value->masa ?></td>
                                    <td><?= $value->nama ?></td>
                                    <td><?= $value->untuk ?></td>
                                    <td><?= $value->jumlah ?></td>
                                    <td><?= $value->jumlah_bpkud ?></td>
                                    <td class="text-center" style="width: 15%;">
                                        <a href="<?= site_url('dokumen-penetapan/edit/' . $value->id_penetapan) ?>" class="btn btn-outline-primary btn-sm disabled"><i class="fa-solid fa-eye"></i></a>
                                        <a href="<?= site_url('dokumen-penetapan/edit/' . $value->id_penetapan) ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil alt"></i></a>
                                        <form class="d-inline" onsubmit="return confirm('Yakin hapus data?')" action="<?= site_url('dokumen-penetapan/' . $value->id_penetapan) ?>" method="post">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-outline-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>