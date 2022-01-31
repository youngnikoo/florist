<div class="fd" data-fd="<?= ($this->session->flashdata('alert')); ?>"></div>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade active show" id="tab-content-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <ul class="nav nav-pills nav-fill">
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-0" class="active nav-link">Produk</a></li>
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-1" class="nav-link">Kategori</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-eg14-0" role="tabpanel">
                                                        <div class="scroll-area-sm">
                                                                <div class="scrollbar-container ps--active-y ps">
                                                                <table class="mb-0 table table-bordered table-hover">
                                                                        <thead class="thead-dark">
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <!-- <th>Foto</th> -->
                                                                            <th>Nama</th>
                                                                            <th>Jenis</th>
                                                                            <th>Stok Tersedia</th>
                                                                            <th>Harga</th>
                                                                            <th>Deskripsi</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $no=1; 
                                                                        foreach($produk as $item){ 
                                                                        ?>
                                                                        <tr>
                                                                            <th scope="row"><?= $no++; ?></th>
                                                                            <!-- <td><?= $item->foto; ?></td> -->
                                                                            <td><?= $item->namaProduk; ?></td>
                                                                            <td><?= $item->namaKat; ?></td>
                                                                            <td><?= $item->stok; ?></td>
                                                                            <td><?= "Rp. ".number_format($item->harga, 0, ".",".");?></td>
                                                                            <td width="300px"><?= $item->deskripsiProduk; ?></td>
                                                                            <td>
                                                                                <a href="<?= site_url('produk/edit_produk/'.$item->idProduk);?>" class=" btn btn-warning btn-edit">Edit</a>
                                                                                <a href="<?= site_url('produk/delete_produk/'.$item->idProduk);?>" nama="<?= $item->namaProduk?>" class="btn btn-danger btn-hapus">Hapus</a>
                                                                            </td>
                                                                        </tr>
                                                                        <?php }?>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-eg14-1" role="tabpanel">
                                                        <div class="main-card mb-3 card">
                                                            <div class="scroll-area-sm">
                                                                <div class="scrollbar-container ps--active-y ps">
                                                                    <table class="mb-0 table table-bordered table-hover">
                                                                        <thead class="thead-dark">
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Kategori Tersedia</th>
                                                                                <th>Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $no=1; 
                                                                            foreach($jns as $item){ 
                                                                            ?>
                                                                            <tr>
                                                                                <th scope="row"><?= $no++; ?></th>
                                                                                <td><?= $item->namaKat; ?></td>
                                                                                <td>
                                                                                <a href="<?= site_url('produk/edit_jenis/'.$item->idKat);?>" class=" btn btn-warning btn-edit">Edit</a>
                                                                                <a href="<?= site_url('produk/delete_jenis/'.$item->idKat);?>" nama="<?= $item->namaKat?>" class="btn btn-danger btn-hapus">Hapus</a>
                                                                                </td>
                                                                            </tr>
                                                                            <?php }?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>