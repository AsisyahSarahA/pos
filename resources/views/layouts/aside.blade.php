        <aside id="sidebar" class="w-72 bg-white border-r border-slate-100 fixed lg:sticky top-0 h-screen z-50 transition-all duration-300">
            <div class="p-8 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#5d87ff] rounded-xl flex items-center justify-center text-white shadow-lg shadow-blue-200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <span class="text-xl font-bold tracking-tight">MatDash</span>
                </div>
                <button onclick="toggleSidebar()" class="p-2 hover:bg-slate-50 rounded-lg text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                </button>
            </div>

            <nav class="px-6 py-2 overflow-y-auto">
                <div class="mb-8">
                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-[2px] px-4 mb-4">Ringkasan</p>
                    <ul class="space-y-1.5">
                        <li>
                            <a href="javascript:void(0)" onclick="showPage('dashboard')" id="nav-dashboard" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-xl transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/></svg>
                                <span class="text-sm font-semibold">Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mb-8">
                    <p class="text-[11px] font-bold text-slate-400 uppercase tracking-[2px] px-4 mb-4">Manajemen Data</p>
                    <ul class="space-y-1.5">
                        <li>
                            <a href="javascript:void(0)" onclick="showPage('produk')" id="nav-produk" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>
                                <span class="text-sm font-medium">Produk</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
                                <span class="text-sm font-medium">Supplier</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                <span class="text-sm font-medium">Customer</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-item flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 hover:bg-slate-50 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m16 6 4 14"/><path d="M12 6v14"/><path d="M8 8v12"/></svg>
                                <span class="text-sm font-medium">Categories</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
