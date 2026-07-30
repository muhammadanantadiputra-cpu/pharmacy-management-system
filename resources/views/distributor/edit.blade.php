@extends('layout.menu')

@section('content')
<h3 align="center">Edit Distributor</h3>

<form action="{{ route('distributor.update', $distributor->kode_distributor) }}" method="POST" style="width: 60%; margin: auto;">
    @csrf
    @method('PUT')
    <table width="100%" border="0">
        <tr>
            <td>Kode Distributor</td>
            <td><input type="text" name="id" value="{{ $distributor->kode_distributor }}" readonly></td>
        </tr>
        <tr>
            <td>Nama Distributor</td>
            <td><input type="text" name="nama" value="{{ $distributor->nama_distributor }}" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="{{ $distributor->alamat }}" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="{{ $distributor->email }}" required></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td><input type="text" name="telp" value="{{ $distributor->telepon }}" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit">Update</button>
                <a href="{{ route('admin.index') }}">Batal</a>
            </td>
        </tr>
    </table>
</form>
@endsection
