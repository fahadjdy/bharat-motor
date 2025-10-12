
        <section class="company-overview">
            <div class="container">
                <div class="overview-grid">
                    <div class="overview-content">
                        <h2>Welcome to <span class="text-primary">{{  $profile->name }}</span></h2>
                        <p>{{ $profile->about }}
                        </p>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <div class="stat-number">15+</div>
                                <div class="stat-label">Years Experience</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">10,000+</div>
                                <div class="stat-label">Vehicles Parts Delivered</div>
                            </div>
                        </div>
                    </div>
                    <div class="overview-image up-down-animation">
                        <img loading="lazy"  src="{{asset('storage/'.$profile->company_image)}}" alt="{{ $profile->name }}">
                    </div>
                </div>
            </div>
        </section>