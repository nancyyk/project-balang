<?php ob_start(); ?>

<?php
$menuOpen = isset($_GET['menu']) && $_GET['menu'] == 'open';

$items = [
    ["id" => 1, "title" => "Sepatu Hiking", "status" => "Hilang", "image" => "https://picsum.photos/400/300?1"],
    ["id" => 2, "title" => "Tas Hitam", "status" => "Ditemukan", "image" => "https://picsum.photos/400/300?2"],
    ["id" => 3, "title" => "Sepatu", "status" => "Hilang", "image" => "https://picsum.photos/400/300?3"],
];
?>

<!-- BACKGROUND (container putih dihapus) -->
<div class="min-h-[calc(100vh-96px)] px-6 py-8">

    <h1 class="text-3xl font-bold text-purple-700 mb-8">
        Menemukan sesuatu?
    </h1>

    <!-- GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

        <?php foreach ($items as $item): ?>
        
        <!-- CARD -->
        <div class="bg-white border-2 border-purple-500 rounded-lg shadow-sm hover:shadow-md transition overflow-hidden">

            <!-- IMAGE -->
            <div class="h-32 w-full">
                <img src="<?= $item['image'] ?>"
                     class="w-full h-full object-cover">
            </div>

            <!-- CONTENT -->
            <div class="p-3 space-y-2">

                <h3 class="text-base font-semibold text-gray-900 truncate">
                    <?= $item['title'] ?>
                </h3>

                <span class="inline-block text-[11px] font-semibold px-2 py-1 rounded-full
                    <?= $item['status']=='Hilang'
                        ? 'bg-red-100 text-red-600'
                        : 'bg-green-100 text-green-700' ?>">
                    <?= $item['status'] ?>
                </span>

                <a href="?page=detail&id=<?= $item['id'] ?>"
                   class="block text-sm font-semibold text-purple-700 hover:text-purple-900">
                    Lihat Detail →
                </a>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

    <!-- FLOATING BUTTON -->
    <div class="fixed bottom-6 right-6 flex flex-col items-end gap-3 z-50">

        <?php if ($menuOpen): ?>
        <!-- popup menu (tetap putih karena ini dropdown UI) -->
        <div class="bg-white border border-purple-200 rounded-xl shadow-md p-3 w-44 space-y-2">

            <a href="?page=report&type=kehilangan"
               class="block text-sm px-3 py-2 rounded-lg bg-purple-200 text-black-900 hover:bg-purple-100">
                Kehilangan
            </a>

            <a href="?page=report&type=menemukan"
               class="block text-sm px-3 py-2 rounded-lg bg-purple-100 text-black-800 hover:bg-purple-200">
                Menemukan
            </a>

        </div>
        <?php endif; ?>

        <a href="?page=home&menu=<?= $menuOpen ? 'close' : 'open' ?>"
           class="flex h-14 w-14 items-center justify-center rounded-full text-2xl text-white bg-purple-700 hover:bg-purple-800 shadow-lg">
            +
        </a>

    </div>

</div>

<?php
$content = ob_get_clean();
require 'views/layouts/main.php';
?>