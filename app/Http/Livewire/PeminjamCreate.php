<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Peminjam;

class PeminjamCreate extends Component
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
    public function store()
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

        $data= Peminjam::create([
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
        $this->emit('peminjamStore', $data);
    }
    
    public function render()
    {
        return view('livewire.peminjam-create');
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
