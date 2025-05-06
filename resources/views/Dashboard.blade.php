@extends('layouts.app')

@section('title', 'Dashboard Hotel')

@section('content')
    <!-- Bagian Info Hotel -->
    <section class="hotel-info">
        <img src="https://cdn0-production-images-kly.akamaized.net/IyyXRhhKeG9RG1iheP16_oSj3fY=/1200x675/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/816952/original/009819900_1424831012-bali-2.jpg" alt="Hotel Uyey">
        <div class="hotel-description">
            <h1>Hotel UYEY</h1>
                @if($username)
                    <h2 class="welcome-message">Selamat datang, {{ $username }}!</h2>
                @endif
            <p>
                Hotel UYEY adalah tempat penginapan modern dan nyaman yang terletak di pusat kota. Dengan desain interior elegan, staf yang ramah, dan fasilitas lengkap seperti Wi-Fi cepat, restoran eksklusif, serta area lounge yang luas, kami memastikan setiap tamu mendapatkan pengalaman menginap terbaik. Baik untuk perjalanan bisnis maupun liburan keluarga, Hotel Uyey adalah pilihan sempurna bagi Anda yang menginginkan ketenangan dan kualitas dalam satu tempat.
            </p>
        </div>
    </section>

    <h2 class="title">Tipe Kamar Hotel</h2>

    <div class="card-container">
        @foreach ($kamar as $item)
            <div class="card">
                <img src="{{ $item['gambar'] }}" alt="{{ $item['tipe_kamar'] }}">
                <div class="card-body">
                    <h3>{{ $item['tipe_kamar'] }}</h3>
                    <p>{{ $item['deskripsi'] }}</p>
                    <p class="price">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
