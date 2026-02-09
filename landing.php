<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLATE - Freight Management System</title>
    <link rel="icon" type="image/png" href="assets/images/slate.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/landing.css">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <!-- Navigation -->
    <nav>
        <div class="logo">
            <img src="assets/images/slate.png" alt="SLATE Logo" class="logo-image">
            <span>SLATE</span>
        </div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="#subsystems" class="portal-button">Access Portal</a>
    </nav>
    
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-header">
            <div class="hero-title">
                <h1>Seamless Freight,<br>Done Right.</h1>
            </div>
            <div class="hero-subtitle">
                <p>Simplify freight operations with an intelligent, all-in-one management system built for modern logistics.</p>
            </div>
        </div>
        
        <div class="hero-image-container">
            <img src="assets/images/hero2.png" alt="Global Logistics" class="hero-main-image">
        </div>
    </section>

    <!-- Value Proposition -->
    <section class="value-section reveal" id="about">
        <div class="value-grid">
            <div class="value-images">
                <img src="assets/images/warehouse.png" alt="Container" class="value-image">
                <img src="assets/images/truck.png" alt="Shipping" class="value-image">
            </div>
            <div class="value-content">
                <h2>More than a platform—we deliver <span class="highlight">trust</span>, clarity, and value.</h2>
                <p>SLATE stands for Supreme Logistics Accelerated Transport Express - a modern, intelligent freight management system designed to move logistics into the fast lane.</p>
            </div>
        </div>
    </section>

    <!-- Subsystems Portal -->
    <section class="portal-section" id="subsystems">
        <h2 class="section-title reveal">Access Our Subsystems</h2>
        <p class="section-subtitle reveal">Navigate directly to the specific system you need</p>
        
        <div class="carousel-container">
            <button class="carousel-btn carousel-prev" onclick="slideCarousel(-1)">
                <i data-lucide="chevron-left"></i>
            </button>
            
            <div class="carousel-wrapper">
                <div class="carousel-track">
                    <!-- HR Card -->
                    <div class="carousel-card">
                        <div class="bento-header">
                            <span class="bento-badge">Employee Management</span>
                        </div>
                        <div class="bento-content">
                            <h3>Human Resources</h3>
                            <p>Comprehensive HR management system covering talent acquisition, performance analysis, attendance tracking, and analytics.</p>
                            <button class="bento-button" onclick="openModal('hrModal')">
                                Open <i data-lucide="arrow-right"></i>
                            </button>
                        </div>
                        <div class="card-image">
                            <img src="assets/images/HR.png" alt="Human Resources">
                        </div>
                    </div>

                    <!-- Core Operations Card -->
                    <div class="carousel-card">
                        <div class="bento-header">
                            <span class="bento-badge">System Core</span>
                        </div>
                        <div class="bento-content">
                            <h3>Core Transactions</h3>
                            <p>Essential core operations dedicated to managing route planning, scheduling, and resource allocation.</p>
                            <button class="bento-button" onclick="openModal('coreModal')">
                                Open <i data-lucide="arrow-right"></i>
                            </button>
                        </div>
                        <div class="card-image">
                            <img src="assets/images/Core.png" alt="Core Transactions">
                        </div>
                    </div>

                    <!-- Logistics Card -->
                    <div class="carousel-card">
                        <div class="bento-header">
                            <span class="bento-badge">Fleet & Route</span>
                        </div>
                        <div class="bento-content">
                            <h3>Logistics</h3>
                            <p>Complete logistics management with smart supply chain, procurement, and real-time tracking.</p>
                            <button class="bento-button" onclick="openModal('logisticsModal')">
                                Open <i data-lucide="arrow-right"></i>
                            </button>
                        </div>
                        <div class="card-image">
                            <img src="assets/images/Logistic.png" alt="Logistics">
                        </div>
                    </div>

                    <!-- Finance Card -->
                    <div class="carousel-card">
                        <div class="bento-header">
                            <span class="bento-badge">Accounting</span>
                        </div>
                        <div class="bento-content">
                            <h3>Financial</h3>
                            <p>Inclusive financial management, billing, invoicing, and system-wide budget allocation.</p>
                            <a href="https://finance.slatefreight-ph.com/" class="bento-button" target="_blank" rel="noopener noreferrer">
                                Open <i data-lucide="arrow-right"></i>
                            </a>
                        </div>
                        <div class="card-image">
                            <img src="assets/images/Finance.png" alt="Financial">
                        </div>
                    </div>
                </div>
            </div>
            
            <button class="carousel-btn carousel-next" onclick="slideCarousel(1)">
                <i data-lucide="chevron-right"></i>
            </button>
        </div>
        
        <div class="carousel-indicators">
            <span class="indicator active" onclick="goToSlide(0)"></span>
            <span class="indicator" onclick="goToSlide(1)"></span>
            <span class="indicator" onclick="goToSlide(2)"></span>
            <span class="indicator" onclick="goToSlide(3)"></span>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" id="faq">
        <div class="faq-shell">
            <div class="faq-intro reveal">
                <h2>Frequently Asked Questions</h2>
                <p>Find the answer to commonly asked questions here.</p>
                <div class="faq-support">
                    <div class="faq-support-copy">
                        <i data-lucide="help-circle"></i>
                        <span>Need further support?</span>
                    </div>
                    <a href="#contact" class="faq-contact-button">Contact Us</a>
                </div>
            </div>

            <div class="faq-list reveal">
                <article class="faq-item open">
                    <button class="faq-question" type="button" aria-expanded="true">
                        <span>How do I access a specific subsystem in SLATE?</span>
                        <span class="faq-icon" aria-hidden="true">
                            <i data-lucide="chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-answer">
                        <p>Go to the Subsystems Portal section, select the module you need, and click Open. SLATE will launch the selected subsystem in a new tab.</p>
                    </div>
                </article>

                <article class="faq-item">
                    <button class="faq-question" type="button" aria-expanded="false">
                        <span>What should I do if a subsystem does not open?</span>
                        <span class="faq-icon" aria-hidden="true">
                            <i data-lucide="chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-answer">
                        <p>Check your internet connection and make sure pop-ups are allowed for this site. If the issue continues, use the Contact Us button so the team can assist you.</p>
                    </div>
                </article>

                <article class="faq-item">
                    <button class="faq-question" type="button" aria-expanded="false">
                        <span>Do I need separate accounts for each subsystem?</span>
                        <span class="faq-icon" aria-hidden="true">
                            <i data-lucide="chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-answer">
                        <p>Access depends on your assigned role and permissions. Your administrator provides credentials and confirms which SLATE modules are enabled for your account.</p>
                    </div>
                </article>

                <article class="faq-item">
                    <button class="faq-question" type="button" aria-expanded="false">
                        <span>Which browser works best with SLATE?</span>
                        <span class="faq-icon" aria-hidden="true">
                            <i data-lucide="chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-answer">
                        <p>SLATE works best on modern versions of Chrome, Edge, and Firefox. Keep your browser updated for better performance, security, and compatibility.</p>
                    </div>
                </article>

                <article class="faq-item">
                    <button class="faq-question" type="button" aria-expanded="false">
                        <span>Where can I report errors or request technical support?</span>
                        <span class="faq-icon" aria-hidden="true">
                            <i data-lucide="chevron-down"></i>
                        </span>
                    </button>
                    <div class="faq-answer">
                        <p>You can reach support through the Contact section in the footer. Include the module name and issue details so the team can resolve your request faster.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <!-- HR Modal -->
    <div id="hrModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Human Resources</h2>
                <span class="close" onclick="closeModal('hrModal')">&times;</span>
            </div>
            <div class="modal-body">
                <p class="modal-subtitle">Select a system to access</p>
                <div class="modal-grid">
                    <a href="https://hr1.slatefreight-ph.com/" class="modal-card" target="_blank" rel="noopener noreferrer">
                        <div class="modal-icon"><i data-lucide="user-check"></i></div>
                        <h3>HR 1</h3>
                        <p>Talend Acquisition & Rule-based Scoring</p>
                    </a>
                    <a href="https://hr2.slatefreight-ph.com/" class="modal-card" target="_blank" rel="noopener noreferrer">
                        <div class="modal-icon"><i data-lucide="calendar"></i></div>
                        <h3>HR 2</h3>
                        <p>Performance Analysis & Succession Planning</p>
                    </a>
                    <a href="https://hr3.slatefreight-ph.com/" class="modal-card" target="_blank" rel="noopener noreferrer">
                        <div class="modal-icon"><i data-lucide="credit-card"></i></div>
                        <h3>HR 3</h3>
                        <p>Location-based Attendance Tracking</p>
                    </a>
                    <a href="https://hr4.slatefreight-ph.com/" class="modal-card" target="_blank" rel="noopener noreferrer">
                        <div class="modal-icon"><i data-lucide="clipboard"></i></div>
                        <h3>HR 4</h3>
                        <p>Predictive Attrition for HR Analytics</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Operations Modal -->
    <div id="coreModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Core Operations</h2>
                <span class="close" onclick="closeModal('coreModal')">&times;</span>
            </div>
            <div class="modal-body">
                <p class="modal-subtitle">Select a system to access</p>
                <div class="modal-grid">
                    <a href="https://core1.slatefreight-ph.com/" class="modal-card" target="_blank" rel="noopener noreferrer">
                        <div class="modal-icon"><i data-lucide="route"></i></div>
                        <h3>Core 1</h3>
                        <p>Route Planning & Predictive Scheduling</p>
                    </a>
                    <a href="https://core2.slatefreight-ph.com/" class="modal-card" target="_blank" rel="noopener noreferrer">
                        <div class="modal-icon"><i data-lucide="calendar-sync"></i></div>
                        <h3>Core 2</h3>
                        <p>Predictive Dispatching & Service Routing</p>
                    </a>
                    <a href="https://core3.slatefreight-ph.com/" class="modal-card" target="_blank" rel="noopener noreferrer">
                        <div class="modal-icon"><i data-lucide="monitor-cog"></i></div>
                        <h3>Core 3</h3>
                        <p>Compliance Forecasting & System Monitoring</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Logistics Modal -->
    <div id="logisticsModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Logistics</h2>
                <span class="close" onclick="closeModal('logisticsModal')">&times;</span>
            </div>
            <div class="modal-body">
                <p class="modal-subtitle">Select a system to access</p>
                <div class="modal-grid">
                    <a href="https://logistic1.slatefreight-ph.com/" class="modal-card" target="_blank" rel="noopener noreferrer">
                        <div class="modal-icon"><i data-lucide="package"></i></div>
                        <h3>Logistic 1</h3>
                        <p>Smart Supply Chain & Procurement</p>
                    </a>
                    <a href="https://logistic2.slatefreight-ph.com/" class="modal-card" target="_blank" rel="noopener noreferrer">
                        <div class="modal-icon"><i data-lucide="map"></i></div>
                        <h3>Logistic 2</h3>
                        <p>Route Planning & Predictive Tracking</p>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <footer id="contact">
        <div class="footer-main">
            <div class="footer-branding">
                <img src="assets/images/slate2.png" alt="SLATE Logo" class="footer-logo">
                <div class="footer-text">
                    <h3>Freight Management System</h3>
                    <p>Committment to excellence and dependable service.</p>
                </div>
            </div>
            <div class="footer-content">
                <div class="footer-section">
                    <h4>SLATE FMS</h4>
                    <a href="#">Human Resources</a>
                    <a href="#">Core Operations</a>
                    <a href="#">Logistics</a>
                    <a href="#">Financial</a>
                </div>
                <div class="footer-section">
                    <h4>Resources</h4>
                    <a href="#">Documentation</a>
                    <a href="#">Help Center</a>
                    <a href="#">System Status</a>
                    <a href="#faq">FAQs</a>
                </div>
                <div class="footer-section">
                    <h4>Company</h4>
                    <a href="#about">About Us</a>
                    <a href="#">Our Team</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Capstone Project</a>
                </div>
                <div class="footer-section">
                    <h4>Learn</h4>
                    <a href="#">Legal</a>
                    <a href="privacy.php" target="_blank" rel="noopener noreferrer">Privacy Policy</a>
                    <a href="terms.php" target="_blank" rel="noopener noreferrer">Terms & Conditions</a>
                    <a href="#">Scam Awareness</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-bottom-content">
                <div class="footer-bottom-left">
                    <span>&copy; 2026 SLATE</span>
                    <span>All rights reserved.</span>
                </div>
                <div class="footer-social">
                    <a href="#" aria-label="LinkedIn"><i data-lucide="linkedin"></i></a>
                    <a href="#" aria-label="Instagram"><i data-lucide="instagram"></i></a>
                    <a href="#" aria-label="YouTube"><i data-lucide="youtube"></i></a>
                    <a href="#" aria-label="Twitter"><i data-lucide="twitter"></i></a>
                    <a href="#" aria-label="Facebook"><i data-lucide="facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="assets/landing.js"></script>
</body>
</html>
