<?php
$page_title = "TyreHub | A to Z in Tyre Services - Buy Tyres Online in Ahmedabad & Gandhinagar";
$page_description = "TyreHub is Gujarat's #1 online tyre & car battery store. Doorstep fitting, 30-min car battery replacement, 3D computerized alignment, roadside assistance and 50+ service partners across Ahmedabad & Gandhinagar.";
$current_page = "home";

include 'includes/interface.php';
include 'includes/header.php';
?>
  <!-- 3. HERO SECTION (100% FULL WIDTH EDGE-TO-EDGE BANNER) -->
  <!-- ========================================== -->
  <section class="w-full relative overflow-hidden bg-slate-950 -mt-px">
    <div class="w-full relative">
      <div id="hero-slider" class="h-full w-full">

        <!-- Slide 1: Premium Tyres & Doorstep Fitment -->
        <div
          class="hero-slide-item relative min-h-[480px] lg:min-h-[520px] overflow-hidden flex items-center bg-slate-950">
          <img src="https://images.unsplash.com/photo-1578844251758-2f71da64c96f?auto=format&fit=crop&w=1600&q=80"
            alt="Premium Tyres & Doorstep Fitment"
            class="absolute inset-0 w-full h-full object-cover object-center opacity-90">
          <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-slate-950/45 to-transparent"></div>

          <div class="container mx-auto px-3 relative z-10 pt-14 pb-16 lg:pt-16 lg:pb-18">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
              <div class="lg:col-span-8 text-white space-y-4">
                <div
                  class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow text-slate-950 font-bold text-xs uppercase tracking-wider shadow-md">
                  <i class="fa-solid fa-dharmachakra text-slate-950"></i> Free Doorstep Fitment Included
                </div>

                <h2
                  class="text-2xl sm:text-3xl lg:text-4xl font-medium text-white leading-tight tracking-tight font-outfit drop-shadow-md">
                  Drive With <span class="text-brand-yellow font-bold">Confidence.</span>
                </h2>

                <p class="text-base sm:text-lg font-medium text-slate-200 font-heading">
                  Buy Genuine Car &amp; Bike Tyres Online at Wholesale Prices
                </p>

                <p class="text-slate-300 text-xs sm:text-sm max-w-xl font-normal leading-relaxed">
                  Choose from Bridgestone, Michelin, Goodyear, Apollo, MRF &amp; CEAT with instant doorstep fitting
                  across Ahmedabad &amp; Gandhinagar.
                </p>

                <div class="flex flex-wrap items-center gap-3 pt-2">
                  <button onclick="openBookingModal('Buy Car Tyres Online')"
                    class="btn-primary text-sm font-bold px-7 py-3.5">
                    <i class="fa-solid fa-cart-shopping mr-2"></i> SHOP TYRES NOW
                  </button>
                  <a href="#finder-section"
                    class="bg-white/15 backdrop-blur-md text-white border border-white/30 hover:bg-white hover:text-slate-900 hover:border-white px-6 py-3.5 rounded-xl text-sm font-semibold transition-colors duration-200">
                    Search By Size
                  </a>
                </div>
              </div>

              <!-- Right Feature Badge -->
              <div class="hidden lg:flex lg:col-span-4 justify-end">
                <div
                  class="bg-slate-900/80 backdrop-blur-xl border border-brand-yellow/30 rounded-2xl p-5 text-center shadow-2xl w-full max-w-[240px]">
                  <div
                    class="w-14 h-14 rounded-2xl bg-brand-yellow text-slate-950 flex items-center justify-center text-2xl mx-auto mb-3 font-bold shadow-md">
                    <i class="fa-solid fa-tags"></i>
                  </div>
                  <span class="block text-white font-bold text-lg font-outfit">Up to 35% OFF</span>
                  <span class="block text-xs text-slate-300 font-medium my-1.5">Free Mounting &amp; Balancing</span>
                  <span
                    class="inline-block bg-emerald-500/20 border border-emerald-400/40 text-emerald-300 text-[11px] font-bold px-3 py-0.5 rounded-full uppercase">100%
                    Genuine</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2: We Are Hiring Job Opportunity (Same 2-Column Layout) -->
        <div
          class="hero-slide-item relative min-h-[480px] lg:min-h-[520px] overflow-hidden flex items-center bg-slate-950">
          <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1600&q=80"
            alt="We Are Hiring Job Opportunity"
            class="absolute inset-0 w-full h-full object-cover object-center opacity-90">
          <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-slate-950/45 to-transparent"></div>

          <div class="container mx-auto px-3 relative z-10 pt-14 pb-16 lg:pt-16 lg:pb-18">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
              <div class="lg:col-span-8 text-white space-y-4">
                <div
                  class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow text-slate-950 font-bold text-xs uppercase tracking-wider shadow-md">
                  <i class="fa-solid fa-briefcase text-slate-950"></i> We Are Hiring • Career Opportunity
                </div>

                <h2
                  class="text-2xl sm:text-3xl lg:text-4xl font-medium text-white leading-tight tracking-tight font-outfit drop-shadow-md">
                  We Are <span class="text-brand-yellow font-bold">Hiring!</span> Job Opportunities
                </h2>

                <p class="text-base sm:text-lg font-medium text-slate-200 font-heading">
                  Join Ahmedabad's Fastest Growing Tyre &amp; Automotive Service Network
                </p>

                <p class="text-slate-300 text-xs sm:text-sm max-w-xl font-normal leading-relaxed">
                  We are looking for passionate technicians, sales managers, store executives &amp; customer support
                  specialists.
                </p>

                <div class="flex flex-wrap items-center gap-3 pt-2">
                  <button onclick="openBookingModal('Career Application')"
                    class="btn-primary text-sm font-bold px-7 py-3.5">
                    <i class="fa-solid fa-user-plus mr-2"></i> JOIN OUR TEAM
                  </button>
                  <a href="tel:7575888916"
                    class="bg-white/15 backdrop-blur-md text-white border border-white/30 hover:bg-white hover:text-slate-900 hover:border-white px-6 py-3.5 rounded-xl text-sm font-semibold transition-colors duration-200">
                    Contact HR
                  </a>
                </div>
              </div>

              <!-- Right Feature Badge -->
              <div class="hidden lg:flex lg:col-span-4 justify-end">
                <div
                  class="bg-slate-900/80 backdrop-blur-xl border border-brand-yellow/30 rounded-2xl p-5 text-center shadow-2xl w-full max-w-[240px]">
                  <div
                    class="w-14 h-14 rounded-2xl bg-brand-yellow text-slate-950 flex items-center justify-center text-2xl mx-auto mb-3 font-bold shadow-md">
                    <i class="fa-solid fa-users text-slate-950"></i>
                  </div>
                  <span class="block text-white font-bold text-lg font-outfit">Urgent Openings</span>
                  <span class="block text-xs text-slate-300 font-medium my-1.5">Full-Time &amp; Part-Time</span>
                  <span
                    class="inline-block bg-brand-yellow/20 text-brand-yellow text-[11px] font-bold px-3 py-0.5 rounded-full uppercase">Apply
                    Today</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3: 30-Min Battery Replacement (Same 2-Column Layout) -->
        <div
          class="hero-slide-item relative min-h-[480px] lg:min-h-[520px] overflow-hidden flex items-center bg-slate-950">
          <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?auto=format&fit=crop&w=1600&q=80"
            alt="30-Min Doorstep Battery Replacement"
            class="absolute inset-0 w-full h-full object-cover object-center opacity-90">
          <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-slate-950/45 to-transparent"></div>

          <div class="container mx-auto px-3 relative z-10 pt-14 pb-16 lg:pt-16 lg:pb-18">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
              <div class="lg:col-span-8 text-white space-y-4">
                <div
                  class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow text-slate-950 font-bold text-xs uppercase tracking-wider shadow-md">
                  <i class="fa-solid fa-bolt text-slate-950"></i> Emergency Roadside Assistance
                </div>

                <h2
                  class="text-2xl sm:text-3xl lg:text-4xl font-medium text-white leading-tight tracking-tight font-outfit drop-shadow-md">
                  Battery Dead? <span class="text-brand-yellow font-bold">We're On The Way!</span>
                </h2>

                <p class="text-base sm:text-lg font-medium text-slate-200 font-heading">
                  30-Minute Doorstep Car Battery Replacement &amp; Jump Start
                </p>

                <p class="text-slate-300 text-xs sm:text-sm max-w-xl font-normal leading-relaxed">
                  Fresh stock of Amaron, Exide &amp; SF Sonic delivered directly to your home or breakdown location with
                  55-month warranty.
                </p>

                <div class="flex flex-wrap items-center gap-3 pt-2">
                  <button onclick="openBookingModal('Doorstep Battery Replacement')"
                    class="btn-primary text-sm font-bold px-7 py-3.5">
                    <i class="fa-solid fa-bolt mr-2"></i> GET BATTERY NOW
                  </button>
                  <a href="tel:7575888916"
                    class="bg-white/15 backdrop-blur-md text-white border border-white/30 hover:bg-white hover:text-slate-900 hover:border-white px-6 py-3.5 rounded-xl text-sm font-semibold transition-colors duration-200">
                    Call 7575 888 916
                  </a>
                </div>
              </div>

              <div class="hidden lg:flex lg:col-span-4 justify-end">
                <div
                  class="bg-slate-900/80 backdrop-blur-xl border border-brand-yellow/30 rounded-2xl p-5 text-center shadow-2xl w-full max-w-[240px]">
                  <div
                    class="w-14 h-14 rounded-2xl bg-brand-yellow text-slate-950 flex items-center justify-center text-2xl mx-auto mb-3 font-bold shadow-md">
                    <i class="fa-solid fa-stopwatch text-slate-950"></i>
                  </div>
                  <span class="block text-white font-bold text-lg font-outfit">30-Min Arrival</span>
                  <span class="block text-xs text-slate-300 font-medium my-1.5">Express Doorstep Dispatch</span>
                  <span
                    class="inline-block bg-brand-yellow/20 text-brand-yellow text-[11px] font-bold px-3 py-0.5 rounded-full uppercase">Exide
                    &amp; Amaron</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 4: 24/7 Roadside Emergency Helpline (Same 2-Column Layout) -->
        <div
          class="hero-slide-item relative min-h-[480px] lg:min-h-[520px] overflow-hidden flex items-center bg-slate-950">
          <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?auto=format&fit=crop&w=1600&q=80"
            alt="24/7 Roadside Assistance" class="absolute inset-0 w-full h-full object-cover object-center opacity-90">
          <div class="absolute inset-0 bg-gradient-to-r from-slate-950/80 via-slate-950/45 to-transparent"></div>

          <div class="container mx-auto px-3 relative z-10 pt-14 pb-16 lg:pt-16 lg:pb-18">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
              <div class="lg:col-span-8 text-white space-y-4">
                <div
                  class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow text-slate-950 font-bold text-xs uppercase tracking-wider shadow-md">
                  <i class="fa-solid fa-triangle-exclamation text-slate-950"></i> Car Stuck On The Road?
                </div>

                <h2
                  class="text-2xl sm:text-3xl lg:text-4xl font-medium text-white leading-tight tracking-tight font-outfit drop-shadow-md">
                  Help Is Just <span class="text-brand-yellow font-bold">One Call Away!</span>
                </h2>

                <p class="text-base sm:text-lg font-medium text-slate-200 font-heading">
                  24/7 Roadside Breakdown Assistance in Ahmedabad &amp; Gandhinagar
                </p>

                <p class="text-slate-300 text-xs sm:text-sm max-w-xl font-normal leading-relaxed">
                  Flat tyre repair, battery jump start, emergency fuel delivery, and flatbed towing services available
                  round the clock.
                </p>

                <div class="flex flex-wrap items-center gap-3 pt-2">
                  <a href="tel:7575888916" class="btn-primary text-sm font-bold px-7 py-3.5 inline-flex items-center">
                    <i class="fa-solid fa-phone-volume mr-2"></i> CALL 7575 888 916
                  </a>
                  <button onclick="openBookingModal('Emergency Roadside Support')"
                    class="bg-white/15 backdrop-blur-md text-white border border-white/30 hover:bg-white hover:text-slate-900 hover:border-white px-6 py-3.5 rounded-xl text-sm font-semibold transition-colors duration-200">
                    Instant Booking
                  </button>
                </div>
              </div>

              <div class="hidden lg:flex lg:col-span-4 justify-end">
                <div
                  class="bg-slate-900/80 backdrop-blur-xl border border-brand-yellow/30 rounded-2xl p-5 text-center shadow-2xl w-full max-w-[240px]">
                  <div
                    class="w-14 h-14 rounded-2xl bg-brand-yellow text-slate-950 flex items-center justify-center text-2xl mx-auto mb-3 font-bold shadow-md">
                    <i class="fa-solid fa-truck-pickup text-slate-950"></i>
                  </div>
                  <span class="block text-white font-bold text-lg font-outfit">24/7 Roadside</span>
                  <span class="block text-xs text-slate-300 font-medium my-1.5">7575 888 916</span>
                  <span
                    class="inline-block bg-emerald-500/20 border border-emerald-400/40 text-emerald-300 text-[11px] font-bold px-3 py-0.5 rounded-full uppercase">Instant
                    Dispatch</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
  </section>

  <!-- ========================================== -->
  <!-- 4. INSTANT TYRE FINDER & SEARCH SETTINGS   -->
  <!-- ========================================== -->
  <section id="finder-section" class="py-12 lg:py-16 bg-slate-50 relative z-30">
    <div class="container mx-auto px-3">

      <!-- 2-Column Responsive Layout: Left Information | Right Search Settings -->
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">

        <!-- ========================================================= -->
        <!-- LEFT COLUMN: ONLY INFORMATION & VALUE HIGHLIGHTS (col-span-7) -->
        <!-- ========================================================= -->
        <div class="lg:col-span-6 flex order-2 lg:order-1" data-aos="fade-right" data-aos-duration="600">

          <!-- Information Card Header & Highlights -->
          <div
            class="w-full bg-white border border-slate-200/90 rounded-[28px] p-6 sm:p-8 shadow-lg relative overflow-hidden flex flex-col justify-between">
            <!-- Decorative Subtle Accent Glow -->
            <div
              class="absolute -top-12 -left-12 w-40 h-40 bg-brand-yellow/10 rounded-full blur-2xl pointer-events-none">
            </div>

            <div>
              <!-- Badge -->
              <div
                class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-blue/10 border border-brand-blue/20 text-brand-blue text-xs font-bold uppercase tracking-wider mb-4">
                <i class="fa-solid fa-dharmachakra"></i> TyreHub Tyre Finder
              </div>

              <!-- Title -->
              <h2
                class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-brand-blue font-outfit leading-tight mb-3">
                Need New <span class="text-brand-yellow drop-shadow-sm">Tyre?</span> <span
                  class="font-medium text-slate-500">Relax.</span>
              </h2>

              <!-- Subtitle -->
              <p class="text-xs sm:text-sm text-slate-600 font-medium mb-6 leading-relaxed">
                Discover 100% verified compatible tyres at lowest wholesale prices with free doorstep fitment across
                Ahmedabad &amp; Gandhinagar.
              </p>

              <!-- Value Proposition Badges Grid -->
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="flex items-center gap-3 p-3.5 rounded-2xl bg-slate-50 border border-slate-200/80">
                  <div
                    class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center flex-shrink-0 font-bold text-base">
                    <i class="fa-solid fa-truck-fast"></i>
                  </div>
                  <div>
                    <span class="block text-xs sm:text-sm font-bold text-slate-800">30-Min Fitment</span>
                    <span class="block text-xs text-slate-500 font-medium">At your doorstep</span>
                  </div>
                </div>

                <div class="flex items-center gap-3 p-3.5 rounded-2xl bg-slate-50 border border-slate-200/80">
                  <div
                    class="w-10 h-10 rounded-xl bg-brand-blue/10 text-brand-blue flex items-center justify-center flex-shrink-0 font-bold text-base">
                    <i class="fa-solid fa-shield-halved"></i>
                  </div>
                  <div>
                    <span class="block text-xs sm:text-sm font-bold text-slate-800">100% Genuine</span>
                    <span class="block text-xs text-slate-500 font-medium">Official brand warranty</span>
                  </div>
                </div>

                <div class="flex items-center gap-3 p-3.5 rounded-2xl bg-slate-50 border border-slate-200/80">
                  <div
                    class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 flex items-center justify-center flex-shrink-0 font-bold text-base">
                    <i class="fa-solid fa-tags"></i>
                  </div>
                  <div>
                    <span class="block text-xs sm:text-sm font-bold text-slate-800">Best Price</span>
                    <span class="block text-xs text-slate-500 font-medium">Wholesale pricing</span>
                  </div>
                </div>

                <div class="flex items-center gap-3 p-3.5 rounded-2xl bg-slate-50 border border-slate-200/80">
                  <div
                    class="w-10 h-10 rounded-xl bg-indigo-500/10 text-indigo-600 flex items-center justify-center flex-shrink-0 font-bold text-base">
                    <i class="fa-solid fa-dharmachakra"></i>
                  </div>
                  <div>
                    <span class="block text-xs sm:text-sm font-bold text-slate-800">Top Brands</span>
                    <span class="block text-xs text-slate-500 font-medium">Bridgestone, Apollo, CEAT</span>
                  </div>
                </div>
              </div>

              <!-- Live Stats & Trust Banner -->
              <div
                class="mt-3.5 grid grid-cols-3 gap-2 py-2.5 px-3 bg-gradient-to-r from-brand-blue/5 via-slate-100/80 to-brand-yellow/15 rounded-2xl border border-slate-200/90 text-center">
                <div>
                  <span class="block text-xs sm:text-sm font-extrabold text-brand-blue font-outfit">50,000+</span>
                  <span class="block text-[9px] sm:text-[10px] text-slate-500 font-bold uppercase tracking-wider">Tyres
                    Fitted</span>
                </div>
                <div class="border-x border-slate-200">
                  <span class="block text-xs sm:text-sm font-extrabold text-brand-blue font-outfit">4.9 ★</span>
                  <span
                    class="block text-[9px] sm:text-[10px] text-slate-500 font-bold uppercase tracking-wider">Rating</span>
                </div>
                <div>
                  <span class="block text-xs sm:text-sm font-extrabold text-brand-blue font-outfit">30 Mins</span>
                  <span
                    class="block text-[9px] sm:text-[10px] text-slate-500 font-bold uppercase tracking-wider">Fitment</span>
                </div>
              </div>
            </div>

            <!-- Bottom Trust & Expert Assistance Banner -->
            <div class="mt-6 pt-4 border-t border-slate-100 space-y-3">
              <!-- Expert Support Callout Box -->
              <div
                class="flex items-center justify-between p-3 sm:p-3.5 rounded-2xl bg-gradient-to-r from-slate-50 via-slate-100/80 to-brand-blue/10 border border-slate-200/90">
                <div class="flex items-center gap-2.5 sm:gap-3">
                  <div
                    class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-brand-yellow text-brand-blue flex items-center justify-center font-bold text-base flex-shrink-0 shadow-sm">
                    <i class="fa-solid fa-headset"></i>
                  </div>
                  <div>
                    <span class="block text-xs font-bold text-slate-900">Need Help Choosing Tyres?</span>
                    <span class="block text-[11px] text-slate-600 font-medium">Talk to TyreHub Expert for instant
                      advice</span>
                  </div>
                </div>
                <a href="tel:+919876543210"
                  class="px-3 sm:px-3.5 py-2 rounded-xl bg-brand-blue text-brand-yellow text-xs font-extrabold hover:bg-brand-blue/90 transition text-center flex items-center gap-1.5 flex-shrink-0 shadow-sm">
                  <i class="fa-solid fa-phone text-[10px]"></i>
                  <span class="hidden sm:inline">Call Expert</span>
                  <span class="sm:hidden">Call</span>
                </a>
              </div>
            </div>

          </div>
        </div>

        <!-- ========================================================= -->
        <!-- RIGHT COLUMN: SEARCH SETTING WIDGET (col-span-6) -->
        <!-- ========================================================= -->
        <div class="lg:col-span-6 flex order-1 lg:order-2" data-aos="fade-left" data-aos-duration="600">
          <div id="search-card"
            class="w-full bg-white border border-slate-200/90 rounded-[24px] p-5 sm:p-6 shadow-xl relative z-40 flex flex-col justify-between">

            <div>
              <!-- Search Settings Header -->
              <div class="flex items-center gap-2.5 mb-4 pb-3 border-b border-slate-100">
                <div
                  class="w-9 h-9 rounded-xl bg-brand-yellow text-brand-blue flex items-center justify-center font-bold text-base shadow-sm flex-shrink-0">
                  <i class="fa-solid fa-sliders"></i>
                </div>
                <div>
                  <h3 class="text-base sm:text-lg font-bold text-brand-blue font-outfit">Tyre Search Settings</h3>
                  <p class="text-[11px] text-slate-500 font-medium">Configure your search parameters for instant match
                  </p>
                </div>
              </div>

              <!-- 3 Pill-Style Tabs Header with Common SHOP BY Label -->
              <div class="mb-4">
                <span class="block text-[10px] font-extrabold uppercase tracking-widest text-slate-500 mb-1.5 font-outfit">
                  SHOP BY :
                </span>
                <div
                  class="search-tabs-header flex items-center justify-between gap-1 p-1 bg-slate-100/90 rounded-xl border border-slate-200/80">
                  <button type="button" data-tab="tab-vehicle"
                    class="tab-btn active flex-1 py-2 px-1.5 rounded-lg text-xs font-extrabold transition-all duration-200 text-center uppercase tracking-wider bg-brand-yellow text-brand-blue shadow-sm border border-brand-yellow">
                    VEHICLE
                  </button>
                  <button type="button" data-tab="tab-size"
                    class="tab-btn flex-1 py-2 px-1.5 rounded-lg text-xs font-bold transition-all duration-200 text-center uppercase tracking-wider bg-white/60 text-brand-blue/80 hover:bg-white hover:text-brand-blue border border-transparent">
                    TYRE SIZE
                  </button>
                  <button type="button" data-tab="tab-reg"
                    class="tab-btn flex-1 py-2 px-1.5 rounded-lg text-xs font-bold transition-all duration-200 text-center uppercase tracking-wider bg-white/60 text-brand-blue/80 hover:bg-white hover:text-brand-blue border border-transparent">
                    REG NUMBER
                  </button>
                </div>
              </div>

              <!-- Tab Contents Wrapper -->
              <div id="search-tabs-content" class="relative overflow-hidden transition-all duration-200">

                <!-- TAB 1: BY VEHICLE -->
                <div id="tab-vehicle" class="tab-pane">
                  <!-- Vehicle Illustration Graphic -->
                  <div class="mb-3.5 flex justify-center">
                    <img src="assets/image/vehicle-select-guide.webp" alt="Vehicle Guide"
                      class="h-20 sm:h-24 object-contain filter drop-shadow-sm">
                  </div>

                  <form class="space-y-2.5" onsubmit="return false;">
                    <!-- Vehicle Type Selector Cards (2W, 3W, 4W) -->
                    <div class="mb-3">
                      <label class="block text-[10px] font-bold text-slate-600 uppercase tracking-wider mb-1.5">
                        Select Vehicle Type
                      </label>
                      <div class="grid grid-cols-3 gap-2" id="vehicle-type-selector">
                        <button type="button" data-type="2w"
                          class="v-type-card flex flex-col items-center justify-center py-2 px-1 rounded-xl border-2 border-slate-200 bg-white text-slate-700 hover:bg-slate-50 hover:text-brand-blue font-semibold transition-all duration-200 cursor-pointer group">
                          <i
                            class="fa-solid fa-motorcycle text-base mb-0.5 group-hover:scale-110 transition-transform"></i>
                          <span class="text-[11px] font-bold">2 Wheeler</span>
                        </button>
                        <button type="button" data-type="3w"
                          class="v-type-card flex flex-col items-center justify-center py-2 px-1 rounded-xl border-2 border-slate-200 bg-white text-slate-700 hover:bg-slate-50 hover:text-brand-blue font-semibold transition-all duration-200 cursor-pointer group">
                          <i
                            class="fa-solid fa-truck-pickup text-base mb-0.5 group-hover:scale-110 transition-transform"></i>
                          <span class="text-[11px] font-bold">3 Wheeler</span>
                        </button>
                        <button type="button" data-type="4w"
                          class="v-type-card active flex flex-col items-center justify-center py-2 px-1 rounded-xl border-2 border-brand-yellow bg-brand-yellow/15 text-brand-blue font-bold shadow-sm shadow-brand-yellow/20 transition-all duration-200 cursor-pointer group">
                          <i class="fa-solid fa-car text-base mb-0.5 group-hover:scale-110 transition-transform"></i>
                          <span class="text-[11px] font-bold">4 Wheeler</span>
                        </button>
                      </div>
                    </div>

                    <!-- Brand Select -->
                    <div>
                      <select id="vehicle-brand-select"
                        class="w-full h-11 sm:h-12 bg-slate-50 border border-slate-300 rounded-xl px-3.5 text-xs sm:text-sm font-semibold text-brand-blue focus:ring-0 focus:border-brand-blue focus:bg-white outline-none transition duration-200">
                        <option value="" disabled selected>Select Vehicle Brand</option>
                      </select>
                    </div>

                    <!-- Model Select -->
                    <div>
                      <select id="vehicle-model-select" disabled
                        class="w-full h-11 sm:h-12 bg-slate-50 border border-slate-300 rounded-xl px-3.5 text-xs sm:text-sm font-semibold text-brand-blue focus:ring-0 focus:border-brand-blue focus:bg-white outline-none transition duration-200 disabled:opacity-60 disabled:cursor-not-allowed">
                        <option value="" disabled selected>Select Model</option>
                      </select>
                    </div>

                    <!-- Variant Select -->
                    <div>
                      <select id="vehicle-variant-select" disabled
                        class="w-full h-11 sm:h-12 bg-slate-50 border border-slate-300 rounded-xl px-3.5 text-xs sm:text-sm font-semibold text-brand-blue focus:ring-0 focus:border-brand-blue focus:bg-white outline-none transition duration-200 disabled:opacity-60 disabled:cursor-not-allowed">
                        <option value="" disabled selected>Select Submodel / Variant</option>
                      </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-1">
                      <button type="button" id="vehicle-search-submit"
                        class="btn-primary w-full h-11 sm:h-12 text-xs sm:text-sm font-extrabold uppercase tracking-wider rounded-xl flex items-center justify-center gap-2 shadow-md hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200">
                        <span>FIND TYRES</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                      </button>
                    </div>
                  </form>
                </div>

                <!-- TAB 2: BY TYRE SIZE -->
                <div id="tab-size" class="tab-pane hidden">
                  <!-- Tyre Sidewall Reference Graphic -->
                  <div class="mb-3.5 flex justify-center">
                    <img src="assets/image/tyre-size-guide.webp" alt="Tyre Size Sidewall Guide"
                      class="h-20 sm:h-24 object-contain filter drop-shadow-sm">
                  </div>

                  <!-- Size Guide Helper Callout -->
                  <div class="mb-3 p-2.5 rounded-xl bg-slate-50 border border-slate-200 flex items-center gap-2.5">
                    <div
                      class="w-7 h-7 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center font-bold text-xs flex-shrink-0">
                      <i class="fa-solid fa-circle-info"></i>
                    </div>
                    <p class="text-[11px] text-slate-600 font-medium leading-tight">
                      Check your tyre sidewall for size specs e.g. <strong class="text-brand-blue font-bold">185 / 65 R
                        15</strong>
                    </p>
                  </div>

                  <form class="space-y-2.5" onsubmit="return false;">
                    <!-- 3-Column Size Specs -->
                    <div class="grid grid-cols-3 gap-2">
                      <div>
                        <label
                          class="block text-[10px] font-bold text-slate-600 uppercase tracking-wider mb-1">Width</label>
                        <select id="tyre-width-select"
                          class="w-full h-11 sm:h-12 bg-slate-50 border border-slate-300 rounded-xl px-2.5 text-xs sm:text-sm font-semibold text-brand-blue focus:ring-0 focus:border-brand-blue focus:bg-white outline-none transition duration-200">
                          <option value="" disabled selected>Width</option>
                        </select>
                      </div>

                      <div>
                        <label
                          class="block text-[10px] font-bold text-slate-600 uppercase tracking-wider mb-1">Profile</label>
                        <select id="tyre-profile-select"
                          class="w-full h-11 sm:h-12 bg-slate-50 border border-slate-300 rounded-xl px-2.5 text-xs sm:text-sm font-semibold text-brand-blue focus:ring-0 focus:border-brand-blue focus:bg-white outline-none transition duration-200">
                          <option value="" disabled selected>Profile</option>
                        </select>
                      </div>

                      <div>
                        <label
                          class="block text-[10px] font-bold text-slate-600 uppercase tracking-wider mb-1">Rim</label>
                        <select id="tyre-rim-select"
                          class="w-full h-11 sm:h-12 bg-slate-50 border border-slate-300 rounded-xl px-2.5 text-xs sm:text-sm font-semibold text-brand-blue focus:ring-0 focus:border-brand-blue focus:bg-white outline-none transition duration-200">
                          <option value="" disabled selected>Rim</option>
                        </select>
                      </div>
                    </div>

                    <!-- Speed Rating -->
                    <div>
                      <select id="tyre-speed-select"
                        class="w-full h-11 sm:h-12 bg-slate-50 border border-slate-300 rounded-xl px-3.5 text-xs sm:text-sm font-semibold text-brand-blue focus:ring-0 focus:border-brand-blue focus:bg-white outline-none transition duration-200">
                        <option value="" selected>Speed Rating (Optional)</option>
                      </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-1">
                      <button type="button" id="size-search-submit"
                        class="btn-primary w-full h-11 sm:h-12 text-xs sm:text-sm font-extrabold uppercase tracking-wider rounded-xl flex items-center justify-center gap-2 shadow-md hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200">
                        <span>FIND TYRES</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                      </button>
                    </div>
                  </form>
                </div>

                <!-- TAB 3: BY REGISTRATION NUMBER -->
                <div id="tab-reg" class="tab-pane hidden">
                  <!-- Registration Graphic -->
                  <div class="mb-3.5 flex justify-center">
                    <img src="assets/image/reg-number.webp" alt="Registration Number Guide"
                      class="h-20 sm:h-24 object-contain filter drop-shadow-sm">
                  </div>

                  <!-- Reg Lookup Helper Callout -->
                  <div
                    class="mb-3 p-2.5 rounded-xl bg-brand-yellow/15 border border-brand-yellow/40 flex items-center gap-2.5">
                    <div
                      class="w-7 h-7 rounded-lg bg-brand-yellow text-brand-blue flex items-center justify-center font-bold text-xs flex-shrink-0 shadow-sm">
                      <i class="fa-solid fa-bolt"></i>
                    </div>
                    <p class="text-[11px] text-brand-blue font-bold leading-tight">
                      Instant tyre matching via official vehicle registration lookup
                    </p>
                  </div>

                  <div class="mb-3">
                    <label class="block text-xs font-bold text-brand-blue font-outfit mb-1.5">
                      Enter your vehicle number
                    </label>

                    <!-- HSRP Indian Plate Styling Container -->
                    <div class="relative w-full mb-1.5">
                      <div
                        class="w-full h-11 sm:h-12 bg-white border-2 border-brand-blue/80 rounded-xl shadow-md flex items-center overflow-hidden focus-within:border-brand-blue focus-within:shadow-lg transition-all duration-200">

                        <!-- Left IND Emblem Strip (Authentic Blue Strip with Chromium Hologram & Ashoka Chakra dot) -->
                        <div
                          class="h-full px-3.5 bg-gradient-to-b from-[#0038A8] to-[#002270] text-white flex flex-col items-center justify-center flex-shrink-0 select-none border-r-2 border-brand-blue/30 shadow-inner">
                          <img src="assets/image/ind.png" alt="IND Emblem"
                            class="h-5 w-auto object-contain flex-shrink-0 select-none ">
                        </div>

                        <!-- Plate Number Input -->
                        <input type="text" id="reg-plate-input" placeholder="GJ 01 AB 1234" maxlength="13"
                          class="w-full h-full bg-white text-brand-blue font-extrabold text-sm sm:text-base px-3.5 uppercase tracking-widest font-outfit outline-none placeholder:text-slate-400 placeholder:font-semibold">
                      </div>

                      <p class="text-[10px] text-slate-500 font-medium mt-1.5 flex items-center gap-1">
                        <i class="fa-solid fa-circle-check text-emerald-500 text-[10px]"></i>
                        <span>Enter number as on your RC plate.</span>
                      </p>

                      <!-- Inline Realtime Validation Feedback -->
                      <div id="reg-feedback-msg"
                        class="mt-1 text-[11px] font-semibold hidden transition-all duration-200">
                      </div>
                    </div>
                  </div>

                  <form class="space-y-2.5" onsubmit="return false;">
                    <!-- Submit Button -->
                    <div class="pt-1">
                      <button type="button" id="reg-search-submit"
                        class="btn-primary w-full h-11 sm:h-12 text-xs sm:text-sm font-extrabold uppercase tracking-wider rounded-xl flex items-center justify-center gap-2 shadow-md hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200">
                        <span>FIND TYRES</span>
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                      </button>
                    </div>
                  </form>
                </div>

              </div>

            </div>

          </div>
        </div>

      </div>

    </div>
  </section>


  <!-- ========================================== -->
  <!-- 7. "BUY TYRES ONLINE INDIA" OVERVIEW       -->
  <!-- ========================================== -->
  <section class="py-14 bg-white border-t border-b border-slate-200">
    <div class="container mx-auto px-3 text-center">

      <span class="text-xs font-bold uppercase tracking-widest text-slate-400 block" data-aos="fade-up" data-aos-duration="600">Tyrehub</span>
      <h2 class="text-3xl md:text-4xl font-medium text-brand-blue mt-1 mb-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        Buy Tyres <span class="font-bold text-brand-blue">Online India</span>
      </h2>
      <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mb-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150"></div>

      <p class="max-w-4xl mx-auto text-slate-600 text-xs md:text-sm leading-relaxed mb-10" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        Tyrehub is the leading <strong class="text-slate-900 font-bold">tyre store in Ahmedabad</strong> that helps you
        <strong class="text-slate-900 font-bold">buy tyre online</strong>. We are determined to provide the best quality
        tyres, deliver stellar tyre services and exquisite experience to our buyers. Check out our irresistible deals on
        tyres coupled with a next-level after service. We understand your requirements and we know how important tyres
        are. Explore our website to know more about us and place your order today to wave goodbye to all your
        tyre-related hassles. We have got your tyre's back!
      </p>

      <!-- 4 Pillars Cards (Staggered Fade Up 5, 6, 7, 8) -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-left">

        <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
          <div
            class="w-12 h-12 rounded-xl bg-brand-yellow/20 text-brand-blue flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-shield-halved"></i>
          </div>
          <h3 class="font-bold text-slate-900 text-sm mb-1.5">100% Genuine Tyres</h3>
          <p class="text-slate-500 text-xs leading-relaxed">Direct manufacturer warranty up to 5 years on all major
            domestic and imported brands.</p>
        </div>

        <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
          <div
            class="w-12 h-12 rounded-xl bg-brand-yellow/20 text-brand-blue flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-van-shuttle"></i>
          </div>
          <h3 class="font-bold text-slate-900 text-sm mb-1.5">Free Doorstep Delivery</h3>
          <p class="text-slate-500 text-xs leading-relaxed">Rapid doorstep fitment vans equipped with automatic tire
            changers and balancers.</p>
        </div>

        <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
          <div
            class="w-12 h-12 rounded-xl bg-brand-yellow/20 text-brand-blue flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-tags"></i>
          </div>
          <h3 class="font-bold text-slate-900 text-sm mb-1.5">Lowest Price Guarantee</h3>
          <p class="text-slate-500 text-xs leading-relaxed">Unbeatable wholesale rates and cash-back offers on leading
            tyre and battery brands.</p>
        </div>

        <div class="bg-slate-50 p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
          <div
            class="w-12 h-12 rounded-xl bg-brand-yellow/20 text-brand-blue flex items-center justify-center text-xl mb-4 font-bold">
            <i class="fa-solid fa-map-location-dot"></i>
          </div>
          <h3 class="font-bold text-slate-900 text-sm mb-1.5">50+ Partner Stores</h3>
          <p class="text-slate-500 text-xs leading-relaxed">Certified garages and fitment centers across Ahmedabad,
            Gandhinagar, and SG Highway.</p>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 8. CAR BATTERY REPLACEMENT IN MINUTES     -->
  <!-- ========================================== -->
  <section id="car-battery" class="py-16 lg:py-20 bg-brand-blueDark text-white relative overflow-hidden">

    <div class="container mx-auto px-3 relative z-10 text-center">

      <h2 class="text-3xl md:text-4xl font-medium text-white tracking-tight" data-aos="fade-up" data-aos-duration="600">
        Car Battery <span class="text-brand-yellow font-bold">Replacement In Minutes</span>
      </h2>
      <p class="mt-2 text-xs md:text-sm font-semibold tracking-widest text-slate-300 uppercase" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        GET A CAR BATTERY OR CAR JUMP-START ON THE SPOT
      </p>

      <!-- 3-Step Emergency Process Cards (Matching Old Screenshot) -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 text-left">

        <!-- Step 1 -->
        <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="100"
          class="step-card bg-white/10 backdrop-blur-md rounded-2xl p-6 border-2 border-white/20 hover:border-brand-yellow hover:bg-white/15 transition-colors duration-200 ease-in-out cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <span class="text-4xl font-black font-outfit text-brand-yellow">1</span>
            <div
              class="w-12 h-12 rounded-xl bg-white text-brand-blue flex items-center justify-center text-xl shadow-md">
              <i class="fa-solid fa-phone"></i>
            </div>
          </div>
          <a href="tel:7575888916" class="text-2xl font-black text-brand-yellow font-outfit hover:underline block mb-2">
            7575 888 916
          </a>
          <p class="text-slate-200 text-xs md:text-sm leading-relaxed font-medium">
            Call us toll free if your car is not starting. Share your Car make, model, and year. We'll immediately
            dispatch assistance to you.
          </p>
        </div>

        <!-- Step 2 -->
        <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="200"
          class="step-card bg-white/10 backdrop-blur-md rounded-2xl p-6 border-2 border-white/20 hover:border-brand-yellow hover:bg-white/15 transition-colors duration-200 ease-in-out cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <span class="text-4xl font-black font-outfit text-brand-yellow">2</span>
            <div
              class="w-12 h-12 rounded-xl bg-white text-brand-blue flex items-center justify-center text-xl shadow-md">
              <i class="fa-solid fa-location-crosshairs"></i>
            </div>
          </div>
          <h3 class="text-2xl font-black text-white font-outfit mb-2">
            30 Minutes
          </h3>
          <p class="text-slate-200 text-xs md:text-sm leading-relaxed font-medium">
            Is what it takes our technicians to reach your location. Once there they will check your car and test your
            car battery.
          </p>
        </div>

        <!-- Step 3 -->
        <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="300"
          class="step-card bg-white/10 backdrop-blur-md rounded-2xl p-6 border-2 border-white/20 hover:border-brand-yellow hover:bg-white/15 transition-colors duration-200 ease-in-out cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <span class="text-4xl font-black font-outfit text-brand-yellow">3</span>
            <div
              class="w-12 h-12 rounded-xl bg-white text-brand-blue flex items-center justify-center text-xl shadow-md">
              <i class="fa-solid fa-car-battery"></i>
            </div>
          </div>
          <h3 class="text-2xl font-black text-white font-outfit mb-2">
            Car Battery
          </h3>
          <p class="text-slate-200 text-xs md:text-sm leading-relaxed font-medium">
            Replacement is done if needed, or a jump-start to your car. Pay securely and drive away with a 1 year free
            roadside assistance in Ahmedabad.
          </p>
        </div>

      </div>

      <!-- Quick Action CTA -->
      <div class="mt-10 flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <button onclick="openBookingModal('Express 30-Min Battery Replacement')"
          class="btn-primary text-xs md:text-sm px-8 py-3.5">
          <i class="fa-solid fa-bolt"></i> Request Immediate Battery Callout
        </button>
      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 9. "WHY CHOOSE TYREHUB?" SECTION          -->
  <!-- ========================================== -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-3 text-center">

      <span class="text-xs font-bold uppercase tracking-widest text-slate-400 block" data-aos="fade-up" data-aos-duration="600">Tyrehub</span>
      <h2 class="text-3xl md:text-4xl font-medium text-brand-blue mt-1 mb-3" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        Why Choose <span class="font-bold text-brand-blue">TyreHub?</span>
      </h2>
      <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mb-6" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150"></div>

      <!-- Description Block (Element 4) -->
      <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <p class="max-w-3xl mx-auto text-slate-600 text-xs md:text-sm leading-relaxed mb-3">
          Tyre hub is the best automotive service center in Ahmedabad. Driven by the desire to provide a next-level
          experience, we provide you with a wide range of tyres at highly affordable prices. Find the right product, get
          it delivered in no time and have it installed by the hands of expert professionals. We care for you. We care
          about your time. And, we care about your tyres. Experience our unparalleled services today, we are just a click
          away.
        </p>

        <p class="text-brand-blue font-bold text-xs md:text-sm mb-10">
          We have 50+ service partners in your city, you can choose anyone near to the office or home location. We make
          your life easy.
        </p>
      </div>

      <!-- Why Choose Carousel Cards (Slick Slider - Element 5) -->
      <div id="why-choose-slider" class="slick-carousel -mx-3 pb-8" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">

        <!-- Card 1 -->
        <div class="px-3 h-full">
          <div
            class="bg-slate-50 hover:bg-white rounded-2xl p-6 border border-slate-200 hover:border-brand-blue transition shadow-sm hover:shadow-card-hover text-center h-full flex flex-col items-center justify-center">
            <div
              class="w-16 h-16 shrink-0 rounded-full bg-brand-yellow/30 text-brand-blue flex items-center justify-center text-2xl mb-4 font-bold border-2 border-brand-yellow">
              <i class="fa-solid fa-magnifying-glass-chart"></i>
            </div>
            <h3 class="font-bold text-slate-900 text-base mb-2">Determine Your Tyre At Ease</h3>
            <p class="text-slate-500 text-xs leading-relaxed">
              You can buy tyres online by just selecting your vehicle make and model.
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="px-3 h-full">
          <div
            class="bg-slate-50 hover:bg-white rounded-2xl p-6 border border-slate-200 hover:border-brand-blue transition shadow-sm hover:shadow-card-hover text-center h-full flex flex-col items-center justify-center">
            <div
              class="w-16 h-16 shrink-0 rounded-full bg-brand-yellow/30 text-brand-blue flex items-center justify-center text-2xl mb-4 font-bold border-2 border-brand-yellow">
              <i class="fa-solid fa-list-check"></i>
            </div>
            <h3 class="font-bold text-slate-900 text-base mb-2">Wide Range</h3>
            <p class="text-slate-500 text-xs leading-relaxed">
              We offer all big brands like BRIDGESTONE, GOODYEAR, MRF, JK Tyres, CEAT, Apollo, FALKEN and much more.
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="px-3 h-full">
          <div
            class="bg-slate-50 hover:bg-white rounded-2xl p-6 border border-slate-200 hover:border-brand-blue transition shadow-sm hover:shadow-card-hover text-center h-full flex flex-col items-center justify-center">
            <div
              class="w-16 h-16 shrink-0 rounded-full bg-brand-yellow/30 text-brand-blue flex items-center justify-center text-2xl mb-4 font-bold border-2 border-brand-yellow">
              <i class="fa-solid fa-hand-holding-dollar"></i>
            </div>
            <h3 class="font-bold text-slate-900 text-base mb-2">Low Prices</h3>
            <p class="text-slate-500 text-xs leading-relaxed">
              Assured best deals on your trusted tyres and installation services with zero hidden fees.
            </p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="px-3 h-full">
          <div
            class="bg-slate-50 hover:bg-white rounded-2xl p-6 border border-slate-200 hover:border-brand-blue transition shadow-sm hover:shadow-card-hover text-center h-full flex flex-col items-center justify-center">
            <div
              class="w-16 h-16 shrink-0 rounded-full bg-brand-yellow/30 text-brand-blue flex items-center justify-center text-2xl mb-4 font-bold border-2 border-brand-yellow">
              <i class="fa-solid fa-certificate"></i>
            </div>
            <h3 class="font-bold text-slate-900 text-base mb-2">Certified Fitment Partners</h3>
            <p class="text-slate-500 text-xs leading-relaxed">
              Equipped with computerized high-precision wheel balancers and automatic mounting stations.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 10. "HOW IT WORKS" 3-STEP TIMELINE         -->
  <!-- ========================================== -->
  <section class="py-16 lg:py-20 bg-brand-blue text-white relative overflow-hidden">
    <div class="container mx-auto px-3 text-center relative z-10">

      <h2 class="text-3xl md:text-4xl font-medium text-white tracking-tight" data-aos="fade-up" data-aos-duration="600">
        How It <span class="text-brand-yellow font-bold">Works</span>
      </h2>
      <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mt-3 mb-12" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100"></div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

        <!-- Step 1 -->
        <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
          <div
            class="w-20 h-20 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl mb-4 relative shadow-glow-yellow">
            <i class="fa-solid fa-dharmachakra"></i>
            <span
              class="absolute -top-2 -right-2 w-7 h-7 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit">01</span>
          </div>
          <h3 class="text-base font-bold text-white mt-1">Buy Tyre Or Service</h3>
          <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
            Browse wide range of car, bike tyres, and auto battery brands at lowest prices.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
          <div
            class="w-20 h-20 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl mb-4 relative shadow-glow-yellow">
            <i class="fa-solid fa-map-location-dot"></i>
            <span
              class="absolute -top-2 -right-2 w-7 h-7 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit">02</span>
          </div>
          <h3 class="text-base font-bold text-white mt-1">Select Service Partner Near By</h3>
          <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
            Choose from 50+ certified garages for fitment or opt for Doorstep Fitting Van.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
          <div
            class="w-20 h-20 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl mb-4 relative shadow-glow-yellow">
            <i class="fa-solid fa-file-invoice-dollar"></i>
            <span
              class="absolute -top-2 -right-2 w-7 h-7 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit">03</span>
          </div>
          <h3 class="text-base font-bold text-white mt-1">Make Payment And Take Invoice</h3>
          <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
            Pay safely via UPI, cards, netbanking or cash on fitment with GST invoice.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 11. TYREHUB ADVANTAGE & COVERAGE           -->
  <!-- ========================================== -->
  <section class="py-16 bg-slate-50">
    <div class="container mx-auto px-3">

      <!-- Header Block (Element 1 - Fade Up) -->
      <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="600">
        <span class="text-xs font-bold uppercase tracking-widest text-slate-400">Advantage</span>
        <h2 class="text-3xl md:text-4xl font-medium text-brand-blue mt-1">
          Tyrehub <span class="font-bold text-brand-blue">Advantage</span>
        </h2>
        <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mt-3"></div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">

        <!-- Left: Checklist Benefits (Element 2 - Fade Right ->) -->
        <div class="lg:col-span-6 space-y-5" data-aos="fade-right" data-aos-duration="600">
          <h3 class="text-xl md:text-2xl font-bold text-slate-900">
            TyreHub has a wide network of reliable service partners in Ahmedabad and Gandhinagar.
          </h3>

          <ul class="space-y-3.5">
            <li class="flex items-center gap-3">
              <div
                class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                <i class="fa-solid fa-check"></i>
              </div>
              <span class="text-xs md:text-sm font-semibold text-slate-800">Get fitted tyres at your convenience</span>
            </li>
            <li class="flex items-center gap-3">
              <div
                class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                <i class="fa-solid fa-check"></i>
              </div>
              <span class="text-xs md:text-sm font-semibold text-slate-800"><strong class="text-brand-blue">FREE
                  DELIVERY</strong> on all types of tyres</span>
            </li>
            <li class="flex items-center gap-3">
              <div
                class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                <i class="fa-solid fa-check"></i>
              </div>
              <span class="text-xs md:text-sm font-semibold text-slate-800">Genuine installation charges with
                computerized balancing</span>
            </li>
            <li class="flex items-center gap-3">
              <div
                class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-xs font-bold flex-shrink-0">
                <i class="fa-solid fa-check"></i>
              </div>
              <span class="text-xs md:text-sm font-semibold text-slate-800">Installation satisfaction is 100%
                assured</span>
            </li>
          </ul>

          <div class="pt-2">
            <button onclick="openBookingModal('General Doorstep Inquiry')"
              class="btn-secondary text-xs md:text-sm px-6 py-2.5">
              <i class="fa-solid fa-shield-check"></i> Experience TyreHub Advantage
            </button>
          </div>
        </div>

        <!-- Right: Pure Service Partner Image Visual (Element 3 - Fade Left <-) -->
        <div class="lg:col-span-6 flex items-center justify-center" data-aos="fade-left" data-aos-duration="600">
          <img src="assets/image/service_partner_img.webp" alt="TyreHub Service Partner"
            class="w-full h-auto object-contain">
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 12. WHAT OUR CUSTOMERS SAY (TESTIMONIALS)  -->
  <!-- ========================================== -->
  <section class="py-16 lg:py-20 bg-brand-blueDark text-white relative">
    <div class="container mx-auto px-3 max-w-4xl text-center relative z-10">

      <!-- Header Block (Element 1 - Fade Up) -->
      <div data-aos="fade-up" data-aos-duration="600">
        <h2 class="text-3xl md:text-4xl font-medium text-white tracking-tight">
          What Our <span class="text-brand-yellow font-bold">Customers Say</span>
        </h2>
        <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mt-3 mb-10"></div>
      </div>

      <!-- Testimonial Slider Card Block (Element 2 - Fade Up with delay) -->
      <div class="relative" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
        <div id="testimonials-slider" class="slick-carousel">

          <!-- Review 1 (Manav Patel - Matching Screenshot) -->
          <div class="py-4">
            <div class="flex flex-col items-center text-center">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=200&q=80"
                alt="Manav Patel"
                class="w-20 h-20 rounded-full object-cover border-2 border-brand-yellow mb-3 shadow-lg">
              <h3 class="text-lg font-bold text-white font-outfit">Manav Patel</h3>
              <p class="text-xs text-brand-yellow font-semibold mb-3">Honda City Owner • Ahmedabad</p>

              <div class="text-brand-yellow text-xs mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>

              <blockquote class="text-xs md:text-base text-slate-200 max-w-2xl leading-relaxed italic">
                <i class="fa-solid fa-quote-left text-brand-yellow mr-2"></i>
                I purchased car tyres online first time from TyreHub and get them installed from their service partner.
                It was an amazing experience. The entire process was smooth and impressive. Highly recommend TyreHub. I
                would definitely buy again.
                <i class="fa-solid fa-quote-right text-brand-yellow ml-2"></i>
              </blockquote>
            </div>
          </div>

          <!-- Review 2 -->
          <div class="py-4">
            <div class="flex flex-col items-center text-center">
              <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=200&q=80"
                alt="Priya Shah"
                class="w-20 h-20 rounded-full object-cover border-2 border-brand-yellow mb-3 shadow-lg">
              <h3 class="text-lg font-bold text-white font-outfit">Priya Shah</h3>
              <p class="text-xs text-brand-yellow font-semibold mb-3">Hyundai Creta Owner • Gandhinagar</p>

              <div class="text-brand-yellow text-xs mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>

              <blockquote class="text-xs md:text-base text-slate-200 max-w-2xl leading-relaxed italic">
                <i class="fa-solid fa-quote-left text-brand-yellow mr-2"></i>
                My car battery died in the middle of SG Highway at 9 PM. Called TyreHub emergency helpline and the
                technician was at my location in 25 minutes with a brand new Exide battery. Fantastic service!
                <i class="fa-solid fa-quote-right text-brand-yellow ml-2"></i>
              </blockquote>
            </div>
          </div>

          <!-- Review 3 -->
          <div class="py-4">
            <div class="flex flex-col items-center text-center">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=200&q=80"
                alt="Hardik Desai"
                class="w-20 h-20 rounded-full object-cover border-2 border-brand-yellow mb-3 shadow-lg">
              <h3 class="text-lg font-bold text-white font-outfit">Hardik Desai</h3>
              <p class="text-xs text-brand-yellow font-semibold mb-3">Maruti Brezza Owner • Bodakdev</p>

              <div class="text-brand-yellow text-xs mb-3">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>

              <blockquote class="text-xs md:text-base text-slate-200 max-w-2xl leading-relaxed italic">
                <i class="fa-solid fa-quote-left text-brand-yellow mr-2"></i>
                Best price on Bridgestone tyres in Ahmedabad. Got doorstep fitment and free wheel balancing done at my
                office parking lot. Saved so much time and hassle.
                <i class="fa-solid fa-quote-right text-brand-yellow ml-2"></i>
              </blockquote>
            </div>
          </div>

        </div>

        <!-- Custom Navigation -->
        <div class="flex items-center justify-center gap-3 mt-6">
          <button id="testimonial-prev"
            class="w-9 h-9 rounded-full bg-white/20 hover:bg-brand-yellow hover:text-brand-blue text-white flex items-center justify-center transition"
            aria-label="Previous">
            <i class="fa-solid fa-chevron-left text-xs"></i>
          </button>
          <button id="testimonial-next"
            class="w-9 h-9 rounded-full bg-white/20 hover:bg-brand-yellow hover:text-brand-blue text-white flex items-center justify-center transition"
            aria-label="Next">
            <i class="fa-solid fa-chevron-right text-xs"></i>
          </button>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 13. BRANDS SHOWCASE (TYRES & BATTERIES)    -->
  <!-- ========================================== -->
  <section id="tyre-brands-section" class="py-14 bg-white border-b border-slate-200">
    <div class="container mx-auto px-3">

      <!-- Tyre Brands Header (Element 1 - Fade Up) -->
      <div class="text-center mb-8" data-aos="fade-up" data-aos-duration="600">
        <h2 class="text-2xl md:text-3xl font-medium text-brand-blue">
          Our <span class="font-bold text-brand-blue">Tyre Brands</span>
        </h2>
        <div class="w-12 h-1 bg-brand-yellow mx-auto rounded-full mt-2"></div>
      </div>

      <!-- Tyre Brands Slider (Element 2 - Fade Up with delay) -->
      <div id="tyre-brands-slider" class="slick-carousel -mx-2 mb-14" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">

        <!-- Bridgestone -->
        <div class="px-2">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/brand-logo/bridgestone.webp" alt="Bridgestone Tyres"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

        <!-- MRF -->
        <div class="px-2">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/brand-logo/mrf.webp" alt="MRF Tyres"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

        <!-- Apollo -->
        <div class="px-2">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/brand-logo/apollotyres.webp" alt="Apollo Tyres"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

        <!-- JK Tyre -->
        <div class="px-2">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/brand-logo/jktyre.webp" alt="JK Tyre"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

        <!-- TVS Tyres -->
        <div class="px-2">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/brand-logo/tvs.webp" alt="TVS Tyres"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

        <!-- Yokohama -->
        <div class="px-2">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/brand-logo/yokohama.webp" alt="Yokohama Tyres"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

        <!-- Michelin -->
        <div class="px-2">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/brand-logo/michelin.webp" alt="Michelin Tyres"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

        <!-- Goodyear -->
        <div class="px-2">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/brand-logo/goodyear.webp" alt="Goodyear Tyres"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

        <!-- CEAT -->
        <div class="px-2">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/brand-logo/ceat.webp" alt="CEAT Tyres"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

      </div>

      <!-- Battery Brands Header (Element 3 - Fade Up) -->
      <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="600">
        <h2 class="text-2xl md:text-3xl font-medium text-brand-blue">
          Our <span class="font-bold text-brand-blue">Battery Brands</span>
        </h2>
        <div class="w-12 h-1 bg-brand-yellow mx-auto rounded-full mt-2"></div>
      </div>

      <!-- Battery Brands Cards (Element 4 - Fade Up with delay) -->
      <div class="flex items-center justify-center gap-4 sm:gap-6 max-w-lg mx-auto" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">

        <!-- Amaron -->
        <div class="w-1/2 sm:w-60">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/battery-brands/amaron.webp" alt="Amaron Battery"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

        <!-- Exide -->
        <div class="w-1/2 sm:w-60">
          <div
            class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
            <img src="assets/image/battery-brands/exide.webp" alt="Exide Battery"
              class="h-10 w-auto max-w-[120px] object-contain">
          </div>
        </div>

      </div>

    </div>
  </section>
<?php
include 'includes/footer.php';
?>
