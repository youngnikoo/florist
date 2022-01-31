<div class="fd" data-fd="<?= ($this->session->flashdata('alert')); ?>"></div>
<div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h6 class="mt-3">Kembali ke halaman <a href="<?= base_url('login')?>" class="text-primary">Login</a></h6>
                            <div class="divider row"></div>
                            <div>
                                <form action="<?= site_url('login/update_password')?>" method="post">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <input type="hidden" name="id" value="<?= $user->idKonsumen; ?>">
                                                <label>Password Baru</label>
                                                <input name="pass" placeholder="Password baru" type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label>Verify Password Baru</label>
                                                <input name="pass1" placeholder="Verifikasi password baru" type="password" class="form-control">
                                                <small class="form-text text-muted">*verifikasi ulang password baru anda</small>
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
                    </div>