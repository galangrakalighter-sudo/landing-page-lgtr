<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LGTR Digital Marketing - Layanan Bisnis</title>
    <link rel="icon" type="image/png" href="https://lightermediagroup.com/wp-content/uploads/2025/11/Layer-20.png">
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Load Inter font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- Load Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        /* ADDED: Smooth scrolling for anchor links */
        html {
            scroll-behavior: smooth;
        }

        /* Base Animation Setup (Applied to all animated elements) */
        .reveal {
            opacity: 0;
            /* Common transition definition for smooth, unified effect */
            transition: opacity 1.0s cubic-bezier(0.25, 0.46, 0.45, 0.94), 
                        transform 1.0s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        /* Specific Starting States (Initial positions) */
        .slide-up { transform: translateY(30px); }
        .slide-left { transform: translateX(30px); } /* Comes from the right */
        .slide-right { transform: translateX(-30px); } /* Comes from the left */
        .scale-up { transform: scale(0.85); }
        /* Slide up with a slight rotation */
        .rotate-up { transform: translateY(30px) rotateZ(2deg); }
        /* Pure fade-in (no initial transform needed, but keep opacity 0) */
        .fade-in { transform: none; transition: opacity 1.0s cubic-bezier(0.25, 0.46, 0.45, 0.94); }


        /* Active State (Unified ending state: Reset all transformations) */
        .reveal.active {
            opacity: 1;
            /* Reset all transformations */
            transform: translateY(0) translateX(0) scale(1) rotateZ(0deg); 
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #000066;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #ff6401;
        }

        /* Hover Effect for Tantangan Cards (Squircle) */
        .card-tantangan-hover {
            transition: all 0.4s ease-in-out; 
            border: 1px solid transparent;
        }
        .card-tantangan-hover:hover {
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.15); 
            transform: translateY(-8px); 
            border-color: #ff6401;
        }

        /* Testimoni Card Style: Minimalist Quote Block */
        /* Gaya ini menghilangkan shadow/hover lift yang menyebabkan clipping */
        .card-testimoni-minimalist {
            border-radius: 0.75rem; /* rounded-xl */
            border-left: 4px solid #ff6401; /* Orange vertical accent line */
            background-color: #fcfcfc;
            padding: 2.5rem;
            min-height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.3s ease-in-out;
        }
        .card-testimoni-minimalist:hover {
            border-left-color: #000066;
            box-shadow: 0 4px 15px -3px rgba(0, 0, 0, 0.1);
        }

        /* FIX 1: Mengganti gradasi yang menghasilkan abu-abu menjadi lebih putih/biru lembut */
        .dynamic-header-bg {
            background: linear-gradient(135deg, #ffffff 0%, rgba(240, 241, 255, 0.5) 50%, #ffffff 100%);
        }
        
        /* Modern CTA Pulse Effect */
        @keyframes pulse-ring {
          0% {
            box-shadow: 0 0 0 0 rgba(255, 100, 1, 0.7);
          }
          100% {
            box-shadow: 0 0 0 12px rgba(255, 100, 1, 0); /* Slightly larger pulse */
          }
        }
        .cta-pulse-animation {
            animation: pulse-ring 1.7s infinite; /* Slightly slower pulse for subtlety */
        }

        /* NEW: Styles for Smooth Mobile Menu */
        #mobile-menu {
            transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
            max-height: 0;
            padding-top: 0;
            padding-bottom: 0;
            overflow: hidden;
            /* Important: Keep the base styles for a nice look */
            width: 100%;
            background-color: white;
            border-top: 1px solid #f3f4f6;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
        }

        #mobile-menu.open {
            max-height: 500px; /* Use a value larger than max expected height */
            padding-top: 0.5rem;
            padding-bottom: 1rem;
        }
    </style>
    <!-- Tailwind Configuration with Custom Colors and Font -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-blue': '#000066',
                        'accent-orange': '#ff6401',
                        'soft-gradient-start': 'rgba(0, 0, 102, 0.05)',
                        'soft-gradient-end': '#ffffff',
                        'very-light-blue': '#f0f1ff', 
                    },
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        '3xl': '0 25px 50px -12px rgba(0, 0, 0, 0.3)', /* Stronger shadow for Testimoni */
                        'xl-orange': '0 10px 20px -5px rgba(255, 100, 1, 0.3)',
                    }
                },
            }
        }
    </script>
