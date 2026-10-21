@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('sidebar')
    <h3>Navigation Menu</h3>
    <ul>
        <li><a href="{{ route('admin.buku.index') }}">Menu Buku</a></li>
        <li><a href="{{ route('user.anggota.index') }}">Menu Anggota</a></li>
    </ul>
@endsection

@section('content')
    <h2>Daftar Buku</h2>

    <!-- Link menuju halaman form tambah buku -->
    <a href="{{ route('admin.buku.create') }}">+ Tambah Buku</a>
    <br><br>

    @foreach ($buku as $item)
        <div style="margin-bottom: 20px; border-bottom: 1px solid #ccc; padding-bottom: 10px;">
            <x-buku-card :buku="$item" />

            <a href="{{ route('admin.buku.edit', $item->id) }}">Edit</a>

            <form action="{{ route('admin.buku.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </div>
    @endforeach
@endsection