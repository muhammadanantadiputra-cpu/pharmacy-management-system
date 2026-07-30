@extends('layout.menu')

@section('content')
<h3 style="text-align: center; color: #1B3C53;">Tambah Obat</h3>

<div class="form-container">
    <form action="{{ route('obat.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="id">Kode Obat</label>
            <input type="text" name="id" id="id" value="{{ old('id') }}" required>
            @error('id') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="nama">Nama Obat</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required>
            @error('nama') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="text" name="jenis" id="jenis" value="{{ old('jenis') }}" required>
            @error('jenis') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" value="{{ old('harga') }}" required>
            @error('harga') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" id="stok" value="{{ old('stok') }}" required>
            @error('stok') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="kode_distributor">Distributor</label>
            <select name="kode_distributor" id="kode_distributor" required>
                <option value="">-- Pilih Distributor --</option>
                @foreach($distributor as $d)
                    <option value="{{ $d->kode_distributor }}" {{ old('kode_distributor') == $d->kode_distributor ? 'selected' : '' }}>
                        {{ $d->nama_distributor }}
                    </option>
                @endforeach
            </select>
            @error('kode_distributor') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div style="text-align: center;">
            <button type="submit" class="button">Simpan</button>
            <a href="{{ route('admin.index') }}" class="button cancel">Batal</a>
        </div>
    </form>
</div>
@endsection
