<header class="h-20 border-b border-slate-100 flex items-center justify-between px-8 sticky top-0 z-40">
    <div class="flex items-center gap-4">
        <button id="hamburger-btn" onclick="toggleSidebar()"
            class="p-2.5 bg-white border border-slate-100 shadow-sm rounded-xl text-slate-500">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="4" x2="20" y1="12" y2="12" />
                <line x1="4" x2="20" y1="6" y2="6" />
                <line x1="4" x2="20" y1="18" y2="18" />
            </svg>
        </button>
        <h2 class="text-sm font-bold text-slate-800" id="current-page-title">Dashboard</h2>
    </div>

    <div class="flex items-center gap-4">
        <div class="hidden md:flex bg-slate-100 rounded-xl px-4 py-2 items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="text-slate-400">
                <circle cx="11" cy="11" r="8" />
                <path d="m21 21-4.3-4.3" />
            </svg>
            <input type="text" placeholder="Cari..." class="bg-transparent text-sm outline-none w-40">
        </div>
        <img src="https://ui-avatars.com/api/?name=Leslie+Alexander&background=5d87ff&color=fff" alt="User"
            class="w-10 h-10 rounded-xl">
    </div>
</header>
