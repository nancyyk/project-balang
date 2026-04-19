<?php
// state sidebar (open / close)
$sidebarOpen = isset($_GET['sidebar']) && $_GET['sidebar'] == 'open';
?>

<!-- TOP BAR -->
<div class="bg-white shadow px-6 py-4 flex justify-between items-center fixed w-full z-40">

    <div class="flex items-center gap-4">
        <!-- TOGGLE BUTTON -->
        <a href="?page=<?= $_GET['page'] ?? 'home' ?>&sidebar=<?= $sidebarOpen ? 'close' : 'open' ?>"
           class="text-2xl text-blue-400 font-bold hover:text-blue-500 transition">
            ☰
        </a>

        <h1 class="text-xl font-bold text-blue-400">BALANG</h1>
    </div>

    <div class="flex items-center gap-4">
        <span class="text-gray-600 font-medium">
            Hi, User
        </span>
    </div>

</div>

<!-- SIDEBAR -->
<div class="fixed top-0 left-0 h-full w-64 bg-blue-300 text-white p-6 transform transition-transform duration-300 z-50
    <?= $sidebarOpen ? 'translate-x-0' : '-translate-x-full' ?>">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-10">
        <h2 class="text-2xl font-bold">BALANG</h2>

        <!-- CLOSE BUTTON -->
        <a href="?page=<?= $_GET['page'] ?? 'home' ?>&sidebar=close"
           class="text-white text-xl hover:text-gray-200 transition">
            ✕
        </a>
    </div>

    <!-- MENU -->
    <nav class="flex flex-col gap-3 text-sm">

        <a href="?page=home"
           class="px-3 py-2 rounded-lg hover:bg-blue-400/60 transition">
            Home
        </a>

        <a href="?page=history"
           class="px-3 py-2 rounded-lg hover:bg-blue-400/60 transition">
            History
        </a>

        <a href="?page=profile"
           class="px-3 py-2 rounded-lg hover:bg-blue-400/60 transition">
            Profile
        </a>

        <!-- LOGOUT OVAL BUTTON -->
        <a href="?page=login"
           class="mt-8 flex items-center justify-center px-4 py-2 rounded-full
                  bg-white text-blue-400 font-semibold
                  hover:bg-blue-50 transition shadow">
            Logout
        </a>

    </nav>

</div>

<!-- OVERLAY -->
<?php if ($sidebarOpen): ?>
    <a href="?page=<?= $_GET['page'] ?? 'home' ?>&sidebar=close"
       class="fixed inset-0 bg-black/30 z-40"></a>
<?php endif; ?>