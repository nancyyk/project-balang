<?php ob_start(); ?>

<?php
$status = $_GET['status'] ?? 'semua';

$laporan = [
    ["nama"=>"Charger","status"=>"pending","img"=>"assets/img/charger.png"],
    ["nama"=>"Boneka","status"=>"aktif","img"=>"assets/img/boneka.png"],
    ["nama"=>"Handphone","status"=>"selesai","img"=>"assets/img/hp.png"],
];

if ($status != "semua") {
    $laporan = array_filter($laporan, fn($l)=>$l['status']==$status);
}
?>

<div class="bg-white min-h-screen py-12">

<div class="max-w-7xl mx-auto px-6">

<!-- HEADER -->
<div class="mb-10">
    <h1 class="text-4xl font-bold text-slate-900">
        History Laporan
    </h1>
    <p class="text-slate-500 mt-2">
        Riwayat laporan barang kehilangan dan temuan
    </p>
</div>

<!-- STATISTIC -->
<div class="grid md:grid-cols-4 gap-6 mb-12">

<div class="bg-white border rounded-xl p-6 shadow-sm">
<p class="text-slate-500 text-sm">Total</p>
<h2 class="text-3xl font-bold text-slate-900">3</h2>
</div>

<div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
<p class="text-blue-600 text-sm">Aktif</p>
<h2 class="text-3xl font-bold text-blue-700">1</h2>
</div>

<div class="bg-red-50 border border-red-200 rounded-xl p-6">
<p class="text-red-600 text-sm">Pending</p>
<h2 class="text-3xl font-bold text-red-700">1</h2>
</div>

<div class="bg-emerald-50 border border-emerald-200 rounded-xl p-6">
<p class="text-emerald-600 text-sm">Selesai</p>
<h2 class="text-3xl font-bold text-emerald-700">1</h2>
</div>

</div>


<!-- FILTER -->
<div class="flex gap-8 border-b mb-10 text-sm font-medium">

<?php
$menu=['semua','aktif','pending','selesai'];
foreach($menu as $m):
?>

<a href="?page=history&status=<?=$m?>"
class="pb-3 transition
<?=$status==$m
? 'border-b-2 border-green-600 text-green-600'
: 'text-slate-400 hover:text-green-600'?>">
<?=ucfirst($m)?>
</a>

<?php endforeach; ?>

</div>


<!-- LIST HISTORY -->
<div class="grid lg:grid-cols-2 gap-8">

<?php if(empty($laporan)): ?>

<div class="col-span-2 text-center py-24">

<div class="w-20 h-20 mx-auto bg-slate-100 rounded-full flex items-center justify-center">

<!-- ICON BOX -->
<svg xmlns="http://www.w3.org/2000/svg"
class="w-10 h-10 text-slate-400"
fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
d="M3 7l9-4 9 4M4 10h16M5 10v8h14v-8"/>
</svg>

</div>

<h2 class="mt-6 text-xl font-semibold text-slate-700">
Belum ada laporan
</h2>

<p class="text-slate-400 text-sm">
Anda belum memiliki riwayat laporan
</p>

</div>

<?php endif; ?>


<?php foreach($laporan as $l): ?>

<div class="bg-white border rounded-2xl shadow-sm hover:shadow-md transition p-6 flex gap-5">

<!-- IMAGE -->
<img src="<?=$l['img']?>"
class="w-28 h-28 rounded-xl object-cover border">

<!-- CONTENT -->
<div class="flex-1">

<div class="flex justify-between items-center">

<h3 class="font-semibold text-lg text-slate-900">
<?=$l['nama']?>
</h3>

<?php
$statusClass = match($l['status']){
'aktif' => 'bg-green-100 text-green-700 border border-green-300',
'pending' => 'bg-red-100 text-red-700 border border-red-300',
'selesai' => 'bg-emerald-100 text-emerald-700 border border-emerald-300',
};
?>

<span class="px-4 py-1 text-xs font-medium rounded-full <?=$statusClass?>">
<?=ucfirst($l['status'])?>
</span>

</div>

<p class="text-slate-500 text-sm mt-2">
Deskripsi barang singkat...
</p>

<div class="flex gap-6 text-xs text-slate-400 mt-4 items-center">

<!-- LOCATION ICON -->
<div class="flex items-center gap-1">
<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round"
stroke-width="1.5"
d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0L6.343 16.657A8 8 0 1117.657 16.657z"/>
</svg>
Kampus A
</div>

<!-- DATE ICON -->
<div class="flex items-center gap-1">
<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4"
fill="none" viewBox="0 0 24 24" stroke="currentColor">
<path stroke-linecap="round" stroke-linejoin="round"
stroke-width="1.5"
d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
</svg>
27 Maret
</div>

</div>

</div>
</div>

<?php endforeach; ?>

</div>

</div>
</div>

<?php
$content = ob_get_clean();
require 'views/layouts/main.php';
?>