@php
    use App\Models\CMS;
    $courseHeroSection = CMS::where('section', 'course_hero_section')->latest()->first();
    $courseSubHeroSection = CMS::where('section', 'course_subhero_section')->latest()->first();
    $courseExpartSection = CMS::where('section', 'course_expert_section')->latest()->first();
    $courseEnrollSection = CMS::where('section', 'course_enroll_section')->latest()->first();
@endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Courses</title>
    <!-- css start -->
    <!-- plugin css -->

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}"/>
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/common.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/common-review.css') }}"/>
</head>
<body>
<!-- header start -->
@include('frontend.partials.header')
<!-- header end -->

<main class="home-page-content">
    <!-- banner start -->
    <div class="common-banner">
        <img src="{{ asset('frontend/assets/img/banner-cover.png') }}" alt="banner"/>
        <div class="gradient-overlay"></div>
        <div class="text-content">
            <h3 class="sub-title">
                {{$courseHeroSection->title ?? 'Get the best help you will need with our'}}</h3>
            <h1 class="title">{{$courseHeroSection->subtitle ?? 'Live Master Class'}}</h1>
            <p class="text">
                {!!   $courseHeroSection->description ?? ' Are you struggling with your exam? Did you fail on your previous
                attempt? We got you! We will help you have a smarter strategy to
                work with your time and a step-by-step guide to keep you focused and
                avoid wasting endless hours. Get access to our Live Master Class and
                pass your exam on the first try!' !!}

            </p>

            <div class="mt-5">
                <a href="{{ $courseHeroSection->button_link ?? '' }}" class="common-btn banner-btn">{{ $courseHeroSection->button_text ?? 'Book a Session Now!' }}</a>
            </div>
        </div>
    </div>
    <!-- banner end -->
    <!-- question bank section start -->
    <div
        class="question-bank-section section-with-img section-padding-x section-padding-y"
    >
        <div class="text-content">
            <h3 class="section-title">{{$courseSubHeroSection->title ?? 'What is a Live Master Class?'}}</h3>
            <p class="section-text mt-5">
                {!! $courseSubHeroSection->description ?? 'Master Class offers a selection of high-quality online courses
                taught by renowned subject matter experts across a diverse range of
                topics. These courses provide valuable insights, practical guidance,
                and motivational content. The Masterclass is a top-tier program,
                providing live instruction from NP experts and access to
                supplementary resources, making it an ideal option for those seeking
                to prepare for the exam.' !!}

            </p>
            <div class="bottom-content">
                <p>
                    {{ $courseSubHeroSection->card_content ?? 'Whether you are studying for a PMHNP, FNP [ ANCC, AANP ], or NCLEX
                    RN / PN, our question bank can help you achieve your goals.' }}

                </p>
                <div class="line"></div>
            </div>
            <div class="text-bottom">
                <h4 class="section-text">
                   {{ $courseSubHeroSection->subtitle ?? 'Sign up today and start mastering the material!' }}

                </h4>
            </div>
        </div>
        <div class="img-content">
            <img src=" {{ $courseSubHeroSection->image ?? asset('frontend/assets/img/female-doctor.png') }}" alt="doctor"/>
        </div>
    </div>
    <!-- question bank section end -->
    <!-- what to expect section start -->
    <div class="what-to-expect section-padding-x section-padding-y">
        <h3 class="section-title text-center">{{$courseExpartSection->title ?? 'What to Expect?'}}</h3>
        <div class="common-line-cards-container">
            <div class="top">
                <div class="item">
                    <div class="line-card-logo">
                        <img src="{{ asset('frontend/assets/img/line-card-logo.png') }}" alt="logo"/>
                    </div>
                    <h3 class="line-card-title">Intensive Review Sessions</h3>
                    <p class="line-card-text">
                        Dive deep into key concepts with our expert tutors who
                        understand the importance of last-minute revision. We'll focus
                        on the most crucial topics to ensure you're well-prepared.
                    </p>
                </div>
                <div class="card-vertical-line"></div>
                <div class="item">
                    <div class="line-card-logo">
                        <img src="{{ asset('frontend/assets/img/line-card-logo.png') }}" alt="logo"/>
                    </div>
                    <h3 class="line-card-title">Strategic Study Techniques</h3>
                    <p class="line-card-text">
                        Learn effective study strategies tailored for quick absorption
                        and retention. Our experienced instructors will guide you
                        through proven methods to maximize your understanding in a short
                        time.
                    </p>
                </div>
                <div class="card-vertical-line"></div>
                <div class="item">
                    <div class="line-card-logo">
                        <img src="{{ asset('frontend/assets/img/line-card-logo.png') }}" alt="logo"/>
                    </div>
                    <h3 class="line-card-title">Quick Recap of Essential Topics</h3>
                    <p class="line-card-text">
                        We'll prioritize the topics that are likely to appear on your
                        exam. Our goal is to streamline your study process and help you
                        recall vital information efficiently.
                    </p>
                </div>
            </div>
            <div class="middle-border-line">
                <svg
                    id="fullWidthLine"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 1600 2"
                    preserveAspectRatio="none"
                    fill="none"
                >
                    <path d="M0 1 H1600" stroke="#2B5BA0" stroke-width="2"/>
                </svg>

                <div class="dots">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="17"
                        height="16"
                        viewBox="0 0 17 16"
                        fill="none"
                    >
                        <circle
                            cx="8"
                            cy="8"
                            r="8"
                            transform="matrix(-1 0 0 1 16.5 0)"
                            fill="#F3BC00"
                        />
                    </svg>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="17"
                        height="16"
                        viewBox="0 0 17 16"
                        fill="none"
                    >
                        <circle
                            cx="8"
                            cy="8"
                            r="8"
                            transform="matrix(-1 0 0 1 16.5 0)"
                            fill="#F3BC00"
                        />
                    </svg>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="17"
                        height="16"
                        viewBox="0 0 17 16"
                        fill="none"
                    >
                        <circle
                            cx="8"
                            cy="8"
                            r="8"
                            transform="matrix(-1 0 0 1 16.5 0)"
                            fill="#F3BC00"
                        />
                    </svg>
                </div>
            </div>
            <div class="bottom">
                <div class="item">
                    <div class="line-card-logo">
                        <img src="{{ asset('frontend/assets/img/line-card-logo.png') }}" alt="logo"/>
                    </div>
                    <h3 class="line-card-title">Exam Simulation</h3>
                    <p class="line-card-text">
                        Experience the exam environment with our realistic practice
                        tests. This will not only help you manage your time effectively
                        but also familiarize you with the types of questions you may
                        encounter.
                    </p>
                </div>
                <div class="card-vertical-line"></div>
                <div class="item">
                    <div class="line-card-logo">
                        <img src="{{ asset('frontend/assets/img/line-card-logo.png') }}" alt="logo"/>
                    </div>
                    <h3 class="line-card-title">Personalized Q&A Sessions</h3>
                    <p class="line-card-text">
                        Got specific questions or areas of concern? Our instructors are
                        here to address them. Benefit from one-on-one interactions to
                        clarify doubts and strengthen your grasp on challenging topics.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- what to expect section end -->

    <!-- date-time-container-start -->
    <div class="date-time-section section-padding-x section-padding-y">
        <h3 class="section-title text-center">{{ $courseEnrollSection->title ?? 'Ready to Get Started?' }}</h3>
        <p class="section-text text-center mt-3">
            {{ $courseEnrollSection->subtitle ?? 'Enroll in one of the available classes below, choose the right one for
            you.' }}

        </p>
        <div class="date-time-heading">
            <h3 class="title">FNF/AGNP (ANCC/AANP) Class Schedules</h3>
            <h4 class="year">2024</h4>
        </div>
        <div class="date-time-container">
            <div class="item">July 27-28</div>
            <div class="item">August 24-25</div>
            <div class="item">September 28-29</div>
            <div class="item">October 26-27</div>
            <div class="item">November 23-24</div>
            <div class="item">December 28-29</div>
        </div>
        <div class="date-time-heading">
            <h3 class="title">NCLEX NXTGN RN/PN Class Schedules</h3>
            <h4 class="year">2024</h4>
        </div>
        <div class="date-time-container">
            <div class="item">July 27-28</div>
            <div class="item">August 24-25</div>
            <div class="item">September 28-29</div>
            <div class="item">October 26-27</div>
            <div class="item">November 23-24</div>
            <div class="item">December 28-29</div>
        </div>
    </div>
    <!-- date-time-container-end -->
</main>

<!-- footer start -->
@include('frontend.partials.footer')
<!-- footer end -->

<!-- js files -->
<script src="{{ asset('frontend/assets/js/jqueryv3.7.1.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugin.js') }}"></script>
</body>
</html>
