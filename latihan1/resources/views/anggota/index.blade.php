@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold text-gray-900">Daftar Anggota</h1>
                <p class="mt-1 text-sm text-gray-600">Kelola data anggota perpustakaan.</p>
            </div>
            <a href="{{ route('user.anggota.create') }}"
                class="inline-flex items-center justify-center rounded-md bg-indigo-600 px-4 py-2 font-semibold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                + Tambah Anggota
            </a>
        </div>

        <div class="overflow-hidden rounded-lg bg-white shadow-sm ring-1 ring-gray-200">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-600">Nama</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-600">Alamat</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-600">No. Telepon</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-600">Tanggal Lahir</th>
                            <th scope="col" class="px-6 py-3 text-right text-xs font-semibold uppercase tracking-wide text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse ($anggota as $item)
                            <tr class="hover:bg-gray-50">
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">{{ $item->nama }}</td>
                                <td class="px-6 py-4 text-sm text-gray-600">{{ $item->alamat }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">{{ $item->no_telp }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-600">{{ $item->tgl_lhr }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-right text-sm">
                                    <div class="flex items-center justify-end gap-3">
                                        <a href="{{ route('user.anggota.edit', $item->id) }}" class="font-medium text-indigo-600 hover:text-indigo-800">Edit</a>
                                        <form action="{{ route('user.anggota.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus anggota ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-red-600 hover:text-red-800">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-sm text-gray-500">
                                    Belum ada data anggota.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection