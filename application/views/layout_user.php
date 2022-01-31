<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
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
    <style>
        table{
            text-align: center;
        }
    </style>
</head>
<body>  
    <div class="app-container app-theme-white body-tabs-shadow fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
            </div>    
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="<?= base_url('/assets/cek/assets/images/avatars/1.jpg')?>" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        
        <!-- UI Theme Options End -->
            <!-- <div class="app-main"> -->
                    
                <div class="app-main__outer">
                    <!-- Pembungkus awal untuk konten -->
                    <!-- <div class="app-main__inner"> -->
                    <!-- Jangan dihapus, Penutupnya ada di konten -->
                        <div class="app-page-title">
                            <div class="page-title-wrapper">    
                            </div>
                        </div>
                        <?= $contents?>
                    <!-- </div> -->
                <!-- </div> -->
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="<?= base_url('assets/ui/assets/scripts/main.js')?>"></script>
</script>
</body>
</html>

<!-- Modal Tambah Produk -->
<div class="modal fade bd-example-modal-lg" id="tambahproduk" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah produk</h5>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah kategori</h5>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah kota</h5>
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