<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BALANG</title>

<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- ================= NAVBAR ================= -->
<nav class="fixed w-full bg-white border-b z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-xl font-bold text-blue-600">
            BALANG
        </h1>

        <div class="flex gap-8 items-center">
            <a href="#" class="hover:text-blue-600">Home</a>
            <a href="#fitur" class="hover:text-blue-600">Fitur</a>
            <a href="#cara" class="hover:text-blue-600">Cara Kerja</a>

            <a href="?page=login"
               class="px-5 py-2 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50">
                Masuk
            </a>
        </div>

    </div>
</nav>


<!-- ================= HERO ================= -->
<section class="pt-32 pb-24 bg-white border-b">

<div class="max-w-5xl mx-auto px-6 text-center">

<h1 class="text-5xl font-bold mb-6">
Temukan Barang Hilang Dengan Mudah
</h1>

<p class="text-gray-600 text-lg mb-10">
BALANG membantu pengguna melaporkan barang hilang dan menemukan kembali barang yang ditemukan orang lain dalam satu sistem terpusat.
</p>

<a href="?page=login"
   class="px-10 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 font-semibold">
Mulai Sekarang
</a>

</div>
</section>


<!-- ================= FITUR ================= -->
<section id="fitur" class="py-24 bg-gray-50 border-b">

<div class="max-w-7xl mx-auto px-6">

<h2 class="text-4xl font-bold text-center mb-16">
Fitur BALANG
</h2>

<div class="grid md:grid-cols-3 gap-8">

<div class="bg-white border rounded-xl p-8 hover:border-blue-600 transition">
<h3 class="font-bold text-lg mb-3">Lapor Barang Hilang</h3>
<p class="text-gray-600">
Pengguna dapat melaporkan barang hilang lengkap dengan informasi detail.
</p>
</div>

<div class="bg-white border rounded-xl p-8 hover:border-blue-600 transition">
<h3 class="font-bold text-lg mb-3">Barang Ditemukan</h3>
<p class="text-gray-600">
Menampilkan daftar barang temuan yang dilaporkan pengguna lain.
</p>
</div>

<div class="bg-white border rounded-xl p-8 hover:border-blue-600 transition">
<h3 class="font-bold text-lg mb-3">Hubungi Penemu</h3>
<p class="text-gray-600">
Mempermudah komunikasi antara pemilik dan penemu barang.
</p>
</div>

</div>

</div>
</section>


<!-- ================= CARA KERJA ================= -->
<section id="cara" class="py-24 bg-white border-b">

<div class="max-w-7xl mx-auto px-6">

<h2 class="text-4xl font-bold text-center mb-16">
Cara Kerja
</h2>

<div class="grid md:grid-cols-4 gap-6 text-center">

<div class="border rounded-xl p-6">
<h3 class="font-bold mb-2">1. Daftar</h3>
<p class="text-gray-600 text-sm">Buat akun pengguna.</p>
</div>

<div class="border rounded-xl p-6">
<h3 class="font-bold mb-2">2. Lapor</h3>
<p class="text-gray-600 text-sm">Laporkan kehilangan atau temuan.</p>
</div>

<div class="border rounded-xl p-6">
<h3 class="font-bold mb-2">3. Pencarian</h3>
<p class="text-gray-600 text-sm">Cari barang sesuai kategori.</p>
</div>

<div class="border rounded-xl p-6">
<h3 class="font-bold mb-2">4. Ambil</h3>
<p class="text-gray-600 text-sm">Hubungi penemu dan ambil barang.</p>
</div>

</div>

</div>
</section>


<!-- ================= KEUNGGULAN ================= -->
<section class="py-24 bg-gray-50 border-b">

<div class="max-w-7xl mx-auto px-6">

<h2 class="text-4xl font-bold text-center mb-16">
Mengapa BALANG
</h2>

<div class="grid md:grid-cols-3 gap-8">

<div class="border rounded-xl p-6">
<h3 class="font-semibold mb-2">Terpusat</h3>
<p class="text-gray-600 text-sm">
Semua laporan berada dalam satu sistem.
</p>
</div>

<div class="border rounded-xl p-6">
<h3 class="font-semibold mb-2">Realtime</h3>
<p class="text-gray-600 text-sm">
Status barang diperbarui secara langsung.
</p>
</div>

<div class="border rounded-xl p-6">
<h3 class="font-semibold mb-2">Mudah Digunakan</h3>
<p class="text-gray-600 text-sm">
Antarmuka sederhana untuk semua pengguna.
</p>
</div>

</div>

</div>
</section>


<!-- ================= CTA ================= -->
<section class="py-24 bg-white text-center border-b">

<h2 class="text-4xl font-bold mb-6">
Mulai Gunakan BALANG
</h2>

<a href="?page=login"
   class="px-10 py-3 border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50 font-semibold">
Masuk Sekarang
</a>

</section>


<!-- ================= FOOTER ================= -->
<footer class="bg-gray-900 text-gray-400 py-8 text-center">
BALANG © <?= date('Y'); ?>
</footer>

</body>
</html>