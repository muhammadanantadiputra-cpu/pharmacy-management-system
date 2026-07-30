@extends('layout.menu')

@section('content')
<h3 align="center">Edit Obat</h3>

<form action="{{ route('obat.update', $obat->kode_obat) }}" method="POST" style="width: 60%; margin: auto;">
    @csrf
    @method('PUT')
    <table width="100%" border="0">
        <tr>
            <td>Kode Obat</td>
            <td><input type="text" value="{{ $obat->kode_obat }}" disabled></td>
        </tr>
        <tr>
            <td>Nama Obat</td>
            <td><input type="text" name="nama" value="{{ $obat->nama_obat }}" required></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td><input type="text" name="jenis" value="{{ $obat->jenis_obat }}" required></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" value="{{ $obat->harga }}" required></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="number" name="stok" value="{{ $obat->stok }}" required></td>
        </tr>
        <tr>
            <td>Distributor</td>
            <td>
                <select name="kode_distributor" required>
                    <option value="">-- Pilih Distributor --</option>
                    @foreach($distributor as $d)
                        <option value="{{ $d->kode_distributor }}" {{ $obat->kode_distributor == $d->kode_distributor ? 'selected' : '' }}>
                            {{ $d->nama_distributor }}
                        </option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit">Simpan</button>
                <a href="{{ route('admin.index') }}">Batal</a>
            </td>
        </tr>
    </table>
</form>
@endsection
