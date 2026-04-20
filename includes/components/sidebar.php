<?php
$sidebarOpen = isset($_GET['sidebar']) && $_GET['sidebar'] == 'open';
?>

<!-- TOP BAR (FIX: NO WHITE BLOCK) -->
<div class="fixed top-0 left-0 right-0 z-40
bg-purple-700 shadow-md px-6 py-4 flex justify-between items-center text-white">

    <div class="flex items-center gap-4">

        <a href="?page=<?= $_GET['page'] ?? 'home' ?>&sidebar=<?= $sidebarOpen ? 'close' : 'open' ?>"
           class="text-2xl font-bold hover:text-purple-200 transition">
            ☰
        </a>

        <h1 class="text-xl font-bold tracking-wide">
            BALANG
        </h1>

    </div>

    <span class="text-white/90 font-medium">
        Hi, User
    </span>

</div>


<!-- SIDEBAR (lebih soft, bukan blok keras) -->
<div class="fixed top-0 left-0 h-full w-64
bg-purple-700 text-white p-6
transform transition-transform duration-300 z-50 shadow-lg
<?= $sidebarOpen ? 'translate-x-0' : '-translate-x-full' ?>">

    <div class="flex justify-between items-center mb-10">
        <h2 class="text-2xl font-bold">BALANG</h2>

        <a href="?page=<?= $_GET['page'] ?? 'home' ?>&sidebar=close"
           class="text-white text-xl hover:text-gray-300 transition">
            ✕
        </a>
    </div>

    <nav class="flex flex-col gap-3 text-sm">

        <a href="?page=home"
           class="px-3 py-2 rounded-lg hover:bg-white/10 transition">
            Home
        </a>

        <a href="?page=history"
           class="px-3 py-2 rounded-lg hover:bg-white/10 transition">
            History
        </a>

        <a href="?page=profile"
           class="px-3 py-2 rounded-lg hover:bg-white/10 transition">
            Profile
        </a>

        <a href="?page=login"
           class="mt-8 flex items-center justify-center px-4 py-2 rounded-full
                  bg-white text-purple-700 font-semibold
                  hover:bg-purple-100 transition shadow">
            Logout
        </a>

    </nav>

</div>


<!-- OVERLAY -->
<?php if ($sidebarOpen): ?>
    <a href="?page=<?= $_GET['page'] ?? 'home' ?>&sidebar=close"
       class="fixed inset-0 bg-black/30 backdrop-blur-sm z-40"></a>
<?php endif; ?>