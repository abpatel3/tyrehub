<?php
$page_title = "Car Battery Replacement Anywhere Anytime | Doorstep Battery Service | TyreHub";
$page_description = "30-Minute Doorstep Car Battery Replacement in Ahmedabad & Gandhinagar. Amaron & Exide genuine batteries with official warranty & free installation. Call 7575 888 916.";
$current_page = "battery";

include 'includes/interface.php';
include 'includes/header.php';
?>

<!-- ========================================== -->
<!-- 1. CAR BATTERY MAIN HERO BANNER SECTION    -->
<!-- (Exact 100dvh Full Viewport Calculation)   -->
<!-- ========================================== -->
<section class="battery-main-section bg-cover bg-center bg-no-repeat relative overflow-hidden flex flex-col justify-between md:h-[calc(100dvh-176px)] md:min-h-[480px] pt-4 sm:pt-6 pb-0" style="background-image: url('assets/image/battery/main-section-battery-bg.webp');">
  
  <!-- Top Text Container -->
  <div class="h-full text-center relative z-30 shrink-0" data-aos="fade-up" data-aos-duration="600">
    
    <!-- Phone Helpline Heading -->
    <h3 class="text-xs sm:text-sm md:text-base font-bold text-brand-blueDark tracking-wider uppercase flex items-center justify-center gap-1.5 mb-1 sm:mb-1.5">
      CALL US <span class="text-slate-400 font-normal">|</span>
      <a href="tel:7575888916" class="hover:underline inline-flex items-center gap-1">
        <span class="text-brand-yellow font-extrabold text-sm sm:text-lg">7575</span>
        <span class="text-brand-blueDark font-extrabold text-sm sm:text-lg">888 916</span>
      </a>
    </h3>

    <!-- Main Title -->
    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold font-outfit text-brand-blueDark uppercase tracking-tight my-1 sm:my-1.5">
      CAR BATTERY REPLACEMENT
    </h1>

    <!-- Dotted Divider Line -->
    <div class="border-b-2 border-dotted border-brand-blue/30 w-full max-w-xs sm:max-w-sm md:max-w-lg mx-auto my-1.5 sm:my-2"></div>

    <!-- Anywhere Anytime Subheading with Location Pin -->
    <p class="text-sm sm:text-lg md:text-xl font-bold text-brand-blueDark tracking-wide flex items-center justify-center gap-2 mb-2 sm:mb-3">
      ANYWHERE <span class="text-brand-yellow font-extrabold">Anytime</span>
      <img src="assets/image/battery/car-battery-replacement-location.webp" alt="Location Pin" class="w-6 h-6 sm:w-8 sm:h-8 inline-block object-contain">
    </p>

  

  <!-- Bottom Van Image Container (Flex-1 & Contained Max Height) -->
  
    
    <!-- Desktop Main Battery Van Banner Image -->
    <img src="assets/image/battery/main-section-battery.webp" alt="Car Battery Replacement Service Van Banner" class="hidden md:block"
    style="position: absolute; height: 100%; width: auto; max-width: 100%; bottom: 0; left: 50%; transform: translateX(-50%); object-fit: cover;">

    <!-- Tablet & Mobile Main Battery Van Banner Image -->
    <img src="assets/image/battery/main-section-battery-rs-car.webp" alt="Car Battery Replacement Service Van Mobile Banner" class="block md:hidden w-auto h-full max-h-full object-contain mx-auto drop-shadow-md max-w-[95%]">
</div>
  

</section>

