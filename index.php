<?php
// You can add PHP code here if needed in the future
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Security Specialist</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        :root {
            --primary-color: #ff5722;
            --secondary-color: #161616;
            --text-color: #f5f5f5;
            --bg-color: #0a0a0a;
            --accent-color: #1e1e1e;
            --container-width: 1140px;
            --bg-gradient: linear-gradient(to bottom, #0a0a0a 0%, #0e0e0e 40%, #1a1410 80%, #241b13 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg-gradient);
            color: var(--text-color);
            line-height: 1.6;
            background-attachment: fixed;
            min-height: 100vh;
        }
        
        .container {
            max-width: var(--container-width);
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            padding: 30px 0;
            position: relative;
            background: var(--bg-gradient);
            background-attachment: fixed;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--primary-color);
        }
        
        .hero {
            padding: 100px 0 50px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
        }
        
        .hero-content {
            flex: 1;
        }
        
        .hero-image {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        
        .profile-img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
            border: 4px solid rgba(255, 87, 34, 0.2);
        }
        
        h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .highlight {
            color: var(--primary-color);
            text-shadow: 0 0 15px rgba(255, 87, 34, 0.3);
        }
        
        .subtitle {
            font-size: 1.2rem;
            color: #aaa;
            margin-bottom: 30px;
        }
        
        .social-links {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(255, 87, 34, 0.15);
            color: var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-3px);
        }
        
        .cta-button {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            transition: all 0.3s ease;
        }
        
        .cta-button:hover {
            background-color: #e64a19;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(255, 87, 34, 0.3);
        }
        
        .services {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.2rem;
            margin-bottom: 15px;
            display: inline-block;
        }
        
        .section-title h2 .highlight {
            position: relative;
            z-index: 1;
        }
        
        .section-title h2 .highlight::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 8px;
            background-color: rgba(255, 87, 34, 0.3);
            z-index: -1;
            transform: skewX(-15deg);
        }
        
        .section-title p {
            color: #aaa;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background-color: rgba(25, 20, 18, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            border: 1px solid rgba(255,255,255,0.05);
            backdrop-filter: blur(5px);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
            border: 1px solid rgba(255, 87, 34, 0.3);
            background-color: rgba(30, 22, 16, 0.8);
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            background-color: rgba(141, 59, 35, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        
        .service-icon i {
            color: var(--primary-color);
        }
        
        .service-card h3 {
            margin-bottom: 15px;
        }
        
        .contact {
            padding: 80px 0;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .contact-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 87, 34, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #333;
            background-color: rgba(15, 15, 15, 0.4);
            color: var(--text-color);
            border-radius: 8px;
            font-family: 'Inter', sans-serif;
            backdrop-filter: blur(5px);
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        .submit-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
        }
        
        .submit-btn:hover {
            background-color: #e64a19;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 87, 34, 0.3);
        }
        
        footer {
            padding: 40px 0;
            background: var(--bg-gradient);
            background-attachment: fixed;
            color: white;
            text-align: center;
        }
        
        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        
        .footer-links {
            display: flex;
            gap: 20px;
        }
        
        .footer-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: #ccc;
        }
        
        .copyright {
            margin-top: 20px;
            color: #aaa;
            font-size: 0.9rem;
        }

        #formStatus {
            margin-top: 15px;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            display: none;
        }

        .status-success {
            background-color: rgba(76, 175, 80, 0.1);
            border: 1px solid rgba(76, 175, 80, 0.3);
            color: #4CAF50;
        }

        .status-error {
            background-color: rgba(244, 67, 54, 0.1);
            border: 1px solid rgba(244, 67, 54, 0.3);
            color: #f44336;
        }
        
        @media (max-width: 768px) {
            .hero {
                flex-direction: column-reverse;
                text-align: center;
                padding: 60px 0;
            }
            
            .social-links {
                justify-content: center;
            }
            
            .nav-links {
                display: none;
            }
            
            .profile-img {
                width: 200px;
                height: 200px;
                margin-bottom: 30px;
            }
            
            h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">Cyber.Secure</a>
                <div class="nav-links">
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#skills">Skills</a>
                    <a href="#contact">Contact</a>
                </div>
            </nav>
        </div>
    </header>
    
    <section class="hero" id="about" style="margin-top: 0;">
        <div class="container">
            <div class="hero-content">
                <h1>Hi, I'm <span class="highlight">Reindert</span><br>Cybersecurity <span class="highlight">Specialist</span></h1>
                <p class="subtitle">Informatics student specializing in cybersecurity with several years of hands-on experience and a passion for digital security.</p>
                <a href="#contact" class="cta-button">Get In Touch</a>
                
                <div class="social-links">
                    <a href="#" class="social-icon">
                        <i data-feather="linkedin"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i data-feather="github"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i data-feather="twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/r3i_3rt/" class="social-icon">
                        <i data-feather="instagram"></i>
                    </a>
                </div>
            </div>
            
            <div class="hero-image">
                <img src="images/profile.jpg" alt="Your Profile" class="profile-img">
            </div>
        </div>
    </section>
    
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>My <span class="highlight">Services</span></h2>
                <p>Cybersecurity solutions to protect your digital assets</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i data-feather="shield"></i>
                    </div>
                    <h3>Security Assessments</h3>
                    <p>Comprehensive vulnerability scanning and security assessments to identify potential weaknesses in your systems.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i data-feather="lock"></i>
                    </div>
                    <h3>Penetration Testing</h3>
                    <p>Ethical hacking and penetration testing to discover security vulnerabilities before malicious actors can exploit them.</p>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i data-feather="alert-triangle"></i>
                    </div>
                    <h3>Security Consulting</h3>
                    <p>Expert advice on implementing best security practices and building robust defenses for your digital infrastructure.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Add Skills Section -->
    <section class="services" id="skills">
        <div class="container">
            <div class="section-title">
                <h2>Technical <span class="highlight">Skills</span></h2>
                <p>My cybersecurity expertise and technical capabilities</p>
            </div>
            
            <div style="max-width: 800px; margin: 0 auto;">
                <div style="margin-bottom: 40px;">
                    <h3 style="margin-bottom: 15px;">Security Tools</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 20px;">
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">Wireshark</span>
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">Metasploit</span>
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">Burp Suite</span>
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">Nmap</span>
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">Kali Linux</span>
                    </div>
                </div>
                
                <div style="margin-bottom: 40px;">
                    <h3 style="margin-bottom: 15px;">Programming Languages</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 20px;">
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">Python</span>
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">Bash</span>
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">JavaScript</span>
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">SQL</span>
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">C++</span>
                    </div>
                </div>
                
                <div>
                    <h3 style="margin-bottom: 15px;">Certifications In Progress</h3>
                    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">CompTIA Security+</span>
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">OSCP</span>
                        <span style="background-color: rgba(255, 87, 34, 0.15); color: var(--primary-color); padding: 8px 16px; border-radius: 20px; font-weight: 500; border: 1px solid rgba(255, 87, 34, 0.2);">CEH</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Get In <span class="highlight">Touch</span></h2>
                <p>Let's discuss your security needs and strengthen your digital defenses</p>
            </div>
            
            <div class="contact-grid">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i data-feather="mail"></i>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p>reindert.heemskerk.imp@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i data-feather="phone"></i>
                        </div>
                        <div>
                            <h4>Phone</h4>
                            <p>+32 467 00 86 45</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i data-feather="map-pin"></i>
                        </div>
                        <div>
                            <h4>Location</h4>
                            <p>Diest, VBR</p>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form action="https://formspree.io/f/reindert.heemskerk.imp@gmail.com" method="POST">
                        <input type="hidden" name="_next" value="index.php#contact">
                        <input type="hidden" name="_subject" value="New message from Cyber.Secure website">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="6" required></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <a href="#" class="logo" style="color: white;">Cyber.Secure</a>
                
                <div class="footer-links">
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#skills">Skills</a>
                    <a href="#contact">Contact</a>
                </div>
                
                <div class="social-links">
                    <a href="#" class="social-icon" style="background-color: rgba(255,255,255,0.1);">
                        <i data-feather="linkedin"></i>
                    </a>
                    <a href="#" class="social-icon" style="background-color: rgba(255,255,255,0.1);">
                        <i data-feather="github"></i>
                    </a>
                    <a href="#" class="social-icon" style="background-color: rgba(255,255,255,0.1);">
                        <i data-feather="twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/r3i_3rt/" class="social-icon" style="background-color: rgba(255,255,255,0.1);">
                        <i data-feather="instagram"></i>
                    </a>
                </div>
                
                <p class="copyright">&copy; 2025 Cyber.Secure. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <script>
        feather.replace();
        
        // Make sure all navigation links scroll to the correct section
        document.addEventListener('DOMContentLoaded', function() {
            // Get all links that point to an ID on the page
            const links = document.querySelectorAll('a[href^="#"]');
            
            // Add click event to each link
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Get the target section
                    const targetId = this.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    
                    // If the target exists, scroll to it
                    if (targetSection) {
                        // Calculate position accounting for any offset
                        const targetPosition = targetSection.offsetTop;
                        
                        // Smooth scroll to the target
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>