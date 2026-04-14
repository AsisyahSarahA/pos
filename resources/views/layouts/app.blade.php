
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatDash - Modern Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- <link rel="stylesheet" href=""> --}}

    @include('layouts.style')
</head>
<body class="text-[#2a3547] sidebar-open">

    <div class="flex min-h-screen relative">

        <!-- Sidebar -->
        @include('layouts.aside')

        <!-- Main Content -->
        <main class="flex-1 min-w-0 transition-all duration-300">
            <!-- Header -->
            @include('layouts.header')

            <!-- PAGE: DASHBOARD (Referencing image_bc2088.png) -->
            @yield('content')qq
                <!-- Stats Cards -->

            </div>
        </main>
    </div>

   @include('layouts.scripts')
</body>
</html>
