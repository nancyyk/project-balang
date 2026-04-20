<?php ob_start(); ?>

<?php
$type = $_GET['type'] ?? 'kehilangan';
$status = $_GET['status'] ?? null; // success / error
?>

<div class="max-w-3xl mx-auto">

    <!-- HEADER -->
    <div class="mb-6">
        <a href="?page=home" class="text-purple-700 font-semibold hover:text-purple-900">← Kembali</a>
        <h1 class="text-2xl font-bold mt-2 text-purple-700">
            <?= $type == 'kehilangan' ? 'Laporkan Kehilangan' : 'Laporkan Barang Temuan' ?>
        </h1>
        <p class="text-gray-600 text-sm mt-1">
            Isi informasi barang anda
        </p>
    </div>

    <!-- FORM -->
    <div class="bg-white p-6 rounded-xl shadow-md border border-purple-200 space-y-4">

        <!-- FOTO -->
        <div>
            <label class="text-sm font-medium text-purple-700">Foto Barang</label>
            <div class="mt-2 border-2 border-dashed border-purple-300 rounded-lg p-6 text-center text-purple-500 bg-purple-50 hover:bg-purple-100 transition cursor-pointer">
                Klik untuk upload foto
            </div>
        </div>

        <!-- NAMA -->
        <div>
            <label class="text-sm text-purple-700 font-medium">Nama Barang</label>
            <input type="text" class="w-full mt-1 border border-purple-300 rounded-lg px-4 py-2 focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-100"
                placeholder="Contoh: Dompet Coklat">
        </div>

        <!-- DESKRIPSI -->
        <div>
            <label class="text-sm text-purple-700 font-medium">Deskripsi</label>
            <textarea class="w-full mt-1 border border-purple-300 rounded-lg px-4 py-2 focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-100"
                placeholder="Jelaskan ciri-ciri barang"></textarea>
        </div>

        <!-- LOKASI -->
        <div>
            <label class="text-sm text-purple-700 font-medium">Lokasi</label>
            <input type="text" class="w-full mt-1 border border-purple-300 rounded-lg px-4 py-2 focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-100"
                placeholder="Contoh: Kampus A">
        </div>

        <!-- TANGGAL & WAKTU -->
        <div class="grid grid-cols-2 gap-4">
            <input type="date" class="border border-purple-300 rounded-lg px-4 py-2 focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-100">
            <input type="time" class="border border-purple-300 rounded-lg px-4 py-2 focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-100">
        </div>

        <!-- BUTTON -->
        <div class="flex gap-3 pt-4">
            <a href="?page=report&type=<?= $type ?>&status=success"
                class="flex-1 text-center bg-purple-700 text-white py-3 rounded-lg font-semibold hover:bg-purple-800 transition">
                Kirim
            </a>

            <a href="?page=report&type=<?= $type ?>&status=error"
                class="flex-1 text-center bg-red-500 text-white py-3 rounded-lg font-semibold hover:bg-red-600 transition">
                Simulasi Gagal
            </a>
        </div>

    </div>
</div>

<!-- MODAL SUCCESS -->
<?php if ($status == 'success'): ?>
<div class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-xl text-center w-80 border border-green-300">
        <div class="text-green-500 text-4xl mb-3">✔</div>
        <h2 class="font-bold text-purple-700">Laporan Terkirim</h2>
        <p class="text-sm text-gray-600 mt-2 font-medium">Terima kasih telah mengirim laporan</p>

        <a href="?page=home"
            class="block mt-4 bg-purple-700 text-white py-2 rounded-lg font-semibold hover:bg-purple-800 transition">
            OK
        </a>
    </div>
</div>
<?php endif; ?>

<!-- MODAL ERROR -->
<?php if ($status == 'error'): ?>
<div class="fixed inset-0 bg-black/40 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-xl text-center w-80 border border-red-300">
        <div class="text-red-500 text-4xl mb-3">✖</div>
        <h2 class="font-bold text-purple-700">Gagal</h2>
        <p class="text-sm text-gray-600 mt-2 font-medium">Terjadi kesalahan</p>

        <a href="?page=report&type=<?= $type ?>"
            class="block mt-4 bg-purple-700 text-white py-2 rounded-lg font-semibold hover:bg-purple-800 transition">
            OK
        </a>
    </div>
</div>
<?php endif; ?>

<?php
$content = ob_get_clean();
require 'views/layouts/main.php';
?>