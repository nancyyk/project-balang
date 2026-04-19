<?php ob_start(); ?>

<?php
$id = $_GET['id'] ?? 1;
$showClaimModal = isset($_GET['claim']) && $_GET['claim']=='open';

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

<div class="bg-white min-h-screen py-12">

<div class="max-w-7xl mx-auto px-6">

<!-- BACK -->
<a href="?page=home"
class="inline-flex items-center gap-2 text-blue-600 font-medium mb-8 hover:text-green-700">

<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round"
stroke-width="2" d="M15 19l-7-7 7-7"/>
</svg>

Kembali
</a>


<div class="grid lg:grid-cols-2 gap-12">

<!-- IMAGE -->
<div class="bg-white border rounded-2xl overflow-hidden shadow-sm">
<img src="<?= $itemData['image'] ?>"
class="w-full h-[420px] object-cover">
</div>


<!-- DETAIL -->
<div class="space-y-8">

<!-- TITLE -->
<div class="flex justify-between items-start">

<h1 class="text-3xl font-bold text-slate-900">
<?= $itemData['title'] ?>
</h1>

<span class="px-4 py-1 text-sm rounded-full font-medium
<?= $itemData['status']=='Hilang'
? 'bg-red-100 text-red-700 border border-red-300'
: 'bg-green-100 text-green-700 border border-green-300' ?>">
<?= $itemData['status'] ?>
</span>

</div>


<!-- DESCRIPTION -->
<div>
<h2 class="font-semibold text-lg text-slate-800 mb-2">
Deskripsi
</h2>

<p class="text-slate-600 leading-relaxed">
<?= $itemData['description'] ?>
</p>
</div>


<!-- INFO CARD -->
<div class="border rounded-xl p-6 grid sm:grid-cols-3 gap-6 bg-slate-50">

<div>
<p class="text-xs text-slate-500">Lokasi</p>
<p class="font-semibold text-slate-800">
<?= $itemData['location'] ?>
</p>
</div>

<div>
<p class="text-xs text-slate-500">Tanggal</p>
<p class="font-semibold text-slate-800">
<?= $itemData['date'] ?>
</p>
</div>

<div>
<p class="text-xs text-slate-500">Waktu</p>
<p class="font-semibold text-slate-800">
<?= $itemData['time'] ?>
</p>
</div>

</div>


<!-- REPORTER -->
<div class="border rounded-xl p-6 bg-white">

<h3 class="font-semibold text-slate-800 mb-4">
Dilaporkan Oleh
</h3>

<p class="text-slate-900 font-semibold">
<?= $itemData['reporter']['name'] ?>
</p>

<p class="text-green-600 text-sm font-medium">
<?= $itemData['reporter']['phone'] ?>
</p>

</div>


<!-- BUTTON -->
<div class="flex gap-4 pt-2">

<a href="?page=detail&id=<?=$id?>&claim=open"
class="flex-1 text-center bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition">

<?= $itemData['status']=='Hilang'
? 'Klaim Barang'
: 'Hubungi Pelapor' ?>

</a>

<button
class="flex-1 border border-red-400 text-red-600 py-3 rounded-lg font-semibold hover:bg-red-50 transition">
Tolak
</button>

</div>

</div>
</div>

</div>
</div>


<!-- MODAL CLAIM -->
<?php if($showClaimModal): ?>

<div class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">

<div class="bg-white rounded-2xl p-8 w-full max-w-md shadow-xl">

<h2 class="text-xl font-bold text-slate-900 mb-3">
Klaim Barang
</h2>

<p class="text-slate-600 mb-6">
Anda akan mengklaim:
<b><?= $itemData['title'] ?></b>
</p>

<div class="flex gap-3">

<a href="?page=detail&id=<?=$id?>"
class="flex-1 text-center border py-2 rounded-lg">
Batal
</a>

<button
class="flex-1 bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">
Kirim Klaim
</button>

</div>

</div>
</div>

<?php endif; ?>


<?php
$content = ob_get_clean();
require 'views/layouts/main.php';
?>