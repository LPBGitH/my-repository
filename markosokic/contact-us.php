<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Window Montage Experts</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .contact-section {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 4rem 0;
        }
        .contact-form, .contact-info {
            flex: 1;
            min-width: 300px;
        }
        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        input, textarea, select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: 'Poppins', sans-serif;
        }
        textarea {
            min-height: 150px;
        }
        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 1.5rem;
        }
        .info-item i {
            font-size: 1.2rem;
            color: #1e88e5;
            margin-right: 1rem;
            margin-top: 0.2rem;
        }
        .map-container {
            height: 400px;
            background: #f5f7fa;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <a href="index.html" class="logo">
                <div class="image-placeholder">
                    <i class="fas fa-window-maximize"></i>
                </div>
                <span>Window Montage</span>
            </a>
            <nav class="main-nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html" class="active">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="page-header">
            <div class="container">
                <h1>Contact Our Team</h1>
                <p>Get in touch for a free consultation or estimate</p>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="service">Service Interested In</label>
                            <select id="service">
                                <option value="">Select a service</option>
                                <option value="residential">Residential Windows</option>
                                <option value="commercial">Commercial Windows</option>
                                <option value="repair">Window Repairs</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>

                <div class="contact-info">
                    <h2>Our Contact Details</h2>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Main Office</h3>
                            <p>123 Window Street<br>Montage City, MC 12345</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h3>Phone</h3>
                            <p>Main: (555) 123-4567<br>Support: (555) 765-4321</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>info@windowmontage.com<br>support@windowmontage.com</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h3>Business Hours</h3>
                            <p>Monday-Friday: 8am-6pm<br>Saturday: 9am-2pm<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map-section">
            <div class="container">
                <h2>Our Location</h2>
                <div class="map-container">
                    <div class="map-placeholder">
                        <i class="fas fa-map-marked-alt"></i>
                        <p>Map would be displayed here</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-logo">
                <div class="image-placeholder">
                    <i class="fas fa-window-maximize"></i>
                </div>
                <span>Window Montage</span>
            </div>
            <div class="footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Contact Us</h4>
                <p><i class="fas fa-map-marker-alt"></i> 123 Window St, Montage City</p>
                <p><i class="fas fa-phone"></i> (555) 123-4567</p>
                <p><i class="fas fa-envelope"></i> info@windowmontage.com</p>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Window Montage Experts. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>