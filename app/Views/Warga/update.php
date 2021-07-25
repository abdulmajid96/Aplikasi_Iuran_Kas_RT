<?=$this->include('templates/header');?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url('home')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('warga')?>">Warga</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update Data Warga</li>
    </ol>
</nav>

<h3>Update Data Warga</h3>

<div class="card">
    <div class="card-body">
        <form action="<?= base_url('warga/create',$warga->id); ?>" method="POST">
            <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                      <input type="hidden" class="form-control" placeholder="id" name="id" value="<?= set_value('id', $warga->id) ?>"disabled required>
                  </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="NIK" name="nik" value="<?= set_value('nik', $warga->nik) ?>"required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= set_value('nama', $warga->nama) ?>" required>
                    </div>
                    <div class="card" style="margin-bottom: 1em;">
                        <div class="card-header">
                            Jenis Kelamin
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" value="L" name="kelamin" <?= set_value('kelamin', $warga->kelamin) == "L" ? "checked" : "" ?> class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Laki - Laki</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" value="P" name="kelamin" <?= set_value('kelamin', $warga->kelamin) == "P" ? "checked" : "" ?> class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"><?= set_value('alamat', $warga->alamat) ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="No. Rumah" name="no_rumah" value="<?= set_value('no_rumah', $warga->no_rumah) ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Status" name="status"  value="<?= set_value('status', $warga->status) ?>" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="<?= base_url('warga/index'); ?>"><button type="button" class="btn btn-danger">Back</button></a>
            </div>
        </form>
    </div>
</div>

<?=$this->include('templates/footer');?>
