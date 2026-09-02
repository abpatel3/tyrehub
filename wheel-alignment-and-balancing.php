<?php
$page_title = "Wheel Alignment & Balancing Services in Ahmedabad | TyreHub";
$page_description = "Get expert 3D wheel alignment and computerised wheel balancing services at TyreHub in Ahmedabad. Certified technicians, modern equipment, and 50+ service partner locations.";
$current_page = "alignment";

include 'includes/interface.php';
include 'includes/header.php';
?>

<?php include_once __DIR__ . '/assets/icons/vehicle-icons.svg'; ?>

<!-- ========================================== -->
<!-- 1. DARK HERO BANNER WITH VEHICLE SELECTOR  -->
<!-- ========================================== -->
<section class="relative py-8 sm:py-12 lg:py-16 xl:py-20 text-white overflow-hidden">
  
  <!-- Dark Garage Backdrop Overlay Image (Darkened to match mockup) -->
  <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
    <img src="assets/image/alignment-bg.jpg" alt="Mechanic using tyre balancing machine in auto workshop" class="w-full h-full object-cover object-right absolute inset-0">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, #0b1122 0%, rgba(11, 17, 34, 0.8) 45%, rgba(11, 17, 34, 0.3) 100%); z-index: 2;"></div>
  </div>

  <!-- Content Container -->
  <div class="container mx-auto px-4 max-w-7xl relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
      
      <!-- Right on Desktop (7 cols) / Top on Mobile: Hero Badges, Headlines & Values -->
      <div class="lg:col-span-7 text-left space-y-4 sm:space-y-6 order-1 lg:order-2" data-aos="fade-left" data-aos-duration="600">
        
        <!-- Pill Tag with Yellow Lightning Icon -->
        <div>
          <span class="inline-flex items-center gap-2 px-3 py-1.5 sm:px-3.5 sm:py-1.5 rounded-full border border-amber-400/40 bg-black/40 backdrop-blur-sm text-white font-bold text-[10px] sm:text-xs uppercase tracking-wider">
            <i class="fa-solid fa-bolt text-brand-yellow"></i> 3D WHEEL ALIGNMENT &amp; BALANCING
          </span>
        </div>

        <!-- Main Headline -->
        <div>
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold font-outfit leading-[1.15] sm:leading-[1.1]">
            <span class="text-white block">Better Alignment.</span>
            <span class="text-brand-yellow block mt-1">Smoother Drives.</span>
          </h1>
        </div>

        <!-- 3 Circular Feature Badges Row -->
        <div class="flex items-center gap-4 sm:gap-8 lg:gap-10 pt-1 sm:pt-2">
          
          <!-- Badge 1: 3D Precision -->
          <div class="flex flex-col items-center text-center">
            <div class="w-14 h-14 sm:w-16 sm:h-16 lg:w-18 lg:h-18 rounded-full hero-feature-circle flex items-center justify-center text-blue-200">
              <svg class="w-6 h-6 sm:w-7 sm:h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="7"/>
                <line x1="12" y1="2" x2="12" y2="6"/>
                <line x1="12" y1="18" x2="12" y2="22"/>
                <line x1="2" y1="12" x2="6" y2="12"/>
                <line x1="18" y1="12" x2="22" y2="12"/>
              </svg>
            </div>
            <span class="text-[11px] sm:text-xs md:text-sm font-semibold text-white font-outfit mt-2 sm:mt-2.5">3D Precision</span>
          </div>

          <!-- Badge 2: Certified Experts -->
          <div class="flex flex-col items-center text-center">
            <div class="w-14 h-14 sm:w-16 sm:h-16 lg:w-18 lg:h-18 rounded-full hero-feature-circle flex items-center justify-center text-blue-200">
              <svg class="w-6 h-6 sm:w-7 sm:h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                <path d="m9 12 2 2 4-4"/>
              </svg>
            </div>
            <span class="text-[11px] sm:text-xs md:text-sm font-semibold text-white font-outfit mt-2 sm:mt-2.5">Certified Experts</span>
          </div>

          <!-- Badge 3: 10+ Garages -->
          <div class="flex flex-col items-center text-center">
            <div class="w-14 h-14 sm:w-16 sm:h-16 lg:w-18 lg:h-18 rounded-full hero-feature-circle flex items-center justify-center text-blue-200">
              <svg class="w-6 h-6 sm:w-7 sm:h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9.5L12 3l9 6.5V20a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5z"/>
                <path d="M7 21v-7a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v7"/>
                <path d="M7 16h10"/>
              </svg>
            </div>
            <span class="text-[11px] sm:text-xs md:text-sm font-semibold text-white font-outfit mt-2 sm:mt-2.5">10+ Garages</span>
          </div>

        </div>

        <!-- Horizontal Divider Line -->
        <div class="border-t border-white/15 my-4 sm:my-6 max-w-xl"></div>

        <!-- 3 Value Checklist Items -->
        <div class="flex flex-wrap items-center gap-4 sm:gap-6 lg:gap-8 pt-1">
          
          <div class="flex items-center gap-2 text-white font-semibold text-xs sm:text-sm">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brand-yellow shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <path d="m9 12 2 2 4-4"/>
            </svg>
            <span>Better Control</span>
          </div>

          <div class="flex items-center gap-2 text-white font-semibold text-xs sm:text-sm">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brand-yellow shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <path d="m9 12 2 2 4-4"/>
            </svg>
            <span>Longer Tyre Life</span>
          </div>

          <div class="flex items-center gap-2 text-white font-semibold text-xs sm:text-sm">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brand-yellow shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <path d="m9 12 2 2 4-4"/>
            </svg>
            <span>Enhanced Safety</span>
          </div>

        </div>

      </div>

      <!-- Left on Desktop (5 cols) / Bottom on Mobile: Vehicle Selector Box (Exact TyreHub White Card) -->
      <div class="lg:col-span-5 w-full max-w-md mx-auto lg:mx-0 order-2 lg:order-1" data-aos="fade-right" data-aos-duration="600">
        <div class="relative rounded-2xl overflow-hidden shadow-2xl transition-shadow duration-300">
          
          <!-- Card Header (Solid Navy Blue with Back Arrow & Title) -->
          <div class="text-white py-3.5 px-4 sm:py-4 sm:px-5 flex items-center justify-between" style="background-color: #242e6d;">
            <a href="index.php" class="text-white hover:opacity-80 transition text-sm flex items-center justify-center p-1" title="Back to Home">
              <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h3 class="text-base sm:text-lg font-bold text-white font-outfit tracking-wide flex-1 text-center pr-6">Choose Your Vehicle</h3>
          </div>

          <!-- Card Body -->
          <div class="p-4 sm:p-6 bg-white text-slate-900">
            
            <!-- Balancing & Alignment Illustration & Subtitle -->
            <div class="text-center mb-3.5 sm:mb-4">
              <div class="flex items-center justify-center mb-2 sm:mb-2.5">
                <img src="assets/image/balancing-alignment.webp" alt="Wheel Balancing & Alignment Service" class="h-20 sm:h-24 md:h-28 w-auto object-contain mx-auto">
              </div>
              <p class="text-slate-500 text-xs sm:text-sm font-medium">Select your vehicle type</p>
            </div>

            <!-- 4 Options in 50%-50% (2 Columns) Grid -->
            <div class="grid grid-cols-2 gap-2 sm:gap-3 mb-4 sm:mb-5 text-left">
              
              <!-- Option 1: Hatchback (Default Selected) -->
              <div id="veh-hatchback" onclick="selectVehicle('hatchback')" class="vehicle-option-card is-active flex items-center justify-between p-2 sm:p-3 rounded-xl cursor-pointer transition-colors duration-150" style="border: 2px solid #242e6d; background-color: #ffffff;">
                <div class="flex items-center gap-1.5 sm:gap-2.5 min-w-0">
                  <div class="w-7 h-7 sm:w-9 sm:h-9 flex items-center justify-center shrink-0" style="color: #242e6d;">
                    <svg class="w-full h-full object-contain" viewBox="0 0 60 60">
                      <use href="#icon-hatchback"></use>
                    </svg>
                  </div>
                  <div class="min-w-0">
                    <span class="text-xs sm:text-sm font-bold font-outfit leading-tight truncate block" style="color: #242e6d;">Hatchback</span>
                    <span class="text-[10px] sm:text-xs font-semibold text-slate-500 font-outfit mt-0.5 block">₹750</span>
                  </div>
                </div>
                <div class="radio-ring w-4 h-4 sm:w-[18px] sm:h-[18px] flex items-center justify-center shrink-0 ml-1 rounded-full border-2" style="border-color: #242e6d;">
                  <div class="radio-dot w-2 h-2 rounded-full" style="background-color: #242e6d; display: block;"></div>
                </div>
                <input type="radio" id="radio-hatchback" name="vehicle_type" value="Hatchback (₹750)" checked class="sr-only">
              </div>

              <!-- Option 2: Sedan -->
              <div id="veh-sedan" onclick="selectVehicle('sedan')" class="vehicle-option-card flex items-center justify-between p-2 sm:p-3 rounded-xl cursor-pointer transition-colors duration-150" style="border: 2px solid #e2e8f0; background-color: #ffffff;">
                <div class="flex items-center gap-1.5 sm:gap-2.5 min-w-0">
                  <div class="w-7 h-7 sm:w-9 sm:h-9 flex items-center justify-center shrink-0" style="color: #242e6d;">
                    <svg class="w-full h-full object-contain" viewBox="0 0 60 60">
                      <use href="#icon-sedan"></use>
                    </svg>
                  </div>
                  <div class="min-w-0">
                    <span class="text-xs sm:text-sm font-bold font-outfit leading-tight truncate block" style="color: #242e6d;">Sedan</span>
                    <span class="text-[10px] sm:text-xs font-semibold text-slate-500 font-outfit mt-0.5 block">₹850</span>
                  </div>
                </div>
                <div class="radio-ring w-4 h-4 sm:w-[18px] sm:h-[18px] flex items-center justify-center shrink-0 ml-1 rounded-full border-2" style="border-color: #cbd5e1;">
                  <div class="radio-dot w-2 h-2 rounded-full" style="background-color: #242e6d; display: none;"></div>
                </div>
                <input type="radio" id="radio-sedan" name="vehicle_type" value="Sedan (₹850)" class="sr-only">
              </div>

              <!-- Option 3: SUV -->
              <div id="veh-suv" onclick="selectVehicle('suv')" class="vehicle-option-card flex items-center justify-between p-2 sm:p-3 rounded-xl cursor-pointer transition-colors duration-150" style="border: 2px solid #e2e8f0; background-color: #ffffff;">
                <div class="flex items-center gap-1.5 sm:gap-2.5 min-w-0">
                  <div class="w-7 h-7 sm:w-9 sm:h-9 flex items-center justify-center shrink-0" style="color: #242e6d;">
                    <svg class="w-full h-full object-contain" viewBox="0 0 60 60">
                      <use href="#icon-suv"></use>
                    </svg>
                  </div>
                  <div class="min-w-0">
                    <span class="text-xs sm:text-sm font-bold font-outfit leading-tight truncate block" style="color: #242e6d;">SUV</span>
                    <span class="text-[10px] sm:text-xs font-semibold text-slate-500 font-outfit mt-0.5 block">₹1100</span>
                  </div>
                </div>
                <div class="radio-ring w-4 h-4 sm:w-[18px] sm:h-[18px] flex items-center justify-center shrink-0 ml-1 rounded-full border-2" style="border-color: #cbd5e1;">
                  <div class="radio-dot w-2 h-2 rounded-full" style="background-color: #242e6d; display: none;"></div>
                </div>
                <input type="radio" id="radio-suv" name="vehicle_type" value="SUV (₹1100)" class="sr-only">
              </div>

              <!-- Option 4: Premium Car -->
              <div id="veh-premium" onclick="selectVehicle('premium')" class="vehicle-option-card flex items-center justify-between p-2 sm:p-3 rounded-xl cursor-pointer transition-colors duration-150" style="border: 2px solid #e2e8f0; background-color: #ffffff;">
                <div class="flex items-center gap-1.5 sm:gap-2.5 min-w-0">
                  <div class="w-7 h-7 sm:w-9 sm:h-9 flex items-center justify-center shrink-0" style="color: #242e6d;">
                    <svg class="w-full h-full object-contain" viewBox="0 0 60 60">
                      <use href="#icon-premium"></use>
                    </svg>
                  </div>
                  <div class="min-w-0">
                    <span class="text-xs sm:text-sm font-bold font-outfit leading-tight truncate block" style="color: #242e6d;">Premium Car</span>
                    <span class="text-[10px] sm:text-xs font-semibold text-slate-500 font-outfit mt-0.5 block">₹1500</span>
                  </div>
                </div>
                <div class="radio-ring w-4 h-4 sm:w-[18px] sm:h-[18px] flex items-center justify-center shrink-0 ml-1 rounded-full border-2" style="border-color: #cbd5e1;">
                  <div class="radio-dot w-2 h-2 rounded-full" style="background-color: #242e6d; display: none;"></div>
                </div>
                <input type="radio" id="radio-premium" name="vehicle_type" value="Premium Car (₹1500)" class="sr-only">
              </div>

            </div>

            <!-- Submit Button (Solid Navy Blue with Rounded Corners & CONTINUE Text) -->
            <button type="button" onclick="submitAlignmentBooking()" class="w-full text-white font-bold py-3 sm:py-3.5 rounded-xl uppercase tracking-wider text-xs sm:text-sm shadow-md hover:shadow-lg transition active:scale-[0.99]" style="background-color: #242e6d;">
              CONTINUE
            </button>

          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- 2. WHEEL ALIGNMENT SERVICE IN AHMEDABAD    -->
