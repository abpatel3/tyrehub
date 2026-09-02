<?php
$page_title = "Free Tyre Inspection in Ahmedabad & Gandhinagar | Free Tyre Checks | TyreHub";
$page_description = "Tyre hub provides free tyre inspection services to make sure your tyres are running perfectly fine. Wear & tear, visual inspection, repairs, wheel balance, and alignment.";
$current_page = "free-tyre-inspection";

include 'includes/interface.php';
include 'includes/header.php';
?>

<!-- ========================================== -->
<!-- 1. DARK HERO BANNER WITH INSPECTION FORM   -->
<!-- ========================================== -->
<section class="relative py-8 sm:py-12 lg:py-16 xl:py-20 text-white overflow-hidden">
  
  <!-- Modern Garage Inspection Backdrop Image -->
  <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
    <img src="assets/image/tyre-inspection-bg.jpg" alt="Professional car tyre inspection service bay" class="w-full h-full object-cover object-center absolute inset-0">
    <div class="absolute inset-0" style="background: linear-gradient(90deg, #0b1122 0%, rgba(11, 17, 34, 0.85) 48%, rgba(11, 17, 34, 0.45) 100%); z-index: 2;"></div>
  </div>

  <!-- Content Container -->
  <div class="container mx-auto px-4 max-w-7xl relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
      
      <!-- Right on Desktop (7 cols) / Top on Mobile: Hero Badges, Headlines & Values -->
      <div class="lg:col-span-7 text-left space-y-4 sm:space-y-6 order-1 lg:order-2" data-aos="fade-left" data-aos-duration="600">
        
        <!-- Pill Tag with Yellow Icon -->
        <div>
          <span class="inline-flex items-center gap-2 px-3 py-1.5 sm:px-3.5 sm:py-1.5 rounded-full border border-amber-400/40 bg-black/40 backdrop-blur-sm text-white font-bold text-[10px] sm:text-xs uppercase tracking-wider">
            <i class="fa-solid fa-clipboard-check text-brand-yellow"></i> 100% FREE TYRE SAFETY INSPECTION
          </span>
        </div>

        <!-- Main Headline -->
        <div>
          <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold font-outfit leading-[1.15] sm:leading-[1.1]">
            <span class="text-white block">Free Tyre Checks.</span>
            <span class="text-brand-yellow block mt-1">Complete Peace of Mind.</span>
          </h1>
        </div>

        <p class="text-slate-200 text-xs sm:text-sm md:text-base leading-relaxed max-w-xl font-normal">
          We realize that you lead a busy life, so we've made a smooth tyre buying and inspection experience for you. Protect your journey with a certified multi-point tyre inspection.
        </p>

        <!-- 3 Circular Feature Badges Row -->
        <div class="flex items-center gap-4 sm:gap-8 lg:gap-10 pt-1 sm:pt-2">
          
          <!-- Badge 1: Tread Depth Inspection -->
          <div class="flex flex-col items-center text-center">
            <div class="w-14 h-14 sm:w-16 sm:h-16 lg:w-18 lg:h-18 rounded-full hero-feature-circle flex items-center justify-center text-blue-200">
              <svg class="w-6 h-6 sm:w-7 sm:h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"></circle>
                <circle cx="12" cy="12" r="4"></circle>
                <line x1="4.93" y1="4.93" x2="9.17" y2="9.17"></line>
                <line x1="14.83" y1="14.83" x2="19.07" y2="19.07"></line>
                <line x1="14.83" y1="9.17" x2="19.07" y2="4.93"></line>
                <line x1="4.93" y1="19.07" x2="9.17" y2="14.83"></line>
              </svg>
            </div>
            <span class="text-[11px] sm:text-xs md:text-sm font-semibold text-white font-outfit mt-2 sm:mt-2.5">Tread Depth</span>
          </div>

          <!-- Badge 2: Wear & Balance Check -->
          <div class="flex flex-col items-center text-center">
            <div class="w-14 h-14 sm:w-16 sm:h-16 lg:w-18 lg:h-18 rounded-full hero-feature-circle flex items-center justify-center text-blue-200">
              <svg class="w-6 h-6 sm:w-7 sm:h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2v20M2 12h20"></path>
                <circle cx="12" cy="12" r="9"></circle>
                <circle cx="12" cy="12" r="6" stroke-dasharray="2 2"></circle>
              </svg>
            </div>
            <span class="text-[11px] sm:text-xs md:text-sm font-semibold text-white font-outfit mt-2 sm:mt-2.5">Wear &amp; Balance</span>
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
            <span>Tread Depth &amp; Wear Analysis</span>
          </div>

          <div class="flex items-center gap-2 text-white font-semibold text-xs sm:text-sm">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brand-yellow shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <path d="m9 12 2 2 4-4"/>
            </svg>
            <span>Air Pressure &amp; Sidewall Check</span>
          </div>

          <div class="flex items-center gap-2 text-white font-semibold text-xs sm:text-sm">
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brand-yellow shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10"/>
              <path d="m9 12 2 2 4-4"/>
            </svg>
            <span>100% Free • Zero Obligation</span>
          </div>

        </div>

      </div>

      <!-- Left on Desktop (5 cols) / Bottom on Mobile: Inspection Booking Card -->
      <div class="lg:col-span-5 w-full max-w-md mx-auto lg:mx-0 order-2 lg:order-1" data-aos="fade-right" data-aos-duration="600">
        <div class="relative rounded-2xl overflow-hidden shadow-2xl transition-shadow duration-300">
          
          <!-- Card Header (Solid Navy Blue with Back Arrow & Title) -->
          <div class="text-white py-3.5 px-4 sm:py-4 sm:px-5 flex items-center justify-between" style="background-color: #242e6d;">
            <a href="index.php" class="text-white hover:opacity-80 transition text-sm flex items-center justify-center p-1" title="Back to Home">
              <i class="fa-solid fa-arrow-left"></i>
            </a>
            <h3 class="text-base sm:text-lg font-bold text-white font-outfit tracking-wide flex-1 text-center pr-6">Book Free Inspection</h3>
          </div>

          <!-- Card Body with Form Fields -->
          <div class="p-4 sm:p-5 bg-white text-slate-900">
            
            <!-- Tyre Inspection Illustration -->
            <div class="text-center mb-3 sm:mb-4">
              <div class="flex items-center justify-center">
                <img src="assets/image/car-tyre-inspection.webp" alt="Free Car Tyre Inspection" class="w-full max-w-[260px] sm:max-w-[300px] h-auto object-contain mx-auto">
              </div>
            </div>

            <form id="inspection-form" onsubmit="handleInspectionSubmit(event)" class="space-y-2.5 sm:space-y-3">
              
              <!-- 1. Name -->
              <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400 text-xs sm:text-sm">
                  <i class="fa-solid fa-user"></i>
                </span>
                <input type="text" id="insp-name" name="name" required placeholder="Full Name" 
                  class="w-full pl-10 pr-3.5 py-2.5 sm:py-3 text-xs sm:text-sm border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#242e6d]/20 focus:border-[#242e6d] outline-none transition bg-slate-50/50 text-slate-800 placeholder-slate-400">
              </div>

              <!-- 2. Mobile Number -->
              <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400 text-xs sm:text-sm">
                  <i class="fa-solid fa-phone"></i>
                </span>
                <input type="tel" id="insp-mobile" name="mobile" required pattern="[0-9]{10}" maxlength="10" placeholder="Mobile Number (10 digits)" 
                  class="w-full pl-10 pr-3.5 py-2.5 sm:py-3 text-xs sm:text-sm border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#242e6d]/20 focus:border-[#242e6d] outline-none transition bg-slate-50/50 text-slate-800 placeholder-slate-400">
              </div>

              <!-- 3. Email -->
              <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400 text-xs sm:text-sm">
                  <i class="fa-solid fa-envelope"></i>
                </span>
                <input type="email" id="insp-email" name="email" required placeholder="Email Address" 
                  class="w-full pl-10 pr-3.5 py-2.5 sm:py-3 text-xs sm:text-sm border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#242e6d]/20 focus:border-[#242e6d] outline-none transition bg-slate-50/50 text-slate-800 placeholder-slate-400">
              </div>

              <!-- 4. Vehicle Location -->
              <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400 text-xs sm:text-sm">
                  <i class="fa-solid fa-location-dot"></i>
                </span>
                <input type="text" id="insp-location" name="location" required placeholder="Vehicle Location (City / Area)" 
                  class="w-full pl-10 pr-3.5 py-2.5 sm:py-3 text-xs sm:text-sm border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#242e6d]/20 focus:border-[#242e6d] outline-none transition bg-slate-50/50 text-slate-800 placeholder-slate-400">
              </div>

              <!-- 5. Date Picker (No Label) -->
              <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400 text-xs sm:text-sm">
                  <i class="fa-solid fa-calendar-days"></i>
                </span>
                <input type="date" id="insp-date" name="date" required min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>"
                  class="w-full pl-10 pr-3.5 py-2.5 sm:py-3 text-xs sm:text-sm border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#242e6d]/20 focus:border-[#242e6d] outline-none transition bg-slate-50/50 text-slate-800 cursor-pointer">
              </div>

              <!-- 6. Preferred Time Slots (Dropdown) -->
              <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-slate-400 text-xs sm:text-sm">
                  <i class="fa-solid fa-clock"></i>
                </span>
                <select id="insp-time" name="preferred_time" required 
                  class="w-full pl-10 pr-9 py-2.5 sm:py-3 text-xs sm:text-sm border border-slate-200 rounded-xl focus:ring-2 focus:ring-[#242e6d]/20 focus:border-[#242e6d] outline-none transition bg-slate-50/50 appearance-none cursor-pointer text-slate-700 font-medium">
                  <option value="" disabled selected>Select Preferred Time Slot</option>
                  <option value="08AM - 12PM">08:00 AM - 12:00 PM (Morning)</option>
                  <option value="12PM - 4PM">12:00 PM - 04:00 PM (Afternoon)</option>
                  <option value="4PM - 8PM">04:00 PM - 08:00 PM (Evening)</option>
                </select>
                <span class="absolute inset-y-0 right-0 flex items-center pr-3.5 pointer-events-none text-slate-400 text-xs">
                  <i class="fa-solid fa-chevron-down"></i>
                </span>
              </div>

              <!-- Submit Button -->
              <div class="pt-1.5">
                <button type="submit" class="w-full text-white font-bold py-3 sm:py-3.5 rounded-xl uppercase tracking-wider text-xs sm:text-sm shadow-md hover:shadow-lg transition active:scale-[0.99] flex items-center justify-center gap-2" style="background-color: #242e6d;">
                  <i class="fa-solid fa-calendar-check"></i>
                  <span>BOOK FREE INSPECTION</span>
                </button>
              </div>

            </form>

          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================== -->
<!-- 2. FREE TYRE CHECKS & SERVICE DETAILS      -->
<!-- ========================================== -->
<section class="py-14 sm:py-18 bg-white border-b border-slate-200">
  <div class="container mx-auto px-4 max-w-7xl">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

      <!-- Left Column: Content & Details -->
      <div class="lg:col-span-7 space-y-5 text-left" data-aos="fade-right" data-aos-duration="600">
        
        <!-- Header Pill & Title Block -->
        <div>
          <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-brand-yellow/20 border border-brand-yellow/40 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-3">
            <i class="fa-solid fa-location-dot text-brand-yellow" aria-hidden="true"></i> Ahmedabad &amp; Gandhinagar
          </span>
          <h2 class="text-3xl md:text-4xl font-medium text-brand-blue font-outfit leading-tight">
            Free Tyre <span class="font-bold">Inspection</span>
          </h2>
          <div class="w-16 h-1 bg-brand-yellow rounded-full mt-3"></div>
        </div>

        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          We realize that you lead a busy life, so we've made a smooth tyre buying and installation experience for you.
        </p>


        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          Tyre hub provides free tyre inspection services to make sure your tyres are running perfectly fine. We can take care of everything related to wear and tear, visual inspection, repairs, wheel balance, and alignment.
        </p>

        <p class="text-slate-600 text-xs sm:text-sm md:text-base leading-relaxed font-normal">
          Tyres should be inspected at least once a month. You can bank upon us our company cares about you and about your tyres.
        </p>

        <!-- Call Action Button -->
        <div class="pt-2 flex flex-wrap items-center gap-3">
          <a href="tel:7575888916" class="btn-primary btn-lg inline-flex items-center gap-2.5 shadow-md hover:shadow-lg">
            <i class="fa-solid fa-phone-volume text-base" aria-hidden="true"></i>
            <span>Call Now: 7575 888 916</span>
          </a>
          <button type="button" onclick="document.getElementById('insp-name').focus(); window.scrollTo({top: 0, behavior: 'smooth'});" class="btn-secondary btn-lg inline-flex items-center gap-2 border border-slate-300">
            <i class="fa-solid fa-calendar-plus text-base"></i>
            <span>Book Slot Above</span>
          </button>
        </div>

      </div>

      <!-- Right Column: Visual Mascot Illustration -->
      <div class="lg:col-span-5 flex items-center justify-center" data-aos="fade-left" data-aos-duration="600">
        <div class="relative group max-w-md">
          <div class="w-64 h-64 rounded-full bg-brand-yellow/15 absolute -inset-2 blur-2xl pointer-events-none"></div>
          <img src="assets/image/Mascot.png" alt="TyreHub Tyre Inspection Specialist Mascot" class="w-full h-auto object-contain relative z-10 drop-shadow-2xl group-hover:scale-105 transition-transform duration-300">
        </div>
      </div>

    </div>

  </div>
</section>



<!-- ========================================== -->
<!-- 4. "HOW IT WORKS" 3-STEP TIMELINE          -->
<!-- ========================================== -->
<section class="py-16 lg:py-20 bg-brand-blue text-white relative overflow-hidden">
  <div class="container mx-auto px-4 max-w-7xl text-center relative z-10">

    <h2 class="text-3xl md:text-4xl font-medium text-white tracking-tight" data-aos="fade-up" data-aos-duration="600">
      How It <span class="text-brand-yellow font-bold">Works</span>
    </h2>
    <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mt-3 mb-12" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100"></div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

      <!-- Step 1 -->
      <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
        <div class="w-22 h-22 sm:w-24 sm:h-24 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl sm:text-3xl mb-4 relative shadow-glow-yellow mx-auto">
          <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
          <span class="absolute -top-1 -right-1 w-8 h-8 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit border-2 border-brand-blue shadow-md">01</span>
        </div>
        <h3 class="text-base font-bold text-white mt-1">Book Free Inspection Slot</h3>
        <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
          Provide your vehicle location and choose your convenient time slot.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
        <div class="w-22 h-22 sm:w-24 sm:h-24 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl sm:text-3xl mb-4 relative shadow-glow-yellow mx-auto">
          <i class="fa-solid fa-magnifying-glass-chart" aria-hidden="true"></i>
          <span class="absolute -top-1 -right-1 w-8 h-8 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit border-2 border-brand-blue shadow-md">02</span>
        </div>
        <h3 class="text-base font-bold text-white mt-1">Certified Safety Inspection</h3>
        <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
          Our certified technicians examine tread depth, air pressure, sidewall damage, and alignment.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="flex flex-col items-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
        <div class="w-22 h-22 sm:w-24 sm:h-24 rounded-full bg-brand-yellow/20 border-2 border-brand-yellow flex items-center justify-center text-brand-yellow text-2xl sm:text-3xl mb-4 relative shadow-glow-yellow mx-auto">
          <svg class="w-7 h-7 sm:w-8 sm:h-8 text-brand-yellow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2l2.4 7.4h7.6l-6.2 4.5 2.4 7.4-6.2-4.5-6.2 4.5 2.4-7.4-6.2-4.5h7.6z"/>
          </svg>
          <span class="absolute -top-1 -right-1 w-8 h-8 rounded-full bg-brand-yellow text-brand-blue font-black text-xs flex items-center justify-center font-outfit border-2 border-brand-blue shadow-md">03</span>
        </div>
        <h3 class="text-base font-bold text-white mt-1">Detailed Report &amp; Advice</h3>
        <p class="text-xs text-slate-300 mt-1 max-w-xs leading-relaxed">
          Receive clear advice on your tyre life, safety warnings, and preventative care tips.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 5. 5-POINT TYRE SAFETY CHECKLIST           -->
