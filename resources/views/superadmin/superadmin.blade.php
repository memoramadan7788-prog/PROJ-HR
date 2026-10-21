<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirebridge - Super Admin Overview</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased h-full overflow-hidden">

    <!-- Container الكلي (Fixed layout) -->
    <div class="h-screen flex flex-col overflow-hidden">
        
        <!-- Top Navbar -->
        <header class="bg-white border-b border-gray-200 h-16 flex items-center justify-between px-6 shrink-0 z-30">
            <div class="flex items-center gap-8">
                <span class="text-xl font-bold tracking-wider text-slate-900">hirebridge</span>
                <div class="relative hidden md:block">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 text-sm">🔍</span>
                    <input type="text" placeholder="Search Hirebridge... ⌘K" class="pl-9 pr-4 py-1.5 bg-gray-100 rounded-lg text-sm border-none outline-none w-64 text-gray-600 focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <div class="flex items-center gap-6 text-sm font-medium text-gray-600">
                <a href="javascript:void(0)" class="hover:text-gray-900 transition">Help</a>
                <a href="javascript:void(0)" class="hover:text-gray-900 transition">Notifications</a>
                <div class="flex items-center gap-2 text-gray-900 font-semibold cursor-pointer">
                    <span>Priya Shah</span>
                    <div class="w-8 h-8 rounded-full bg-slate-900 text-white flex items-center justify-center text-xs font-bold">PS</div>
                </div>
            </div>
        </header>

        <!-- Body Layout (Sidebar + Main Content Area) -->
        <div class="flex flex-1 overflow-hidden">
            
            <!-- Sidebar -->
            <aside class="w-64 bg-[#0f2243] text-gray-300 flex flex-col justify-between hidden md:flex p-6 shrink-0 h-full overflow-y-auto">
                <div class="space-y-8">
                    <div>
                        <span class="text-xs font-semibold tracking-wider text-gray-400 uppercase">SUPER ADMIN</span>
                        <div class="mt-2 text-sm font-medium text-white bg-white/10 px-3 py-2 rounded-lg flex items-center justify-between cursor-pointer hover:bg-white/15 transition">
                            <span>Hirebridge platform</span>
                            <span>▾</span>
                        </div>
                    </div>

                    <nav class="space-y-1 text-sm">
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg bg-white/10 text-white font-semibold transition">Overview</a>
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Organizations</a>
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Users & access</a>
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Job moderation</a>
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Agency operations</a>
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Settings & audit</a>
                    </nav>
                </div>

                <div class="space-y-2 text-xs text-gray-400 pt-6 border-t border-white/10">
                    <a href="javascript:void(0)" class="block hover:text-white transition">Help & support</a>
                    <a href="javascript:void(0)" class="block hover:text-white transition">Privacy & security</a>
                </div>
            </aside>

            <!-- Main Content Area -->
            <main class="flex-1 h-full overflow-y-auto p-6 md:p-8 bg-gray-50">
                <div class="max-w-6xl mx-auto space-y-6 pb-12">
                    
                    <!-- Breadcrumb & Header -->
                    <div>
                        <div class="text-xs text-gray-500">45 / Platform / Overview</div>
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mt-1">
                            <div>
                                <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Platform operations</h1>
                                <p class="text-xs text-gray-500 mt-0.5">Hirebridge · Priya Shah · Operational snapshot for October 20, 2026</p>
                            </div>
                            <button type="button" class="px-5 py-2.5 bg-[#0f62fe] hover:bg-blue-700 text-white font-semibold rounded-xl text-sm shadow transition shrink-0">
                                View audit log
                            </button>
                        </div>
                    </div>

                    <!-- Metrics Cards Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm space-y-2">
                            <span class="text-[11px] font-semibold text-gray-500 uppercase tracking-wider">Active organizations</span>
                            <div class="text-3xl font-bold text-gray-900">12</div>
                            <span class="text-xs text-gray-500">9 companies · 3 agencies</span>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm space-y-2">
                            <span class="text-[11px] font-semibold text-gray-500 uppercase tracking-wider">Published jobs</span>
                            <div class="text-3xl font-bold text-gray-900">24</div>
                            <span class="text-xs text-gray-500">16 direct-only · 8 agency supported</span>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm space-y-2">
                            <span class="text-[11px] font-semibold text-gray-500 uppercase tracking-wider">Active engagements</span>
                            <div class="text-3xl font-bold text-gray-900">6</div>
                            <span class="text-xs text-gray-500">Across 3 agency workspaces</span>
                        </div>
                        <div class="bg-white p-5 rounded-2xl border border-gray-200 shadow-sm space-y-2">
                            <span class="text-[11px] font-semibold text-gray-500 uppercase tracking-wider">Needs review</span>
                            <div class="text-3xl font-bold text-gray-900">5</div>
                            <span class="text-xs text-gray-500">3 jobs · 2 organizations</span>
                        </div>
                    </div>

                    <!-- Two Columns Section (Operational priorities & Recent events) -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        
                        <!-- Operational priorities (2 Columns Width) -->
                        <div class="lg:col-span-2 bg-white border border-gray-200 rounded-2xl p-6 shadow-sm space-y-5">
                            <h3 class="font-bold text-gray-900 text-base">Operational priorities</h3>
                            
                            <div class="space-y-4 text-xs">
                                <div class="pb-3 border-b border-gray-100 space-y-1">
                                    <div class="font-semibold text-gray-900 text-sm">Job policy review</div>
                                    <div class="text-gray-500">Object: 3 jobs in queue · Owner: Priya Shah · Next step: Review salary / policy flags</div>
                                </div>
                                <div class="pb-3 border-b border-gray-100 space-y-1">
                                    <div class="font-semibold text-gray-900 text-sm">Company verification</div>
                                    <div class="text-gray-500">Object: Cedar Systems · Orbit Analytics · Owner: Priya Shah · Next step: Check business details</div>
                                </div>
                                <div class="pb-3 border-b border-gray-100 space-y-1">
                                    <div class="font-semibold text-gray-900 text-sm">Agency delivery review</div>
                                    <div class="text-gray-500">Object: Northstar · Product Design · Owner: Jamie Rivera · Next step: Review 2 pending submissions</div>
                                </div>
                                <div class="space-y-1">
                                    <div class="font-semibold text-gray-900 text-sm">Access review</div>
                                    <div class="text-gray-500">Object: 1 suspended user · Owner: Priya Shah · Next step: Review support case</div>
                                </div>
                            </div>
                        </div>

                        <!-- Recent events (1 Column Width) -->
                        <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm space-y-4">
                            <h3 class="font-bold text-gray-900 text-base">Recent events</h3>
                            
                            <div class="space-y-4 text-xs text-gray-600">
                                <div class="space-y-0.5">
                                    <div class="font-semibold text-gray-900">9:42 - Job changes requested</div>
                                    <div class="text-gray-500">Lumen Financial - LF-091 - Salary range missing</div>
                                </div>
                                <div class="space-y-0.5">
                                    <div class="font-semibold text-gray-900">9:18 - Team access updated</div>
                                    <div class="text-gray-500">Northstar Labs - Interviewer scope</div>
                                </div>
                                <div class="space-y-0.5">
                                    <div class="font-semibold text-gray-900">8:55 - Engagement assigned</div>
                                    <div class="text-gray-500">Hirebridge Talent - Northstar NS-205</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Bottom Two Columns Section (Organization health & Security & privacy) -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        
                        <!-- Organization health -->
                        <div class="lg:col-span-2 bg-white border border-gray-200 rounded-2xl p-6 shadow-sm space-y-4">
                            <h3 class="font-bold text-gray-900 text-base">Organization health</h3>
                            
                            <div class="space-y-3 text-xs">
                                <div class="pb-3 border-b border-gray-100 space-y-0.5">
                                    <div class="font-semibold text-gray-900">Northstar Labs</div>
                                    <div class="text-gray-500">Type: Company · State: Active - Verified · Activity: 3 open jobs - 29 candidate records</div>
                                </div>
                                <div class="pb-3 border-b border-gray-100 space-y-0.5">
                                    <div class="font-semibold text-gray-900">Hirebridge Talent</div>
                                    <div class="text-gray-500">Type: Agency · State: Active - Verified · Activity: 4 active engagements</div>
                                </div>
                                <div class="pb-3 border-b border-gray-100 space-y-0.5">
                                    <div class="font-semibold text-gray-900">Atlas Health</div>
                                    <div class="text-gray-500">Type: Company · State: Active - Verified · Activity: 2 open jobs</div>
                                </div>
                                <div class="space-y-0.5">
                                    <div class="font-semibold text-gray-900">Cedar Systems</div>
                                    <div class="text-gray-500">Type: Company · State: Verification pending · Activity: Draft jobs only</div>
                                </div>
                            </div>
                        </div>

                        <!-- Security & privacy -->
                        <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-sm space-y-4 flex flex-col justify-between">
                            <div class="space-y-3">
                                <h3 class="font-bold text-gray-900 text-base">Security & privacy</h3>
                                <div class="flex items-center gap-2 text-xs text-emerald-700 font-medium">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                    No critical alerts
                                </div>
                                <p class="text-xs text-gray-500 leading-relaxed">
                                    Admin actions are scoped and notified. Candidate documents require an approved support purpose.
                                </p>
                            </div>
                            <div>
                                <button type="button" class="w-full px-4 py-2 bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold rounded-xl text-xs transition">
                                    Review access policies
                                </button>
                            </div>
                        </div>

                    </div>

                    <!-- Footer note -->
                    <div class="text-[11px] text-gray-400 pt-2 flex items-center justify-between">
                        <span>Hirebridge · Private workspace · All times Central unless noted</span>
                        <span>October 20, 2026</span>
                    </div>

                </div>
            </main>
        </div>

    </div>

</body>
</html>