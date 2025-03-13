<!DOCTYPE html>
<html>

<head>
    <title>Kelolainaja</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', 'Roboto', sans-serif;
            ;
        }

        /* hero */
        .hero-section {
            padding: 10px 80px;
            width: 1280px;
            margin: 0 auto;
        }

        .hero-container {
            display: flex;
            flex-direction: row;
            gap: 10px;
            align-items: center;
        }

        .hero-text-left {
            display: flex;
            flex-direction: column;
            gap: 32px;
        }

        .hero-title-body {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .hero-title {
            font-weight: 700;
            font-size: 56px;
            line-height: 124.5%;
            color: #333333;
            max-width: 703px;
        }

        .hero-body-text {
            font-weight: 400;
            font-size: 16px;
            line-height: 27px;
            letter-spacing: 0.32px;
            color: #333333;
            opacity: 0.8;
            max-width: 601px;
        }

        .hero-cta-button {
            background: #FF4654;
            border-radius: 8px;
            width: 173.25px;
            height: 52.5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-cta-button:hover {
            background: #ff2c3c;
        }

        .hero-cta-text {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 700;
            font-size: 16px;
            color: #FFFFFF;
        }

        .hero-illustration {
            width: 648px;
            height: 594px;
            object-fit: contain;
        }

        /* layanan kami */
        .global-style {
            margin: 0;
            padding: 0;
            background-color: #ff5f5f;
            font-family: 'Lato', sans-serif;
        }

        /* Container */
        .layanan-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Header */
        .layanan-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .layanan-header h1 {
            color: #ffffff;
            font-size: 36px;
            font-weight: 700;
            letter-spacing: -0.36px;
            margin: 0;
            margin-bottom: 8px;
        }

        .layanan-header p {
            color: #ffffff;
            font-size: 16px;
            letter-spacing: 0.5px;
            opacity: 0.8;
            margin: 0;
        }

        /* Services Grid */
        .layanan-grid {
            display: flex;
            justify-content: center;
            gap: 24px;
            flex-wrap: wrap;
        }

        /* Service Card */
        .layanan-card {
            width: 296px;
            background: #ffffff;
            border-radius: 16px;
            padding: 16px;
            box-sizing: border-box;
            transition: transform 0.2s, box-shadow 0.2s;
            text-align: center;
        }

        .layanan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Service Image */
        .layanan-img {
            width: 100%;
            height: 180px;
            border-radius: 8px;
            object-fit: cover;
            margin-bottom: 16px;
        }

        /* Service Title */
        .layanan-title {
            font-weight: 700;
            font-size: 16px;
            letter-spacing: 0.5px;
            color: #333333;
            margin: 0;
            margin-bottom: 8px;
        }

        /* Service Description */
        .layanan-desc {
            font-size: 14px;
            letter-spacing: 0.175px;
            color: #636363;
            line-height: 140%;
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .layanan-grid {
                flex-direction: column;
                align-items: center;
            }

            .layanan-header h1 {
                font-size: 28px;
            }

            .layanan-header p {
                font-size: 14px;
            }
        }

        /* -- keunggulan-- */
        .container {
            display: flex;
            padding: 88px 80px;
            gap: 80px;
            width: 1280px;
            margin: 0 auto;
        }

        .illustration {
            width: 608px;
            height: 599px;
        }

        .illustration img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .content {
            display: flex;
            flex-direction: column;
            gap: 40px;
            width: 586px;
        }

        .header {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .header h1 {
            font-size: 36px;
            font-weight: 700;
            letter-spacing: -0.36px;
            color: #121212;
            line-height: 140%;
        }

        .header p {
            font-size: 20px;
            font-weight: 400;
            letter-spacing: 0.15px;
            color: #121212;
            line-height: 140%;
            width: 558px;
        }

        .features {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .feature {
            display: flex;
            padding: 16px 24px;
            gap: 16px;
            background: #fff;
            border-radius: 10px;
            align-items: center;
        }

        .feature img {
            width: 32px;
            height: 32px;
        }

        .feature h3 {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0.15px;
            color: #121212;
            line-height: 140%;
        }

        .feature p {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 0.5px;
            color: #636363;
            line-height: 140%;
        }

        /* footer */
        .partners-container {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }

        .partners-title {
            font-family: Inter, sans-serif;
            font-weight: 600;
            font-size: 20px;
            line-height: 28px;
            color: #121212;
            margin-bottom: 16px;
        }

        .partners-grid {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .partner-box {
            width: 94px;
            height: 82px;
            background-color: #d9d9d9;
            transition: transform 0.2s ease;
            cursor: pointer;
        }

        .partner-box:hover {
            transform: scale(1.05);
        }

        .partner-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 41px 165px 64px;
            min-width: 320px;
            background: #ffffff;
            font-family: Inter, sans-serif;
        }

        .company-info {
            display: flex;
            flex-direction: column;
            gap: 34px;
            max-width: 350px;
            flex: 1;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo-image {
            width: 43px;
            height: 43px;
        }

        .logo-text {
            font-family: Roboto, sans-serif;
            font-weight: 700;
            font-size: 36px;
            color: #ff4654;
            margin-left: 10px;
            line-height: 140%;
        }

        .copyright {
            display: flex;
            flex-direction: column;
            gap: 8px;
            color: #333333;
            font-size: 14px;
            line-height: 20px;
        }

        .social-links {
            display: flex;
            gap: 16px;
        }

        .social-icon {
            width: 32px;
            height: 32px;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .social-icon:hover {
            opacity: 0.8;
        }

        .links-container {
            display: flex;
            gap: 30px;
            flex: 2;
            justify-content: space-between;
        }

        .link-column {
            display: flex;
            flex-direction: column;
            gap: 24px;
            min-width: 160px;
        }

        .column-title {
            font-size: 20px;
            font-weight: 600;
            color: #121212;
            line-height: 28px;
        }

        .link-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-link {
            color: #333333;
            font-size: 14px;
            line-height: 20px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-link:hover {
            color: #ff4654;
        }

        @media (max-width: 768px) {
            .competitor-section {
                min-width: 100%;
                padding: 10px 0;
            }

            .logo-container {
                gap: 12px;
            }

            .logo-box {
                width: 70px;
                height: 60px;
            }

            .footer-container {
                flex-direction: column;
                align-items: center;
            }

            .links-container {
                flex-direction: column;
                align-items: center;
            }
        }

        /*------- Portfolio ----*/
        .container-portfolio {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 1;
        }

        .title-portfolio {
            font-size: 24px;
            font-weight: 700;
            color: #000;
            text-align: center;
            margin-bottom: 20px;
        }

        .row-content-portfolio {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
        }

        .portfolio-card-portfolio {
            width: 180px;
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .portfolio-card-portfolio:hover {
            transform: scale(1.05);
        }

        .portfolio-card-portfolio img {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 12px;
        }

        .video-portfolio {
            width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 12px;
        }

        .views-portfolio,
        .episode-tag-portfolio {
            position: absolute;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 4px 6px;
            border-radius: 4px;
            font-size: 12px;
        }

        .views-portfolio {
            bottom: 10px;
            left: 10px;
        }

        .episode-tag-portfolio {
            top: 10px;
            left: 10px;
        }

        .cta-button-portfolio {
            background: #ff4654;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 12px 24px;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .cta-button-portfolio:hover {
            background: #ff2b3a;
        }
    </style>
</head>

<body style="background-image:url('Image/bg.png');">
    <!-- navbar -->
    <x-navbar></x-navbar>

    <div style="padding-top: 100px;"></div>

    <!-- hero -->
    <div class="hero-section">
        <div class="hero-container">
            <div class="hero-text-left">
                <div class="hero-title-body">
                    <h1 class="hero-title">Bisnis Sukses<br>Kelola Tanpa stress<br>di <span style="color: #FF4654;">Kelolainaja</span></h1>
                    <p class="hero-body-text">Kelolainaja adalah platform digital yang menyediakan layanan pengelolaan media sosial dan desain untuk UMKM dan jasa lainnya.</p>
                </div>
                <button class="hero-cta-button">
                    <span class="hero-cta-text">Find Out More</span>
                </button>
            </div>
            <img src="https://dashboard.codeparrot.ai/api/image/Z8leV6wi-41-yX7A/illus.png" alt="Illustration" class="hero-illustration" style="width: 500px; height: 500px;">
        </div>
    </div>

    <!-- Layanan Kami -->
    <div class="global-style">
        <div class="layanan-container">
            <div class="layanan-header">
                <h1>Layanan Kami</h1>
                <p>Bisnis Sukses Kelola Tanpa Stress</p>
            </div>

            <div class="layanan-grid">
                <!-- Card 1 -->
                <div class="layanan-card">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z8lYbqwi-41-yX68/close-up.png" alt="Social Media Management" class="layanan-img">
                    <h3 class="layanan-title">Manajemen Media Sosial</h3>
                    <p class="layanan-desc">Mengelola konten, jadwal posting, dan analisis performa media sosial untuk meningkatkan interaksi dan brand awareness bisnis Anda.</p>
                </div>

                <!-- Card 2 -->
                <div class="layanan-card">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z8lYbqwi-41-yX68/view-mes.png" alt="Design Service" class="layanan-img">
                    <h3 class="layanan-title">Layanan Desain</h3>
                    <p class="layanan-desc">Menyediakan desain logo, konten media sosial, dan materi promosi untuk membangun identitas visual yang kuat dan menarik.</p>
                </div>

                <!-- Card 3 -->
                <div class="layanan-card">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z8lYbqwi-41-yX68/branding.png" alt="Branding Consultation" class="layanan-img">
                    <h3 class="layanan-title">Konsultasi Branding</h3>
                    <p class="layanan-desc">Membantu UMKM merancang strategi branding yang efektif, mulai dari identitas visual hingga pesan yang konsisten, untuk membangun citra bisnis yang kuat.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- keunggulan -->
    <div class="container">
        <!-- Left illustration -->
        <div class="illustration">
            <img src="https://dashboard.codeparrot.ai/api/image/Z8lEMawi-41-yX6V/illustra.png" alt="Illustration">
        </div>

        <!-- Right content -->
        <div class="content">
            <!-- Header section -->
            <div class="header">
                <h1>Keunggulan Kami</h1>
                <p>Tingkatkan kehadiran bisnis anda dengan layanan unggulan kami</p>
            </div>

            <!-- Features list -->
            <div class="features">
                <!-- One-Stop Solution -->
                <div class="feature">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z8lEMawi-41-yX6V/flight.png" alt="Icon">
                    <div>
                        <h3>One-Stop Solution</h3>
                        <p>Semua layanan pengelolaan digital dan desain di satu tempat.</p>
                    </div>
                </div>

                <!-- Harga Terjangkau -->
                <div class="feature">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z8lEMawi-41-yX6V/flight-2.png" alt="Icon">
                    <div>
                        <h3>Harga Terjangkau</h3>
                        <p>Layanan berkualitas dengan harga yang ramah untuk bisnis kecil.</p>
                    </div>
                </div>

                <!-- Layanan Terpercaya -->
                <div class="feature">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z8lEMawi-41-yX6V/flight-3.png" alt="Icon">
                    <div>
                        <h3>Layanan Terpercaya</h3>
                        <p>Tim kami berpengalaman dalam menangani berbagai bisnis, menjamin hasil yang memuaskan.</p>
                    </div>
                </div>

                <img src="https://dashboard.codeparrot.ai/api/image/Z8lEMawi-41-yX6V/frame-24.png" alt="Frame" style="width: 100%;">
            </div>
        </div>
    </div>

    <!-- Portfolio -->
    <div class="container-portfolio">
        <h1 class="title-portfolio">Pilihan Portofolio yang telah bekerja sama dengan Kami</h1>

        <div class="row-content-portfolio">
            <!-- Baris Pertama -->
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="episode-tag-portfolio">Episode 1</div>
                <div class="views-portfolio">▶ 1.9M</div>
            </div>
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="views-portfolio">▶ 347.3K</div>
            </div>
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="episode-tag-portfolio">Episode 2</div>
                <div class="views-portfolio">▶ 560.1K</div>
            </div>

            <!-- Baris Kedua -->
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="views-portfolio">▶ 347.3K</div>
            </div>
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video4.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="views-portfolio">▶ 347.3K</div>
            </div>
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video5.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="views-portfolio">▶ 347.3K</div>
            </div>
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video6.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="views-portfolio">▶ 347.3K</div>
            </div>
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video7.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="views-portfolio">▶ 347.3K</div>
            </div>
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video8.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="views-portfolio">▶ 347.3K</div>
            </div>
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video9.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="views-portfolio">▶ 347.3K</div>
            </div>
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video10.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="views-portfolio">▶ 347.3K</div>
            </div>
            <div class="portfolio-card-portfolio">
                <video class="video-portfolio" controls playsinline>
                    <source src="video/Video11.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="views-portfolio">▶ 347.3K</div>
            </div>
        </div>

        <button class="cta-button-portfolio">Selengkapnya</button>
    </div>


    <!-- pemesanan -->
    <div style="background-color: #ff4655; padding: 88px 106px; display: flex; justify-content: space-between; align-items: flex-start;">
        <div style="max-width: 586px; margin-right: 50px;">
            <div style="margin-bottom: 40px;">
                <h1 style="color: #fff; font-size: 36px; font-weight: 700; letter-spacing: -0.36px; line-height: 140%; margin: 0 0 8px 0;">Alur Pemesanan</h1>
                <p style="color: #fff; font-size: 20px; font-weight: 400; letter-spacing: 0.15px; line-height: 140%; margin: 0;">Berikut adalah alur pemesanan yang dapat digunakan untuk Kelolain Aja:</p>
            </div>

            <div style="display: flex; flex-direction: column; gap: 24px;">
                <div style="background: #fff; border-radius: 10px; padding: 16px 24px; display: flex; align-items: center; gap: 16px;">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z8lGBLwkNXOiaV-d/flight.png" style="width: 32px; height: 32px;" alt="Step 1">
                    <div>
                        <h3 style="font-size: 20px; font-weight: 700; letter-spacing: 0.15px; line-height: 140%; margin: 0;">Pilih Paket</h3>
                        <p style="color: #636363; font-size: 16px; font-weight: 400; letter-spacing: 0.5px; line-height: 140%; margin: 4px 0 0 0;">Sesuaikan layanan dengan kebutuhan bisnismu.</p>
                    </div>
                </div>

                <div style="background: #fff; border-radius: 10px; padding: 8px 24px; display: flex; align-items: center; gap: 16px;">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z8lGBLwkNXOiaV-d/flight-2.png" style="width: 32px; height: 32px;" alt="Step 2">
                    <div>
                        <h3 style="font-size: 20px; font-weight: 700; letter-spacing: 0.15px; line-height: 140%; margin: 0;">Konsultasi Cepat</h3>
                        <p style="color: #636363; font-size: 16px; font-weight: 400; letter-spacing: 0.5px; line-height: 140%; margin: 4px 0 0 0;">Diskusi bersama tim untuk hasil yang sesuai visi.</p>
                    </div>
                </div>

                <div style="background: #fff; border-radius: 10px; padding: 8px 24px; display: flex; align-items: center; gap: 16px;">
                    <img src="https://dashboard.codeparrot.ai/api/image/Z8lGBLwkNXOiaV-d/flight-3.png" style="width: 32px; height: 32px;" alt="Step 3">
                    <div>
                        <h3 style="font-size: 20px; font-weight: 700; letter-spacing: 0.15px; line-height: 140%; margin: 0;">Pengiriman Hasil</h3>
                        <p style="color: #636363; font-size: 16px; font-weight: 400; letter-spacing: 0.5px; line-height: 140%; margin: 4px 0 0 0;">Dapatkan hasil desain dengan gratis 5 kali revisi</p>
                    </div>
                </div>

                <img src="https://dashboard.codeparrot.ai/api/image/Z8lGBLwkNXOiaV-d/frame-24.png" style="width: 100%; height: auto;" alt="Frame 24">
            </div>
        </div>

        <div style="margin-left: 100px;"> <!-- Tambahkan margin-left agar ilustrasi lebih ke kanan -->
            <img src="https://dashboard.codeparrot.ai/api/image/Z8lGBLwkNXOiaV-d/ilustras.png" style="width: 500px; height: 500px;" alt="Illustration">
        </div>
    </div>

    <!-- Footer -->
    <div class="partners-container">
        <h2 class="partners-title">Mitra Kami</h2>
        <div class="partners-grid">
            <div class="partner-box">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8lWVKwi-41-yX67/rectangl.png" alt="Partner 1">
            </div>
            <div class="partner-box">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8lWVKwi-41-yX67/rectangl-2.png" alt="Partner 2">
            </div>
            <div class="partner-box">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8lWVKwi-41-yX67/rectangl-3.png" alt="Partner 3">
            </div>
            <div class="partner-box">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8lWVKwi-41-yX67/rectangl-4.png" alt="Partner 4">
            </div>
            <div class="partner-box">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8lWVKwi-41-yX67/rectangl-5.png" alt="Partner 5">
            </div>
            <div class="partner-box">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8lWVKwi-41-yX67/rectangl-6.png" alt="Partner 6">
            </div>
            <div class="partner-box">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8lWVKwi-41-yX67/rectangl-7.png" alt="Partner 7">
            </div>
            <div class="partner-box">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8lWVKwi-41-yX67/rectangl-8.png" alt="Partner 8">
            </div>
            <div class="partner-box">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8lWVKwi-41-yX67/rectangl-9.png" alt="Partner 9">
            </div>
            <div class="partner-box">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8lWVKwi-41-yX67/rectangl-10.png" alt="Partner 10">
            </div>
        </div>
    </div>
    <footer class="footer-container">
        <div class="company-info">
            <div class="logo-container">
                <img src="Image/Logo.png" alt="Logo" style="width: 192px; height: 50px;">
            </div>
            <div class="copyright">
                <div>Copyright © 2024 Kelolainaja ltd.</div>
                <div>All rights reserved</div>
            </div>
            <div class="social-links">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8giX6wi-41-yX2K/social-i.png" alt="Social" class="social-icon">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8giX6wi-41-yX2K/social-i-2.png" alt="Social" class="social-icon">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8giX6wi-41-yX2K/social-i-3.png" alt="Social" class="social-icon">
                <img src="https://dashboard.codeparrot.ai/api/image/Z8giX6wi-41-yX2K/social-i-4.png" alt="Social" class="social-icon">
            </div>
        </div>

        <div class="links-container">
            <div class="link-column">
                <div class="column-title">Company</div>
                <div class="link-list">
                    <a href="#" class="footer-link">About us</a>
                    <a href="#" class="footer-link">Blog</a>
                    <a href="#" class="footer-link">Contact us</a>
                    <a href="#" class="footer-link">Pricing</a>
                    <a href="#" class="footer-link">Testimonials</a>
                </div>
            </div>

            <div class="link-column">
                <div class="column-title">Support</div>
                <div class="link-list">
                    <a href="#" class="footer-link">Help center</a>
                    <a href="#" class="footer-link">Terms of service</a>
                    <a href="#" class="footer-link">Legal</a>
                    <a href="#" class="footer-link">Privacy policy</a>
                    <a href="#" class="footer-link">Status</a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        // Add hover effect to nav links
        const navLinks = document.querySelectorAll('nav a');
        navLinks.forEach(link => {
            link.addEventListener('mouseover', () => {
                link.style.color = '#FF4654';
            });
            link.addEventListener('mouseout', () => {
                link.style.color = '#333333';
            });
        });
    </script>
</body>

</html>