<!-- ========================================== -->
<section class="py-14 sm:py-18 bg-white border-b border-slate-200">
  <div class="container mx-auto px-3">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

      <!-- Left Column: Content & Details -->
      <div class="lg:col-span-7 space-y-5 text-left" data-aos="fade-right" data-aos-duration="600">
        
        <!-- Header Pill & Title Block -->
        <div>
          <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
            <i class="fa-solid fa-location-dot text-brand-yellow" aria-hidden="true"></i> Ahmedabad &amp; Gandhinagar
          </span>
          <h2 class="text-3xl md:text-4xl font-medium text-brand-blue font-outfit leading-tight">
            Wheel Alignment And Balancing <span class="font-bold">Near Me</span>
          </h2>
          <div class="w-16 h-1 bg-brand-yellow rounded-full mt-3"></div>
        </div>

        <!-- Description Paragraphs -->
        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          TyreHub is a leading provider of <strong>wheel alignment services in Ahmedabad</strong>. Our experts can help guide you with the signs that indicate whether your vehicle needs an <strong>alignment or balancing service</strong>.
        </p>

        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          We understand how important it is to get your tyres serviced at the right time as tyres run your car. TyreHub keeps you moving safely and smoothly on every road.
        </p>

        <!-- Call Action Button -->
        <div class="pt-2">
          <a href="tel:7575888916" class="btn-primary btn-lg inline-flex items-center gap-2.5 shadow-md hover:shadow-lg">
            <i class="fa-solid fa-phone-volume text-base" aria-hidden="true"></i>
            <span>Call Now: 7575 888 916</span>
          </a>
        </div>

      </div>

      <!-- Right Column: Visual Mascot / Equipment Illustration -->
      <div class="lg:col-span-5 flex items-center justify-center" data-aos="fade-left" data-aos-duration="600">
        <div class="relative group max-w-md">
          <div class="w-64 h-64 rounded-full bg-brand-yellow/15 absolute -inset-2 blur-2xl pointer-events-none"></div>
          <img src="assets/image/Mascot.png" alt="TyreHub Wheel Alignment Specialist Mascot" class="w-full h-auto object-contain relative z-10 drop-shadow-2xl group-hover:scale-105 transition-transform duration-300">
        </div>
      </div>

    </div>

  </div>
