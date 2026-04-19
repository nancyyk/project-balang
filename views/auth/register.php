<?php ob_start(); ?>

<div class="min-h-screen flex items-center justify-center bg-gray-50 px-6">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-sm border">

        <h2 class="text-2xl font-semibold text-gray-900">Register</h2>
        <p class="text-sm text-gray-500 mt-1">Buat akun baru</p>

        <form action="index.php" method="GET" class="mt-6 space-y-4">
            <input type="hidden" name="page" value="home">

            <div>
                <label class="text-sm text-gray-600">Email</label>
                <input type="email"
                    class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="email@gmail.com">
            </div>

            <div>
                <label class="text-sm text-gray-600">Password</label>
                <input type="password"
                    class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="••••••••">
            </div>

            <div>
                <label class="text-sm text-gray-600">Confirm Password</label>
                <input type="password"
                    class="mt-1 w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="••••••••">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                Register
            </button>
        </form>

        <p class="text-sm text-center text-gray-500 mt-6">
            Sudah punya akun?
            <a href="index.php?page=login" class="text-blue-600 font-medium">
                Login
            </a>
        </p>

    </div>

</div>

<?php
$content = ob_get_clean();
require 'views/layouts/auth.php';
?>