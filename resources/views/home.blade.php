@extends('layout.base')

@section('meta_description', '')
@section('meta_title', '')
@section('title')
    Home
@endsection


@section('content')


 <!-- Hero Section -->
        <section class="hero">
            <div class="hero-overlay"></div>
            <div class="hero-bg"></div>
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">
                       Precision.
                        <span class="accent-text"> Performance.</span>
                        Perfection.
                    </h1>
                    <p class="hero-description">
                        Leading manufacturer of high-quality body parts for Bolero, Tata Ace, and commercial vehicles across India.
                    </p>
                    <div class="hero-buttons">
                        <button class="btn btn-primary btn-large">
                        <a href="{{ url('products') }}">    Explore Our Products
                            <i class="fas fa-arrow-right btn-icon"></i>
                            </a>
                        </button>
                        <button class="btn btn-outline-white btn-large">
                            <a href="tel:{{ $profile->contact }}">
                            <i class="fas fa-phone btn-icon"></i>
                            Call Now
                            </a>
                        </button>

                    </div>
                </div>
            </div>
        </section>
        
        <x-about/>

        <!-- USP Section -->
        <section class="usp-section">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Why Choose <span class="text-primary">Bharat Motor </span>?</h2>
                    <p class="section-subtitle">Built for performance, designed for reliability</p>
                </div>
                <div class="usp-grid">
                    <div class="usp-card">
                        <div class="usp-icon"><i class="fas fa-industry fa-1x"></i></div>
                        <h3>Manufacturing Excellence</h3>
                        <p>Modern facilities with advanced technology ensure precision-built, reliable vehicles.
                        </p>
                    </div>
                    <div class="usp-card">
                        <div class="usp-icon"><i class="fas fa-wrench fa-1x"></i></div>
                        <h3>Expert Engineering</h3>
                        <p>Specialized in light and medium commercial vehicles like Tata Ace and Mahindra Bolero, designed for performance and durability.</p>
                    </div>
                    <div class="usp-card">
                        <div class="usp-icon"><i class="fas fa-shield-alt fa-1x"></i></div>
                        <h3>Quality Assurance</h3>
                        <p>Strict testing and inspections guarantee top safety and reliability standards.</p>
                    </div>
                    <div class="usp-card">
                        <div class="usp-icon"><i class="fas fa-truck fa-1x"></i></div>
                        <h3>Diverse Portfolio</h3>
                        <p>Wide range of vehicles customized for logistics, transport, and utility applications.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Models -->
        <section class="featured-models">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Our Model's Range</h2>
                    <p class="section-subtitle">Comprehensive range of body parts engineered for durability, precision fit, and long-lasting performance</p>
                </div>
                <div class="models-grid">

                    @foreach ($categories as $key => $category)                     
                        <div class="model-card">
                            <div class="model-image">
                                <img loading="lazy" src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}">
                            </div>
                            <div class="model-content">
                                <h3>{{ $category->name }}</h3>
                                <button class="btn btn-primary">
                                    <a href="{{ url('category/'.$category->slug) }}">
                                        View Products
                                    </a>
                                </button>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- Services Overview -->
        <section class="services-overview">
            <div class="container">
                <div class="services-content">
                    <div class="services-image">
                        <img loading="lazy" src="{{ asset('img/trust.png') }}" alt="Services">
                    </div>
                    <div class="services-text">
                        <h2 class="section-title">Manufacturing Excellence</h2>
                        <p class="section-subtitle">Cutting-edge manufacturing facilities equipped with advanced machinery and precision engineering processes ensure superior build quality and reliability in every vehicle.</p>
                        <div class="services-list">
                            <div class="service-item">
                                <div class="service-icon"><i class="fas fa-wrench "></i></div>
                                <div>
                                    <h4>Manufacturing & Assembly</h4>
                                    <p>Custom vehicle manufacturing with precision engineering</p>
                                </div>
                            </div>

                            <div class="service-item">
                                <div class="service-icon"><i class="fas fa-tools"></i></div>
                                <div>
                                    <h4>After-Sales Support</h4>
                                    <p>24/7 maintenance and repair services nationwide</p>
                                </div>
                            </div>
                            <div class="service-item">
                                <div class="service-icon"><i class="fas fa-clipboard"></i></div>
                                <div>
                                    <h4>Spare Parts Supply</h4>
                                    <p>Genuine parts availability with quick delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <x-action />
        
      <x-contact />

        <!-- Testimonials Section -->
        <section class="testimonials">
            <div class="testimonials-container">
                <h2>What Our <span class="text-primary"> Clients Say </span></h2>

                <!-- Swiper -->
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">

                        @foreach ($testimonials as $key => $testimonial)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="ornamental-border"></div>
                                    <div class="testimonial-content">
                                        <p>{{ $testimonial->content}}</p>
                                    </div>
                                    <div class="testimonial-author">
                                        @if($testimonial->image != null)
                                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}">
                                        @endif
                                        <div class="author-info">
                                            <h4>{{ $testimonial->name}}</h4>
                                            <span>{{ $testimonial->designation}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>

                    <!-- Pagination Dots -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


        

    @endsection