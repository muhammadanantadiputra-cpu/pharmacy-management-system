@extends('layout.menu')

@section('content')
<h3 align="center">Laporan Obat Stok Terendah</h3>

<table border="1" width="80%" align="center">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Obat</th>
            <th>Nama Obat</th>
            <th>Stok</th>
            <th>Distributor</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->kode_obat }}</td>
            <td>{{ $item->nama_obat }}</td>
            <td>{{ $item->stok }}</td>
            <td>{{ optional($item->distributor)->nama_distributor ?? '-' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
