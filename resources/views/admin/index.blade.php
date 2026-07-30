@extends('layout.menu')

@section('content')
<h3 align="center">DAFTAR OBAT</h3>

<p align="center">
    <a href="{{ route('obat.create') }}" class="button">+ Tambah Obat</a>
</p>


<table border="1" width="70%" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Obat</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Distributor</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach($obat as $item)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $item->kode_obat }}</td>
            <td>{{ $item->nama_obat }}</td>
            <td>{{ $item->jenis_obat }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ optional($item->distributor)->nama_distributor ?? '-' }}</td>
<td>
    <a href="{{ route('obat.edit', $item->kode_obat) }}" class="button">Edit</a>
    <form action="{{ route('obat.destroy', $item->kode_obat) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="button" style="background-color: red;" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
    </form>
</td>

        </tr>
        @endforeach
    </tbody>
</table>

<hr>

<h3 align="center">DAFTAR DISTRIBUTOR</h3>

<p align="center">
    <a href="{{ route('distributor.create') }}" class="button">+ Tambah Distributor</a>
</p>

<table border="1" width="70%" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach($distributor as $d)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $d->kode_distributor }}</td>
            <td>{{ $d->nama_distributor }}</td>
            <td>{{ $d->alamat }}</td>
            <td>{{ $d->email }}</td>
            <td>{{ $d->telepon }}</td>
            <td>
    <a href="{{ route('distributor.edit', $d->kode_distributor) }}" class="button">Edit</a>
    <form action="{{ route('distributor.destroy', $d->kode_distributor) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="button" style="background-color: red;" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
    </form>
</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection
