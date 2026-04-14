<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mofitask - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #fce4ec;
            /* Background merah muda pastel lembut */
        }

        .login-card {
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.05);
        }

        .illustration-bg {
            background-color: #ffebee;
        }

        input:focus {
            outline: none;
            border-color: #ff8a80;
            box-shadow: 0 0 0 2px rgba(255, 138, 128, 0.2);
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            75% {
                transform: translateX(-5px);
            }
        }

        .animate-shake {
            animation: shake 0.4s cubic-bezier(.36, .07, .19, .97) both;
        }
    </style>
</head>

<body class="min-h-screen flex items-center justify-center p-4">

    <!-- Kontainer Utama -->
    <div class="bg-white rounded-[40px] overflow-hidden max-w-5xl w-full flex flex-col md:flex-row login-card relative">

        <!-- Tombol Close (X) di pojok kanan atas -->
        <button class="absolute top-8 right-8 text-gray-400 hover:text-gray-600 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Bagian Kiri: Ilustrasi -->
        <div class="w-full md:w-1/2 p-10 flex flex-col relative overflow-hidden" style="background-color: #FFF0F0;">
            <!-- Logo Mofitask -->
            <div class="flex items-center gap-1 mb-8">
                <span class="text-[#E96666] font-bold text-xl tracking-tight">Mo</span>
                <span class="text-[#E96666] font-bold text-xl tracking-tight">fitask.</span>
            </div>

            <!-- Ilustrasi (Placeholder menggunakan SVG untuk kemiripan gaya) -->
            <div class="relative flex-1 flex items-center justify-center">
                <!-- Elemen Dokumen Melayang -->
                <div
                    class="absolute top-0 right-10 transform rotate-12 bg-white p-3 rounded-lg shadow-sm w-24 border border-gray-100">
                    <div class="h-1 w-10 bg-gray-200 mb-2"></div>
                    <div class="h-1 w-14 bg-gray-200 mb-2"></div>
                    <div class="h-12 w-full bg-gray-100 rounded"></div>
                </div>

                <!-- Karakter (Visual representasi dari gambar) -->
                <div class="relative z-0">
                    <svg width="320" height="320" viewBox="0 0 200 200" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <!-- Helm Kuning -->
                        <path d="M40 80C40 50 60 30 100 30C140 30 160 50 160 80V120H40V80Z" fill="#F9D466" />
                        <!-- Kacamata Goggles -->
                        <rect x="55" y="60" width="90" height="30" rx="15" fill="#FF8A80" stroke="#8D5524"
                            stroke-width="2" />
                        <circle cx="75" cy="75" r="10" fill="white" fill-opacity="0.3" />
                        <circle cx="125" cy="75" r="10" fill="white" fill-opacity="0.3" />
                        <!-- Wajah -->
                        <path d="M50 100C50 130 70 160 100 160C130 160 150 130 150 100H50Z" fill="#FFE0BD" />
                        <!-- Pipi Merah -->
                        <circle cx="70" cy="120" r="10" fill="#FF8A80" fill-opacity="0.4" />
                        <circle cx="130" cy="120" r="10" fill="#FF8A80" fill-opacity="0.4" />
                        <!-- Lidah -->
                        <path d="M90 140C90 145 100 150 110 140" stroke="#8D5524" stroke-width="2" fill="none" />
                        <!-- Tangan Melambai -->
                        <path d="M140 140C160 130 190 150 180 180C170 200 140 200 130 180L140 140Z" fill="#FFE0BD"
                            stroke="#8D5524" stroke-width="2" />
                    </svg>
                </div>

                <!-- Elemen Bullet Point Melayang -->
                <div class="absolute right-4 top-1/2 flex flex-col gap-4">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-[#B39DDB]"></div>
                        <div class="w-12 h-2 bg-[#B39DDB] rounded-full opacity-50"></div>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-[#B39DDB]"></div>
                        <div class="w-12 h-2 bg-[#B39DDB] rounded-full opacity-50"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Kanan: Form Login -->
        <div class="w-full md:w-1/2 p-12 md:p-20 flex flex-col justify-center">
            <h2 class="text-3xl font-bold text-[#1A202C] text-center mb-10">Login</h2>

            @if ($errors->any())
                <div
                    class="mb-6 flex items-start gap-4 p-4 rounded-2xl bg-red-50 border border-red-100 animate-[shake_0.5s_ease-in-out]">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-red-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>

                    <div class="flex-1">
                        <h3 class="text-sm font-bold text-red-800">Ups! Ada masalah</h3>
                        <ul class="mt-1 text-xs text-red-600 leading-relaxed">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <button onclick="this.parentElement.remove()" class="text-red-400 hover:text-red-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endif

            <form id="loginForm" class="space-y-6" method="POST" action="{{ route('proseslogin') }}">
                @csrf
                <!-- Input Email -->
                <div>
                    <label
                        class="block text-sm font-semibold {{ $errors->has('email') ? 'text-red-500' : 'text-gray-700' }} mb-2">
                        Email
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="block w-full pl-12 pr-4 py-3 border border-gray-200 rounded-xl bg-white text-gray-600 focus:ring-0 transition-all"
                            placeholder="Masukkan email">
                        @error('email')
                            <p class="text-[10px] text-red-500 mt-1 ml-1 font-medium">* {{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <!-- Input Password -->
                <div>
                    <label
                        class="block text-sm font-semibold {{ $errors->has('password') ? 'text-red-500' : 'text-gray-700' }} mb-2">
                        Password
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <input type="password" name="password"
                            class="block w-full pl-12 pr-4 py-3 border rounded-xl
                                    {{ $errors->has('password') ? 'border-red-400 bg-red-50' : 'border-gray-200 bg-white' }}
                                    text-gray-600 transition-all"
                            placeholder="Masukkan password">

                        @error('password')
                            <p class="text-[10px] text-red-500 mt-1 ml-1 font-medium">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-right mt-2">
                        <a href="#" class="text-xs font-medium text-[#F9A825] hover:underline">Forgot
                            Password?</a>
                    </div>
                </div>

                <!-- Tombol Log In -->
                <button type="submit"
                    class="w-full bg-[#FF8A80] hover:bg-[#ff7b70] text-white font-bold py-3.5 rounded-xl transition-colors shadow-md">
                    Log In
                </button>

                <!-- Pembatas Or Continue With -->
                <div class="relative my-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-100"></div>
                    </div>
                    <div class="relative flex justify-center text-xs">
                        <span class="px-3 bg-white text-gray-400 font-medium">Or Continue With</span>
                    </div>
                </div>

                <!-- Social Login -->
                <div class="flex justify-center gap-6">
                    <button type="button"
                        class="p-3 border border-gray-100 rounded-full hover:bg-gray-50 transition-colors shadow-sm">
                        <img src="https://www.gstatic.com/images/branding/product/1x/googleg_48dp.png" class="w-6 h-6"
                            alt="Google">
                    </button>
                    <button type="button"
                        class="p-3 border border-gray-100 rounded-full hover:bg-gray-50 transition-colors shadow-sm">
                        <svg class="w-6 h-6 text-[#1877F2]" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </button>
                    <button type="button"
                        class="p-3 border border-gray-100 rounded-full hover:bg-gray-50 transition-colors shadow-sm">
                        <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12c0-5.523-4.477-10-10-10z" />
                            <!-- Apple Icon Placeholder -->
                            <path
                                d="M17.05 20.28c-.96.95-2.14 1.42-3.48 1.42-1.34 0-2.43-.45-3.32-1.32-.9-.88-1.35-1.99-1.35-3.32 0-1.32.45-2.42 1.35-3.3.9-.88 2-1.32 3.32-1.32 1.34 0 2.45.47 3.33 1.4.15.15.22.3.22.45 0 .15-.07.3-.22.45-.15.15-.3.22-.45.22-.15 0-.3-.07-.45-.22-.6-.62-1.38-.93-2.35-.93-.98 0-1.8.33-2.45 1-.65.67-.97 1.49-.97 2.47 0 .98.32 1.8 1 2.45.65.65 1.45.98 2.43.98s1.82-.33 2.47-1c.15-.15.3-.22.45-.22.15 0 .3.07.45.22.15.15.22.3.22.45 0 .15-.07.3-.22.45z"
                                fill="currentColor" />
                        </svg>
                    </button>
                </div>

                <!-- Footer Sign Up -->
                <p class="text-center text-sm text-gray-500 mt-10">
                    Don't have an account? <a href="#" class="text-[#2D3748] font-bold hover:underline">Sign Up
                        here</a>
                </p>
            </form>
        </div>
    </div>

</body>

<script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        // Ambil nilai input
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        // Cek jika kosong
        if (!email || !password) {
            e.preventDefault(); // Batalkan pengiriman form ke server

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Email dan Password tidak boleh kosong!',
                confirmButtonColor: '#FF8A80', // Sesuaikan dengan warna tema Mofitask
                background: '#ffffff',
                customClass: {
                    popup: 'rounded-[30px]', // Agar membulat sesuai desain kartu kamu
                    confirmButton: 'rounded-xl px-10 py-3'
                }
            });
        }
    });
</script>

</html>
