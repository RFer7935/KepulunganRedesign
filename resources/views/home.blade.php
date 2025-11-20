<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <meta name="description" content="Wisata Air Panas Wong Pulungan - Rileksasi Alami di Jantung Alam di Pasuruan. Nikmati kolam air panas, destinasi wisata, dan berbagai fasilitas menarik.">
    <meta name="keywords" content="wisata air panas, wong pulungan, pasuruan, kolam air panas, wisata alam, destinasi wisata">
    <meta name="theme-color" content="#0d0805">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Wisata Air Panas Wong Pulungan - Rileksasi Alami di Pasuruan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Lazy loading image optimization */
        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        img[loading="lazy"] {
            opacity: 0;
            transition: opacity 0.3s;
        }

        img[loading="lazy"].loaded {
            opacity: 1;
        }

        html,
        body {
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
            scroll-behavior: smooth;
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
            transition: transform 0.3s ease-in-out;
        }

        nav.navbar-hidden {
            transform: translateY(-100%);
        }

        .logo {
            position: absolute;
            left: 4rem;
            height: 80px;
            width: auto;
        }

        /* Hamburger Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 0.5rem;
            position: absolute;
            right: 2rem;
            z-index: 1001;
            background: transparent;
            border: none;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: #fff;
            margin: 3px 0;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(8px, 8px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
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
            height: 100%;
            object-fit: cover;
            object-position: center center;
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
            padding: 8rem 4rem 5rem 4rem;
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
            height: 100%;
            object-fit: cover;
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

        .about-section::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 150px;
            background: linear-gradient(to top, #0d0805 0%, #0d0805 15%, transparent 100%);
            z-index: 1;
        }

        .about-box {
            max-width: 1400px;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 24px;
            padding: 4rem 5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            position: relative;
            z-index: 2;
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
        }

        .about-top {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3.5rem;
            margin-bottom: 2.5rem;
            padding-bottom: 2.5rem;
            border-bottom: 2px dashed rgba(255, 255, 255, 0.3);
        }

        .about-left h2 {
            font-size: 2.2rem;
            font-weight: 600;
            color: #fff;
            line-height: 1.4;
            margin: 0;
        }

        .about-right p {
            font-size: 1.1rem;
            color: #d1d5db;
            line-height: 1.8;
            margin: 0;
            text-align: justify;
        }

        .about-bottom {
            text-align: center;
        }

        .about-bottom h3 {
            font-size: 1.6rem;
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

        /* Destinasi Section */
        .destinasi-section {
            min-height: 100vh;
            padding: 6rem 4rem;
            position: relative;
            background: #0d0805;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .destinasi-header {
            text-align: center;
            margin-bottom: 5rem;
        }

        .destinasi-header h2 {
            font-size: 3rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 1.5rem;
        }

        .destinasi-header p {
            font-size: 1.2rem;
            color: #d1d5db;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .destinasi-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.5rem;
            max-width: 1400px;
            width: 100%;
        }

        .destinasi-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            min-height: 300px;
            display: flex;
            flex-direction: column;
            background: #1a1410;
        }

        .destinasi-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(107, 68, 35, 0.4);
        }

        .destinasi-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            transition: transform 0.3s ease;
            flex-shrink: 0;
        }

        .destinasi-card:hover img {
            transform: scale(1.05);
        }

        .destinasi-overlay {
            position: relative;
            background: #1a1410;
            padding: 1.5rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 140px;
        }

        .destinasi-card:hover .destinasi-overlay {
            transform: none;
        }

        .destinasi-overlay-content {
            flex: 1;
        }

        .destinasi-overlay h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #fff;
            margin: 0 0 0.5rem 0;
        }

        .destinasi-overlay p {
            font-size: 0.9rem;
            color: #d1d5db;
            margin: 0 0 1rem 0;
            line-height: 1.5;
            opacity: 1;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .btn-detail {
            display: inline-block;
            color: #c2906f;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            border: none;
            background: none;
            padding: 0;
            transition: all 0.3s ease;
            position: relative;
        }

        .btn-detail:hover {
            color: #d4a574;
            transform: translateX(3px);
        }

        .btn-detail::after {
            content: ' →';
            transition: transform 0.3s ease;
            display: inline-block;
        }

        .btn-detail:hover::after {
            transform: translateX(3px);
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
        }

        .modal-content {
            background: #1a1410;
            border-radius: 20px;
            max-width: 700px;
            width: 90%;
            max-height: 90vh;
            overflow: hidden;
            position: relative;
            animation: slideUp 0.3s ease;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .modal-header {
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        .modal-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-body {
            padding: 2rem;
            color: #fff;
            max-height: calc(90vh - 300px);
            overflow-y: auto;
        }

        .modal-body h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: #c2906f;
        }

        .modal-body p {
            font-size: 1rem;
            line-height: 1.8;
            color: #d1d5db;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Testimonial Section */
        .testimonial-section {
            background: #0d0805;
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .testimonial-container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .testimonial-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .testimonial-header h2 {
            font-size: 2.3rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 0.6rem;
        }

        .testimonial-header p {
            font-size: 1rem;
            color: #d1d5db;
            font-weight: 300;
        }

        .testimonial-slider-wrapper {
            position: relative;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .testimonial-slider {
            display: flex;
            gap: 0;
            overflow-x: hidden;
            scroll-behavior: smooth;
            scrollbar-width: none;
            -ms-overflow-style: none;
            width: 500%;
        }

        .testimonial-slider::-webkit-scrollbar {
            display: none;
        }

        .testimonial-slide {
            min-width: 100%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: auto auto;
            gap: 1.5rem;
            box-sizing: border-box;
            padding: 1rem;
            flex-shrink: 0;
            max-width: 100px;
            margin: 0 auto;
        }

        .testimonial-card {
            background-color: #1a1410;
            border-radius: 24px;
            padding: 2rem;
            border: none;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 2rem;
            min-height: 250px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .testimonial-content {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .testimonial-text {
            font-size: 0.95rem;
            color: #e5e5e5;
            line-height: 1.6;
            font-weight: 400;
            font-style: normal;
            margin: 0;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 8px;
            background-color: rgba(58, 42, 35, 0.85);
            padding: 6px 16px 6px 6px;
            /* smaller vertical padding to fit 20px avatar */
            border-radius: 40px;
            width: fit-content;
            border: none;
            position: static;
            margin-top: auto;
        }

        .author-image {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #fff;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            flex-shrink: 0;
        }

        .author-image::before {
            content: '👤';
        }

        .author-info {
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 0.2rem;
        }

        .author-info h4 {
            font-size: 0.7rem;
            color: #ffffff;
            font-weight: 600;
            margin: 0;
        }

        .author-info p {
            display: block;
            font-size: 0.7rem;
            color: rgba(255, 255, 255, 0.75);
            font-weight: 400;
            margin: 2px 0 0;
            opacity: 0.95;
        }

        .slider-btn {
            background: rgba(107, 68, 35, 0.8);
            color: #fff;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            font-size: 2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            z-index: 10;
            line-height: 1;
            padding: 0;
        }

        .prev-btn {
            padding-right: 3px;
        }

        .next-btn {
            padding-left: 3px;
        }

        .slider-btn:hover {
            background: #6b4423;
            transform: scale(1.1);
        }

        .slider-btn:active {
            transform: scale(0.95);
        }

        .slider-dots {
            display: flex;
            justify-content: center;
            gap: 0.8rem;
            margin-top: 3rem;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .dot.active {
            background: #6b4423;
            width: 40px;
            border-radius: 6px;
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

        /* Contact Section */
        .contact-section {
            background: #0d0805;
            padding: 8rem 0;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 600px;
        }

        .contact-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 150px;
            background: linear-gradient(to bottom, #0d0805 0%, transparent 100%);
            z-index: 1;
        }

        .contact-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 150px;
            background: linear-gradient(to top, #0d0805 0%, transparent 100%);
            z-index: 1;
        }

        .contact-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 1;
            z-index: 0;
        }

        .contact-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 2;
        }

        .contact-box {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 32px;
            padding: 4rem 3rem;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(212, 163, 115, 0.2);
        }

        .contact-box h2 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 1.5rem;
            line-height: 1.3;
            letter-spacing: 0.02em;
        }

        .contact-box p {
            font-size: 1.15rem;
            color: #d1d5db;
            line-height: 1.8;
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-btn {
            display: inline-block;
            background: linear-gradient(135deg, #d4a373 0%, #b8865f 100%);
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
            padding: 1.2rem 3rem;
            border-radius: 50px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 24px rgba(212, 163, 115, 0.3);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(212, 163, 115, 0.5);
            background: linear-gradient(135deg, #e0b589 0%, #c4926b 100%);
        }

        .cta-btn:active {
            transform: translateY(-1px);
        }

        /* News Section */
        .news-section {
            background: #0d0805;
            padding: 6rem 0;
            position: relative;
        }

        .news-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .news-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .news-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 0.8rem;
        }

        .news-header p {
            font-size: 1.1rem;
            color: #d1d5db;
            font-weight: 300;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2.5rem;
        }

        /* Pengumuman Grid - Single Column */
        #pengumuman-content .news-grid {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .news-card {
            background: rgba(26, 20, 16, 0.8);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(212, 163, 115, 0.1);
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            border-color: rgba(212, 163, 115, 0.3);
        }

        .news-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .news-card:hover .news-image {
            transform: scale(1.05);
        }

        .news-content {
            padding: 1.8rem;
        }

        .news-date {
            font-size: 0.9rem;
            color: #d4a373;
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .news-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 0.8rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-excerpt {
            font-size: 0.95rem;
            color: #d1d5db;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #d4a373;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .news-btn:hover {
            color: #e0b589;
            gap: 0.8rem;
        }

        /* Pengumuman Card (Horizontal Layout - Info Left, Image Right) */
        .announcement-card {
            background: rgba(26, 20, 16, 0.8);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: 1px solid rgba(212, 163, 115, 0.1);
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            height: 320px;
        }

        .announcement-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            border-color: rgba(212, 163, 115, 0.3);
        }

        .announcement-content {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            background: rgba(13, 8, 5, 0.5);
        }

        .announcement-content>div:first-child {
            margin-bottom: 1rem;
        }

        .announcement-content .news-date {
            font-size: 0.85rem;
            color: #d4a373;
            margin-bottom: 0.8rem;
            font-weight: 500;
        }

        .announcement-content .news-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 0.8rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .announcement-content .news-excerpt {
            font-size: 0.95rem;
            color: #d1d5db;
            line-height: 1.6;
            margin-bottom: 0.8rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .announcement-content .news-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: #d4a373;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            align-self: flex-start;
        }

        .announcement-content .news-btn:hover {
            color: #e0b589;
            gap: 0.8rem;
        }

        .announcement-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .announcement-card:hover .announcement-image {
            transform: scale(1.05);
        }

        /* News Tabs */
        .news-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
        }

        .tab-btn {
            padding: 0.8rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            color: #d1d5db;
            background: rgba(26, 20, 16, 0.5);
            border: 1px solid rgba(212, 163, 115, 0.2);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-btn:hover {
            background: rgba(26, 20, 16, 0.8);
            border-color: rgba(212, 163, 115, 0.4);
        }

        .tab-btn.active {
            background: linear-gradient(135deg, #d4a373 0%, #b8865f 100%);
            color: #ffffff;
            border-color: #d4a373;
        }

        .news-content-wrapper {
            display: none;
        }

        .news-content-wrapper.active {
            display: block;
        }

        /* News Modal (Berita) */
        .news-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(5px);
        }

        .news-modal-content {
            background: #1a1410;
            margin: 3% auto;
            width: 90%;
            max-width: 800px;
            max-height: 85vh;
            border-radius: 24px;
            overflow: hidden;
            animation: slideUp 0.3s ease;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
        }

        .news-modal-header {
            position: relative;
            height: 400px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .news-modal-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .news-modal-body {
            padding: 2.5rem;
            overflow-y: auto;
            max-height: calc(85vh - 400px);
        }

        .news-modal-body::-webkit-scrollbar {
            width: 8px;
        }

        .news-modal-body::-webkit-scrollbar-track {
            background: rgba(212, 163, 115, 0.1);
            border-radius: 4px;
        }

        .news-modal-body::-webkit-scrollbar-thumb {
            background: #d4a373;
            border-radius: 4px;
        }

        .news-modal-body::-webkit-scrollbar-thumb:hover {
            background: #e0b589;
        }

        .news-modal-date {
            font-size: 0.9rem;
            color: #d4a373;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .news-modal-body h3 {
            font-size: 2rem;
            color: #ffffff;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .news-modal-body p {
            font-size: 1rem;
            line-height: 1.8;
            color: #d1d5db;
            margin-bottom: 1rem;
        }

        /* Pengumuman Modal (Same Layout as News Modal) */
        .announcement-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.85);
            backdrop-filter: blur(5px);
        }

        .announcement-modal-content {
            background: #1a1410;
            margin: 3% auto;
            width: 90%;
            max-width: 800px;
            max-height: 85vh;
            border-radius: 24px;
            overflow: hidden;
            animation: slideUp 0.3s ease;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
        }

        .announcement-modal-header {
            position: relative;
            height: 400px;
            overflow: hidden;
            flex-shrink: 0;
        }

        .announcement-modal-header img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .announcement-modal-body {
            padding: 2.5rem;
            overflow-y: auto;
            max-height: calc(85vh - 400px);
        }

        .announcement-modal-body::-webkit-scrollbar {
            width: 8px;
        }

        .announcement-modal-body::-webkit-scrollbar-track {
            background: rgba(212, 163, 115, 0.1);
            border-radius: 4px;
        }

        .announcement-modal-body::-webkit-scrollbar-thumb {
            background: #d4a373;
            border-radius: 4px;
        }

        .announcement-modal-body::-webkit-scrollbar-thumb:hover {
            background: #e0b589;
        }

        .announcement-modal-date {
            font-size: 0.9rem;
            color: #d4a373;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .announcement-modal-body h3 {
            font-size: 2rem;
            color: #ffffff;
            margin-bottom: 1.5rem;
            line-height: 1.3;
        }

        .announcement-meta {
            margin-bottom: 1.5rem;
        }

        .announcement-author {
            font-size: 0.95rem;
            color: #d4a373;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
        }

        .announcement-modal-body p {
            font-size: 1rem;
            line-height: 1.8;
            color: #d1d5db;
            margin-bottom: 1rem;
        }

        .modal-close {
            position: absolute;
            top: 1.5rem;
            right: 1.5rem;
            color: #ffffff;
            font-size: 2rem;
            font-weight: bold;
            cursor: pointer;
            z-index: 10;
            width: 40px;
            height: 40px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .modal-close:hover {
            background: rgba(212, 163, 115, 0.8);
            transform: rotate(90deg);
        }

        /* Footer */
        .footer {
            background: #0d0805;
            padding: 4rem 0 2rem;
            border-top: 1px solid rgba(212, 163, 115, 0.1);
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-brand {
            display: flex;
            flex-direction: column;
        }

        .footer-logo {
            height: 120px;
            width: 240px;
            margin-bottom: 0.5rem;
        }

        .footer-title {
            color: #ffffff;
            font-size: 1.3rem;
            font-weight: 600;
            margin: 0 0 0.5rem 0;
        }

        .footer-description {
            color: #d1d5db;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        .footer-column h3 {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .footer-links a {
            color: #d1d5db;
            font-size: 0.95rem;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #d4a373;
        }

        .footer-contact {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .footer-contact-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            color: #d1d5db;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .footer-contact-icon {
            width: 20px;
            height: 20px;
            object-fit: contain;
            flex-shrink: 0;
        }

        .footer-social {
            display: flex;
            gap: 1rem;
            margin-top: 0.5rem;
        }

        /* Center align Ikuti Kami section */
        .footer-column.footer-social-column h3 {
            text-align: center;
        }

        .footer-column.footer-social-column .footer-social {
            justify-content: center;
        }

        .footer-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(212, 163, 115, 0.1);
            border-radius: 50%;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-social a:hover {
            background: #d4a373;
            transform: translateY(-3px);
        }

        .footer-social img {
            width: 20px;
            height: 20px;
            object-fit: contain;
        }

        .footer-bottom {
            border-top: 1px solid rgba(212, 163, 115, 0.1);
            padding-top: 2rem;
            text-align: center;
        }

        .footer-copyright {
            color: #9ca3af;
            font-size: 0.9rem;
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

            .destinasi-section {
                padding: 5rem 2rem;
            }

            .destinasi-header h2 {
                font-size: 2.5rem;
            }

            .destinasi-grid {
                gap: 1.5rem;
                grid-template-columns: repeat(2, 1fr);
            }

            .news-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .announcement-card {
                grid-template-columns: 1fr;
                height: auto;
            }

            .announcement-image {
                height: 220px;
                order: -1;
            }

            .announcement-content {
                padding: 1.5rem;
            }

            .footer-content {
                grid-template-columns: 1fr 1fr;
                gap: 2rem;
            }

            .footer-brand {
                grid-column: 1 / -1;
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
                height: 35%;
                align-items: center;
            }

            .hero-bg img {
                object-position: center center;
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

            .destinasi-section {
                padding: 4rem 1.5rem;
            }

            .destinasi-header h2 {
                font-size: 2rem;
            }

            .destinasi-header p {
                font-size: 1rem;
            }

            .destinasi-grid {
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                gap: 1.5rem;
            }

            .destinasi-card {
                height: 300px;
            }

            .destinasi-card:nth-child(1),
            .destinasi-card:nth-child(3) {
                grid-row: span 1;
                height: 300px;
            }

            .destinasi-overlay h3 {
                font-size: 1.3rem;
            }

            .destinasi-overlay p {
                display: none;
            }

            .destinasi-overlay {
                min-height: 80px;
            }

            .modal-content {
                width: 95%;
            }

            .modal-header {
                height: 200px;
            }

            .modal-body {
                padding: 1.5rem;
            }

            .modal-body h3 {
                font-size: 1.5rem;
            }

            .testimonial-container {
                padding: 0 1.5rem;
            }

            .testimonial-header h2 {
                font-size: 2rem;
            }

            .testimonial-header p {
                font-size: 1rem;
            }

            .testimonial-slide {
                grid-template-columns: 1fr;
                grid-template-rows: auto;
                gap: 1.5rem;
            }

            .testimonial-card {
                padding: 2rem;
            }

            .testimonial-text {
                font-size: 0.95rem;
            }

            .author-image {
                width: 30px;
                height: 30px;
                font-size: 0.85rem;
            }

            .slider-btn {
                width: 40px;
                height: 40px;
                font-size: 1.5rem;
            }

            .contact-section {
                padding: 5rem 0;
                min-height: 500px;
            }

            .contact-container {
                padding: 0 1.5rem;
            }

            .contact-box {
                padding: 2.5rem 2rem;
                border-radius: 24px;
            }

            .contact-box h2 {
                font-size: 1.8rem;
            }

            .contact-box p {
                font-size: 1rem;
                margin-bottom: 2rem;
            }

            .cta-btn {
                font-size: 1rem;
                padding: 1rem 2.5rem;
            }

            .news-header h2 {
                font-size: 2rem;
            }

            .news-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .news-image {
                height: 220px;
            }

            .news-content {
                padding: 1.5rem;
            }

            .announcement-card {
                grid-template-columns: 1fr;
                height: auto;
            }

            .announcement-image {
                height: 200px;
                order: -1;
            }

            .announcement-content {
                padding: 1.5rem;
            }

            .news-modal-content {
                width: 95%;
                margin: 10% auto;
            }

            .news-modal-header {
                height: 250px;
            }

            .news-modal-body {
                padding: 1.5rem;
            }

            .news-modal-body h3 {
                font-size: 1.5rem;
            }

            .announcement-modal-body {
                grid-template-columns: 1fr;
            }

            .announcement-info {
                padding: 2rem;
            }

            .announcement-info h3 {
                font-size: 1.5rem;
            }

            .announcement-image {
                min-height: 300px;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .footer-brand {
                grid-column: 1;
                text-align: center;
                margin-bottom: 1.5rem;
                padding-bottom: 1.5rem;
                border-bottom: 1px solid rgba(212, 163, 115, 0.2);
            }

            .footer-column {
                margin-bottom: 1.5rem;
                padding-bottom: 1.5rem;
                border-bottom: 1px solid rgba(212, 163, 115, 0.1);
            }

            .footer-column:last-child {
                border-bottom: none;
                margin-bottom: 0;
                padding-bottom: 0;
            }

            .footer-logo {
                margin: 0 auto 0.5rem;
            }

            .footer-title {
                text-align: center;
            }

            .footer-description {
                text-align: center;
            }

            .footer-social {
                justify-content: center;
            }

            .footer-links li,
            .footer-contact li {
                font-size: 0.95rem;
            }
        }

        /* Tablet landscape optimization */
        @media (min-width: 641px) and (max-width: 968px) {
            .testimonial-slide {
                grid-template-columns: repeat(2, 1fr);
            }

            .destinasi-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Mobile menu optimization */
        @media (max-width: 768px) {
            nav {
                padding: 1rem 2rem;
                justify-content: space-between;
            }

            .logo {
                position: static;
                height: 50px;
                margin: 0;
            }

            .hamburger {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                top: 70px;
                right: -100%;
                width: 280px;
                height: calc(100vh - 70px);
                background: rgba(13, 8, 5, 0.98);
                backdrop-filter: blur(10px);
                flex-direction: column;
                padding: 2rem;
                gap: 0;
                transition: right 0.3s ease-in-out;
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.3);
                overflow-y: auto;
            }

            .nav-menu.active {
                right: 0;
            }

            .nav-menu li {
                width: 100%;
                margin: 0.5rem 0;
            }

            .nav-menu a {
                font-size: 1.1rem;
                padding: 1rem;
                display: block;
                width: 100%;
                text-align: left;
                border-radius: 8px;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .nav-menu a:hover {
                background: rgba(255, 255, 255, 0.1);
            }

            .nav-menu a.active {
                background: rgba(212, 163, 115, 0.2);
                border-left: 4px solid #d4a373;
            }
        }

        /* Very small devices */
        @media (max-width: 375px) {
            .hero-text h1 {
                font-size: 1.5rem;
            }

            .about-left h2 {
                font-size: 1.2rem;
            }

            .destinasi-header h2,
            .testimonial-header h2,
            .news-header h2 {
                font-size: 1.5rem;
            }

            .contact-box h2 {
                font-size: 1.5rem;
            }

            .slider-btn {
                width: 35px;
                height: 35px;
                font-size: 1.3rem;
            }

            .nav-menu a {
                font-size: 0.75rem;
                padding: 0.3rem 0.6rem;
            }

            .footer-logo {
                height: 80px;
            }
        }

        /* Landscape mobile optimization */
        @media (max-height: 600px) and (orientation: landscape) {
            .hero-section {
                min-height: auto;
                padding: 8rem 2rem 4rem;
            }

            .hero-text h1 {
                font-size: 2rem;
                margin-bottom: 1rem;
            }

            .hero-text p {
                margin-bottom: 1.5rem;
            }

            nav {
                padding: 1rem 2rem;
            }
        }

        /* Touch device optimizations */
        @media (hover: none) and (pointer: coarse) {
            .nav-menu a,
            .cta-button,
            .cta-btn,
            .btn-detail,
            .slider-btn {
                min-height: 44px;
                min-width: 44px;
            }

            .destinasi-card {
                cursor: default;
            }

            .destinasi-overlay {
                opacity: 1;
                background: linear-gradient(to bottom,
                        transparent 0%,
                        rgba(0, 0, 0, 0.5) 40%,
                        rgba(0, 0, 0, 0.9) 100%);
            }

            .news-card,
            .announcement-card {
                transition: transform 0.2s;
            }

            .news-card:active,
            .announcement-card:active {
                transform: scale(0.98);
            }
        }

        /* High resolution displays */
        @media (min-width: 1920px) {
            .hero-container,
            .about-container,
            .testimonial-container,
            .destinasi-container,
            .news-container {
                max-width: 1600px;
            }

            .hero-text h1 {
                font-size: 4.5rem;
            }

            .hero-text p {
                font-size: 1.5rem;
            }
        }

        /* Print styles */
        @media print {
            nav,
            .slider-btn,
            .btn-detail,
            .cta-button,
            .cta-btn,
            .modal,
            .footer-social {
                display: none !important;
            }

            body {
                background: white;
                color: black;
            }

            .hero-section,
            .about-section,
            .destinasi-section,
            .testimonial-section,
            .news-section {
                page-break-inside: avoid;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav>
        <img src="{{ asset('/images/logo.png') }}" alt="Logo Wong Pulungan" class="logo">
        <button class="hamburger" id="hamburger" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="nav-menu" id="navMenu">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#destinasi">Destinasi</a></li>
            <li><a href="javascript:void(0)">UMKM</a></li>
            <li><a href="javascript:void(0)">Galeri</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <!-- Background Image Full -->
        <div class="hero-bg">
            <img src="{{ asset('/images/hero-bg.png') }}" alt="Background Wisata">
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
            <img src="{{ asset('/images/about-bg.png') }}" alt="Background">
        </div>
        <div class="about-box">
            <div class="about-top">
                <div class="about-left">
                    <h2>Menuju desa wisata berkelanjutan untuk kesejahteraan dan kemandirian</h2>
                </div>
                <div class="about-right">
                    <p>Wisata Air Panas Wong Pulungan adalah salah satu wisata pemandian air panas yang terkenal di
                        daerah Gempol, tepatnya di Jl. Raya Gempol - Malang Jl. Gondang, Tamanan, Kepulungan, Kec.
                        Gempol, Pasuruan, Jawa Timur. Wisata pemandian ini mempunyai konsep kerajaan Majapahit yang
                        dibangun dengan batu bata. Hal ini dikarenakan wilayah Kepulungan mempunyai sejarah dengan
                        kerajaan Majapahit. Tak hanya berkonsep kerajaan, wisatawan juga akan dimanjakan dengan view
                        Gunung Penanggungan yang dapat terlihat jelas berada di belakang wisata.</p>
                </div>
            </div>
            <div class="about-bottom">
                <h3>Pencapaian Pembangunan Berkelanjutan</h3>
                <div class="sdg-icons">
                    <img src="{{ asset('/images/no1-no-poverty.png') }}" alt="SDG 1">
                    <img src="{{ asset('/images/no2-zerohunger.png') }}" alt="SDG 2">
                    <img src="{{ asset('/images/no4-quality-education.png') }}" alt="SDG 4">
                    <img src="{{ asset('/images/no5-gender-equality.png') }}" alt="SDG 5">
                    <img src="{{ asset('/images/no8-decent-work.png') }}" alt="SDG 8">
                    <img src="{{ asset('/images/no17-partnertship.png') }}" alt="SDG 17">
                </div>
            </div>
        </div>
    </section>

    <!-- Destinasi Section -->
    <section class="destinasi-section" id="destinasi">
        <header class="destinasi-header">
            <h2>Destinasi Wisata</h2>
            <p>Jelajahi berbagai destinasi menarik di Wisata Air Panas Wong Pulungan</p>
        </header>
        <div class="destinasi-grid">
            <!-- Kolam Anak -->
            <article class="destinasi-card">
                <img src="{{ asset('/images/kolam-anakanak.png') }}"
                    alt="Kolam Anak - Area kolam yang aman untuk anak-anak di Wisata Air Panas Wong Pulungan">
                <div class="destinasi-overlay">
                    <h3>Kolam Anak</h3>
                    <p>Area kolam yang aman dan nyaman untuk anak-anak bermain air</p>
                    <button class="btn-detail"
                        onclick="openModal('Kolam Anak', 'Area kolam yang aman dan nyaman untuk anak-anak bermain air. Dilengkapi dengan fasilitas pengawasan yang ketat dan kedalaman air yang sesuai untuk anak-anak. Kolam ini dirancang khusus dengan berbagai permainan air yang menyenangkan dan edukatif. Area ini juga dilengkapi dengan tempat duduk untuk orang tua yang ingin mengawasi anak-anak mereka bermain.', '/images/kolam-anakanak.png')">Lihat
                        Selengkapnya</button>
                </div>
            </article>

            <!-- Gerai UMKM -->
            <article class="destinasi-card">
                <img src="{{ asset('/images/umkm.png') }}"
                    alt="Gerai UMKM - Pusat oleh-oleh dan produk lokal di Wisata Air Panas Wong Pulungan">
                <div class="destinasi-overlay">
                    <h3>Gerai UMKM</h3>
                    <p>Berbagai produk UMKM lokal dan oleh-oleh khas daerah</p>
                    <button class="btn-detail"
                        onclick="openModal('Gerai UMKM', 'Berbagai produk UMKM lokal dan oleh-oleh khas daerah tersedia di sini. Temukan kerajinan tangan, makanan tradisional, dan berbagai produk unik dari pengrajin lokal. Gerai ini menjadi pusat ekonomi kreatif masyarakat sekitar dan menawarkan harga yang terjangkau. Pengunjung dapat membeli berbagai cinderamata autentik sambil mendukung ekonomi lokal.', '/images/umkm.png')">Lihat
                        Selengkapnya</button>
                </div>
            </article>

            <!-- Pendopo Arcopodo -->
            <article class="destinasi-card">
                <img src="{{ asset('/images/pendopo-arcopodo.png') }}"
                    alt="Pendopo Arcopodo - Pendopo tradisional Jawa di Wisata Air Panas Wong Pulungan">
                <div class="destinasi-overlay">
                    <h3>Pendopo Arcopodo</h3>
                    <p>Tempat berkumpul dan bersantai dengan arsitektur tradisional Jawa</p>
                    <button class="btn-detail"
                        onclick="openModal('Pendopo Arcopodo', 'Tempat berkumpul dan bersantai dengan arsitektur tradisional Jawa yang autentik. Pendopo ini dibangun dengan gaya arsitektur Jawa klasik dan menjadi ikon wisata. Tempat yang sempurna untuk acara keluarga, pertemuan, atau sekadar bersantai sambil menikmati suasana tradisional. Pendopo ini juga sering digunakan untuk pertunjukan seni dan budaya lokal.', '/images/pendopo-arcopodo.png')">Lihat
                        Selengkapnya</button>
                </div>
            </article>

            <!-- Taman Kelinci -->
            <article class="destinasi-card">
                <img src="{{ asset('/images/taman-kelinci.png') }}"
                    alt="Taman Kelinci - Taman hijau asri di Wisata Air Panas Wong Pulungan">
                <div class="destinasi-overlay">
                    <h3>Taman Kelinci</h3>
                    <p>Taman hijau yang asri untuk bersantai dan berfoto</p>
                    <button class="btn-detail"
                        onclick="openModal('Taman Kelinci', 'Taman hijau yang asri untuk bersantai dan berfoto dengan latar belakang alam yang indah. Dilengkapi dengan berbagai tanaman hias dan spot foto Instagram-able. Taman ini menawarkan suasana yang tenang dan sejuk, cocok untuk relaksasi atau piknik keluarga. Area ini juga memiliki gazebo dan bangku taman yang nyaman untuk beristirahat.', '/images/taman-kelinci.png')">Lihat
                        Selengkapnya</button>
                </div>
            </article>

            <!-- Terapi Ikan -->
            <article class="destinasi-card">
                <img src="{{ asset('/images/terapi-ikan.png') }}"
                    alt="Terapi Ikan - Fasilitas terapi ikan alami di Wisata Air Panas Wong Pulungan">
                <div class="destinasi-overlay">
                    <h3>Terapi Ikan</h3>
                    <p>Nikmati sensasi relaksasi dengan terapi ikan alami</p>
                    <button class="btn-detail"
                        onclick="openModal('Terapi Ikan', 'Nikmati sensasi relaksasi dengan terapi ikan alami yang menyegarkan dan menyehatkan. Ribuan ikan kecil akan membantu mengangkat sel kulit mati dari kaki Anda secara alami. Terapi ini tidak hanya menyenangkan tetapi juga memberikan manfaat kesehatan untuk kulit. Area terapi dilengkapi dengan tempat duduk yang nyaman dan air yang selalu terjaga kebersihannya.', '/images/terapi-ikan.png')">Lihat
                        Selengkapnya</button>
                </div>
            </article>

            <!-- Kolam Dewasa -->
            <article class="destinasi-card">
                <img src="{{ asset('/images/kolam-dewasa.png') }}"
                    alt="Kolam Dewasa - Kolam air panas untuk dewasa di Wisata Air Panas Wong Pulungan">
                <div class="destinasi-overlay">
                    <h3>Kolam Dewasa</h3>
                    <p>Kolam air panas dengan berbagai fasilitas untuk dewasa</p>
                    <button class="btn-detail"
                        onclick="openModal('Kolam Dewasa', 'Kolam air panas dengan berbagai fasilitas untuk dewasa yang lengkap dan nyaman. Dilengkapi dengan berbagai tingkat suhu air panas yang dapat dipilih sesuai kebutuhan. Kolam ini memiliki area yang luas dan dapat menampung banyak pengunjung. Fasilitas pendukung seperti kamar mandi, loker, dan area istirahat tersedia untuk kenyamanan Anda.', '/images/kolam-dewasa.png')">Lihat
                        Selengkapnya</button>
                </div>
            </article>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="testimonial-container">
            <header class="testimonial-header">
                <h2>Apa Kata Mereka tentang Wisata Air Panas Wong Pulungan?</h2>
                <p>Pengalaman nyata dari para pengunjung yang telah menikmati Wisata Air Panas Wong Pulungan</p>
            </header>

            <div class="testimonial-slider-wrapper">
                <button class="slider-btn prev-btn" onclick="slideTestimonial(-1)">‹</button>
                <div class="testimonial-slider" id="testimonialSlider">
                    <!-- Slide 1 -->
                    <div class="testimonial-slide">
                        <article class="testimonial-card">
                            <div class="testimonial-content">
                                <p class="testimonial-text">"Tempatnya sangat nyaman dan bersih. Air panasnya sangat
                                    menenangkan, cocok untuk refreshing bersama keluarga. Pelayanannya juga ramah!"</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image"></div>
                                <div class="author-info">
                                    <h4>Siti Aminah</h4>
                                    <p class="author-role">Ibu Rumah Tangga</p>
                                </div>
                            </div>
                        </article>

                        <article class="testimonial-card">
                            <div class="testimonial-content">
                                <p class="testimonial-text">"Pengalaman yang luar biasa! Pemandangan Gunung Penanggungan
                                    dari sini sangat indah. Anak-anak juga senang bermain di kolam anak yang aman."</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image"></div>
                                <div class="author-info">
                                    <h4>Budi Santoso</h4>
                                    <p class="author-role">Guru SD</p>
                                </div>
                            </div>
                        </article>

                        <article class="testimonial-card">
                            <div class="testimonial-content">
                                <p class="testimonial-text">"Tempat wisata yang recommended! Harga tiketnya terjangkau,
                                    fasilitasnya lengkap, dan nuansa Majapahit-nya bikin pengalaman jadi lebih
                                    berkesan."</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image"></div>
                                <div class="author-info">
                                    <h4>Dewi Kartika</h4>
                                    <p class="author-role">Mahasiswa</p>
                                </div>
                            </div>
                        </article>

                        <article class="testimonial-card">
                            <div class="testimonial-content">
                                <p class="testimonial-text">"Sangat puas dengan kunjungan saya! Terapi ikannya
                                    menyenangkan dan air panasnya benar-benar membantu menghilangkan penat. Pasti akan
                                    kembali lagi!"</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image"></div>
                                <div class="author-info">
                                    <h4>Ahmad Fauzi</h4>
                                    <p class="author-role">Pengusaha</p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Slide 2 -->
                    <div class="testimonial-slide">
                        <article class="testimonial-card">
                            <div class="testimonial-content">
                                <p class="testimonial-text">"Destinasi wisata yang sempurna untuk liburan keluarga. Area
                                    pendopo sangat cocok untuk berkumpul, dan produk UMKM lokal juga banyak pilihan!"
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image"></div>
                                <div class="author-info">
                                    <h4>Rina Kusuma</h4>
                                    <p class="author-role">Pegawai Negeri</p>
                                </div>
                            </div>
                        </article>

                        <article class="testimonial-card">
                            <div class="testimonial-content">
                                <p class="testimonial-text">"Suasananya sangat tenang dan menyegarkan. Cocok untuk
                                    melepas penat dari rutinitas. Kolam air panasnya bersih dan terawat dengan baik."
                                </p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image"></div>
                                <div class="author-info">
                                    <h4>Imam Syafi'i</h4>
                                    <p class="author-role">Karyawan Swasta</p>
                                </div>
                            </div>
                        </article>

                        <article class="testimonial-card">
                            <div class="testimonial-content">
                                <p class="testimonial-text">"Tempatnya instagramable banget! Banyak spot foto yang bagus
                                    dan pemandangannya indah. Recommended buat yang suka foto-foto!"</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image"></div>
                                <div class="author-info">
                                    <h4>Putri Maharani</h4>
                                    <p class="author-role">Fotografer</p>
                                </div>
                            </div>
                        </article>

                        <article class="testimonial-card">
                            <div class="testimonial-content">
                                <p class="testimonial-text">"Pelayanannya memuaskan dan fasilitas lengkap. Parkir luas,
                                    warung makan tersedia, dan harganya masih terjangkau untuk semua kalangan."</p>
                            </div>
                            <div class="testimonial-author">
                                <div class="author-image"></div>
                                <div class="author-info">
                                    <h4>Hendra Wijaya</h4>
                                    <p class="author-role">Operator Lapangan</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <button class="slider-btn next-btn" onclick="slideTestimonial(1)">›</button>
            </div>

            <div class="slider-dots" id="testimonialDots"></div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="news-container">
            <header class="news-header">
                <h2>Berita dan Pengumuman</h2>
                <p>Dapatkan informasi terbaru seputar Wisata Air Panas Wong Pulungan</p>
            </header>

            <!-- Tabs -->
            <div class="news-tabs">
                <button class="tab-btn active" onclick="switchTab('berita')">Berita</button>
                <button class="tab-btn" onclick="switchTab('pengumuman')">Pengumuman</button>
            </div>

            <!-- Berita Content -->
            <div id="berita-content" class="news-content-wrapper active">
                <div class="news-grid">
                    <!-- News Card 1 -->
                    <article class="news-card" onclick="openNewsModal('berita1')">
                        <img src="{{ asset('/images/berita1.png') }}" alt="Pembukaan Fasilitas Baru" class="news-image">
                        <div class="news-content">
                            <div class="news-date">15 November 2025</div>
                            <h3 class="news-title">Pembukaan Fasilitas Kolam Anak yang Baru</h3>
                            <p class="news-excerpt">Wisata Air Panas Wong Pulungan dengan bangga mengumumkan pembukaan
                                fasilitas kolam anak yang telah direnovasi dengan standar keamanan terbaru dan berbagai
                                permainan air yang edukatif.</p>
                            <a href="javascript:void(0)" class="news-btn">Selengkapnya</a>
                        </div>
                    </article>

                    <!-- News Card 2 -->
                    <article class="news-card" onclick="openNewsModal('berita2')">
                        <img src="{{ asset('/images/berita2.png') }}" alt="Event Budaya" class="news-image">
                        <div class="news-content">
                            <div class="news-date">10 November 2025</div>
                            <h3 class="news-title">Festival Budaya Majapahit 2025</h3>
                            <p class="news-excerpt">Ikuti Festival Budaya Majapahit yang akan diselenggarakan bulan
                                depan dengan berbagai pertunjukan seni tradisional, pameran kuliner, dan workshop
                                kerajinan tangan lokal.</p>
                            <a href="javascript:void(0)" class="news-btn">Selengkapnya</a>
                        </div>
                    </article>

                    <!-- News Card 3 -->
                    <article class="news-card" onclick="openNewsModal('berita3')">
                        <img src="{{ asset('/images/berita3.png') }}" alt="Promo Spesial" class="news-image">
                        <div class="news-content">
                            <div class="news-date">5 November 2025</div>
                            <h3 class="news-title">Promo Spesial Akhir Tahun 2025</h3>
                            <p class="news-excerpt">Dapatkan diskon hingga 30% untuk kunjungan rombongan dan paket
                                keluarga selama periode Desember 2025. Buruan booking sebelum kehabisan!</p>
                            <a href="javascript:void(0)" class="news-btn">Selengkapnya</a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Pengumuman Content -->
            <div id="pengumuman-content" class="news-content-wrapper">
                <div class="news-grid">
                    <!-- Pengumuman Card 1 -->
                    <article class="announcement-card" onclick="openAnnouncementModal('pengumuman1')">
                        <div class="announcement-content">
                            <div>
                                <div class="news-date">1 November 2025</div>
                                <h3 class="news-title">Wong Pulungan Raih Penghargaan Desa Wisata Terbaik</h3>
                                <p class="news-excerpt">Desa Wisata Air Panas Wong Pulungan berhasil meraih penghargaan
                                    sebagai Desa Wisata Terbaik tingkat Provinsi Jawa Timur tahun 2025.</p>
                            </div>
                            <a href="javascript:void(0)" class="news-btn">Selengkapnya</a>
                        </div>
                        <img src="{{ asset('/images/pengumuman.png') }}" alt="Penghargaan" class="announcement-image">
                    </article>

                    <!-- Pengumuman Card 2 -->
                    <article class="announcement-card" onclick="openAnnouncementModal('pengumuman2')">
                        <div class="announcement-content">
                            <div>
                                <div class="news-date">28 Oktober 2025</div>
                                <h3 class="news-title">Program Pemberdayaan UMKM Lokal</h3>
                                <p class="news-excerpt">Peluncuran program pelatihan dan pendampingan bagi pelaku UMKM
                                    lokal untuk meningkatkan kualitas produk dan strategi pemasaran digital.</p>
                            </div>
                            <a href="javascript:void(0)" class="news-btn">Selengkapnya</a>
                        </div>
                        <img src="{{ asset('/images/pengumuman.png') }}" alt="UMKM Lokal" class="announcement-image">
                    </article>

                    <!-- Pengumuman Card 3 -->
                    <article class="announcement-card" onclick="openAnnouncementModal('pengumuman3')">
                        <div class="announcement-content">
                            <div>
                                <div class="news-date">25 Oktober 2025</div>
                                <h3 class="news-title">Gerakan Peduli Lingkungan dan Penghijauan</h3>
                                <p class="news-excerpt">Bergabunglah dalam aksi penanaman 1000 pohon dan pembersihan
                                    lingkungan sebagai bagian dari komitmen kami menjaga kelestarian alam.</p>
                            </div>
                            <a href="javascript:void(0)" class="news-btn">Selengkapnya</a>
                        </div>
                        <img src="{{ asset('/images/pengumuman.png') }}" alt="Lingkungan" class="announcement-image">
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <img src="{{ asset('/images/jelajahi-bg.png') }}" alt="Traditional Pattern Background" class="contact-bg">
        <div class="contact-container">
            <div class="contact-box">
                <h2>Jelajahi Wisata Air Panas Wong Pulungan</h2>
                <p>Kami mengundang Anda untuk menjelajahi website kami, ikuti kami di media sosial, dan jadilah bagian
                    dari perubahan positif untuk masa depan yang lebih baik di Desa Wisata Air Panas Wong Pulungan</p>
                <a href="javascript:void(0)" class="cta-btn">Jelajahi Sekarang</a>
            </div>
        </div>
    </section>

    <!-- News Modal (Berita) -->
    <div class="news-modal" id="newsModal">
        <div class="news-modal-content">
            <span class="modal-close" onclick="closeNewsModal()">&times;</span>
            <div class="news-modal-header">
                <img id="newsModalImage" src="" alt="">
            </div>
            <div class="news-modal-body">
                <div class="news-modal-date" id="newsModalDate"></div>
                <h3 id="newsModalTitle"></h3>
                <div id="newsModalContent"></div>
            </div>
        </div>
    </div>

    <!-- Announcement Modal (Pengumuman) -->
    <div class="announcement-modal" id="announcementModal">
        <div class="announcement-modal-content">
            <span class="modal-close" onclick="closeAnnouncementModal()">&times;</span>
            <div class="announcement-modal-header">
                <img id="announcementImage" src="" alt="">
            </div>
            <div class="announcement-modal-body">
                <div class="announcement-modal-date" id="announcementDate"></div>
                <div class="announcement-meta">
                    <div class="announcement-author" id="announcementAuthor"></div>
                </div>
                <h3 id="announcementTitle"></h3>
                <div id="announcementContent"></div>
            </div>
        </div>
    </div>

    <!-- Modal Destinasi -->
    <div class="modal" id="destinasiModal">
        <div class="modal-content">
            <div class="modal-header">
                <img id="modalImage" src="" alt="">
            </div>
            <div class="modal-body">
                <h3 id="modalTitle"></h3>
                <p id="modalDescription"></p>
            </div>
        </div>
    </div>

    <script>
        // Destinasi Modal
        function openModal(title, description, imageSrc) {
            const modal = document.getElementById('destinasiModal');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            const modalImage = document.getElementById('modalImage');

            modalTitle.textContent = title;
            modalDescription.textContent = description;
            modalImage.src = imageSrc;
            modalImage.alt = title;

            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('destinasiModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        document.getElementById('destinasiModal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Tab Switching
        function switchTab(tab) {
            // Update tab buttons
            const tabs = document.querySelectorAll('.tab-btn');
            tabs.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');

            // Update content
            const beritaContent = document.getElementById('berita-content');
            const pengumumanContent = document.getElementById('pengumuman-content');

            if (tab === 'berita') {
                beritaContent.classList.add('active');
                pengumumanContent.classList.remove('active');
            } else {
                beritaContent.classList.remove('active');
                pengumumanContent.classList.add('active');
            }
        }

        // News Data
        const newsData = {
            berita1: {
                title: 'Pembukaan Fasilitas Kolam Anak yang Baru',
                date: '15 November 2025',
                image: '/images/berita1.png',
                content: '<p>Wisata Air Panas Wong Pulungan dengan bangga mengumumkan pembukaan fasilitas kolam anak yang telah direnovasi dengan standar keamanan terbaru. Kolam anak ini dilengkapi dengan berbagai permainan air yang edukatif dan menyenangkan untuk anak-anak segala usia.</p><p>Fasilitas baru ini mencakup area bermain air yang aman dengan kedalaman yang disesuaikan untuk anak-anak, perosotan air, water playground interaktif, dan zona splash pad yang seru. Semua fasilitas telah melalui inspeksi ketat dan memenuhi standar keselamatan internasional.</p><p>Selain itu, kami juga menyediakan area duduk yang nyaman bagi orang tua untuk mengawasi anak-anak mereka bermain. Lifeguard berpengalaman akan selalu standby untuk memastikan keamanan semua pengunjung.</p><p>Pembukaan resmi akan dilaksanakan pada tanggal 20 November 2025 dengan berbagai promo menarik dan hiburan untuk keluarga. Jangan lewatkan kesempatan ini!</p>'
            },
            berita2: {
                title: 'Festival Budaya Majapahit 2025',
                date: '10 November 2025',
                image: '/images/berita2.png',
                content: '<p>Bergabunglah dengan kami dalam Festival Budaya Majapahit 2025 yang akan diselenggarakan pada bulan Desember mendatang. Festival ini merupakan perayaan tahunan yang mengangkat kembali kejayaan kebudayaan Majapahit dengan berbagai kegiatan menarik.</p><p>Festival ini akan menampilkan berbagai pertunjukan seni tradisional seperti tari Remo, wayang kulit, dan musik gamelan. Selain itu, akan ada pameran kuliner khas Jawa Timur dengan berbagai hidangan tradisional yang menggugah selera.</p><p>Para pengunjung juga dapat mengikuti workshop kerajinan tangan lokal seperti membatik, membuat keramik, dan menganyam. Workshop ini dibimbing langsung oleh pengrajin berpengalaman dari desa setempat.</p><p>Acara ini gratis untuk umum dan terbuka untuk semua kalangan. Mari lestarikan budaya Majapahit bersama-sama!</p>'
            },
            berita3: {
                title: 'Promo Spesial Akhir Tahun 2025',
                date: '5 November 2025',
                image: '/images/berita3.png',
                content: '<p>Sambut akhir tahun 2025 dengan penawaran spesial dari Wisata Air Panas Wong Pulungan! Dapatkan diskon hingga 30% untuk kunjungan rombongan dan paket keluarga selama periode Desember 2025.</p><p>Promo ini berlaku untuk pembelian tiket masuk rombongan minimal 20 orang dan paket keluarga (4 orang atau lebih). Nikmati fasilitas lengkap kami dengan harga yang lebih terjangkau.</p><p>Paket keluarga sudah termasuk akses ke semua kolam air panas, area bermain anak, dan satu voucher makan di food court kami. Untuk rombongan, tersedia paket tambahan seperti pemandu wisata dan ruang meeting untuk acara gathering perusahaan atau organisasi.</p><p>Booking dapat dilakukan mulai sekarang melalui website kami atau hubungi customer service kami. Jangan sampai kehabisan karena kuota terbatas!</p>'
            }
        };

        const announcementData = {
            pengumuman1: {
                title: 'Wong Pulungan Raih Penghargaan Desa Wisata Terbaik',
                author: 'Tim Pengelola Wong Pulungan',
                date: '1 November 2025',
                image: '/images/pengumuman.png',
                content: '<p>Dengan penuh kebanggaan, kami umumkan bahwa Desa Wisata Air Panas Wong Pulungan berhasil meraih penghargaan sebagai Desa Wisata Terbaik tingkat Provinsi Jawa Timur tahun 2025. Penghargaan ini diberikan oleh Dinas Pariwisata Provinsi Jawa Timur atas komitmen kami dalam pengembangan pariwisata berkelanjutan.</p><p>Penghargaan ini merupakan hasil kerja keras seluruh tim pengelola, masyarakat lokal, dan dukungan para pengunjung setia kami. Kriteria penilaian meliputi kelengkapan fasilitas, pelayanan kepada wisatawan, pemberdayaan masyarakat lokal, dan upaya pelestarian lingkungan.</p><p>Kami berkomitmen untuk terus meningkatkan kualitas layanan dan fasilitas demi memberikan pengalaman wisata terbaik bagi para pengunjung. Terima kasih atas dukungan dan kepercayaan Anda semua!</p>'
            },
            pengumuman2: {
                title: 'Program Pemberdayaan UMKM Lokal',
                author: 'Kepala Desa Wong Pulungan',
                date: '28 Oktober 2025',
                image: '/images/pengumuman.png',
                content: '<p>Kami dengan senang hati mengumumkan peluncuran Program Pemberdayaan UMKM Lokal yang bertujuan untuk meningkatkan kesejahteraan masyarakat sekitar melalui pengembangan usaha mikro, kecil, dan menengah.</p><p>Program ini mencakup pelatihan keterampilan produksi, manajemen usaha, dan strategi pemasaran digital. Peserta juga akan mendapatkan pendampingan langsung dari konsultan bisnis berpengalaman selama 6 bulan.</p><p>Selain itu, kami menyediakan akses ke platform e-commerce dan gerai UMKM di area wisata untuk membantu memasarkan produk-produk lokal kepada ribuan wisatawan yang berkunjung setiap bulannya.</p><p>Pendaftaran dibuka untuk seluruh pelaku UMKM di wilayah Kecamatan Sukomoro. Informasi lebih lanjut dapat menghubungi kantor desa atau mengunjungi website resmi kami.</p>'
            },
            pengumuman3: {
                title: 'Gerakan Peduli Lingkungan dan Penghijauan',
                author: 'Pokdarwis Wong Pulungan',
                date: '25 Oktober 2025',
                image: '/images/pengumuman.png',
                content: '<p>Mari bergabung dalam Gerakan Peduli Lingkungan dan Penghijauan yang akan dilaksanakan pada tanggal 5 Desember 2025. Kegiatan ini merupakan wujud komitmen kami dalam menjaga kelestarian alam dan lingkungan di sekitar kawasan wisata.</p><p>Agenda kegiatan meliputi penanaman 1000 pohon di area wisata dan sekitarnya, pembersihan sungai dan area publik, serta edukasi lingkungan untuk anak-anak sekolah.</p><p>Kami mengajak seluruh lapisan masyarakat, wisatawan, komunitas pecinta alam, dan pelajar untuk berpartisipasi dalam gerakan ini. Bibit pohon dan peralatan akan disediakan oleh panitia.</p><p>Sebagai bentuk apresiasi, peserta akan mendapatkan sertifikat, kaos eksklusif, dan voucher diskon untuk kunjungan berikutnya. Daftar melalui formulir online di website kami atau datang langsung pada hari H.</p>'
            }
        };

        // News Modal Functions
        function openNewsModal(newsId) {
            const data = newsData[newsId];
            if (!data) return;

            document.getElementById('newsModalTitle').textContent = data.title;
            document.getElementById('newsModalDate').textContent = data.date;
            document.getElementById('newsModalImage').src = data.image;
            document.getElementById('newsModalContent').innerHTML = data.content;

            const modal = document.getElementById('newsModal');
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeNewsModal() {
            const modal = document.getElementById('newsModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        document.getElementById('newsModal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeNewsModal();
            }
        });

        // Announcement Modal Functions
        function openAnnouncementModal(announcementId) {
            const data = announcementData[announcementId];
            if (!data) return;

            document.getElementById('announcementTitle').textContent = data.title;
            document.getElementById('announcementAuthor').textContent = data.author;
            document.getElementById('announcementDate').textContent = data.date;
            document.getElementById('announcementImage').src = data.image;
            document.getElementById('announcementContent').innerHTML = data.content;

            const modal = document.getElementById('announcementModal');
            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeAnnouncementModal() {
            const modal = document.getElementById('announcementModal');
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        document.getElementById('announcementModal').addEventListener('click', function (e) {
            if (e.target === this) {
                closeAnnouncementModal();
            }
        });

        // Close modal with ESC key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });

        // Testimonial Slider
        let testimonialCurrentIndex = 0;
        const testimonialSlider = document.getElementById('testimonialSlider');
        const testimonialSlides = testimonialSlider.querySelectorAll('.testimonial-slide');
        const testimonialDotsContainer = document.getElementById('testimonialDots');

        // Create dots
        testimonialSlides.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.className = 'dot' + (index === 0 ? ' active' : '');
            dot.addEventListener('click', () => goToTestimonialSlide(index));
            testimonialDotsContainer.appendChild(dot);
        });

        function slideTestimonial(direction) {
            testimonialCurrentIndex += direction;

            if (testimonialCurrentIndex < 0) {
                testimonialCurrentIndex = 0;
            } else if (testimonialCurrentIndex >= testimonialSlides.length) {
                testimonialCurrentIndex = testimonialSlides.length - 1;
            }

            testimonialSlider.scrollTo({
                left: testimonialSlider.offsetWidth * testimonialCurrentIndex,
                behavior: 'smooth'
            });

            updateTestimonialDots();
        }

        function goToTestimonialSlide(index) {
            testimonialCurrentIndex = index;
            testimonialSlider.scrollTo({
                left: testimonialSlider.offsetWidth * index,
                behavior: 'smooth'
            });
            updateTestimonialDots();
        }

        function updateTestimonialDots() {
            const dots = testimonialDotsContainer.querySelectorAll('.dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === testimonialCurrentIndex);
            });
        }

        // Update dots on scroll
        testimonialSlider.addEventListener('scroll', () => {
            const newIndex = Math.round(testimonialSlider.scrollLeft / testimonialSlider.offsetWidth);
            if (newIndex !== testimonialCurrentIndex) {
                testimonialCurrentIndex = newIndex;
                updateTestimonialDots();
            }
        });

        // Navbar hide/show on scroll
        let lastScrollTop = 0;
        const navbar = document.querySelector('nav');
        const scrollThreshold = 100;
        let ticking = false;

        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    
                    if (Math.abs(scrollTop - lastScrollTop) > 5) {
                        if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
                            navbar.classList.add('navbar-hidden');
                        } else {
                            navbar.classList.remove('navbar-hidden');
                        }
                        lastScrollTop = scrollTop;
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });

        // Smooth scroll without hashtag in URL
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                
                if (targetElement) {
                    // Smooth scroll to element
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Update URL without hashtag
                    const newUrl = targetId === 'home' ? '/' : `/${targetId}`;
                    history.pushState({ section: targetId }, '', newUrl);
                    
                    // Update active menu
                    document.querySelectorAll('.nav-menu a').forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');

                    // Close mobile menu after click
                    const navMenu = document.getElementById('navMenu');
                    const hamburger = document.getElementById('hamburger');
                    if (navMenu && hamburger) {
                        navMenu.classList.remove('active');
                        hamburger.classList.remove('active');
                    }
                }
            });
        });

        // Handle browser back/forward buttons
        window.addEventListener('popstate', (e) => {
            if (e.state && e.state.section) {
                const targetElement = document.getElementById(e.state.section);
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });

        // Set initial state
        history.replaceState({ section: 'home' }, '', '/');

        // Hamburger menu toggle
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('navMenu');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && navMenu.classList.contains('active')) {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            }
        });

        // Lazy loading images optimization
        if ('loading' in HTMLImageElement.prototype) {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                img.addEventListener('load', () => {
                    img.classList.add('loaded');
                });
            });
        } else {
            // Fallback for browsers that don't support lazy loading
            const script = document.createElement('script');
            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
            document.body.appendChild(script);
        }

        // Performance optimization: Debounce resize events
        let resizeTimer;
        window.addEventListener('resize', () => {
            document.body.classList.add('resize-animation-stopper');
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                document.body.classList.remove('resize-animation-stopper');
            }, 400);
        }, { passive: true });

        // Preload critical resources
        const preloadLink = document.createElement('link');
        preloadLink.rel = 'preload';
        preloadLink.as = 'image';
        preloadLink.href = "{{ asset('/images/hero-bg.png') }}";
        document.head.appendChild(preloadLink);

        // Add CSS for resize animation stopper
        const style = document.createElement('style');
        style.textContent = '.resize-animation-stopper * { transition: none !important; }';
        document.head.appendChild(style);
    </script>

    <!-- Footer -->
    <footer class="footer" id="kontak">
        <div class="footer-container">
            <div class="footer-content">
                <!-- Brand -->
                <div class="footer-brand">
                    <img src="{{ asset('/images/logo.png') }}" alt="Wong Pulungan Logo" class="footer-logo">
                    <h3 class="footer-title">BumDesa Kepulungan</h3>
                    <p class="footer-description">
                        Jl. Raya Malang - Surabaya Dusun Gondang RT. 08 RW. 002 Desa Kepulungan Kecamatan Gempol
                    </p>
                </div>

                <!-- Destinasi Wisata -->
                <div class="footer-column">
                    <h1>Tentang Kami</h2>
                    <div class="footer-links">
                        <a href="#home">Berita</a>
                        <a href="#destinasi">Destinasi Wisata</a>
                        <a href="#news">UMKM</a>
                    </div>
                </div>

                <!-- Ikuti Kami -->
                <div class="footer-column footer-social-column">
                    <h3>Ikuti Kami</h3>
                    <div class="footer-social">
                        <a href="#" target="_blank" aria-label="Facebook">
                            <img src="{{ asset('/images/facebook-icon.png') }}" alt="Facebook">
                        </a>
                        <a href="#" target="_blank" aria-label="Instagram">
                            <img src="{{ asset('/images/instagram-icon.png') }}" alt="Instagram">
                        </a>
                        <a href="#" target="_blank" aria-label="Twitter">
                            <img src="{{ asset('/images/twitter-icon.png') }}" alt="Twitter">
                        </a>
                        <a href="#" target="_blank" aria-label="YouTube">
                            <img src="{{ asset('/images/youtube-icon.png') }}" alt="YouTube">
                        </a>
                    </div>
                </div>

                <!-- Kontak Kami -->
                <div class="footer-column">
                    <h3>Kontak Kami</h3>
                    <div class="footer-contact">
                        <div class="footer-contact-item">
                            <img src="{{ asset('/images/phone-icon.png') }}" alt="Phone" class="footer-contact-icon">
                            <span>+62 896-9981-5985</span>
                        </div>
                        <div class="footer-contact-item">
                            <img src="{{ asset('/images/email-icon.png') }}" alt="Email" class="footer-contact-icon">
                            <span>bumdesa@kepulungan.desa.id</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright -->  
            <div class="footer-bottom">
                <p class="footer-copyright">
                    Copyright © 2025. All rights reserved Developed By Bara Api Digital
                </p>
                <p><i class="footer-copyright">
                        Supported By Teknik Informatika PSDKU Sidoarjo
                </p>
                <p><i class="footer-copyright">
                        Politeknik Negeri Jember
                </p>
            </div>
        </div>
    </footer>
</body>

</html>