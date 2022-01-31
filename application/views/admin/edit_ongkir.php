    <?= ($this->session->flashdata('alert')); ?>
    <div class="card-body">
        <h5 class="card-title">Edit Jasa Kirim</h5>
        <form method="post" action="<?= base_url('pengiriman/update_ongkir')?>">
            <div class="form-row">
                <div class="col-md-4 position-relativ form-group">
                    <label for="kurir" class="">Jasa Kirim</label>
                    <select name="kurir" class="form-control">
                        <?php foreach($kurir as $item){?>
                            <option value="<?= $item->idKurir;?>" <?= $ongkir->idKurir == $item->idKurir ? "selected" : null ?>><?= $item->namaKurir;?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-4 position-relative form-group">
                    <label for="kotaTujuan" class="">Kota Tujuan</label>
                    <select name="kota" class="form-control">
                        <?php foreach($kota as $item){?>
                        <option value="<?= $item->idKota;?>" <?= $ongkir->idKotaTujuan == $item->idKota ? "selected" : null ?>><?= $item->namaKota;?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="biaya" class="">Biaya</label>
                        <input type="hidden" name="id" value="<?= $ongkir->idBiayaKirim ;?>">
                        <input type="hidden" name="ckota" value="<?= $ongkir->idKotaTujuan ;?>">
                        <input name="biaya" placeholder="Biaya Kirim" type="text" class="form-control" value="<?= $ongkir->biaya?>">
                    </div>
                </div>
            </div>
            <div class="form-row">
                
            </div>
            <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>