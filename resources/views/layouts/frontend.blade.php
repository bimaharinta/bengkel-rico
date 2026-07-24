<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teacher Auto Home Service</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts / Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: '#111C33',
                            accent: '#BA1721',
                        }
                    }
                }
            }
        </script>
    @endif
    
    <style>
        .hero-bg {
            background: linear-gradient(to bottom, #F3F4F6, #FFFFFF);
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50 text-primary flex flex-col min-h-screen">

    <!-- Navbar -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo & Location -->
                <div class="flex-shrink-0 flex items-center gap-3">
                    <img src="{{ asset('images/logo.png') }}?v={{ time() }}" alt="" class="h-12 w-12 rounded-full object-cover drop-shadow-sm">
                    <div class="flex items-center">
                        <div class="pr-3">
                            <h1 class="text-xl font-extrabold text-primary uppercase tracking-wider leading-tight">Teacher <br/><span class="text-accent">Auto</span></h1>
                        </div>
                        <!-- Location Info (Hidden on small screens) -->
                        <a href="https://maps.app.goo.gl/JfC4R6i7ALkdoLWb6" target="_blank" class="hidden lg:flex items-center gap-2 border-l-2 border-gray-200 pl-3 group cursor-pointer">
                            <svg class="w-5 h-5 text-accent flex-shrink-0 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-[10px] sm:text-xs font-bold text-gray-500 group-hover:text-accent uppercase tracking-wider leading-snug transition-colors">
                                Pandaan, Pasuruan <br/> Jawa Timur, Indonesia
                            </span>
                        </a>
                    </div>
                </div>

                <!-- Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-accent' : 'text-primary' }} font-semibold hover:text-accent transition">Home</a>
                    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-accent' : 'text-gray-500' }} font-medium hover:text-accent transition">Tentang Kami</a>
                    <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-accent' : 'text-gray-500' }} font-medium hover:text-accent transition">Layanan</a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-accent' : 'text-gray-500' }} font-medium hover:text-accent transition">Kontak</a>
                </nav>

                <!-- Actions -->
                <div class="flex items-center space-x-2 sm:space-x-4">

                    <a href="https://api.whatsapp.com/send?phone=6281338052994" target="_blank" class="bg-accent hover:bg-red-800 text-white px-3 sm:px-6 py-2 rounded-md text-sm sm:text-base font-bold uppercase tracking-wide transition shadow-lg shadow-red-500/30 whitespace-nowrap">
                        Pesan
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-button" class="text-primary hover:text-accent focus:outline-none p-1">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 shadow-xl absolute w-full left-0 z-40">
            <div class="px-4 pt-2 pb-6 space-y-1 flex flex-col">
                <a href="{{ route('home') }}" class="block px-3 py-3 {{ request()->routeIs('home') ? 'text-accent bg-gray-50' : 'text-primary hover:bg-gray-50' }} font-bold rounded-md border-b border-gray-50">Home</a>
                <a href="{{ route('about') }}" class="block px-3 py-3 {{ request()->routeIs('about') ? 'text-accent bg-gray-50' : 'text-gray-600 hover:bg-gray-50' }} font-medium rounded-md border-b border-gray-50">Tentang Kami</a>
                <a href="{{ route('services') }}" class="block px-3 py-3 {{ request()->routeIs('services') ? 'text-accent bg-gray-50' : 'text-gray-600 hover:bg-gray-50' }} font-medium hover:text-accent rounded-md border-b border-gray-50">Layanan</a>
                <a href="{{ route('contact') }}" class="block px-3 py-3 {{ request()->routeIs('contact') ? 'text-accent bg-gray-50' : 'text-gray-600 hover:bg-gray-50' }} font-medium hover:text-accent rounded-md">Kontak</a>
            </div>
        </div>
    </header>

    <div class="flex-grow">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-primary pt-16 pb-8 text-white mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                
                <!-- Tentang Kami -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Tentang Kami</h3>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        <strong class="text-white">Teacher Auto Home Service</strong> melayani service mobil all type. Menerima service di tempat atau di lokasi sesuai dengan kebutuhan. Jasa montir panggilan ready, siap datang ke lokasi Anda.
                    </p>
                </div>

                <!-- Alamat -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Alamat</h3>
                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        Bengkel kami berlokasi di Kos Kosan Hj Amang RT1 / RW 6, Dukuh, Kutorejo,<br/>
                        Kec. Pandaan, Pasuruan,<br/>
                        Jawa Timur 67156
                    </p>
                    <div class="flex space-x-3">
                        <!-- Social Icons (White circle with primary color icon) -->
                        <a href="https://api.whatsapp.com/send?phone=6281338052994" target="_blank" class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center hover:bg-accent hover:text-white transition shadow-md">
                            <span class="sr-only">WhatsApp</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/teacher.autohomeservice?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center hover:bg-accent hover:text-white transition shadow-md">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@teacher.auto.homeservice?is_from_webapp=1&sender_device=pc" target="_blank" class="w-10 h-10 rounded-full bg-white text-primary flex items-center justify-center hover:bg-accent hover:text-white transition shadow-md">
                            <span class="sr-only">TikTok</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.12-3.44-3.17-3.61-5.46-.02-.84.05-1.67.35-2.45.68-1.92 2.37-3.4 4.39-3.87 1.25-.28 2.57-.22 3.8.21.13.04.18.21.16.35-.08.62-.11 1.25-.22 1.87-.04.14-.14.22-.29.23-.97-.04-1.93.07-2.81.44-.92.38-1.67 1.04-2.11 1.9-.38.74-.53 1.6-.32 2.41.22.99.78 1.83 1.57 2.39 1.15.82 2.7 1 4.02.59 1.44-.45 2.55-1.57 2.95-3.03.11-.4.18-.81.18-1.22-.03-5.26-.01-10.51-.01-15.77z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Hubungi Kami -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Hubungi Kami</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3 text-sm text-gray-300">
                            <div class="w-8 h-8 rounded-full bg-blue-500 flex items-center justify-center text-white flex-shrink-0">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <span>0813 3805 2994</span>
                        </li>
                        <li class="flex items-center space-x-3 text-sm text-gray-300">
                            <div class="w-8 h-8 rounded-full bg-green-500 flex items-center justify-center text-white flex-shrink-0">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            </div>
                            <span>0813 3805 2994</span>
                        </li>
                    </ul>
                </div>

                <!-- Info Terbaru -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Layanan Unggulan</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3 group cursor-pointer">
                            <div class="w-12 h-12 rounded overflow-hidden flex-shrink-0">
                                <img src="{{ asset('images/feature_pro.png') }}" alt="" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                            </div>
                            <span class="text-sm text-gray-300 group-hover:text-accent transition">Service Mobil All Type & Merk</span>
                        </li>
                        <li class="flex items-center space-x-3 group cursor-pointer">
                            <div class="w-12 h-12 rounded overflow-hidden flex-shrink-0">
                                <img src="{{ asset('images/feature_home.png') }}" alt="" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                            </div>
                            <span class="text-sm text-gray-300 group-hover:text-accent transition">Montir Mobil Panggilan 24 Jam</span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 pt-8 text-center text-sm text-gray-400">
                &copy; {{ date('Y') }} Teacher Auto Home Service. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
