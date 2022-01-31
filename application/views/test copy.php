<!-- <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4 class="mb-0">
                                <span> Buatlah password baru untuk login dengan username <strong><?= $user->username; ?></strong>.</span>
                            </h4>
                            <h6 class="mt-3">Kembali ke halaman <a href="<?= base_url('login/register')?>" class="text-primary">Login</a></h6>
                            <div class="divider row"></div>
                            <?= ($this->session->flashdata('alert')); ?>
                            <div>
                                <form action="<?= site_url('login/update_password')?>" method="post">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail" class="">Password Baru</label>
                                                <input type="hidden" name="id" value="<?= $user->idKonsumen; ?>">
                                                <input name="pass" placeholder="Username" type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class="">Verifikasi Password<label>
                                                <input name="pass1" id="examplePassword" placeholder="Nama depan orangtua" type="password" class="form-control">
                                                <small class="form-text text-muted">* tulis ulang password baru yang anda buat!</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <button type="submit" class="btn btn-primary btn-lg">Ubah Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> -->