<!-- ========================================== -->
<!-- 2. FULL WIDTH BATTERY REPLACEMENT SLIDER   -->
<!-- ========================================== -->
<section class="w-fulloverflow-hidden">
  <div class="w-full relative">
    <div id="battery-fullwidth-slider" class="w-full">
      
      <!-- Slide 1 -->
      <div class="outline-none">
        <img src="assets/image/battery/battery-replacement-slide-1.webp" alt="Car Battery Replacement Service Banner 1" class="w-full h-auto object-cover max-w-full mx-auto shadow-md">
      </div>

      <!-- Slide 2 -->
      <div class="outline-none">
        <img src="assets/image/battery/battery-replacement-slide-2.webp" alt="Car Battery Replacement Service Banner 2" class="w-full h-auto object-cover max-w-full mx-auto shadow-md">
      </div>

    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  if (window.jQuery && $.fn.slick) {
    $('#battery-fullwidth-slider').slick({
      dots: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 600,
      
      cssEase: 'linear',
      arrows: true,
      pauseOnHover: true,
      prevArrow: '<button type="button" class="slick-prev absolute left-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-brand-blue/80 text-white flex items-center justify-center hover:bg-brand-yellow hover:text-slate-900 transition shadow-lg"><i class="fa-solid fa-chevron-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next absolute right-4 top-1/2 -translate-y-1/2 z-20 w-10 h-10 rounded-full bg-brand-blue/80 text-white flex items-center justify-center hover:bg-brand-yellow hover:text-slate-900 transition shadow-lg"><i class="fa-solid fa-chevron-right"></i></button>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false
          }
        }
      ]
    });
  }
});
</script>

<!-- ========================================== -->
<!-- 3. HOW IT WORKS / BATTERY IN MINUTES      -->
<!-- ========================================== -->
<section class="py-14 sm:py-16 bg-slate-50 border-t border-slate-200">
  <div class="container mx-auto px-3">
    
    <!-- Section Title & Header -->
    <div class="text-center max-w-3xl mx-auto mb-12" data-aos="fade-up" data-aos-duration="600">
      <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-semibold text-xs uppercase tracking-wider mb-2">
        <i class="fa-solid fa-bolt text-brand-yellow"></i> Fast &amp; Reliable Roadside Service
      </span>
      <h2 class="text-3xl sm:text-4xl font-bold font-outfit text-brand-blueDark leading-tight">
        Car Battery Replacement <span class="text-brand-yellow drop-shadow-xs">In Minutes</span>
      </h2>
      <p class="text-xs sm:text-sm font-semibold uppercase tracking-wider text-slate-500 mt-2">
        GET A CAR BATTERY OR CAR JUMP-START ON THE SPOT
      </p>
      <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mt-3"></div>
    </div>

    <!-- 3 Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
      
      <!-- Card 1: Call Us -->
      <div class="flex flex-col items-center text-center space-y-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        
        <!-- Image Icon Wrapper -->
        <div class="h-16 sm:h-20 flex items-center justify-center my-2 group-hover:scale-110 transition duration-300">
          <img src="assets/image/battery/replacement-call.webp" alt="Call TyreHub Helpline" class="h-full w-auto object-contain max-w-full">
        </div>

        <a href="tel:7575888916" class="text-xl sm:text-2xl font-bold font-outfit text-brand-blueDark hover:text-brand-yellow transition">
          7575 888 916
        </a>

        <p class="text-xs sm:text-sm text-slate-600 font-normal leading-relaxed">
          Call us toll Free if your car is not starting. Share your Car make, model, and year. We’ll immediately dispatch assistance to you.
        </p>
      </div>

      <!-- Card 2: 30 Minutes -->
      <div class="flex flex-col items-center text-center space-y-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        
        <!-- Image Icon Wrapper -->
        <div class="h-16 sm:h-20 flex items-center justify-center my-2 group-hover:scale-110 transition duration-300">
          <img src="assets/image/battery/replacement-location.webp" alt="Fast 30 Minute Arrival" class="h-full w-auto object-contain max-w-full">
        </div>

        <h3 class="text-xl sm:text-2xl font-bold font-outfit text-brand-blueDark">
          30 Minutes
        </h3>

        <p class="text-xs sm:text-sm text-slate-600 font-normal leading-relaxed">
          is what it takes our technicians to reach your location. Once there they will check your car and test your car battery.
        </p>
      </div>

      <!-- Card 3: Car Battery -->
      <div class="flex flex-col items-center text-center space-y-4" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
        
        <!-- Image Icon Wrapper -->
        <div class="h-16 sm:h-20 flex items-center justify-center my-2 group-hover:scale-110 transition duration-300">
          <img src="assets/image/battery/replacement-battery.webp" alt="Car Battery On The Spot Replacement" class="h-full w-auto object-contain max-w-full">
        </div>

        <h3 class="text-xl sm:text-2xl font-bold font-outfit text-brand-blueDark">
          Car Battery
        </h3>

        <p class="text-xs sm:text-sm text-slate-600 font-normal leading-relaxed">
          replacement is done if needed, or a jump-start to your car. Pay securely and drive away with a 1 year free roadside assistance in Ahmedabad.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 4. BEST CAR BATTERY REPLACEMENT SERVICE    -->
