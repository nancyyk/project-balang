<?php
$sidebarOpen = isset($_GET['sidebar']) && $_GET['sidebar'] == 'open';
$page = $_GET['page'] ?? 'home';
?>

<html>
<head>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">

<!-- TOPBAR -->
<div class="fixed top-0 left-0 right-0 h-16
bg-white border-b
flex justify-between items-center
px-6 z-40">

    <div class="flex items-center gap-4">

        <a href="?page=<?= $page ?>&sidebar=<?= $sidebarOpen ? 'close' : 'open' ?>"
        class="text-2xl text-gray-600 hover:text-blue-600 transition">
            ☰
        </a>

        <h1 class="text-lg font-semibold text-blue-600">
            BALANG
        </h1>

    </div>

    <span class="text-gray-600 font-medium">
        Hi, User
    </span>

</div>


<!-- SIDEBAR -->
<div class="fixed top-0 left-0 h-full w-64
bg-white border-r
p-6
transform transition-transform duration-300 z-50
<?= $sidebarOpen ? 'translate-x-0' : '-translate-x-full' ?>">

    <h2 class="text-xl font-bold text-blue-600 mb-10">
        BALANG
    </h2>

    <nav class="flex flex-col gap-3">

        <a href="?page=home"
        class="px-4 py-3 rounded-lg
        text-gray-700
        hover:bg-blue-50
        hover:text-blue-600 transition">
            Home
        </a>

        <a href="?page=history"
        class="px-4 py-3 rounded-lg
        text-gray-700
        hover:bg-blue-50
        hover:text-blue-600 transition">
            History
        </a>

        <a href="?page=profile"
        class="px-4 py-3 rounded-lg
        text-gray-700
        hover:bg-blue-50
        hover:text-blue-600 transition">
            Profile
        </a>

    </nav>

    <!-- LOGOUT -->
    <div class="absolute bottom-8 left-6 right-6">

        <a href="?page=logout"
        class="block text-center py-3 rounded-lg
        bg-blue-600 text-white font-medium
        hover:bg-blue-700 transition">
            Logout
        </a>

    </div>

</div>


<!-- OVERLAY -->
<?php if ($sidebarOpen): ?>
<a href="?page=<?= $page ?>&sidebar=close"
class="fixed inset-0 bg-black/20 z-40"></a>
<?php endif; ?>


<!-- CONTENT -->
<div class="pt-20 px-8 pb-10">
    <?= $content ?>
</div>

</body>
</html>