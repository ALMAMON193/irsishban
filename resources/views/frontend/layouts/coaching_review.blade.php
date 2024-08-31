@php
    use App\Models\CMS;


    $heroSection = CMS::where('section', 'coaching_review_hero_section')->latest()->first();
    $subHeroSection = CMS::where('section', 'coaching_review_sub_hero_section')->latest()->first();
    $reviewSection = CMS::where('section', 'coaching_review_main_section')->latest()->first();
    $outlineSection = CMS::where('section', 'coaching_review_outline_section')->latest()->first();
    $aboutUsSection = CMS::where('section', 'coaching_review_about_us_section')->latest()->first();
    $getStartedSection = CMS::where('section', 'coaching_review_get_started_section')->latest()->first();
    $scheduleSection = CMS::where('section', 'coaching_review_schedule_section')->latest()->first();

@endphp

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>NP Live Final Coaching Review</title>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/bootstrap.min.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/common.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/common-review.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/coaching-review.css') }}"/>
</head>
<body>
<!-- header start -->
@include('frontend.partials.header')

<!-- header end -->

<main class="home-page-content">
    <!-- coupon container start -->
    <div class="coupon-container">
        <div class="dimond">
            <span class="dimond-left">🔹</span>
            <span>🔹</span>
        </div>
        <div class="coupon-container-title">
            Use Coupon Code “NCLEXPREP10” for a 10% Discount!!
        </div>
        <div class="dimond">
            <span>🔹</span>
            <span class="dimond-right">🔹</span>
        </div>
    </div>
    <!-- coupon container end -->
    <!-- banner start -->
    <div class="common-banner">
        <img src="{{ asset('frontend/assets/img/banner-cover.png') }}" alt="banner"/>
        <div class="gradient-overlay"></div>
        <div class="text-content">
            <p class="text">{{$heroSection->title ?? 'Are you a nurse practitioner struggling and feeling overwhelmed with exam preparation?'}}
            </p>
            <h3 class="sub-title mt-2">{{ $heroSection->subtitle ?? 'Pass the NP exam on your first try with our' }}</h3>
            <h1 class="title">{!! $heroSection->description ?? 'Live Final Coaching Review🎓'!!}</h1>
            <p class="text">
                {!! $heroSection->subdescription ?? ' A proven exam prep with a 99% passing guarantee!' !!}

            </p>
            <div class="mt-5">
                <a href="{{$heroSection->button_link ?? ''}}"
                   class="common-btn banner-btn">{{$heroSection->button_text ?? 'Enroll Now & Ace Your Exam'}}</a>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- brands section start -->
    <div class="brands-section section-padding-x ">
        <div class="brand">
            <div>
                <img src="{{ asset('frontend/assets/img/brand-1.png') }}" alt="brand">
            </div>
            <div class="text">
                Approved by the Board of Vocational Nursing and Psychiatric Technician as a VN CE <span>provider #
                        15099</span> and VN IV BW <span>provider # 15125</span>.
            </div>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                 fill="none">
                <circle cx="6" cy="6" r="6" fill="white"/>
            </svg>
        </div>
        <div class="brand">
            <div>
                <img src="{{ asset('frontend/assets/img/brand-2.png') }}" alt="brand">
            </div>
            <div class="text">
                Pediatric Advanced Life Support <span>(PALS)</span>, Basic Life Support <span>(BLS)</span>, Advanced
                Cardiac Life Support <span>(ACLS)</span>
            </div>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                 fill="none">
                <circle cx="6" cy="6" r="6" fill="white"/>
            </svg>
        </div>
        <div class="brand">
            <div>
                <img src="{{ asset('frontend/assets/img/brand-3.png') }}" alt="brand">
            </div>
            <div class="text">
                Approved by the California Board of Registered Nursing, <span>Provider Number #17535</span> as a
                Continuing Education Provider <span>(CEP)</span>.
            </div>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12"
                 fill="none">
                <circle cx="6" cy="6" r="6" fill="white"/>
            </svg>
        </div>
        <div class="brand">
            <div>
                <img src="{{ asset('frontend/assets/img/brand-4.png') }}" alt="brand">
            </div>
            <div class="text">
                Licensed and Authorized Training Provider by the American Red Cross
            </div>
        </div>
    </div>
    <!-- brands section end -->

    <!-- question bank section start -->
    <div class="question-bank-section section-with-img section-padding-x section-padding-y ">
        <div class="img-content">
            <img src="{{ asset('frontend/assets/img/female-doctor.png') }}" alt="doctor">
        </div>
        <div class="text-content">
            <h3 class="section-title">
                {{$subHeroSection->title ?? 'Hello Nurse Practitioners,'}}

            </h3>
            {!! $subHeroSection->description ?? ' <p class="section-text mt-4">
                Embarking on your PMHNP board exam journey? Having a hard time finding the best online review
                course?
                PASS is the review center youve been searching for! Whether youre feeling swamped or just starting
                to
                look for the perfect review course, youve come to the right place,this is an opportunity for you!
            </p>
            <p class="section-text mt-3">
                My course is designed to simplify your study process, allowing you to focus on whats truly
                important.
                Im here to guide you every step of the way, offering clear guidance to streamline your studies.
            </p>
            <p class="section-text mt-3">
                I understand the pressure and stress exams can bring; Ive been in your shoes. Preparing for the
                exam is
                hard and can cause anxiety. Thats why Im committed to making your preparation journey as smooth
                and
                stress-free as possible. I’ve been doing this for almost 10 years; Ive helped thousands of students
                like you. I want to help you overcome it and make you feel comfortable and confident.
            </p>
            <p class="section-text mt-3">
                Join the ranks of students whove successfully passed their ANCC/AANP board exams with my help.
                Together, well not only prepare you for the exam but also ensure youre confident and ready to
                succeed.
            </p>
            <p class="section-text mt-3">
                Dont let exam prep anxiety hold you back. Embrace this opportunity to become more comfortable,
                confident, and prepared. Join us now and start your journey to passing the ANCC/AANP board exams
                with
                flying colors!
            </p>' !!}

        </div>

    </div>
    <!-- question bank section end -->

    <!-- how does it work section start -->
    <div class="how-does-it-work-section section-with-img section-padding-x">
        <div class="benefits">
            <div class="benefits-title">
                This is your chance to:
            </div>

            @if(!empty($subHeroSection->subdescription))
                {!! $subHeroSection->subdescription !!}
            @else
                <div class="benefits-list">
                    <div class="item">
                        <span>⭐ Learn from the best:</span>
                        Our instructor has extensive experience and a proven track record of success.
                    </div>
                    <div class="item">
                        <span>⭐ Develop essential skills:</span>
                        Master powerful test-taking strategies and enhance your critical thinking abilities.
                    </div>
                    <div class="item">
                        <span>⭐ Boost your confidence:</span>
                        Achieve the clarity and knowledge you need to walk into the exam with confidence.
                    </div>
                    <div class="item">
                        <span>⭐ Join a supportive community:</span>
                        Connect with fellow students and instructors, and experience the power of collaborative learning.
                    </div>
                </div>
            @endif

        </div>
    </div>

    <!-- how does it work section end -->


    <!-- coaching information start -->
    <div class="section-padding-x section-padding-y ">
        <h3 class="section-title text-center ">
            {{$reviewSection->title ?? ' What’s Included in this Review?'}}

        </h3>
        <p class="section-text text-center mt-3">
            {!! nl2br(e($reviewSection->subtitle ?? "Our Live Final Coaching Review is designed to offer an in-depth understanding and hands-on experience, ensuring you’re fully equipped to excel in your exams.")) !!}
        </p>

        <div class="coaching-banner">
            <div class="left-content">
                <div class="title">LIVE</div>
                <div class="text">2 DAY SESSION</div>
            </div>
            <div class="right-content">
                <div class="title">FINAL COACHING REVIEW</div>
                <div class="right-bottom">
                    <div>
                        <div class="sub-title">
                            BONUS +
                        </div>
                        <div class="text">
                            Mnemonics
                        </div>
                    </div>
                    <div>
                        <div class="sub-title">
                            BONUS +
                        </div>
                        <div class="text">
                            Practice Questions
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="coaching-benefits mt-5">

            {!! $reviewSection->description ??' <div class="item">
                <span>✅ 99% Pass Rate:</span> Our proven approach and expert instructor have helped countless
                students
                achieve their goals. Join the ranks of our success stories and feel confident on exam day
            </div>
            <div class="item">
                <span>✅ Master Test-Taking Strategies:</span> Learn powerful techniques and frameworks to
                confidently
                tackle any question. Unravel the exams secrets and dominate every domain.
            </div>
            <div class="item">
                <span>✅ Deep Dive into Domains 1-5:</span> We systematically cover all essential PMHNP domains,
                ensuring
                your knowledge is rock-solid and ready for any challenge.

            </div>
            <div class="item">
                <span>✅ Test Your Knowledge with Magic Recipe:</span> Test your understanding and identify areas for
                improvement with our personalized feedback system. Sharpen your skills and gain laser focus on your
                weakest areas.

            </div>
            <div class="item">
                <span>✅ Live, Interactive Coaching:</span> Engage with our PMHNP expert in a 2-day,
                3-hour-per-session
                livestream webinar. Ask questions, get immediate feedback, and enjoy real-time support.

            </div>
            <div class="item">
                <span>✅ Real-time Q&A:</span> No question goes unanswered! Our instructor is here to guide you every
                step of the way. Get your burning doubts cleared and feel confident approaching any scenario.

            </div>
            <div class="item">
                <span>✅ CEU-Accredited:</span> Earn valuable continuing education units while mastering the exam.
                This
                demonstrates your commitment to professional development and boosts your resume.

            </div>
            <div class="item">
                <span>✅ Convenient Schedule:</span> Attend our live webinars on Saturdays and Sundays, 9 AM - 12 PM
                (PST). This flexible schedule allows you to fit your preparation around your existing commitments.

            </div>
            <div class="item">
                <span>✅ Convenient Schedule:</span> Attend our live webinars on Saturdays and Sundays, 9 AM - 12 PM
                (PST). This flexible schedule allows you to fit your preparation around your existing commitments.

            </div>' !!}

        </div>
        <div class="coaching-benefits-title mt-5">
            This is your chance to:
        </div>

        <div class="coaching-benefits mt-4">
            {!! $reviewSection->subdescription ?? '<div class="item">
                    <span>✅ Practice Questions, Mnemonics and Flashcards</span> that will be presented in the class
                </div>
                <div class="item">
                    <span>✅ PMHNP Review Community:</span> Access to the free and private community (FB and Kajabi)
                    where
                    you will get full of free resources, coupon discounts and more.
                </div>'!!}
            </div>
            <div class="mt-5 d-flex justify-content-center">
                <a href="{{$reviewSection->button_link ?? ''}}"
                   class="common-btn enroll-now-btn">{{$reviewSection->button_text ?? 'Enroll Now'}}</a>
            </div>
        </div>
        <!-- coaching information end -->

        <!-- coaching schedule section start -->
        <div class="coaching-schedule-container section-padding-x section-padding-y ">
            <div class="section-title text-center ">
                {{$scheduleSection->title ?? 'So what exactly you will learn when you take the live class?
                We will discuss the topic outlined below.'}}

            </div>
            <div class="coaching-details-container">
                <div class="coaching-details-title">
                    Coaching Details and Topics
                </div>
                <div class="coaching-details-list">
                    <div class="item">
                        <div class="title">Format:</div>
                        <div class="text">Live, Interactive Webinar with realtime Q&A</div>
                    </div>
                    <div class="item">
                        <div class="title">Date:</div>
                        <div class="text">Saturday & Sunday (9AM - 12PM) PST</div>
                    </div>
                    <div class="item">
                        <div class="title">Instructor:</div>
                        <div class="text">Dr. Peter Morante</div>
                    </div>
                </div>
                <div class="coaching-details-schedule-container">
                    <!-- day 1 schedule -->
                    <div class="schedule-item-container">
                        <div class="day">Day 1</div>
                        <div class="all-schedules">
                            <div class="item">
                                <div class="time-range">
                                    9:00 AM - 9:10 AM:
                                </div>
                                <div class="schedule-info">
                                    Registration and Welcome Remarks Introduction to the day's objectives Overview of
                                    the
                                    PMHNP exam structure
                                </div>
                            </div>
                            <div class="item">
                                <div class="time-range">
                                    9:00 AM - 9:10 AM:
                                </div>
                                <div class="schedule-info">
                                    Registration and Welcome Remarks Introduction to the day's objectives Overview of
                                    the
                                    PMHNP exam structure
                                </div>
                            </div>
                            <div class="item">
                                <div class="time-range">
                                    9:00 AM - 9:10 AM:
                                </div>
                                <div class="schedule-info">
                                    Registration and Welcome Remarks Introduction to the day's objectives Overview of
                                    the
                                    PMHNP exam structure
                                </div>
                            </div>
                            <div class="item">
                                <div class="time-range">
                                    9:00 AM - 9:10 AM:
                                </div>
                                <div class="schedule-info">
                                    Registration and Welcome Remarks Introduction to the day's objectives Overview of
                                    the
                                    PMHNP exam structure
                                </div>
                            </div>
                            <div class="item">
                                <div class="time-range">
                                    9:00 AM - 9:10 AM:
                                </div>
                                <div class="schedule-info">
                                    Registration and Welcome Remarks Introduction to the day's objectives Overview of
                                    the
                                    PMHNP exam structure
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- day 2 schedule -->
                    <div class="schedule-item-container">
                        <div class="day">Day 2</div>
                        <div class="all-schedules">
                            <div class="item">
                                <div class="time-range">
                                    9:00 AM - 9:10 AM:
                                </div>
                                <div class="schedule-info">
                                    Registration and Welcome Remarks Introduction to the day's objectives Overview of
                                    the
                                    PMHNP exam structure
                                </div>
                            </div>
                            <div class="item">
                                <div class="time-range">
                                    9:00 AM - 9:10 AM:
                                </div>
                                <div class="schedule-info">
                                    Registration and Welcome Remarks Introduction to the day's objectives Overview of
                                    the
                                    PMHNP exam structure
                                </div>
                            </div>
                            <div class="item">
                                <div class="time-range">
                                    9:00 AM - 9:10 AM:
                                </div>
                                <div class="schedule-info">
                                    Registration and Welcome Remarks Introduction to the day's objectives Overview of
                                    the
                                    PMHNP exam structure
                                </div>
                            </div>
                            <div class="item">
                                <div class="time-range">
                                    9:00 AM - 9:10 AM:
                                </div>
                                <div class="schedule-info">
                                    Registration and Welcome Remarks Introduction to the day's objectives Overview of
                                    the
                                    PMHNP exam structure
                                </div>
                            </div>
                            <div class="item">
                                <div class="time-range">
                                    9:00 AM - 9:10 AM:
                                </div>
                                <div class="schedule-info">
                                    Registration and Welcome Remarks Introduction to the day's objectives Overview of
                                    the
                                    PMHNP exam structure
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- coaching schedule section end -->

        <!-- our expert section start -->
        <div class="our-expert">
            <div class="img-container">
                <img src="{{ asset('frontend/assets/img/male-doctor.png') }}" alt="doctor">
            </div>
            <div class="bottom-container">
                <div class="testimonial">
                    <h3 class="section-title text-center">About Our Expert</h3>
                    <h4 class="expert-name mt-4 text-center ">Dr. Steve Zee</h4>
                    <p class="section-text text-center mt-5 ">
                        DNP, PMHNP-BC, FNP-BC, NP-C, Gero-BC, Medsurg-BC, PMH-BC, LNC, APRN, RN-BC, CEO of MAATC
                    </p>
                    <div class="fancy-text mt-4">
                        <svg class="fancy-left" xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                             viewBox="0 0 42 42" fill="none">
                            <path
                                d="M13.0635 20.3941H5.59687C5.59687 15.8394 8.33154 11.9101 12.2422 10.1648L11.1035 7.60742C6.20821 9.78209 2.79688 14.6914 2.79688 20.3941V30.6608C2.79688 31.6509 3.19021 32.6005 3.89034 33.3006C4.59048 34.0008 5.54007 34.3941 6.53021 34.3941H16.7969V24.1274C16.7969 23.1373 16.4035 22.1877 15.7034 21.4876C15.0033 20.7874 14.0537 20.3941 13.0635 20.3941ZM35.4635 20.3941H27.9969C27.9969 15.8394 30.7315 11.9101 34.6422 10.1648L33.5035 7.60742C28.6082 9.78209 25.1969 14.6914 25.1969 20.3941V30.6608C25.1969 31.6509 25.5902 32.6005 26.2903 33.3006C26.9905 34.0008 27.9401 34.3941 28.9302 34.3941H39.1969V24.1274C39.1969 23.1373 38.8035 22.1877 38.1034 21.4876C37.4033 20.7874 36.4537 20.3941 35.4635 20.3941Z"
                                fill="#2B5BA0"/>
                        </svg>
                        <p class="section-text text-center section-text-bold ">
                            My goal is to help many people and teach them my best and, in turn, be better than I was
                            yesterday. I'm here to help you through every step of the way. I'll work with you to ensure
                            the
                            process is seamless and successful.
                        </p>
                        <svg class="fancy-right" xmlns="http://www.w3.org/2000/svg" width="42" height="42"
                             viewBox="0 0 42 42" fill="none">
                            <path
                                d="M28.9365 20.3941H36.4031C36.4031 15.8394 33.6685 11.9101 29.7578 10.1648L30.8965 7.60742C35.7918 9.78209 39.2031 14.6914 39.2031 20.3941V30.6608C39.2031 31.6509 38.8098 32.6005 38.1097 33.3006C37.4095 34.0008 36.4599 34.3941 35.4698 34.3941H25.2031V24.1274C25.2031 23.1373 25.5965 22.1877 26.2966 21.4876C26.9967 20.7874 27.9463 20.3941 28.9365 20.3941ZM6.53646 20.3941H14.0031C14.0031 15.8394 11.2685 11.9101 7.35779 10.1648L8.49646 7.60742C13.3918 9.78209 16.8031 14.6914 16.8031 20.3941V30.6608C16.8031 31.6509 16.4098 32.6005 15.7097 33.3006C15.0095 34.0008 14.0599 34.3941 13.0698 34.3941H2.80313V24.1274C2.80313 23.1373 3.19646 22.1877 3.8966 21.4876C4.59673 20.7874 5.54632 20.3941 6.53646 20.3941Z"
                                fill="#2B5BA0"/>
                        </svg>
                    </div>
                    <p class="section-text mt-3 text-center ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                        the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p class="section-text mt-3 text-center ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                        the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <p class="section-text mt-3 text-center ">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                        the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
        <!-- our expert section end -->

        <!-- client review section start -->
        <div class="client-reviews-section section-padding-x section-padding-y">
            <h3 class="section-title text-center">
                {{$aboutUsSection->title ?? 'Heres What Some of Our Students Say About Us'}}

            </h3>
            <p class="section-text text-center mt-4">
                {!! nl2br($aboutUsSection->description ?? "Wondering if our coaching program makes a difference? We've helped students like you gain confidence and exam success. \nSee what others say about us.") !!}
        </p>

        <!-- text review slider start -->
        <div class="text-reviews-slider mt-5">
            <div class="slider">
                <div class="item">
                    <div class="item-top">
                        <div class="top-content">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_6028_1028)">
                                        <path
                                            d="M2.81274 45.7739C3.87633 52.3725 10.0908 56.8617 16.6894 55.7981C23.288 54.7345 27.7772 48.5201 26.7136 41.9214C25.65 35.3228 19.4356 30.8336 12.837 31.8972C10.8609 32.2157 9.12117 33.0271 7.61096 34.1394C8.22662 24.4825 15.4399 16.1515 25.3908 14.5476C27.0375 14.2822 28.1622 12.7251 27.8968 11.0784C27.6314 9.4317 26.0744 8.30694 24.4276 8.57236C9.58369 10.965 -0.539193 24.9782 1.85342 39.8222L2.81274 45.7739ZM32.6653 40.9621C33.7289 47.5607 39.9434 52.0499 46.542 50.9863C53.1406 49.9227 57.6298 43.7083 56.5662 37.1097C55.5026 30.511 49.2882 26.0218 42.6895 27.0854C40.7135 27.404 38.9738 28.2154 37.4635 29.3277C38.0792 19.6707 45.2925 11.3397 55.2433 9.73582C56.8901 9.47039 58.0148 7.91336 57.7494 6.26665C57.484 4.61993 55.927 3.49517 54.2802 3.76059C39.4363 6.15321 29.3134 20.1665 31.706 35.0104L32.6653 40.9621Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6028_1028">
                                            <rect width="61" height="61" fill="white"
                                                  transform="translate(0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div>
                                <h4 class="user-name">Marci Shimoff</h4>
                                <div class="ratings">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_5960_2463)">
                                        <path
                                            d="M61.2656 19.9074C61.2656 13.2236 55.8447 7.80273 49.1609 7.80273C42.4771 7.80273 37.0562 13.2236 37.0562 19.9074C37.0562 26.5912 42.4771 32.0121 49.1609 32.0121C51.1625 32.0121 53.0092 31.4879 54.6771 30.6301C52.5326 40.066 44.0855 47.143 34.0063 47.143C32.3383 47.143 30.9801 48.5012 30.9801 50.1691C30.9801 51.8371 32.3383 53.1953 34.0063 53.1953C49.0418 53.1953 61.2656 40.9715 61.2656 25.9359V19.9074ZM31.0277 19.9074C31.0277 13.2236 25.6068 7.80273 18.923 7.80273C12.2393 7.80273 6.81836 13.2236 6.81836 19.9074C6.81836 26.5912 12.2393 32.0121 18.923 32.0121C20.9246 32.0121 22.7713 31.4879 24.4393 30.6301C22.2947 40.066 13.8477 47.143 3.76836 47.143C2.10039 47.143 0.742188 48.5012 0.742188 50.1691C0.742188 51.8371 2.10039 53.1953 3.76836 53.1953C18.8039 53.1953 31.0277 40.9715 31.0277 25.9359V19.9074Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2463">
                                            <rect width="61" height="61" fill="white"
                                                  transform="matrix(-1 0 0 -1 61.5 61)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="review-text">
                            “This technology is a gift for humanity and a game changer as
                            living in energetic coherence becomes more a necessity than a
                            luxury. This may be particularly helpful for people who work
                            in the fields of healing, coaching and transformation, where
                            it's imperative to stay in their highest energy while helping
                            others."
                        </div>
                        <div class="user-profile">
                            <img src="{{ asset('frontend/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                    <div class="item-bottom"></div>
                </div>
                <div class="item">
                    <div class="item-top">
                        <div class="top-content">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_6028_1028)">
                                        <path
                                            d="M2.81274 45.7739C3.87633 52.3725 10.0908 56.8617 16.6894 55.7981C23.288 54.7345 27.7772 48.5201 26.7136 41.9214C25.65 35.3228 19.4356 30.8336 12.837 31.8972C10.8609 32.2157 9.12117 33.0271 7.61096 34.1394C8.22662 24.4825 15.4399 16.1515 25.3908 14.5476C27.0375 14.2822 28.1622 12.7251 27.8968 11.0784C27.6314 9.4317 26.0744 8.30694 24.4276 8.57236C9.58369 10.965 -0.539193 24.9782 1.85342 39.8222L2.81274 45.7739ZM32.6653 40.9621C33.7289 47.5607 39.9434 52.0499 46.542 50.9863C53.1406 49.9227 57.6298 43.7083 56.5662 37.1097C55.5026 30.511 49.2882 26.0218 42.6895 27.0854C40.7135 27.404 38.9738 28.2154 37.4635 29.3277C38.0792 19.6707 45.2925 11.3397 55.2433 9.73582C56.8901 9.47039 58.0148 7.91336 57.7494 6.26665C57.484 4.61993 55.927 3.49517 54.2802 3.76059C39.4363 6.15321 29.3134 20.1665 31.706 35.0104L32.6653 40.9621Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6028_1028">
                                            <rect width="61" height="61" fill="white"
                                                  transform="translate(0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div>
                                <h4 class="user-name">Marci Shimoff</h4>
                                <div class="ratings">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_5960_2463)">
                                        <path
                                            d="M61.2656 19.9074C61.2656 13.2236 55.8447 7.80273 49.1609 7.80273C42.4771 7.80273 37.0562 13.2236 37.0562 19.9074C37.0562 26.5912 42.4771 32.0121 49.1609 32.0121C51.1625 32.0121 53.0092 31.4879 54.6771 30.6301C52.5326 40.066 44.0855 47.143 34.0063 47.143C32.3383 47.143 30.9801 48.5012 30.9801 50.1691C30.9801 51.8371 32.3383 53.1953 34.0063 53.1953C49.0418 53.1953 61.2656 40.9715 61.2656 25.9359V19.9074ZM31.0277 19.9074C31.0277 13.2236 25.6068 7.80273 18.923 7.80273C12.2393 7.80273 6.81836 13.2236 6.81836 19.9074C6.81836 26.5912 12.2393 32.0121 18.923 32.0121C20.9246 32.0121 22.7713 31.4879 24.4393 30.6301C22.2947 40.066 13.8477 47.143 3.76836 47.143C2.10039 47.143 0.742188 48.5012 0.742188 50.1691C0.742188 51.8371 2.10039 53.1953 3.76836 53.1953C18.8039 53.1953 31.0277 40.9715 31.0277 25.9359V19.9074Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2463">
                                            <rect width="61" height="61" fill="white"
                                                  transform="matrix(-1 0 0 -1 61.5 61)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="review-text">
                            “This technology is a gift for humanity and a game changer as
                            living in energetic coherence becomes more a necessity than a
                            luxury. This may be particularly helpful for people who work
                            in the fields of healing, coaching and transformation, where
                            it's imperative to stay in their highest energy while helping
                            others."
                        </div>
                        <div class="user-profile">
                            <img src="{{ asset('frontend/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                    <div class="item-bottom"></div>
                </div>
                <div class="item">
                    <div class="item-top">
                        <div class="top-content">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_6028_1028)">
                                        <path
                                            d="M2.81274 45.7739C3.87633 52.3725 10.0908 56.8617 16.6894 55.7981C23.288 54.7345 27.7772 48.5201 26.7136 41.9214C25.65 35.3228 19.4356 30.8336 12.837 31.8972C10.8609 32.2157 9.12117 33.0271 7.61096 34.1394C8.22662 24.4825 15.4399 16.1515 25.3908 14.5476C27.0375 14.2822 28.1622 12.7251 27.8968 11.0784C27.6314 9.4317 26.0744 8.30694 24.4276 8.57236C9.58369 10.965 -0.539193 24.9782 1.85342 39.8222L2.81274 45.7739ZM32.6653 40.9621C33.7289 47.5607 39.9434 52.0499 46.542 50.9863C53.1406 49.9227 57.6298 43.7083 56.5662 37.1097C55.5026 30.511 49.2882 26.0218 42.6895 27.0854C40.7135 27.404 38.9738 28.2154 37.4635 29.3277C38.0792 19.6707 45.2925 11.3397 55.2433 9.73582C56.8901 9.47039 58.0148 7.91336 57.7494 6.26665C57.484 4.61993 55.927 3.49517 54.2802 3.76059C39.4363 6.15321 29.3134 20.1665 31.706 35.0104L32.6653 40.9621Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6028_1028">
                                            <rect width="61" height="61" fill="white"
                                                  transform="translate(0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div>
                                <h4 class="user-name">Marci Shimoff</h4>
                                <div class="ratings">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_5960_2463)">
                                        <path
                                            d="M61.2656 19.9074C61.2656 13.2236 55.8447 7.80273 49.1609 7.80273C42.4771 7.80273 37.0562 13.2236 37.0562 19.9074C37.0562 26.5912 42.4771 32.0121 49.1609 32.0121C51.1625 32.0121 53.0092 31.4879 54.6771 30.6301C52.5326 40.066 44.0855 47.143 34.0063 47.143C32.3383 47.143 30.9801 48.5012 30.9801 50.1691C30.9801 51.8371 32.3383 53.1953 34.0063 53.1953C49.0418 53.1953 61.2656 40.9715 61.2656 25.9359V19.9074ZM31.0277 19.9074C31.0277 13.2236 25.6068 7.80273 18.923 7.80273C12.2393 7.80273 6.81836 13.2236 6.81836 19.9074C6.81836 26.5912 12.2393 32.0121 18.923 32.0121C20.9246 32.0121 22.7713 31.4879 24.4393 30.6301C22.2947 40.066 13.8477 47.143 3.76836 47.143C2.10039 47.143 0.742188 48.5012 0.742188 50.1691C0.742188 51.8371 2.10039 53.1953 3.76836 53.1953C18.8039 53.1953 31.0277 40.9715 31.0277 25.9359V19.9074Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2463">
                                            <rect width="61" height="61" fill="white"
                                                  transform="matrix(-1 0 0 -1 61.5 61)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="review-text">
                            “This technology is a gift for humanity and a game changer as
                            living in energetic coherence becomes more a necessity than a
                            luxury. This may be particularly helpful for people who work
                            in the fields of healing, coaching and transformation, where
                            it's imperative to stay in their highest energy while helping
                            others."
                        </div>
                        <div class="user-profile">
                            <img src="{{ asset('frontend/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                    <div class="item-bottom"></div>
                </div>
                <div class="item">
                    <div class="item-top">
                        <div class="top-content">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_6028_1028)">
                                        <path
                                            d="M2.81274 45.7739C3.87633 52.3725 10.0908 56.8617 16.6894 55.7981C23.288 54.7345 27.7772 48.5201 26.7136 41.9214C25.65 35.3228 19.4356 30.8336 12.837 31.8972C10.8609 32.2157 9.12117 33.0271 7.61096 34.1394C8.22662 24.4825 15.4399 16.1515 25.3908 14.5476C27.0375 14.2822 28.1622 12.7251 27.8968 11.0784C27.6314 9.4317 26.0744 8.30694 24.4276 8.57236C9.58369 10.965 -0.539193 24.9782 1.85342 39.8222L2.81274 45.7739ZM32.6653 40.9621C33.7289 47.5607 39.9434 52.0499 46.542 50.9863C53.1406 49.9227 57.6298 43.7083 56.5662 37.1097C55.5026 30.511 49.2882 26.0218 42.6895 27.0854C40.7135 27.404 38.9738 28.2154 37.4635 29.3277C38.0792 19.6707 45.2925 11.3397 55.2433 9.73582C56.8901 9.47039 58.0148 7.91336 57.7494 6.26665C57.484 4.61993 55.927 3.49517 54.2802 3.76059C39.4363 6.15321 29.3134 20.1665 31.706 35.0104L32.6653 40.9621Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6028_1028">
                                            <rect width="61" height="61" fill="white"
                                                  transform="translate(0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div>
                                <h4 class="user-name">Marci Shimoff</h4>
                                <div class="ratings">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_5960_2463)">
                                        <path
                                            d="M61.2656 19.9074C61.2656 13.2236 55.8447 7.80273 49.1609 7.80273C42.4771 7.80273 37.0562 13.2236 37.0562 19.9074C37.0562 26.5912 42.4771 32.0121 49.1609 32.0121C51.1625 32.0121 53.0092 31.4879 54.6771 30.6301C52.5326 40.066 44.0855 47.143 34.0063 47.143C32.3383 47.143 30.9801 48.5012 30.9801 50.1691C30.9801 51.8371 32.3383 53.1953 34.0063 53.1953C49.0418 53.1953 61.2656 40.9715 61.2656 25.9359V19.9074ZM31.0277 19.9074C31.0277 13.2236 25.6068 7.80273 18.923 7.80273C12.2393 7.80273 6.81836 13.2236 6.81836 19.9074C6.81836 26.5912 12.2393 32.0121 18.923 32.0121C20.9246 32.0121 22.7713 31.4879 24.4393 30.6301C22.2947 40.066 13.8477 47.143 3.76836 47.143C2.10039 47.143 0.742188 48.5012 0.742188 50.1691C0.742188 51.8371 2.10039 53.1953 3.76836 53.1953C18.8039 53.1953 31.0277 40.9715 31.0277 25.9359V19.9074Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2463">
                                            <rect width="61" height="61" fill="white"
                                                  transform="matrix(-1 0 0 -1 61.5 61)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="review-text">
                            “This technology is a gift for humanity and a game changer as
                            living in energetic coherence becomes more a necessity than a
                            luxury. This may be particularly helpful for people who work
                            in the fields of healing, coaching and transformation, where
                            it's imperative to stay in their highest energy while helping
                            others."
                        </div>
                        <div class="user-profile">
                            <img src="{{ asset('frontend/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                    <div class="item-bottom"></div>
                </div>
                <div class="item">
                    <div class="item-top">
                        <div class="top-content">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_6028_1028)">
                                        <path
                                            d="M2.81274 45.7739C3.87633 52.3725 10.0908 56.8617 16.6894 55.7981C23.288 54.7345 27.7772 48.5201 26.7136 41.9214C25.65 35.3228 19.4356 30.8336 12.837 31.8972C10.8609 32.2157 9.12117 33.0271 7.61096 34.1394C8.22662 24.4825 15.4399 16.1515 25.3908 14.5476C27.0375 14.2822 28.1622 12.7251 27.8968 11.0784C27.6314 9.4317 26.0744 8.30694 24.4276 8.57236C9.58369 10.965 -0.539193 24.9782 1.85342 39.8222L2.81274 45.7739ZM32.6653 40.9621C33.7289 47.5607 39.9434 52.0499 46.542 50.9863C53.1406 49.9227 57.6298 43.7083 56.5662 37.1097C55.5026 30.511 49.2882 26.0218 42.6895 27.0854C40.7135 27.404 38.9738 28.2154 37.4635 29.3277C38.0792 19.6707 45.2925 11.3397 55.2433 9.73582C56.8901 9.47039 58.0148 7.91336 57.7494 6.26665C57.484 4.61993 55.927 3.49517 54.2802 3.76059C39.4363 6.15321 29.3134 20.1665 31.706 35.0104L32.6653 40.9621Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6028_1028">
                                            <rect width="61" height="61" fill="white"
                                                  transform="translate(0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div>
                                <h4 class="user-name">Marci Shimoff</h4>
                                <div class="ratings">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_5960_2463)">
                                        <path
                                            d="M61.2656 19.9074C61.2656 13.2236 55.8447 7.80273 49.1609 7.80273C42.4771 7.80273 37.0562 13.2236 37.0562 19.9074C37.0562 26.5912 42.4771 32.0121 49.1609 32.0121C51.1625 32.0121 53.0092 31.4879 54.6771 30.6301C52.5326 40.066 44.0855 47.143 34.0063 47.143C32.3383 47.143 30.9801 48.5012 30.9801 50.1691C30.9801 51.8371 32.3383 53.1953 34.0063 53.1953C49.0418 53.1953 61.2656 40.9715 61.2656 25.9359V19.9074ZM31.0277 19.9074C31.0277 13.2236 25.6068 7.80273 18.923 7.80273C12.2393 7.80273 6.81836 13.2236 6.81836 19.9074C6.81836 26.5912 12.2393 32.0121 18.923 32.0121C20.9246 32.0121 22.7713 31.4879 24.4393 30.6301C22.2947 40.066 13.8477 47.143 3.76836 47.143C2.10039 47.143 0.742188 48.5012 0.742188 50.1691C0.742188 51.8371 2.10039 53.1953 3.76836 53.1953C18.8039 53.1953 31.0277 40.9715 31.0277 25.9359V19.9074Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2463">
                                            <rect width="61" height="61" fill="white"
                                                  transform="matrix(-1 0 0 -1 61.5 61)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="review-text">
                            “This technology is a gift for humanity and a game changer as
                            living in energetic coherence becomes more a necessity than a
                            luxury. This may be particularly helpful for people who work
                            in the fields of healing, coaching and transformation, where
                            it's imperative to stay in their highest energy while helping
                            others."
                        </div>
                        <div class="user-profile">
                            <img src="{{ asset('frontend/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                    <div class="item-bottom"></div>
                </div>
                <div class="item">
                    <div class="item-top">
                        <div class="top-content">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_6028_1028)">
                                        <path
                                            d="M2.81274 45.7739C3.87633 52.3725 10.0908 56.8617 16.6894 55.7981C23.288 54.7345 27.7772 48.5201 26.7136 41.9214C25.65 35.3228 19.4356 30.8336 12.837 31.8972C10.8609 32.2157 9.12117 33.0271 7.61096 34.1394C8.22662 24.4825 15.4399 16.1515 25.3908 14.5476C27.0375 14.2822 28.1622 12.7251 27.8968 11.0784C27.6314 9.4317 26.0744 8.30694 24.4276 8.57236C9.58369 10.965 -0.539193 24.9782 1.85342 39.8222L2.81274 45.7739ZM32.6653 40.9621C33.7289 47.5607 39.9434 52.0499 46.542 50.9863C53.1406 49.9227 57.6298 43.7083 56.5662 37.1097C55.5026 30.511 49.2882 26.0218 42.6895 27.0854C40.7135 27.404 38.9738 28.2154 37.4635 29.3277C38.0792 19.6707 45.2925 11.3397 55.2433 9.73582C56.8901 9.47039 58.0148 7.91336 57.7494 6.26665C57.484 4.61993 55.927 3.49517 54.2802 3.76059C39.4363 6.15321 29.3134 20.1665 31.706 35.0104L32.6653 40.9621Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_6028_1028">
                                            <rect width="61" height="61" fill="white"
                                                  transform="translate(0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div>
                                <h4 class="user-name">Marci Shimoff</h4>
                                <div class="ratings">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19"
                                         viewBox="0 0 20 19" fill="none">
                                        <g clip-path="url(#clip0_5960_2439)">
                                            <path
                                                d="M18.8388 6.79665L12.9978 5.90444L10.3798 0.327938C10.1843 -0.0884792 9.50105 -0.0884792 9.30551 0.327938L6.68826 5.90444L0.847344 6.79665C0.739501 6.81321 0.638308 6.85918 0.554876 6.92949C0.471444 6.9998 0.408999 7.09174 0.374398 7.19522C0.339796 7.29869 0.334377 7.4097 0.358734 7.51606C0.383091 7.62241 0.436283 7.72 0.512469 7.7981L4.7558 12.1475L3.75276 18.2964C3.73485 18.4064 3.74824 18.5192 3.79141 18.6219C3.83457 18.7246 3.90576 18.8131 3.99685 18.8772C4.08794 18.9414 4.19524 18.9787 4.30649 18.9847C4.41774 18.9908 4.52845 18.9654 4.62597 18.9115L9.84305 16.0283L15.0601 18.9123C15.1577 18.9662 15.2684 18.9916 15.3796 18.9855C15.4909 18.9794 15.5982 18.9422 15.6893 18.878C15.7803 18.8139 15.8515 18.7254 15.8947 18.6227C15.9379 18.5199 15.9513 18.4072 15.9333 18.2972L14.9303 12.1483L19.1736 7.7989C19.25 7.72082 19.3034 7.62317 19.3279 7.5167C19.3524 7.41023 19.347 7.29907 19.3124 7.19545C19.2778 7.09184 19.2153 6.99978 19.1317 6.92942C19.0481 6.85905 18.9468 6.81311 18.8388 6.79665Z"
                                                fill="#FFC107"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5960_2439">
                                                <rect width="19" height="19" fill="white"
                                                      transform="translate(0.335938)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="61"
                                     viewBox="0 0 62 61" fill="none">
                                    <g opacity="0.05" clip-path="url(#clip0_5960_2463)">
                                        <path
                                            d="M61.2656 19.9074C61.2656 13.2236 55.8447 7.80273 49.1609 7.80273C42.4771 7.80273 37.0562 13.2236 37.0562 19.9074C37.0562 26.5912 42.4771 32.0121 49.1609 32.0121C51.1625 32.0121 53.0092 31.4879 54.6771 30.6301C52.5326 40.066 44.0855 47.143 34.0063 47.143C32.3383 47.143 30.9801 48.5012 30.9801 50.1691C30.9801 51.8371 32.3383 53.1953 34.0063 53.1953C49.0418 53.1953 61.2656 40.9715 61.2656 25.9359V19.9074ZM31.0277 19.9074C31.0277 13.2236 25.6068 7.80273 18.923 7.80273C12.2393 7.80273 6.81836 13.2236 6.81836 19.9074C6.81836 26.5912 12.2393 32.0121 18.923 32.0121C20.9246 32.0121 22.7713 31.4879 24.4393 30.6301C22.2947 40.066 13.8477 47.143 3.76836 47.143C2.10039 47.143 0.742188 48.5012 0.742188 50.1691C0.742188 51.8371 2.10039 53.1953 3.76836 53.1953C18.8039 53.1953 31.0277 40.9715 31.0277 25.9359V19.9074Z"
                                            fill="#2B5BA0"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2463">
                                            <rect width="61" height="61" fill="white"
                                                  transform="matrix(-1 0 0 -1 61.5 61)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="review-text">
                            “This technology is a gift for humanity and a game changer as
                            living in energetic coherence becomes more a necessity than a
                            luxury. This may be particularly helpful for people who work
                            in the fields of healing, coaching and transformation, where
                            it's imperative to stay in their highest energy while helping
                            others."
                        </div>
                        <div class="user-profile">
                            <img src="{{ asset('frontend/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                    <div class="item-bottom"></div>
                </div>
            </div>
        </div>
        <!-- text review slider end -->

        <!-- video review slider start -->
        <div class="video-reviews-slider mt-5">
            <div class="video-slider">
                <div class="item">
                    <div class="item-top">
                        <div class="play-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59" height="43"
                                 viewBox="0 0 59 43" fill="none">
                                <path
                                    d="M46.7465 0.625H12.2535C5.48609 0.625 0 6.11109 0 12.8785V30.1213C0 36.8888 5.48609 42.3749 12.2535 42.3749H46.7465C53.5139 42.3749 59 36.8888 59 30.1213V12.8785C59 6.11109 53.5139 0.625 46.7465 0.625ZM38.4595 22.3389L22.326 30.0336C21.8961 30.2386 21.3995 29.9252 21.3995 29.4489V13.5786C21.3995 13.0956 21.9092 12.7826 22.34 13.0009L38.4734 21.1765C38.9531 21.4196 38.9448 22.1075 38.4595 22.3389Z"
                                    fill="#F61C0D"/>
                                <path
                                    d="M38.5 20.634C39.1667 21.0189 39.1667 21.9811 38.5 22.366L22.75 31.4593C22.0833 31.8442 21.25 31.3631 21.25 30.5933L21.25 12.4067C21.25 11.6369 22.0833 11.1558 22.75 11.5407L38.5 20.634Z"
                                    fill="white"/>
                            </svg>
                        </div>
                        <video class="video" id="myVideo" width="100%" height="100%">
                            <source src="./assets/video/client-review.mp4" type="video/mp4"/>
                        </video>
                        <div class="video-review-bottom">
                            <h4 class="user-name">Kathryn Murphy</h4>

                            <div class="ratings">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-bottom">
                        <div class="user-profile">
                            <img src="{{ asset('frontned/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-top">
                        <div class="play-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59" height="43"
                                 viewBox="0 0 59 43" fill="none">
                                <path
                                    d="M46.7465 0.625H12.2535C5.48609 0.625 0 6.11109 0 12.8785V30.1213C0 36.8888 5.48609 42.3749 12.2535 42.3749H46.7465C53.5139 42.3749 59 36.8888 59 30.1213V12.8785C59 6.11109 53.5139 0.625 46.7465 0.625ZM38.4595 22.3389L22.326 30.0336C21.8961 30.2386 21.3995 29.9252 21.3995 29.4489V13.5786C21.3995 13.0956 21.9092 12.7826 22.34 13.0009L38.4734 21.1765C38.9531 21.4196 38.9448 22.1075 38.4595 22.3389Z"
                                    fill="#F61C0D"/>
                                <path
                                    d="M38.5 20.634C39.1667 21.0189 39.1667 21.9811 38.5 22.366L22.75 31.4593C22.0833 31.8442 21.25 31.3631 21.25 30.5933L21.25 12.4067C21.25 11.6369 22.0833 11.1558 22.75 11.5407L38.5 20.634Z"
                                    fill="white"/>
                            </svg>
                        </div>
                        <video class="video" id="myVideo" width="100%" height="100%">
                            <source src="./assets/video/client-review.mp4" type="video/mp4"/>
                        </video>
                        <div class="video-review-bottom">
                            <h4 class="user-name">Kathryn Murphy</h4>

                            <div class="ratings">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-bottom">
                        <div class="user-profile">
                            <img src="{{ asset('frontend/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-top">
                        <div class="play-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59" height="43"
                                 viewBox="0 0 59 43" fill="none">
                                <path
                                    d="M46.7465 0.625H12.2535C5.48609 0.625 0 6.11109 0 12.8785V30.1213C0 36.8888 5.48609 42.3749 12.2535 42.3749H46.7465C53.5139 42.3749 59 36.8888 59 30.1213V12.8785C59 6.11109 53.5139 0.625 46.7465 0.625ZM38.4595 22.3389L22.326 30.0336C21.8961 30.2386 21.3995 29.9252 21.3995 29.4489V13.5786C21.3995 13.0956 21.9092 12.7826 22.34 13.0009L38.4734 21.1765C38.9531 21.4196 38.9448 22.1075 38.4595 22.3389Z"
                                    fill="#F61C0D"/>
                                <path
                                    d="M38.5 20.634C39.1667 21.0189 39.1667 21.9811 38.5 22.366L22.75 31.4593C22.0833 31.8442 21.25 31.3631 21.25 30.5933L21.25 12.4067C21.25 11.6369 22.0833 11.1558 22.75 11.5407L38.5 20.634Z"
                                    fill="white"/>
                            </svg>
                        </div>
                        <video class="video" id="myVideo" width="100%" height="100%">
                            <source src="{{ asset('frontend/assets/video/client-review.mp4') }}"
                                    type="video/mp4"/>
                        </video>
                        <div class="video-review-bottom">
                            <h4 class="user-name">Kathryn Murphy</h4>

                            <div class="ratings">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-bottom">
                        <div class="user-profile">
                            <img src="{{ asset('frontend/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-top">
                        <div class="play-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59" height="43"
                                 viewBox="0 0 59 43" fill="none">
                                <path
                                    d="M46.7465 0.625H12.2535C5.48609 0.625 0 6.11109 0 12.8785V30.1213C0 36.8888 5.48609 42.3749 12.2535 42.3749H46.7465C53.5139 42.3749 59 36.8888 59 30.1213V12.8785C59 6.11109 53.5139 0.625 46.7465 0.625ZM38.4595 22.3389L22.326 30.0336C21.8961 30.2386 21.3995 29.9252 21.3995 29.4489V13.5786C21.3995 13.0956 21.9092 12.7826 22.34 13.0009L38.4734 21.1765C38.9531 21.4196 38.9448 22.1075 38.4595 22.3389Z"
                                    fill="#F61C0D"/>
                                <path
                                    d="M38.5 20.634C39.1667 21.0189 39.1667 21.9811 38.5 22.366L22.75 31.4593C22.0833 31.8442 21.25 31.3631 21.25 30.5933L21.25 12.4067C21.25 11.6369 22.0833 11.1558 22.75 11.5407L38.5 20.634Z"
                                    fill="white"/>
                            </svg>
                        </div>
                        <video class="video" id="myVideo" width="100%" height="100%">
                            <source src="{{ asset('frontend/assets/video/client-review.mp4') }}"
                                    type="video/mp4"/>
                        </video>
                        <div class="video-review-bottom">
                            <h4 class="user-name">Kathryn Murphy</h4>

                            <div class="ratings">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-bottom">
                        <div class="user-profile">
                            <img src="{{ asset('frontend/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-top">
                        <div class="play-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59" height="43"
                                 viewBox="0 0 59 43" fill="none">
                                <path
                                    d="M46.7465 0.625H12.2535C5.48609 0.625 0 6.11109 0 12.8785V30.1213C0 36.8888 5.48609 42.3749 12.2535 42.3749H46.7465C53.5139 42.3749 59 36.8888 59 30.1213V12.8785C59 6.11109 53.5139 0.625 46.7465 0.625ZM38.4595 22.3389L22.326 30.0336C21.8961 30.2386 21.3995 29.9252 21.3995 29.4489V13.5786C21.3995 13.0956 21.9092 12.7826 22.34 13.0009L38.4734 21.1765C38.9531 21.4196 38.9448 22.1075 38.4595 22.3389Z"
                                    fill="#F61C0D"/>
                                <path
                                    d="M38.5 20.634C39.1667 21.0189 39.1667 21.9811 38.5 22.366L22.75 31.4593C22.0833 31.8442 21.25 31.3631 21.25 30.5933L21.25 12.4067C21.25 11.6369 22.0833 11.1558 22.75 11.5407L38.5 20.634Z"
                                    fill="white"/>
                            </svg>
                        </div>
                        <video class="video" id="myVideo" width="100%" height="100%">
                            <source src="{{ asset('frontend/assets/video/client-review.mp4') }}"
                                    type="video/mp4"/>
                        </video>
                        <div class="video-review-bottom">
                            <h4 class="user-name">Kathryn Murphy</h4>

                            <div class="ratings">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                     viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_5960_2510)">
                                        <path
                                            d="M19.1669 7.29665L13.326 6.40444L10.7079 0.827938C10.5124 0.411521 9.82918 0.411521 9.63364 0.827938L7.01639 6.40444L1.17547 7.29665C1.06763 7.31321 0.966433 7.35918 0.883001 7.42949C0.799569 7.4998 0.737124 7.59174 0.702523 7.69522C0.667921 7.79869 0.662502 7.9097 0.686859 8.01606C0.711216 8.12241 0.764408 8.22 0.840594 8.2981L5.08393 12.6475L4.08089 18.7964C4.06298 18.9064 4.07637 19.0192 4.11953 19.1219C4.1627 19.2246 4.23389 19.3131 4.32498 19.3772C4.41606 19.4414 4.52336 19.4787 4.63461 19.4847C4.74586 19.4908 4.85658 19.4654 4.95409 19.4115L10.1712 16.5283L15.3883 19.4123C15.4858 19.4662 15.5965 19.4916 15.7077 19.4855C15.819 19.4794 15.9263 19.4422 16.0174 19.378C16.1085 19.3139 16.1797 19.2254 16.2228 19.1227C16.266 19.0199 16.2794 18.9072 16.2615 18.7972L15.2584 12.6483L19.5018 8.2989C19.5782 8.22082 19.6316 8.12317 19.656 8.0167C19.6805 7.91023 19.6752 7.79907 19.6406 7.69545C19.6059 7.59184 19.5434 7.49978 19.4598 7.42942C19.3763 7.35905 19.2749 7.31311 19.1669 7.29665Z"
                                            fill="#FFC107"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5960_2510">
                                            <rect width="19" height="19" fill="white"
                                                  transform="translate(0.664062 0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="item-bottom">
                        <div class="user-profile">
                            <img src="{{ asset('frontend/assets/img/review-user.png') }}" alt="user"/>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- video review slider end -->
    </div>
    <!-- client review section end -->

    <!-- coaching review bottom last 3 sections start -->
    <div class="coaching-review-bottom-sections bg-white section-padding-x section-padding-y ">
        <!-- steps container start -->
        <div class="steps-container">
            <div class="section-title text-center">
                {{ $getStartedSection->title ?? '✨ Simple Steps To Get Started ✨' }}

            </div>
            <div class="coaching-steps">
                <!-- wave line start -->
                <svg class="wave-line" xmlns="http://www.w3.org/2000/svg" width="1169" height="123"
                     viewBox="0 0 1169 123" fill="none">
                    <path
                        d="M1168 61.3172C1091.15 16.555 904.193 -46.1119 771.203 61.3172C604.966 195.604 379.836 61.3172 376.913 61.3172C373.989 61.3172 240.331 -59.7607 1.00002 61.3172"
                        stroke="#2B5BA0" stroke-width="3" stroke-dasharray="6 6"/>
                </svg>
                <!-- wave line end -->
                <div class="item">
                    <div class="step-count">
                        <div class="step-number">1</div>
                        <div class="step-text">Step</div>
                    </div>
                    <div class="step-card-title">
                        Choose your preferred schedule
                    </div>
                    <p class="section-text mt-4">
                        Select from the available dates to fit your preparation into your busy life.
                    </p>
                </div>
                <div class="item">
                    <div class="step-count">
                        <div class="step-number">2</div>
                        <div class="step-text">Step</div>
                    </div>
                    <div class="step-card-title">
                        Complete your payment
                    </div>
                    <p class="section-text mt-4">
                        Fill up the checkout form and secure your spot through our safe and straightforward payment
                        process.
                    </p>
                </div>
                <div class="item">
                    <div class="step-count">
                        <div class="step-number">3</div>
                        <div class="step-text">Step</div>
                    </div>
                    <div class="step-card-title">
                        Check for the confirmation email
                    </div>
                    <p class="section-text mt-4">
                        Receive an email with your specific schedule details and further instructions upon
                        successful
                        registration.
                    </p>
                </div>
                <div class="item">
                    <div class="step-count">
                        <div class="step-number">4</div>
                        <div class="step-text">Step</div>
                    </div>
                    <div class="step-card-title">
                        Attend the scheduled session and PASS your exam!
                    </div>
                    <p class="section-text mt-4">
                        Receive an email with your specific schedule details and further instructions upon
                        successful
                        registration.
                    </p>
                </div>
            </div>
        </div>
        <!-- steps container end -->
        <!-- exam schedule container start -->
        <div class="exam-schedule-container section-padding-y ">
            <div
                class="section-title text-center">{{$scheduleSection->title ?? 'Ready to PASS your exam?'}}</div>
            <div class="section-text text-center mt-4 fw-bold ">
                {{ $scheduleSection->subtitle ?? 'Take your first step! Choose your preferred schedule below' }}

            </div>
            <div class="section-text mt-4 text-center">
                {!! $scheduleSection->description ?? ' Enroll in one of the available classes below, choose the right one for you.' !!}

            </div>
            <div class="section-text mt-4 text-center">
                {!! nl2br($scheduleSection->subdescription ?? "Spaces in our program are limited and fill up fast. Don't miss this chance to boost your \nconfidence and knowledge for the PMHNP exam.") !!}


            </div>
            <div class="date-time-container ">
                <div class="item">March 16-17</div>
                <div class="item">April 13-14</div>
                <div class="item">May 11-12</div>
                <div class="item">June 15-16</div>
                <div class="item">July 13-14</div>
                <div class="item">August 10-11</div>
                <div class="item">September 14-15</div>
                <div class="item">August 24-25</div>
                <div class="item">September 28-29</div>
                <div class="item">October 12-13</div>
                <div class="item">November 9-10</div>
                <div class="item">December 14-15</div>
            </div>
        </div>
        <!-- exam schedule container end -->

        <!-- faqs section start -->
        <div class="section-title text-center ">FAQS</div>
        <div class="faqs-container">
            <div class="faqs-items">
                <div class="accordion" id="faqAccordion">
                    <!-- FAQ Item 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseOne" aria-expanded="true"
                                    aria-controls="faqCollapseOne">
                                What do I need for the live sessions?
                            </button>
                        </h2>
                        <div id="faqCollapseOne" class="accordion-collapse collapse show"
                             aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Your pen and notes <br>
                                You need smart phone or tablet, or computer (preferably with microphone and camera
                                so we
                                can converse with you, although that is optional) and a decent internet connection.
                                You will also need the zoom app (free download) we will send you the instructions
                                once
                                you enroll.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingTwo">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo"
                                    aria-expanded="false" aria-controls="faqCollapseTwo">
                                Why the class so cheap? What’s the catch?
                            </button>
                        </h2>
                        <div id="faqCollapseTwo" class="accordion-collapse collapse"
                             aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Your pen and notes <br>
                                You need smart phone or tablet, or computer (preferably with microphone and camera
                                so we
                                can converse with you, although that is optional) and a decent internet connection.
                                You will also need the zoom app (free download) we will send you the instructions
                                once
                                you enroll.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingThree">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseThree"
                                    aria-expanded="false" aria-controls="faqCollapseThree">
                                Can I earn CEU credits?
                            </button>
                        </h2>
                        <div id="faqCollapseThree" class="accordion-collapse collapse"
                             aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Your pen and notes <br>
                                You need smart phone or tablet, or computer (preferably with microphone and camera
                                so we
                                can converse with you, although that is optional) and a decent internet connection.
                                You will also need the zoom app (free download) we will send you the instructions
                                once
                                you enroll.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingFour">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseFour"
                                    aria-expanded="false" aria-controls="faqCollapseFour">
                                What if I have specific questions during the program?
                            </button>
                        </h2>
                        <div id="faqCollapseFour" class="accordion-collapse collapse"
                             aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Your pen and notes <br>
                                You need smart phone or tablet, or computer (preferably with microphone and camera
                                so we
                                can converse with you, although that is optional) and a decent internet connection.
                                You will also need the zoom app (free download) we will send you the instructions
                                once
                                you enroll.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingFive">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseFive"
                                    aria-expanded="false" aria-controls="faqCollapseFive">
                                I loved this class and want more! What other courses do you offer?
                            </button>
                        </h2>
                        <div id="faqCollapseFive" class="accordion-collapse collapse"
                             aria-labelledby="faqHeadingFive" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Your pen and notes <br>
                                You need smart phone or tablet, or computer (preferably with microphone and camera
                                so we
                                can converse with you, although that is optional) and a decent internet connection.
                                You will also need the zoom app (free download) we will send you the instructions
                                once
                                you enroll.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingSix">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseSix"
                                    aria-expanded="false" aria-controls="faqCollapseSix">
                                When is the next live event?
                            </button>
                        </h2>
                        <div id="faqCollapseSix" class="accordion-collapse collapse"
                             aria-labelledby="faqHeadingSix" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Your pen and notes <br>
                                You need smart phone or tablet, or computer (preferably with microphone and camera
                                so we
                                can converse with you, although that is optional) and a decent internet connection.
                                You will also need the zoom app (free download) we will send you the instructions
                                once
                                you enroll.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingSeven">
                            <button class="accordion-button collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faqCollapseSeven"
                                    aria-expanded="false" aria-controls="faqCollapseSeven">
                                How much does it cost?
                            </button>
                        </h2>
                        <div id="faqCollapseSeven" class="accordion-collapse collapse"
                             aria-labelledby="faqHeadingSeven" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Your pen and notes <br>
                                You need smart phone or tablet, or computer (preferably with microphone and camera
                                so we
                                can converse with you, although that is optional) and a decent internet connection.
                                You will also need the zoom app (free download) we will send you the instructions
                                once
                                you enroll.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="faqs-img">
                <img src="{{ asset('frontend/assets/img/faqs.png') }}" alt="image">
            </div>
        </div>
        <!-- faqs section end -->
    </div>
    <!-- coaching review bottom last 3 sections end -->

