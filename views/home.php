<?php ob_start(); ?>

<?php
$menuOpen = isset($_GET['menu']) && $_GET['menu'] == 'open';

/* DATA DUMMY */
$items = [
    [
        "id" => 1,
        "title" => "Sepatu Hiking",
        "status" => "Hilang",
        "image" => "https://picsum.photos/400/300?1"
    ],
    [
        "id" => 2,
        "title" => "Tas Hitam",
        "status" => "Ditemukan",
        "image" => "https://picsum.photos/400/300?2"
    ],
    [
        "id" => 3,
        "title" => "Sepatu",
        "status" => "Hilang",
        "image" => "https://picsum.photos/400/300?3"
    ],
];
?>

<div class="relative min-h-[calc(100vh-96px)]">

    <h1 class="text-2xl font-bold mb-6">
        Menemukan sesuatu?
    </h1>

    <!-- GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <?php foreach ($items as $item): ?>

        <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden">

            <!-- GAMBAR KECIL -->
            <img src="<?= $item['image'] ?>"
                 class="w-full h-44 object-cover">

            <!-- CONTENT -->
            <div class="p-5">

                <h3 class="font-semibold text-lg mb-2">
                    <?= $item['title'] ?>
                </h3>

                <p class="text-sm mb-4
                    <?= $item['status']=='Hilang'
                        ? 'text-red-600'
                        : 'text-green-600' ?>">
                    Status: <?= $item['status'] ?>
                </p>

                <a href="?page=detail&id=<?= $item['id'] ?>"
                   class="text-blue-600 text-sm font-semibold hover:underline">
                    Detail
                </a>

            </div>

        </div>

        <?php endforeach; ?>

    </div>


    <!-- FLOATING BUTTON -->
    <div class="fixed bottom-6 right-6 flex flex-col items-end gap-2 z-50">

        <?php if ($menuOpen): ?>
        <div class="bg-white rounded-2xl shadow-lg p-3 w-44 space-y-2">

            <a href="?page=report&type=kehilangan"
               class="block text-sm px-3 py-2 rounded-xl bg-blue-50 text-blue-700 hover:bg-blue-100">
                Kehilangan
            </a>

            <a href="?page=report&type=menemukan"
               class="block text-sm px-3 py-2 rounded-xl bg-gray-100 hover:bg-gray-200">
                Menemukan
            </a>

        </div>
        <?php endif; ?>

        <a href="?page=home&menu=<?= $menuOpen ? 'close' : 'open' ?>"
           class="flex h-14 w-14 items-center justify-center rounded-full bg-blue-600 text-2xl text-white shadow-lg hover:bg-blue-700">
            +
        </a>

    </div>

</div>

<?php
$content = ob_get_clean();
require 'views/layouts/main.php';
?>