</section>



<!-- ========================================== -->
<!-- 4. "HOW IT WORKS" 3-STEP TIMELINE          -->
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
        <div class="w-22 h-22 sm:w-24 sm:h-24 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl sm:text-3xl mb-4 relative shadow-glow-yellow mx-auto">
          <i class="fa-solid fa-dharmachakra" aria-hidden="true"></i>
          <span class="absolute -top-1 -right-1 w-8 h-8 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit border-2 border-brand-blue shadow-md">01</span>
        </div>
        <h3 class="text-base font-bold text-white mt-1">Buy Tyre Or Service</h3>
        <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
          Browse wide range of car, bike tyres, and auto battery brands at lowest prices.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div class="w-22 h-22 sm:w-24 sm:h-24 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl sm:text-3xl mb-4 relative shadow-glow-yellow mx-auto">
          <i class="fa-solid fa-map-location-dot" aria-hidden="true"></i>
          <span class="absolute -top-1 -right-1 w-8 h-8 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit border-2 border-brand-blue shadow-md">02</span>
        </div>
        <h3 class="text-base font-bold text-white mt-1">Select Service Partner Near By</h3>
        <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
          Choose from 50+ certified garages for fitment or opt for Doorstep Fitting Van.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
        <div class="w-22 h-22 sm:w-24 sm:h-24 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl sm:text-3xl mb-4 relative shadow-glow-yellow mx-auto">
          <i class="fa-solid fa-file-invoice-dollar" aria-hidden="true"></i>
          <span class="absolute -top-1 -right-1 w-8 h-8 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit border-2 border-brand-blue shadow-md">03</span>
        </div>
        <h3 class="text-base font-bold text-white mt-1">Make Payment And Take Invoice</h3>
        <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
          Pay securely online or after fitment and receive official brand warranty invoice.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 5. BRANDS SHOWCASE (TYRES & BATTERIES)     -->
