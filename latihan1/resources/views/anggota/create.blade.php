@extends('layouts.app')

@section('title', 'Tambah Anggota')

@section('content')
    <div class="mx-auto max-w-3xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="{{ route('user.anggota.index') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-800">
                &larr; Kembali ke daftar anggota
            </a>
            <div class="mt-3 flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">
                <div>
                    <h1 class="text-2xl font-semibold text-gray-900">Tambah Anggota</h1>
                    <p class="mt-1 text-sm text-gray-600">Lengkapi data anggota berikut.</p>
                </div>

                @if ($errors->any())
                    <div class="rounded-md border border-red-300 bg-red-50 p-4 text-sm text-red-700 sm:max-w-sm" role="alert">
                        <p class="font-semibold">Periksa kembali data yang diisi:</p>
                        <ul class="mt-1 list-inside list-disc space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <form action="{{ route('user.anggota.store') }}" method="POST" novalidate class="space-y-5 rounded-lg bg-white p-6 shadow-sm">
            @csrf

            <div>
                <label for="nama" class="mb-1 block text-sm font-medium text-gray-700">Nama Anggota</label>
                <input id="nama" type="text" name="nama" value="{{ old('nama') }}" required
                    class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            </div>

            <div>
                <label for="alamat" class="mb-1 block text-sm font-medium text-gray-700">Alamat</label>
                <textarea id="alamat" name="alamat" rows="3" required
                    class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">{{ old('alamat') }}</textarea>
            </div>

            <div>
                <label for="no_telp" class="mb-1 block text-sm font-medium text-gray-700">Nomor Telepon</label>
                <input id="no_telp" type="tel" name="no_telp" value="{{ old('no_telp') }}" required
                    class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            </div>

            <div>
                <label for="tgl_lhr" class="mb-1 block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input id="tgl_lhr" type="date" name="tgl_lhr" value="{{ old('tgl_lhr') }}" required
                    class="w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="inline-flex justify-center rounded-md bg-indigo-600 px-4 py-2 font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Simpan Anggota
                </button>
            </div>
        </form>
    </div>
@endsection
