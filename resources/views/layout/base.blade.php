<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- Dynamic Meta Title --}}
    <title>
        @hasSection('title')
            @yield('title') | {{ $profile->name ?? config('app.name') }}
        @else
            {{ $profile->meta_title ?? $profile->name ?? config('app.name') }}
        @endif
    </title>

    {{-- Meta Description --}}
    <meta name="description" content="@yield('meta_description', $profile->meta_description ?? '')">

    {{-- Meta Title (optional) --}}
    <meta name="title" content="@yield('meta_title', $profile->meta_title ?? '')">

    {{-- Favicon --}}
    @if(!empty($profile?->favicon))
        <link rel="icon" type="image/png" href="{{ asset('storage/'.$profile->favicon) }}">
    @endif

    {{-- Social / Open Graph --}}
    <meta property="og:title" content="@yield('title', $profile->name )">
    <meta property="og:description" content="@yield('meta_description', $profile->meta_description ?? '')">
    <meta property="og:image" content="{{ asset('storage/'.$profile->og_image ?? '') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', $profile->name )">
    <meta name="twitter:description" content="@yield('meta_description', $profile->meta_description ?? '')">
    <meta name="twitter:image" content="{{ asset('storage/'.$profile->og_image ?? '') }}">


    <!-- Font Awesome Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    @include('layout.header')

    <main>
        
        @yield('content')
    
    </main>
    
        <a href="https://api.whatsapp.com/send?phone=<?=$profile->whatsapp ?? '7203070468'?>&text=hello" class="float" target="_blank">
            <i class="fab fa-whatsapp my-float"></i>
        </a>
    @include('layout.footer')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset('js/script.js') }}"></script>
</body>
</html>
