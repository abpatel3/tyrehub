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
  <div class="container mx-auto px-4 max-w-6xl">
    
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

<?php
include 'includes/footer.php';
?>
