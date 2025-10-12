@extends('layout.base')

@section('meta_description', '')
@section('meta_title', '')
@section('title')
  Contact
@endsection

@section('content')

    <x-contact/>
    <x-action/>

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