<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirebridge - Interviewer Scorecard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased h-full overflow-hidden">

    <!-- Container الكلي ملء الشاشة بدون سكرول خارجي -->
    <div class="h-screen flex flex-col overflow-hidden">
        
        <!-- 1. Top Navbar (ثابت فوق) -->
        <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-6 shrink-0 z-30">
            <div class="flex items-center gap-8">
                <span class="text-xl font-bold tracking-wider text-slate-900">hirebridge</span>
                <div class="relative hidden md:block">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 text-sm">🔍</span>
                    <input type="text" placeholder="Search Hirebridge... ⌘K" class="pl-9 pr-4 py-1.5 bg-gray-100 rounded-lg text-sm border-none outline-none w-64 text-gray-600 focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <div class="flex items-center gap-6 text-sm font-medium text-gray-600">
                <a href="#" class="hover:text-gray-900 transition">Help</a>
                <a href="#" class="hover:text-gray-900 transition">Notifications</a>
                <div class="flex items-center gap-2 text-gray-900 font-semibold cursor-pointer">
                    <span>Alex Morgan</span>
                    <div class="w-8 h-8 rounded-full bg-slate-800 text-white flex items-center justify-center text-xs font-bold">AM</div>
                </div>
            </div>
        </header>

        <!-- Body Layout (Sidebar + Main Scrollable Content) -->
        <div class="flex flex-1 overflow-hidden">
            
            <!-- 2. Sidebar (ثابت تماماً وقابل للاستجابة) -->
            <aside class="w-64 bg-[#0f2243] text-gray-300 flex flex-col justify-between hidden md:flex p-6 shrink-0 h-full overflow-y-auto">
                <div class="space-y-8">
                    <div>
                        <span class="text-xs font-semibold tracking-wider text-gray-400 uppercase">Interviewer</span>
                        <div class="mt-2 text-sm font-medium text-white bg-white/10 px-3 py-2 rounded-lg flex items-center justify-between cursor-pointer hover:bg-white/15 transition">
                            <span>Northstar Labs</span>
                            <span>▾</span>
                        </div>
                    </div>

                    <nav class="space-y-1 text-sm">
                        <a href="#" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Overview</a>
                        <a href="#" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">My schedule</a>
                        <a href="#" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Interview preparation</a>
                        <a href="#" class="block px-3 py-2 rounded-lg bg-white/10 text-white font-semibold transition">Scorecards</a>
                        <a href="#" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Availability</a>
                    </nav>
                </div>

              
            </aside>

            <main class="flex-1 h-full overflow-y-auto p-6 md:p-10 bg-gray-50">
                <div class="max-w-4xl mx-auto space-y-6 pb-12">
                    
                    <!-- Breadcrumb & Title -->
                    <div>
                      
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mt-1">Submit scorecard · {{ $scorecardData['candidate_name'] }}</h1>
                       
                    </div>

                    <!-- Journey state note -->
                    <div class="bg-gray-100 border border-gray-200 p-4 rounded-xl text-xs space-y-1 text-gray-700">
                        <p class="font-bold text-gray-900">Journey-state example</p>
                        <p class="text-gray-500">Post-interview draft example · This scorecard follows the October 22 session and is not recorded as completed in the earlier upcoming-state overview.</p>
                    </div>

                    <!-- Grid Layout for Form and Visibility Sidebar -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                        
                        <!-- Left Side: Competencies & Recommendations -->
                        <div class="lg:col-span-2 space-y-6">
                            
                            <!-- Competency ratings box -->
                            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm space-y-4">
                                <h3 class="font-bold text-gray-900">Competency ratings</h3>
                                <p class="text-xs text-gray-500">1 Below · 2 Developing · 3 Meets · 4 Strong · N/D Not observed</p>
                                
                                <div class="divide-y divide-gray-100">
                                    @foreach($scorecardData['competencies'] as $comp)
                                        <div class="py-3.5 space-y-1 text-sm">
                                            <div class="font-semibold text-gray-900">{{ $comp['name'] }}</div>
                                            <div class="text-xs text-gray-600 leading-relaxed">
                                                <strong class="text-gray-800">Rating:</strong> {{ $comp['rating'] }} &nbsp;&nbsp;|&nbsp;&nbsp; <strong class="text-gray-800">Evidence:</strong> {{ $comp['evidence'] }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Recommendation & evidence -->
                            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm space-y-5">
                                <h3 class="font-bold text-gray-900">Recommendation & evidence</h3>
                                
                                <div class="space-y-1.5">
                                    <label class="text-xs font-bold text-gray-700">Strengths *</label>
                                    <div class="p-3 bg-gray-50 rounded-xl text-sm text-gray-800 border border-gray-200 leading-relaxed">
                                        {{ $scorecardData['strengths'] }}
                                    </div>
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-bold text-gray-700">Concerns / areas to explore *</label>
                                    <div class="p-3 bg-gray-50 rounded-xl text-sm text-gray-800 border border-gray-200 leading-relaxed">
                                        {{ $scorecardData['concerns'] }}
                                    </div>
                                </div>

                                <div class="space-y-1.5">
                                    <label class="text-xs font-bold text-gray-700">Overall recommendation *</label>
                                    <div class="p-3 bg-gray-50 rounded-xl text-sm text-gray-800 border border-gray-200 font-semibold">
                                        {{ $scorecardData['recommendation'] }}
                                    </div>
                                </div>

                                <div class="flex items-center gap-2 text-xs text-gray-600 pt-2">
                                    <input type="checkbox" id="consent" checked class="rounded border-gray-300 text-blue-600 focus:ring-blue-500 w-4 h-4">
                                    <label for="consent" class="cursor-pointer">My feedback is based on role-related evidence and is ready to share with the hiring team</label>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                                    <button class="px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold rounded-xl text-sm transition">Save draft</button>
                                    <button class="px-6 py-2.5 bg-[#0f62fe] hover:bg-blue-700 text-white font-semibold rounded-xl text-sm shadow transition">Submit scorecard</button>
                                </div>
                            </div>

                        </div>

                        <!-- Right Side: Submission Visibility (Sticky inside content area) -->
                        <div class="space-y-6 lg:sticky lg:top-0">
                            <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm space-y-4 text-xs text-gray-600">
                                <h4 class="font-bold text-gray-900 text-sm">Submission visibility</h4>
                                <p class="flex items-center gap-2 font-medium text-amber-700">
                                    <span class="w-2 h-2 rounded-full bg-amber-500"></span> Draft - Not submitted
                                </p>
                                <p class="leading-relaxed">Shared with Olivia Bennett and Daniel Brooks after submission. Not visible to the candidate.</p>
                                <p class="leading-relaxed">Submitting records your feedback; it does not move Maya's stage or send an offer.</p>
                            </div>

                            <div class="bg-gray-100 border border-gray-200/60 rounded-2xl p-6 space-y-2 text-xs text-gray-600">
                                <p class="font-bold text-gray-800">Use N/D when needed</p>
                                <p class="leading-relaxed">Do not infer a rating for a competency you did not observe. Mark it Not observed and explain what was missing.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </main>
        </div>

    </div>

</body>
</html>