<div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                        <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                            <div class="app-logo"></div>
                            <h4 class="mb-0">
                                <span>Daftar disini sekarang.</span>
                            </h4>
                            <h6 class="mt-3">Sudah punya akun? <a href="<?= base_url('login');?>" class="text-primary">Masuk disini</a></h6>
                            <div class="divider row">
                            <?= ($this->session->flashdata('alert')); ?>
                            </div>
                            <div>
                                <form action="<?= base_url('login/register_user');?>" method="post">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class="">Nama Lengkap</label>
                                                <input name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class="">Email</label>
                                                <input name="email" type="email" placeholder="email@email.com" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="">No. Telepon</label>
                                                <input name="tlpn" type="text" placeholder="087123567890" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kota</label>
                                                <select name="kota" class="form-control">
                                                    <?php foreach($kota as $item){?>
                                                    <option value="<?= $item->idKota;?>"><?= $item->namaKota;?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label class="">Username</label>
                                                <input name="username" placeholder="username" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label>Password</label>
                                                <input name="passwd" placeholder="******" type="password" class="form-control">
                                            </div>
                                        </div>    
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position relative form-group">
                                                <label>Nama Orangtua Anda</label>
                                                <input name="stat" value="member" type="hidden" value="member" class="form-control">
                                                <input name="qa" placeholder="Isi dengan nama depan orangtua anda" type="text" class="form-control">
                                                <small class="form-text text-muted">* Untuk keperluan pertanyaan keamanan</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label>Alamat</label>
                                                <textarea name="alamat" rows="1" class="form-control" placehilder="Jln. Kenangan"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-check">
                                        <input name="check" value="Y" type="checkbox" class="form-check-input">
                                        <label for="exampleCheck" class="form-check-label">Semua informasi diatas sudah benar dan sesuai dengan data diri saya!</label><br>
                                        <?= ($this->session->flashdata('cek')); ?>
                                    </div>
                                    <div class="divider row"></div>
                                    <div class="d-flex align-items-center">
                                        <div class="ml-auto">
                                            <button class="btn btn-primary btn-lg">Daftar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>