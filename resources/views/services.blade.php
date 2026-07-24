@extends('layouts.frontend')

@section('content')
    <!-- Hero Banner -->
    <div class="relative h-64 md:h-80 w-full overflow-hidden flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/layanan_hero.png') }}" alt="Hero Layanan" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-primary/70"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-white flex flex-col md:flex-row md:items-center justify-between gap-6">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight md:w-1/3">Layanan</h1>
            <div class="md:w-2/3 md:border-l-4 md:border-accent md:pl-6">
                <p class="text-sm md:text-base text-gray-200 leading-relaxed max-w-2xl">
                    Teacher Auto Home Service menyediakan berbagai layanan perbaikan dan perawatan mobil secara profesional. Kami siap datang ke lokasi Anda, memberikan solusi otomotif yang praktis, cepat, dan terpercaya.
                </p>
            </div>
        </div>
    </div>

    <!-- Title Section -->
    <section class="py-16 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-primary mb-3">Teacher Auto Home Service</h2>
            <p class="text-gray-600 font-medium">Montir Panggilan 24 Jam | Bisa Antar Jemput ke Lokasi</p>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section class="pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Service 1 -->
                <div class="service-card group cursor-pointer border-2 border-gray-200 bg-gray-50 p-8 rounded-lg text-center hover:-translate-y-2 transition-all duration-300 [&.active]:bg-primary [&.active]:border-primary [&.active]:shadow-xl [&.active]:shadow-primary/20">
                    <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center mb-6 shadow-sm border border-gray-200 group-[.active]:bg-primary group-[.active]:border-gray-600 group-[.active]:shadow-inner relative transition-colors duration-300">
                        <div class="absolute inset-0 border-2 border-accent rounded-full border-t-transparent border-l-transparent transform -rotate-45 opacity-0 group-[.active]:opacity-100 transition-opacity"></div>
                        <svg class="w-8 h-8 text-primary group-[.active]:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-accent group-[.active]:text-gray-300 uppercase tracking-widest block mb-2 transition-colors">Layanan</span>
                    <h3 class="text-xl font-bold text-primary group-[.active]:text-white mb-4 transition-colors">Service Mobil 24 Jam</h3>
                    <p class="text-sm text-gray-600 group-[.active]:text-gray-300 leading-relaxed transition-colors">
                        Lokasi bengkel sangat strategis, mudah dijangkau dan selalu siap sedia kapanpun Anda membutuhkan.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="service-card group cursor-pointer border-2 border-gray-200 bg-gray-50 p-8 rounded-lg text-center hover:-translate-y-2 transition-all duration-300 [&.active]:bg-primary [&.active]:border-primary [&.active]:shadow-xl [&.active]:shadow-primary/20 active">
                    <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center mb-6 shadow-sm border border-gray-200 group-[.active]:bg-primary group-[.active]:border-gray-600 group-[.active]:shadow-inner relative transition-colors duration-300">
                         <div class="absolute inset-0 border-2 border-accent rounded-full border-t-transparent border-l-transparent transform -rotate-45 opacity-0 group-[.active]:opacity-100 transition-opacity"></div>
                         <svg class="w-8 h-8 text-primary group-[.active]:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-accent group-[.active]:text-gray-300 uppercase tracking-widest block mb-2 transition-colors">Layanan</span>
                    <h3 class="text-xl font-bold text-primary group-[.active]:text-white mb-4 transition-colors">Montir Panggilan</h3>
                    <p class="text-sm text-gray-600 group-[.active]:text-gray-300 leading-relaxed transition-colors">
                        Jasa montir panggilan 24 jam, siap antar jemput lokasi area Pandaan dan sekitarnya.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="service-card group cursor-pointer border-2 border-gray-200 bg-gray-50 p-8 rounded-lg text-center hover:-translate-y-2 transition-all duration-300 [&.active]:bg-primary [&.active]:border-primary [&.active]:shadow-xl [&.active]:shadow-primary/20">
                    <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center mb-6 shadow-sm border border-gray-200 group-[.active]:bg-primary group-[.active]:border-gray-600 group-[.active]:shadow-inner relative transition-colors duration-300">
                        <div class="absolute inset-0 border-2 border-accent rounded-full border-t-transparent border-l-transparent transform -rotate-45 opacity-0 group-[.active]:opacity-100 transition-opacity"></div>
                        <svg class="w-8 h-8 text-primary group-[.active]:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-accent group-[.active]:text-gray-300 uppercase tracking-widest block mb-2 transition-colors">Layanan</span>
                    <h3 class="text-xl font-bold text-primary group-[.active]:text-white mb-4 transition-colors">Service Berkala/Rutin</h3>
                    <p class="text-sm text-gray-600 group-[.active]:text-gray-300 leading-relaxed transition-colors">
                        Layanan perawatan pada mobil Anda. Tersedia pilihan service berkala atau rutin.
                    </p>
                </div>

                <!-- Service 4 -->
                <div class="service-card group cursor-pointer border-2 border-gray-200 bg-gray-50 p-8 rounded-lg text-center hover:-translate-y-2 transition-all duration-300 [&.active]:bg-primary [&.active]:border-primary [&.active]:shadow-xl [&.active]:shadow-primary/20">
                    <div class="w-16 h-16 mx-auto bg-white rounded-full flex items-center justify-center mb-6 shadow-sm border border-gray-200 group-[.active]:bg-primary group-[.active]:border-gray-600 group-[.active]:shadow-inner relative transition-colors duration-300">
                        <div class="absolute inset-0 border-2 border-accent rounded-full border-t-transparent border-l-transparent transform -rotate-45 opacity-0 group-[.active]:opacity-100 transition-opacity"></div>
                        <svg class="w-8 h-8 text-primary group-[.active]:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    </div>
                    <span class="text-xs font-bold text-accent group-[.active]:text-gray-300 uppercase tracking-widest block mb-2 transition-colors">Layanan</span>
                    <h3 class="text-xl font-bold text-primary group-[.active]:text-white mb-4 transition-colors">Ganti Sparepart</h3>
                    <p class="text-sm text-gray-600 group-[.active]:text-gray-300 leading-relaxed transition-colors">
                        Jual beli dan jasa penggantian sparepart mobil terpercaya. Tersedia sparepart ori untuk segala jenis dan tipe mobil.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach(card => {
                card.addEventListener('click', () => {
                    serviceCards.forEach(c => c.classList.remove('active'));
                    card.classList.add('active');
                });
            });
        });
    </script>

    <!-- Emergency Breakdown Section -->
    <section class="py-16 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Text / List -->
                <div class="w-full lg:w-3/5">
                    <h2 class="text-3xl md:text-4xl font-extrabold text-primary mb-3 leading-tight">Mobil Mogok Tiba-tiba?</h2>
                    <p class="text-lg font-bold text-gray-800 mb-8">Tak Perlu Panik, Panggil Kami Sekarang Juga!</p>
                    
                    <a href="https://api.whatsapp.com/send?phone=6281338052994" target="_blank" class="inline-flex items-center bg-green-500 hover:bg-green-600 text-white px-6 py-3 rounded-full font-bold mb-10 shadow-lg shadow-green-500/30 transition transform hover:-translate-y-1">
                        <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        Whatsapp: 0813 3805 2994
                    </a>

                    <p class="font-bold text-gray-700 mb-6 text-sm">Apa yang dapat kami kerjakan?</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-2">
                        <!-- Column 1 -->
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-gray-600 text-sm font-medium">Anti Lock Braking System</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-gray-600 text-sm font-medium">Supplementary Restraint System</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-gray-600 text-sm font-medium">Braking Pad/Shoe</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-gray-600 text-sm font-medium">Scanner Riset</span>
                            </div>
                        </div>
                        <!-- Column 2 -->
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-gray-600 text-sm font-medium">Tune Up</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-gray-600 text-sm font-medium">Over Haul Engine</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 text-gray-600 mt-0.5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span class="text-gray-600 text-sm font-medium">Electrical Engine</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Illustration Side -->
                <div class="w-full lg:w-2/5 flex justify-center">
                    <img src="{{ asset('images/breakdown.png') }}" alt="Mobil Mogok" class="max-w-full h-auto drop-shadow-2xl">
                </div>
            </div>
        </div>
    </section>
@endsection
