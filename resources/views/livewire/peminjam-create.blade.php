<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="store" class="form-sample">
                <p class="card-description">Form Peminjam</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" wire:model="nama" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" wire:model="alamat" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No. Telp</label>
                            <div class="col-sm-9">
                                <input type="text" wire:model="no_telp" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Barang</label>
                            <div class="col-sm-9">
                                <input type="text" id="barang" wire:model="barang" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="text" id="jumlah" wire:model="jumlah" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Pinjam</label>
                            <div class="col-sm-9">
                                <input type="date" wire:model="tanggal_pinjam" data-date-format="YYYY-MMM-DD"
                                    class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Kembali</label>
                            <div class="col-sm-9">
                                <input type="date" wire:model="tanggal_kembali" data-date-format="YYYY-MMM-DD"
                                    class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" wire:model="status" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" wire:model="keterangan" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2" wire:click="store()">Submit</button>
            </form>
        </div>



    </div>
</div>
