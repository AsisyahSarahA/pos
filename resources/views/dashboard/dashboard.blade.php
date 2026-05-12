@extends('layouts.vuexy.vuexy')

@section('content')

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



<p><b>Login As</b>: {{ auth()->user()->name }} ({{ auth()->user()->role }})</p>

<h3>List Menu</h3>


<ul>

     @if (Auth::user()->role == 'admin')
    <li><a href="{{ route('categories.index') }}">Kelola Kategori</a></li>
    <li><a href="{{ route('customers.index') }}">Kelola Pelanggan</a></li>
    <li><a href="{{ route('suppliers.index') }}">Kelola Supplier</a></li>
    @endif
    <li><a href="{{ route('produk.index') }}">Kelola Produk</a></li>



    <li>
        <form action="{{ route('proseslogout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </li>

</ul>

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


</div>


@endsection


