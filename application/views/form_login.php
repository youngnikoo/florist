<div class="fd" data-fd="<?= ($this->session->flashdata('alert')); ?>"></div>
<div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4 class="mb-0">
                                <span class="d-block">Selamat datang kembali,</span>
                                <span>Silahkan masuk ke akun anda.</span>
                            </h4>
                            <h6 class="mt-3">Tidak punya akun? <a href="<?= base_url('login/register')?>" class="text-primary">Daftar sekarang</a></h6>
                            <div class="divider row"></div>
                            <div>
                                <form action="<?= site_url('login/aksi_login')?>" method="post">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail" class="">Username</label>
                                                <input name="username" placeholder="Username" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class="">Password</label>
                                                <input name="password" id="examplePassword" placeholder="Password" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <a href="<?= base_url('login/recovery')?>" class="btn-lg btn btn-link">Recover Password</a>
                                            <button type="submit" class="btn btn-primary btn-lg">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>