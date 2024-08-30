       <!--APP-SIDEBAR-->
       <div class="sticky">
           <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
           <div class="app-sidebar">
               <div class="side-header">
                   <a class="header-brand1" href="{{ route('dashboard') }}">
                       <img src="{{ asset('backend/assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                       <img src="{{ asset('backend/assets/images/brand/logo-1.png') }}" class="header-brand-img toggle-logo" alt="logo">
                       <img src="{{ asset('backend/assets/images/brand/logo-2.png') }}" class="header-brand-img light-logo" alt="logo">
                       <img src="{{ asset('backend/assets/images/brand/logo-3.png') }}" class="header-brand-img light-logo1" alt="logo">
                   </a><!-- LOGO -->
               </div>
               <div class="main-sidemenu">
                   <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                           fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                           <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                       </svg>
                   </div>
                   <ul class="side-menu">
                      
                       <li class="slide">
                           <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('dashboard') }}">
                               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                   enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                   <path
                                       d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z" />
                               </svg>
                               <span class="side-menu__label">Dashboard</span>
                           </a>
                       </li>
                     
                       <li class="slide">
                           <a class="side-menu__item" data-bs-toggle="slide" href="#">
                               <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                   enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                   <path
                                       d="M18,14c-1.4293213,0-2.6744385,0.7554932-3.3817749,1.8830566l-4.9604492-2.2773438C9.8745117,13.1135864,9.9994507,12.5721436,10,12c0-0.5722656-0.1245728-1.1138916-0.3410645-1.6062012l4.9593506-2.2767944C15.3256226,9.2445068,16.5707397,10,18,10c2.208252-0.0021973,3.9978027-1.791748,4-4c0-2.2091675-1.7908325-4-4-4s-4,1.7908325-4,4c0,0.4233398,0.0836182,0.8234253,0.2055054,1.2064209L9.1296997,9.5366821C8.3972168,8.607666,7.2749023,8,6,8c-2.2091675,0-4,1.7908325-4,4s1.7908325,4,4,4c1.2741699-0.0012817,2.3956909-0.6087646,3.1281738-1.5372925l5.0773315,2.3308716C14.0836182,17.1765747,14,17.5766602,14,18c0,2.2091675,1.7908325,4,4,4c2.208252-0.0021973,3.9978027-1.791748,4-4C22,15.7908325,20.2091675,14,18,14z M18,3c1.6561279,0.0018311,2.9981689,1.3438721,3,3c0,1.6568604-1.3431396,3-3,3s-3-1.3431396-3-3S16.3431396,3,18,3z M6,15c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C9,13.6568604,7.6568604,15,6,15z M18,21c-1.6568604,0-3-1.3431396-3-3s1.3431396-3,3-3c1.6561279,0.0018311,2.9981689,1.3438721,3,3C21,19.6568604,19.6568604,21,18,21z" />
                               </svg>
                               <span class="side-menu__label">CMS Section</span><i
                                   class="angle fa fa-angle-right"></i></a>
                           <ul class="slide-menu">
                               <li class="side-menu-label1"><a href="javascript:void(0)">Sub-menus</a></li>
                               <li class="sub-slide">
                                   <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                           class="sub-side-menu__label">Q-Banks
                                        </span><i
                                           class="sub-angle fa fa-angle-right"></i></a>
                                   <ul class="sub-slide-menu">
                                       <li><a class="sub-slide-item" href="{{ route('hero.section') }}">Hero section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('sub.hero.section') }}">Sub Hero section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('work.section') }}">Works Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('enroll.section') }}">Enroll Courses Section</a></li>
                                   </ul>
                               </li>
                               <li class="sub-slide">
                                   <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                           class="sub-side-menu__label">Last Minute Review</span><i
                                           class="sub-angle fa fa-angle-right"></i></a>
                                   <ul class="sub-slide-menu">
                                       <li><a class="sub-slide-item" href="{{ route('lastreview.hero.section') }}">Hero Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('lastreview.subhero.section') }}">Sub Hero Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('lastreview.aboutus.section') }}">About Us Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('lastreview.expect.section') }}">Expect Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('GetStrated') }}">Get Strated Section</a></li>
                                      
                                   </ul>
                               </li>
                               <li class="sub-slide">
                                   <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                           class="sub-side-menu__label">Certifications</span><i
                                           class="sub-angle fa fa-angle-right"></i></a>
                                   <ul class="sub-slide-menu">
                                       <li><a class="sub-slide-item" href="{{ route('certification.hero.section') }}">Hero Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('certification.subhero.section') }}">Sub
                                        Hero Section</a></li>
                                   </ul>
                               </li>
                               <li class="sub-slide">
                                   <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                           class="sub-side-menu__label">
                                           NP Live Final Coaching Review</span><i
                                           class="sub-angle fa fa-angle-right"></i></a>
                                   <ul class="sub-slide-menu">
                                       <li><a class="sub-slide-item" href="{{ route('final.review.coaching.hero.section') }}">Hero Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('final.review.coaching.subhero.section') }}">Sub Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('final.review.coaching.review.section') }}">Review Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('final.review.coaching.outline.section') }}">Outline Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('final.review.coaching.about-us.section') }}"> About Us Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('final.review.coaching.get.strated.section') }}"> Simple Steps Get started Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('final.review.coaching.schedule.section') }}">Exam Schedule Section</a></li>
                                   </ul>
                               </li>
                               <li class="sub-slide">
                                   <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                                           class="sub-side-menu__label">
                                           Courses</span><i
                                           class="sub-angle fa fa-angle-right"></i></a>
                                   <ul class="sub-slide-menu">
                                       <li><a class="sub-slide-item" href="{{ route('course.hero.section') }}">Hero Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('course.subhero.section') }}">Sub Hero Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('course.expert.section') }}">Expert Section</a></li>
                                       <li><a class="sub-slide-item" href="{{ route('course.enroll.section') }}">Enroll Section</a></li>
                                   </ul>
                               </li>
                           </ul>
                       </li>
                   </ul>
                   <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                           width="24" height="24" viewBox="0 0 24 24">
                           <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                       </svg>
                   </div>
               </div>
           </div>
       </div>
       <!--/APP-SIDEBAR-->
