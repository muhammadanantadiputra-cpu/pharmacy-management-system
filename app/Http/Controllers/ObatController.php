<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Distributor;
use Illuminate\View\View;

class ObatController extends Controller
{
    // Halaman Home
    public function home(): View
    {
        $cari = request('cari');

        $obat = Obat::with('distributor')
            ->when($cari, function ($query) use ($cari) {
                $query->where('nama_obat', 'like', '%' . $cari . '%');
            })
            ->get();

        return view('home', compact('obat', 'cari'));
    }

    // Halaman Admin
    public function admin(): View
    {
        $obat = Obat::with('distributor')->get();
        $distributor = Distributor::all();
        return view('admin.index', compact('obat', 'distributor'));
    }

    // Form tambah obat
    public function create(): View
    {
        $distributor = Distributor::all();
        return view('obat.create', compact('distributor'));
    }

    // Simpan data obat
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:obat,kode_obat',
            'nama' => 'required',
            'jenis' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'kode_distributor' => 'required|exists:distributor,kode_distributor',
        ]);

        Obat::create([
            'kode_obat' => $request->id,
            'nama_obat' => $request->nama,
            'jenis_obat' => $request->jenis,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'kode_distributor' => $request->kode_distributor,
        ]);

        return redirect()->route('admin.index')->with('success', 'Data berhasil disimpan');
    }

    // Form edit obat
    public function edit($id): View
    {
        $obat = Obat::findOrFail($id);
        $distributor = Distributor::all();
        return view('obat.edit', compact('obat', 'distributor'));
    }

    // Simpan hasil edit
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'kode_distributor' => 'required|exists:distributor,kode_distributor',
        ]);

        $obat = Obat::findOrFail($id);

        $obat->update([
            'nama_obat' => $request->nama,
            'jenis_obat' => $request->jenis,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'kode_distributor' => $request->kode_distributor,
        ]);

        return redirect()->route('admin.index')->with('success', 'Data berhasil diperbarui');
    }

    // Hapus obat
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return redirect()->route('admin.index')->with('success', 'Data berhasil dihapus');
    }

    // Halaman Pemesanan
    public function pemesanan(): View
    {
        $data = Obat::with('distributor')->orderBy('stok', 'asc')->limit(3)->get();
        return view('obat.pemesanan', compact('data'));
    }
}
