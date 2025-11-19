<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Air Panas Wong Pulungan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
        }

        html::-webkit-scrollbar {
            display: none;
        }

        html {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #0d0805;
            min-height: 100vh;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        /* Hide scrollbar */
        body::-webkit-scrollbar {
            display: none;
        }

        body {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Navbar */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 3rem 4rem;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            background: transparent;
        }

        .logo {
            position: absolute;
            left: 4rem;
            height: 80px;
            width: auto;
        }

        .nav-menu {
            display: flex;
            gap: 1.5rem;
            list-style: none;
        }

        .nav-menu a {
            color: #fff;
            text-decoration: none;
            font-weight: 400;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            letter-spacing: 0.5px;
            padding: 0.6rem 1.5rem;
            border-radius: 8px;
        }

        .nav-menu a:hover {
            color: #c2906f;
        }

        .nav-menu a.active {
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 4rem;
            position: relative;
            background: transparent;
            overflow: hidden;
            width: 100vw;
        }

        /* Background Image Container */
        .hero-bg {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100vw;
            height: 60%;
            z-index: 1;
            overflow: hidden;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .hero-bg img {
            width: 100%;
            height: auto;
            object-fit: contain;
            object-position: top center;
            opacity: 1;
        }

        .hero-bg::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 0%, transparent 50%, #0d0805 100%);
            z-index: 2;
        }

        .hero-content {
            max-width: 900px;
            width: 100%;
            position: relative;
            z-index: 2;
            text-align: center;
            padding-top: 3rem;
        }

        .hero-text {
            text-align: center;
        }

        .hero-text h1 {
            font-size: 4rem;
            font-weight: 600;
            margin-bottom: 2rem;
            line-height: 1.15;
            color: #fff;
            animation: fadeInUp 1s ease-out;
        }

        .hero-text p {
            font-size: 1.5rem;
            color: #d1d5db;
            margin-bottom: 3rem;
            font-weight: 300;
            line-height: 1.6;
            animation: fadeInUp 1.2s ease-out;
        }

        .cta-button {
            display: inline-block;
            padding: 1.2rem 3.5rem;
            background: #6b4423;
            color: #fff;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 500;
            font-size: 1.05rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 40px rgba(107, 68, 35, 0.3);
            animation: fadeInUp 1.4s ease-out;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 50px rgba(107, 68, 35, 0.5);
            background: #8b5a3c;
        }

        .hero-image {
            display: none;
        }

        /* Section Transition */
        .section-transition {
            height: 150px;
            background: linear-gradient(to bottom, #0d0805, transparent);
            position: relative;
            z-index: 1;
        }

        /* About Section */
        .about-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5rem 4rem;
            position: relative;
            background: #0d0805;
            overflow: hidden;
            width: 100%;
            max-width: 100%;
        }

        .about-bg {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100vw;
            height: 100%;
            z-index: 0;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-bg img {
            width: 100%;
            height: auto;
            object-fit: content;
            object-position: center center;
            opacity: 1;
        }
        
        .about-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 300px;
            background: linear-gradient(to bottom, #0d0805 0%, #0d0805 30%, transparent 100%);
            z-index: 1;
        }

        .about-box {
            max-width: 1600px;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 24px;
            padding: 5rem 6rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 2;
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
        }

        .about-top {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-bottom: 3rem;
            padding-bottom: 3rem;
            border-bottom: 2px dashed rgba(255, 255, 255, 0.3);
        }

        .about-left h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #fff;
            line-height: 1.4;
            margin: 0;
        }

        .about-right p {
            font-size: 1.2rem;
            color: #d1d5db;
            line-height: 1.8;
            margin: 0;
            text-align: justify;
        }

        .about-bottom {
            text-align: center;
        }

        .about-bottom h3 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 3rem;
        }

        .sdg-icons {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 2rem;
            align-items: center;
            justify-items: center;
        }

        .sdg-icons img {
            width: 100%;
            max-width: 120px;
            height: auto;
            transition: transform 0.3s ease;
        }

        .sdg-icons img:hover {
            transform: scale(1.1);
        }

        /* Fade In Effect untuk blur/fade */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
                filter: blur(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
                filter: blur(0);
            }
        }

        /* Responsive */
        @media (max-width: 968px) {
            .hero-text h1 {
                font-size: 2.5rem;
                line-height: 1.2;
            }

            .hero-text p {
                font-size: 1.1rem;
            }

            .hero-section {
                padding: 0 2rem;
            }

            nav {
                padding: 1.5rem 2rem;
            }

            .logo {
                left: 2rem;
                height: 60px;
            }

            .nav-menu {
                gap: 1rem;
                font-size: 0.95rem;
            }

            .nav-menu a {
                padding: 0.5rem 1rem;
            }

            .about-section {
                padding: 4rem 2rem;
            }

            .about-box {
                padding: 3rem 4rem;
            }

            .about-top {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }

            .about-left h2 {
                font-size: 2rem;
            }

            .about-right p {
                font-size: 1.1rem;
            }

            .about-bottom h3 {
                font-size: 1.5rem;
            }

            .sdg-icons {
                grid-template-columns: repeat(3, 1fr);
                gap: 1.5rem;
            }

            .sdg-icons img {
                max-width: 100px;
            }
        }

        @media (max-width: 640px) {
            .hero-text h1 {
                font-size: 1.8rem;
                line-height: 1.3;
                margin-bottom: 1.5rem;
            }

            .hero-text p {
                font-size: 0.95rem;
                margin-bottom: 2rem;
                line-height: 1.5;
            }

            .cta-button {
                padding: 1rem 2rem;
                font-size: 0.9rem;
            }

            .hero-section {
                padding: 0 1.5rem;
            }

            .hero-content {
                padding-top: 2rem;
            }

            .hero-bg {
                height: 50%;
            }

            nav {
                padding: 1rem 1.5rem;
            }

            .logo {
                left: 1.5rem;
                height: 50px;
            }

            .nav-menu {
                gap: 0.5rem;
                font-size: 0.9rem;
            }

            .nav-menu a {
                padding: 0.5rem 1rem;
                font-size: 0.9rem;
            }

            .about-section {
                padding: 3rem 1.5rem;
            }

            .about-box {
                padding: 2rem 1.5rem;
            }

            .about-top {
                gap: 2rem;
                margin-bottom: 2rem;
                padding-bottom: 2rem;
            }

            .about-left h2 {
                font-size: 1.3rem;
                line-height: 1.4;
            }

            .about-right p {
                font-size: 0.9rem;
                line-height: 1.6;
            }

            .about-bottom h3 {
                font-size: 1.2rem;
                margin-bottom: 2rem;
            }

            .sdg-icons {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }

            .sdg-icons img {
                max-width: 70px;
            }

            .about-section::after {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <img src="{{ asset('images/Group 1.png') }}" alt="Logo Wong Pulungan" class="logo">
        <ul class="nav-menu">
            <li><a href="javascript:void(0)" class="active">Home</a></li>
            <li><a href="javascript:void(0)">Destinasi</a></li>
            <li><a href="javascript:void(0)">UMKM</a></li>
            <li><a href="javascript:void(0)">Galeri</a></li>
            <li><a href="javascript:void(0)">Kontak</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <!-- Background Image Full -->
        <div class="hero-bg">
            <img src="{{ asset('images/Group 4.png') }}" alt="Background Wisata">
        </div>

        <!-- Content -->
        <div class="hero-content">
            <div class="hero-text">
                <h1>Selamat Datang di Wisata Air Panas Wong Pulungan</h1>
                <p>Rileksasi Alami di Jantung Alam di Pasuruan</p>
                <a href="javascript:void(0)" class="cta-button">Jelajahi Sekarang</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="about-bg">
            <img src="{{ asset('images/ChatGPT Image Nov 5, 2025, 10_43_15 AM 1.png') }}" alt="Background">
        </div>
        <div class="about-box">
            <div class="about-top">
                <div class="about-left">
                    <h2>Menuju desa wisata berkelanjutan untuk kesejahteraan dan kemandirian</h2>
                </div>
                <div class="about-right">
                    <p>Wisata Air Panas Wong Pulungan adalah salah satu wisata pemandian air panas yang terkenal di daerah Gempol, tepatnya di Jl. Raya Gempol - Malang Jl. Gondang, Tamanan, Kepulungan, Kec. Gempol, Pasuruan, Jawa Timur. Wisata pemandian ini mempunyai konsep kerajaan Majapahit yang dibangun dengan batu bata. Hal ini dikarenakan wilayah Kepulungan mempunyai sejarah dengan kerajaan Majapahit. Tak hanya berkonsep kerajaan, wisatawan juga akan dimanjakan dengan view Gunung Penanggungan yang dapat terlihat jelas berada di belakang wisata.</p>
                </div>
            </div>
            <div class="about-bottom">
                <h3>Pencapaian Pembangunan Berkelanjutan</h3>
                <div class="sdg-icons">
                    <img src="{{ asset('images/Group 10.png') }}" alt="SDG 10">
                    <img src="{{ asset('images/Group 11.png') }}" alt="SDG 11">
                    <img src="{{ asset('images/Group 12.png') }}" alt="SDG 12">
                    <img src="{{ asset('images/Group 13.png') }}" alt="SDG 13">
                    <img src="{{ asset('images/Group 14.png') }}" alt="SDG 14">
                    <img src="{{ asset('images/Group 15.png') }}" alt="SDG 15">
                </div>
            </div>
        </div>
    </section>
</body>
</html>
