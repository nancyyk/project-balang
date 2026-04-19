<?php ob_start(); ?>

<?php
$type = $_GET['type'] ?? 'kehilangan';
$status = $_GET['status'] ?? null; // success / error
?>

<div class="max-w-3xl mx-auto">

    <!-- HEADER -->
    <div class="mb-6">
        <a href="?page=home" class="text-blue-600 font-semibold">← Kembali</a>
        <h1 class="text-2xl font-bold mt-2">
            <?= $type == 'kehilangan' ? 'Laporkan Kehilangan' : 'Laporkan Barang Temuan' ?>
        </h1>
        <p class="text-gray-500 text-sm">
            Isi informasi barang anda
        </p>
    </div>

    <!-- FORM -->
    <div class="bg-white p-6 rounded-xl shadow space-y-4">

        <!-- FOTO -->
        <div>
            <label class="text-sm font-medium">Foto Barang</label>
            <div class="mt-2 border-2 border-dashed rounded-lg p-6 text-center text-gray-400">
                Klik untuk upload foto
            </div>
        </div>

        <!-- NAMA -->
        <div>
            <label class="text-sm">Nama Barang</label>
            <input type="text" class="w-full mt-1 border rounded-lg px-4 py-2"
                placeholder="Contoh: Dompet Coklat">
        </div>

        <!-- DESKRIPSI -->
        <div>
            <label class="text-sm">Deskripsi</label>
            <textarea class="w-full mt-1 border rounded-lg px-4 py-2"
                placeholder="Jelaskan ciri-ciri barang"></textarea>
        </div>

        <!-- LOKASI -->
        <div>
            <label class="text-sm">Lokasi</label>
            <input type="text" class="w-full mt-1 border rounded-lg px-4 py-2"
                placeholder="Contoh: Kampus A">
        </div>

        <!-- TANGGAL & WAKTU -->
        <div class="grid grid-cols-2 gap-4">
            <input type="date" class="border rounded-lg px-4 py-2">
            <input type="time" class="border rounded-lg px-4 py-2">
        </div>

        <!-- BUTTON -->
        <div class="flex gap-3 pt-4">
            <a href="?page=report&type=<?= $type ?>&status=success"
                class="flex-1 text-center bg-blue-600 text-white py-3 rounded-lg">
                Kirim
            </a>

            <a href="?page=report&type=<?= $type ?>&status=error"
                class="flex-1 text-center bg-red-500 text-white py-3 rounded-lg">
                Simulasi Gagal
            </a>
        </div>

    </div>
</div>

<!-- MODAL SUCCESS -->
<?php if ($status == 'success'): ?>
<div class="fixed inset-0 bg-black/40 flex items-center justify-center">
    <div class="bg-white p-6 rounded-xl text-center w-80">
        <div class="text-green-500 text-4xl mb-3">✔</div>
        <h2 class="font-bold">Laporan Terkirim</h2>
        <p class="text-sm text-gray-500 mt-2">Terima kasih telah mengirim laporan</p>

        <a href="?page=home"
            class="block mt-4 bg-blue-600 text-white py-2 rounded">
            OK
        </a>
    </div>
</div>
<?php endif; ?>

<!-- MODAL ERROR -->
<?php if ($status == 'error'): ?>
<div class="fixed inset-0 bg-black/40 flex items-center justify-center">
    <div class="bg-white p-6 rounded-xl text-center w-80">
        <div class="text-red-500 text-4xl mb-3">✖</div>
        <h2 class="font-bold">Gagal</h2>
        <p class="text-sm text-gray-500 mt-2">Terjadi kesalahan</p>

        <a href="?page=report&type=<?= $type ?>"
            class="block mt-4 bg-blue-600 text-white py-2 rounded">
            OK
        </a>
    </div>
</div>
<?php endif; ?>

<?php
$content = ob_get_clean();
require 'views/layouts/main.php';
?>