  <section id="contact" class="contact-section-info">
            <div class="contact-section-info-container">
                <div class="contact-section-info-header">
                    <h2>Contact Us</h2>
                    <p>Get in touch for expert consultation and quotes</p>
                </div>

                <div class="contact-section-info-grid">
                    <!-- Left: Form -->
                    <div class="contact-section-info-form">
                        <h3>Send us a Message</h3>
                        <form>
                            <div class="contact-section-info-form-row">
                                <div class="contact-section-info-form-group">
                                    <label>Name *</label>
                                    <input type="text" required>
                                </div>
                                <div class="contact-section-info-form-group">
                                    <label>Email *</label>
                                    <input type="email" required>
                                </div>
                            </div>
                            <div class="contact-section-info-form-row">
                                <div class="contact-section-info-form-group">
                                    <label>Phone</label>
                                    <input type="tel">
                                </div>
                            </div>
                            <div class="contact-section-info-form-group">
                                <label>Message *</label>
                                <textarea rows="5" required></textarea>
                            </div>
                            <button type="submit"><i class="fas fa-paper-plane"></i> Send Message</button>
                        </form>
                    </div>

                    <!-- Right: Info -->
                    <div class="contact-section-info-details">
                        <h3>Contact Information</h3>
                        <div class="contact-section-info-item">
                            <div class="contact-section-info-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <h4>Address</h4>
                                <p>{{ $profile->location }}<br>{{ $profile->city }}<br>{{ $profile->state.' - '. $profile->pincode }}</p>
                            </div>
                        </div>
                        <div class="contact-section-info-item">
                            <div class="contact-section-info-icon"><i class="fas fa-phone"></i></div>
                            <div>
                                <h4>Phone</h4>
                                <p>+91 {{ $profile->contact}}</p>
                            </div>
                        </div>
                        <div class="contact-section-info-item">
                            <div class="contact-section-info-icon"><i class="fas fa-envelope"></i></div>
                            <div>
                                <h4>Email</h4>
                                <p>{{ $profile->email }}</p>
                            </div>
                        </div>
                        <div class="contact-section-info-item">
                            <div class="contact-section-info-icon"><i class="fas fa-clock"></i></div>
                            <div>
                                <h4>Business Hours</h4>
                                <p>Fri - Wed: 8:00 AM - 6:00 PM<br>Thursday: Close</p>
                            </div>
                        </div>

                        @if ($socialmedia->count() > 0)
                            
                        <div class="contact-section-info-social">
                            <h4>Follow Us</h4>
                            <div class="contact-section-info-social-icons">
                                 @foreach($socialmedia as $key => $val)
                                    <a href="{{$val->link}}" >
                                        <i class="{{$val->icon}}"></i>
                                    </a>
                                    @endforeach
                            </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </section>