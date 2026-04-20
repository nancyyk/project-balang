<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BALANG</title>

<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-white via-purple-50 to-white text-gray-800">


<!-- ================= NAVBAR ================= -->
<nav class="fixed w-full z-50 backdrop-blur bg-white/70 border-b border-purple-100">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-2xl font-extrabold text-purple-700 tracking-wide">
            BALANG
        </h1>

        <div class="flex gap-8 items-center text-sm">

            <a href="#" class="text-gray-700 hover:text-purple-700 transition">Home</a>
            <a href="#fitur" class="text-gray-700 hover:text-purple-700 transition">Fitur</a>
            <a href="#cara" class="text-gray-700 hover:text-purple-700 transition">Cara Kerja</a>

            <a href="?page=login"
               class="px-5 py-2 bg-purple-700 text-white rounded-lg hover:bg-purple-800 shadow-sm transition">
                Masuk
            </a>

        </div>

    </div>
</nav>


<!-- ================= HERO ================= -->
<section class="pt-36 pb-28 text-center">

<div class="max-w-4xl mx-auto px-6">

<h1 class="text-5xl font-extrabold mb-6 leading-tight">
Temukan Barang Hilang <br>
<span class="text-purple-700">Lebih Cepat & Mudah</span>
</h1>

<p class="text-gray-600 text-lg mb-10">
BALANG membantu masyarakat melaporkan dan menemukan barang hilang dalam satu sistem yang terpusat dan real-time.
</p>

<a href="?page=login"
   class="px-10 py-3 bg-purple-700 text-white rounded-xl hover:bg-purple-800 shadow-md hover:shadow-lg transition">
Mulai Sekarang
</a>

</div>
</section>


<!-- ================= FITUR ================= -->
<section id="fitur" class="py-24 bg-white">

<div class="max-w-7xl mx-auto px-6">

<h2 class="text-4xl font-bold text-center mb-16 text-purple-700">
Fitur BALANG
</h2>

<div class="grid md:grid-cols-3 gap-8">

<div class="border-2 border-purple-200 rounded-2xl p-8 bg-white hover:border-purple-400 hover:shadow-lg transition">
<h3 class="font-bold text-lg mb-3 text-purple-700">Lapor Barang Hilang</h3>
<p class="text-gray-600 text-sm">
Laporkan barang hilang dengan detail lengkap dan mudah.
</p>
</div>

<div class="border-2 border-purple-200 rounded-2xl p-8 bg-white hover:border-purple-400 hover:shadow-lg transition">
<h3 class="font-bold text-lg mb-3 text-purple-700">Barang Ditemukan</h3>
<p class="text-gray-600 text-sm">
Melihat barang yang ditemukan oleh pengguna lain.
</p>
</div>

<div class="border-2 border-purple-300 rounded-2xl p-8 bg-white hover:border-purple-500 hover:shadow-lg transition">
<h3 class="font-bold text-lg mb-3 text-purple-700">Hubungi Penemu</h3>
<p class="text-gray-600 text-sm">
Komunikasi langsung antara pemilik dan penemu barang.
</p>
</div>

</div>

</div>
</section>


<!-- ================= CARA KERJA ================= -->
<section id="cara" class="py-24 bg-purple-50">

<div class="max-w-7xl mx-auto px-6">

<h2 class="text-4xl font-bold text-center mb-16 text-purple-700">
Cara Kerja
</h2>

<div class="grid md:grid-cols-4 gap-6 text-center">

<?php
$steps = [
"Daftar",
"Lapor",
"Pencarian",
"Ambil"
];
?>

<?php foreach ($steps as $i => $step): ?>
<div class="bg-white border-2 border-purple-200 rounded-2xl p-6 hover:shadow-lg hover:-translate-y-1 transition">
    <div class="text-purple-700 font-bold text-lg mb-2">
        <?= $i+1 ?>. <?= $step ?>
    </div>
    <p class="text-gray-600 text-sm">
        Proses sederhana untuk membantu menemukan barang.
    </p>
</div>
<?php endforeach; ?>

</div>

</div>
</section>


<!-- ================= CTA ================= -->
<section class="py-24 text-center bg-white">

<h2 class="text-4xl font-bold mb-6 text-purple-700">
Siap Menggunakan BALANG?
</h2>

<p class="text-gray-600 mb-8">
Mulai sekarang dan bantu temukan barang hilang lebih cepat.
</p>

<a href="?page=login"
   class="px-10 py-3 bg-purple-700 text-white rounded-xl hover:bg-purple-800 shadow-md transition">
Masuk Sekarang
</a>

</section>


<!-- ================= FOOTER ================= -->
<footer class="bg-purple-900 text-purple-100 py-8 text-center text-sm">
BALANG © <?= date('Y'); ?> — All rights reserved
</footer>

</body>
</html>