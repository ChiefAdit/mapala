<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjam;
use Termwind\Components\Dd;

class apiController extends Controller
{
    public function index()
    {
       // lempar data dengan pagination 15 data per halaman dengan json
         return Peminjam::paginate(15);
          
        
                
            
    
    }
    public function store(Request $request)
    {
        // validasi data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'buku' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);
        // simpan data
        Peminjam::create($request->all());
        
        // kirim response
        return response([
            'message' => 'Data berhasil disimpan'
        ]);
    }
    public function update(Request $request, $id)
    {
        // validasi data
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'jenis_kelamin' => 'required',
            'tgl_lahir' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'buku' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);
        // cari data berdasarkan id
        $peminjam = Peminjam::find($id);
        // update data
        $peminjam->update($request->all());
        // kirim response
        return response([
            'message' => 'Data berhasil diupdate'
        ]);
    }
    public function destroy($id)
    {
        // cari data berdasarkan id
        $peminjam = Peminjam::find($id);
        // hapus data
        $peminjam->delete();
        // kirim response
        return response([
            'message' => 'Data berhasil dihapus'
        ]);
    }
    public function login(Request $request)
    {
        // validasi data json
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // cek email dan password
        $peminjam = Peminjam::where('email', $request->email)->where('password', $request->password)->first();
        // jika email dan password tidak ada
        if(!$peminjam){
            // kirim response
            return response()->json([
                'message' => 'Login gagal'
            ]);
        }
        // jika email dan password ada
        else{
            // kirim response json
            return  response()->json([
                'message' => 'Login berhasil',
                'data' => $peminjam
            ]);
        }
    }

}
