<div class="fd" data-fd="<?= ($this->session->flashdata('alert')); ?>"></div>
<div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4 class="mb-0">
                                <span class="d-block">Password Recovery,</span>
                                <span> Isikan kolom sesuai data yang diminta.</span>
                            </h4>
                            <h6 class="mt-3"><a href="<?= base_url('login')?>" class="text-primary">Login</a></h6>
                            <div class="divider row"></div>
                            <div>
                                <form action="<?= site_url('login/recover_password')?>" method="post">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail" class="">Username</label>
                                                <input name="username" placeholder="Username" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class="">Nama Depan Orangtua Anda</label>
                                                <input name="qa" id="examplePassword" placeholder="Nama depan orangtua" type="text" class="form-control">
                                                <small class="form-text text-muted">* isi sesuai jawaban saat mendaftar!</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <button type="submit" class="btn btn-primary btn-lg">Lanjut</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>