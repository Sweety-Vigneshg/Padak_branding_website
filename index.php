<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padak - Your Branding Partner</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans bg-white text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="text-2xl font-bold text-blue-600">Padak</h1>
                <span class="ml-2 text-sm text-gray-600">Your Branding Partner</span>
            </div>
            
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-gray-600 hover:text-blue-600 focus:outline-none">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
            
            <!-- Desktop menu -->
            <div class="hidden md:flex space-x-6">
                <a href="#home" class="text-gray-600 hover:text-blue-600">Home</a>
                <a href="#services" class="text-gray-600 hover:text-blue-600">Services</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600">Contact</a>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white px-4 pt-2 pb-4">
            <a href="#home" class="block py-2 text-gray-600 hover:text-blue-600">Home</a>
            <a href="#services" class="block py-2 text-gray-600 hover:text-blue-600">Services</a>
            <a href="#contact" class="block py-2 text-gray-600 hover:text-blue-600">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-r from-blue-50 to-indigo-50 py-16 md:py-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-800">Grow Your Business with Digital Excellence</h1>
                    <p class="text-lg text-gray-600 mb-8">Transform your brand with our comprehensive digital marketing solutions. From strategy to execution, we're your trusted partner in digital success.</p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#contact" class="bg-blue-600 text-white px-6 py-3 rounded-lg text-center font-medium hover:bg-blue-700 transition duration-300">Start Your Journey</a>
                        <a href="#" class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg text-center font-medium hover:bg-blue-50 transition duration-300">Watch Demo</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-blue-600">40+</div>
                            <div class="text-gray-600 mt-2">Happy Clients</div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-blue-600">98.4%</div>
                            <div class="text-gray-600 mt-2">Success Rate</div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-blue-600">5+</div>
                            <div class="text-gray-600 mt-2">Years Experience</div>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-blue-600">50+</div>
                            <div class="text-gray-600 mt-2">Projects Completed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Our Services</h2>
            <p class="text-lg text-gray-600 text-center max-w-3xl mx-auto mb-12">Comprehensive digital solutions designed to grow your business and maximize your online presence across all channels.</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Digital Marketing</h3>
                    <p class="text-gray-600">Strategic marketing solutions to boost your online presence and drive growth.</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> SEO Optimization
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> PPC Campaigns
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Content Marketing
                        </li>
                    </ul>
                </div>
                
                <!-- Service Card 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Brand Identity</h3>
                    <p class="text-gray-600">Create a cohesive visual identity for your business.</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Logo Design
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Brand Guidelines
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Color Palettes
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Typography
                        </li>
                    </ul>
                </div>
                
                <!-- Service Card 3 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-print"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Print Design</h3>
                    <p class="text-gray-600">Professional designs for physical marketing materials.</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Business Cards
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Brochures
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Posters
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Packaging
                        </li>
                    </ul>
                </div>
                
                <!-- Service Card 4 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Web Development</h3>
                    <p class="text-gray-600">Custom websites and applications tailored to your business needs.</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Responsive Design
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> E-commerce Solutions
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> CMS Development
                        </li>
                    </ul>
                </div>
                
                <!-- Service Card 5 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Android Development</h3>
                    <p class="text-gray-600">Native Android applications for enhanced mobile presence.</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> UI/UX Design
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> App Publishing
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Maintenance & Support
                        </li>
                    </ul>
                </div>
                
                <!-- Service Card 6 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div class="text-blue-600 text-3xl mb-4">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Social Media Graphics</h3>
                    <p class="text-gray-600">Eye-catching visuals for your social media presence.</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Post Graphics
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Profile Assets
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Story Templates
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i> Ad Creatives
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gradient-to-r from-blue-50 to-indigo-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">Let's Start Your Success Story</h2>
            <p class="text-lg text-gray-600 text-center max-w-3xl mx-auto mb-12">Ready to transform your digital presence? Contact us today for a free consultation and discover how we can help grow your business.</p>
            
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Contact Form -->
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-bold mb-6">Send Us a Message</h3>
                    <form class="bg-white p-6 rounded-lg shadow-md">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-gray-700 mb-2">First Name</label>
                                <input type="text" id="first-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="John">
                            </div>
                            <div>
                                <label for="last-name" class="block text-gray-700 mb-2">Last Name</label>
                                <input type="text" id="last-name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Doe">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="john@example.com">
                            </div>
                            <div>
                                <label for="phone" class="block text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="+1 (555) 123-4567">
                            </div>
                            <div class="md:col-span-2">
                                <label for="company" class="block text-gray-700 mb-2">Company</label>
                                <input type="text" id="company" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Wireless Services, Wrexel">
                            </div>
                            <div class="md:col-span-2">
                                <label for="message" class="block text-gray-700 mb-2">Message *</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tell us about your project and how we can help..."></textarea>
                            </div>
                        </div>
                        <button type="submit" class="mt-6 bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition duration-300 w-full">Send Message</button>
                    </form>
                </div>
                
                <!-- Contact Information -->
                <div class="lg:w-1/2">
                    <h3 class="text-2xl font-bold mb-6">Get in Touch</h3>
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold mb-2 flex items-center">
                                <i class="fas fa-map-marker-alt text-blue-600 mr-2"></i> Office Location
                            </h4>
                            <p class="text-gray-600">Ratmalana, Colombo, Sri Lanka</p>
                            <p class="text-gray-600">Tamil Nadu, India</p>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold mb-2 flex items-center">
                                <i class="fas fa-phone text-blue-600 mr-2"></i> Phone Number
                            </h4>
                            <p class="text-gray-600">+94 774433757</p>
                            <p class="text-gray-600">Whatsapp Available</p>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold mb-2 flex items-center">
                                <i class="fas fa-envelope text-blue-600 mr-2"></i> Email Address
                            </h4>
                            <p class="text-gray-600">padak.service@gmail.com</p>
                        </div>
                        
                        <div class="mb-6">
                            <h4 class="text-lg font-semibold mb-2 flex items-center">
                                <i class="fas fa-clock text-blue-600 mr-2"></i> Business Hours
                            </h4>
                            <p class="text-gray-600">Mon - Fri : 9:00 AM - 6:00 PM</p>
                            <p class="text-gray-600">Sat : 10:00 AM - 4:00 PM</p>
                        </div>
                        
                        <div>
                            <h4 class="text-lg font-semibold mb-2 flex items-center">
                                <i class="fas fa-map-pin text-blue-600 mr-2"></i> Find Us
                            </h4>
                            <p class="text-gray-600">Located in the heart of the business district</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-2xl font-bold mb-4">Padak</h3>
                    <p class="text-gray-400 mb-4">Your Branding Partner</p>
                    <p class="text-gray-400 mb-6">Empowering businesses to thrive in the digital landscape with innovative marketing solutions and expert guidance.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Our Team</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Courses</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Internships</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Digital Marketing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Graphics Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Video Editing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Web Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Android Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Hosting Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Social Media Handling</a></li>
                    </ul>
                </div>
                
                <!-- Newsletter -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Stay Updated</h4>
                    <p class="text-gray-400 mb-4">Subscribe to our newsletter for the latest digital marketing insights and tips.</p>
                    <form class="flex">
                        <input type="email" placeholder="Enter your email" class="px-4 py-2 rounded-l-lg w-full text-gray-800 focus:outline-none">
                        <button type="submit" class="bg-blue-600 px-4 py-2 rounded-r-lg font-medium hover:bg-blue-700 transition duration-300">Subscribe</button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm mb-4 md:mb-0">
                    <a href="#" class="hover:text-white transition duration-300 mr-4">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition duration-300 mr-4">Terms of Service</a>
                    <a href="#" class="hover:text-white transition duration-300">Cookie Policy</a>
                </div>
                <div class="text-gray-400 text-sm">
                    © 2024 Padak. All rights reserved. • Made with <i class="fas fa-heart text-red-500 mx-1"></i> by Padak Team
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for mobile menu -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>