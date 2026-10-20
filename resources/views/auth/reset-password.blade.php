<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set a new password - HR Connect</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans h-screen w-screen overflow-hidden flex items-center justify-center m-0 p-0">

    <div class="flex w-full h-full bg-white shadow-lg overflow-hidden">
        
        <div class="w-1/3 bg-[#0f2a4a] text-white p-8 flex flex-col justify-between overflow-y-auto">
            <div>
                <div class="flex items-center space-x-2 mb-8">
                    <div class="bg-blue-600 text-white font-bold px-2 py-1 rounded text-sm">h</div>
                    <span class="font-bold text-base tracking-wide">hirebridge</span>
                </div>
                
                <p class="text-[10px] tracking-widest text-gray-400 uppercase font-semibold mb-4">
                    ONE CONNECTION. YOUR NEXT CHAPTER.
                </p>

                <!-- Hero Text -->
                <h1 class="text-2xl font-bold leading-tight mb-4">
                    Good work starts with the right connection.
                </h1>
                
                <p class="text-xs text-gray-300 leading-relaxed mb-6">
                    Find your next role, build your team, or partner with a recruiter. One clear workspace for every step.
                </p>

                <hr class="border-gray-700 my-4" />

                <!-- Left Features List -->
                <ul class="space-y-2 text-xs text-gray-300">
                    <li>Designed around people.</li>
                    <li>Transparent opportunities</li>
                    <li>Thoughtful hiring journeys</li>
                    <li>Your information, in your control</li>
                </ul>
            </div>

            <!-- Left Footer Links -->
            <div class="text-[11px] text-gray-400 flex space-x-3 pt-4">
                <span>Hirebridge</span>
                <span>•</span>
                <a href="#" class="hover:underline">Privacy</a>
                <span>•</span>
                <a href="#" class="hover:underline">Help</a>
            </div>
        </div>

        <div class="w-2/3 px-12 py-6 flex flex-col justify-between overflow-y-auto">
            <div>
                <div class="max-w-lg mx-auto">
                    <h2 class="text-2xl font-bold text-gray-800 mb-1">Set a new password</h2>
                    <p class="text-xs text-gray-500 mb-4">Choose a strong password you haven't used for this account.</p>

                    <!-- Reset Password Form -->
                    <form action="{{ route('password.update') }}" method="POST" class="space-y-3">
                        
                        <input type="hidden" name="email" value="maya.chen@example.com">

                        <!-- New Password Input -->
                        <div>
                            <label for="password" class="block text-xs font-medium text-gray-700 mb-1">New password *</label>
                            <div class="relative">
                                <input type="password" id="password" name="password" required
                                    class="w-full pl-3 pr-10 py-1.5 border border-gray-300 rounded text-xs focus:outline-none focus:border-blue-600"
                                    placeholder="••••••••••••">
                                <button type="button" id="toggle-password" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fa-solid fa-eye text-xs" id="eye-icon"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Confirm Password Input -->
                        <div>
                            <label for="password_confirmation" class="block text-xs font-medium text-gray-700 mb-1">Confirm new password *</label>
                            <div class="relative">
                                <input type="password" id="password_confirmation" name="password_confirmation" required
                                    class="w-full pl-3 pr-10 py-1.5 border border-gray-300 rounded text-xs focus:outline-none focus:border-blue-600"
                                    placeholder="••••••••••••">
                                <button type="button" id="toggle-confirm-password" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fa-solid fa-eye text-xs" id="eye-icon-confirm"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Password Match Indicator -->
                        <div id="match-indicator" class="flex items-center space-x-1 text-gray-400 text-[11px] font-medium hidden">
                            <span id="match-icon">●</span>
                            <span id="match-text">Passwords match</span>
                        </div>

                        <!-- Password Requirements Box -->
                        <div class="bg-gray-50 border border-gray-200 rounded p-3 space-y-1.5 mt-2">
                            <h4 class="text-xs font-bold text-gray-800">Password requirements</h4>
                            <ul class="space-y-1 text-[11px] text-gray-600">
                                <li id="req-length" class="flex items-center space-x-2 text-gray-400 transition-colors">
                                    <i class="fa-solid fa-square-check"></i>
                                    <span>At least 12 characters</span>
                                </li>
                                <li id="req-number" class="flex items-center space-x-2 text-gray-400 transition-colors">
                                    <i class="fa-solid fa-square-check"></i>
                                    <span>Includes a number</span>
                                </li>
                                <li id="req-symbol" class="flex items-center space-x-2 text-gray-400 transition-colors">
                                    <i class="fa-solid fa-square-check"></i>
                                    <span>Includes a symbol</span>
                                </li>
                                <li id="req-diff" class="flex items-center space-x-2 text-gray-400 transition-colors">
                                    <i class="fa-solid fa-square-check"></i>
                                    <span>Different from your previous password</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Additional Option -->
                        <div class="flex items-center pt-1">
                            <input id="sign-out" type="checkbox" name="sign_out_other" checked
                                class="h-3.5 w-3.5 text-blue-600 focus:ring-blue-500 border-gray-300 rounded cursor-pointer">
                            <label for="sign-out" class="ml-2 text-xs text-gray-700 font-medium cursor-pointer">
                                Sign out of other devices after resetting
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-1">
                            <button type="submit" 
                                class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2 rounded text-xs transition">
                                Reset password
                            </button>
                        </div>
                    </form>

                    <div class="mt-4 pt-2">
                        <a href="{{ route('login') }}" class="text-xs text-blue-600 font-medium hover:underline flex items-center gap-1">
                            &larr; Back to sign in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts for Validation, Requirements live update & Password Toggle -->
    <script>
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('password_confirmation');
        const matchIndicator = document.getElementById('match-indicator');
        const matchText = document.getElementById('match-text');

        // Requirements elements
        const reqLength = document.getElementById('req-length');
        const reqNumber = document.getElementById('req-number');
        const reqSymbol = document.getElementById('req-symbol');
        const reqDiff = document.getElementById('req-diff');

        // Toggle Password Visibility
        const togglePassword = document.getElementById('toggle-password');
        const eyeIcon = document.getElementById('eye-icon');

        togglePassword.addEventListener('mousedown', () => {
            password.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        });
        togglePassword.addEventListener('mouseup', () => {
            password.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        });
        togglePassword.addEventListener('mouseleave', () => {
            password.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        });

        // Toggle Confirm Password Visibility
        const toggleConfirmPassword = document.getElementById('toggle-confirm-password');
        const eyeIconConfirm = document.getElementById('eye-icon-confirm');

        toggleConfirmPassword.addEventListener('mousedown', () => {
            confirmPassword.type = 'text';
            eyeIconConfirm.classList.remove('fa-eye');
            eyeIconConfirm.classList.add('fa-eye-slash');
        });
        toggleConfirmPassword.addEventListener('mouseup', () => {
            confirmPassword.type = 'password';
            eyeIconConfirm.classList.remove('fa-eye-slash');
            eyeIconConfirm.classList.add('fa-eye');
        });
        toggleConfirmPassword.addEventListener('mouseleave', () => {
            confirmPassword.type = 'password';
            eyeIconConfirm.classList.remove('fa-eye-slash');
            eyeIconConfirm.classList.add('fa-eye');
        });

        function checkPasswords() {
            const val = password.value;

            // 1. Length check (At least 12 chars)
            if (val.length >= 12) {
                reqLength.classList.remove('text-gray-400');
                reqLength.classList.add('text-emerald-600', 'font-medium');
            } else {
                reqLength.classList.add('text-gray-400');
                reqLength.classList.remove('text-emerald-600', 'font-medium');
            }

            // 2. Number check
            if (/\d/.test(val)) {
                reqNumber.classList.remove('text-gray-400');
                reqNumber.classList.add('text-emerald-600', 'font-medium');
            } else {
                reqNumber.classList.add('text-gray-400');
                reqNumber.classList.remove('text-emerald-600', 'font-medium');
            }

            // 3. Symbol check
            if (/[^A-Za-z0-9]/.test(val)) {
                reqSymbol.classList.remove('text-gray-400');
                reqSymbol.classList.add('text-emerald-600', 'font-medium');
            } else {
                reqSymbol.classList.add('text-gray-400');
                reqSymbol.classList.remove('text-emerald-600', 'font-medium');
            }

            // 4. Different from previous (mock rule: assuming valid if not empty and > 0)
            if (val.length > 0) {
                reqDiff.classList.remove('text-gray-400');
                reqDiff.classList.add('text-emerald-600', 'font-medium');
            } else {
                reqDiff.classList.add('text-gray-400');
                reqDiff.classList.remove('text-emerald-600', 'font-medium');
            }

            // Confirm Password match logic
            if (confirmPassword.value === '') {
                matchIndicator.classList.add('hidden');
                confirmPassword.classList.remove('border-emerald-500', 'border-red-500');
                return;
            }

            matchIndicator.classList.remove('hidden');

            if (val === confirmPassword.value) {
                matchIndicator.className = "flex items-center space-x-1 text-emerald-600 text-[11px] font-medium";
                matchText.textContent = "Passwords match";
                confirmPassword.classList.remove('border-red-500');
                confirmPassword.classList.add('border-emerald-500');
            } else {
                matchIndicator.className = "flex items-center space-x-1 text-red-500 text-[11px] font-medium";
                matchText.textContent = "Passwords do not match";
                confirmPassword.classList.remove('border-emerald-500');
                confirmPassword.classList.add('border-red-500');
            }
        }

        password.addEventListener('input', checkPasswords);
        confirmPassword.addEventListener('input', checkPasswords);
    </script>
</body>
</html>