<!-- ========================================== -->
<section class="py-14 sm:py-18 bg-slate-50 border-b border-slate-200">
  <div class="container mx-auto px-4 max-w-7xl">
    
    <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-12">
      <span class="inline-block px-3 py-1 rounded-full bg-brand-blue/10 text-brand-blue font-extrabold text-xs uppercase tracking-wider mb-2">
        Comprehensive Protocol
      </span>
      <h2 class="text-3xl md:text-4xl font-medium text-brand-blue mt-1">
        What We Check in <span class="font-bold">Free Tyre Inspection</span>
      </h2>
      <div class="w-16 h-1 bg-brand-yellow mx-auto rounded-full mt-3"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
      
      <!-- Card 1: Tread Depth -->
      <div class="bg-white p-5 sm:p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl bg-blue-50 text-brand-blue flex items-center justify-center text-xl mb-4">
          <i class="fa-solid fa-ruler-vertical"></i>
        </div>
        <h3 class="text-base font-bold text-slate-900 font-outfit mb-2">Tread Depth &amp; Wear Pattern</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Accurate digital measurement of remaining tread depth to ensure wet road grip and detect uneven wear caused by suspension issues.
        </p>
      </div>

      <!-- Card 2: Sidewall & Damage -->
      <div class="bg-white p-5 sm:p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-xl mb-4">
          <i class="fa-solid fa-shield-halved"></i>
        </div>
        <h3 class="text-base font-bold text-slate-900 font-outfit mb-2">Sidewall &amp; Physical Damage</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Thorough visual inspection for sidewall bulges, cuts, cracks, punctures, and foreign metal objects that lead to sudden highway blowouts.
        </p>
      </div>

      <!-- Card 3: Tyre Air Pressure -->
      <div class="bg-white p-5 sm:p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl mb-4">
          <i class="fa-solid fa-gauge-high"></i>
        </div>
        <h3 class="text-base font-bold text-slate-900 font-outfit mb-2">Air Pressure &amp; Valve Health</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Verification against manufacturer PSI specifications. We check valve stems and caps to prevent slow leaks and optimize fuel economy.
        </p>
      </div>

      <!-- Card 4: Wheel Alignment Check -->
      <div class="bg-white p-5 sm:p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-xl mb-4">
          <i class="fa-solid fa-arrows-split-up-and-left"></i>
        </div>
        <h3 class="text-base font-bold text-slate-900 font-outfit mb-2">Wheel Alignment Geometry</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Inspection of camber, caster, and toe angles to prevent vehicle pulling to one side and uneven edge wear on your tyre rubber.
        </p>
      </div>

      <!-- Card 5: Wheel Balance & Vibration -->
      <div class="bg-white p-5 sm:p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-xl mb-4">
          <i class="fa-solid fa-compact-disc"></i>
        </div>
        <h3 class="text-base font-bold text-slate-900 font-outfit mb-2">Wheel Balance &amp; Rim Condition</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Check for rim bends, weight misbalances that trigger steering vibrations at high speeds, and premature suspension wear.
        </p>
      </div>

      <!-- Card 6: Spare Wheel Check -->
      <div class="bg-white p-5 sm:p-6 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-xl mb-4">
          <i class="fa-solid fa-circle-notch"></i>
        </div>
        <h3 class="text-base font-bold text-slate-900 font-outfit mb-2">Stepney / Spare Tyre Check</h3>
        <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
          Ensuring your spare wheel is road-ready with correct inflation pressure and intact tread in case of an unexpected highway emergency.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 6. TYRE & BATTERY BRANDS SLIDER SECTION    -->
