<?php
$sidebarOpen = isset($_GET['sidebar']) && $_GET['sidebar'] == 'open';
$page = $_GET['page'] ?? 'home';
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<!-- ❌ FIX: dari bg-white → gradient biar tidak putih -->
<body class="bg-gradient-to-br from-purple-100 via-white-100 to-purple-150 min-h-screen">

<!-- TOPBAR -->
<div class="fixed top-0 left-0 right-0 h-16
bg-purple-800 text-white
flex justify-between items-center
px-6 shadow-md z-40">

    <div class="flex items-center gap-4">

        <a href="?page=<?= $page ?>&sidebar=<?= $sidebarOpen ? 'close' : 'open' ?>"
           class="text-2xl hover:text-purple-200 transition">
            ☰
        </a>

        <h1 class="text-lg font-semibold tracking-wide">
            BALANG
        </h1>

    </div>

    <span class="font-medium text-white/90">
        Hi, User
    </span>

</div>


<!-- SIDEBAR -->
<div class="fixed top-0 left-0 h-full w-64
bg-purple-700 text-white p-6
transform transition-transform duration-300 z-50 shadow-lg
<?= $sidebarOpen ? 'translate-x-0' : '-translate-x-full' ?>">

    <h2 class="text-xl font-bold mb-10">
        BALANG
    </h2>

    <nav class="flex flex-col gap-3">

        <a href="?page=home"
           class="px-4 py-3 rounded-lg hover:bg-white/10 transition">
            Home
        </a>

        <a href="?page=history"
           class="px-4 py-3 rounded-lg hover:bg-white/10 transition">
            History
        </a>

        <a href="?page=profile"
           class="px-4 py-3 rounded-lg hover:bg-white/10 transition">
            Profile
        </a>

    </nav>

    <!-- LOGOUT -->
    <div class="absolute bottom-8 left-6 right-6">

        <a href="?page=logout"
           class="block text-center py-3 rounded-lg
           bg-white text-purple-700 font-semibold
           hover:bg-purple-100 transition">
            Logout
        </a>

    </div>

</div>


<!-- OVERLAY -->
<?php if ($sidebarOpen): ?>
<a href="?page=<?= $page ?>&sidebar=close"
   class="fixed inset-0 bg-black/30 backdrop-blur-sm z-40"></a>
<?php endif; ?>


<!-- CONTENT AREA (TETAP, TIDAK DIUBAH) -->
<div class="pt-20 pb-10 min-h-screen">

    <div class="max-w-7xl mx-auto px-6">

        <?= $content ?>

    </div>

</div>

</body>
</html>