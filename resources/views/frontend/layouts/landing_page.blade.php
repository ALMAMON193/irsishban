@extends('frontend.app')
@section('content')
    @php
        use App\Models\CMS;
        $homeHeroSection = CMS::where('section', 'home_hero_section')->latest()->first();
        $homeSubHeroSection = CMS::where('section', 'home_sub_hero_section')->latest()->first();
        $homeWorkHeroSection = CMS::where('section', 'home_work_section')->latest()->first();
        $homeEnrollSection = CMS::where('section', 'home_Enroll_section')->latest()->first();

    @endphp
    <main class="home-page-content">
        <!-- banner start -->
        <div class="common-banner">
            <img src="{{ asset('frontend/assets/img/banner-cover.png') }}" alt="banner" />
            <div class="gradient-overlay"></div>
            <div class="text-content">
                <h3 class="sub-title">{{ !empty($homeHeroSection->title) ? $homeHeroSection->title : '' }}</h3>

                <h1 class="title">{{ !empty($homeHeroSection->subtitle) ? $homeHeroSection->subtitle : 'Question Bank' }}
                </h1>
                <p class="text">
                    {!! !empty($homeHeroSection->description)
                        ? $homeHeroSection->description
                        : ' Our question bank is a powerful tool designed to help you master the
                                                                                                                                                                                                          material and perform your best on your exam. It contains thousands
                                                                                                                                                                                                          of questions, organized by topic and difficulty level, covering all
                                                                                                                                                                                                          the key concepts and skills you need to know.' !!}

                </p>
                <div class="mt-5">
                    <a href="{{ !empty($homeHeroSection->button_link) ? $homeHeroSection->button_link : route('courses.index') }}"
                        class="common-btn banner-btn">
                        {{ !empty($homeHeroSection->button_text) ? $homeHeroSection->button_text : 'Start a Course' }}
                    </a>

                </div>
            </div>
        </div>
        <!-- banner end -->
        <!-- question bank section start -->
        <div class="question-bank-section section-with-img section-padding-x section-padding-y">
            <div class="text-content">
                <h3 class="section-title">
                    {{ $homeSubHeroSection->title ?? 'With Our Question Bank, You Can:' }}
                </h3>
                <ul class="section-text">

                    {!! $homeSubHeroSection->description ??
                        '     <li><span class="question-title">Build your confidence:</span> The more you practice, the more confident you will feel on exam day. Our question bank is the perfect tool to help you build your confidence and feel fully prepared.    </li>' !!}

                </ul>

                <div class="bottom-content">
                    <p>
                        {{ $homeSubHeroSection->card_content ??
                            ' Whether you are studying for a PMHNP, FNP [ ANCC, AANP ], or NCLEX RN / PN, our question bank can
                                                                                                                                                                        help you achieve your goals.' }}

                    </p>
                    <div class="line"></div>
                </div>

                <div class="text-bottom">
                    <h4 class="section-text">
                        {{ $homeSubHeroSection->subtitle ?? ' Sign up today and start mastering the material!' }}

                    </h4>
                </div>
            </div>

            <div class="img-content">
                <img src="{{ $homeSubHeroSection->image ?? asset('frontend/assets/img/female-doctor.png') }}"
                    alt="doctor-image">

            </div>
        </div>

        <!-- question bank section end -->
        <!-- how does it work section start -->
        <div class="how-does-it-work-section section-with-img section-padding-x section-padding-y">
            <div class="img-content">
                <img src="{{ $homeWorkHeroSection->image ?? asset('frontend/assets/img/arrow-board.png') }}" alt="photo">
            </div>
            <div class="text-content">
                <h3 class="section-title">
                    {{ $homeWorkHeroSection->title ?? 'How Does It Work?' }}
                </h3>
                <div class="section-text mt-2 mb-5">
                    {{ $homeWorkHeroSection->subtitle ?? 'Our question bank for nurses and nurse practitioners is a powerful tool designed to help you prepare for your certification or licensing exam.' }}
                </div>

                @if (empty($description))
                    <h4 class="sub-title mb-4">Here's how it works:</h4>
                    <ul class="question-list">
                        <li class="section-text">
                            <span class="question-title">Comprehensive coverage:</span>
                            Our question bank contains thousands of questions, covering all the key topics and concepts
                            you need to know for your exam. We work with nursing and nurse practitioner experts to
                            ensure our questions are up-to-date and relevant to your exam.
                        </li>
                        <li class="section-text">
                            <span class="question-title">Customizable quizzes:</span>
                            We can create quizzes based on your needs and preferences. This allows you to focus on the
                            topics you need the most help with and avoid wasting time on topics you already know well.
                        </li>
                        <li class="section-text">
                            <span class="question-title">Detailed Rationale:</span>
                            Each question in our question bank has detailed rationale and explanations. This allows you
                            to understand the underlying concepts and learn from your mistakes to improve your
                            performance and feel more confident on exam day.
                        </li>
                        <li class="section-text">
                            <span class="question-title">Performance tracking:</span>
                            Our question bank tracks your performance over time, so you can see your progress and
                            identify areas where you need to focus your study efforts.
                        </li>
                    </ul>
                    <div class="text-bottom">
                        <h4 class="section-text">
                            Whether you're a nurse or a nurse practitioner student, our question bank can help you
                            prepare for your exam and achieve your career goals. With comprehensive coverage,
                            customizable quizzes, detailed feedback, performance tracking, and realistic exam
                            simulation, our question bank is the perfect tool to help you succeed.
                        </h4>
                    </div>
                @else
                    <div class="description-content">
                        {!! $description !!}
                    </div>
                @endif
            </div>
        </div>


        <!-- how does it work section end -->

        <!-- get start cards start -->
        <div class=" get-start-cards section-padding-x section-padding-y ">
            <h3 class="section-title text-center">{{ $homeEnrollSection->title ?? 'Ready to get started?' }}</h3>
            <p class="section-text text-center mt-4 ">
                {{ $homeEnrollSection->subtitle ?? 'Enroll in one of the available classes below, choose the right one for you' }}

            </p>
            @foreach ($collection as $item)
            <div class="cards-container">
                <div class="common-card">
                    <div class="img-container">
                        <div class="gradient-overlay"></div>

                        <img src="{{ asset('frontend/assets/img/card.png') }}" alt="card">
                    </div>
                    <div class="info-container">
                        <div class="top-info">
                            <div class="top">
                                <div class="sub-title">12,48,892 Students Enrolled</div>
                                <div class="right">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                        viewBox="0 0 20 19" fill="none">
                                        <path
                                            d="M9.04894 0.927052C9.3483 0.00574112 10.6517 0.00573993 10.9511 0.927051L12.4697 5.60081C12.6035 6.01284 12.9875 6.2918 13.4207 6.2918H18.335C19.3037 6.2918 19.7065 7.53141 18.9228 8.10081L14.947 10.9894C14.5966 11.244 14.4499 11.6954 14.5838 12.1074L16.1024 16.7812C16.4017 17.7025 15.3472 18.4686 14.5635 17.8992L10.5878 15.0106C10.2373 14.756 9.7627 14.756 9.41221 15.0106L5.43648 17.8992C4.65276 18.4686 3.59828 17.7025 3.89763 16.7812L5.41623 12.1074C5.55011 11.6954 5.40345 11.244 5.05296 10.9894L1.07722 8.10081C0.293507 7.53141 0.696283 6.2918 1.66501 6.2918H6.57929C7.01252 6.2918 7.39647 6.01284 7.53035 5.60081L9.04894 0.927052Z"
                                            fill="#F3BC00" />
                                    </svg>
                                    <div class="rate">
                                        5.0
                                    </div>
                                </div>
                            </div>

                            <div class="title mt-3">FNP | AGNP Question Bank</div>
                            <div class="text mt-4">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy.
                            </div>
                        </div>
                        <div class="bottom-info">
                            <div class="title">
                                $39.00 USD <span class="small-text">/month</span>
                            </div>
                            <div>
                                <a href="" class="card-btn">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- get start cards end -->
    </main>
@endsection
