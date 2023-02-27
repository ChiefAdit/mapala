<?php

namespace App\Http\Livewire;

use App\Models\Peminjam;

use Livewire\Component;
use Livewire\WithPagination;

class PeminjamIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $statusUpdate = false;
    public $paginate = 5;
    public $search;
    
    protected $listeners = [
        'peminjamStore' => 'handleStore',
        'peminjamUpdate' => 'handleUpdate'
    ];
    protected $updatesQueryString = ['search'];
    
    

    public function getPeminjam($id)
    {
        $this->statusUpdate = true;
        $data = Peminjam::find($id);
        $this->emit('getPeminjam', $data);
    }
    public function render()
    {

        return view('livewire.peminjam-index', [
            'data' => $this->search === null ?
                Peminjam::latest()->paginate($this->paginate) :
                Peminjam::latest()->where('nama', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }
    public function handleStore($data)
    {
        session()->flash('message', 'Data Peminjam Berhasil Ditambahkan');
    }
    public function handleUpdate($data)
    {
        session()->flash('message', 'Data Peminjam Berhasil diubah');
    }

    public function delete($id)
    {
        if ($id) {
            $data = Peminjam::find($id);
            $data->delete();
            session()->flash('message', 'Data Peminjam Berhasil Dihapus');
        }
    }
}
