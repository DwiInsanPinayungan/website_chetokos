<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheto Murah - Premium 8 Ball Pool Tools</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Inter & Outfit -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Outfit:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #00d2ff;
            --secondary-color: #3a7bd5;
            --dark-bg: #0a0b10;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dark-bg);
            color: #ffffff;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3,
        .navbar-brand {
            font-family: 'Outfit', sans-serif;
        }

        /* Navbar */
        .navbar {
            background: rgba(10, 11, 16, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--glass-border);
            padding: 1rem 0;
        }

        .navbar-brand img {
            height: 40px;
            margin-right: 10px;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8) !important;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
        }

        /* Hero Section */
        .hero-section {
            padding: 160px 0 100px;
            background: linear-gradient(rgba(10, 11, 16, 0.7), rgba(10, 11, 16, 0.9)), url('/assets/img/hero-bg.png');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 700;
            background: linear-gradient(to right, #fff, var(--primary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 40px;
            max-width: 600px;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            color: white;
            font-weight: 600;
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(0, 210, 255, 0.3);
        }

        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 210, 255, 0.5);
            color: white;
        }

        /* Pricing Section */
        .pricing-section {
            padding: 100px 0;
        }

        .pricing-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            border-radius: 25px;
            padding: 30px;
            transition: 0.4s;
            position: relative;
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .pricing-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
        }

        .price-img {
            width: 100%;
            height: auto;
            border-radius: 20px;
            margin-bottom: 25px;
            border: 1px solid var(--glass-border);
        }

        .view-price-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 700;
            width: 100%;
            margin-top: auto;
            transition: 0.3s;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0, 210, 255, 0.3);
        }

        .view-price-btn:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 25px rgba(0, 210, 255, 0.5);
        }

        .pricing-card.popular {
            border-color: rgba(0, 210, 255, 0.3);
            background: rgba(0, 210, 255, 0.05);
        }

        .popular-badge {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: var(--primary-color);
            color: #000;
            padding: 5px 20px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .price-tag {
            font-size: 3rem;
            font-weight: 700;
            margin: 20px 0;
        }

        .price-tag span {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.5);
        }

        .price-img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            margin-bottom: 20px;
            border: 1px solid var(--glass-border);
            transition: 0.3s;
        }

        .price-img:hover {
            transform: scale(1.05);
            border-color: var(--primary-color);
        }

        .pricing-list {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .pricing-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 18px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-radius: 15px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .pricing-item:hover {
            background: rgba(0, 210, 255, 0.1);
            transform: translateY(-5px) scale(1.02);
            border-color: var(--primary-color);
            box-shadow: 0 8px 25px rgba(0, 210, 255, 0.2);
        }

        .pricing-item::after {
            content: '\f0a9';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            right: -30px;
            transition: 0.3s;
            color: var(--primary-color);
            font-size: 1.1rem;
        }

        .pricing-item:hover::after {
            right: 18px;
        }

        .pricing-value {
            font-weight: 800;
            color: var(--primary-color);
            font-size: 1.1rem;
            transition: 0.3s;
        }

        .pricing-item:hover .pricing-value {
            margin-right: 25px;
        }

        /* Modal Styles */
        .modal-content {
            background: #0f111a;
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            color: white;
        }

        .modal-header {
            border-bottom: 1px solid var(--glass-border);
        }

        .modal-footer {
            border-top: 1px solid var(--glass-border);
        }

        .payment-method {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            padding: 15px;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
            text-align: center;
        }

        .payment-method:hover,
        .payment-method.active {
            border-color: var(--primary-color);
            background: rgba(0, 210, 255, 0.05);
        }

        .copy-btn {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid var(--glass-border);
            color: var(--primary-color);
            padding: 2px 10px;
            border-radius: 5px;
            font-size: 0.75rem;
            margin-left: 10px;
            cursor: pointer;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            vertical-align: middle;
        }

        .copy-btn:hover {
            background: var(--primary-color);
            color: black;
        }

        .payment-method i {
            font-size: 1.5rem;
            margin-bottom: 5px;
            display: block;
        }

        .pricing-item:last-child {
            border-bottom: none;
        }

        .pricing-duration {
            font-weight: 600;
            color: rgba(255, 255, 255, 0.9);
        }

        .pricing-value {
            font-weight: 700;
            color: var(--primary-color);
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 30px 0;
            text-align: left;
            flex-grow: 1;
        }

        .feature-list li {
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.8);
            display: flex;
            align-items: center;
        }

        .feature-list li i {
            color: var(--primary-color);
            margin-right: 12px;
        }

        .feature-list li.disabled {
            color: rgba(255, 255, 255, 0.3);
        }

        .feature-list li.disabled i {
            color: rgba(255, 255, 255, 0.3);
        }

        /* Features Section */
        .features-grid {
            padding: 100px 0;
            background: rgba(255, 255, 255, 0.02);
        }

        .feature-box {
            padding: 30px;
            border-radius: 20px;
            transition: 0.3s;
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Footer */
        footer {
            padding: 60px 0;
            border-top: 1px solid var(--glass-border);
        }

        .social-links a {
            color: white;
            font-size: 1.5rem;
            margin-right: 20px;
            transition: 0.3s;
        }

        .social-links a:hover {
            color: var(--primary-color);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="/assets/img/logo.png" alt="Logo">
                <span>YONGPENTAMARKET</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pricing">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#featuresModal">Fitur</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="hero-title">Jadilah Legenda di Meja 8 Ball Pool.</h1>
                    <p class="hero-subtitle">Buka potensi penuh permainan Anda dengan Cheto Kos. Presisi tanpa tanding,
                        keamanan berlapis, dan teknologi yang dirancang khusus untuk kemenangan mutlak di setiap
                        pertandingan.</p>
                    <div class="d-flex gap-3">
                        <a href="#pricing" class="btn btn-primary-custom">Lihat Produk</a>
                        <a href="#features" class="btn btn-outline-light rounded-pill px-4">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section" id="pricing">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Pilih Paket Anda</h2>
                <p class="text-white-50">Tersedia dalam berbagai variasi sesuai kebutuhan Anda.</p>
            </div>
            <div class="row g-4">
                <!-- Mod -->
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <h3 class="fw-bold">Cheto Kos Mod</h3>
                        <p class="text-white-50 small mb-4">Modifikasi Total & Fitur Agresif</p>
                        <img src="https://images4.imagebam.com/7c/15/89/ME18ZOUQ_o.jpg" alt="Mod" class="price-img">
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Fitur Modifikasi Maksimal</li>
                            <li><i class="fas fa-check-circle"></i> Auto-Play & Auto-Queue</li>
                            <li><i class="fas fa-check-circle"></i> Line Prediction</li>
                            <li><i class="fas fa-check-circle"></i> Support Facebook Login</li>
                            <li><i class="fas fa-check-circle"></i> Support Miniclip Login</li>
                        </ul>
                        <button class="view-price-btn" onclick="showPrices('mod')">LIHAT HARGA</button>
                    </div>
                </div>
                <!-- Basic -->
                <div class="col-lg-4">
                    <div class="pricing-card">
                        <h3 class="fw-bold">Cheto Kos Basic</h3>
                        <p class="text-white-50 small mb-4">Aman, Ringan & Standar Playstore</p>
                        <img src="https://images4.imagebam.com/7c/15/89/ME18ZOUQ_o.jpg" alt="Basic" class="price-img">
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Manual Only</li>
                            <li><i class="fas fa-check-circle"></i> Support Official Playstore APK</li>
                            <li><i class="fas fa-check-circle"></i> Direct Google Login</li>
                            <li><i class="fas fa-check-circle"></i> Anti-Ban Protection</li>
                            <li><i class="fas fa-check-circle"></i> Support Facebook Login</li>
                            <li><i class="fas fa-check-circle"></i> Support Miniclip Login</li>
                        </ul>
                        <button class="view-price-btn" onclick="showPrices('basic')">LIHAT HARGA</button>
                    </div>
                </div>
                <!-- Premium -->
                <div class="col-lg-4">
                    <div class="pricing-card popular">
                        <div class="popular-badge">Eksklusif</div>
                        <h3 class="fw-bold">Cheto Kos Premium</h3>
                        <p class="text-white-50 small mb-4">Performa Maksimal Tanpa Batas</p>
                        <img src="https://images4.imagebam.com/7c/15/89/ME18ZOUQ_o.jpg" alt="Premium" class="price-img">
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> Auto-Play & Auto-Queue</li>
                            <li><i class="fas fa-check-circle"></i> Support Official Playstore APK</li>
                            <li><i class="fas fa-check-circle"></i> Direct Google Login</li>
                            <li><i class="fas fa-check-circle"></i> Advanced Line Prediction</li>
                            <li><i class="fas fa-check-circle"></i> Support Facebook Login</li>
                            <li><i class="fas fa-check-circle"></i> Support Miniclip Login</li>
                        </ul>
                        <button class="view-price-btn" onclick="showPrices('premium')">LIHAT HARGA</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-grid" id="features">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Mengapa Cheto Kos?</h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-shield-halved"></i></div>
                        <h4>Keamanan Berlapis</h4>
                        <p class="text-white-50">Algoritma anti-deteksi tercanggih untuk memastikan akun Anda tetap aman
                            selama kompetisi berlangsung.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                        <h4>Instalasi Instan</h4>
                        <p class="text-white-50">Tanpa ribet. Proses setup cepat dan mudah sehingga Anda bisa langsung
                            mendominasi permainan dalam hitungan menit.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon"><i class="fas fa-headset"></i></div>
                        <h4>Layanan Elite</h4>
                        <p class="text-white-50">Dukungan teknis prioritas dan update berkala untuk menjaga performa
                            alat tetap optimal di setiap versi game.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5" id="contact">
        <div class="container text-center">
            <h2 class="mb-4">Butuh Bantuan? Hubungi Kami</h2>
            <p class="mb-5 text-white-50">Silakan hubungi admin kami melalui WhatsApp untuk pertanyaan lebih lanjut atau
                bantuan teknis.</p>
            <div class="social-links">
                <a href="https://wa.me/6288994575261" class="btn btn-primary-custom px-5 rounded-pill mb-3">
                    <i class="fab fa-whatsapp me-2"></i> Hubungi Admin
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="text-white-50 mb-0">&copy; 2026 YongPentamarket. All rights reserved.</p>
            <p style="font-size: 0.8rem;" class="mt-2 text-muted text-uppercase tracking-widest">Premium 8 Ball Pool
                Enhancements</p>
        </div>
    </footer>

    <!-- Floating Chatbot Button -->
<a href="/index.php/chatbot"
    style="position: fixed; bottom: 30px; right: 30px; background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; box-shadow: 0 4px 25px rgba(0, 210, 255, 0.3); z-index: 1000; text-decoration: none; transition: 0.3s;"
    onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
    <i class="fas fa-comment-dots"></i>
</a>


    <!-- Warning/Disclaimer Modal -->
    <div class="modal fade" id="disclaimerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-danger" style="background: linear-gradient(145deg, #1a1c25, #0f111a);">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title text-danger fw-bold mx-auto">
                        <i class="fas fa-exclamation-triangle me-2"></i> PERINGATAN PENTING
                    </h5>
                </div>
                <div class="modal-body p-4 text-center">
                    <div class="mb-4">
                        <i class="fas fa-shield-virus text-danger mb-3" style="font-size: 3rem; opacity: 0.8;"></i>
                        <p class="text-white-50">Sebelum melanjutkan, mohon perhatikan syarat dan risiko berikut:</p>
                    </div>
                    
                    <div class="text-start bg-danger bg-opacity-10 p-3 rounded-4 mb-4 border border-danger border-opacity-25">
                        <ul class="mb-0 small text-white-50 ps-3">
                            <li class="mb-2">Segala bentuk penggunaan cheat memiliki risiko pemblokiran akun (Ban) oleh pihak pengembang game.</li>
                            <li class="mb-2">Gunakan akun cadangan/kecil terlebih dahulu untuk menguji keamanan.</li>
                            <li class="mb-2">Kami tidak bertanggung jawab atas kerugian atau sanksi yang diterima oleh akun Anda.</li>
                            <li>Pembelian yang sudah diproses tidak dapat dibatalkan (No Refund).</li>
                        </ul>
                    </div>
                    
                    <p class="small text-white-50 mb-4 italic">"Dengan melanjutkan, Anda dianggap telah memahami dan menyetujui segala risiko yang ada."</p>
                    
                    <button type="button" class="btn btn-danger w-100 rounded-pill py-2 fw-bold" data-bs-dismiss="modal">
                        SAYA MENGERTI & LANJUTKAN
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- All Features Modal -->
    <div class="modal fade" id="featuresModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h4 class="modal-title fw-bold text-primary">Perbandingan Fitur Cheto Kos</h4>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row g-4">
                        <!-- Mod Features -->
                        <div class="col-md-4">
                            <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.03); border: 1px solid var(--glass-border);">
                                <h5 class="fw-bold mb-3 text-info"><i class="fas fa-microchip me-2"></i>CHETO KOS MOD</h5>
                                <ul class="feature-list text-start">
                                    <li><i class="fas fa-check-circle text-primary"></i> Fitur Modifikasi Maksimal</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Auto-Play & Auto-Queue</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Line Prediction</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Support Facebook Login</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Support Miniclip Login</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Basic Features -->
                        <div class="col-md-4">
                            <div class="p-4 rounded-4 h-100" style="background: rgba(255,255,255,0.03); border: 1px solid var(--glass-border);">
                                <h5 class="fw-bold mb-3 text-secondary"><i class="fas fa-shield-alt me-2"></i>CHETO KOS BASIC</h5>
                                <ul class="feature-list text-start">
                                    <li><i class="fas fa-check-circle text-primary"></i> Manual Only</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Support Official Playstore APK</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Direct Google Login</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Anti-Ban Protection</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Support Facebook Login</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Support Miniclip Login</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Premium Features -->
                        <div class="col-md-4">
                            <div class="p-4 rounded-4 h-100" style="background: rgba(0,210,255,0.05); border: 1px solid var(--primary-color);">
                                <h5 class="fw-bold mb-3 text-primary"><i class="fas fa-crown me-2"></i>CHETO KOS PREMIUM</h5>
                                <ul class="feature-list text-start">
                                    <li><i class="fas fa-check-circle text-primary"></i> Auto-Play & Auto-Queue</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Support Official Playstore APK</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Direct Google Login</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Advanced Line Prediction</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Support Facebook Login</li>
                                    <li><i class="fas fa-check-circle text-primary"></i> Support Miniclip Login</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Price Selection Modal -->
    <div class="modal fade" id="priceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="priceModalTitle">Daftar Harga</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-white-50 small mb-4">Silakan pilih durasi paket yang Anda inginkan:</p>
                    <div id="priceListContainer" class="pricing-list">
                        <!-- Populated via JS -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Checkout Modal -->
    <div class="modal fade" id="checkoutModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Pembelian</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row g-4">
                        <!-- Left Column: Order Summary & Payment Info -->
                        <div class="col-md-5 border-end border-secondary border-opacity-25">
                            <div class="p-3 rounded-4 mb-4"
                                style="background: rgba(255,255,255,0.03); border: 1px solid var(--glass-border);">
                                <h6 class="text-white-50 small text-uppercase tracking-wider mb-2">Ringkasan Pesanan
                                </h6>
                                <h4 id="modalPlanName" class="text-primary fw-bold mb-1"></h4>
                                <p id="modalPlanDuration" class="text-white mb-1"></p>
                                <h3 id="modalPlanPrice" class="fw-bold mb-0"></h3>
                            </div>

                            <!-- Payment Info Area (Dynamic) -->
                            <div id="paymentInfo" class="p-3 rounded-4 text-center"
                                style="background: rgba(0, 210, 255, 0.05); border: 1px dashed var(--primary-color);">
                                <div id="info-qris">
                                    <p class="small text-white-50 mb-2">Scan QRIS untuk bayar:</p>
                                    <img src="/assets/img/qris.png" alt="QRIS" class="img-fluid rounded-3 mb-2"
                                        style="max-width: 200px;">
                                    <p class="small fw-bold mb-0">A/N YONGPENTAMARKET</p>
                                </div>
                                <div id="info-bank" class="d-none">
                                    <p class="small text-white-50 mb-2">Transfer ke Rekening:</p>
                                    <h5 class="mb-1 text-primary">SEABANK</h5>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <h4 class="fw-bold mb-0" style="font-size: 1.1rem;">9010 6862 3384</h4>
                                        <button type="button" class="copy-btn"
                                            onclick="copyToClipboard('901068623384', this)">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                    </div>
                                    <p class="small fw-bold mb-0">A/N Dwi Insan Pinayungan</p>
                                </div>
                                <div id="info-ewallet" class="d-none">
                                    <p class="small text-white-50 mb-2">Kirim ke E-Wallet:</p>
                                    <h5 class="mb-1 text-primary">DANA</h5>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <h4 class="fw-bold mb-0" style="font-size: 1.1rem;">0896 1279 3783</h4>
                                        <button type="button" class="copy-btn"
                                            onclick="copyToClipboard('089612793783', this)">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                    </div>
                                    <p class="small fw-bold mb-0">A/N Dwi Insan Pinayungan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column: Form & Method Selection -->
                        <div class="col-md-7">
                            <form id="checkoutForm">
                                <div class="mb-4">
                                    <label class="form-label small text-white-50">Informasi Pelanggan</label>
                                    <div class="mb-3">
                                        <label class="form-label small mb-1">Masukkan Nama</label>
                                        <input type="text" id="custName"
                                            class="form-control bg-dark border-secondary text-white py-2"
                                            placeholder="Nama Lengkap Anda" required>
                                    </div>
                                    <div>
                                        <label class="form-label small mb-1">Masukkan Nomor HP</label>
                                        <input type="tel" id="custWA"
                                            class="form-control bg-dark border-secondary text-white py-2"
                                            placeholder="Contoh: 0812..." required>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label small text-white-50 mb-3">Pilih Metode Pembayaran</label>
                                    <div class="row g-2" id="paymentMethods">
                                        <div class="col-4">
                                            <div class="payment-method active" onclick="selectPayment(this, 'qris')">
                                                <i class="fas fa-qrcode"></i>
                                                <span class="small">QRIS</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="payment-method" onclick="selectPayment(this, 'bank')">
                                                <i class="fas fa-university"></i>
                                                <span class="small">Bank</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="payment-method" onclick="selectPayment(this, 'ewallet')">
                                                <i class="fas fa-wallet"></i>
                                                <span class="small">E-Wallet</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-5 d-flex gap-2">
                                    <button type="button" class="btn btn-outline-light rounded-pill px-4 flex-grow-1"
                                        data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-primary-custom px-4 flex-grow-2"
                                        onclick="processPayment()">Bayar Sekarang</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const productPrices = {
            'mod': [
                { dur: '1 Hari', price: '35.000', label: '35K' },
                { dur: '7 Hari', price: '75.000', label: '75K' },
                { dur: '30 Hari', price: '220.000', label: '220K' }
            ],
            'basic': [
                { dur: '1 Hari', price: '30.000', label: '30K' },
                { dur: '7 Hari', price: '90.000', label: '90K' },
                { dur: '15 Hari', price: '130.000', label: '130K' },
                { dur: '30 Hari', price: '230.000', label: '230K' }
            ],
            'premium': [
                { dur: '1 Hari', price: '45.000', label: '45K' },
                { dur: '7 Hari', price: '115.000', label: '115K' },
                { dur: '15 Hari', price: '192.000', label: '192K' },
                { dur: '30 Hari', price: '310.000', label: '310K' }
            ]
        };

        const productNames = {
            'mod': 'Cheto Kos Mod',
            'basic': 'Cheto Kos Basic',
            'premium': 'Cheto Kos Premium'
        };

        function showPrices(type) {
            const container = document.getElementById('priceListContainer');
            const title = document.getElementById('priceModalTitle');
            const prices = productPrices[type];
            const name = productNames[type];

            title.innerText = 'Harga ' + name;
            container.innerHTML = '';

            prices.forEach(item => {
                const div = document.createElement('div');
                div.className = 'pricing-item';
                div.onclick = function () {
                    bootstrap.Modal.getInstance(document.getElementById('priceModal')).hide();
                    openCheckout(name, item.dur, item.price);
                };
                div.innerHTML = `
                    <span class="pricing-duration">${item.dur}</span>
                    <span class="pricing-value">${item.label}</span>
                `;
                container.appendChild(div);
            });

            var myModal = new bootstrap.Modal(document.getElementById('priceModal'));
            myModal.show();
        }

        function openCheckout(plan, duration, price) {
            document.getElementById('modalPlanName').innerText = plan;
            document.getElementById('modalPlanDuration').innerText = duration;
            document.getElementById('modalPlanPrice').innerText = 'Rp ' + price;
            var myModal = new bootstrap.Modal(document.getElementById('checkoutModal'));
            myModal.show();
        }

        function selectPayment(element, type) {
            document.querySelectorAll('.payment-method').forEach(el => el.classList.remove('active'));
            element.classList.add('active');

            // Hide all info
            document.getElementById('info-qris').classList.add('d-none');
            document.getElementById('info-bank').classList.add('d-none');
            document.getElementById('info-ewallet').classList.add('d-none');

            // Show selected info
            document.getElementById('info-' + type).classList.remove('d-none');
        }

        function toggleDetails(id) {
            var card = document.getElementById(id);
            card.classList.toggle('expanded');
        }

        function copyToClipboard(text, btn) {
            navigator.clipboard.writeText(text).then(function () {
                var originalText = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check"></i> Tersalin';
                btn.style.background = '#25d366';
                btn.style.color = 'white';

                setTimeout(function () {
                    btn.innerHTML = originalText;
                    btn.style.background = '';
                    btn.style.color = '';
                }, 2000);
            }).catch(function (err) {
                console.error('Gagal menyalin: ', err);
            });
        }

        function processPayment() {
            var name = document.getElementById('custName').value;
            var wa = document.getElementById('custWA').value;
            var plan = document.getElementById('modalPlanName').innerText;
            var duration = document.getElementById('modalPlanDuration').innerText;
            var price = document.getElementById('modalPlanPrice').innerText;

            if (!name || !wa) {
                alert('Mohon isi nama dan nomor WhatsApp Anda.');
                return;
            }

            var message = "*KONFIRMASI PEMBELIAN CHETO KOS*%0A" +
                "-----------------------------------%0A" +
                "*Nama:* " + name + "%0A" +
                "*WhatsApp:* " + wa + "%0A" +
                "*Produk:* " + plan + "%0A" +
                "*Durasi:* " + duration + "%0A" +
                "*Total:* " + price + "%0A" +
                "-----------------------------------%0A" +
                "Halo Admin, saya ingin melakukan pembayaran untuk pesanan di atas.";

            alert('Terima kasih! Pesanan Anda sedang diproses. Anda akan diarahkan ke WhatsApp untuk konfirmasi pembayaran.');
            window.location.href = "https://wa.me/6288994575261?text=" + message;
        }

        window.onload = function() {
            var myModal = new bootstrap.Modal(document.getElementById('disclaimerModal'));
            myModal.show();
        };
    </script>
</body>

</html>
