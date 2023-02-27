<div class="row">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="col-lg-12 grid-margin stretch-card">
                
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

               
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="col-lg-12 grid-margin stretch-card">

                @if ($statusUpdate)
                    <livewire:peminjam-update></livewire:peminjam-update>
                @else
                    <livewire:peminjam-create></livewire:peminjam-create>
                @endif
               
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <select wire:model="paginate" class="form-select" aria-label="Default select example">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>

                            </select>

                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <input wire:model="search" class="form-control me-2" type="search" placeholder="Search"
                                aria-label="Search">

                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"> Table Peminjam</h4>
                        
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No. Telp</th>
                                        <th>barang</th>
                                        <th>Jumlah</th>
                                        <th>Tgl Pinjam</th>
                                        <th>Tgl Kembali</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    ?>
                                    @foreach ($data as $peminjam)
                                        <?php
                                        $no++;
                                        ?>
                                        <tr>
                                            <th> {{ $no }}</th>
                                            <td>{{ $peminjam->nama }}</td>
                                            <td>{{ $peminjam->no_telp }}</td>
                                            <td>{{ $peminjam->barang }}</td>
                                            <td>{{ $peminjam->jumlah }}</td>
                                            <td>{{ $peminjam->tanggal_pinjam }}</td>
                                            <td>{{ $peminjam->tanggal_kembali }}</td>
                                            <td>
                                                <button wire:click="getPeminjam({{ $peminjam->id }})"
                                                    class="btn btn-sm btn-warning">Edit</button>
                                                <button wire:click="delete({{ $peminjam->id }})"
                                                    class="btn btn-sm btn-danger">Hapus</button>

                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                            {{ $data->links() }}
                        
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
