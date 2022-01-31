    <?= ($this->session->flashdata('alert')); ?>
    <div class="card-body"><h5 class="card-title">Tambah Produk</h5>
        <form method="post" action="<?= base_url('produk/simpan_produk"')?>" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="namaBunga" class="">Nama Bunga</label>
                        <input name="namabunga" placeholder="Nama Bunga" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="pilihanjenis" class="">Jenis Bunga</label>
                        <select name="jenis" id="selectjenis" class="form-control">
                            <?php foreach($jns as $item){?>
                                <option value="<?= $item->idKat;?>"><?= $item->namaKat;?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="stok" class="">Stok</label>
                        <input name="stok" placeholder="100" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="harga" class="">Harga</label>
                        <input name="harga" placeholder="10000" type="text" class="form-control">
                    </div>
                </div>    
            </div>
            <div class="form-row">
                <div class="col-md-3">
                    <div class="position-relative form-group">
                        <label for="fotobunga" class="">Foto</label>
                        <input name="foto" type="file" class="form-control-file">
                        <small class="form-text text-muted">Ukuran maksimal : 1MB</small>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="position-relative form-group">
                        <label for="deskripsi" class="">Deskripsi</label>
                        <textarea name="desc" rows="2" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-row">
                
            </div>
            <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>