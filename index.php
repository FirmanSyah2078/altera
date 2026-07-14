<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALTERA | Smart Sanctuary</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- AOS CSS for Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Preline UI JS -->
    <script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-serif { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="bg-stone-50 text-stone-900 overflow-x-hidden">

    <!-- NAVBAR -->
    <nav class="fixed w-full z-50 px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center glass-card px-6 py-3 rounded-full">
            <div class="text-2xl font-bold tracking-tighter text-stone-900">ALTERA</div>
            <div class="hidden md:flex gap-8 text-sm font-medium text-stone-600">
                <a href="#home" class="hover:text-altera-gold transition-colors">Home</a>
                <a href="#concept" class="hover:text-altera-gold transition-colors">Concept</a>
                <a href="#product" class="hover:text-altera-gold transition-colors">Fuel</a>
            </div>
            <a href="#hub" class="btn btn-sm btn-neutral rounded-full px-5">Explore Hub</a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0 z-0">
            <!-- TUTOR NOTE: Visual: Person with headphones in quiet cafe. -->
            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070"
                 class="w-full h-full object-cover opacity-40" alt="Hero Background">
            <div class="absolute inset-0 bg-linear-to-b from-stone-50/50 via-transparent to-stone-50"></div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-4xl" data-aos="zoom-out" data-aos-duration="1500">
            <span class="text-amber-600 font-semibold tracking-widest uppercase text-xs mb-4 block animate-pulse">Alternative Era</span>
            <h1 class="text-5xl md:text-8xl font-serif italic font-bold text-stone-900 mb-6 leading-tight">
                Wake Up Your <span class="text-altera-gold">Focus</span>
            </h1>
            <p class="text-lg text-stone-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                Sebuah ruang di mana teknologi dan tradisi bertemu untuk menciptakan ketenangan maksimal di tengah hiruk-pikuk dunia.
            </p>
            <div class="flex flex-col md:flex-row gap-4 justify-center">
                <a href="#hub" class="btn btn-lg btn-neutral rounded-full px-8 hover:scale-105 transition-transform">Enter the Sanctuary</a>
                <a href="#concept" class="btn btn-lg btn-ghost rounded-full px-8 border-stone-300">Explore Concept</a>
            </div>
        </div>
    </section>

    <!-- CONCEPT SECTION -->
    <section id="concept" class="py-32 px-6 max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="relative" data-aos="fade-right" data-aos-duration="1000">
                <!-- TUTOR NOTE: Visual: Modern zen cafe interior. -->
                <img src="\assets\img\cafee.jpg"
                     class="rounded-3xl shadow-2xl animate-float" alt="Concept Image">
                <div class="absolute -bottom-6 -right-6 glass-card p-6 rounded-2xl hidden md:block" data-aos="fade-up" data-aos-delay="500">
                    <p class="text-sm font-medium italic">"Not just a cafe, <br>but a sanctuary."</p>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-4xl md:text-5xl font-serif font-bold mb-6 leading-tight">Smart <span class="text-altera-gold">Sanctuary</span></h2>
                <p class="text-stone-600 leading-relaxed mb-8 text-lg">
                    ALTERA membangun ekosistem yang mendukung produktivitas Gen Z melalui penggabungan IoT, kenyamanan maksimal, dan atmosfer yang dirancang khusus untuk menghilangkan distraksi.
                </p>
                <div class="space-y-6">
                    <div class="flex items-start gap-4 group">
                        <div class="p-2 bg-amber-100 rounded-lg text-amber-600 group-hover:bg-altera-gold group-hover:text-white transition-all">
                            <i data-lucide="zap" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Hybrid-Zoning</h4>
                            <p class="text-stone-500 text-sm">Area yang terbagi antara kolaborasi dan fokus total.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 group">
                        <div class="p-2 bg-amber-100 rounded-lg text-amber-600 group-hover:bg-altera-gold group-hover:text-white transition-all">
                            <i data-lucide="wind" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Atmosphere Design</h4>
                            <p class="text-stone-500 text-sm">Pencahayaan dan aroma yang meningkatkan gelombang alfa otak.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 group">
                        <div class="p-2 bg-amber-100 rounded-lg text-amber-600 group-hover:bg-altera-gold group-hover:text-white transition-all">
                            <i data-lucide="cpu" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Digital Integration</h4>
                            <p class="text-stone-500 text-sm">Terhubung langsung dengan Productivity Hub personal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCT SECTION -->
    <section id="product" class="py-32 bg-stone-200/50">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-serif font-bold mb-16" data-aos="fade-up">Productivity <span class="text-altera-gold">Fuel</span></h2>
            <div class="grid md:grid-cols-3 gap-10">
                <!-- Card 1 -->
                <div class="card bg-white shadow-sm hover:shadow-2xl transition-all group" data-aos="fade-up" data-aos-delay="100">
                    <figure class="px-4 pt-4 overflow-hidden">
                        <img src="\assets\img\cup.jpg"
                             class="rounded-2xl group-hover:scale-110 transition-transform duration-700" alt="Rempah Latte">
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="card-title font-serif text-xl">The Focus Blend</h3>
                        <p class="text-stone-500 text-sm leading-relaxed">Kombinasi Robusta, Jahe, dan Kayu Manis untuk konsentrasi tajam.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card bg-white shadow-sm hover:shadow-2xl transition-all group" data-aos="fade-up" data-aos-delay="300">
                    <figure class="px-4 pt-4 overflow-hidden">
                        <img src="\assets\img\cup.jpg"
                             class="rounded-2xl group-hover:scale-110 transition-transform duration-700" alt="Calm Blend">
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="card-title font-serif text-xl">The Calm Blend</h3>
                        <p class="text-stone-500 text-sm leading-relaxed">Kopi ringan dengan Kapulaga untuk meredakan stres sebelum aksi.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card bg-white shadow-sm hover:shadow-2xl transition-all group" data-aos="fade-up" data-aos-delay="500">
                    <figure class="px-4 pt-4 overflow-hidden">
                        <img src="\assets\img\cup.jpg"
                             class="rounded-2xl group-hover:scale-110 transition-transform duration-700" alt="Energy Boost">
                    </figure>
                    <div class="card-body items-center text-center">
                        <h3 class="card-title font-serif text-xl">The Energy Boost</h3>
                        <p class="text-stone-500 text-sm leading-relaxed">Sinergi kunyit dan kopi untuk stamina begadang produktif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DIGITAL HUB SECTION (COMING SOON) -->
    <section id="hub" class="py-32 px-6">
        <div class="max-w-5xl mx-auto glass-card rounded-[3rem] p-12 text-center relative overflow-hidden" data-aos="zoom-in">
            <div class="absolute top-0 right-0 p-10 opacity-10 animate-float">
                <i data-lucide="coffee" class="w-32 h-32"></i>
            </div>
            <div class="mb-6 inline-block px-4 py-1 bg-amber-100 text-amber-700 rounded-full text-xs font-bold tracking-widest uppercase">Coming Soon</div>
            <h2 class="text-4xl md:text-6xl font-serif font-bold mb-6">The Digital <br><span class="text-altera-gold">Sanctuary</span></h2>
            <p class="text-stone-600 mb-10 max-w-xl mx-auto text-lg">
                Kami sedang meracik pengalaman digital terbaik. Pomodoro Timer dan Lo-Fi Music akan segera hadir untuk menemani produktivitasmu.
            </p>
            <div class="flex justify-center gap-4">
                <div class="btn btn-neutral rounded-full px-12 cursor-not-allowed opacity-70">
                    <i data-lucide="lock" class="mr-2 w-4 h-4"></i> Access Hub
                </div>
            </div>
            <p class="mt-6 text-stone-400 text-xs italic">Stay tuned. Alternative Era is arriving.</p>
        </div>
    </section>

    <footer class="py-12 border-t border-stone-200 text-center text-stone-400 text-sm">
        <p>&copy; 2026 ALTERA Project. Alternative Era • Smart Sanctuary</p>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Initialize AOS Animations
        AOS.init({
            duration: 800,
            once: true, // Animasi hanya jalan sekali saat di-scroll
            easing: 'ease-out-quad'
        });
    </script>
</body>
</html>