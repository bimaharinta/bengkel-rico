@extends('layouts.frontend')

@section('content')
    <!-- Hero Section -->
    <main class="relative h-[80vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/covered_car.png') }}" alt="Background" class="w-full h-full object-cover object-center" />
            <div class="absolute inset-0 bg-black/65"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl md:text-6xl font-black tracking-tight text-white mb-4 drop-shadow-lg leading-tight">
                Service Mobil<br/>
                Di <span class="text-accent">Rumah Anda</span>
            </h2>
            
            <p class="mt-6 max-w-3xl text-base md:text-lg text-gray-200 mx-auto font-medium drop-shadow-md leading-relaxed">
                Teacher Auto Home Service – Spesialis bengkel mobil panggilan. <br class="hidden md:block" />
                Didukung tim mekanik andal, peralatan modern, dan layanan terpercaya. Kami siap memberikan perawatan terbaik untuk mobil kesayangan Anda.
            </p>

            <p class="mt-6 font-extrabold tracking-[0.3em] uppercase text-white drop-shadow-md text-sm md:text-base">
                Teach <span class="text-accent mx-2">•</span> Repair <span class="text-accent mx-2">•</span> Trust
            </p>
            
            <div class="mt-10">
                <a href="https://api.whatsapp.com/send?phone=6281338052994" target="_blank" class="inline-flex items-center px-8 py-4 bg-accent border border-transparent rounded-lg font-bold text-base text-white uppercase tracking-widest hover:bg-red-800 focus:bg-red-800 active:bg-red-900 transition ease-in-out duration-150 shadow-xl shadow-red-500/40">
                    Pesan Sekarang
                    <svg class="ml-2 w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                </a>
            </div>
        </div>
    </main>

    <!-- Features Section -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-extrabold text-primary text-center mb-12">
                4 Alasan Memilih <br/>
                <span class="text-accent">Teacher Auto Home Service</span>
            </h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                
                <!-- Home Service -->
                <div class="flex flex-col items-center">
                    <div class="w-full h-48 sm:h-56 overflow-hidden rounded-lg shadow-md mb-4 group">
                        <img src="{{ asset('images/feature_home.png') }}" alt="Layanan Panggilan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Layanan Panggilan</h3>
                </div>

                <!-- Professional Service -->
                <div class="flex flex-col items-center">
                    <div class="w-full h-48 sm:h-56 overflow-hidden rounded-lg shadow-md mb-4 group">
                        <img src="{{ asset('images/feature_pro.png') }}" alt="Layanan Profesional" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Layanan Profesional</h3>
                </div>

                <!-- Trusted & Reliable -->
                <div class="flex flex-col items-center">
                    <div class="w-full h-48 sm:h-56 overflow-hidden rounded-lg shadow-md mb-4 group">
                        <img src="{{ asset('images/feature_trust.png') }}" alt="Terpercaya & Handal" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Terpercaya & Handal</h3>
                </div>

                <!-- Quality Work -->
                <div class="flex flex-col items-center">
                    <div class="w-full h-48 sm:h-56 overflow-hidden rounded-lg shadow-md mb-4 group">
                        <img src="{{ asset('images/feature_quality.png') }}" alt="Kualitas Terjamin" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Kualitas Terjamin</h3>
                </div>

            </div>
        </div>
        <!-- Red bottom border accent -->
        <div class="h-2 bg-accent mt-16 w-full"></div>
    </section>
@endsection
