<nav>
    <img src="{{ asset('/images/logo.png') }}" alt="Logo Wong Pulungan" class="logo">
    <button class="hamburger" id="hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <ul class="nav-menu" id="navMenu">
        <li><a href="{{ !request()->is('/*')? '/' : '#home' }}">Home</a></li>
        <li><a href="{{ !request()->is('/*')? '/' : '#destinasi' }}">Destinasi</a></li>
        <li><a href="/umkm" wire:navigate wire:current='active'>UMKM</a></li>
        <li><a href="javascript:void(0)" wire:current='active'>Galeri</a></li>
        <li><a href="/contact/" wire:current='active'>Kontak</a></li>
    </ul>
</nav>

{{-- @script --}}
    <script>
        // let lastScrollTop = 0;
        // const navbar = document.querySelector('nav');
        // const scrollThreshold = 100;
        // let ticking = false;

        // window.addEventListener('scroll', () => {
        //     if (!ticking) {
        //         window.requestAnimationFrame(() => {
        //             const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    
        //             if (Math.abs(scrollTop - lastScrollTop) > 5) {
        //                 if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
        //                     navbar.classList.add('navbar-hidden');
        //                 } else {
        //                     navbar.classList.remove('navbar-hidden');
        //                 }
        //                 lastScrollTop = scrollTop;
        //             }
        //             ticking = false;
        //         });
        //         ticking = true;
        //     }
        // }, { passive: true });

        // // Smooth scroll without hashtag in URL
        // // document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        // //     anchor.addEventListener('click', function (e) {
        // //         e.preventDefault();
        // //         const targetId = this.getAttribute('href').substring(1);
        // //         const targetElement = document.getElementById(targetId);
                
                
        // //         if (targetElement) {
        // //             // Smooth scroll to element
        // //             targetElement.scrollIntoView({
        // //                 behavior: 'smooth',
        // //                 block: 'start'
        // //             });

        // //             // Update browser history
        // //             const newUrl = targetId === 'home' ? '/' : `/${targetId}`;
        // //             history.pushState({ section: targetId }, '', newUrl);
                    
        // //             // Update active menu
        // //             document.querySelectorAll('.nav-menu a').forEach(link => {
        // //                 link.classList.remove('active');
        // //             });
        // //             this.classList.add('active');

        // //             // Close mobile menu after click
        // //             const navMenu = document.getElementById('navMenu');
        // //             const hamburger = document.getElementById('hamburger');
        // //             if (navMenu && hamburger) {
        // //                 navMenu.classList.remove('active');
        // //                 hamburger.classList.remove('active');
        // //             }
        // //         } else {
        // //             console.log(true);
        // //         }
        // //     });
        // // });

        // // Handle browser back/forward buttons
        // window.addEventListener('popstate', (e) => {
        //     if (e.state && e.state.section) {
        //         const targetElement = document.getElementById(e.state.section);
        //         if (targetElement) {
        //             targetElement.scrollIntoView({
        //                 behavior: 'smooth',
        //                 block: 'start'
        //             });
        //         }
        //     }
        // });

        // // Set initial state
        // history.replaceState({ section: 'home' }, '', '/');

        // // Hamburger menu toggle
        // const hamburger = document.getElementById('hamburger');
        // const navMenu = document.getElementById('navMenu');

        // hamburger.addEventListener('click', () => {
        //     console.log(true);
            
        //     hamburger.classList.toggle('active');
        //     navMenu.classList.toggle('active');
        // });

        // // Close menu when clicking outside
        // document.addEventListener('click', (e) => {
        //     if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
        //         navMenu.classList.remove('active');
        //         hamburger.classList.remove('active');
        //     }
        // });

        // // Close menu on escape key
        // document.addEventListener('keydown', (e) => {
        //     if (e.key === 'Escape' && navMenu.classList.contains('active')) {
        //         navMenu.classList.remove('active');
        //         hamburger.classList.remove('active');
        //     }
        // });

        // // Lazy loading images optimization
        // if ('loading' in HTMLImageElement.prototype) {
        //     const images = document.querySelectorAll('img[loading="lazy"]');
        //     images.forEach(img => {
        //         img.addEventListener('load', () => {
        //             img.classList.add('loaded');
        //         });
        //     });
        // } else {
        //     // Fallback for browsers that don't support lazy loading
        //     const script = document.createElement('script');
        //     script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
        //     document.body.appendChild(script);
        // }

        // // Performance optimization: Debounce resize events
        // let resizeTimer;
        // window.addEventListener('resize', () => {
        //     document.body.classList.add('resize-animation-stopper');
        //     clearTimeout(resizeTimer);
        //     resizeTimer = setTimeout(() => {
        //         document.body.classList.remove('resize-animation-stopper');
        //     }, 400);
        // }, { passive: true });

        // // Preload critical resources
        // // const preloadLink = document.createElement('link');
        // // preloadLink.rel = 'preload';
        // // preloadLink.as = 'image';
        // // preloadLink.href = "{{ asset('/images/hero-bg.png') }}";
        // // document.head.appendChild(preloadLink);

        // // Add CSS for resize animation stopper
        // const style = document.createElement('style');
        // style.textContent = '.resize-animation-stopper * { transition: none !important; }';
        // document.head.appendChild(style);
    </script>
{{-- @endscript --}}