<!-- ========================================== -->
<section id="tyre-brands-section" class="py-14 bg-white border-b border-slate-200">
  <div class="container mx-auto px-3">

    <!-- Tyre Brands Header -->
    <div class="text-center mb-8" data-aos="fade-up" data-aos-duration="600">
      <h2 class="text-2xl md:text-3xl font-medium text-brand-blue">
        Our <span class="font-bold text-brand-blue">Tyre Brands</span>
      </h2>
      <div class="w-12 h-1 bg-brand-yellow mx-auto rounded-full mt-2"></div>
    </div>

    <!-- Tyre Brands Slider -->
    <div id="tyre-brands-slider" class="slick-carousel -mx-2 mb-14" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">

      <!-- Bridgestone -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/bridgestone.webp" alt="Bridgestone Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- MRF -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/mrf.webp" alt="MRF Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Apollo -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/apollotyres.webp" alt="Apollo Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- JK Tyre -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/jktyre.webp" alt="JK Tyre" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- TVS Tyres -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/tvs.webp" alt="TVS Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Yokohama -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/yokohama.webp" alt="Yokohama Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Michelin -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/michelin.webp" alt="Michelin Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Goodyear -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/goodyear.webp" alt="Goodyear Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- CEAT -->
      <div class="px-2">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/brand-logo/ceat.webp" alt="CEAT Tyres" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

    </div>

    <!-- Battery Brands Header -->
    <div class="text-center mb-6" data-aos="fade-up" data-aos-duration="600">
      <h2 class="text-2xl md:text-3xl font-medium text-brand-blue">
        Our <span class="font-bold text-brand-blue">Battery Brands</span>
      </h2>
      <div class="w-12 h-1 bg-brand-yellow mx-auto rounded-full mt-2"></div>
    </div>

    <!-- Battery Brands Cards -->
    <div class="flex items-center justify-center gap-4 sm:gap-6 max-w-lg mx-auto" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">

      <!-- Amaron -->
      <div class="w-1/2 sm:w-60">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/battery-brands/amaron.webp" alt="Amaron Battery" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Exide -->
      <div class="w-1/2 sm:w-60">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/battery-brands/exide.webp" alt="Exide Battery" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

    </div>

  </div>
