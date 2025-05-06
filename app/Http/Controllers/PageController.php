<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $kamar = [
        [
            'tipe_kamar' => 'Standard',
            'deskripsi' => 'Kamar nyaman untuk 2 orang. Desain sederhana dan fungsional, tanpa fasilitas tambahan, tetapi ada internet dan AC',
            'harga' => '150000',
            'gambar' => 'https://sealy.co.id/wp-content/uploads/sites/2/2024/07/1563509727_KW-Springbed-Paling-Bagus.jpg',
        ],
        [
            'tipe_kamar' => 'Standard',
            'deskripsi' => 'Kamar nyaman untuk 2 orang. Desain sederhana dan fungsional, tanpa fasilitas tambahan, tetapi ada internet dan AC',
            'harga' => '200000',
            'gambar' => 'https://sealy.co.id/wp-content/uploads/sites/2/2024/07/1563509727_KW-Springbed-Paling-Bagus.jpg',
        ],
        [
            'tipe_kamar' => 'Standard',
            'deskripsi' => 'Kamar nyaman untuk 2 orang. Desain sederhana dan fungsional, tanpa fasilitas tambahan, tetapi ada internet dan AC',
            'harga' => '250000',
            'gambar' => 'https://sealy.co.id/wp-content/uploads/sites/2/2024/07/1563509727_KW-Springbed-Paling-Bagus.jpg',
        ],
        [
            'tipe_kamar' => 'Standard',
            'deskripsi' => 'Kamar nyaman untuk 2 orang. Desain sederhana dan fungsional, tanpa fasilitas tambahan, tetapi ada internet dan AC',
            'harga' => '300000',
            'gambar' => 'https://sealy.co.id/wp-content/uploads/sites/2/2024/07/1563509727_KW-Springbed-Paling-Bagus.jpg',
        ],
        [
            'tipe_kamar' => 'Standard',
            'deskripsi' => 'Kamar nyaman untuk 2 orang. Desain sederhana dan fungsional, tanpa fasilitas tambahan, tetapi ada internet dan AC',
            'harga' => '350000',
            'gambar' => 'https://sealy.co.id/wp-content/uploads/sites/2/2024/07/1563509727_KW-Springbed-Paling-Bagus.jpg',
        ],
        [
            'tipe_kamar' => 'Deluxe',
            'deskripsi' => 'Kamar luas dengan pemandangan taman. Selain itu, desain elegan, tempat tidur premium dan kamar mandi nyaman.',
            'harga' => '550000',
            'gambar' => 'https://mbtech.info/asset/uploads/gallery/kamar-hotel-plataran-3.jpg',
        ],
        [
            'tipe_kamar' => 'Deluxe',
            'deskripsi' => 'Kamar luas dengan pemandangan taman. Selain itu, desain elegan, tempat tidur premium dan kamar mandi nyaman.',
            'harga' => '600000',
            'gambar' => 'https://mbtech.info/asset/uploads/gallery/kamar-hotel-plataran-3.jpg',
        ],
        [
            'tipe_kamar' => 'Deluxe',
            'deskripsi' => 'Kamar luas dengan pemandangan taman. Selain itu, desain elegan, tempat tidur premium dan kamar mandi nyaman.',
            'harga' => '650000',
            'gambar' => 'https://mbtech.info/asset/uploads/gallery/kamar-hotel-plataran-3.jpg',
        ],
        [
            'tipe_kamar' => 'Deluxe',
            'deskripsi' => 'Kamar luas dengan pemandangan taman. Selain itu, desain elegan, tempat tidur premium dan kamar mandi nyaman.',
            'harga' => '700000',
            'gambar' => 'https://mbtech.info/asset/uploads/gallery/kamar-hotel-plataran-3.jpg',
        ],
        [
            'tipe_kamar' => 'Deluxe',
            'deskripsi' => 'Kamar luas dengan pemandangan taman. Selain itu, desain elegan, tempat tidur premium dan kamar mandi nyaman.',
            'harga' => '750000',
            'gambar' => 'https://mbtech.info/asset/uploads/gallery/kamar-hotel-plataran-3.jpg',
        ],
        [
            'tipe_kamar' => 'Suite',
            'deskripsi' => 'Kamar mewah dengan ruang tamu pribadi. Selain itu, desain interior dan material kelas atas dan perabotan mewah. ',
            'harga' => '1000000',
            'gambar' => 'https://iefasemarang.com/wp-content/uploads/2021/03/Jendela-Dan-Cermin-hotel-bintang-51.jpg',
        ],
        [
            'tipe_kamar' => 'Suite',
            'deskripsi' => 'Kamar mewah dengan ruang tamu pribadi. Selain itu, desain interior dan material kelas atas dan perabotan mewah. ',
            'harga' => '1500000',
            'gambar' => 'https://iefasemarang.com/wp-content/uploads/2021/03/Jendela-Dan-Cermin-hotel-bintang-51.jpg',
        ],
        [
            'tipe_kamar' => 'Suite',
            'deskripsi' => 'Kamar mewah dengan ruang tamu pribadi. Selain itu, desain interior dan material kelas atas dan perabotan mewah. ',
            'harga' => '2500000',
            'gambar' => 'https://iefasemarang.com/wp-content/uploads/2021/03/Jendela-Dan-Cermin-hotel-bintang-51.jpg',
        ],
        [
            'tipe_kamar' => 'Suite',
            'deskripsi' => 'Kamar mewah dengan ruang tamu pribadi. Selain itu, desain interior dan material kelas atas dan perabotan mewah. ',
            'harga' => '3000000',
            'gambar' => 'https://iefasemarang.com/wp-content/uploads/2021/03/Jendela-Dan-Cermin-hotel-bintang-51.jpg',
        ],
        [
            'tipe_kamar' => 'Suite',
            'deskripsi' => 'Kamar mewah dengan ruang tamu pribadi. Selain itu, desain interior dan material kelas atas dan perabotan mewah. ',
            'harga' => '3500000',
            'gambar' => 'https://iefasemarang.com/wp-content/uploads/2021/03/Jendela-Dan-Cermin-hotel-bintang-51.jpg',
        ],
    ];

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if ($username === 'dhira' && $password === 'bebas') {
            $request->session()->put('logged_in', true);
            return redirect()->route('dashboard', ['username' => $username]);
        }

        return redirect('/login')->withErrors(['login' => 'Username atau password salah.']);
    }

    public function showDashboard(Request $request)
    {
        if (!session('logged_in')) return redirect('/login');

        $kamar = $this->kamar;
        $username = $request->query('username');

        return view('dashboard', compact('kamar', 'username'));
    }

    public function showPengelolaan()
    {
        if (!session('logged_in')) return redirect('/login');
        $data = $this->kamar;
        return view('pengelolaan', compact('data'));
    }

    public function showProfile()
    {
        if (!session('logged_in')) return redirect('/login');

        $data = [
            'nama_lengkap' => 'Nadhira Salzabilla',
            'username' => 'dhira',
            'email' => 'nadhira@gmail.com',
            'no_hp' => '081234567890',
            'alamat' => 'Jl. Mawar No.15',
        ];
        return view('profile', $data);
    }
}
