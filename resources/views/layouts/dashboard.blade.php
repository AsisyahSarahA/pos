 <div id="page-dashboard" class="page-content active-page p-8">
 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <div class="bg-white p-6 rounded-2xl card-shadow border border-slate-50">
          <div class="flex justify-between items-start mb-4">
              <div class="w-10 h-10 bg-blue-50 text-blue-500 rounded-xl flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                      <circle cx="9" cy="7" r="4" />
                      <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                  </svg>
              </div>
              <span class="text-xs font-bold text-emerald-500 bg-emerald-50 px-2 py-1 rounded-lg">↑ 2.31%</span>
          </div>
          <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Total Visitors</p>
          <h3 class="text-2xl font-bold mt-1">2,01,620</h3>
          <p class="text-[10px] text-slate-400 mt-2 font-medium">Dari Bulan Lalu</p>
      </div>

      <div class="bg-white p-6 rounded-2xl card-shadow border border-slate-50">
          <div class="flex justify-between items-start mb-4">
              <div class="w-10 h-10 bg-indigo-50 text-indigo-500 rounded-xl flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                      <polyline points="10 17 15 12 10 7" />
                      <line x1="15" x2="3" y1="12" y2="12" />
                  </svg>
              </div>
              <span class="text-xs font-bold text-emerald-500 bg-emerald-50 px-2 py-1 rounded-lg">↑ 5.93%</span>
          </div>
          <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Total Clicks</p>
          <h3 class="text-2xl font-bold mt-1">1,96,325</h3>
          <p class="text-[10px] text-slate-400 mt-2 font-medium">Dari Bulan Lalu</p>
      </div>

      <div class="bg-white p-6 rounded-2xl card-shadow border border-slate-50">
          <div class="flex justify-between items-start mb-4">
              <div class="w-10 h-10 bg-purple-50 text-purple-500 rounded-xl flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <line x1="12" x2="12" y1="2" y2="22" />
                      <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                  </svg>
              </div>
              <span class="text-xs font-bold text-emerald-500 bg-emerald-50 px-2 py-1 rounded-lg">↑ 9.05%</span>
          </div>
          <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Commission</p>
          <h3 class="text-2xl font-bold mt-1">1,20,145</h3>
          <p class="text-[10px] text-slate-400 mt-2 font-medium">Dari Bulan Lalu</p>
      </div>

      <div class="bg-white p-6 rounded-2xl card-shadow border border-slate-50">
          <div class="flex justify-between items-start mb-4">
              <div class="w-10 h-10 bg-rose-50 text-rose-500 rounded-xl flex items-center justify-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                  </svg>
              </div>
              <span class="text-xs font-bold text-rose-500 bg-rose-50 px-2 py-1 rounded-lg">↓ 1.03%</span>
          </div>
          <p class="text-slate-400 text-xs font-bold uppercase tracking-wider">Bounce Rate</p>
          <h3 class="text-2xl font-bold mt-1">1,546</h3>
          <p class="text-[10px] text-slate-400 mt-2 font-medium">Dari Bulan Lalu</p>
      </div>
  </div>

  <!-- Charts Row -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
      <div class="bg-white p-8 rounded-2xl card-shadow border border-slate-50">
          <div class="flex justify-between items-center mb-6">
              <h4 class="font-bold text-slate-800">Sales Overview</h4>
              <select
                  class="text-xs bg-slate-50 border-none rounded-lg px-2 py-1 outline-none font-bold text-slate-500">
                  <option>Agustus 2023</option>
              </select>
          </div>
          <div class="chart-container">
              <canvas id="salesChart"></canvas>
          </div>
      </div>

      <div class="bg-white p-8 rounded-2xl card-shadow border border-slate-50">
          <div class="flex justify-between items-center mb-6">
              <h4 class="font-bold text-slate-800">Performance</h4>
              <div class="flex gap-4 text-[10px] font-bold uppercase tracking-widest">
                  <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-[#5d87ff]"></span>
                      Target</span>
                  <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                      Paid</span>
              </div>
          </div>
          <div class="chart-container">
              <canvas id="performanceChart"></canvas>
          </div>
      </div>
  </div>

  <!-- Recent Activity Table (Referencing image_bc2088.png bottom) -->
  <div class="bg-white rounded-2xl card-shadow border border-slate-50 overflow-hidden">
      <div class="p-6 border-b border-slate-50 flex justify-between items-center">
          <h4 class="font-bold text-slate-800">Recent Activity</h4>
          <button class="text-xs font-bold text-[#5d87ff]">Lihat Semua</button>
      </div>
      <div class="overflow-x-auto">
          <table class="w-full text-left">
              <thead class="bg-slate-50 text-[11px] font-bold text-slate-400 uppercase tracking-wider">
                  <tr>
                      <th class="px-8 py-4">User</th>
                      <th class="px-8 py-4">Date & Time</th>
                      <th class="px-8 py-4">Commission</th>
                      <th class="px-8 py-4">Status</th>
                  </tr>
              </thead>
              <tbody class="text-sm divide-y divide-slate-50">
                  <tr>
                      <td class="px-8 py-4 flex items-center gap-3">
                          <img src="https://ui-avatars.com/api/?name=Esther+Howard" class="w-8 h-8 rounded-lg">
                          <span class="font-semibold text-slate-700">Esther Howard</span>
                      </td>
                      <td class="px-8 py-4 text-slate-500">22 Aug, 5:32 pm</td>
                      <td class="px-8 py-4 font-bold">38,582 USD</td>
                      <td class="px-8 py-4">
                          <span
                              class="px-3 py-1 bg-emerald-50 text-emerald-500 rounded-lg text-xs font-bold">Successful</span>
                      </td>
                  </tr>
                  <tr>
                      <td class="px-8 py-4 flex items-center gap-3">
                          <img src="https://ui-avatars.com/api/?name=Cameron+Williamson" class="w-8 h-8 rounded-lg">
                          <span class="font-semibold text-slate-700">Cameron Williamson</span>
                      </td>
                      <td class="px-8 py-4 text-slate-500">22 Aug, 6:12 pm</td>
                      <td class="px-8 py-4 font-bold">35,957 USD</td>
                      <td class="px-8 py-4">
                          <span
                              class="px-3 py-1 bg-amber-50 text-amber-500 rounded-lg text-xs font-bold">Pending</span>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>
  </div>
  </div>

  <!-- PAGE: PRODUK (COMPREHENSIVE FORM) -->
  <div id="page-produk" class="page-content p-8 max-w-6xl mx-auto">
      <div class="flex justify-between items-end mb-10">
          <div>
              <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Manajemen Produk</h1>
              <p class="text-sm text-slate-400 font-medium">Lengkapi seluruh elemen formulir untuk integrasi data yang
                  sempurna.</p>
          </div>
          <div class="flex gap-3">
              <button
                  class="px-6 py-2.5 rounded-xl text-sm font-bold border border-slate-200 text-slate-600 hover:bg-white hover:shadow-sm transition-all flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2">
                      <path d="M3 6h18" />
                      <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6" />
                      <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2" />
                  </svg>
                  Reset
              </button>
              <button
                  class="px-6 py-2.5 rounded-xl text-sm font-bold bg-[#5d87ff] text-white shadow-lg shadow-blue-100 hover:bg-blue-600 transition-all flex items-center gap-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2.5">
                      <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                      <polyline points="17 21 17 13 7 13 7 21" />
                      <polyline points="7 3 7 8 15 8" />
                  </svg>
                  Simpan Data
              </button>
          </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- Left Column: Primary Info -->
          <div class="lg:col-span-2 space-y-8">
              <div class="bg-white rounded-[24px] card-shadow border border-slate-50 p-8">
                  <h4 class="text-sm font-bold text-slate-800 mb-6 flex items-center gap-2">
                      <span class="w-1.5 h-6 bg-[#5d87ff] rounded-full"></span>
                      Informasi Utama
                  </h4>

                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                      <!-- Text Input -->
                      <div class="space-y-2">
                          <label class="text-[11px] font-bold text-slate-500 uppercase tracking-widest">Nama
                              Produk</label>
                          <div class="form-group-icon">
                              <div class="form-icon-wrapper">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                      <path d="m21 16-4 4-4-4" />
                                      <path d="M17 20V4" />
                                      <path d="m3 8 4-4 4 4" />
                                      <path d="M7 4v16" />
                                  </svg>
                              </div>
                              <input type="text" placeholder="Contoh: Asus ROG Strix"
                                  class="input-with-icon w-full px-4 py-3 rounded-xl border border-slate-100 bg-slate-50/50 text-sm font-medium outline-none focus:bg-white focus:border-[#5d87ff] focus:ring-4 focus:ring-blue-50 transition-all">
                          </div>
                      </div>

                      <!-- Select Menu -->
                      <div class="space-y-2">
                          <label class="text-[11px] font-bold text-slate-500 uppercase tracking-widest">Kategori
                              Inventaris</label>
                          <div class="form-group-icon">
                              <div class="form-icon-wrapper">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                      <rect width="7" height="7" x="3" y="3" rx="1" />
                                      <rect width="7" height="7" x="14" y="3" rx="1" />
                                      <rect width="7" height="7" x="14" y="14" rx="1" />
                                      <rect width="7" height="7" x="3" y="14" rx="1" />
                                  </svg>
                              </div>
                              <select
                                  class="input-with-icon w-full px-4 py-3 rounded-xl border border-slate-100 bg-slate-50/50 text-sm font-medium outline-none focus:bg-white focus:border-[#5d87ff] appearance-none cursor-pointer">
                                  <option value="">Pilih Kategori</option>
                                  <option>Komputer & Laptop</option>
                                  <option>Aksesoris Gaming</option>
                                  <option>Perangkat Jaringan</option>
                              </select>
                          </div>
                      </div>

                      <!-- Number Input -->
                      <div class="space-y-2">
                          <label class="text-[11px] font-bold text-slate-500 uppercase tracking-widest">Harga Per Unit
                              (Rp)</label>
                          <div class="form-group-icon">
                              <div class="form-icon-wrapper">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                      <line x1="12" x2="12" y1="2" y2="22" />
                                      <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                                  </svg>
                              </div>
                              <input type="number" placeholder="0"
                                  class="input-with-icon w-full px-4 py-3 rounded-xl border border-slate-100 bg-slate-50/50 text-sm font-medium outline-none focus:bg-white focus:border-[#5d87ff] transition-all">
                          </div>
                      </div>

                      <!-- Date Input -->
                      <div class="space-y-2">
                          <label class="text-[11px] font-bold text-slate-500 uppercase tracking-widest">Tanggal
                              Masuk</label>
                          <div class="form-group-icon">
                              <div class="form-icon-wrapper">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                      viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                      <rect width="18" height="18" x="3" y="4" rx="2"
                                          ry="2" />
                                      <line x1="16" x2="16" y1="2" y2="6" />
                                      <line x1="8" x2="8" y1="2" y2="6" />
                                      <line x1="3" x2="21" y1="10" y2="10" />
                                  </svg>
                              </div>
                              <input type="date"
                                  class="input-with-icon w-full px-4 py-3 rounded-xl border border-slate-100 bg-slate-50/50 text-sm font-medium outline-none focus:bg-white focus:border-[#5d87ff] transition-all">
                          </div>
                      </div>
                  </div>

                  <!-- Textarea -->
                  <div class="mt-6 space-y-2">
                      <label class="text-[11px] font-bold text-slate-500 uppercase tracking-widest">Deskripsi
                          Spesifikasi</label>
                      <div class="form-group-icon">
                          <div class="form-icon-wrapper" style="top: 18px; transform: none;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                  <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                                  <polyline points="14 2 14 8 20 8" />
                              </svg>
                          </div>
                          <textarea rows="4" placeholder="Masukkan detail spesifikasi produk di sini..."
                              class="input-with-icon w-full px-4 py-3 rounded-xl border border-slate-100 bg-slate-50/50 text-sm font-medium outline-none focus:bg-white focus:border-[#5d87ff] transition-all resize-none"></textarea>
                      </div>
                  </div>
              </div>

              <!-- Secondary Controls -->
              <div class="bg-white rounded-[24px] card-shadow border border-slate-50 p-8">
                  <h4 class="text-sm font-bold text-slate-800 mb-6">Status & Visibilitas</h4>
                  <div class="flex flex-wrap gap-10">
                      <!-- Checkboxes -->
                      <div class="space-y-4">
                          <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Opsi Tambahan</p>
                          <label class="flex items-center gap-3 cursor-pointer group">
                              <input type="checkbox"
                                  class="custom-checkbox w-5 h-5 rounded-md border-slate-200 appearance-none transition-all cursor-pointer">
                              <span class="text-sm font-semibold text-slate-600 group-hover:text-[#5d87ff]">Unggulan
                                  (Featured)</span>
                          </label>
                          <label class="flex items-center gap-3 cursor-pointer group">
                              <input type="checkbox" checked
                                  class="custom-checkbox w-5 h-5 rounded-md border-slate-200 appearance-none transition-all cursor-pointer">
                              <span class="text-sm font-semibold text-slate-600 group-hover:text-[#5d87ff]">Stok
                                  Tersedia</span>
                          </label>
                      </div>

                      <!-- Radio Buttons -->
                      <div class="space-y-4">
                          <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Kondisi Barang</p>
                          <div class="flex flex-col gap-3">
                              <label class="flex items-center gap-3 cursor-pointer group">
                                  <input type="radio" name="condition" checked
                                      class="custom-radio w-5 h-5 rounded-full border-2 border-slate-200 appearance-none transition-all cursor-pointer">
                                  <span class="text-sm font-semibold text-slate-600 group-hover:text-[#5d87ff]">Baru
                                      (New)</span>
                              </label>
                              <label class="flex items-center gap-3 cursor-pointer group">
                                  <input type="radio" name="condition"
                                      class="custom-radio w-5 h-5 rounded-full border-2 border-slate-200 appearance-none transition-all cursor-pointer">
                                  <span class="text-sm font-semibold text-slate-600 group-hover:text-[#5d87ff]">Bekas
                                      (Used)</span>
                              </label>
                              <label class="flex items-center gap-3 cursor-pointer group">
                                  <input type="radio" name="condition"
                                      class="custom-radio w-5 h-5 rounded-full border-2 border-slate-200 appearance-none transition-all cursor-pointer">
                                  <span
                                      class="text-sm font-semibold text-slate-600 group-hover:text-[#5d87ff]">Rekondisi</span>
                              </label>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Right Column: Sidebar Form -->
          <div class="lg:col-span-1 space-y-8">
              <!-- Media Upload Simulation -->
              <div class="bg-white rounded-[24px] card-shadow border border-slate-50 p-8 text-center">
                  <h4 class="text-sm font-bold text-slate-800 mb-6 text-left">Foto Produk</h4>
                  <div
                      class="border-2 border-dashed border-slate-100 rounded-2xl p-8 hover:border-[#5d87ff]/50 transition-all cursor-pointer bg-slate-50/30 group">
                      <div
                          class="w-12 h-12 bg-white rounded-xl shadow-sm border border-slate-50 flex items-center justify-center mx-auto mb-4 text-slate-400 group-hover:text-[#5d87ff]">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2">
                              <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
                              <circle cx="9" cy="9" r="2" />
                              <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
                          </svg>
                      </div>
                      <p class="text-xs font-bold text-slate-600">Klik untuk Unggah</p>
                      <p class="text-[10px] text-slate-400 mt-1">PNG, JPG up to 5MB</p>
                  </div>
              </div>

              <!-- Toggle Switches (Using Checkbox) -->
              <div class="bg-white rounded-[24px] card-shadow border border-slate-50 p-8">
                  <h4 class="text-sm font-bold text-slate-800 mb-6">Pengaturan Tambahan</h4>
                  <div class="space-y-6">
                      <div class="flex items-center justify-between">
                          <div>
                              <p class="text-xs font-bold text-slate-700">Publikasikan Langsung</p>
                              <p class="text-[10px] text-slate-400">Produk akan terlihat di toko.</p>
                          </div>
                          <label class="relative inline-flex items-center cursor-pointer">
                              <input type="checkbox" checked class="sr-only peer">
                              <div
                                  class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#5d87ff]">
                              </div>
                          </label>
                      </div>
                      <div class="flex items-center justify-between">
                          <div>
                              <p class="text-xs font-bold text-slate-700">Aktifkan Diskon</p>
                              <p class="text-[10px] text-slate-400">Gunakan promo musiman.</p>
                          </div>
                          <label class="relative inline-flex items-center cursor-pointer">
                              <input type="checkbox" class="sr-only peer">
                              <div
                                  class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-[#5d87ff]">
                              </div>
                          </label>
                      </div>
                  </div>
              </div>

              <!-- Tip Box -->
              <div
                  class="bg-gradient-to-br from-[#5d87ff] to-[#4e73df] rounded-[24px] p-6 text-white shadow-xl shadow-blue-100">
                  <div class="w-10 h-10 bg-white/20 rounded-xl flex items-center justify-center mb-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                          fill="none" stroke="currentColor" stroke-width="2.5">
                          <path
                              d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5" />
                          <path d="M9 18h6" />
                          <path d="M10 22h4" />
                      </svg>
                  </div>
                  <h5 class="font-bold text-sm mb-2">Tips Pengisian</h5>
                  <p class="text-[11px] leading-relaxed opacity-80">Gunakan nama produk yang deskriptif dan pastikan
                      harga sudah termasuk pajak untuk mempermudah laporan keuangan.</p>
              </div>
          </div>
      </div>
  </div>

  <!-- PAGE: PRODUK (Form Design) -->
  <div id="page-produk" class="page-content p-8 max-w-6xl mx-auto">
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-10">
          <div>
              <h1 class="text-2xl font-extrabold text-slate-800 tracking-tight">Tambah Produk Baru</h1>
              <nav class="flex text-slate-400 text-[11px] font-bold mt-1 uppercase tracking-wider">
                  <span>Dashboard</span> <span class="mx-2">/</span> <span class="text-slate-600">Produk</span>
              </nav>
          </div>
          <div class="flex gap-3">
              <button
                  class="px-5 py-2.5 rounded-xl text-sm font-bold border border-slate-200 text-slate-600 bg-white hover:bg-slate-50">Batal</button>
              <button
                  class="px-5 py-2.5 rounded-xl text-sm font-bold bg-[#5d87ff] text-white shadow-lg shadow-blue-100 hover:bg-blue-600">Simpan
                  Produk</button>
          </div>
      </div>

      <div class="bg-white rounded-[24px] card-shadow border border-slate-50 overflow-hidden">
          <div class="p-8 grid grid-cols-1 lg:grid-cols-3 gap-10">
              <div class="lg:col-span-1">
                  <h3 class="text-lg font-bold text-slate-800 mb-2">Detail Informasi</h3>
                  <p class="text-sm text-slate-500 leading-relaxed mb-6">Kelola data inventaris Anda dengan mengisi
                      detail produk secara akurat.</p>
                  <div class="p-5 bg-blue-50 rounded-2xl border border-blue-100 flex gap-3">
                      <div
                          class="w-8 h-8 bg-white rounded-lg flex items-center justify-center text-[#5d87ff] shadow-sm shrink-0">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2.5">
                              <circle cx="12" cy="12" r="10" />
                              <path d="M12 16v-4" />
                              <path d="M12 8h.01" />
                          </svg>
                      </div>
                      <p class="text-xs text-blue-700 font-medium leading-normal">Data produk akan disinkronkan dengan
                          modul Supplier dan Customers.</p>
                  </div>
              </div>

              <div class="lg:col-span-2 space-y-6">
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                      <div class="space-y-2">
                          <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Nama Produk</label>
                          <input type="text" placeholder="MacBook Pro M3"
                              class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-[#5d87ff] focus:ring-4 focus:ring-blue-50 transition-all">
                      </div>
                      <div class="space-y-2">
                          <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Kategori</label>
                          <select
                              class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-[#5d87ff] appearance-none bg-white">
                              <option>Elektronik</option>
                              <option>Gadget</option>
                          </select>
                      </div>
                      <div class="space-y-2">
                          <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Harga Jual</label>
                          <input type="number" placeholder="25000000"
                              class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-[#5d87ff]">
                      </div>
                      <div class="space-y-2">
                          <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Stok Awal</label>
                          <input type="number" placeholder="10"
                              class="w-full px-4 py-3 rounded-xl border border-slate-200 text-sm font-medium outline-none focus:border-[#5d87ff]">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
