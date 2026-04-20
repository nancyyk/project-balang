<?php ob_start(); ?>

<?php
$id = $_GET['id'] ?? 1;

$itemData = [
    "id"=>1,
    "title"=>"Sepatu Hiking",
    "status"=>"Hilang",
    "image"=>"https://via.placeholder.com/600x400",
    "description"=>"Sepatu warna abu hitam digunakan untuk kegiatan hiking.",
    "location"=>"Lembang Terawah",
    "date"=>"Sabtu, 9 Maret 2026",
    "time"=>"10:00 WIB",
    "reporter"=>[
        "name"=>"Alfan",
        "phone"=>"+62 865 1432 2581"
    ]
];
?>

<div class="min-h-screen py-10 bg-gradient-to-br from-gray-50 via-purple-50 to-gray-100">

<div class="max-w-6xl mx-auto px-6">

<a href="?page=home"
class="inline-flex items-center gap-2 text-purple-700 font-medium mb-6 hover:text-purple-900 transition">
Kembali ke beranda
</a>

<div class="grid lg:grid-cols-5 gap-10">

<!-- IMAGE -->
<div class="lg:col-span-3">
    <div class="rounded-xl overflow-hidden border-2 border-purple-300 bg-white shadow-sm">
        <img src="<?= $itemData['image'] ?>"
             class="w-full h-[460px] object-cover">
    </div>
</div>

<!-- RIGHT PANEL -->
<div class="lg:col-span-2 space-y-6">

    <!-- TITLE CARD -->
    <div class="bg-white rounded-xl p-5 border-2 border-purple-300 shadow-sm hover:shadow-md transition">
        <div class="flex justify-between items-start gap-4">

            <h1 class="text-2xl font-bold text-gray-900">
                <?= $itemData['title'] ?>
            </h1>

            <span class="px-3 py-1 text-xs rounded-full font-semibold
            <?= $itemData['status']=='Hilang'
            ? 'bg-red-100 text-red-600'
            : 'bg-green-100 text-green-600' ?>">
                <?= $itemData['status'] ?>
            </span>

        </div>
    </div>


    <!-- DESCRIPTION CARD -->
    <div class="bg-white rounded-xl p-5 border-2 border-purple-300 shadow-sm hover:shadow-md transition">

        <h2 class="text-sm font-bold text-purple-700 mb-2">
            Deskripsi Barang
        </h2>

        <p class="text-gray-700 text-sm leading-relaxed">
            <?= $itemData['description'] ?>
        </p>

    </div>


    <!-- INFO CARD -->
<div class="bg-white rounded-xl p-5 space-y-4 border-2 border-purple-400 shadow-sm">

    <div class="border-b border-purple-200 pb-3">
        <p class="text-xs text-purple-600 font-semibold uppercase tracking-wide">Lokasi</p>
        <p class="text-gray-800 font-medium mt-1"><?= $itemData['location'] ?></p>
    </div>

    <div class="border-b border-purple-200 pb-3">
        <p class="text-xs text-purple-600 font-semibold uppercase tracking-wide">Tanggal</p>
        <p class="text-gray-800 font-medium mt-1"><?= $itemData['date'] ?></p>
    </div>

    <div>
        <p class="text-xs text-purple-600 font-semibold uppercase tracking-wide">Waktu</p>
        <p class="text-gray-800 font-medium mt-1"><?= $itemData['time'] ?></p>
    </div>

</div>


    <!-- REPORTER CARD -->
    <div class="bg-white rounded-xl p-5 border-2 border-purple-300 shadow-sm hover:shadow-md transition">

        <h3 class="text-sm font-bold text-purple-700 mb-3">
            Dilaporkan Oleh
        </h3>

        <p class="text-gray-900 font-semibold">
            <?= $itemData['reporter']['name'] ?>
        </p>

        <p class="text-purple-700 text-sm font-medium">
            <?= $itemData['reporter']['phone'] ?>
        </p>

    </div>


    <!-- ACTION -->
    <div class="flex gap-3">

        <a href="?page=detail&id=<?=$id?>&claim=open"
           class="flex-1 text-center bg-purple-700 text-white py-3 rounded-lg font-semibold
           border-2 border-purple-800 shadow-sm hover:bg-purple-800 hover:shadow-md transition">

            <?= $itemData['status']=='Hilang'
            ? 'Klaim Barang'
            : 'Hubungi Pelapor' ?>

        </a>

        <button
            class="px-5 border-2 border-red-300 text-red-600 py-3 rounded-lg font-semibold
            hover:bg-red-50 transition">
            Tolak
        </button>

    </div>

</div>

</div>
</div>
</div>

<?php
$content = ob_get_clean();
require 'views/layouts/main.php';
?>