</head>
<body class="font-inter antialiased text-gray-800 bg-white">

    <!-- 1. Header (Attention) -->
    <!-- MENGEMBALIKAN HEADER KE KONDISI AWAL YANG STABIL (tanpa shadow berlebih) -->
    <header class="bg-white border-b border-gray-100 sticky top-0 z-50">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <!-- LOGO IMAGE PLACEHOLDER: Ganti dengan logo LGTR Anda -->
            <a href="#attention" class="reveal slide-right flex items-center">
                <!-- LOGO HEADER DIBESARKAN: h-8 diubah menjadi h-10 -->
                <img 
                    src="lighterImage.png" 
                    alt="Logo LGTR" 
                    class="h-14 w-auto object-contain" 
                    onerror="this.onerror=null; this.src='https://placehold.co/40x40/000066/FFFFFF?text=LG'"
                />
                <!-- Fallback text if image fails to load -->
            
            </a>
            
            <nav class="hidden md:flex space-x-8 text-sm font-medium">
                <!-- Navigation links use pure fade-in for quick loading -->
                <a href="#tantangan" class="text-gray-600 hover:text-accent-orange transition duration-300 reveal fade-in delay-100">Tantangan</a>
                <a href="#layanan" class="text-gray-600 hover:text-accent-orange transition duration-300 reveal fade-in delay-200">Layanan</a>
                <a href="#testimoni" class="text-gray-600 hover:text-accent-orange transition duration-300 reveal fade-in delay-300">Testimoni</a>
            </nav>
            <a href="#cta-main" class="px-5 py-2 bg-accent-orange text-white font-semibold rounded-lg shadow-xl-orange hover:bg-opacity-95 transition duration-300 transform hover:scale-105 hidden md:block reveal slide-left delay-400">
                Konsultasi Sekarang
            </a>
            <!-- Mobile Menu Icon -->
            <button id="mobile-menu-btn" class="md:hidden text-primary-blue reveal slide-left delay-500">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown Structure -->
        <div id="mobile-menu" class="md:hidden w-full transition-all duration-500 ease-in-out">
            <nav class="flex flex-col space-y-3 px-4 pb-4 pt-2 text-base font-medium">
                <!-- Tautan untuk Mobile Menu harus konsisten dengan Desktop -->
                <a href="#attention" class="mobile-link text-gray-600 hover:text-accent-orange transition duration-300 py-2 border-b border-gray-100">Home</a>
                <a href="#tantangan" class="mobile-link text-gray-600 hover:text-accent-orange transition duration-300 py-2 border-b border-gray-100">Tantangan</a>
                <a href="#layanan" class="mobile-link text-gray-600 hover:text-accent-orange transition duration-300 py-2 border-b border-gray-100">Layanan</a>
                <a href="#testimoni" class="mobile-link text-gray-600 hover:text-accent-orange transition duration-300 py-2 border-b border-gray-100">Testimoni</a>
                <!-- Mobile CTA -->
                <a href="#cta-main" class="mobile-link mt-4 px-4 py-2 text-white bg-accent-orange rounded-lg text-center font-semibold">Konsultasi Sekarang</a>
            </nav>
        </div>
        <!-- END: Mobile Menu Dropdown Structure -->

    </header>

    <main>
        <!-- Attention Section: FULL SCREEN HEIGHT ON DESKTOP -->
        <section id="attention" class="pt-20 pb-24 md:pt-32 md:pb-40 dynamic-header-bg md:min-h-screen flex items-center">
            <!-- Parallax Content Wrapper (Header) -->
            <div id="header-parallax-content" data-speed="2.5" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-12 items-center w-full transition-transform duration-100 ease-out">
                
                <!-- Left Content: Slide Right (from outside left) - DITAMBAH: text-center md:text-left -->
                <div class="reveal slide-right text-center md:text-left">
                    <!-- Staggered reveal for H1 and P -->
                    <h1 class="text-4xl sm:text-6xl font-extrabold text-primary-blue leading-tight mb-4 reveal slide-right delay-100">
                        Dunia marketing berubah cepat! Bisnismu siap <span class="text-accent-orange">beradaptasi</span>?
                    </h1>
                    <p class="text-xl text-gray-600 mb-8 opacity-90 reveal slide-right delay-300">
                        Digital Marketing Adaptatif untuk Bisnis yang Selalu Berubah. Kami memastikan strategi Anda selalu relevan, efisien, dan berdampak.
                    </p>
                    <a href="#cta-main" class="inline-flex items-center justify-center px-10 py-4 text-lg font-bold text-white bg-accent-orange rounded-xl shadow-2xl shadow-orange-500/50 transition duration-300 transform hover:scale-[1.05] focus:outline-none focus:ring-4 focus:ring-accent-orange focus:ring-opacity-50 cta-pulse-animation reveal slide-right delay-500">
                        Konsultasi Sekarang
                    </a>
                </div>

                <!-- Right Illustration/Visual: Slide Left (from outside right) - Replaced SVG with Image Placeholder 16:9 -->
                <div class="reveal slide-left delay-200">
                    <!-- MENGUBAH RASIO KE 16:10 DAN MEMPERBESAR MAX-WIDTH UNTUK MENINGKATKAN TINGGI -->
                    <!-- FIX: Menghapus border-gray-200 yang mungkin terlihat seperti abu-abu tipis -->
                    <div class="w-full lg:max-w-2xl xl:max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl aspect-[16/10] flex items-center justify-center">
                        <!-- Placeholder Image 16:10 - GANTI DENGAN GAMBAR DATA & AI ANDA -->
                        <img 
                            src="marketing.jpg" 
                            alt="Placeholder Ilustrasi Adaptasi Data & AI" 
                            class="w-full h-full object-cover rounded-2xl"
                            onerror="this.onerror=null; this.src='https://lightermediagroup.com/wp-content/uploads/2025/11/young-creative-people-with-laptop-sketches-discussing-new-project-together-group-guys-gals-working-modern-cozy-office_11zon.webp'"
                        />
                        
                    </div>
                </div>

            </div>
        </section>

        <!-- 2. Section Tantangan (Interest) - STYLE 1: Squircle / Icon-Centric + Horizontal Layout -->
        <section id="tantangan" class="py-24 md:py-32 lg:py-40 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="reveal slide-up text-center mb-16">
                    <h2 class="text-4xl font-extrabold text-primary-blue mb-4 reveal slide-up delay-100">Tantangan Marketing Saat Ini</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto opacity-90 reveal slide-up delay-200">
                        AI mengubah cara beriklan, algoritma terus berubah, daya beli fluktuatif. Banyak bisnis kehilangan momentum karena tidak cepat beradaptasi.
                    </p>
                </div>

                <!-- Parallax Content Wrapper (Tantangan) -->
                <div id="tantangan-parallax-content" data-speed="1.5" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 transition-transform duration-100 ease-out">
                    
                    <!-- Card 1: Slide Right - Squircle Shape -->
                    <div class="reveal slide-right p-6 bg-white rounded-3xl shadow-lg border border-gray-100 card-tantangan-hover h-full flex flex-col">
                        <div class="flex items-start space-x-4">
                            <!-- Icon with soft background -->
                            <div class="w-14 h-14 flex-shrink-0 bg-primary-blue/10 rounded-xl flex items-center justify-center mb-4 reveal slide-up delay-100">
                                <i data-lucide="bar-chart-3" class="w-7 h-7 text-primary-blue"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-primary-blue mb-1 reveal slide-up delay-200">Strategi Data Driven</h3>
                                <p class="text-gray-600 text-xs reveal slide-up delay-300">Strategi kampanye berbasis data real-time, memastikan setiap langkah memiliki dasar keputusan yang kuat dan terukur.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2: Slide Left - Squircle Shape -->
                    <div class="reveal slide-left delay-100 p-6 bg-white rounded-3xl shadow-lg border border-gray-100 card-tantangan-hover h-full flex flex-col">
                        <div class="flex items-start space-x-4">
                            <!-- Icon with soft background -->
                            <div class="w-14 h-14 flex-shrink-0 bg-accent-orange/10 rounded-xl flex items-center justify-center mb-4 reveal slide-up delay-200">
                                <i data-lucide="bot" class="w-7 h-7 text-accent-orange"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-primary-blue mb-1 reveal slide-up delay-300">Pemanfaatan AI</h3>
                                <p class="text-gray-600 text-xs reveal slide-up delay-400">Optimasi anggaran iklan dan penargetan audiens dengan kecerdasan buatan untuk hasil yang lebih presisi.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3: Scale Up - Squircle Shape -->
                    <div class="reveal scale-up delay-200 p-6 bg-white rounded-3xl shadow-lg border border-gray-100 card-tantangan-hover h-full flex flex-col">
                        <div class="flex items-start space-x-4">
                            <!-- Icon with soft background -->
                            <div class="w-14 h-14 flex-shrink-0 bg-primary-blue/10 rounded-xl flex items-center justify-center mb-4 reveal slide-up delay-300">
                                <i data-lucide="zap" class="w-7 h-7 text-primary-blue"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-primary-blue mb-1 reveal slide-up delay-400">Low Cost High Impact</h3>
                                <p class="text-gray-600 text-xs reveal slide-up delay-500">Fokus pada efisiensi biaya tanpa mengorbankan dampak, memaksimalkan ROI dari setiap pengeluaran.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4: Rotate Up - Squircle Shape -->
                    <div class="reveal rotate-up delay-300 p-6 bg-white rounded-3xl shadow-lg border border-gray-100 card-tantangan-hover h-full flex flex-col">
                        <div class="flex items-start space-x-4">
                            <!-- Icon with soft background -->
                            <div class="w-14 h-14 flex-shrink-0 bg-accent-orange/10 rounded-xl flex items-center justify-center mb-4 reveal slide-up delay-400">
                                <i data-lucide="users" class="w-7 h-7 text-accent-orange"></i>
                            </div>
                            <div class="flex-1">
                                <h3 class="text-lg font-bold text-primary-blue mb-1 reveal slide-up delay-500">Riset Pasar</h3>
                                <p class="text-gray-600 text-xs reveal slide-up delay-600">Analisis pasar, kompetitor, dan tren untuk menyusun strategi produk dan harga yang kompetitif.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- 3. Section Testimoni (Desire - Proof) - SLIDER MUTLAK (Satu per satu, Rata Tengah, Anti-Clipping) -->
        <section id="testimoni" class="py-24 md:py-32 lg:py-40 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="reveal slide-up text-center mb-16">
                    <h2 class="text-4xl font-extrabold text-primary-blue mb-4 reveal slide-up delay-100">Apa Kata Klien Kami?</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto opacity-90 reveal slide-up delay-200">
                        Bukti nyata kesuksesan adaptasi digital di berbagai industri.
                    </p>
                </div>

                <!-- Testimonial Slider Container - DITAMBAH py-20 UNTUK RUANG AMAN -->
                <!-- FIX: MENGATUR LEBAR CONTAINER AGAR HANYA SATU KARTU TERLIHAT DI TENGAH -->
                <div id="testimoni-parallax-content" data-speed="1.2" class="relative py-20 transition-transform duration-100 ease-out max-w-lg lg:max-w-3xl mx-auto">
                    
                    <!-- Wrapper for overflow hiding -->
                    <div class="overflow-hidden"> 
                        <!-- Slider track - transition added -->
                        <div id="testimonial-slider" class="flex transition-transform duration-500 ease-in-out" style="width: 600%;"> 
                            
                            <!-- Kartu 1 (Selalu 1/6 dari total lebar slider track) -->
                            <div class="w-[16.6667%] flex-shrink-0 reveal slide-right delay-100 px-3">
                                <div class="card-testimoni-minimalist text-center h-full">
                                    <i data-lucide="quote" class="w-8 h-8 text-accent-orange mb-4 reveal slide-up delay-200 mx-auto"></i>
                                    <p class="text-lg italic text-gray-700 mb-6 reveal slide-up delay-300">"Peningkatan omset dalam 3 bulan setelah memakai jasa digital marketing dari LGTR. Kami bisa fokus pada produk."</p>
                                    <div class="reveal slide-up delay-400">
                                        <p class="font-bold text-primary-blue">Owner Restoran</p>
                                        <p class="text-sm text-gray-500">Industri Kuliner (F&B)</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Kartu 2 -->
                            <div class="w-[16.6667%] flex-shrink-0 reveal scale-up delay-200 px-3">
                                <div class="card-testimoni-minimalist text-center h-full">
                                    <i data-lucide="quote" class="w-8 h-8 text-primary-blue mb-4 reveal slide-up delay-300 mx-auto"></i>
                                    <p class="text-lg italic text-gray-700 mb-6 reveal slide-up delay-400">"Strategi pemasaran digital dari LGTR DIGITAL MARKETING sangat efektif kami mencapai peningkatan penjualan dari kanal online."</p>
                                    <div class="reveal slide-up delay-500">
                                        <p class="font-bold text-primary-blue">Direktur Klinik Gigi</p>
                                        <p class="text-sm text-gray-500">Industri Layanan Kesehatan</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Kartu 3 -->
                            <div class="w-[16.6667%] flex-shrink-0 reveal slide-left delay-300 px-3">
                                <div class="card-testimoni-minimalist text-center h-full">
                                    <i data-lucide="quote" class="w-8 h-8 text-accent-orange mb-4 reveal slide-up delay-400 mx-auto"></i>
                                    <p class="text-lg italic text-gray-700 mb-6 reveal slide-up delay-500">"Kami berhasil menaikan penjualan dengan strategi iklan mereka. Traffic ke coffe shop kamni naik signifikan, terutama di jam sepi."</p>
                                    <div class="reveal slide-up delay-600">
                                        <p class="font-bold text-primary-blue">Manager Coffe Shop</p>
                                        <p class="text-sm text-gray-500">Industri Coffe Shop</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Kartu 4 -->
                            <div class="w-[16.6667%] flex-shrink-0 reveal rotate-up delay-400 px-3">
                                <div class="card-testimoni-minimalist text-center h-full">
                                    <i data-lucide="quote" class="w-8 h-8 text-primary-blue mb-4 mx-auto reveal slide-up delay-500"></i>
                                    <p class="text-lg italic text-gray-700 mb-6 reveal slide-up delay-600">"Dampak pemasaran digital yang dikelola oleh LGTR DIGITAL MARKETING sangat terasa. Kami tidak hanya melihat jumlah followers yang naik, tetapi juga reservasi online yang melonjak."</p>
                                    <div class="reveal slide-up delay-700">
                                        <p class="font-bold text-primary-blue">Owner Salon</p>
                                        <p class="text-sm text-gray-500">Industri Kecantikan dan Perawatan Diri</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kartu 5 -->
                            <div class="w-[16.6667%] flex-shrink-0 reveal scale-up delay-500 px-3">
                                <div class="card-testimoni-minimalist text-center h-full">
                                    <i data-lucide="quote" class="w-8 h-8 text-accent-orange mb-4 mx-auto reveal slide-up delay-600"></i>
                                    <p class="text-lg italic text-gray-700 mb-6 reveal slide-up delay-700">"Strategi pemasaran digital LGTR berhasil membuat personal branding saya lebih cepat dikenal dan kredibel."</p>
                                    <div class="reveal slide-up delay-800">
                                        <p class="font-bold text-primary-blue">Content Creator</p>
                                        <p class="text-sm text-gray-500">Personal Branding</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Kartu 6 -->
                            <div class="w-[16.6667%] flex-shrink-0 reveal slide-right delay-600 px-3">
                                <div class="card-testimoni-minimalist text-center h-full">
                                    <i data-lucide="quote" class="w-8 h-8 text-primary-blue mb-4 mx-auto reveal slide-up delay-700"></i>
                                    <p class="text-lg italic text-gray-700 mb-6 reveal slide-up delay-800">"Tim LGTR DIGITAL MARKETING sangat membantu bagi bisnis B2B kami! Mereka tidak hanya menaikkan traffic, tetapi juga kualitas leads untuk proyek IT kami melonjak."</p>
                                    <div class="reveal slide-up delay-900">
                                        <p class="font-bold text-primary-blue">Direktur Perusahaan IT</p>
                                        <p class="text-sm text-gray-500">Industri Teknologi Informasi dan Komunikasi</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Tombol Navigasi Slider -->
                    <!-- Ditempatkan di luar wadah kartu agar tidak menyebabkan clipping -->
                    <button id="testimoni-prev" class="absolute top-1/2 left-0 -translate-y-1/2 bg-white/70 backdrop-blur-sm shadow-xl rounded-full w-12 h-12 flex items-center justify-center text-primary-blue hover:bg-accent-orange hover:text-white transition duration-300 disabled:opacity-30 disabled:cursor-not-allowed z-30">
                        <i data-lucide="chevron-left" class="w-6 h-6"></i>
                    </button>
                    <button id="testimoni-next" class="absolute top-1/2 right-0 -translate-y-1/2 bg-white/70 backdrop-blur-sm shadow-xl rounded-full w-12 h-12 flex items-center justify-center text-primary-blue hover:bg-accent-orange hover:text-white transition duration-300 disabled:opacity-30 disabled:cursor-not-allowed z-30">
                        <i data-lucide="chevron-right" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- 4. Section Layanan (Desire - Offer) - STYLE 3: Premium Accent Block / Vertical Capsule -->
        <section id="layanan" class="py-24 md:py-32 lg:py-40 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="reveal slide-up text-center mb-16">
                    <h2 class="text-4xl font-extrabold text-primary-blue mb-4 reveal slide-up delay-100">Layanan Unggulan Kami</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto opacity-90 reveal slide-up delay-200">
                        Digital Marketing Adaptatif yang dirancang untuk pertumbuhan bisnis yang berkelanjutan.
                    </p>
                </div>

                <!-- Parallax Content Wrapper (Layanan) -->
                <div id="layanan-parallax-content" data-speed="2.0" class="grid grid-cols-1 md:grid-cols-3 gap-8 transition-transform duration-100 ease-out">
                    
                    <!-- Layanan 1: Slide Right (Inverse Blue Background) - Main Offer -->
                    <div class="reveal slide-right p-10 bg-primary-blue rounded-xl shadow-2xl shadow-blue-500/50 transition duration-300 transform hover:scale-[1.03] hover:translate-y-[-5px]">
                        <i data-lucide="layers-3" class="w-12 h-12 text-accent-orange mb-6 reveal slide-up delay-100"></i>
                        <h3 class="text-2xl font-bold text-white mb-3 reveal slide-up delay-200">Digital Marketing Fullstack</h3>
                        <p class="text-gray-200 mb-6 reveal slide-up delay-300">Strategi lengkap dari iklan, pembuatan konten, optimasi SEO, hingga analitik mendalam. Kami mengelola keseluruhan kehadiran digital Anda.</p>
                        <a href="https://api.whatsapp.com/send/?phone=628812431684&text=Saya+ingin+konsultasi+jasa+dari+lgtr&type=phone_number&app_absent=0" class="text-accent-orange font-semibold hover:text-white transition duration-300 flex items-center reveal slide-up delay-400">
                            Konsultasi Sekarang <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>

                    <!-- Layanan 2: Scale Up (White BG, Strong Blue Top Border) -->
                    <div class="reveal scale-up delay-100 p-10 bg-white rounded-xl shadow-2xl border-t-8 border-primary-blue transition duration-300 transform hover:scale-[1.03] hover:translate-y-[-5px]">
                        <i data-lucide="rocket" class="w-12 h-12 text-primary-blue mb-6 reveal slide-up delay-200"></i>
                        <h3 class="text-2xl font-bold text-primary-blue mb-3 reveal slide-up delay-300">Ads Optimization</h3>
                        <p class="text-gray-600 mb-6 reveal slide-up delay-400">Iklan yang lebih efisien, adaptif terhadap perubahan algoritma, dan penargetan yang disempurnakan dengan teknologi AI.</p>
                        <a href="https://api.whatsapp.com/send/?phone=628812431684&text=Saya+ingin+konsultasi+jasa+dari+lgtr&type=phone_number&app_absent=0" class="text-accent-orange font-semibold hover:text-primary-blue transition duration-300 flex items-center reveal slide-up delay-500">
                            Konsultasi Sekarang <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>

                    <!-- Layanan 3: Slide Left (White BG, Strong Orange Left Border) -->
                    <div class="reveal slide-left delay-200 p-10 bg-white rounded-xl shadow-2xl border-l-8 border-accent-orange transition duration-300 transform hover:scale-[1.03] hover:translate-y-[-5px]">
                        <i data-lucide="code" class="w-12 h-12 text-accent-orange mb-6 reveal slide-up delay-300"></i>
                        <h3 class="text-2xl font-bold text-primary-blue mb-3 reveal slide-up delay-400">Website Optimization</h3>
                        <p class="text-gray-600 mb-6 reveal slide-up delay-500">Memastikan website Anda cepat, ramah SEO, dan dirancang khusus untuk konversi tinggi, mengubah pengunjung menjadi pelanggan.</p>
                        <a href="https://api.whatsapp.com/send/?phone=628812431684&text=Saya+ingin+konsultasi+jasa+dari+lgtr&type=phone_number&app_absent=0" class="text-accent-orange font-semibold hover:text-primary-blue transition duration-300 flex items-center reveal slide-up delay-600">
                            Konsultasi Sekarang <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- 5. Section CTA (Action) - DUA KOLOM DENGAN PLACEHOLDER GAMBAR 1:1 -->
        <section id="cta-main" class="py-20 md:py-28 bg-gradient-to-r from-primary-blue to-primary-blue/95 shadow-inner">
            <!-- Parallax Content Wrapper (CTA) -->
            <div id="cta-parallax-content" data-speed="1.8" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid md:grid-cols-2 gap-10 items-center transition-transform duration-100 ease-out">
                
                <!-- Promo Image Placeholder (Left) - Rasio 1:1 -->
                <div class="md:order-1 reveal slide-right p-4 bg-white/10 rounded-xl flex items-center justify-center h-full aspect-square shadow-lg w-full">
                    <!-- GANTI TAG IMG INI DENGAN URL GAMBAR PROMO ANDA -->
                    <img 
                        src="marketing3.jpeg" 
                        alt="Placeholder Gambar Promo Instagram Feed" 
                        class="w-full h-full object-cover rounded-lg"
                        onerror="this.onerror=null; this.src='https://lightermediagroup.com/wp-content/uploads/2025/11/cta-landing-page-lgtr.png'"
                    />
                  
                </div>

                <!-- Text Content (Right) -->
                <div class="md:order-2 text-center md:text-left reveal scale-up">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-white leading-tight mb-6 reveal slide-up delay-100">
                        Saatnya upgrade strategi digital bisnismu dengan <span class="text-accent-orange">harga hemat dan hasil maksimal.</span>
                    </h2>
                    <a href="https://api.whatsapp.com/send/?phone=628812431684&text=Saya+ingin+konsultasi+jasa+dari+lgtr&type=phone_number&app_absent=0" class="inline-flex items-center justify-center px-12 py-4 text-lg font-bold text-primary-blue bg-white rounded-xl shadow-3xl transition duration-300 transform hover:scale-105 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-white focus:ring-opacity-50 reveal slide-up delay-300">
                        Konsultasi Sekarang
                    </a>
                </div>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-primary-blue text-white py-12">
        <!-- FIX: Mengubah kelas grid-cols-2 menjadi grid-cols-1 md:grid-cols-2 lg:grid-cols-4 -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <!-- Logo & Brand -->
            <div class="reveal slide-up">
                <!-- LOGO IMAGE PLACEHOLDER: Ganti dengan logo LGTR Anda -->
                <a href="#attention" class="flex items-center mb-4">
                    <img 
                        src="lighterImage.png" 
                        alt="Logo LGTR Footer" 
                        class="h-8 w-auto object-contain" 
                        onerror="this.onerror=null; this.src='https://placehold.co/32x32/000066/FFFFFF?text=LG'"
                    />
                    <!-- Fallback text if image fails to load -->
                    <p class="text-1xl font-black text-white tracking-wider ml-2">
                        LGTR<span class="text-accent-orange">.</span>
                    </p>
                </a>
                <p class="text-sm text-gray-300">Digital Marketing Adaptatif, untuk bisnis yang tidak pernah berhenti tumbuh.</p>
            </div>

            <!-- Tautan Singkat -->
            <div class="reveal slide-up delay-100">
                <h5 class="text-lg font-semibold mb-4 border-b border-accent-orange/50 pb-1">Navigasi</h5>
                <ul class="space-y-2 text-sm text-gray-300">
                    <!-- Navigasi Footer Konsisten dengan Header (Home, Tantangan, Layanan, Testimoni) -->
                    <li><a href="#attention" class="hover:text-accent-orange transition duration-200">Home</a></li>
                    <li><a href="#tantangan" class="hover:text-accent-orange transition duration-200">Tantangan</a></li>
                    <li><a href="#layanan" class="hover:text-accent-orange transition duration-200">Layanan</a></li>
                    <li><a href="#testimoni" class="hover:text-accent-orange transition duration-200">Testimoni</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="reveal slide-up delay-200">
                <h5 class="text-lg font-semibold mb-4 border-b border-accent-orange/50 pb-1">Hubungi Kami</h5>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li class="flex items-center"><i data-lucide="mail" class="w-4 h-4 mr-2"></i> LGTR@lightermediagroup.com</li>
                    <li class="flex items-center"><i data-lucide="phone" class="w-4 h-4 mr-2"></i> +628812431684</li>
                    <li class="flex items-center"><i data-lucide="map-pin" class="w-4 h-4 mr-2"></i> Bandung, Indonesia</li>
                </ul>
            </div>

            <!-- Social Media (Placeholder Images) -->
            <div class="reveal slide-up delay-300">
                <h5 class="text-lg font-semibold mb-4 border-b border-accent-orange/50 pb-1">Ikuti Kami</h5>
                <div class="flex space-x-3">
                    
                    <!-- Instagram Placeholder Image (w-6 h-6) -->
                    <a href="https://www.instagram.com/lgtr_digimarketing/" class="block transition duration-200 hover:opacity-75">
                         <img 
                            src="Instagram_logo_2022.svg.png" 
                            alt="Instagram" 
                            class="w-6 h-6 object-contain rounded-md"
                            onerror="this.onerror=null; this.src='https://placehold.co/24x24/FFFFFF/000066?text=IG'"
                        />
                    </a>
                    
                    <!-- Facebook Placeholder Image (w-6 h-6) -->
                    <a href="#" class="block transition duration-200 hover:opacity-75">
                        <img 
                            src="fesnuk_logo.png" 
                            alt="Tiktokz" 
                            class="w-6 h-6 object-contain rounded-md"
                            onerror="this.onerror=null; this.src='https://placehold.co/24x24/FFFFFF/000066?text=FB'"
                        />
                    </a>
                    
                    <!-- LinkedIn Placeholder Image (w-6 h-6) -->
                    <a href="#" class="block transition duration-200 hover:opacity-75">
                         <img 
                            src="round-linkedin-logo-isolated-white-background_469489-985.avif" 
                            alt="LinkedIn" 
                            class="w-6 h-6 object-contain rounded-md"
                            onerror="this.onerror=null; this.src='https://placehold.co/24x24/FFFFFF/000066?text=LI'"
                        />
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-12 text-center text-sm text-gray-500 border-t border-gray-700 pt-6">
            &copy; 2025 LGTR DIGITAL MARKERING. All rights reserved.
        </div>
    </footer>

    <!-- Fixed Utility Icons (Scroll to Top is now ABOVE WA) -->
    <div class="fixed bottom-4 right-4 z-[100] flex flex-col space-y-3">
        
        <!-- Scroll to Top Button (Hidden by default) - PLACED FIRST -->
        <button id="scrollToTopBtn" class="bg-primary-blue hover:bg-accent-orange text-white rounded-full p-3 shadow-2xl transition duration-300 opacity-0 pointer-events-none transform hover:scale-110">
            <i data-lucide="arrow-up" class="w-7 h-7"></i>
        </button>

        <!-- WhatsApp Icon (Always Visible) - PLACED SECOND -->
        <a href="https://wa.me/6281234567890" id="btnContact" target="_blank" class="bg-green-500 hover:bg-green-600 text-white rounded-full p-3 shadow-2xl transition duration-300 transform hover:scale-110">
            <i data-lucide="message-square-text" class="w-7 h-7"></i>
        </a>
    </div>


    <script>
        // Initialize Lucide Icons
        lucide.createIcons();
        
        // --------------------------------------------------------
        // JS for Global Parallax Scrolling Effect
        // --------------------------------------------------------

        // Targets all elements with data-speed attribute for parallax
        function applyParallaxToElement(element) {
            const rect = element.getBoundingClientRect();
            const viewportHeight = window.innerHeight;
            
            // Calculate position relative to viewport center (0 when exactly in center)
            const positionFromCenter = rect.top + rect.height / 2 - viewportHeight / 2;
            
            // Get speed multiplier (default to 1.5 if not set)
            const speed = parseFloat(element.getAttribute('data-speed')) || 1.5;
            
            // Calculate translation (subtle movement opposite to scroll direction). Multiplied by a small factor (-0.1) for subtlety.
            const displacement = positionFromCenter / speed; 
            
            // Apply transform (move slightly slower than page scroll)
            element.style.transform = `translateY(${displacement * -0.1}px)`;
        }

        function handleParallax() {
            const parallaxElements = document.querySelectorAll('[data-speed]');
            parallaxElements.forEach(applyParallaxToElement);
        }

        // Apply parallax on scroll, load, and resize
        window.addEventListener('scroll', handleParallax);
        window.addEventListener('load', handleParallax); 
        window.addEventListener('resize', handleParallax);

        // --------------------------------------------------------
        // JS for Scroll Animation (Intersection Observer)
        // --------------------------------------------------------
        const elementsToAnimate = document.querySelectorAll('.reveal');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Dapatkan nilai delay
                    const delayClass = Array.from(entry.target.classList).find(cls => cls.startsWith('delay-'));
                    const delayValue = delayClass ? parseInt(delayClass.replace('delay-', '')) : 0;
                    
                    setTimeout(() => {
                        entry.target.classList.add('active');
                        // Hentikan observasi setelah animasi pertama kali muncul
                        observer.unobserve(entry.target);
                    }, delayValue);
                }
            });
        }, {
            threshold: 0.1 // Pemicu saat 10% elemen terlihat
        });

        elementsToAnimate.forEach(element => {
            observer.observe(element);
        });

        // --------------------------------------------------------
        // JS for Testimonial Slider (LOGIKA SLIDER)
        // --------------------------------------------------------
        let currentSlide = 0;
        const slider = document.getElementById('testimonial-slider');
        const testimonialCount = slider.children.length; // 6 slides
        const prevButton = document.getElementById('testimoni-prev');
        const nextButton = document.getElementById('testimoni-next');

        // Mengatur unit translate, 100% karena hanya ada satu card yang terlihat per view
        const SLIDE_UNIT = 100 / testimonialCount; // 16.6667% per slide

        function updateSlider() {
            const maxSlideIndex = testimonialCount - 1; // Selalu -1 karena hanya 1 card per view
            
            // Clamp currentSlide
            if (currentSlide > maxSlideIndex) {
                currentSlide = maxSlideIndex;
            }
            if (currentSlide < 0) {
                currentSlide = 0;
            }

            // Translate berdasarkan currentSlide dan lebar per kartu (1/6 total lebar)
            slider.style.transform = `translateX(-${currentSlide * SLIDE_UNIT}%)`;
            
            // Update status tombol (disabled jika di ujung)
            prevButton.disabled = currentSlide === 0;
            nextButton.disabled = currentSlide === maxSlideIndex;
        }

        function changeSlide(index) {
            const maxSlideIndex = testimonialCount - 1;

            // Batasi index agar tidak melebihi batas
            if (index > maxSlideIndex) {
                index = maxSlideIndex; 
            }
            if (index < 0) {
                index = 0; 
            }
            
            currentSlide = index;
            updateSlider();
        }
        
        // Event Listeners untuk Tombol
        nextButton.addEventListener('click', () => {
             // Cek batas sebelum menambah
            if (currentSlide < testimonialCount - 1) {
                changeSlide(currentSlide + 1);
            }
        });
        
        prevButton.addEventListener('click', () => {
            // Cek batas sebelum mengurangi
            if (currentSlide > 0) {
                changeSlide(currentSlide - 1);
            }
        });

        // Listen for resize to adjust slider view
        window.addEventListener('resize', () => updateSlider()); // Hanya update posisi, tidak perlu re-clamp index
        window.onload = () => changeSlide(0); // Mulai dari slide 0

        // --------------------------------------------------------
        // JS for Fixed Icons (Scroll to Top Logic)
        // --------------------------------------------------------
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');

        window.addEventListener('scroll', () => {
            // Tampilkan tombol setelah 400px scroll
            if (window.scrollY > 400) { 
                scrollToTopBtn.classList.add('opacity-100', 'pointer-events-auto');
                scrollToTopBtn.classList.remove('opacity-0', 'pointer-events-none');
            } else {
                scrollToTopBtn.classList.remove('opacity-100', 'pointer-events-auto');
                scrollToTopBtn.classList.add('opacity-0', 'pointer-events-none');
            }
        });

        // Gulir halus ke atas saat tombol diklik
        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // --------------------------------------------------------
        // JS for Smooth Mobile Menu Toggle
        // --------------------------------------------------------
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLinks = mobileMenu.querySelectorAll('.mobile-link');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                const isOpen = mobileMenu.classList.toggle('open');
                
                // Change icon from menu to x when open
                const icon = mobileMenuBtn.querySelector('i');
                const iconName = isOpen ? 'x' : 'menu';
                icon.setAttribute('data-lucide', iconName);
                lucide.createIcons(); // Re-render icons after changing data-lucide attribute
            });

            // Close menu when a link is clicked (important for UX)
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (mobileMenu.classList.contains('open')) {
                        mobileMenu.classList.remove('open');
                        // Reset icon back to menu
                        mobileMenuBtn.querySelector('i').setAttribute('data-lucide', 'menu');
                        lucide.createIcons();
                    }
                });
            });
        }
    </script>
    <script>
        function sendEvent(name, params = {}) {
            fetch('meta_handler.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    event_name: name,
                    url: window.location.href,
                    custom_params: params
                })
            })
            .then(res => res.json())
            .then(data => {
                console.log("Respon Meta:", data);
            })
            .catch(err => {
                console.error("Error:", err);
            });
        }

        // 2. TRIGGER PAGEVIEW (Saat halaman dibuka)
        window.onload = () => sendEvent('PageView');

        // 3. TRIGGER CLICK
        document.getElementById('btnContact').onclick = () => {
            sendEvent('ContactClick', { 
                platform: 'WhatsApp', 
                button_color: 'Blue' 
            });
        };

        // 4. TRIGGER SCROLL
        let tracked = { 25: false, 50: false, 75: false, 100: false };
        window.onscroll = function() {
            let pct = Math.round((window.pageYOffset / (document.documentElement.scrollHeight - window.innerHeight)) * 100);
            
            [25, 50, 75, 100].forEach(point => {
                if (pct >= point && !tracked[point]) {
                    tracked[point] = true;
                    sendEvent('ScrollDepth', { percentage: point + '%' });
                }
            });
        };
    </script>
</body>
</html>