<?php ob_start(); ?>

<div class="min-h-screen flex items-center justify-center bg-white px-6">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-md border border-purple-300">

        <h2 class="text-2xl font-semibold text-purple-700">Register</h2>
        <p class="text-sm text-gray-600 mt-1 font-medium">Buat akun baru</p>

        <form action="index.php" method="GET" class="mt-6 space-y-4">
            <input type="hidden" name="page" value="home">

            <div>
                <label class="text-sm text-purple-700 font-semibold">Email</label>
                <input type="email"
                    class="mt-1 w-full px-4 py-3 border border-purple-300 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-100"
                    placeholder="email@gmail.com">
            </div>

            <div>
                <label class="text-sm text-purple-700 font-semibold">Password</label>
                <input type="password"
                    class="mt-1 w-full px-4 py-3 border border-purple-300 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-100"
                    placeholder="••••••••">
            </div>

            <div>
                <label class="text-sm text-purple-700 font-semibold">Confirm Password</label>
                <input type="password"
                    class="mt-1 w-full px-4 py-3 border border-purple-300 rounded-lg focus:outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-100"
                    placeholder="••••••••">
            </div>

            <button type="submit"
                class="w-full bg-purple-700 text-white py-3 rounded-lg font-semibold hover:bg-purple-800 transition">
                Register
            </button>
        </form>

        <p class="text-sm text-center text-gray-600 mt-6 font-medium">
            Sudah punya akun?
            <a href="index.php?page=login" class="text-purple-700 font-semibold hover:text-purple-900">
                Login
            </a>
        </p>

    </div>

</div>

<?php
$content = ob_get_clean();
require 'views/layouts/auth.php';
?>