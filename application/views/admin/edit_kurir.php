    <?= ($this->session->flashdata('alert')); ?>
    <div class="card-body">
        <h5 class="card-title">Edit Jasa Kirim</h5>
        <form method="post" action="<?= base_url('pengiriman/update_kurir')?>">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="namaKurir" class="">Nama Jasa Kirim</label>
                        <input type="hidden" name="id" value="<?= $kurir->idKurir ;?>">
                        <input name="namaKurir" placeholder="Nama Jasa Kirim" type="text" class="form-control" value="<?= $kurir->namaKurir?>">
                    </div>
                </div>
            </div>
            <div class="form-row">
                
            </div>
            <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>