</section>
<!-- ========================================== -->
<!-- 3. NEED NEW TYRE RELAX CALLOUT INLINE     -->
<!-- ========================================== -->
<section class="py-12 sm:py-14 bg-slate-50">
  <div class="container mx-auto px-3">
    
    <div class="bg-brand-blueDark text-white p-6 sm:p-8 rounded-3xl flex flex-col md:flex-row items-center justify-between gap-6 shadow-lg border border-white/10" data-aos="fade-up" data-aos-duration="600">
      <div class="space-y-1.5 text-center md:text-left">
        <span class="inline-block px-2.5 py-0.5 rounded bg-brand-yellow text-slate-950 font-black text-[10px] uppercase tracking-wider mb-1">
          Need New Tyre? Relax
        </span>
        <h3 class="text-xl sm:text-2xl font-bold font-outfit text-white">Wheel Alignment Service in Ahmedabad</h3>
        <p class="text-slate-200 text-xs sm:text-sm max-w-2xl leading-relaxed">
          We realize that you lead a busy life, so we've made a smooth tyre buying and installation experience for you.
        </p>
      </div>
      <div class="flex flex-wrap items-center justify-center gap-3 shrink-0">
        <a href="tel:7575888916" class="btn-primary py-3 px-6 text-xs font-bold shadow-md">
          <i class="fa-solid fa-phone-volume mr-1.5" aria-hidden="true"></i> Call 7575 888 916
        </a>
      </div>
    </div>

  </div>
