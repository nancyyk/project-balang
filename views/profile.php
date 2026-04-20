<?php ob_start(); ?>

<div class="max-w-2xl mx-auto py-6">

    <!-- HEADER -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-purple-700">Profile</h1>
        <p class="text-gray-500 text-sm mt-1">Kelola informasi akun kamu</p>
    </div>

    <!-- CARD -->
    <div class="bg-gradient-to-br from-white to-purple-50 rounded-2xl shadow-lg border border-purple-100 p-6">

        <!-- AVATAR -->
        <div class="flex flex-col items-center mb-6">
            <div class="w-20 h-20 rounded-full bg-purple-200 flex items-center justify-center text-purple-700 text-2xl font-bold shadow">
                U
            </div>
            <p class="mt-2 text-sm text-gray-500">Upload foto profil</p>
        </div>

        <!-- FORM -->
        <div class="space-y-5">

            <div>
                <label class="text-sm text-purple-700 font-semibold">Nama Lengkap</label>
                <input type="text"
                    class="w-full mt-1 border border-purple-200 rounded-xl px-4 py-3 bg-white shadow-sm
                    focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition"
                    value="Nama User">
            </div>

            <div>
                <label class="text-sm text-purple-700 font-semibold">Email</label>
                <input type="email"
                    class="w-full mt-1 border border-purple-200 rounded-xl px-4 py-3 bg-white shadow-sm
                    focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition"
                    value="user@email.com">
            </div>

            <div>
                <label class="text-sm text-purple-700 font-semibold">Nomor HP</label>
                <input type="text"
                    class="w-full mt-1 border border-purple-200 rounded-xl px-4 py-3 bg-white shadow-sm
                    focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition"
                    value="+62 812 3456 7890">
            </div>

            <div>
                <label class="text-sm text-purple-700 font-semibold">Alamat</label>
                <textarea rows="3"
                    class="w-full mt-1 border border-purple-200 rounded-xl px-4 py-3 bg-white shadow-sm
                    focus:outline-none focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition">Lumajang, Jawa Timur</textarea>
            </div>

        </div>

        <!-- BUTTON -->
        <div class="mt-7 flex gap-3">

            <button
                class="flex-1 bg-gradient-to-r from-purple-600 to-purple-700 text-white py-3 rounded-xl font-semibold
                shadow-md hover:shadow-lg hover:scale-[1.02] transition">
                Simpan Perubahan
            </button>

            <a href="?page=login"
                class="flex-1 text-center bg-white border border-purple-200 text-purple-700 py-3 rounded-xl font-semibold
                hover:bg-purple-50 hover:shadow transition">
                Logout
            </a>

        </div>

    </div>
</div>

<?php
$content = ob_get_clean();
require 'views/layouts/main.php';
?>