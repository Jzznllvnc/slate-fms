        lucide.createIcons();
        
        // Carousel functionality
        let currentSlide = 0;
        const totalSlides = 4;
        
        function slideCarousel(direction) {
            currentSlide += direction;
            
            if (currentSlide < 0) {
                currentSlide = totalSlides - 1;
            } else if (currentSlide >= totalSlides) {
                currentSlide = 0;
            }
            
            updateCarousel();
        }
        
        function goToSlide(index) {
            currentSlide = index;
            updateCarousel();
        }
        
        function updateCarousel() {
            const track = document.querySelector('.carousel-track');
            const indicators = document.querySelectorAll('.indicator');
            const card = document.querySelector('.carousel-card');
            
            if (track && card) {
                const cardWidth = card.offsetWidth;
                const gap = 32; // 2rem gap
                const wrapperPadding = 32; // 2rem padding on carousel-wrapper
                let offset = currentSlide * (cardWidth + gap);
                
                // Adjust for first slide - no left space needed
                if (currentSlide === 0) {
                    offset = 0;
                }
                // Adjust for last slide - ensure proper right padding
                else if (currentSlide === totalSlides - 1) {
                    const containerWidth = track.parentElement.offsetWidth;
                    offset = (totalSlides - 1) * (cardWidth + gap) - (containerWidth - cardWidth - (wrapperPadding * 2));
                }
                
                track.style.transform = `translateX(-${offset}px)`;
            }
            
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentSlide);
            });
            
            lucide.createIcons();
        }
        
        // Auto-play carousel (optional)
        let autoPlayInterval = setInterval(() => {
            slideCarousel(1);
        }, 5000);
        
        // Pause auto-play on hover
        const carouselContainer = document.querySelector('.carousel-container');
        if (carouselContainer) {
            carouselContainer.addEventListener('mouseenter', () => {
                clearInterval(autoPlayInterval);
            });
            
            carouselContainer.addEventListener('mouseleave', () => {
                autoPlayInterval = setInterval(() => {
                    slideCarousel(1);
                }, 5000);
            });
        }
        
        // Update carousel on window resize
        window.addEventListener('resize', () => {
            updateCarousel();
        });
        
        // Initialize carousel
        window.addEventListener('load', () => {
            updateCarousel();
        });
        
        // Scroll reveal animation
        const revealElements = document.querySelectorAll('.reveal');
        
        function checkScroll() {
            revealElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 100;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('active');
                }
            });
        }
        
        window.addEventListener('scroll', checkScroll);
        checkScroll(); // Check on load

        // FAQ accordion
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach((question) => {
            question.addEventListener('click', () => {
                const currentItem = question.closest('.faq-item');
                const isOpen = currentItem.classList.contains('open');

                faqQuestions.forEach((button) => {
                    const item = button.closest('.faq-item');
                    item.classList.remove('open');
                    button.setAttribute('aria-expanded', 'false');
                });

                if (!isOpen) {
                    currentItem.classList.add('open');
                    question.setAttribute('aria-expanded', 'true');
                }
            });
        });
        
        // Nav scroll effect
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
        
        function openModal(modalId) {
            document.getElementById(modalId).style.display = 'block';
            document.body.style.overflow = 'hidden';
            // Reinitialize icons for modal content
            setTimeout(() => lucide.createIcons(), 50);
        }
        
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
            document.body.style.overflow = '';
        }
        
        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
                document.body.style.overflow = '';
            }
        }
        
        // Close modal on ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('.modal').forEach(modal => {
                    modal.style.display = 'none';
                });
                document.body.style.overflow = '';
            }
        });