<!-- ========================================== -->
<section id="tyre-brands-section" class="py-14 bg-white border-b border-slate-200">
  <div class="container mx-auto px-3">

    <!-- Tyre Brands Header -->
    <div class="text-center mb-8" data-aos="fade-up" data-aos-duration="600">
      <h2 class="text-2xl md:text-3xl font-medium text-brand-blue">
        We Service All <span class="font-bold text-brand-blue">Major Tyre Brands</span>
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
          <img src="assets/image/battery-brands/amaron.webp" alt="Amaron Batteries" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

      <!-- Exide -->
      <div class="w-1/2 sm:w-60">
        <div class="h-20 bg-slate-50 hover:bg-white border border-slate-200 rounded-xl p-3 flex items-center justify-center hover:shadow-md transition">
          <img src="assets/image/battery-brands/exide.webp" alt="Exide Batteries" class="h-10 w-auto max-w-[120px] object-contain">
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ========================================== -->
<!-- 3. NEED TYRE / CALLOUT BANNER              -->
<!-- ========================================== -->
<section class="py-12 sm:py-14 bg-slate-50">
  <div class="container mx-auto px-4 max-w-7xl">
    
    <div class="bg-brand-blueDark text-white p-6 sm:p-8 rounded-3xl flex flex-col md:flex-row items-center justify-between gap-6 shadow-lg border border-white/10" data-aos="fade-up" data-aos-duration="600">
      <div class="space-y-1.5 text-center md:text-left">
        <span class="inline-block px-2.5 py-0.5 rounded bg-brand-yellow text-slate-950 font-black text-[10px] uppercase tracking-wider mb-1">
          Monthly Tyre Safety Routine
        </span>
        <h3 class="text-xl sm:text-2xl font-bold font-outfit text-white">Tyres Should Be Inspected At Least Once a Month</h3>
        <p class="text-slate-200 text-xs sm:text-sm max-w-2xl leading-relaxed">
          You can bank upon us. Our company cares about you and about your tyres. Visit your nearest TyreHub garage or book a free appointment today.
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

<!-- Inline JavaScript for Form Submission -->
<script>
function handleInspectionSubmit(e) {
  e.preventDefault();
  
  const name = document.getElementById('insp-name').value.trim();
  const mobile = document.getElementById('insp-mobile').value.trim();
  const email = document.getElementById('insp-email').value.trim();
  const location = document.getElementById('insp-location').value.trim();
  const date = document.getElementById('insp-date').value;
  const time = document.getElementById('insp-time').value;
  
  const serviceSummary = `Free Tyre Inspection - ${name} | Loc: ${location} | Date: ${date} | Time: ${time}`;
  
  if (typeof openBookingModal === 'function') {
    openBookingModal(serviceSummary);
  } else {
    alert(`Thank you, ${name}! Your Free Tyre Inspection has been booked for ${date} (${time}) at ${location}. Our technician will contact you on ${mobile}.`);
    document.getElementById('inspection-form').reset();
  }
}
</script>

<?php
include 'includes/footer.php';
?>
