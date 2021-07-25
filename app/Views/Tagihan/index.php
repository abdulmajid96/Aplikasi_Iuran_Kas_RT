<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Data Laporan </h3>
                 
                  </div>
                  <div class="card-body">

                
                     <form class="form-horizontal" id="form-laporan" enctype="multipart/form-data">
                     <div class="form-row">

                     
                        <?php $bln = date('m')?>
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="bulan">Bulan</label>
                       
                             <select class="form-control" name="bulan">
                                <option value="">Pilih Bulan</option>
                                <option value="01" <?php if ($bln == 1) { echo 'selected'; }?>>Januari</option>
                                <option value="02" <?php if ($bln == 2) { echo 'selected'; }?>>Februari</option>
                                <option value="03" <?php if ($bln == 3) { echo 'selected'; }?>>Maret</option>
                                <option value="04" <?php if ($bln == 4) { echo 'selected'; }?>>April</option>
                                <option value="05" <?php if ($bln == 5) { echo 'selected'; }?>>Mei</option>
                                <option value="06" <?php if ($bln == 6) { echo 'selected'; }?>>Juni</option>
                                <option value="07" <?php if ($bln == 7) { echo 'selected'; }?>>Juli</option>
                                <option value="08" <?php if ($bln == 8) { echo 'selected'; }?>>Agustus</option>
                                <option value="09" <?php if ($bln == 9) { echo 'selected'; }?>>September</option>
                                <option value="10" <?php if ($bln == 10) { echo 'selected'; }?>>Oktober</option>
                                <option value="11" <?php if ($bln == 11) { echo 'selected'; }?>>November</option>
                                <option value="12" <?php if ($bln == 12) { echo 'selected'; }?>>Desember</option>
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
                                                foreach($data as $d) :
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