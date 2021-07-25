<?=$this->include('templates/header');?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url('home')?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?=base_url('iuran')?>">Iuran</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Iuran</li>
    </ol>
</nav>

<h3>Tambah Data Iuran</h3>
<div class="card">
    <div class="card-body">
        <form action="<?= base_url('iuran/create'); ?>" method="POST">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group col-6">
                    <label for="nama">Nama Warga</label>
                        <select class="form-control select2" name="warga_id">
                            <option value="">--Pilih Nama--</option>
                             <?php foreach($warga as $row){?>
                                <option value="<?= $row->id;?>"><?= $row->nama;?></option>
                             <?php }?>
                           
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal">
                    </div>
                    <div class="form-group col-6">
                    <label for="bulan">Bulan</label>
                        <select class="form-control" name="bulan">
                        <?php $now = new \DateTime('now');
                            $bln1 = $now->format('m');
                            for($m=1; $m<=12; ++$m){
                                if ($bln1 == $m){
                        echo '<option selected value='.$m.'>'.date('F', mktime(0, 0, 0, $m, 1)).'</option>'."\n";
                                }else{
                        echo '<option  value='.$m.'>'.date('F', mktime(0, 0, 0, $m, 1)).'</option>'."\n";
                                }
                        }
                        ?>
                        </select>
                    </div>
                    <?php $thn = date('Y')?>
                    <div class="form-group col-6">
                    <label for="tahun">Tahun </label>
                            <select class="form-control" name="tahun">
                            <option value="">Pilih Tahun</option>
                               <?php for ($i = 2010; $i <= $thn; $i++) { ?>
                                <option value="<?=$i;?>" <?php if ($thn == $i) { echo 'selected'; }?>>
                                    <?=$i;?>
                                </option>
                                <?php }?>
                            </select>
                    </div>
                    <?php $iuran_wajib = 200000;?>
                    <div class="form-group col-6">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" value="<?= $iuran_wajib;?>" name="jumlah" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" placeholder="Keterangan" name="keterangan" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a href="<?= base_url('iuran/index'); ?>"><button type="button" class="btn btn-danger">Back</button></a>
            </div>
        </form>
    </div>
</div>

<?=$this->include('templates/footer');?>
