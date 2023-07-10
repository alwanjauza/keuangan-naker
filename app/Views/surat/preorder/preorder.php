<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Preorder</h1>
    </div>
    <div class="section-body">
        <div class="card text-bg-light mb-3" style="width: 100%;">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="head-card d-flex justify-content-between gap-3 align-items-center">
                        <h6 class="card-title">Daftar Preorder</h6>
                    </div>
                    <div class="input-group mb-3" style="width: 40%;">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cari">
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">Contact Person</th>
                            <th scope="col">Tanggal Preorder</th>
                            <th scope="col">Update Terakhir</th>
                            <th scope="col">Status</th>
                            <th scope="col">Manage</th>
                            <th scope="col">Permohonan</th>
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