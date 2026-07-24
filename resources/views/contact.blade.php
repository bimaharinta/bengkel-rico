@extends('layouts.frontend')

@section('content')
    <!-- Hero Banner -->
    <div class="relative h-64 md:h-80 w-full overflow-hidden flex items-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/contact_hero.png') }}" alt="Hero Kontak" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-primary/80"></div>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-white flex flex-col md:flex-row md:items-center justify-between gap-6">
            <h1 class="text-4xl md:text-5xl font-extrabold tracking-tight md:w-1/3">Kontak</h1>
            <div class="md:w-2/3 md:border-l-4 md:border-accent md:pl-6">
                <p class="text-sm md:text-base text-gray-200 leading-relaxed max-w-2xl">
                    Punya pertanyaan, kendala, atau butuh bantuan darurat untuk mobil Anda? Jangan ragu untuk menghubungi kami. Tim kami selalu siap sedia membantu Anda!
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Content Section -->
    <section class="py-16 bg-gray-50 flex-grow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                
                <!-- Left Column (Contact Info) -->
                <div>
                    <!-- Badge -->
                    <span class="inline-block bg-primary text-white text-xs font-bold px-3 py-1 rounded-sm uppercase tracking-wider mb-6">Hubungi Kami</span>
                    
                    <h2 class="text-3xl md:text-4xl font-extrabold text-primary mb-2">Teacher Auto <br/> Home Service</h2>
                    <p class="text-lg font-bold text-gray-600 mb-10">Montir Panggilan 24 Jam</p>

                    <!-- Info Box -->
                    <div class="space-y-6 mb-10">
                        <div>
                            <h3 class="text-lg font-bold text-primary mb-1">Alamat</h3>
                            <p class="text-gray-600 leading-relaxed">Kos Kosan Hj Amang RT1 / RW 6, Dukuh, Kutorejo, Kec. Pandaan, Pasuruan, Jawa Timur 67156</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-primary mb-1">Telepon / WhatsApp</h3>
                            <p class="text-gray-600 font-medium">0813 3805 2994</p>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="w-full h-64 md:h-72 bg-gray-200 rounded-lg overflow-hidden shadow-md">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126442.2389146146!2d112.63911681283995!3d-7.6433290903332065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d43232c395ab%3A0xebe7847936a28246!2sPandaan%2C%20Pasuruan%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1714123456789!5m2!1sen!2sid" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Right Column (Contact Form) -->
                <div>
                    <div class="bg-white p-8 md:p-10 rounded-xl shadow-xl shadow-gray-200/50 border border-gray-100">
                        <h2 class="text-2xl font-bold text-primary mb-8 border-b-2 border-accent pb-4 inline-block">Tinggalkan Pesan Disini</h2>
                        
                        <form id="contactForm" class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama Anda</label>
                                <input type="text" id="name" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition outline-none" placeholder="Masukkan nama Anda">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">No. WhatsApp</label>
                                <input type="tel" id="phone" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition outline-none" placeholder="Contoh: 08123456789">
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                                <textarea id="message" rows="5" required class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:ring-2 focus:ring-accent focus:border-transparent transition outline-none resize-none" placeholder="Tuliskan kendala mobil Anda atau pertanyaan di sini..."></textarea>
                            </div>

                            <button type="submit" class="w-full bg-primary hover:bg-blue-950 text-white font-bold py-4 rounded-lg transition transform hover:-translate-y-1 shadow-lg shadow-primary/30 uppercase tracking-widest text-sm">
                                Kirim Pesan via WA
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Custom Script for WhatsApp Redirect -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;
            
            const targetNumber = '6281338052994';
            
            // Format message
            const text = `Halo Teacher Auto,%0A%0APerkenalkan saya *${name}* (${phone}).%0A%0A${message}`;
            
            const whatsappUrl = `https://api.whatsapp.com/send?phone=${targetNumber}&text=${text}`;
            
            window.open(whatsappUrl, '_blank');
        });
    </script>
@endsection
