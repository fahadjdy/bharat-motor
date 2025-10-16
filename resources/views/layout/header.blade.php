 <!-- Header -->
    <header class="header">
        <!-- Top contact bar -->
        <div class="contact-bar">
            <div class="container">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>Sales: +91-{{ $profile->contact }}</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>{{ $profile->email }}</span>
                    </div>

                </div>
                <div class="tagline">
                    <span>{{  $profile->slogan }}</span>
                </div>
            </div>
        </div>

        <!-- Main navigation -->
        <div class="main-nav">
            <div class="container">
                <div class="nav-content">
                    <a href="{{ url('') }}" class="logo">
                        <!-- <div class="logo-icon">BM</div>
                        <span class="logo-text">MOTORS</span> -->
                        <img src="{{ asset('storage/'.$profile->logo) }}" alt="{{ $profile->name }}">
                    </a>

                   <!-- Desktop Navigation -->
                    <nav class="desktop-nav">
                        <a href="{{ url('') }}" 
                        class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>

                        <a href="{{ url('about') }}" 
                        class="nav-link {{ Request::is('about') ? 'active' : '' }}">About Us</a>

                        <a href="{{ url('products') }}" 
                        class="nav-link {{ Request::is('products*') ? 'active' : '' }}">Products</a>

                        <a href="{{ url('contact') }}" 
                        class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                    </nav>

                    <div class="nav-buttons">
                        <button class="btn btn-outline">
                            <a href="{{ asset('brochure.pdf') }}" download="">
                                <i class="fa fa-download"></i> Brochure
                            </a>
                        </button>
                        <button class="btn btn-primary">
                           <a href="tel:{{ $profile->contact }}">
                            <i class="fa fa-phone"></i>
                            Contact </a></button>
                    </div>

                    <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                        <span class="hamburger"></span>
                    </button>
                </div>

                <!-- Mobile Navigation -->
                <div class="mobile-nav" id="mobileNav">
                    <!-- Mobile Navigation -->
                        <nav class="mobile-nav-links">
                            <a href="{{ url('') }}" 
                            class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>

                            <a href="{{ url('about') }}" 
                            class="nav-link {{ Request::is('about') ? 'active' : '' }}">About Us</a>

                            <a href="{{ url('products') }}" 
                            class="nav-link {{ Request::is('products*') ? 'active' : '' }}">Products</a>

                            <a href="{{ url('contact') }}" 
                            class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>

                            <div class="mobile-buttons">
                                <button class="btn btn-outline">
                                    <a href="{{ asset('brochure.pdf') }}" download="">
                                        <i class="fa fa-download"></i> Brochure
                                    </a>
                                </button>
                                <button class="btn btn-primary">
                                    <a href="tel:{{ $profile->contact }}"><i class="fa fa-phone"></i> Contact</a>
                                </button>
                            </div>
                        </nav>

                </div>
            </div>
        </div>
    </header>