<!-- ========================================== -->
<section class="py-14 sm:py-18 bg-white border-t border-slate-200">
  <div class="container mx-auto px-3">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

      <!-- Left Column: Aligned Header & Content -->
      <div class="lg:col-span-6 space-y-5 text-left" data-aos="fade-right" data-aos-duration="600">
        
        <!-- Header Pill & Title Block -->
        <div>
          <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
            <i class="fa-solid fa-bolt text-brand-yellow" aria-hidden="true"></i> Expert Battery Care
          </span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-medium text-brand-blue font-outfit leading-tight">
            Best Car Battery Replacement <span class="font-bold text-brand-yellow drop-shadow-xs">Service At TyreHub</span>
          </h2>
          <div class="w-16 h-1 bg-brand-yellow rounded-full mt-3"></div>
        </div>

        <!-- Description Paragraphs -->
        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          When attempting to start your vehicle, if the dashboard lights fail to illuminate or you don't hear the engine cranking, it is probable that your car battery is dead.
        </p>

        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          At TyreHub, we have a team of battery technicians that can be dispatched to your location in no time. Once they reach your location, they will diagnose your car battery and replace your battery on the spot if needed.
        </p>

        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          When you have us replace your car battery, you'll receive an added benefit. After we change the car battery, you'll have 1 year of roadside assistance coverage.
        </p>


        <!-- Call Now Action Button -->
        <div class="pt-2">
          <a href="tel:7575888916" class="btn-primary btn-lg inline-flex items-center gap-2.5 shadow-md hover:shadow-lg">
            <i class="fa-solid fa-phone-volume text-base" aria-hidden="true"></i>
            <span>Call Now: 7575 888 916</span>
          </a>
        </div>

      </div>

      <!-- Right Column: Visual Backdrop & Battery Technician Graphic -->
      <div class="lg:col-span-6 flex items-center justify-center" data-aos="fade-left" data-aos-duration="600">
        <div class="relative w-full">
            <img src="assets/image/battery/best-car-battery-replacement.webp" alt="Best Car Battery Replacement Service At TyreHub" class="w-full h-auto object-contain  mx-auto">
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 5. CAR BATTERY JUMP-START SERVICE SECTION  -->
<!-- ========================================== -->
<section class="py-16 sm:py-20 bg-slate-50 border-t border-slate-200">
  <div class="container mx-auto px-3">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

      <!-- Left Column: Jump-Start Service Details -->
      <div class="lg:col-span-7 space-y-5 text-left" data-aos="fade-right" data-aos-duration="600">
        
        <!-- Header Pill & Title Block -->
        <div>
          <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
            <i class="fa-solid fa-bolt text-brand-yellow" aria-hidden="true"></i> Quick Emergency Boost
          </span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-medium font-outfit text-brand-blue leading-tight">
            Looking For A <span class="font-extrabold text-brand-yellow ">Car Battery Jump-Start?</span>
          </h2>
          <div class="w-16 h-1 bg-brand-yellow rounded-full mt-3"></div>
        </div>

        <!-- Description Paragraphs -->
        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          If you need a car battery boost, you can also count on TyreHub to reach your location and jump-start your car anywhere in Ahmedabad and Gandhinagar.
        </p>

        <!-- Money-Back / Discount Adjustment Highlight Box -->
        <div class="p-4 sm:p-5 rounded-2xl bg-white border border-slate-200/90 shadow-sm flex items-start gap-3.5">
          <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold text-lg shrink-0 mt-0.5 shadow-xs">
            <i class="fa-solid fa-tags" aria-hidden="true"></i>
          </div>
          <div>
            <h4 class="text-xs sm:text-sm font-bold text-slate-900 font-outfit mb-1">100% Value Adjusted On Future Battery Purchase</h4>
            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
              In case your car battery dies after performing the jump-start and your car battery needs to be changed, we will deduct the amount you paid for the jump-start directly from the new car battery price.
            </p>
          </div>
        </div>

        <!-- Call Now Action Button -->
        <div class="pt-2">
          <a href="tel:7575888916" class="btn-primary btn-lg inline-flex items-center gap-2.5 shadow-md hover:shadow-lg">
            <i class="fa-solid fa-phone-volume text-base" aria-hidden="true"></i>
            <span>Call Now: 7575 888 916</span>
          </a>
        </div>

      </div>

      <!-- Right Column: Layered Pricing Card & TyreHub Mascot Character Visual -->
      <div class="lg:col-span-5 flex items-center justify-center" data-aos="fade-left" data-aos-duration="600">
        <div class="relative w-full max-w-lg flex items-center justify-center pt-6 pb-2">
          
          <!-- Soft Background Glow -->
          <div class="absolute inset-0 bg-gradient-to-tr from-brand-yellow/20 via-brand-blue/10 to-transparent rounded-3xl blur-2xl pointer-events-none"></div>          <!-- Pricing Card Layered Container (Full width on mobile, right padding for mascot on sm+) -->
          <div class="w-full bg-white rounded-3xl p-5 sm:p-7 sm:pr-16 border border-slate-200/90 shadow-xl relative z-10 text-left space-y-4">
            
            <!-- Card Header Badges (Grouped cleanly on left) -->
            <div class="flex flex-wrap items-center gap-2 border-b border-slate-100 pb-3">
              <span class="inline-block px-3 py-1 rounded-full bg-brand-yellow/20 text-brand-blue font-extrabold text-[11px] uppercase tracking-wider">
                Emergency Service Price
              </span>
              <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-emerald-50 border border-emerald-200 text-[11px] font-extrabold text-emerald-700">
                <i class="fa-solid fa-bolt text-emerald-600" aria-hidden="true"></i> 30-Min Arrival
              </span>
            </div>

            <!-- Price Breakdown -->
            <div>
              <span class="text-[11px] font-extrabold uppercase tracking-widest text-slate-400 block">Starting From</span>
              <div class="flex items-baseline gap-1.5 my-1">
                <span class="text-4xl sm:text-5xl font-black font-outfit text-brand-blue tracking-tight">₹299</span>
                <span class="text-xs font-bold text-slate-500 uppercase">+ Tax</span>
              </div>
            </div>

            <!-- Discount Note Box -->
            <p class="text-xs text-slate-600 leading-relaxed font-medium bg-slate-50 p-3 rounded-xl border border-slate-200/80">
              Battery jump-start service value will be <strong>100% discounted</strong> on future battery purchase if replacement is needed.
            </p>

            <div class="pt-1 border-t border-slate-100 flex items-center justify-start gap-2 text-xs font-semibold text-emerald-600">
              <i class="fa-solid fa-circle-check" aria-hidden="true"></i> Guaranteed Doorstep Assistance
            </div>

          </div>

          <!-- TyreHub Mascot Character Visual Overlay (Hidden on mobile, visible on sm+) -->
          <div class="hidden sm:block w-36 sm:w-44 shrink-0 relative z-20 -ml-12 sm:-ml-14 hover:scale-105 transition-transform duration-300 pointer-events-none drop-shadow-2xl">
            <img src="assets/image/Mascot.png" alt="TyreHub Expert Technician Mascot" class="w-full h-auto object-contain">
          </div>

        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 6. WHAT TO EXPECT INSPECTION CHECKLIST    -->
