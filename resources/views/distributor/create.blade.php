@extends('layout.menu')

@section('content')
<h3 style="text-align: center; color: #1B3C53;">Tambah Distributor</h3>

<div class="form-container">
    <form action="{{ route('distributor.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="id">Kode Distributor</label>
            <input type="text" name="id" id="id" value="{{ old('id') }}" required>
            @error('id') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="nama">Nama Distributor</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" required>
            @error('nama') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" required>
            @error('alamat') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="telp">Telepon</label>
            <input type="text" name="telp" id="telp" value="{{ old('telp') }}" required>
            @error('telp') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div style="text-align: center;">
            <button type="submit" class="button">Simpan</button>
            <a href="{{ route('admin.index') }}" class="button cancel">Batal</a>
        </div>
    </form>
</div>
@endsection
