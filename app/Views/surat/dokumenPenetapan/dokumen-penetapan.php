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
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Aktif</label>
                    </div>
                    <div class="input-group mb-3" style="width: 40%;">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" id="searchInput" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Cari">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-md" id="dataTable">
                        <thead>
                            <tr class="text-center align-items-center" id="tableHeader">
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
                        </thead>
                        <tbody>
                            <?php
                            $sumJml = 0;
                            foreach ($dokumen_penetapan as $key => $value) :
                                $sumJml += $value['jml'] ?>
                                <tr>
                                    <td><?= $value['id'] ?></td>
                                    <td><?= $value['no_bukti'] ?></td>
                                    <td><?= date('d/m/Y', strtotime($value['tgl_bukti'])) ?></td>
                                    <td><?= date('d/m/Y', strtotime($value['tgl_masa_awal'])) . " ~ " . date('d/m/Y', strtotime($value['tgl_masa_akhir'])) ?></td>
                                    <td><?= $value['nama'] ?></td>
                                    <td><?= $value['untuk'] ?></td>
                                    <td><?= number_format($value['jml'], 0, ',', '.') ?></td>
                                    <td><?= number_format($value['jml_terima'], 0, ',', '.') ?></td>
                                    <td class="text-center" style="width: 15%;">
                                        <a href="<?= site_url('dokumen-penetapan/edit/' . $value['id']) ?>" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-eye"></i></a>
                                        <a href="<?= site_url('dokumen-penetapan/edit/' . $value['id']) ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil alt"></i></a>
                                        <a href="<?= site_url('dokumen-penetapan/edit/' . $value['id']) ?>" class="btn btn-outline-success btn-sm"><i class="fa-solid fa-file"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="6" class="text-center"><strong>TOTAL</strong></td>
                                <td colspan="3"><strong><?= 'Rp. ' . number_format($sumJml, 0, ',', '.') ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // JavaScript for filtering the table based on the search term
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const dataTable = document.getElementById('dataTable');
        const tableHeader = document.getElementById('tableHeader');
        const rows = dataTable.getElementsByTagName('tr');

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.toLowerCase();
            for (let i = 0; i < rows.length; i++) {
                const dataCells = rows[i].getElementsByTagName('td');
                let foundMatch = false;
                for (let j = 0; j < dataCells.length; j++) {
                    const cellValue = dataCells[j].innerText.toLowerCase();
                    if (cellValue.includes(searchTerm)) {
                        foundMatch = true;
                        break;
                    }
                }
                if (foundMatch) {
                    rows[i].style.display = '';
                } else {
                    rows[i].style.display = 'none';
                }
            }

            // Always display the table header
            tableHeader.style.display = '';
        });
    });
</script>


<?= $this->endSection() ?>