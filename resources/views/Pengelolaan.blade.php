@extends('layouts.app')

@section('title', 'Pengelolaan Kamar Hotel')

@section('content')
    <h1 class="title">Pengelolaan Kamar Hotel</h1>

    <table>
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Tipe Kamar</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td><img src="{{ $item['gambar'] }}" alt="{{ $item['tipe_kamar'] }}"></td>
                    <td>{{ $item['tipe_kamar'] }}</td>
                    <td>{{ $item['deskripsi'] }}</td>
                    <td>Rp {{ number_format($item['harga'], 0, ',', '.') }}</td>
                    <td class="actions">
                        <button class="edit">Edit</button>
                        <button class="delete">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
