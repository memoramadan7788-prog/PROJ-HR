<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirebridge - Welcome back</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body class="bg-gray-50 font-sans h-screen w-screen overflow-hidden flex items-center justify-center m-0 p-0">

    <div class="flex w-full h-full bg-white shadow-lg overflow-hidden">
        
        <!-- Sidebar -->
        <div class="w-1/3 bg-[#0f2a4a] text-white p-8 flex flex-col justify-between overflow-y-auto">
            <div>
                <div class="flex items-center space-x-2 mb-8">
                    <div class="bg-blue-600 text-white font-bold px-2 py-1 rounded text-sm">h</div>
                    <span class="font-bold text-base tracking-wide">hirebridge</span>
                </div>

                <p class="text-[10px] tracking-widest text-gray-400 uppercase font-semibold mb-4">One Connection. Your Next Chapter.</p>

                <p class="text-xs text-gray-300 leading-relaxed mb-6">
                    Find your next role, build your team, or partner with a recruiter. One clear workspace for every step.
                </p>

                <hr class="border-gray-700 my-4" />

                <ul class="space-y-2 text-xs text-gray-300">
                    <li>Designed around people</li>
                    <li>Transparent opportunities</li>
                    <li>Thoughtful hiring journeys</li>
                    <li>Your information, in your control</li>
                </ul>
            </div>
            
            <div class="text-[11px] text-gray-400 flex space-x-3 pt-4 items-center">
                <span>Hirebridge</span>
                <span>•</span>
                <a href="javascript:void(0);" class="hover:underline">Privacy</a>
                <span>•</span>
                <a href="javascript:void(0);" class="hover:underline">Help</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-2/3 px-12 py-6 flex flex-col justify-between overflow-y-auto">
            <div>
                <p class="text-xs text-gray-400 text-right mb-2">HR / Account Updates</p>

                <div class="max-w-md mx-auto">
                    <h2 class="text-xl font-bold text-gray-800 mb-1">Welcome back</h2>
                    <p class="text-xs text-gray-500 mb-4">Sign in to continue your hiring journey.</p>

                    <!-- Social / SSO Buttons -->
                    <div class="space-y-2 mb-4">
                        <button type="button" class="w-full border border-gray-300 py-2 rounded text-xs font-medium text-gray-700 hover:bg-gray-50 flex items-center justify-center gap-2">
                            <i class="fab fa-google text-red-500"></i> Continue with Google
                        </button>
                        <button type="button" class="w-full border border-gray-300 py-2 rounded text-xs font-medium text-gray-700 hover:bg-gray-50 flex items-center justify-center gap-2">
                            Continue with company SSO
                        </button>
                    </div>

                    <hr class="my-4 border-gray-200" />

                    <!-- Login Form -->
                    <form action="{{ route('login.submit') }}" method="POST" class="space-y-3">
                        @csrf
                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">Email address</label>
                            <input type="email" name="email" value="maria@workstyle.com" class="w-full px-3 py-1.5 border border-gray-300 rounded text-xs focus:outline-none focus:border-blue-600" required>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">Password</label>
                            <input type="password" name="password" value="••••••••" class="w-full px-3 py-1.5 border border-gray-300 rounded text-xs focus:outline-none focus:border-blue-600" required>
                        </div>

                        <div class="flex items-center justify-between text-xs mt-1">
                            <label class="flex items-center text-gray-600 cursor-pointer">
                                <input type="checkbox" class="rounded border-gray-300 mr-2"> Keep me signed in on this device
                            </label>
                            <a href="javascript:void(0);" class="text-blue-600 hover:underline">Forgot username?</a>
                        </div>

                        <button type="submit" class="w-24 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded text-xs transition">
                            Sign in
                        </button>
                    </form>

                    <p class="text-[10px] text-gray-400 mt-3 leading-normal">
                        Your account determines your available workspace. If you have multiple roles, you can switch after signing in.
                    </p>

                    <!-- New to Hirebridge -->
                    <div class="mt-4 border-t pt-3">
                        <p class="text-xs font-semibold text-gray-700 mb-1">New to Hirebridge?</p>
                        <button type="button" class="border border-gray-300 px-4 py-1.5 rounded text-xs font-medium text-gray-700 hover:bg-gray-50">
                            Create an account
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
</html>