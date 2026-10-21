
@extends('components.layout');
@section('content')

    <section class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 py-16 px-8 md:px-16 transition-colors">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-12">
            <!-- Left Texts & Buttons -->
            <div class="flex-1 space-y-6">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight" data-en="Connecting Talent & Opportunities" data-ar="ربط الكفاءات بالفرص المناسبة">
                    Connecting Talent & Opportunities
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 max-w-xl" data-en="Join the leading HR management platform to find your next job or the perfect candidate." data-ar="انضم إلى المنصة الرائدة في إدارة الموارد البشرية لإيجاد وظيفتك القادمة أو المرشح المثالي.">
                    Join the leading HR management platform to find your next job or the perfect candidate.
                </p>
                <div class="flex flex-wrap gap-4 pt-2">
                    <button onclick="openModal('registerModal')" class="px-7 py-3 bg-[#f25c05] hover:bg-[#e05200] text-white font-bold rounded-lg shadow-md transition" data-en="Find a Job" data-ar="ابحث عن وظيفة">
                        Find a Job
                    </button>
                    <button onclick="openModal('registerModal')" class="px-7 py-3 bg-[#0a53be] hover:bg-[#084298] text-white font-bold rounded-lg shadow-md transition" data-en="Post a Job" data-ar="أضف وظيفة">
                        Post a Job
                    </button>
                </div>
            </div>

            <div class="flex-1 flex justify-center">
                <img src="https://cdni.iconscout.com/illustration/premium/thumb/hr-management-illustration-download-in-svg-png-gif-file-formats--human-resource-recruitment-hiring-business-scenes-pack-illustrations-3783957.png?f=webp&w=600" 
                     alt="HR Management" 
                     class="w-full max-w-md object-contain">
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto my-8 px-6 md:px-8">
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 md:p-8 transition-colors">
            <!-- Header Title -->
            <h3 class="text-xl md:text-2xl font-bold text-[#102a56] dark:text-blue-300 pb-4 border-b border-gray-200 dark:border-gray-700 mb-6" data-en="Our Platform in Numbers" data-ar="منصتنا بالأرقام">
                Our Platform in Numbers
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Stat 1: Companies -->
                <div class="flex items-center gap-4">
                    <div class="p-3.5 bg-blue-50 dark:bg-gray-700 rounded-xl text-[#0f62fe] dark:text-blue-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h4m-4 0V11m0 0h4m-4 0H7m4 0v10m-4-10v10"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-2xl font-extrabold text-gray-900 dark:text-white">1+</div>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-400" data-en="Companies" data-ar="شركة">Companies</div>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="p-3.5 bg-blue-50 dark:bg-gray-700 rounded-xl text-[#0f62fe] dark:text-blue-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-2xl font-extrabold text-gray-900 dark:text-white">2+</div>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-400" data-en="Candidates" data-ar="مرشح">Candidates</div>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="p-3.5 bg-blue-50 dark:bg-gray-700 rounded-xl text-[#0f62fe] dark:text-blue-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-2xl font-extrabold text-gray-900 dark:text-white">3+</div>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-400" data-en="Job Listings" data-ar="وظيفة معلنة">Job Listings</div>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <div class="p-3.5 bg-blue-50 dark:bg-gray-700 rounded-xl text-[#0f62fe] dark:text-blue-400">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-2xl font-extrabold text-gray-900 dark:text-white">4+</div>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-400" data-en="Applications Processed" data-ar="طلب تم معالجته">Applications Processed</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto my-12 px-6 md:px-8">
        <!-- Title with Dividers -->
        <div class="flex items-center justify-center my-8">
            <div class="flex-grow max-w-xs border-t border-gray-300 dark:border-gray-700"></div>
            <div class="flex items-center gap-2 px-4">
                <span class="w-2 h-2 rounded-full bg-blue-400"></span>
                <h2 class="text-2xl md:text-3xl font-extrabold text-[#1a2d52] dark:text-white" data-en="Most Searched" data-ar="الأكثر بحثاً">
                    Most Searched
                </h2>
                <span class="w-2 h-2 rounded-full bg-blue-400"></span>
            </div>
            <div class="flex-grow max-w-xs border-t border-gray-300 dark:border-gray-700"></div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-3 max-w-5xl mx-auto">
            <!-- Tab 1: IT & Software -->
            <button onclick="switchTab('it_tab')" id="btn-it_tab" class="category-tab flex items-center justify-center gap-2.5 px-4 py-3 bg-white dark:bg-gray-800 rounded-xl border-2 border-blue-600 shadow-sm transition hover:shadow-md">
                <span class="text-2xl">💻</span>
                <span class="font-bold text-sm text-gray-800 dark:text-white">IT & Software</span>
            </button>

            <button onclick="switchTab('marketing_tab')" id="btn-marketing_tab" class="category-tab flex items-center justify-center gap-2.5 px-4 py-3 bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm transition hover:shadow-md">
                <span class="text-2xl">📢</span>
                <span class="font-bold text-sm text-gray-800 dark:text-white">Marketing</span>
            </button>

            <button onclick="switchTab('finance_tab')" id="btn-finance_tab" class="category-tab flex items-center justify-center gap-2.5 px-4 py-3 bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm transition hover:shadow-md">
                <span class="text-2xl">💼</span>
                <span class="font-bold text-sm text-gray-800 dark:text-white">Finance</span>
            </button>

            <button onclick="switchTab('hr_tab')" id="btn-hr_tab" class="category-tab flex items-center justify-center gap-2.5 px-4 py-3 bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm transition hover:shadow-md">
                <span class="text-2xl">📝</span>
                <span class="font-bold text-sm text-gray-800 dark:text-white">Human Resources</span>
            </button>

            <button onclick="switchTab('sales_tab')" id="btn-sales_tab" class="category-tab flex items-center justify-center gap-2.5 px-4 py-3 bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 shadow-sm transition hover:shadow-md">
                <span class="text-2xl">👨‍💼</span>
                <span class="font-bold text-sm text-gray-800 dark:text-white">Sales</span>
            </button>
        </div>

        <div class="mt-8 max-w-5xl mx-auto">
            <div id="it_tab" class="tab-content grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white dark:bg-gray-800 p-5 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition">
                    <span class="text-xs font-bold text-blue-600 bg-blue-50 dark:bg-gray-700 px-2.5 py-1 rounded-md">Full Time</span>
                    <h4 class="font-bold text-lg mt-3 text-gray-900 dark:text-white">Senior Software Engineer</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Tech Solutions • Cairo, Egypt</p>
                    <button class="mt-4 w-full py-2 text-sm font-semibold bg-blue-50 hover:bg-blue-100 text-blue-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-300 rounded-xl transition">Apply Now</button>
                </div>
                <div class="bg-white dark:bg-gray-800 p-5 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition">
                    <span class="text-xs font-bold text-emerald-600 bg-emerald-50 dark:bg-gray-700 px-2.5 py-1 rounded-md">Remote</span>
                    <h4 class="font-bold text-lg mt-3 text-gray-900 dark:text-white">Frontend Web Developer</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Innovate Tech • Alexandria</p>
                    <button class="mt-4 w-full py-2 text-sm font-semibold bg-blue-50 hover:bg-blue-100 text-blue-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-300 rounded-xl transition">Apply Now</button>
                </div>
                <div class="bg-white dark:bg-gray-800 p-5 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition">
                    <span class="text-xs font-bold text-purple-600 bg-purple-50 dark:bg-gray-700 px-2.5 py-1 rounded-md">Hybrid</span>
                    <h4 class="font-bold text-lg mt-3 text-gray-900 dark:text-white">DevOps Specialist</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Cloud Systems • Giza</p>
                    <button class="mt-4 w-full py-2 text-sm font-semibold bg-blue-50 hover:bg-blue-100 text-blue-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-300 rounded-xl transition">Apply Now</button>
                </div>
            </div>

            <div id="marketing_tab" class="tab-content hidden grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white dark:bg-gray-800 p-5 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition">
                    <span class="text-xs font-bold text-blue-600 bg-blue-50 dark:bg-gray-700 px-2.5 py-1 rounded-md">Full Time</span>
                    <h4 class="font-bold text-lg mt-3 text-gray-900 dark:text-white">Digital Marketing Specialist</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Creative Agency • Cairo</p>
                    <button class="mt-4 w-full py-2 text-sm font-semibold bg-blue-50 hover:bg-blue-100 text-blue-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-300 rounded-xl transition">Apply Now</button>
                </div>
                <div class="bg-white dark:bg-gray-800 p-5 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition">
                    <span class="text-xs font-bold text-emerald-600 bg-emerald-50 dark:bg-gray-700 px-2.5 py-1 rounded-md">Remote</span>
                    <h4 class="font-bold text-lg mt-3 text-gray-900 dark:text-white">SEO & Content Strategist</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Global Media • Remote</p>
                    <button class="mt-4 w-full py-2 text-sm font-semibold bg-blue-50 hover:bg-blue-100 text-blue-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-300 rounded-xl transition">Apply Now</button>
                </div>
            </div>

            <div id="finance_tab" class="tab-content hidden grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white dark:bg-gray-800 p-5 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition">
                    <span class="text-xs font-bold text-blue-600 bg-blue-50 dark:bg-gray-700 px-2.5 py-1 rounded-md">Full Time</span>
                    <h4 class="font-bold text-lg mt-3 text-gray-900 dark:text-white">Senior Financial Analyst</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Alpha Bank • New Cairo</p>
                    <button class="mt-4 w-full py-2 text-sm font-semibold bg-blue-50 hover:bg-blue-100 text-blue-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-300 rounded-xl transition">Apply Now</button>
                </div>
            </div>

            <div id="hr_tab" class="tab-content hidden grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white dark:bg-gray-800 p-5 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition">
                    <span class="text-xs font-bold text-blue-600 bg-blue-50 dark:bg-gray-700 px-2.5 py-1 rounded-md">Full Time</span>
                    <h4 class="font-bold text-lg mt-3 text-gray-900 dark:text-white">HR Manager</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">HR Connect • Maadi, Cairo</p>
                    <button class="mt-4 w-full py-2 text-sm font-semibold bg-blue-50 hover:bg-blue-100 text-blue-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-300 rounded-xl transition">Apply Now</button>
                </div>
            </div>

            <div id="sales_tab" class="tab-content hidden grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white dark:bg-gray-800 p-5 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition">
                    <span class="text-xs font-bold text-blue-600 bg-blue-50 dark:bg-gray-700 px-2.5 py-1 rounded-md">Full Time</span>
                    <h4 class="font-bold text-lg mt-3 text-gray-900 dark:text-white">Sales Account Executive</h4>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Enterprise Ltd • Smart Village</p>
                    <button class="mt-4 w-full py-2 text-sm font-semibold bg-blue-50 hover:bg-blue-100 text-blue-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:text-blue-300 rounded-xl transition">Apply Now</button>
                </div>
            </div>
        </div>
    </section>

    <div id="registerModal" class="fixed inset-0 bg-black/60 hidden flex justify-center items-center z-50 p-4 backdrop-blur-sm">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-2xl w-96 text-center border border-gray-100 dark:border-gray-700 transition-colors">
            <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white" data-en="Create an Account" data-ar="إنشاء حساب جديد">Create an Account</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-6" data-en="Please choose how you want to register:" data-ar="يرجى اختيار طريقة التسجيل:">Please choose how you want to register:</p>

            <div class="flex flex-col gap-3">
                <button onclick="switchModal('registerModal', 'companyFormModal')" class="w-full py-2.5 bg-[#0f62fe] text-white font-medium rounded-xl hover:bg-blue-700 transition" data-en="Register Company" data-ar="تسجيل شركة">
                    Register Company
                </button>
                <button onclick="switchModal('registerModal', 'employerFormModal')" class="w-full py-2.5 bg-emerald-600 text-white font-medium rounded-xl hover:bg-emerald-700 transition" data-en="Register as Candidate" data-ar="التسجيل كمرشح">
                    Register as Candidate
                </button>
            </div>

            <button onclick="closeModal('registerModal')" class="mt-5 text-sm text-gray-400 dark:text-gray-500 hover:text-gray-600 dark:hover:text-gray-300 transition" data-en="Cancel" data-ar="إلغاء">
                Cancel
            </button>
        </div>
    </div>

    <div id="employerFormModal" class="fixed inset-0 bg-black/70 hidden flex justify-center items-center z-50 p-4 backdrop-blur-sm">
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-lg flex flex-col my-auto border border-gray-100 dark:border-gray-700 transition-colors">

            <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center bg-gray-50 dark:bg-gray-800 rounded-t-2xl">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Candidate Registration</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-0.5">Enter your basic details to create your candidate account</p>
                </div>
                <button onclick="closeModal('employerFormModal')" class="text-2xl font-bold text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">&times;</button>
            </div>

            <form action="#" method="POST" class="p-6 space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full Name *</label>
                    <input type="text" name="name" placeholder="John Michael Doe" required class="w-full px-3.5 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email Address *</label>
                    <input type="email" name="email" placeholder="example@domain.com" required class="w-full px-3.5 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password *</label>
                    <input type="password" name="password" placeholder="••••••••" required class="w-full px-3.5 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                </div>

                <div class="pt-4 border-t border-gray-200 dark:border-gray-700 flex justify-end gap-3">
                    <button type="button" onclick="closeModal('employerFormModal')" class="px-5 py-2.5 text-sm font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-xl transition">
                        Cancel
                    </button>
                    <button type="button" onclick="switchModal('employerFormModal', 'verificationModal')" class="px-7 py-2.5 text-sm font-semibold text-white bg-[#0f62fe] hover:bg-blue-700 rounded-xl shadow-md transition">
                        Submit Registration
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="companyFormModal" class="fixed inset-0 bg-black/70 hidden flex justify-center items-center z-50 p-4 backdrop-blur-sm">
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-2xl w-full max-w-lg flex flex-col my-auto border border-gray-100 dark:border-gray-700 transition-colors">

            <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center bg-gray-50 dark:bg-gray-800 rounded-t-2xl">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Company Registration</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-0.5">Enter your official company details to get started</p>
                </div>
                <button onclick="closeModal('companyFormModal')" class="text-2xl font-bold text-gray-400 hover:text-gray-600 dark:hover:text-gray-200">&times;</button>
            </div>

            <form action="#" method="POST" class="p-6 space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Official Company Name *</label>
                    <input type="text" name="company_name" placeholder="Tech Solutions Inc." required class="w-full px-3.5 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Work Email (Login ID) *</label>
                    <input type="email" name="email" placeholder="hr@company.com" required class="w-full px-3.5 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password *</label>
                    <input type="password" name="password" placeholder="••••••••" required class="w-full px-3.5 py-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-white rounded-lg focus:ring-2 focus:ring-blue-500 outline-none text-sm">
                </div>

                <div class="pt-4 border-t border-gray-200 dark:border-gray-700 flex justify-end gap-3">
                    <button type="button" onclick="closeModal('companyFormModal')" class="px-5 py-2.5 text-sm font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-xl transition">
                        Cancel
                    </button>
                    <button type="button" onclick="switchModal('companyFormModal', 'verificationModal')" class="px-7 py-2.5 text-sm font-semibold text-white bg-[#0f62fe] hover:bg-blue-700 rounded-xl shadow-md transition">
                        Submit Company Request
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div id="verificationModal" class="fixed inset-0 bg-black/70 hidden flex justify-center items-center z-50 p-4 backdrop-blur-sm">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-2xl w-full max-w-md text-center border border-gray-100 dark:border-gray-700 transition-colors">
            <!-- Icon -->
            <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900/40 text-[#0f62fe] dark:text-blue-400 rounded-full flex items-center justify-center mx-auto mb-4 text-3xl">
                ✉️
            </div>
            
            <h3 class="text-2xl font-bold mb-2 text-gray-900 dark:text-white" data-en="Verify Your Email Address" data-ar="تحقق من بريدك الإلكتروني">Verify Your Email Address</h3>
            
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-6" data-en="Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?" data-ar="شكراً لتسجيلك! قبل البدء، يرجى تأكيد بريدك الإلكتروني بالضغط على الرابط الذي أرسلناه إليك للتو.">
                Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you?
            </p>

            <div class="space-y-3">
                <!-- Resend Verification Email Form -->
                <form action="#" method="POST">
                    @csrf
                    <button type="submit" class="w-full py-2.5 bg-[#0f62fe] hover:bg-blue-700 text-white font-medium rounded-xl transition shadow-sm text-sm" data-en="Resend Verification Email" data-ar="إعادة إرسال بريد التحقق">
                        Resend Verification Email
                    </button>
                </form>

                <button onclick="closeModal('verificationModal')" class="w-full py-2.5 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-xl transition text-sm" data-en="Close / Back to Home" data-ar="إغلاق / العودة للرئيسية">
                    Close / Back to Home
                </button>
            </div>
        </div>
    </div>

    <script>
        // Modal Control Functions
        function openModal(id) {
            const modal = document.getElementById(id);
            if(modal) {
                modal.classList.remove('hidden');
            }
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            if(modal) {
                modal.classList.add('hidden');
            }
        }

        function switchModal(closeId, openId) {
            closeModal(closeId);
            openModal(openId);
        }

        function switchTab(targetTabId) {
            const contents = document.querySelectorAll('.tab-content');
            contents.forEach(content => content.classList.add('hidden'));

            const tabs = document.querySelectorAll('.category-tab');
            tabs.forEach(tab => {
                tab.classList.remove('border-blue-600', 'border-2');
                tab.classList.add('border-gray-200', 'dark:border-gray-700', 'border');
            });

            const currentTab = document.getElementById(targetTabId);
            if(currentTab) {
                currentTab.classList.remove('hidden');
            }

            const activeBtn = document.getElementById('btn-' + targetTabId);
            if(activeBtn) {
                activeBtn.classList.remove('border-gray-200', 'dark:border-gray-700', 'border');
                activeBtn.classList.add('border-blue-600', 'border-2');
            }
        }

        let currentLang = 'EN';
        function toggleLanguage() {
            currentLang = currentLang === 'EN' ? 'AR' : 'EN';
            document.getElementById('langBtnText').innerText = currentLang;

            const langElements = document.querySelectorAll('[data-en][data-ar]');
            langElements.forEach(el => {
                if (currentLang === 'AR') {
                    el.innerText = el.getAttribute('data-ar');
                    document.documentElement.setAttribute('dir', 'rtl');
                } else {
                    el.innerText = el.getAttribute('data-en');
                    document.documentElement.setAttribute('dir', 'ltr');
                }
            });
        }
    </script>
@endsection