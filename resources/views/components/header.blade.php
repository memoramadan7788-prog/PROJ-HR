<!DOCTYPE html>
<html lang="en" id="htmlTag">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Connect</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100 min-h-screen transition-colors duration-300">

<!-- Navbar Start -->
    <nav class="bg-[#0f62fe] dark:bg-blue-950 text-white shadow-lg px-8 py-3.5 flex justify-between items-center transition-colors">
        <!-- Logo -->
        <a href="/" class="flex items-center gap-1 text-2xl font-extrabold text-white">
            <span>HR</span>
            <span class="text-amber-400 text-xl">▶</span>
            <span class="font-semibold">Connect</span>
        </a>

        <!-- Menu Links -->
        <ul class="hidden md:flex items-center gap-6 text-sm font-medium text-white/90">
            <li><a href="#" class="hover:text-amber-300 transition border-b-2 border-white pb-0.5" data-en="Home ▾" data-ar="الرئيسية ▾">Home ▾</a></li>
            <li><a href="#" class="hover:text-amber-300 transition" data-en="Jobs ▾" data-ar="الوظائف ▾">Jobs ▾</a></li>
            <li><a href="#" class="hover:text-amber-300 transition" data-en="For Candidates ▾" data-ar="للمرشحين ▾">For Candidates ▾</a></li>
            <li><a href="#" class="hover:text-amber-300 transition" data-en="For Employers ▾" data-ar="لأصحاب العمل ▾">For Employers ▾</a></li>
            <li><a href="#" class="hover:text-amber-300 transition" data-en="About Us ▾" data-ar="من نحن ▾">About Us ▾</a></li>
        </ul>

        <!-- Right Controls -->
        <div class="flex items-center gap-3">
            <button onclick="toggleLanguage()" class="px-2.5 py-1 text-xs font-semibold bg-white/10 hover:bg-white/20 rounded-md transition text-white flex items-center gap-1">
                🌐 <span id="langBtnText">AR</span>
            </button>
            <button onclick="document.documentElement.classList.toggle('dark')" class="p-1.5 bg-white/10 hover:bg-white/20 rounded-md transition text-white">
                🌙 / ☀️
            </button>
            <a href="/login" class="px-3 py-1.5 text-sm hover:text-amber-300 transition" data-en="Sign In" data-ar="تسجيل الدخول">Sign In</a>
            <button onclick="openModal('registerModal')" class="px-4 py-1.5 text-sm bg-amber-400 text-blue-950 font-bold rounded-lg hover:bg-amber-300 transition shadow-sm" data-en="Register" data-ar="إنشاء حساب">
                Register
            </button>
        </div>
    </nav>
    <!-- Navbar End -->
     