<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Peminjam;

class PeminjamUpdate extends Component
{
    public $nama;
    public $alamat;
    public $no_telp;
    public $barang;
    public $jumlah;
    public $tanggal_pinjam;
    public $tanggal_kembali;
    public $status;
    public $keterangan;
    public $peminjamId;

    protected $listeners = [
        'getPeminjam' => 'showPeminjam'
    ];
    public function showPeminjam($peminjam)
    {
        $this->nama = $peminjam['nama'];
        $this->alamat = $peminjam['alamat'];
        $this->no_telp = $peminjam['no_telp'];
        $this->barang = $peminjam['barang'];
        $this->jumlah = $peminjam['jumlah'];
        $this->tanggal_pinjam = $peminjam['tanggal_pinjam'];
        $this->tanggal_kembali = $peminjam['tanggal_kembali'];
        $this->status = $peminjam['status'];
        $this->keterangan = $peminjam['keterangan'];
        $this->peminjamId = $peminjam['id'];
    }
    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'barang' => 'required',
            'jumlah' => 'required',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
        ]);

        if ($this->peminjamId) {
            $data = Peminjam::find($this->peminjamId);
            $data->update([
                'nama' => $this->nama,
                'alamat' => $this->alamat,
                'no_telp' => $this->no_telp,
                'barang' => $this->barang,
                'jumlah' => $this->jumlah,
                'tanggal_pinjam' => $this->tanggal_pinjam,
                'tanggal_kembali' => $this->tanggal_kembali,
                'status' => $this->status,
                'keterangan' => $this->keterangan,
            ]);
            $this->resetInput();
            $this->emit('peminjamUpdate', $data);
        }
    }

    public function render()
    {
        return view('livewire.peminjam-update');
    }
    private function resetInput()
    {
        $this->nama = null;
        $this->alamat = null;
        $this->no_telp = null;
        $this->barang = null;
        $this->jumlah = null;
        $this->tanggal_pinjam = null;
        $this->tanggal_kembali = null;
        $this->status = null;
        $this->keterangan = null;
    }
}
