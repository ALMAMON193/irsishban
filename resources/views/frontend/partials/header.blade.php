<div class="header section-padding-x">
    <div class="left">
        <a href="{{ route('home') }}">
            <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo" />
        </a>
    </div>
    <div class="nav-items">
        <a href="{{ route('home') }}" class="item active-item">Q-Banks</a>
        <a href="{{ route('last.review.index') }}" class="item">Last Minute Review</a>
        <a href="{{ route('certification.index') }}" class="item">Certifications</a>
        <a href="{{ route('final.coaching.review.index') }}" class="item">NP Live Final Coaching Review</a>
        <a href="{{ route('courses.index')}}" class="item">Courses</a>
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
