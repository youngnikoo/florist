    <?= ($this->session->flashdata('alert')); ?>
    <div class="card-body">
        <h5 class="card-title">Edit Kota</h5>
        <form method="post" action="<?= base_url('pengiriman/update_kota')?>">
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="namaKota" class="">Nama Kota</label>
                        <input type="hidden" name="id" value="<?= $kota->idKota ;?>">
                        <input name="namakota" placeholder="Nama Kota" type="text" class="form-control" value="<?= $kota->namaKota?>">
                    </div>
                </div>
            </div>
            <div class="form-row">
                
            </div>
            <button class="mt-2 btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>