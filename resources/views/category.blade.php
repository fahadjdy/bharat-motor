@extends('layout.base')

@section('meta_description', $category->meta_description ?? '')
@section('meta_title', $category->meta_title ?? '')
@section('title')
  Category 
@endsection

@section('content')

        <!-- Featured Models -->
        <section class="featured-models">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Range of <span class="text-primary"> {{ $category->name }} </span></h2>
                    <p class="section-subtitle">Comprehensive range of body parts engineered for durability, precision fit, and long-lasting performance</p>
                </div>
                <div class="models-grid">

                   @foreach ($category->products as $key => $product)
                      <div class="model-card">
                          <div class="model-image">
                              <img loading="lazy" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                          </div>

                          <div class="model-content">
                              <h3>{{ $product->name }}</h3>

                              {{-- WhatsApp Contact Button --}}
                              @php
                                  $whatsappNumber = $profile->whatsapp ?? '7203070468';
                                  $whatsappMessage = urlencode("Hello, I'm interested in " . $product->name);
                              @endphp

                              <a href="https://api.whatsapp.com/send?phone={{ $whatsappNumber }}&text={{ $whatsappMessage }}"
                                target="_blank"
                                class="btn-whatsapp">
                                  <i class="fab fa-whatsapp"></i> WhatsApp
                              </a>

                              <a href="tel:{{ $profile->contact }}" class="btn btn-primary" style="width: 50%;display: inline-block; text-align: center;">
                                  <i class="fa fa-phone"></i> Call
                              </a>

                          </div>
                      </div>
                  @endforeach


                </div>
            </div>
        </section>

@endsection