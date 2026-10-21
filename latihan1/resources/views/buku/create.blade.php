@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<div class="mx-auto max-w-3xl px-4 py-8 sm:px-6 lg:px-8">
    <h1 class="mb-6 text-2xl font-semibold text-gray-900">Tambah Buku</h1>

    <form action="{{ route('admin.buku.store') }}" method="POST" class="space-y-5 rounded-lg bg-white p-6 shadow-sm">
        @if ($errors->any())
            <div class="rounded-md border border-red-300 bg-red-50 p-4 text-sm text-red-700" role="alert">
                <ul class="list-inside list-disc space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf

        <div>
            <label for="kode_buku" class="mb-1 block text-sm font-medium text-gray-700">Kode Buku</label>
            <input id="kode_buku" type="text" name="kode_buku" value="{{ old('kode_buku') }}" class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
        </div>

        <div>
            <label for="judul" class="mb-1 block text-sm font-medium text-gray-700">Judul Buku</label>
            <input id="judul" type="text" name="judul" value="{{ old('judul') }}" required class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
        </div>

        <div>
            <label for="penulis" class="mb-1 block text-sm font-medium text-gray-700">Penulis</label>
            <input id="penulis" type="text" name="penulis" value="{{ old('penulis') }}" required class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
        </div>

        <div>
            <label for="penerbit" class="mb-1 block text-sm font-medium text-gray-700">Penerbit</label>
            <input id="penerbit" type="text" name="penerbit" value="{{ old('penerbit') }}" required class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
        </div>

        <div>
            <label for="tahun_terbit" class="mb-1 block text-sm font-medium text-gray-700">Tahun Terbit</label>
            <input id="tahun_terbit" type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}" required class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
        </div>

        <div>
            <label for="stok" class="mb-1 block text-sm font-medium text-gray-700">Stok</label>
            <input id="stok" type="number" name="stok" value="{{ old('stok') }}" required class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
        </div>

        <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 px-4 py-2 font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Simpan
        </button>
    </form>
</div>
@endsection