</main>

<!-- footer start -->
@include('frontend.partials.footer')
<!-- footer end -->

<!-- js start -->
<!-- js files -->
<script src="{{ asset('frontend/assets/js/jqueryv3.7.1.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".slider").slick({
            infinite: false,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 500,
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            pauseOnFocus: false,
            pauseOnDotsHover: false,
        });

        $(".slider").on("afterChange", function (event, slick, currentSlide) {
            if (
                slick.currentSlide + slick.options.slidesToShow >=
                slick.slideCount
            ) {
                setTimeout(function () {
                    $(".slider").slick("slickGoTo", 0); // Go to the first slide
                    $(".slider").slick("slickPlay"); // Restart autoplay
                }, 1000); // Adjust the timeout if needed
            } else {
                $(".slider").slick("slickPlay"); // Restart autoplay after any slide change
            }
        });
        $(".video-slider").on("afterChange", function (event, slick, currentSlide) {
            if (
                slick.currentSlide + slick.options.slidesToShow >=
                slick.slideCount
            ) {
                setTimeout(function () {
                    $(".video-slider").slick("slickGoTo", 0); // Go to the first slide
                    $(".video-slider").slick("slickPlay"); // Restart autoplay
                }, 1000); // Adjust the timeout if needed
            } else {
                $(".video-slider").slick("slickPlay"); // Restart autoplay after any slide change
            }
        });

        // video slider
        $(".video-slider").slick({
            infinite: false,
            autoplay: true,
            autoplaySpeed: 3000,
            speed: 500,
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false,
            dots: true,
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".item").forEach((item) => {
            const video = item.querySelector(".video");
            const playIcon = item.querySelector(".play-icon");

            if (video && playIcon) {
                item.addEventListener("click", function () {
                    const allVideos = document.querySelectorAll(".video");
                    const allPlayIcons = document.querySelectorAll(".play-icon");

                    // Pause all other videos and show their play icons
                    allVideos.forEach((v, i) => {
                        if (v !== video) {
                            v.pause();
                            allPlayIcons[i].style.display = "block";
                        }
                    });

                    // Toggle play/pause for the clicked video
                    if (video.paused) {
                        video.play();
                        playIcon.style.display = "none"; // Hide play icon
                    } else {
                        video.pause();
                        playIcon.style.display = "block"; // Show play icon
                    }
                });

                // Show play icon again when the video ends
                video.addEventListener("ended", function () {
                    playIcon.style.display = "block";
                });
            }
        });
    });
</script>

<script src="{{ asset('frontend/assets/js/plugin.js') }}"></script>

</body>

</html>
