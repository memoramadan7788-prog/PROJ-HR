<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>
<body class="bg-gray-50 font-sans h-screen w-screen overflow-hidden flex items-center justify-center m-0 p-0">

    <div class="flex w-full h-full bg-white shadow-lg overflow-hidden">
        
        <!-- Left Side (الثابت في كل الصفحات) -->
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

        <!-- Right Side (محتوى صفحة التحقق) -->
        <div class="w-2/3 px-12 py-6 flex flex-col justify-between overflow-y-auto">
            <div>
                <p class="text-xs text-gray-400 text-right mb-2"></p>

                <div class="max-w-lg mx-auto">
                    <h2 class="text-2xl font-bold text-gray-800 mb-1">Check your inbox</h2>


                    <!-- Alert Box -->
                    <div class="bg-blue-50 border border-blue-100 rounded-lg p-3 mb-4">
                        <p class="text-xs font-semibold text-blue-900">Verification email sent</p>
                        <p class="text-[11px] text-blue-700 mt-0.5">Your code is valid for 10 minutes. Keep this window open while you check your email.</p>
                    </div>

                    <!-- Form -->
                    <form action="#" method="POST" class="space-y-3">
                       
                        
                        <div>
                            <label class="block text-xs font-medium text-gray-700 mb-1">Verification code</label>
                            <input type="text" name="code" placeholder="4 8 2 1 6 9" maxlength="6" class="w-full px-3 py-2 border border-blue-600 rounded text-xs tracking-widest font-mono focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                            <p class="text-[10px] text-gray-500 mt-1">Six digits - You can paste the full code.</p>
                        </div>

                        <!-- Verify Button -->
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-5 py-2 rounded text-xs transition mt-2">
                            Verify email & continue
                        </button>
                    </form>

                    <!-- Resend Code -->
                    <div class="flex items-center justify-between mt-4 text-xs">
                        <span class="text-gray-500">Didn't receive it?</span>
                        <a href="#" class="text-blue-600 font-medium hover:underline">Resend code</a>
                    </div>

                    <!-- Info Box -->
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 mt-6">
                        <p class="text-xs font-semibold text-gray-800 mb-1">A couple of things to check</p>
                        <p class="text-[11px] text-gray-600 leading-relaxed">
                            Look in spam or promotions folders. Make sure your email address is spelled correctly. Requesting a new code makes the previous code expire.
                        </p>
                    </div>

                    
                    </div>

                 
                </div>
            </div>

        
        </div>

    </div>

</body>
</html>