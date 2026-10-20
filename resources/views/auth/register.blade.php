<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirebridge - Create your account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body class="bg-gray-50 font-sans h-screen w-screen overflow-hidden flex items-center justify-center m-0 p-0">

    <div class="flex w-full h-full bg-white shadow-lg overflow-hidden">
        
        <!-- Left Side -->
        <div class="w-1/3 bg-[#0f2a4a] text-white p-8 flex flex-col justify-between overflow-y-auto">
            <div>
                <div class="flex items-center space-x-2 mb-8">
                    <div class="bg-blue-600 text-white font-bold px-2 py-1 rounded text-sm">h</div>
                    <span class="font-bold text-base tracking-wide">hirebridge</span>
                </div>

                <p class="text-[10px] tracking-widest text-gray-400 uppercase font-semibold mb-4">ONE CONNECTION. YOUR NEXT CHAPTER.</p>

                <h1 class="text-2xl font-bold leading-tight mb-4">
                    Good work starts with the right connection.
                </h1>

                <p class="text-xs text-gray-300 leading-relaxed mb-6">
                    Find your next role, build your team, or partner with a recruiter. One clear workspace for every step.
                </p>

                <hr class="border-gray-700 my-4" />
                
                <ul class="space-y-2 text-xs text-gray-300">
                    <li>Designed around people.</li>
                    <li>Transparent opportunities</li>
                    <li>Thoughtful hiring journeys</li>
                    <li>Your information, in your control</li>
                </ul>
            </div>

            <div class="text-[11px] text-gray-400 flex space-x-3 pt-4">
                <span>Hirebridge</span>
                <span>•</span>
                <a href="#" class="hover:underline">Privacy</a>
                <span>•</span>
                <a href="#" class="hover:underline">Help</a>
            </div>
        </div>

        <!-- Right Side -->
        <div class="w-2/3 px-12 py-6 flex flex-col justify-between overflow-y-auto">
            <div>
                <p class="text-xs text-gray-400 text-right mb-2">08 / Account access</p>

                <div class="max-w-lg mx-auto">
                    <h2 class="text-2xl font-bold text-gray-800 mb-1">Create your account</h2>
                    <p class="text-xs text-gray-500 mb-4">A clear next step for your career or your team.</p>

                    <!-- Tab Buttons -->
                    <div class="flex space-x-2 mb-4">
                        <button type="button" class="bg-blue-600 text-white px-4 py-1.5 rounded text-xs font-medium">I'm looking for a job</button>
                        <button type="button" class="bg-gray-100 text-gray-700 hover:bg-gray-200 px-4 py-1.5 rounded text-xs font-medium">I'm hiring</button>
                    </div>

                    <form action="{{ route('register.submit') }}" method="POST" class="space-y-3">
                        @csrf
                        
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">First name *</label>
                                <input type="text" name="first_name" placeholder="Maya" class="w-full px-3 py-1.5 border border-gray-300 rounded text-xs focus:outline-none focus:border-blue-600" required>
                            </div>
                            <div>
                                <label class="block text-xs font-medium text-gray-700 mb-1">Last name *</label>
                                <input type="text" name="last_name" placeholder="Chen" class="w-full px-3 py-1.5 border border-gray-300 rounded text-xs focus:outline-none focus:border-blue-600" required>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">Email address *</label>
                            <input type="email" name="email" placeholder="maya.chen@example.com" class="w-full px-3 py-1.5 border border-gray-300 rounded text-xs focus:outline-none focus:border-blue-600" required>
                        </div>
                        
                        <!-- Create Password -->
                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">Create password *</label>
                            <input type="password" id="password" name="password" placeholder="••••••••••••" class="w-full px-3 py-1.5 border border-gray-300 rounded text-xs focus:outline-none focus:border-blue-600" required>
                            <p class="text-[10px] text-gray-500 mt-1">Use at least 12 characters, with a number and a symbol.</p>
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">Confirm password *</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••••••" class="w-full px-3 py-1.5 border border-gray-300 rounded text-xs focus:outline-none focus:border-blue-600" required>
                        </div>

                        <!-- Password Match Indicator -->
                        <div id="match-indicator" class="flex items-center space-x-1 text-gray-400 text-[11px] font-medium hidden">
                            <span id="match-icon">●</span>
                            <span id="match-text">Passwords match</span>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2 rounded text-xs transition mt-2">
                            Create candidate account
                        </button>
                    </form>

                    <p class="text-[10px] text-gray-400 mt-3">
                        We'll send a verification code to confirm your email. Your profile is private until you choose to share it.
                    </p>
                 
                    <div class="mt-4 pt-2">
                        <a href="{{ route('login') }}" class="text-xs text-blue-600 font-medium hover:underline flex items-center gap-1">
                            Already have an account? Sign in &rarr;
                        </a>
                    </div>
                </div>
            </div>

            
        </div>

    </div>

    <!-- Script to validate password matching -->
    <script>
        const password = document.getElementById('password');
        const confirmPassword = document.getElementById('password_confirmation');
        const matchIndicator = document.getElementById('match-indicator');
        const matchText = document.getElementById('match-text');

        function checkPasswords() {
            if (confirmPassword.value === '') {
                matchIndicator.classList.add('hidden');
                confirmPassword.classList.remove('border-emerald-500', 'border-red-500');
                return;
            }

            matchIndicator.classList.remove('hidden');

            if (password.value === confirmPassword.value) {
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