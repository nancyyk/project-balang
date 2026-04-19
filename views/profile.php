<?php ob_start(); ?>

<div class="max-w-2xl mx-auto">

    <!-- HEADER -->
    <h1 class="text-2xl font-bold mb-6">Profile</h1>

    <!-- CARD -->
    <div class="bg-white rounded-2xl shadow p-6">

        <!-- INFO -->
        <div class="space-y-4">

            <div>
                <label class="text-sm text-gray-600">Nama Lengkap</label>
                <input type="text"
                    class="w-full mt-1 border rounded-xl px-4 py-3"
                    value="Nama User">
            </div>

            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input type="email"
                    class="w-full mt-1 border rounded-xl px-4 py-3"
                    value="user@email.com">
            </div>

            <div>
                <label class="text-sm text-gray-600">Nomor HP</label>
                <input type="text"
                    class="w-full mt-1 border rounded-xl px-4 py-3"
                    value="+62 812 3456 7890">
            </div>

            <div>
                <label class="text-sm text-gray-600">Alamat</label>
                <textarea
                    class="w-full mt-1 border rounded-xl px-4 py-3">Lumajang, Jawa Timur</textarea>
            </div>

        </div>

        <!-- BUTTON -->
        <div class="mt-6 flex gap-3">
            <button
    class="flex-1 bg-gray-900 text-white py-3 rounded-xl font-semibold hover:bg-black">
    Simpan
</button>

<a href="?page=login"
   class="flex-1 text-center bg-gray-100 text-gray-700 py-3 rounded-xl font-semibold hover:bg-gray-200">
    Logout
</a>
        </div>

    </div>

</div>

<?php
$content = ob_get_clean();
require 'views/layouts/main.php';
?>