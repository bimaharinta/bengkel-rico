export default function About() {
  return (
    <>
      {/* Hero Banner */}
      <div className="relative h-64 md:h-80 w-full overflow-hidden flex items-center">
        {/* Background Image */}
        <div className="absolute inset-0 z-0">
          <img src="/images/about_hero.png" alt="Hero Tentang Kami" className="w-full h-full object-cover" />
          <div className="absolute inset-0 bg-primary/80"></div>
        </div>
        
        <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full text-white flex flex-col md:flex-row md:items-center justify-between gap-6">
          <h1 className="text-4xl md:text-5xl font-extrabold tracking-tight md:w-1/3">Tentang Kami</h1>
          <div className="md:w-2/3 md:border-l-4 md:border-secondary md:pl-6">
            <p className="text-sm md:text-base text-gray-200 leading-relaxed max-w-2xl">
              Berdedikasi untuk memberikan layanan otomotif terbaik langsung di rumah Anda. Temukan mengapa Teacher Auto menjadi pilihan utama untuk montir panggilan.
            </p>
          </div>
        </div>
      </div>

      {/* Tentang Kami Section */}
      <section className="bg-gray-50 py-20 flex-grow">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="flex flex-col lg:flex-row items-center gap-12">
            {/* Image Side */}
            <div className="w-full lg:w-1/2">
              <div className="relative rounded-2xl overflow-hidden shadow-2xl group">
                <img src="/images/about_us.png" alt="Tentang Teacher Auto" className="w-full h-auto object-cover group-hover:scale-105 transition duration-700" />
                <div className="absolute inset-0 bg-gradient-to-t from-primary/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>
              </div>
            </div>

            {/* Text Side */}
            <div className="w-full lg:w-1/2">
              <h4 className="text-sm font-bold text-gray-500 uppercase tracking-widest mb-2">Profil Usaha</h4>
              <h2 className="text-4xl md:text-5xl font-extrabold text-primary mb-2 leading-tight">
                Teacher Auto <br/> Home Service
              </h2>
              <h3 className="text-xl md:text-2xl font-bold text-secondary mb-6">
                Montir Mobil Panggilan 24 Jam
              </h3>
              
              <p className="text-gray-600 text-lg leading-relaxed mb-6 text-justify">
                <strong className="text-primary font-black text-2xl">T</strong>eacher Auto Home Service melayani jasa perbaikan dan perawatan pada segala jenis dan tipe mobil. Kami menerima jasa service panggilan maupun service di tempat. Tersedia service berkala/rutin yang bisa disesuaikan dengan kebutuhan Anda.
              </p>
              
              <p className="text-gray-600 text-lg leading-relaxed text-justify mb-8">
                Layanan kami sangat lengkap, mulai dari service mesin, transmisi mobil, ganti oli, hingga perbaikan kelistrikan dan ECU. Kami hadir dengan komitmen tinggi untuk memberikan solusi otomotif yang praktis, terpercaya, dan profesional langsung di rumah Anda.
              </p>

              <a href="https://api.whatsapp.com/send?phone=6281338052994" target="_blank" rel="noreferrer" className="inline-flex items-center px-6 py-3 bg-primary text-white font-bold rounded-full hover:bg-blue-900 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Hubungi Kami Sekarang
                <svg className="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
              </a>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
