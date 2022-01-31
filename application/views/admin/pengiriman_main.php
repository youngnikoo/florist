
<div class="fd" data-fd="<?= ($this->session->flashdata('alert')); ?>"></div>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade active show" id="tab-content-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <ul class="nav nav-pills nav-fill">
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-0" class="active nav-link">Biaya Kirim</a></li>
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-1" class="nav-link">Kota</a></li>
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-2" class="nav-link">Jasa Kirim</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-eg14-0" role="tabpanel">
                                                        <div class="scroll-area-sm">
                                                                <div class="scrollbar-container ps--active-y ps">
                                                                    <table class="mb-0 table table-bordered table-hover">
                                                                            <thead class="thead-dark">
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Jasa Kirim</th>
                                                                                <th>Kota Tujuan</th>
                                                                                <th>Biaya Kirim</th>
                                                                                <th>Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $no=1; 
                                                                            foreach($ongkir as $item){ 
                                                                            ?>
                                                                            <tr>
                                                                                <th scope="row"><?= $no++; ?></th>
                                                                                <td><?= $item->namaKurir; ?></td>
                                                                                <td><?= $item->namaKota; ?></td>
                                                                                <td><?= "Rp. ".number_format($item->biaya, 0, ".",".");?></td>
                                                                                <td>
                                                                                    <a href="<?= site_url('pengiriman/edit_ongkir/'.$item->idBiayaKirim);?>" class=" btn btn-warning btn-edit">Edit</a>
                                                                                    <a href="<?= site_url('pengiriman/delete_ongkir/'.$item->idBiayaKirim);?>" nama="<?= $item->namaKurir?> tujuan <?= $item->namaKota?>" class="btn btn-danger btn-hapus">Hapus</a>
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
                                                                                <th>Nama Kota</th>
                                                                                <th>Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $no=1; 
                                                                            foreach($kota as $item){ 
                                                                            ?>
                                                                            <tr>
                                                                                <th scope="row"><?= $no++; ?></th>
                                                                                <td><?= $item->namaKota; ?></td>
                                                                                <td>
                                                                                <a href="<?= site_url('pengiriman/edit_kota/'.$item->idKota);?>" class=" btn btn-warning btn-edit">Edit</a>
                                                                                <a href="<?= site_url('pengiriman/delete_kota/'.$item->idKota);?>" nama="<?= $item->namaKota?>" class="btn btn-danger btn-hapus">Hapus</a>
                                                                                </td>
                                                                            </tr>
                                                                            <?php }?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab-eg14-2" role="tabpanel">
                                                        <div class="main-card mb-3 card">
                                                            <div class="scroll-area-sm">
                                                                <div class="scrollbar-container ps--active-y ps">
                                                                    <table class="mb-0 table table-bordered table-hover">
                                                                        <thead class="thead-dark">
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Jasa Kirim</th>
                                                                                <th>Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $no=1; 
                                                                            foreach($kurir as $item){ 
                                                                            ?>
                                                                            <tr>
                                                                                <th scope="row"><?= $no++; ?></th>
                                                                                <td><?= $item->namaKurir; ?></td>
                                                                                <td>
                                                                                <a href="<?= site_url('pengiriman/edit_kurir/'.$item->idKurir);?>" class=" btn btn-warning btn-edit">Edit</a>
                                                                                <a href="<?= base_url('pengiriman/delete_kurir/'.$item->idKurir)?>" nama="<?= $item->namaKurir ?>" class="btn btn-danger btn-hapus">Hapus</a>
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