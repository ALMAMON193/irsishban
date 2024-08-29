@extends('frontend.app')
@php
    use App\Models\CMS;
    $certificationHeroSection = CMS::where('section', 'certification_hero_section')->latest()->first();
    $certificationSubHeroSection = CMS::where('section', 'certification_subhero_section')->latest()->first();
@endphp
@section('content')
    <main class="home-page-content">
        <!-- banner start -->
        <div class="common-banner">
            <img src="{{ asset('frontend/assets/img/banner-cover.png') }}" alt="banner" />
            <div class="gradient-overlay"></div>
            <div class="text-content">
                <h1 class="title">{{ $certificationHeroSection->title ?? 'Certifications' }}</h1>

                <h3 class="sub-title">
                  {{ $certificationHeroSection->subtitle ?? ' We can help you get or renew (every two years) your desired BLS /
                    ACLS / PALS certification.' }}
                   
                </h3>
                <div class="mt-5">
                    <a href="{{ $certificationHeroSection->button_link ?? route('certification.index') }}" class="common-btn banner-btn">{{ $certificationHeroSection->button_text ?? 'Book a Session Now!' }}</a>
                </div>
            </div>
        </div>
        <!-- banner end -->

        <!-- ready to get start section start -->
        <div class="certifications-get-start section-padding-x section-padding-y">
            <div class="top-container associates-cards">
                <h3 class="section-title text-center">{{ $certificationSubHeroSection->title ?? 'Ready to Get Started?' }}</h3>
                <p class="section-text text-center mt-4">
                  {{ $certificationSubHeroSection->subtitle ?? ' Choose your desired certifications below.' }}
                   
                </p>
                <div class="triple-cards-container">
                    <div class="common-card time-card">
                        <div class="img-container">
                            <div class="tag">
                                PALS
                            </div>
                            <div class="gradient-overlay"></div>
                            <img src="{{ asset('frontend/assets/img/association.png') }}" alt="card" />
                        </div>
                        <div class="info-container">
                            <div class="top-info">
                                <div class="title mt-3">BLS - CPR Certification (Initial)</div>

                            </div>
                            <div class="bottom-info">
                                <div class="title">
                                    $239.00 USD <span class="small-text">/one Time</span>
                                </div>
                                <div>
                                    <a href="" class="card-btn">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card time-card">
                        <div class="img-container">
                            <div class="tag">
                                PALS
                            </div>
                            <div class="gradient-overlay"></div>
                            <img src="{{ asset('frontend/assets/img/association.png') }}" alt="card" />
                        </div>
                        <div class="info-container">
                            <div class="top-info">
                                <div class="title mt-3">BLS - CPR Certification (Initial)</div>

                            </div>
                            <div class="bottom-info">
                                <div class="title">
                                    $239.00 USD <span class="small-text">/one Time</span>
                                </div>
                                <div>
                                    <a href="" class="card-btn">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card time-card">
                        <div class="img-container">
                            <div class="tag">
                                PALS
                            </div>
                            <div class="gradient-overlay"></div>
                            <img src="{{ asset('frontend/assets/img/association.png') }}" alt="card" />
                        </div>
                        <div class="info-container">
                            <div class="top-info">
                                <div class="title mt-3">BLS - CPR Certification (Initial)</div>

                            </div>
                            <div class="bottom-info">
                                <div class="title">
                                    $239.00 USD <span class="small-text">/one Time</span>
                                </div>
                                <div>
                                    <a href="" class="card-btn">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card time-card">
                        <div class="img-container">
                            <div class="tag">
                                PALS
                            </div>
                            <div class="gradient-overlay"></div>
                            <img src="{{ asset('frontend/assets/img/association.png') }}" alt="card" />
                        </div>
                        <div class="info-container">
                            <div class="top-info">
                                <div class="title mt-3">BLS - CPR Certification (Initial)</div>

                            </div>
                            <div class="bottom-info">
                                <div class="title">
                                    $239.00 USD <span class="small-text">/one Time</span>
                                </div>
                                <div>
                                    <a href="" class="card-btn">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card time-card">
                        <div class="img-container">
                            <div class="tag">
                                PALS
                            </div>
                            <div class="gradient-overlay"></div>
                            <img src="{{ asset('frontend/assets/img/association.png') }}" alt="card" />
                        </div>
                        <div class="info-container">
                            <div class="top-info">
                                <div class="title mt-3">BLS - CPR Certification (Initial)</div>

                            </div>
                            <div class="bottom-info">
                                <div class="title">
                                    $239.00 USD <span class="small-text">/one Time</span>
                                </div>
                                <div>
                                    <a href="" class="card-btn">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card time-card">
                        <div class="img-container">
                            <div class="tag">
                                PALS
                            </div>
                            <div class="gradient-overlay"></div>
                            <img src="{{ asset('frontend/assets/img/association.png') }}" alt="card" />
                        </div>
                        <div class="info-container">
                            <div class="top-info">
                                <div class="title mt-3">BLS - CPR Certification (Initial)</div>

                            </div>
                            <div class="bottom-info">
                                <div class="title">
                                    $239.00 USD <span class="small-text">/one Time</span>
                                </div>
                                <div>
                                    <a href="" class="card-btn">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="bottom-container associates-cards">
                <h3 class="section-title text-center">Ready to Get Started?</h3>

                <div class="triple-cards-container">
                    <div class="common-card time-card">
                        <div class="img-container">
                            <div class="tag">
                                For RN/LVN
                            </div>
                            <div class="gradient-overlay"></div>
                            <img src="{{ asset('frontned/assets/img/vbn.png') }}" alt="card" />
                        </div>
                        <div class="info-container">
                            <div class="top-info">
                                <div class="title mt-3">IV Therapy & Blood Withdrawal</div>

                            </div>
                            <div class="bottom-info">
                                <div class="title">
                                    $239.00 USD <span class="small-text">/one Time</span>
                                </div>
                                <div>
                                    <a href="" class="card-btn">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card time-card">
                        <div class="img-container">
                            <div class="tag">
                                For RN/LVN
                            </div>
                            <div class="gradient-overlay"></div>
                            <img src="{{ asset('frontend/assets/img/vbn.png') }}" alt="card" />
                        </div>
                        <div class="info-container">
                            <div class="top-info">
                                <div class="title mt-3">IV Therapy & Blood Withdrawal</div>

                            </div>
                            <div class="bottom-info">
                                <div class="title">
                                    $239.00 USD <span class="small-text">/one Time</span>
                                </div>
                                <div>
                                    <a href="" class="card-btn">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card time-card">
                        <div class="img-container">
                            <div class="tag">
                                For RN/LVN
                            </div>
                            <div class="gradient-overlay"></div>
                            <img src="{{ asset('frontned/assets/img/vbn.png') }}" alt="card" />
                        </div>
                        <div class="info-container">
                            <div class="top-info">
                                <div class="title mt-3">IV Therapy & Blood Withdrawal</div>

                            </div>
                            <div class="bottom-info">
                                <div class="title">
                                    $239.00 USD <span class="small-text">/one Time</span>
                                </div>
                                <div>
                                    <a href="" class="card-btn">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ready to get start section end -->
    </main>
@endsection
