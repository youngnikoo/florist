<div class="fd" data-fd="<?= ($this->session->flashdata('alert')); ?>"></div>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade active show" id="tab-content-2" role="tabpanel">
                                <div class="row">
                                <div class="col-md-12">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <ul class="nav nav-pills nav-fill">
                                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg14-0" class="active nav-link">List User</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab-eg14-0" role="tabpanel">
                                                        <div class="scroll-area-sm">
                                                            <div class="scrollbar-container ps--active-y ps">
                                                                <table class="mb-0 table table-bordered table-hover">
                                                                    <thead class="thead-dark">
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Nama Konsumen</th>
                                                                            <th>Username</th>
                                                                            <th>Password</th>
                                                                            <th>Alamat</th>
                                                                            <th>Email</th>
                                                                            <th>Telepon</th>
                                                                            <th>level</th>
                                                                            <th>Aksi</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php
                                                                        $no=1; 
                                                                        foreach($member as $item){ 
                                                                        ?>
                                                                        <tr>
                                                                            <td><?= $no++; ?></td>
                                                                            <td><?= $item->namaKonsumen; ?></td>
                                                                            <td><?= $item->username; ?></td>
                                                                            <td><?= $item->passwd; ?></td>
                                                                            <td><?= $item->alamat; ?></td>
                                                                            <td><?= $item->email; ?></td>
                                                                            <td><?= $item->tlpn; ?></td>
                                                                            <td><?php if ($item->status == 'admin') { ?> 
                                                                                <span class='badge badge-primary'>Admin</span> 
                                                                                <?php } else { ?> 
                                                                                <span class='badge badge-secondary'>Member</span> 
                                                                                <?php } ?>
                                                                            </td>
                                                                            <td>
                                                                            <?php if ($item->status == 'member') : ?>
                                                                                <a class="badge badge-danger btn-hapus" nama="<?= $item->namaKonsumen?>" href="<?= site_url('admin/delete_user/'. $item->idKonsumen); ?>"> Delete </a>
                                                                            <?php else : ?>
                                                                                <a class="badge badge-warning" href="<?= site_url('admin/edit_user/'. $item->idKonsumen); ?>" > Edit </a>
                                                                            <?php endif ?>
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