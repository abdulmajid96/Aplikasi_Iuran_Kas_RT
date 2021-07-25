<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url('home')?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Warga</li>
    </ol>
</nav>

<h3>Data Warga</h3>
<div class="card">
    <div class="card-body">
        <a href="<?= base_url('warga/create'); ?>"><button type="button" class="btn btn-sm btn-success" style="margin-bottom:1%; ">+ Tambah</button></a>
        <table class="table table-sm table-bordered table-hover" style=" text-align: center;">
            <thead class="table table-hover">
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nomor Rumah</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach($warga as $key => $data) { ?>
                <tr>
                    <td><?= $key+1; ?></td>
                    <td><?= $data->nik; ?></td>
                    <td><?= $data->nama; ?></td>
                    <td><?= $data->kelamin; ?></td>
                    <td><?= $data->alamat; ?></td>
                    <td><?= $data->no_rumah; ?></td>
                    <td>
                        <a href="<?= base_url('warga/update/'.$data->id); ?>"><button type="button" class="btn btn-primary btn-sm" title="Edit"><span class="fa fa-pencil"></span></button></a>
                        <a href="<?= base_url('warga/delete/'.$data->id); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus <?= $data->nama; ?> dari daftar warga?')"><button type="button" class="btn btn-danger btn-sm" title="Delete"><span class="fa fa-trash"></span></button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
