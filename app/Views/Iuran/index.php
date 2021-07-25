<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url('home')?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Iuran</li>
    </ol>
</nav>

<h3>Data Iuran Warga</h3>
<div class="card">
    <div class="card-body">
        <a href="<?= base_url('iuran/create'); ?>"><button type="button" class="btn btn-sm btn-success" style="margin-bottom:1%; ">+ Tambah</button></a>
        <table class="table table-sm table-bordered table-hover" style=" text-align: center;">
            <thead class="table table-hover">
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jumlah</th>
                <th>Keterangan</th>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                $kas = 0;
                foreach($iuran as $data): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['tanggal']; ?></td>
                    <td><?= $data['bulan']; ?></td>
                    <td><?= $data['tahun']; ?></td>
                    <td>Rp. <?=number_format($data['jumlah'], 0,',','.'); ?></td>
                    <td><?= $data['keterangan']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
