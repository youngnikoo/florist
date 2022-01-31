<div class="fd" data-fd="<?= ($this->session->flashdata('alert')); ?>" data-nama="<?= $this->session->userdata('nama')?>"></div>
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Member</div>
                                            <div class="widget-subheading">Jumlah member aktif</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?= $cm?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Transaksi</div>
                                            <div class="widget-subheading">jumlah orderan</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?= $ct?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Produk</div>
                                            <div class="widget-subheading">Jumlah saat ini</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning"><span><?= $cp?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <h5 class="card-title">Produk</h5>
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
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Table bordered</h5>
                                        <table class="mb-0 table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Data User</h5>
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container ps--active-y ps">
                                            <table class="mb-0 table table-bordered">
                                                <thead>
                                                <tr>
                                                        <th>#</th>
                                                        <th>Nama Member</th>
                                                        <th>Alamat</th>
                                                        <th>Email</th>
                                                        <th>Telpon</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $no=1; 
                                                    foreach($member as $item){ 
                                                    ?>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?= $item->namaKonsumen; ?></td>
                                                        <td><?= $item->alamat; ?></td>
                                                        <td><?= $item->email; ?></td>
                                                        <td><?= $item->tlpn; ?></td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>