

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/global/css/bootstrap.css">
    <meta name="<?= csrf_token() ?>" content="<?= csrf_hash() ?>">

    <title>Sistem Iuran KAS RT</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light" style="margin-bottom:1%;">
        <a class="navbar-brand" href="#">
            <label>SISTEM IURAN KAS RT</label>
        </a>
    </nav>
    <!-- navbar -->

    <!-- sidebar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom:2%">
                        <img class="img-thumbnail img-fluid" src="<?=base_url();?>/assets/global/img/Logo-upb.png">
                    </div>
                </div>
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('home')?>"><span class="fa fa-area-chart"></span> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#master" data-toggle="collapse"><span class="fa fa-briefcase"></span> Master</a>
                        <ul id="master" class="nav-item collapse">
                            <a class="nav link" href="<?=base_url('warga')?>">Data Warga</a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('iuran')?>"><span class="fa fa-exchange"></span> Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#laporan" data-toggle="collapse"><span class="fa fa-sticky-note-o"></span> Laporan</a>
                        <ul id="laporan" class="nav-item collapse">
                            <!-- <a class="nav link" href="<?=base_url('tagihan')?>">Data Tagihan</a>-->
                            <a class="nav link" href="<?=base_url('kas')?>">Data KAS</a>
                        </ul>
                    </li>
                    <!-- <li class="nav-item" style="color: rgb(0,125,255);">
                        <a class="nav-link" href="<?=base_url();?>" onclick="logout()" id="logout"><span class="fa fa-sign-out"></span> Log Out</a>
                    </li> -->
                </ul>
            </div>
            <!-- sidebar -->
            <div class="col-md-10">