<!-- ========================================== -->
<section class="py-16 sm:py-20 bg-white border-t border-slate-200">
  <div class="container mx-auto px-3">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

      <!-- Left Column: Pure Transparent Illustration Graphic (Full Natural Scale) -->
      <div class="lg:col-span-6 flex items-center justify-center" data-aos="fade-right" data-aos-duration="600">
        <div class="w-full  px-2">
          <img src="assets/image/battery/what-to-expect.webp" alt="Car Battery Service At TyreHub: What To Expect" class="w-full h-auto object-contain mx-auto drop-shadow-xl ">
        </div>
      </div>

      <!-- Right Column: Content & 7-Point Checklist Cards Grid -->
      <div class="lg:col-span-6 space-y-5 text-left" data-aos="fade-left" data-aos-duration="600">
        
        <!-- Header Pill & Title Block -->
        <div>
          <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
            <i class="fa-solid fa-list-check text-brand-yellow" aria-hidden="true"></i> Free Multi-Point Inspection
          </span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-medium text-brand-blue font-outfit leading-tight">
            Car Battery Service At TyreHub: <span class="font-bold text-brand-yellow ">What To Expect?</span>
          </h2>
          <div class="w-16 h-1 bg-brand-yellow rounded-full mt-3 mb-4"></div>
          
          <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
            In essence, if you need an emergency car battery, you can count on us to deliver and install the car battery in Ahmedabad. Getting a quick battery service is the best way to get back on the road promptly. While we’re there, we will also inspect your car for the following:
          </p>
        </div>

        <!-- 7-Point Inspection Compact List View -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-1">
          
          <!-- 1. Battery Diagnosis -->
          <div class="flex items-center gap-2.5 py-1">
            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-[10px] font-extrabold shrink-0">
              <i class="fa-solid fa-check" aria-hidden="true"></i>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-slate-800 font-outfit">Car Battery Diagnosis</span>
          </div>

          <!-- 2. Terminals Check -->
          <div class="flex items-center gap-2.5 py-1">
            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-[10px] font-extrabold shrink-0">
              <i class="fa-solid fa-check" aria-hidden="true"></i>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-slate-800 font-outfit">Car Battery Terminals Check</span>
          </div>

          <!-- 3. Alternator Test -->
          <div class="flex items-center gap-2.5 py-1">
            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-[10px] font-extrabold shrink-0">
              <i class="fa-solid fa-check" aria-hidden="true"></i>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-slate-800 font-outfit">Car Alternator Test</span>
          </div>

          <!-- 4. Starter Motor Check -->
          <div class="flex items-center gap-2.5 py-1">
            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-[10px] font-extrabold shrink-0">
              <i class="fa-solid fa-check" aria-hidden="true"></i>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-slate-800 font-outfit">Car Starter Motor Check</span>
          </div>

          <!-- 5. Coolant Level Check -->
          <div class="flex items-center gap-2.5 py-1">
            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-[10px] font-extrabold shrink-0">
              <i class="fa-solid fa-check" aria-hidden="true"></i>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-slate-800 font-outfit">Car Coolant Level Check</span>
          </div>

          <!-- 6. Tyre Inspection -->
          <div class="flex items-center gap-2.5 py-1">
            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-[10px] font-extrabold shrink-0">
              <i class="fa-solid fa-check" aria-hidden="true"></i>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-slate-800 font-outfit">Tyre Inspection</span>
          </div>

          <!-- 7. Tyre Pressure Check -->
          <div class="flex items-center gap-2.5 py-1 sm:col-span-2">
            <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center text-[10px] font-extrabold shrink-0">
              <i class="fa-solid fa-check" aria-hidden="true"></i>
            </div>
            <span class="text-xs sm:text-sm font-semibold text-slate-800 font-outfit">Tyre Pressure Check</span>
          </div>

        </div>

        <!-- Call Now Action Button -->
        <div class="pt-3">
          <a href="tel:7575888916" class="btn-primary btn-lg inline-flex items-center gap-2.5 shadow-md hover:shadow-lg">
            <i class="fa-solid fa-phone-volume text-base" aria-hidden="true"></i>
            <span>Call Now: 7575 888 916</span>
          </a>
        </div>

      </div>

    </div>
    <div class="bg-brand-blueDark text-white p-6 sm:p-8 rounded-3xl flex flex-col md:flex-row items-center justify-between gap-6 shadow-lg border border-white/10 mt-20" data-aos="fade-up" data-aos-duration="600">
      <div class="space-y-1.5 text-center md:text-left">
        <span class="inline-block px-2.5 py-0.5 rounded bg-brand-yellow text-slate-950 font-black text-[10px] uppercase tracking-wider mb-1">
          Online Battery Shop
        </span>
        <h3 class="text-xl sm:text-2xl font-bold font-outfit text-white">Order A Car Battery Online?</h3>
        <p class="text-slate-200 text-xs sm:text-sm max-w-2xl leading-relaxed">
          On TyreHub, search and order online. Select to have your battery delivered and fitted at a preferred garage, or delivered right to your doorstep.
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

<!-- ========================================== -->
<!-- 7. THE IMPORTANCE OF A CAR BATTERY        -->
<!-- ========================================== -->
<section class="py-14 sm:py-18 bg-slate-50 border-t border-slate-200">
  <div class="container mx-auto px-3">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

      <!-- Left Column: Importance Content & Key Highlights -->
      <div class="lg:col-span-7 space-y-5 text-left" data-aos="fade-right" data-aos-duration="600">
        
        <!-- Header Pill & Title Block -->
        <div>
          <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
            <i class="fa-solid fa-car-battery text-brand-yellow" aria-hidden="true"></i> Vehicle Electrical Hub
          </span>
          <h2 class="text-2xl sm:text-3xl lg:text-4xl font-medium text-brand-blue font-outfit leading-tight">
            The Importance Of A <span class="font-bold text-brand-yellow">Car Battery</span>
          </h2>
          <div class="w-16 h-1 bg-brand-yellow rounded-full mt-3"></div>
        </div>

        <!-- Description Paragraphs -->
        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          The car battery is the central power hub of the vehicle which powers all of the electrical components in it. The electricity is also stored, and it sends jolts to each and every electrical component. Without battery power, your car won’t start. In addition to its primary purpose, the battery also serves to stabilize the voltage, which is crucial for maintaining the engine's operation. In other words, it does everything to keep the car and all of its components running.
        </p>

        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          The battery's transmission of electricity to other components is easy to comprehend, as it transforms chemical energy into electrical energy to power the vehicle and supply voltage to the starter. That is why many refer to car batteries as the little boxes that power the vehicle. Typically, a battery has a lifespan of 3 to 5 years, but poor driving behaviors and exposure to severe conditions can reduce its longevity.
        </p>

      </div>

      <!-- Right Column: Visual Battery Graphic -->
      <div class="lg:col-span-5 flex items-center justify-center" data-aos="fade-left" data-aos-duration="600">
        <div class="w-full px-2">
          <img src="assets/image/battery/importance.webp" alt="The Importance Of A Car Battery" class="w-full h-auto object-contain mx-auto drop-shadow-xl">
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 8. OUR BATTERY BRANDS SECTION              -->
<!-- ========================================== -->
<section class="py-12 sm:py-16 bg-white border-t border-slate-200">
  <div class="container mx-auto px-3">
    
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

<?php
include 'includes/footer.php';
?>
