@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
    <h1>Daftar Anggota</h1>
    <a href="{{ route('user.anggota.create') }}">+ Tambah Anggota</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Tgl Lahir</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggota as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->no_telp }}</td>
                    <td>{{ $item->tgl_lhr }}</td>
                    <td>
                        <form action="{{ route('user.anggota.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin mau hapus anggota ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                        <a href="{{ route('user.anggota.edit', $item->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection