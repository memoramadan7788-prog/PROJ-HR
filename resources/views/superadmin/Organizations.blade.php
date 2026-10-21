<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hirebridge - Organizations</title>
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
                        <span class="text-xs font-semibold tracking-wider text-gray-400 uppercase">Super Admin</span>
                        <div class="mt-2 text-sm font-medium text-white bg-white/10 px-3 py-2 rounded-lg flex items-center justify-between cursor-pointer hover:bg-white/15 transition">
                            <span>Hirebridge platform</span>
                            <span>▾</span>
                        </div>
                    </div>

                    <nav class="space-y-1 text-sm">
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Overview</a>
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg bg-white/10 text-white font-semibold transition">Organizations</a>
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Users & access</a>
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Job moderation</a>
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Agency operations</a>
                        <a href="javascript:void(0)" class="block px-3 py-2 rounded-lg hover:bg-white/5 transition">Settings & audit</a>
                    </nav>
                </div>
            </aside>

            <!-- Main Content Area (الاسكرول يظهر تلقائياً عند زيادة حجم البيانات فقط) -->
            <main class="flex-1 h-full overflow-y-auto p-6 md:p-8 bg-gray-50">
                <div class="max-w-6xl mx-auto space-y-5">
                    
                    <!-- Breadcrumb & Header -->
                    <div>
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mt-1">
                            <div>
                                <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Organizations</h1>
                                <p class="text-xs text-gray-500 mt-0.5">Manage company and recruitment-agency workspaces with clear lifecycle states.</p>
                            </div>
                            <button type="button" class="px-5 py-2.5 bg-[#0f62fe] hover:bg-blue-700 text-white font-semibold rounded-xl text-sm shadow transition shrink-0">
                                + Add organization
                            </button>
                        </div>
                    </div>

                    <!-- Tabs & Filters Row -->
                    <div class="space-y-3 pt-1">
                        <!-- Status Tabs -->
                        <div class="flex items-center gap-6 border-b border-gray-200 text-sm">
                            <button type="button" class="pb-2 font-semibold text-blue-600 border-b-2 border-blue-600">Active (12)</button>
                            <button type="button" class="pb-2 font-medium text-gray-500 hover:text-gray-900 transition">Pending verification (2)</button>
                            <button type="button" class="pb-2 font-medium text-gray-500 hover:text-gray-900 transition">Suspended (1)</button>
                            <button type="button" class="pb-2 font-medium text-gray-500 hover:text-gray-900 transition">Archived (2)</button>
                        </div>

                        <!-- Search and Filter Controls -->
                        <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-4">
                            <div class="relative flex-1 max-w-md">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 text-sm">🔍</span>
                                <input type="text" placeholder="Search organization, domain, or owner" class="w-full pl-9 pr-4 py-1.5 bg-white rounded-xl text-sm border border-gray-200 outline-none text-gray-700 placeholder-gray-400 shadow-sm focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="flex items-center gap-3">
                                <button type="button" class="px-3 py-1.5 bg-white border border-gray-200 rounded-xl text-xs font-semibold text-gray-700 shadow-sm hover:bg-gray-50 flex items-center gap-2">
                                    Companies + agencies <span>▾</span>
                                </button>
                                <button type="button" class="px-3 py-1.5 bg-white border border-gray-200 rounded-xl text-xs font-semibold text-gray-700 shadow-sm hover:bg-gray-50 flex items-center gap-2">
                                    All plans <span>▾</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Organizations Table -->
                    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-sm text-gray-600">
                                <thead class="bg-gray-50/75 text-gray-700 uppercase text-[11px] font-bold border-b border-gray-100 tracking-wider">
                                    <tr>
                                        <th class="py-3 px-5">Organization / type</th>
                                        <th class="py-3 px-5">Plan</th>
                                        <th class="py-3 px-5">Verification</th>
                                        <th class="py-3 px-5">Owner</th>
                                        <th class="py-3 px-5 text-right">Active jobs / action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100 text-xs">
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="py-3 px-5 font-semibold text-gray-900">Northstar Labs <br><span class="font-normal text-gray-400">Company</span></td>
                                        <td class="py-3 px-5">Business</td>
                                        <td class="py-3 px-5 text-emerald-700 font-medium">Verified · Active</td>
                                        <td class="py-3 px-5 text-gray-800">Olivia Bennett</td>
                                        <td class="py-3 px-5 text-right font-medium text-blue-600 hover:text-blue-800 cursor-pointer">3 · View organization</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="py-3 px-5 font-semibold text-gray-900">Meridian Studio <br><span class="font-normal text-gray-400">Company</span></td>
                                        <td class="py-3 px-5">Growth</td>
                                        <td class="py-3 px-5 text-emerald-700 font-medium">Verified · Active</td>
                                        <td class="py-3 px-5 text-gray-800">Jamie Rivera</td>
                                        <td class="py-3 px-5 text-right font-medium text-blue-600 hover:text-blue-800 cursor-pointer">2 · View organization</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="py-3 px-5 font-semibold text-gray-900">Atlas Health <br><span class="font-normal text-gray-400">Company</span></td>
                                        <td class="py-3 px-5">Business</td>
                                        <td class="py-3 px-5 text-emerald-700 font-medium">Verified · Active</td>
                                        <td class="py-3 px-5 text-gray-800">Sam Wilson</td>
                                        <td class="py-3 px-5 text-right font-medium text-blue-600 hover:text-blue-800 cursor-pointer">2 · View organization</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="py-3 px-5 font-semibold text-gray-900">Lumen Financial <br><span class="font-normal text-gray-400">Company</span></td>
                                        <td class="py-3 px-5">Growth</td>
                                        <td class="py-3 px-5 text-emerald-700 font-medium">Verified · Active</td>
                                        <td class="py-3 px-5 text-gray-800">Casey Tran</td>
                                        <td class="py-3 px-5 text-right font-medium text-blue-600 hover:text-blue-800 cursor-pointer">3 · View organization</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="py-3 px-5 font-semibold text-gray-900">Hirebridge Talent <br><span class="font-normal text-gray-400">Agency</span></td>
                                        <td class="py-3 px-5">Agency partner</td>
                                        <td class="py-3 px-5 text-emerald-700 font-medium">Verified · Active</td>
                                        <td class="py-3 px-5 text-gray-800">Jamie Rivera</td>
                                        <td class="py-3 px-5 text-right font-medium text-blue-600 hover:text-blue-800 cursor-pointer">8 assigned roles · View</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="py-3 px-5 font-semibold text-gray-900">Peoplecraft <br><span class="font-normal text-gray-400">Agency</span></td>
                                        <td class="py-3 px-5">Agency partner</td>
                                        <td class="py-3 px-5 text-emerald-700 font-medium">Verified · Active</td>
                                        <td class="py-3 px-5 text-gray-800">Erin James</td>
                                        <td class="py-3 px-5 text-right font-medium text-blue-600 hover:text-blue-800 cursor-pointer">3 assigned roles · View</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="py-3 px-5 font-semibold text-gray-900">Grove & Co. <br><span class="font-normal text-gray-400">Company</span></td>
                                        <td class="py-3 px-5">Growth</td>
                                        <td class="py-3 px-5 text-emerald-700 font-medium">Verified · Active</td>
                                        <td class="py-3 px-5 text-gray-800">Robin Ellis</td>
                                        <td class="py-3 px-5 text-right font-medium text-blue-600 hover:text-blue-800 cursor-pointer">2 · View organization</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Table Footer Pagination -->
                        <div class="px-5 py-3 bg-gray-50 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500">
                            <span>Showing 1–7 of 12 active organizations</span>
                            <div class="flex items-center gap-1.5 font-medium">
                                <button type="button" class="px-2.5 py-1 bg-gray-200/70 text-gray-700 rounded-lg">Previous</button>
                                <button type="button" class="px-2.5 py-1 bg-blue-600 text-white rounded-lg shadow-sm">1</button>
                                <button type="button" class="px-2.5 py-1 bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-100">2</button>
                                <button type="button" class="px-2.5 py-1 bg-white border border-gray-200 text-gray-700 rounded-lg hover:bg-gray-100">Next</button>
                            </div>
                        </div>
                    </div>

                    <!-- Lifecycle Review Card -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm space-y-3 text-xs text-gray-600">
                        <div>
                            <h3 class="font-bold text-gray-900 text-sm">Lifecycle review</h3>
                            <p class="text-gray-500 mt-0.5 leading-relaxed">
                                Pending verification: Cedar Systems and Orbit Analytics. Suspended: Pinecrest Recruiting, pending a support review. Verification does not imply a certification or guarantee of an employer.
                            </p>
                        </div>
                        <div class="flex items-center gap-3 pt-0.5">
                            <button type="button" class="px-3.5 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold rounded-xl transition">
                                Review pending organizations
                            </button>
                            <button type="button" class="px-3.5 py-1.5 bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold rounded-xl transition">
                                View suspended workspaces
                            </button>
                        </div>
                    </div>

                </div>
            </main>
        </div>

    </div>

</body>
</html>