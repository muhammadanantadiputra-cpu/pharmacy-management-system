<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Distributor;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class DistributorController extends Controller
{
    /**
     * Tampilkan form tambah distributor
     */
    public function create(): View
    {
        return view('distributor.create');
    }

    /**
     * Simpan distributor baru
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => 'required|unique:distributor,kode_distributor',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'telp' => 'required',
        ]);

        Distributor::create([
            'kode_distributor' => $request->id,
            'nama_distributor' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telp,
        ]);

        return redirect()->route('admin.index')->with('success', 'Data distributor berhasil disimpan');
    }

    /**
     * Tampilkan form edit distributor
     */
    public function edit($id): View
    {
        $distributor = Distributor::findOrFail($id);
        return view('distributor.edit', compact('distributor'));
    }

    /**
     * Simpan hasil edit distributor
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email',
            'telp' => 'required',
        ]);

        $distributor = Distributor::findOrFail($id);

        $distributor->update([
            'nama_distributor' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telp,
        ]);

        return redirect()->route('admin.index')->with('success', 'Data distributor berhasil diperbarui');
    }

    /**
     * Hapus distributor
     */
    public function destroy($id): RedirectResponse
    {
        $distributor = Distributor::findOrFail($id);
        $distributor->delete();

        return redirect()->route('admin.index')->with('success', 'Data distributor berhasil dihapus');
    }
}