</section>

<!-- Inline JavaScript for Vehicle Selector -->
<script>
function selectVehicle(type) {
  document.querySelectorAll('.vehicle-option-card').forEach(el => {
    el.classList.remove('is-active');
    el.style.borderColor = '#e2e8f0';
    const ring = el.querySelector('.radio-ring');
    const dot = el.querySelector('.radio-dot');
    if (ring) ring.style.borderColor = '#cbd5e1';
    if (dot) dot.style.display = 'none';
  });

  const selected = document.getElementById('veh-' + type);
  if (selected) {
    selected.classList.add('is-active');
    selected.style.borderColor = '#242e6d';
    const ring = selected.querySelector('.radio-ring');
    const dot = selected.querySelector('.radio-dot');
    if (ring) ring.style.borderColor = '#242e6d';
    if (dot) dot.style.display = 'block';

    const radio = document.getElementById('radio-' + type);
    if (radio) radio.checked = true;
  }
}

function submitAlignmentBooking() {
  const selectedRadio = document.querySelector('input[name="vehicle_type"]:checked');
  const serviceName = selectedRadio ? 'Wheel Alignment & Balancing - ' + selectedRadio.value : 'Wheel Alignment & Balancing';
  if (typeof openBookingModal === 'function') {
    openBookingModal(serviceName);
  } else {
    window.location.href = 'tel:7575888916';
  }
}
</script>

<?php
include 'includes/footer.php';
?>
