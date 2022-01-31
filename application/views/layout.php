<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Florist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="<?= base_url('assets/ui/main.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/ui/sweetalert2.min.css')?>" rel="stylesheet">
    <style>
        table{
            text-align: center;
        }
    </style>
</head>
<body>  
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <a href="<?= base_url('admin')?>">
                    <div class="logo-src"></div>
                </a>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="<?= base_url('/assets/ui/assets/images/avatars/1.jpg')?>" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a type="button" tabindex="0" class="dropdown-item" href="<?= base_url('login/logout');?>">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                    <?= $this->session->userdata('username')?>
                                    </div>
                                    <div class="widget-subheading">
                                    <?= $this->session->userdata('nama')?>
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <!-- UI Theme Options Start -->
        
        <!-- UI Theme Options End -->
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Manajemen Admin</li>
                                    <li>
                                        <a href="<?= base_url('Admin')?>" class="<?= $sba;?>">
                                            <i class="metismenu-icon pe-7s-rocket"></i>Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('produk')?>" class="<?= $sbpr;?>">
                                            <i class="metismenu-icon pe-7s-ticket"></i>Produk
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('pengiriman')?>" class="<?= $sbp;?>">
                                            <i class="metismenu-icon pe-7s-paper-plane"></i>Pengiriman
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('transaksi')?>" class="<?= $sbt;?>">
                                            <i class="metismenu-icon pe-7s-shopbag"></i>Transaksi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/user')?>" class="<?= $sbu;?>">
                                            <i class="metismenu-icon pe-7s-users"></i>User
                                        </a>
                                    </li>    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-diamond icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Manajemen Admin
                                        <div class="page-title-subheading">Atur keperluan database untuk website anda disini.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Actions
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-toggle="modal" data-target="#tambahproduk">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Tambah Produk
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-toggle="modal" data-target="#tambahjenis">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Tambah Kategori
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-toggle="modal" data-target="#tambahkota">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Tambah Kota
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-toggle="modal" data-target="#tambahkurir">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Tambah Jasa Kirim
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-toggle="modal" data-target="#tambahongkir">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Tambah Biaya Kirim
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link" data-toggle="modal" data-target="#tambahuser">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span>
                                                            Tambah User
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <?= $contents?>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                            <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="https://architectui.com/" class="nav-link">
                                            Designed By ArchitectUI
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                            &copy; 2021 |&nbsp;<div class="bullet">Florist</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="<?= base_url('assets/ui/assets/scripts/jquery-3.6.0.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/ui/assets/scripts/sweetalert2.all.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/ui/assets/scripts/main.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/ui/assets/scripts/myscript.js')?>"></script>
</body>
</html>

<!-- Modal Tambah Produk -->
<div class="modal fade bd-example-modal-lg" id="tambahproduk" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('produk/simpan_produk')?>" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="namaBunga" class="">Nama Bunga</label>
                                <input name="namabunga" placeholder="Nama Bunga" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="pilihanjenis" class="">Jenis Bunga</label>
                                <select name="jenis" id="selectjenis" class="form-control">
                                    <?php foreach($jns as $item){?>
                                        <option value="<?= $item->idKat;?>"><?= $item->namaKat;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="stok" class="">Stok</label>
                                <input name="stok" placeholder="100" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label for="harga" class="">Harga</label>
                                <input name="harga" placeholder="10000" type="text" class="form-control">
                            </div>
                        </div>    
                    </div>
                    <div class="form-row">
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label for="fotobunga" class="">Foto</label>
                                <input name="foto" type="file" class="form-control-file">
                                <small class="form-text text-muted">Ukuran maksimal : 1MB</small>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="position-relative form-group">
                                <label for="deskripsi" class="">Deskripsi</label>
                                <textarea name="desc" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
                    <button class="mt-2 btn btn-secondary" type="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Penutup Modal Tambah Produk -->
<!-- Modal Tambah Kategori -->
<div class="modal fade bd-example-modal-md" id="tambahjenis" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('produk/simpan_jenis')?>" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-center form-group">
                                <input name="namaKategori" placeholder="Nama Kategori" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
                        <button class="mt-2 btn btn-secondary" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Penutup Modal Tambah Kategori -->
<!-- Modal Tambah Kota -->
<div class="modal fade bd-example-modal-md" id="tambahkota" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kota</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('pengiriman/simpan_kota')?>">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-center form-group">
                                <input name="namaKota" placeholder="Nama Kota" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
                        <button class="mt-2 btn btn-secondary" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Penutup Modal Tambah Kota -->
<!-- Modal Tambah Kurir -->
<div class="modal fade bd-example-modal-md" id="tambahkurir" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Jasa Kirim</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('pengiriman/simpan_kurir')?>">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-center form-group">
                                <input name="namaKurir" placeholder="Nama Jasa Kirim" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
                        <button class="mt-2 btn btn-secondary" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Penutup Modal Tambah Kurir -->
<!-- Modal Tambah Biaya Kirim -->
<div class="modal fade bd-example-modal-md" id="tambahongkir" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Biaya Kirim</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('pengiriman/simpan_ongkir')?>">
                    <div class="form-row">
                        <div class="col-md-6 position-center form-group">
                            <label for="kurir" class="">Jasa Kirim</label>
                            <select name="kurir" id="selectjenis" class="form-control">
                                <?php foreach($kurir as $item){?>
                                    <option value="<?= $item->idKurir;?>"><?= $item->namaKurir;?></option>
                                <?php }?>
                            </select>
                        </div>
                        <div class="col-md-6 position-center form-group">
                                <label for="kotaTujuan" class="">Kota Tujuan</label>
                                <select name="kota" id="selectjenis" class="form-control">
                                    <?php foreach($kota as $item){?>
                                        <option value="<?= $item->idKota;?>"><?= $item->namaKota;?></option>
                                    <?php }?>
                                </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="position-center form-group">
                            <input name="biaya" placeholder="Biaya" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
                        <button class="mt-2 btn btn-secondary" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Penutup Modal Tambah Biaya Kirim -->
<!-- Modal Tambah User -->
<div class="modal fade bd-example-modal-md" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah User</h5>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('admin/simpan_user')?>">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label class="">Nama Lengkap</label>
                                <input name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label class="">Email</label>
                                <input name="email" type="email" placeholder="email@email.com" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label class="">No. Telepon</label>
                                    <input name="tlpn" type="text" placeholder="087123567890" class="form-control">
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kota</label>
                                <select name="kota" class="form-control">
                                    <?php foreach($kota as $item){?>
                                    <option value="<?= $item->idKota;?>"><?= $item->namaKota;?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label class="">Username</label>
                                <input name="username" placeholder="username" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>Password</label>
                                <input name="passwd" placeholder="******" type="password" class="form-control">
                            </div>
                        </div>    
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position relative form-group">
                                <label>Status</label>
                                <select name="stat" class="form-control">
                                    <option value="admin">Admin</option>
                                    <option value="member">Member</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>Nama Orangtua</label>
                                <input name="qa" placeholder="Nama depan orangtua" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="position-relative form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" rows="2" class="form-control" placehilder="Jln. Kenangan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="modal-footer">
                            <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
                            <button class="mt-2 btn btn-secondary" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Penutup Modal Tambah User -->