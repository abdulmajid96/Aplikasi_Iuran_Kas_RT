<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=base_url('home')?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Laporan</li>
    </ol>
</nav>

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Data Laporan Kas Masuk </h3>
                 
                  </div>
                  <div class="card-body">
                  <form action="<?= base_url('kas/index'); ?>" method="GET">
                     <div class="form-row">

                        <div class="form-group col-md-4 col-sm-12">
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
                        <div class="form-group col-md-4 col-sm-12">
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
                      </div>    
                      <div>
                          <button type="submit" class="btn btn-primary" id="get-laporan"><i class="fa fa-paper-plane"></i> Cari</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card">
                    <div class="card-body">
                        <div class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table id="table-laporan" class="table table-bordered">
                                            <thead>
                                                <tr role="row">
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                   
                                                    <th>Bulan</th>
                                                    <th>Tahun</th>
                                                    <th>Jumlah</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                    $kas = 0; 
                                                foreach($iuran as $d) :
                                                  $kas += $d['jumlah'];
                                                 
                                                ?>
                                                <tr role="row">
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $d['nama']?></td>
                                                   
                                                    <td><?= $d['bulan'] ?></td>
                                                    <td><?= $d['tahun'] ?></td>
                                                    <td>Rp. <?= number_format($d['jumlah'], 0,',','.'); ?></td>
                                                </tr>
                                                <?php endforeach;?>
                                                <tr role="row">
                                                    <td colspan="4" class="text-center">Total Jumlah Kas :</td>
                                                    <td>Rp. <?= number_format($kas, 0,',','.'); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>

        