<div class="header section-padding-x">
    <div class="left">
        <a href="{{ asset('frontend/index.html') }}">
            <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo" />
        </a>
    </div>
    <div class="nav-items">
        <a href="{{ asset('frontend/index.html') }}" class="item active-item">Q-Banks</a>
        <a href="{{ asset('frontend/last-minute-review.html') }}" class="item">Last Minute Review</a>
        <a href="{{ asset('frontend/certifications.html') }}" class="item">Certifications</a>
        <a href="{{ asset('frontend/coaching-review.html') }}" class="item">NP Live Final Coaching Review</a>
        <a href="{{ asset('frontend/courses.html') }}" class="item">Courses</a>
    </div>
    <div class="right">
        @if (Auth::check())
            <a class="dashboard-btn common-btn" href="{{ route('dashboard') }}">Dashboard</a>
        @else
            <a class="login-btn" href="{{ route('login') }}">Login</a>
            <a class="trial-btn common-btn" href="">Free Trial</a>
        @endif
    </div>
</div>
