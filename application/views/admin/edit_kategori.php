    <?= ($this->session->flashdata('alert')); ?>
    <div class="card-body">
        <h5 class="card-title">Edit Kategori</h5>
        <form method="post" action="<?= base_url('produk/update_jenis')?>" enctype="multipart/form-data">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="namaJenis" class="">Nama Kategori</label>
                        <input type="hidden" name="id" value="<?= $jns->idKat ;?>">
                        <input name="jenis" placeholder="Nama Kategori" type="text" class="form-control" value="<?= $jns->namaKat?>">
                    </div>
                </div>
            </div>
            <div class="form-row">
                
            </div>
            <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>