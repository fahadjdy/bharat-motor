

<!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <div class="logo-icon">BM</div>
                        <span class="logo-text">MOTORS</span>
                    </div>
                    <p class="footer-description">
                        Leading manufacturer of high-quality body parts for Bolero, Tata Ace, and commercial vehicles across India.
                    </p>
                    <div class="social-links">
                        @foreach($socialmedia as $key => $val)
                        <a href="{{$val->link}}" class="social-link">
                            <i class="{{$val->icon}}"></i>
                        </a>
                        @endforeach
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="{{ url('') }}">Home</a></li>
                        <li><a href="{{ url('about') }}">About Us</a></li>
                        <li><a href="{{ url('products') }}">Products</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Products</h4>
                    <ul class="footer-links">
                        @foreach ($footerCategories as $key => $val)
                            <li><a href="{{ url('category/'.$val->slug) }}">{{$val->name}}</a></li>                            
                        @endforeach
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> {{ $profile->location }}<br>{{ $profile->city }}<br>{{ $profile->state.' - '. $profile->pincode }}</p>
                        <p><i class="fas fa-phone"></i> Sales: +91-{{  $profile->contact }}</p>
                        <p><i class="fas fa-envelope"></i> {{  $profile->email }}</p>
                        <p><i class="fas fa-clock"></i> Fri-Wed: 9:00 AM - 6:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Bharat Motor. All rights reserved. | Developed by : <a target="_blank" href="https://fahad-jadiya.com/" class="text-white">Fahad Jadiya</a></p>
            </div>
        </div>
    </footer>
