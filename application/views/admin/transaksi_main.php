                    <?= ($this->session->flashdata('alert')); ?>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade active show" id="tab-content-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <ul class="nav nav-pills nav-fill">
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-0" class="active nav-link">Order</a></li>
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-1" class="nav-link">Konfirmasi</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-eg14-0" role="tabpanel">
                                                        <div class="scroll-area-sm">
                                                            <div class="scrollbar-container ps--active-y ps">
                                                                <table class="mb-0 table table-bordered table-hover">
                                                                        <thead class="thead-dark">
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>ID Order</th>
                                                                            <th>User</th>
                                                                            <th>Tanggal Order</th>
                                                                            <th>Status</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $no=1; 
                                                                        foreach($tsk as $item){ 
                                                                        ?>
                                                                        <tr>
                                                                            <th scope="row"><?= $no++; ?></th>
                                                                            <td><?= $item->idOrder; ?></td>
                                                                            <td><?= $item->namaKonsumen; ?></td>
                                                                            <td><?= $item->tglOrder; ?></td>
                                                                            <td><?= $item->statusOrder; ?></td>
                                                                            <td>
                                                                            <?php if ($item->statusOrder == 'Belum Bayar') { ?> 
                                                                                <span class='badge badge-danger'><?= $item->statusOrder;?></span>
                                                                                <?php } elseif ($item->statusOrder == 'Diterima') { ?> 
                                                                                <span class='badge badge-info'><?= $item->statusOrder;?></span>
                                                                                <?php } elseif ($item->statusOrder == 'Selesai') { ?> 
                                                                                <span class='badge badge-success'><?= $item->statusOrder;?></span> 
                                                                                <?php } elseif ($item->statusOrder == 'Dibatalkan') { ?> 
                                                                                <span class='badge badge-warning'><?= $item->statusOrder;?></span>
                                                                                <?php } else { ?> 
                                                                                <span class='badge badge-secondary'><?= $item->statusOrder;?></span> 
                                                                                <?php } ?>
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
                                                                                <th>ID Order</th>
                                                                                <th>Bukti</th>
                                                                                <th>Aksi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                            $no=1; 
                                                                            foreach($knf as $item){ 
                                                                            ?>
                                                                            <tr>
                                                                                <th scope="row"><?= $no++; ?></th>
                                                                                <td><?= $item->idOrder; ?></td>
                                                                                <td><a href="#">Lihat</a></td>
                                                                                <td>
                                                                                    <?php if ($item->validasi == 'N') { ?> 
                                                                                    <span class='badge badge-danger'>Belum divalidasi</span>
                                                                                    <?php } else { ?> 
                                                                                    <span class='badge badge-success'>Sudah tervalidasi</span> 
                                                                                    <?php } ?>
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