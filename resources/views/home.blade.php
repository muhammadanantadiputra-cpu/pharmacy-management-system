@extends('layout.menu')

@section('content')
<h3 align="center">DAFTAR OBAT</h3>

<form method="GET" action="{{ route('home') }}" align="center">
    <input type="text" name="cari" placeholder="Cari Nama Obat..." value="{{ request('cari') }}">
    <button type="submit">Cari</button>
</form>

<br>

@if($obat->count() === 0)
    <p align="center">Tidak ada data ditemukan.</p>
@else
<table border="1" width="70%" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Obat</th>
            <th>Nama Obat</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Distributor</th>
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
            </tr>
        @endforeach
    </tbody>
</table>
@endif

<p align="center">Total: {{ $obat->count() }}</p>
@endsection
