<div>
    <link rel="stylesheet" href="{{ asset('/assets/css/homepage.css') }}">

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
    <div class="destination-modal" id="destinasiModal">
        <div class="destination-modal-content">
            <div class="destination-modal-header">
                <img id="destinationModalImage" src="" alt="">
            </div>
            <div class="destination-modal-body">
                <h3 id="destinationModalTitle"></h3>
                <p id="destinationModalDescription"></p>
            </div>
        </div>
    </div>
</div>

@pushOnce('scripts')
    <script>
        // Destinasi Modal
        function openModal(title, description, imageSrc) {
            const modal = document.getElementById('destinasiModal');
            const modalTitle = document.getElementById('destinationModalTitle');
            const modalDescription = document.getElementById('destinationModalDescription');
            const modalImage = document.getElementById('destinationModalImage');

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
    </script>
@endPushOnce